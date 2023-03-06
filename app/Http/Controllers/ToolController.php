<?php

namespace App\Http\Controllers;

use App\Models\Tool;
use Illuminate\Http\Request;

class ToolController extends Controller
{
    /**
     * Show the form for editing the specified resource.
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
