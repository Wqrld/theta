@extends('master')



@section('content')



<section class="content-header">
  <h1>
    ELO
    <small>Today</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> schoolname</a></li>
    <li class="active">ELO</li>
  </ol>
</section>

<!-- Main content -->
<section class="content container-fluid">
<div class="box">
  <div class="box-header with-border">
    <h3 class="box-title">Documents and links</h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table class="table table-bordered">
      <tr>
        <th style="width: 10px">#</th>
        <th>Lesson</th>
        <th>Location</th>


      </tr>

@foreach ($schedule as $lesson)
<tr class="">
 <td>{{ $lesson->nr}}.</td>
  <td>{{ $lesson->Lesson}}</td>
  <td>Some url</td>
</tr>

      @endforeach


    </table>
  </div>
  <!-- /.box-body -->

</div>



</section>
@endsection
