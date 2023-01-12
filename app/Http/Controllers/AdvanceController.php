<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'title' => 'Advance',
            'menu' => [
                array(
                    'title' => 'Menus',
                    'routes' => 'root',
                    'submenu' => [
                        array(
                            'title' => 'subMenus',
                            'routes' => 'root',
                        ),
                        array(
                            'title' => 'subMenus 1',
                            'routes' => 'root',
                        )
                    ]
                ),
                array(
                    'title' => 'Menus 1',
                    'routes' => 'root',
                    'submenu' => null
                )
            ]
        );

        return view('master-grid.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
