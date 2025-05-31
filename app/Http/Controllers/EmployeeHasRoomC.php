<?php

namespace App\Http\Controllers;

use App\Models\EmployeeHasRoom;
use Illuminate\Http\Request;

class EmployeeHasRoomC extends Controller
{
    public function __construct(
        protected EmployeeHasRoom $__repo_employeehasroom
    ) {}

    public function index(Request $req)
    {
        $room = $this->__repo_employeehasroom->index(request()->all());
        return view('view masing masing', compact('room'));
    }

    public function store(Request $req)
    {
        $room = $this->__repo_employeehasroom->store(request()->all());
        return redirect()->route('room');
    }
}
