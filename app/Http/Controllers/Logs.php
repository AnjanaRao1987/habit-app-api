<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Log;
use App\Habit;
use App\Http\Resources\LogResource;
use App\Http\Requests\LogRequest;

class Logs extends Controller
{
    public function index(Habit $habit)
    {
        return LogResource::collection($habit->logs);
    }

    public function store(LogRequest $request, $id)
    {
        $data = $request->only(['date_completed']);

        $data['habit_id'] = $id;

        return new LogResource(Log::create($data));
    }

    public function destroy(Log $log)
    {
        $log->delete();
        return response(null, 204);
    }
}
