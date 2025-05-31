<?php

namespace App\Http\Controllers;

use App\Repository\Ruangan\EmployeeHasRoomRepo;
use Illuminate\Http\Request;

class EmployeeHasRoomController extends Controller
{

    public function __construct(
        protected EmployeeHasRoomRepo $__repo_employeehasroom,
    ) {}

    public function index(Request $req)
    {
        $employeehasroom = $this->__repo_employeehasroom->index(request()->all());
        return view('backend.pages.room_manajement.table', compact('employeehasroom'));
    }

    public function store(Request $req)
    {

        $employeehasroom  = $this->__repo_employeehasroom->store(Request()->all());

        return redirect()->route('ruangan');
}}
