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
}
