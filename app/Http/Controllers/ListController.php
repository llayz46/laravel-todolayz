<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskListFormRequest;
use App\Models\Task;
use App\Models\TaskList;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class ListController extends Controller
{
    public function browse()
    {
        $user = Auth::getUser();
        $taskLists = TaskList::where('user_id', $user->id)->get();

        return view('list.browse', compact('taskLists'));
    }

    public function new(): View
    {
        $list = new TaskList();
        return view('list.new', compact('list'));
    }

    public function store(TaskListFormRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $list = new TaskList($data);
        $list->user()->associate(Auth::getUser());
        $list->save();

        return redirect()->route('list.browse')->with('success', 'Task list created successfully');
    }

    public function show(TaskList $taskList, Task $tasks): View
    {
        $tasks = Task::orderBy('completed', 'asc')
            ->orderBy('created_at', 'desc')
            ->where('task_list_id', $taskList->id)->get();

        return view('list.show', [
            'taskList' => $taskList,
            'tasks' => $tasks,
        ]);
    }

    public function edit(TaskList $taskList): View
    {
        return view('list.edit', compact('taskList'));
    }

    public function update(TaskListFormRequest $request, TaskList $taskList): RedirectResponse
    {
        $data = $request->validated();

        $taskList->fill($data);
        $taskList->save();

        return redirect()->route('list.browse')->with('success', 'Task list updated successfully');
    }

    public function destroy(Request $request, TaskList $taskList)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);

        if ($data['name'] !== $taskList->name) {
            return redirect()->back()->with('error', 'Task list name does not match');
        }

        $taskList->delete();

        return redirect()->route('list.browse')->with('success', 'Task list deleted successfully');
    }
}
