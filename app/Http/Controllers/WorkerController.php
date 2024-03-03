<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $workers = Worker::all();
        return view('worker.index',compact('workers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('worker.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'location' => 'required|string|max:255',
            'number' => 'required|string|max:11',
            'father_name' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
        ]);

        $request->user()->workers()->create($validated);
        notyf()->addSuccess('Worker created successfully.');
        return redirect()->route('worker.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(Worker $worker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Worker $worker)
    {
        return view('worker.edit',compact('worker'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Worker $worker)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'location' => 'required|string|max:255',
            'number' => 'required|string|max:11',
            'father_name' => 'required|string|max:255',
            'mother_name' => 'required|string|max:255',
        ]);
        $worker->update($validated);
        notyf()->addInfo('Worker information updated successfully.');
        return redirect()->route('worker.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Worker $worker)
    {
        $worker->delete();
        notyf()->addWarning('Worker information deleted.');
        return redirect()->route('worker.index');
    }
}
