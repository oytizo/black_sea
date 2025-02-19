@extends('master_template.master_template')

@section('content')

<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Course</h4>
                        <h4 class="box-link"><a href="{{ Route('admin.course.create') }}">Add Course</a></h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">#SI.</th>
                                        <th>Course Name</th>
                                        <th>Code</th>
                                        <th>Fee</th>
                                        <th>Duration</th>
                                        <th>Status</th>
                                        <th>Course Modify</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($courses as $key=>$course)
                                    <tr>
                                        <td class="serial">{{ $key+1 }}</td>
                                        <td>{{ $course->name }}</td>
                                        <td>{{ $course->code }}</td>
                                        <td>{{ $course->fee }}</td>
                                        <td>{{ $course->duration }}</td>                                    
                                        <td>{{ $course->status? 'Active':'Deactive' }}</td>                                    
                                        <td>
                                            <a href="{{ Route('admin.course.edit',$course->id) }}" class="btn-sm btn-primary rounded">Edit</a>
                                            <a href="{{ Route('admin.course.destroy',$course->id) }}" class="btn-sm btn-danger rounded">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection