<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index(){

        $date = '2024-07-18';
        $trains = Train::whereDate('orario_di_partenza', $date)->get();

        return view('pages.index', compact('trains'));
    }

}
