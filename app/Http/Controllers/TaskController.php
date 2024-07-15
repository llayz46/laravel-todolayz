<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class TaskController extends Controller
{
    public function store(TaskRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $task = new Task($data);
        $task->task_list()->associate($request->taskList);
        $task->save();

        return redirect()->route('list.show', $request->taskList)->with('success', 'Task created successfully');
    }

    public function updateStatus(Request $request): RedirectResponse
    {
        $task = Task::findOrFail($request->task);

        if ($task->completed) {
            $task->update(['completed' => false]);
        } else {
            $task->update(['completed' => true]);
        }

        return redirect()->route('list.show', $request->taskList)->with('success', 'Task status updated successfully');
    }
}
