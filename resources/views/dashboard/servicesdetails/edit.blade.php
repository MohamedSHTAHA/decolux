@extends('layouts.dashboard.app')
@section('title', 'Decolux')

@section('content-header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Update services Details</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.servicesdetails.index') }}">services Details</a></li>
                    <li class="breadcrumb-item active">Update services Details</li>
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
                    <h3 class="card-title">Update services Details</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('dashboard.servicesdetails.update', $servicesdetails->id) }}" method="post" enctype="multipart/form-data">

                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <div class="card-body">

                        <div class="form-group">
                            <label>services</label>
                            <select name="services_id" class="form-control">
                                <option value="">all services</option>
                                @foreach ($services as $service)
                                    <option value="{{ $service->id }}" {{ $servicesdetails->services_id == $service->id ? 'selected' : '' }}>{{ $service->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group ">
                            <label>Description</label>
                            <textarea name="description" class="form-control ckeditor">{{ $servicesdetails->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>image</label>
                            <input type="file" name="image" class="form-control image">
                        </div>
                        <div class="form-group">
                            <img src="{{ asset('uploads/servicesdetails_images/'.$servicesdetails->image) }}" style="width: 100px" class="img-thumbnail image-preview" alt="">
                        </div>
                        <fieldset class="form-group">
                            <div class="row">
                              <legend class="col-form-label col-sm-2 pt-0">Fade Types</legend>
                              <div class="col-sm-10">
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="fadetype" id="gridRadios1" @if($servicesdetails->fadetype=='fadeInRight') {{'checked'}}@endif value="fadeInRight" >
                                  <label class="form-check-label" for="gridRadios1">
                                    fade In Right
                                  </label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="radio" name="fadetype" id="gridRadios2"  @if($servicesdetails->fadetype=='fadeInLeft') {{'checked'}}@endif value="fadeInLeft">
                                  <label class="form-check-label" for="gridRadios2">
                                    fade In Left
                                  </label>
                                </div>

                              </div>
                            </div>
                          </fieldset>


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
