<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Attendance Entry</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="POST" action="/attendanceData">
                        @csrf
                        <!-- <div class="row">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="first_name" id="first_name" class="form-control input-sm"
                                    placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6">
                            <div class="form-group">
                                <input type="text" name="last_name" id="last_name" class="form-control input-sm"
                                    placeholder="Last Name">
                            </div>
                        </div>
                </div> -->

                        <div class="form-group">
                            <label>Email :</label>
                            @if(Auth::user()->name=='Admin')
                            <input type="email" name="email" id="email" class="form-control input-sm"
                                placeholder="Email Address">
                            @endif
                            @if(Auth::user()->name!='Admin')
                            <input type="email" name="email" id="email" class="form-control input-sm"
                                placeholder="Email Address" value="{{Auth::user()->email}}">
                            @endif

                        </div>
                        <div class="form-group">
                            <label>Date :</label>

                            <input type="date" name="date" id="date" class="form-control input-sm" placeholder="Date">
                        </div>

                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <!-- <input type="password" name="password" id="password" class="form-control input-sm"
                                        placeholder="Password"> -->
                                    <label>Start Time :</label>
                                    <select name="start_time" class="form-control">
                                        <?php
                                        $start_hour = 10;
                                        $end_hour = 22;
                                        $minutes_array = array("15", "30", "45");
                                        for ($i = $start_hour; $i < ($end_hour + 1); $i++) {
                                            $string = $i . ':00';
                                            echo '<option value="' . $string . '">' . $string . '</option>';
                                            if ($i != $end_hour) {
                                                for ($j = 0; $j < sizeof($minutes_array); $j++) {
                                                    $string = $i . ':' . $minutes_array[$j];
                                                    echo '<option value="' . $string . '">' . $string . '</option>';
                                                }
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <!-- <input type="password" name="password_confirmation" id="password_confirmation"
                                        class="form-control input-sm" placeholder="Confirm Password"> -->
                                    <label>End Time :</label>
                                    <select name="end_time" class="form-control">
                                        <?php
                                        $start_hour = 10;
                                        $end_hour = 22;
                                        $minutes_array = array("15", "30", "45");
                                        for ($i = $start_hour; $i < ($end_hour + 1); $i++) {
                                            $string = $i . ':00';
                                            echo '<option value="' . $string . '">' . $string . '</option>';
                                            if ($i != $end_hour) {
                                                for ($j = 0; $j < sizeof($minutes_array); $j++) {
                                                    $string = $i . ':' . $minutes_array[$j];
                                                    echo '<option value="' . $string . '">' . $string . '</option>';
                                                }
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>



                        <input type="submit" value="Submit" class="btn btn-info btn-block">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection