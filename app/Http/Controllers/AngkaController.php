<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AngkaModel;
use Illuminate\Routing\Controller;

class AngkaController extends Controller
{
    public function index()
    {
        return view ('home');
    }

    public function store(Request $request)
    {
        $arr = $request->all();
        AngkaModel::setAngka($arr['a'], $arr['b']);
        AngkaModel::cekAngka();
        return view('hasil', ["data" => AngkaModel::getHasil()]);
    }
}
