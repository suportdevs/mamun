<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServicesModel;

class ServicesController extends Controller
{
    function ServiceIndex()
    {
        return view('Services');
    }

    function getServiceData()
    {
        $result = json_encode(ServicesModel::all());
        return $result;
    }
}
