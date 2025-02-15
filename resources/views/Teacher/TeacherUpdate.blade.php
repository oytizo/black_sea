@extends('master_template.master_template')

@section('content')
<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title"><a href="{{ Route('teacher.view') }}">Teacher</a> </h4>
                    </div>
                    <div class="card-body-- pb-1">
                        <form class="pb-5 m-3" action="{{ Route('teacher.update',$teacher->id) }}" method="POST" encrypt="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="formGroupExampleInput">Teacher Name</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="name" value="{{ $teacher->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Email</label>
                                <input type="email" class="form-control" id="formGroupExampleInput2" name="email" value="{{ $teacher->email }}" required>
                            </div> 
                            
                            <div class="form-group">
                                <label for="formGroupExampleInput">Contact</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="contact" value="{{ $teacher->contact }}" required>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Address</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="address" value="{{ $teacher->address }}" required>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Age</label>
                                <input type="date" class="form-control" id="formGroupExampleInput" name="age" value="{{ $teacher->age }}" required>
                            </div>

                            <fieldset class="form-group pb-5 mb-3">
                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                                    <div class="col-sm-10">
                                    <div class="form-group">
                                            <label class="radio-inline">
                                                <input type="radio" name="gender" value="female" {{ $teacher->gender == 'female' ? 'checked' : '' }} required> Female
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="gender" value="male" {{ $teacher->gender == 'male' ? 'checked' : '' }} required> Male
                                            </label>
                                        </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                            </fieldset>
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