@extends('layouts.dashboard.app')
@section('title', 'Decolux')

@section('content-header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Create About Us settings</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/aboutus">About Us </a></li>
                    <li class="breadcrumb-item active">Create About Us settings</li>
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
                    <h3 class="card-title">Create About Us settings</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('dashboard.aboutus.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Text</label>
                            <input type="text" class="form-control" name="text" value="{{ old('text') }}" id="name">
                        </div>
                     
                        <div class="form-group">
                            <label for="logo">Image</label>
                            <div class="input-group">

                                    <input type="file" name="image" class="form-control">


                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="message1">Message 1</label>
                            <textarea name="message1" class="form-control ckeditor">{{ old('message1') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="message2">Message 2</label>
                            <textarea name="message2" class="form-control ckeditor">{{ old('message2') }}</textarea>
                        </div>
                  
              
                        <div class="form-group">
                            <label for="pdf">About Us Pdf</label>
                            <div class="input-group">

                                    <input type="file" name="pdf" class="form-control">


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
