<?php

namespace App\Http\Controllers;

use App\Models\Tool;
use Illuminate\Http\Request;

class ToolController extends Controller
{
    public function show(string $id)
    {
        $tool = Tool::findOrFail($id);
        return view("tools.show", compact("tool"));
    }
}
