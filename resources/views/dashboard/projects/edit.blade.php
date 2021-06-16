@extends('layouts.dashboard.app')

@section('title', 'Decolux')

@section('content-header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit project</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/projects">Projects</a></li>
                    <li class="breadcrumb-item active">Edit project</li>
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
                    <h3 class="card-title">Edit Project</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('dashboard.projects.update',$project->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Project Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $project->name }}" id="name">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control ckeditor">{{ $project->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="client">Client</label>
                            <input type="text" class="form-control" id="client" name="client" value="{{ $project->client }}">
                        </div>
                        <div class="form-group">
                            <label for="consultant">Consultant</label>
                            <input type="text" class="form-control" id="consultant" name="consultant" value="{{ $project->consultant }}">
                        </div>
                        <div class="form-group">
                            <label for="contractor">Contractor</label>
                            <input type="text" class="form-control" id="contractor" name="contractor" value="{{ $project->contractor }}">
                        </div>
                        <div class="form-group">
                            <label for="value">Value</label>
                            <input type="number" class="form-control" id="value" name="value" value="{{ $project->value }}">
                        </div>
                        <div class="form-group">
                            <label for="from">From</label>
                            <input type="date" class="form-control" id="from" name="from" value="{{ $project->from }}">
                        </div>
                        <div class="form-group">
                            <label for="to">To</label>
                            <input type="date" class="form-control" id="to" name="to" value="{{ $project->to }}">
                        </div>
                        <div class="form-group">
                            <label for="scope_work">Scope Of Work</label>
                            <textarea name="scope_work" class="form-control ckeditor">{{ $project->scope_work }}</textarea>
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