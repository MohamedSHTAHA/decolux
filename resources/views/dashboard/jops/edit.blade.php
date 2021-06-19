@extends('layouts.dashboard.app')

@section('title', 'Decolux')

@section('content-header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit jop</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/jops">jops</a></li>
                    <li class="breadcrumb-item active">Edit jop</li>
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
                    <h3 class="card-title">Edit jop</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('dashboard.jops.update',$jop->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">jop title</label>
                            <input type="text" class="form-control" name="title" value="{{ $jop->title }}" id="title">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" class="form-control ckeditor">{{ $jop->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Types</label>
                            <select name="type_id[]" class="select2bs4" multiple="multiple" data-placeholder="Select a Type" style="width: 100%;">
                                @if (isset($types) && !empty($types))
                                @foreach ($types as $type)
                                <option @if($type->whereIn('id',$jop->types->pluck('id'))->first()) selected @endif value="{{$type->id}}">{{$type->title}}</option>

                                @endforeach
                                @endif
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Countries</label>
                            <select name="country_id" class="select2bs4" data-placeholder="Select a Country" style="width: 100%;">
                                @if (isset($countries) && !empty($countries))
                                @foreach ($countries as $country)
                                <option @if($country->id == $jop->country_id) @endif value="{{$country->id}}">{{$country->title}}</option>
                                @endforeach
                                @endif
                            </select>
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