<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Train;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::where('departure_date', '>=', Carbon::today()->timezone('Europe/Rome'))->get();
        $data = ['trains' => $trains];
        return view('home', $data);
    }
}
