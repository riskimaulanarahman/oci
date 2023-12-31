<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Useraccess;

class UseraccessController extends Controller
{

    public function index()
    {
        try {

            $data = Useraccess::all();

            return response()->json(['status' => "show", "message" => $this->getMessage()['show'] , 'data' => $data]);

        } catch (\Exception $e) {

            return response()->json(["status" => "error", "message" => $e->getMessage()]);
        }
    }

    public function store(Request $request)
    {
        try {

            $requestData = $request->all();
            
            // if($request->allowAdd) {
            //     ($request->allowAdd == 'false') ? $requestData['allowAdd'] = 0 : $requestData['allowAdd'] = 1;
            // }
            // if($request->allowEdit) {
            //     ($request->allowEdit == 'false') ? $requestData['allowEdit'] = 0 : $requestData['allowEdit'] = 1;
            // }
            // if($request->allowDelete) {
            //     ($request->allowDelete == 'false') ? $requestData['allowDelete'] = 0 : $requestData['allowDelete'] = 1;
            // }
            // if($request->allowView) {
            //     ($request->allowView == 'false') ? $requestData['allowView'] = 0 : $requestData['allowView'] = 1;
            // }
            
            Useraccess::create($requestData);

            return response()->json(["status" => "success", "message" => $this->getMessage()['store']]);

        } catch (\Exception $e) {

            return response()->json(["status" => "error", "message" => $e->getMessage()]);
        }
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        try {
            
            $requestData = $request->all();

            // if($request->allowAdd) {
            //     ($request->allowAdd == 'false') ? $requestData['allowAdd'] = 0 : $requestData['allowAdd'] = 1;
            // }
            // if($request->allowEdit) {
            //     ($request->allowEdit == 'false') ? $requestData['allowEdit'] = 0 : $requestData['allowEdit'] = 1;
            // }
            // if($request->allowDelete) {
            //     ($request->allowDelete == 'false') ? $requestData['allowDelete'] = 0 : $requestData['allowDelete'] = 1;
            // }
            // if($request->allowView) {
            //     ($request->allowView == 'false') ? $requestData['allowView'] = 0 : $requestData['allowView'] = 1;
            // }
    
            $data = Useraccess::findOrFail($id);
            $data->update($requestData);

            return response()->json(["status" => "success", "message" => $this->getMessage()['update']]);

        } catch (\Exception $e) {

            return response()->json(["status" => "error", "message" => $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        try {
            
            $data = Useraccess::findOrFail($id);
            $data->delete();

            return response()->json(["status" => "success", "message" => $this->getMessage()['destroy']]);

        } catch (\Exception $e) {

            return response()->json(["status" => "error", "message" => $e->getMessage()]);
        }
    }
}
