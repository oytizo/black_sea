@extends('master_template.master_template')

@section('content')
<div class="content pb-0">
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="box-title"><a href="{{ Route('admin.course.view') }}">Course</a> </h4>
                    </div>
                    <div class="card-body-- pb-1">
                        <form class="pb-5 m-3" action="{{ Route('admin.course.update',$course->id) }}" method="POST" encrypt="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="formGroupExampleInput">Course Name</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="name" value="{{ $course->name }}" required>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Course Code</label>
                                <input type="text" class="form-control" id="formGroupExampleInput2" name="code" value="{{ $course->code }}" required>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Fee</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="fee" value="{{ $course->fee }}" required>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput">Duration</label>
                                <input type="text" class="form-control" id="formGroupExampleInput" name="duration" value="{{ $course->duration }}" required>
                            </div>
                            <fieldset class="form-group pb-5 mb-3">
                                <div class="row">
                                    <legend class="col-form-label col-sm-2 pt-0">Course Offer</legend>
                                    <div class="col-sm-10">
                                        <div class="form-group">
                                            <label class="radio-inline">
                                                <input type="radio" name="status" value="1" {{ $course->status == '1' ? 'checked' : '' }} required> Active
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="status" value="0" {{ $course->status == '0' ? 'checked' : '' }} required> Deactive
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