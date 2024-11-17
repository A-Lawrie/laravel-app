<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car; 

class PostController extends Controller
{
    public function create()
    {
        return view('create_car');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'carName' => 'required|string|max:255',
            'carModel' => 'required|string',
        ]);

        Car::create([
            'carName' => $validated['carName'],
            'carModel' => $validated['carModel'],
        ]);

        return redirect()->route('cars.create')->with('success', 'Car created successfully!');
    }
}
