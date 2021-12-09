<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->
@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center">Attendance List</h2>


    <div class="col-md-2">
        <div class="card">
            <a href="{{url('/home')}}">Back</a>
        </div>
    </div>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Date</th>
                <th>Start Time</th>
                <th>End Time</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ date("d-m-Y", strtotime($user->date)) }}</td>
                <td>{{ $user->start_time }}</td>
                <td>{{ $user->end_time }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection