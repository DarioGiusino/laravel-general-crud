<?php

namespace App\Http\Controllers;

use App\Models\Tool;
use Illuminate\Http\Request;
use SebastianBergmann\GlobalState\Restorer;

class ToolController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tools.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $new_tool = new Tool();
        $new_tool->fill($data);
        $new_tool->save();

        return to_route('tools.index');
    }
}
