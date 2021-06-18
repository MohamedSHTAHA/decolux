@extends('layouts.dashboard.app')

@section('content')

    

        <section class="content-header">

            <h1> Services Details</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{ route('dashboard.servicesdetails.index') }}"> Services Details</a></li>
                <li class="active">Edit</li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

                <div class="box-header">
                    <h3 class="box-title">Edit</h3>
                </div><!-- end of box header -->

                <div class="box-body">

                    @include('partials._errors')

                    <form action="{{ route('dashboard.servicesdetails.update', $servicesdetails->id) }}" method="post" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('put') }}


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
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> Update</button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->



@endsection
