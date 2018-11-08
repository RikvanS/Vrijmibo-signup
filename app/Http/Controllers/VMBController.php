<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vrijmibo;

class VMBController extends Controller
{
    public function home() {

        $deelnemers = Vrijmibo::all();


        return view('index', compact('deelnemers'));
    }

    public function create() {
        return view('create');
    }

    public function store() {
        $vrijmibo = new Vrijmibo();

        $vrijmibo->naam = request('naam');
        

        $vrijmibo->save();

        return redirect('/');
    }
}
