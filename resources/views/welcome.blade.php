@extends('master')



@section('content')
<section class="content-header">
  <h1>
    Home page
    <small>Today</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Here</li>
  </ol>
</section>

<!-- Main content -->
<section class="content container-fluid">
  <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Lessons today</span>
                <span class="info-box-number">8</span>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box">
              <span class="info-box-icon bg-red"><i class="ion ion-ios-gear-outline"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">new notes</span>
                <span class="info-box-number">1</span>
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
      <tr class="">
        <td>1.</td>
        <td>English</td>
        <td>105</td>
<td><span class="badge bg-red">HW</span></td>
        <td><span class="badge bg-red"><i class="fa fa-cross"></i></span></td>
      </tr>
      <tr>
        <td>2.</td>
        <td>French</td>
        <td>201</td>
<td></td>
        <td><span class="badge bg-success"><i class="fa fa-checkmark"></i></span></td>
      </tr>
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
