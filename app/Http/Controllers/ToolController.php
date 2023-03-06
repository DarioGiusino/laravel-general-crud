<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tool;

class ToolController extends Controller
{
    public function destroy(Tool $tool)
    {
        $tool->delete();
        return to_route("tools.index")->with("delete", "$tool->name è stato eliminato con successo");
    }
}