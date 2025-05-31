<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Repository\People\PeopleRepo;
use App\Repository\Student\StudentRepo;
use App\Repository\UserReference\UserReferenceRepo;
use App\Repository\Users\UsersRepo;
use Illuminate\Http\Request;
use League\CommonMark\Reference\Reference;

class StudentController extends Controller
{
    public function __construct(
        protected StudentRepo $__repo_student,
        protected UserReferenceRepo $__repo_reference,
        protected UsersRepo $__repo_users,
        protected PeopleRepo $__repo_people
    ) {}

    public function index(Request $req)
    {
        $student = $this->__repo_student->index(request()->all());
        return view('backend.pages.people.student.table', compact('student'));
    }

    public function form()
    {
        return view('backend.pages.people.student.form');
    }

    public function store(Request $req)
    {

        $users  = $this->__repo_users->store(Request()->all());
        $student = $this->__repo_student->store(request()->all());
        request()->merge([
            "user_id"        => $users->getKey(),
            "reference_id"   => $student->getKey(),
            "reference_type" => Student::class
        ]);
        $people  = $this->__repo_people->store(Request()->all());
        $reference  = $this->__repo_reference->store(Request()->all());

        return redirect()->route('student');
    }
}
