@extends('layouts.dashboard.app')

@section('title', 'Decolux')

@section('content-header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Create Gallery</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/galleries">Galleries</a></li>
                    <li class="breadcrumb-item active">Create Gallery</li>
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
                    <h3 class="card-title">Create Gallery</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('dashboard.galleries.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Gallery Title</label>
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}" id="title">
                        </div>
                        
                        <div class="form-group">
                            <label for="image">Image</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input  type="file"  name="image" class="custom-file-input" id="image">
                                    <label class="custom-file-label" for="image">Choose file</label>
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