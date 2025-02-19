@extends('master_template.master_template')

@section('content')
<div class="content pb-0">
            <div class="orders">
               <div class="row">
                  <div class="col-xl-12">
                     <div class="card">
                        <div class="card-body">
                           <h4 class="box-title text-danger">Register </h4>
                        </div>
                        <div class="card-body">
                           <h4 class="box-title"><a href="{{ Route('admin.student.create') }}">Enroll Student</a> </h4>
                        </div>
                        <div class="card-body">
                           <h4 class="box-title"><a href="{{ Route('admin.student.view') }}">Update Student</a> </h4>
                        </div>
                        <div class="card-body">
                           <h4 class="box-title"><a href="{{ Route('admin.teacher.create') }}">Enroll Teacher</a> </h4>
                        </div>
                        <div class="card-body">
                           <h4 class="box-title"><a href="{{ Route('admin.teacher.view') }}">Update Teacher</a> </h4>
                        </div>
                        <div class="card-body">
                           <h4 class="box-title"><a href="{{ Route('admin.course.view') }}">Course</a> </h4>
                        </div>
                        <div class="card-body">
                           <h4 class="box-title"><a href="">Department</a> </h4>
                        </div>
                        <div class="card-body">
                           <h4 class="box-title"><a href="">View Classlist</a> </h4>
                        </div>
                        <div class="card-body">
                           <h4 class="box-title"><a href="">Priot Classlist</a> </h4>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
		  </div>
         <div class="clearfix">

         </div>

         @endsection