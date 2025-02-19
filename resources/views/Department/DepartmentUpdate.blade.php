@extends('master_template.master_template')

@section('content')
<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title"><a href="{{ Route('admin.department.view') }}">Department</a> </h4>
                    </div>
                    <div class="card-body-- pb-1">
                        <form class="pb-5 m-3" action="{{ Route('admin.department.update',$department->id) }}" method="POST" encrypt="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="formGroupExampleInput">Department Name</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="name" value="{{ $department->name }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                        </form>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        @if (session('message'))
                        <div class="alert alert-success">
                            <ul>
                                <li>{{ session('message') }}</li>
                            </ul>
                        </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix">

</div>

@endsection