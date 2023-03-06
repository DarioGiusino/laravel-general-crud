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

    public function destroy(Tool $tool)
    {
        $tool->delete();
        return to_route("tools.index")->with("delete", "$tool->name è stato eliminato con successo");
    }
}