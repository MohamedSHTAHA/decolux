@extends('layouts.dashboard.app')

@section('title', 'Decolux')

@section('content-header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Create jop</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/jops">jops</a></li>
                    <li class="breadcrumb-item active">Create jop</li>
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
                    <h3 class="card-title">Create jop</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('dashboard.jops.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}" id="title">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control ckeditor">{{ old('description') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Types</label>
                            <select name="type_id[]" class="select2bs4" multiple="multiple" data-placeholder="Select a Type" style="width: 100%;">
                                @if (isset($types) && !empty($types))
                                @foreach ($types as $type)
                                <option value="{{$type->id}}">{{$type->title}}</option>

                                @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Countries</label>
                            <select name="country_id" class="select2bs4" data-placeholder="Select a Country" style="width: 100%;">
                                @if (isset($countries) && !empty($countries))
                                @foreach ($countries as $country)
                                <option value="{{$country->id}}">{{$country->title}}</option>

                                @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" name="featured" value="1" class="form-check-input" id="featured">
                            <label class="form-check-label" for="featured">Featured</label>
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