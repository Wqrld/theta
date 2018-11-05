@extends('master')



@section('content')



<section class="content-header">
  <h1>
    Home page
    <small>Today</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> schoolname</a></li>
    <li class="active">Home</li>
  </ol>
</section>

<!-- Main content -->
<section class="content container-fluid">
  <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-aqua"><i class="fa fa-calendar"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Lessons today</span>
                <span class="info-box-number">{{sizeof($schedule)}}</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-red"><i class="fa fa-list-ol"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">new notes</span>
                <span class="info-box-number">1</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="box box-warning">
                      <div class="box-header with-border">
                        <h3 class="box-title">News</h3>
                      </div>
                      <div class="box-body">
                        You can now buy tickets for the christmas party.
                      </div>
                    </div>
                  </div>



</div>
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Lessons</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table class="table table-bordered">
      <tr>
        <th style="width: 10px">#</th>
        <th>Lesson</th>
        <th>Location</th>
        <th style="width: 20px">Homework</th>
        <th style="width: 10px">Attended?</th>

      </tr>

@foreach ($schedule as $lesson)
<tr class="">
 <td>{{ $lesson->nr}}.</td>
  <td>{{ $lesson->Lesson}}</td>
  <td>{{ $lesson->Location}}</td>
<td>
@if ($lesson->Homework == "HW")
  <span class="badge bg-red">HW</span>
@elseif ($lesson->Homework == "HW-Finished")
<span class="badge bg-green">HW</span>
@endif
</td>
  <td>
@if ($lesson->Attended == "false")
    <span class="badge bg-red"><i class="fa fa-times"></i></span>
@elseif ($lesson->Attended == "true")
<span class="badge bg-green"><i class="fa fa-check"></i></span>
@endif
  </td>
</tr>

      @endforeach


    </table>
  </div>
  <!-- /.box-body -->
  <div class="box-footer clearfix">
    <ul class="pagination pagination-sm no-margin pull-right">
      <li><a href="#">tomorrow</a></li>
    </ul>
  </div>
</div>



</section>
@endsection
