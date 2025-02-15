@extends('master_template.master_template')

@section('content')

<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Student</h4>
                        <h4 class="box-link"><a href="{{ Route('student.create') }}">Add Student</a></h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">#SI.</th>
                                        <th>Student Name</th>
                                        <th>Email</th>
                                        <th>Session</th>
                                        <th>Age</th>
                                        <th>Contact</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($students as $key=>$student)
                                    <tr>
                                        <td class="serial">{{ $key+1 }}</td>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>{{ $student->session }}</td>
                                        <td>{{ $student->age }}</td>
                                        <td>{{ $student->contact }}</td>
                                        <td>
                                            <a href="{{ Route('student.edit',$student->id) }}" class="btn-sm btn-primary rounded">Edit</a>
                                            <a href="{{ Route('student.destroy',$student->id) }}" class="btn-sm btn-danger rounded">Delete</a>
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