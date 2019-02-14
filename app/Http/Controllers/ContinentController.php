<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ContinentController extends Controller
{
    public function Europe()
    {
        $countries = DB::select("SELECT * FROM `Country` WHERE `Continent` = ?", ['Europe']);

        $countries_view = view('/continents/europe', [
            "countries" => $countries
        ]);

        return $countries_view;
    }
}