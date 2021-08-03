@extends('layouts.dashboard.app')
@section('title', 'Decolux')

@section('content-header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Update Settings</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/settings">Settings</a></li>
                    <li class="breadcrumb-item active">Update Settings</li>
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
                    <h3 class="card-title">Update Settings</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('dashboard.settings.update', $setting->id) }}" method="post" enctype="multipart/form-data">

                    {{ csrf_field() }}
                    {{ method_field('put') }}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ $setting->title }}" id="name">
                        </div>
                        <div class="form-group">
                            <label for="phone">phone</label>
                            <input type="text" class="form-control" name="phone" value="{{ $setting->phone }}" id="phone">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ $setting->email }}" id="email">
                        </div>
                        <div class="form-group">
                            <label for="website">website</label>
                            <input type="text" class="form-control" name="website" value="{{ $setting->website }}" id="website">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address" value="{{ $setting->address }}" id="address">
                        </div>
                        <div class="form-group">
                            <label for="facbook">Facbook</label>
                            <input type="text" class="form-control" name="facbook" value="{{ $setting->facbook }}" id="facbook">
                        </div>

                        <div class="form-group">
                            <label for="twiter">Twiter</label>
                            <input type="text" class="form-control" name="twiter" value="{{ $setting->twiter }}" id="twiter">
                        </div>
                        <div class="form-group">
                            <label for="linkedin">Linkedin</label>
                            <input type="text" class="form-control" name="linkedin" value="{{ $setting->linkedin }}" id="linkedin">
                        </div>
                        <div class="form-group">
                            <label for="instgram">Instgram</label>
                            <input type="text" class="form-control" name="instgram" value="{{ $setting->instgram }}" id="instgram">
                        </div>
                        <div class="form-group">
                            <label for="binterest">Binterest</label>
                            <input type="text" class="form-control" name="binterest" value="{{ $setting->binterest }}" id="binterest">
                        </div>
                        <div class="form-group">
                            <label for="lat">Lat</label>
                            <input type="text" class="form-control" name="lat" value="{{ $setting->lat }}" id="lat">
                        </div>
                        <div class="form-group">
                            <label for="long">Long</label>
                            <input type="text" class="form-control" name="long" value="{{ $setting->long }}" id="long">
                        </div>

                        <div class="form-group">
                            <label for="discpriton">Description</label>
                            <textarea name="discpriton" class="form-control ckeditor">{{ $setting->discpriton }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="images">Images</label>
                            <div class="input-group">
                                    <input type="file" name="logo" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <img src="{{ asset('uploads/logo/'.$setting->logo) }}" style="width: 100px" class="img-thumbnail image-preview" alt="">

                        </div>

                        <div class="form-group">
                            <label for="images">Pdf</label>
                            <div class="input-group">
                                    <input type="file" name="pdf" value="{{ $setting->pdf }}" class="form-control">
                            </div>
                        </div>


                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="web" class="form-check-input" id="web"
                        @if( $setting->web==1 ) checked="1" @endif>

                        <label class="form-check-label" for="web">Web</label>
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
