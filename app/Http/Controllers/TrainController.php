<?php

namespace App\Http\Controllers;

use App\Models\Train;

use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        $title = 'Treni';
        return view('trains', compact('trains', 'title'));
    }
    public function detail($id)
    {
        $train = Train::find($id);
        $title = 'Treno';
        return view('train_detail', compact('train', 'title'));
    }
}