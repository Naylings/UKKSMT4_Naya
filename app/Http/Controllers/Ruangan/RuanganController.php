<?php

namespace App\Http\Controllers\Ruangan;

use App\Http\Controllers\Controller;
use App\Repository\Employee\EmployeeRepo;
use App\Repository\Ruangan\EmployeeHasRoomRepo;
use App\Repository\Ruangan\RuanganRepo;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function __construct(
        protected RuanganRepo $__repo_ruangan,
        protected EmployeeHasRoomRepo $__repo_employeeroom,
        protected EmployeeRepo $__repo_employee,
    ) {}

    public function index(Request $req)
    {
        $rooms = $this->__repo_ruangan->index(request()->all());
        return view('backend.pages.room_manajement.table', compact('rooms'));
    }

    public function form()
    {
        return view('backend.pages.room_manajement.form');
    }

    public function store(Request $req)
    {
        $rooms  = $this->__repo_ruangan->store(Request()->all());
        return redirect()->route('room');
    }

    public function employeeToRoom(Request $req)
    {
        $this->__repo_employeeroom->store(Request()->all());
        return redirect()->route('room');
    }

    public function viewEmployeeToRoom(Request $req)
    {
        $employee = $this->__repo_employee->index(request()->all());
        return view('backend.pages.room_manajement.choose_employee',compact('employee'));
    }
}
