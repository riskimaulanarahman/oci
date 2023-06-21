<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use App\Models\SideMenu;
use App\Models\Sequence;
use App\Models\Useraccess;
use Illuminate\Http\Request;

class GeneratemenuController extends Controller
{

    public function index($route)
    {
        // return $route;
        // $checksidemenu = SideMenu::where('route', $route)->count();

        // if($checksidemenu > 0) {
            $sidemenu = SideMenu::select(['id', 'title', 'icon_id', 'sequence_id', 'parent_id', 'is_active', 'is_admin'])
            ->where('route', $route)
            ->first();
        // } else {
        //     $sidemenu = SideMenu::select(['id', 'title', 'icon_id', 'sequence_id', 'parent_id', 'is_active', 'is_admin'])
        //     ->where('route', 'api')
        //     ->first(); //api
        // }

            $sequence = Sequence::select(['title', 'is_active'])
            ->where('id', $sidemenu->sequence_id)
            ->first();
            $icon = Icon::select('name')->where('id', $sidemenu->icon_id)->first();
            $menu = array();
            // Check active menu or sequence
            if ($sequence->is_active || $sidemenu->is_active) {

                $menu = array(
                    'icon' => $icon->name,
                    'module' => $sequence->title,
                    'title' => $sidemenu->title,
                    'menu' => array()
                );
                
            }
            // secondary menu queries
            $secondary_menu = Sidemenu::select(['id', 'icon_id', 'title', 'route'])->whereRaw('parent_id like ?', [$sidemenu->id])->get();
            // check secondary menu have value
            if (count($secondary_menu) > 0) {
                // Get secondary menu
                foreach ($secondary_menu as $key => $item_menu) {
                    $icon_menu = Icon::select('name')->where('id', $item_menu->icon_id)->first();

                    // push array in to menu
                    array_push($menu['menu'], array(
                        'icon' => $icon_menu->name,
                        'title' => $item_menu->title,
                        'route' => $item_menu->route,
                        'submenu' => array(),
                        'data' => null
                    ));

                    // submenus queries
                    $submenu = Sidemenu::select(['id', 'icon_id', 'title', 'route'])->whereRaw('parent_id like ? and is_secondary_menu like 1', [$item_menu->id])->get();
                    // check have submenu item
                    if (count($submenu) > 0) {
                        // get submenu
                        foreach ($submenu as $item_submenu) {
                            $icon_submenu = Icon::select('name')->where('id', $item_submenu->icon_id)->first();
                            // push array into sub menu
                            array_push(
                                $menu['menu'][$key]['submenu'],
                                array(
                                    'icon' => $icon_submenu->name,
                                    'title' => $item_submenu->title,
                                    'route' => $item_submenu->route,
                                    'data' => null

                                )
                            );
                        }
                    } else {
                        $menu['menu'][$key]['submenu'] = null;
                    }
                }
            };
            // if($menu['title'] == 'api')
            // return false;
            // dd($menu);
            // return view
            $viewGrid = view('grid.index')->with('data', $menu);
            if(isset($this->getAuth()->isAdmin)) {
                if($this->getAuth()->isAdmin == 1) {
                    return $viewGrid;
                } else if ($this->getAuth()->isAdmin == 0) {
                    if($sidemenu->is_admin == 0){
                        return $viewGrid;
                    } else {
                        $checkaccess = Useraccess::join('side_menus','tbl_useraccess.module_id','side_menus.modules')
                        ->where('employee_id',$this->getAuth()->id)
                        ->where('allowView',true)
                        ->get();
                        if($checkaccess) {
                            foreach ($checkaccess as $key) {
                                if($key->route == $route) {
                                    return $viewGrid;
                                }
                            }
                        }
                    }
                    return view('errors.401');

                } 
            } else {
                return redirect('/');
            }

        // }


    }
}
