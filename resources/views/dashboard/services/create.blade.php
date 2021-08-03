@extends('layouts.dashboard.app')
@section('title', 'Decolux')

@section('content-header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Create Services</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/services">Services</a></li>
                    <li class="breadcrumb-item active">Create Services</li>
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
                    <h3 class="card-title">Create Services</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('dashboard.services.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="card-body">
                    <div class="form-group">
                            <label for="name">Menue Name</label>
                            <input type="text" class="form-control" name="menue_name" value="{{ old('menue_name') }}" id="name">
                        </div>

                        <div class="form-group">
                            <label for="name">Title</label>
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="name">
                        </div>




                        <div class="form-group">
                            <label for="images">Images</label>
                            <div class="input-group">

                                    <input type="file" name="image" class="form-control">


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
