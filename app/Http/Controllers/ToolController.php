<?php

namespace App\Http\Controllers;

use App\Models\Tool;
use Illuminate\Http\Request;

class ToolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tools = Tool::all();
        return view('tools.index', compact('tools'));
    }
    public function show(string $id)
    {
        $tool = Tool::findOrFail($id);
        return view("tools.show", compact("tool"));
    }

    public function destroy(Tool $tool)
    {
        $tool->delete();
        return to_route("tools.index");
    }

    /* Show the form for editing the specified resource.
     */
    public function edit(Tool $tool)
    {
        return view('tools.edit', compact('tool'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tool $tool)
    {
        $data = $request->all();
        $tool->fill($data);
        $tool->save();
        return to_route('tools.show', $tool->id);
    }
}
