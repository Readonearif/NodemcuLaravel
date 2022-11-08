<?php

namespace App\Http\Controllers;

use App\Models\DataModel;
use Illuminate\Http\Request;

class DataController extends Controller
{
    //
    function index()
    {
        $data = DataModel::all();
        return $data;
    }

    public function store(Request $request)
    {
        $data = DataModel::create([
            "data_sensor" => $request->input('sensor')
        ]);

        if ($data) {
            return ["message" => "sucess!!"];
            # code...
        }
        return ["message" => "failed!!"];
    }
}
