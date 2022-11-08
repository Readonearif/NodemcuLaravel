<?php
// R Arif Firmansah
namespace App\Http\Controllers;

use App\Models\ServeroomModel;
use Illuminate\Http\Request;

class ServeroomController extends Controller
{
    //
    function index()
    {
        $data = ServeroomModel::all();
        return $data;
    }

    public function store(Request $request)
    {
        $data = ServeroomModel::create([
            "temperature" => $request->input('temperature'),
            "altitude" => $request->input('altitude'),
            "pressure" => $request->input('pressure')
        ]);
        if ($data) {
            return ["message" => "sucess!!"];
        }
        return ["message" => "failed!!"];
    }
}
