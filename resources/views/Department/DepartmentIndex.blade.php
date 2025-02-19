@extends('master_template.master_template')

@section('content')

<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title">Department</h4>
                        <h4 class="box-link"><a href="{{ Route('admin.department.create') }}">Add Department</a></h4>
                    </div>
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th class="serial">#SI.</th>
                                        <th>Department Name</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($departments as $key=>$department)
                                    <tr>
                                        <td class="serial">{{ $key+1 }}</td>
                                        <td>{{ $department->name }}</td>
                                        <td>
                                            <a href="{{ Route('admin.department.edit',$department->id) }}" class="btn-sm btn-primary rounded">Edit</a>
                                            <a href="{{ Route('admin.department.destroy',$department->id) }}" class="btn-sm btn-danger rounded">Delete</a>
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