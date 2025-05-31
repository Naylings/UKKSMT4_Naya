<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Repository\Employee\EmployeeRepo;
use App\Repository\People\PeopleRepo;
use App\Repository\UserReference\UserReferenceRepo;
use App\Repository\Users\UsersRepo;
use Illuminate\Http\Request;
use League\CommonMark\Reference\Reference;


class EmployeeController extends Controller
{
    public function __construct(
        protected EmployeeRepo $__repo_employee,
        protected PeopleRepo $__repo_people,
        protected UsersRepo $__repo_users,
        protected UserReferenceRepo $__repo_reference
    ) {}

    public function index(Request $req)
    {
        $employee = $this->__repo_employee->index(request()->all());
        return view('backend.pages.people.employee.table', compact('employee'));
    }

    public function form()
    {
        return view('backend.pages.people.employee.form');
    }

    public function store(Request $req)
    {
        $users  = $this->__repo_users->store(Request()->all());
        $employee = $this->__repo_employee->store(request()->all());
        request()->merge([
            "user_id"        => $users->getKey(),
            "reference_id"   => $employee->getKey(),
            "reference_type" => Employee::class
        ]);
        $people  = $this->__repo_people->store(Request()->all());
        $reference  = $this->__repo_reference->store(Request()->all());

        return redirect()->route('employee');
    }
}
