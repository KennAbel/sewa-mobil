<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', compact('cars'));
    }

    public function create()
    {
        return view('cars.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'car_plate' => 'required|unique:cars',
            'car_model' => 'required',
            'car_status' => 'required',
            'rent_price_per_day' => 'required|numeric',
            'rent_price_per_hour' => 'required|numeric',
        ]);

        Car::create($request->all());
        return redirect()->route('cars.index')->with('success', 'Car added successfully');
    }

    public function show($id)
    {
        $car = Car::findOrFail($id);
        return view('cars.show', compact('car'));
    }

    public function edit($id)
    {
        $car = Car::findOrFail($id);
        return view('cars.edit', compact('car'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'car_plate' => 'required|unique:cars,car_plate,' . $id,
            'car_model' => 'required',
            'car_status' => 'required',
            'rent_price_per_day' => 'required|numeric',
            'rent_price_per_hour' => 'required|numeric',
        ]);

        $car = Car::findOrFail($id);
        $car->update($request->all());
        return redirect()->route('cars.index')->with('success', 'Car updated successfully');
    }

    public function destroy($id)
    {
        Car::findOrFail($id)->delete();
        return redirect()->route('cars.index')->with('success', 'Car deleted successfully');
    }
}