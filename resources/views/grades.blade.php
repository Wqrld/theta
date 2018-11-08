@extends('master')



@section('content')



<section class="content-header">
  <h1>
    Grades
    <small>Today</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> schoolname</a></li>
    <li class="active">Grades</li>
  </ol>
</section>

<!-- Main content -->
<section class="content container-fluid">
  <div class="box">
         <div class="box-header with-border">
           <h3 class="box-title">Grades</h3>
         </div>
         <!-- /.box-header -->
         <div class="box-body">
           <table class="table table-bordered">
             <tr>
               <th style="width: 10px">#</th>
               <th>End</th>
             </tr>
             <tr>
               <td>Lat</td>
               <td>7<td>

             </tr>
             <tr>
               <td>FR</td>
               <td>8</td>

             </tr>
             <tr>
               <td>EN</td>
               <td>9</td>

             </tr>
             <tr>
               <td>DE</td>
               <td>8</td>

             </tr>
           </table>
         </div>
         <!-- /.box-body -->
         <div class="box-footer clearfix">
           <ul class="pagination pagination-sm no-margin pull-right">
             <li><a href="#">&laquo;</a></li>
             <li><a href="#">P1</a></li>
             <li class="active"><a href="#">P2</a></li>
             <li><a href="#">P3</a></li>
             <li><a href="#">P4</a></li>
             <li><a href="#">&raquo;</a></li>
           </ul>
         </div>
       </div>
       <!-- /.box -->



</section>
@endsection
