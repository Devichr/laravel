<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\DB;
    use App\Http\Controllers\Controller;
    use App\Models\user;
    use App\Models\Student;

    class StudentController extends Controller
    {
        public function index()
        {
            $users = DB::table('users')->get();

            return view('students.index', ['users' => $users]);

        }


    }
