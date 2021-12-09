<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AttendanceController extends Controller
{

    public function index()
    {
        $email = Auth::user()->email;
        if (Auth::user()->name == 'Admin') {
            $users = DB::select('select * from attendances');
        } else {
            $users = DB::select('select * from attendances where email="' . $email . '"');
        }
        //dd($users);
        return view('attendanceviewform', ['users' => $users]);
    }

    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'date' => ['required', 'string', 'date', 'max:255'],
    //         'start_time' => ['required'],
    //         'end_time' => ['required'],
    //     ]);
    // }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    // protected function create(array $data)
    // {
    //     return Attendance::create([
    //         'user_id' => Auth::id(),
    //         'user_name' => Auth::name(),
    //         'email' => $data['email'],
    //         'date' => $data['date'],
    //         'start_time' => $data['start_time'],
    //         'end_time' => $data['end_time'],
    //     ]);
    // }
    public function insert(Request $request)
    {
        //dd(Auth::user()->name, Auth::user()->id);



        $email = $request->input('email');
        $date = $request->input('date');
        $start_time = $request->input('start_time');
        $end_time = $request->input('end_time');
        $data = array("email" => $email, "date" => $date, "start_time" => $start_time, "end_time" => $end_time);
        DB::table('attendances')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/home">Click Here</a> to go back.';
    }
    //

}