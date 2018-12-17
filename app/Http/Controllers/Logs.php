<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Log;
use App\Habit;
use App\Http\Resources\LogResource;
use App\Http\Requests\LogRequest;

class Logs extends Controller
{
    public function index()
    {
        return LogResource::collection(Log::all());
    }

    public function store(LogRequest $request, $id)
    {
        $data = $request->only(['date_completed']);

        $data['habit_id'] = $id;

        return new LogResource(Log::create($data));
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
