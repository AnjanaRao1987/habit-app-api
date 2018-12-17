<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Habit;
use App\Http\Requests\HabitRequest;
use App\Http\Resources\HabitResource;
use App\Http\Resources\HabitListResource;

class Habits extends Controller
{
    public function index()
    {
        return HabitListResource::collection(Habit::all());
    }

    public function store(HabitRequest $request)
    {
        $data = $request->only(['name', 'category', 'description', 'frequency', 'period', 'motivation']);

        return new HabitResource(Habit::create($data));
    }

    public function show(Habit $habit)
    {
        return new HabitResource($habit);
    }

    public function update(HabitRequest $request, Habit $habit)
    {
        $data = $request->only(['name', 'category', 'description', 'frequency', 'period', 'motivation']);

        $habit->fill($data)->save();

        return new HabitResource($habit);
    }

    public function destroy(Habit $habit)
    {
        $habit->delete();
        return response(null, 204);
    }
}
