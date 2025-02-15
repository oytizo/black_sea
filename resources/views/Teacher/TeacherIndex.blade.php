@extends('master_template.master_template')

@section('content')

<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Teacher</h4>
                        <h4 class="box-link"><a href="{{ Route('teacher.create') }}">Add Teacher</a></h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">#SI.</th>
                                        <th>Teacher Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Age</th>
                                        <th>Contact</th>
                                        <th>Address</th>
                                        <th>Gender</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($teachers as $key=>$teacher)
                                    <tr>
                                        <td class="serial">{{ $key+1 }}</td>
                                        <td>{{ $teacher->name }}</td>
                                        <td>{{ $teacher->email }}</td>
                                        <td>{{ $teacher->password }}</td>
                                        <td>{{ $teacher->age }}</td>
                                        <td>{{ $teacher->contact }}</td>
                                        <td>{{ $teacher->address }}</td>
                                        <td>{{ $teacher->gender }}</td>
                                        <td>
                                            <a href="{{ Route('teacher.edit',$teacher->id) }}" class="btn-sm btn-primary rounded">Edit</a>
                                            <a href="{{ Route('teacher.destroy',$teacher->id) }}" class="btn-sm btn-danger rounded">Delete</a>
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