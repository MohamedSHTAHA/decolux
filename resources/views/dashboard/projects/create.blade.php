@extends('layouts.dashboard.app')

@section('title', 'Decolux')

@section('content-header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Create project</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/projects">Projects</a></li>
                    <li class="breadcrumb-item active">Create project</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Create Project</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('dashboard.projects.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Project Name</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="name">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control ckeditor">{{ old('description') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="client">Client</label>
                            <input type="text" class="form-control" id="client" name="client" value="{{ old('client') }}">
                        </div>
                        <div class="form-group">
                            <label for="consultant">Consultant</label>
                            <input type="text" class="form-control" id="consultant" name="consultant" value="{{ old('consultant') }}">
                        </div>
                        <div class="form-group">
                            <label for="contractor">Contractor</label>
                            <input type="text" class="form-control" id="contractor" name="contractor" value="{{ old('contractor') }}">
                        </div>
                        <div class="form-group">
                            <label for="value">Value</label>
                            <input type="number" class="form-control" id="value" name="value" value="{{ old('value') }}">
                        </div>
                        <div class="form-group">
                            <label for="from">From</label>
                            <input type="date" class="form-control" id="from" name="from" value="{{ old('from') }}">
                        </div>
                        <div class="form-group">
                            <label for="to">To</label>
                            <input type="date" class="form-control" id="to" name="to" value="{{ old('to') }}">
                        </div>
                        <div class="form-group">
                            <label for="scope_work">Scope Of Work</label>
                            <textarea name="scope_work" class="form-control ckeditor">{{ old('scope_work') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="images">Images</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input multiple type="file"  name="images[]" class="custom-file-input" id="images">
                                    <label class="custom-file-label" for="images">Choose file</label>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->


        </div>
    </div>
    <!-- /.row -->
</div>
@endsection