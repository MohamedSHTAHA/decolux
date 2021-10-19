@extends('layouts.dashboard.app')
@section('title', 'Decolux')

@section('content-header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Create Settings</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/settings">Settings</a></li>
                    <li class="breadcrumb-item active">Create Settings</li>
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
                    <h3 class="card-title">Create Settings</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{route('dashboard.settings.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}" id="name">
                        </div>
                        <div class="form-group">
                            <label for="phone">phone 1</label>
                            <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" id="phone">
                        </div>
                        <div class="form-group">
                            <label for="phone">phone 2</label>
                            <input type="text" class="form-control" name="phone1" value="{{ old('phone') }}" id="phone1">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email">
                        </div>
                        <div class="form-group">
                            <label for="website">website</label>
                            <input type="text" class="form-control" name="website" value="{{ old('website') }}" id="website">
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" name="address" value="{{ old('address') }}" id="address">
                        </div>
                        <div class="form-group">
                            <label for="facbook">Facbook</label>
                            <input type="text" class="form-control" name="facbook" value="{{ old('facbook') }}" id="facbook">
                        </div>

                        <div class="form-group">
                            <label for="twiter">Twiter</label>
                            <input type="text" class="form-control" name="twiter" value="{{ old('twiter') }}" id="twiter">
                        </div>
                        <div class="form-group">
                            <label for="linkedin">Linkedin</label>
                            <input type="text" class="form-control" name="linkedin" value="{{ old('linkedin') }}" id="linkedin">
                        </div>
                        <div class="form-group">
                            <label for="instgram">Instgram</label>
                            <input type="text" class="form-control" name="instgram" value="{{ old('instgram') }}" id="instgram">
                        </div>
                        <div class="form-group">
                            <label for="binterest">Binterest</label>
                            <input type="text" class="form-control" name="binterest" value="{{ old('binterest') }}" id="binterest">
                        </div>
                        <div class="form-group">
                            <label for="lat">Lat</label>
                            <input type="text" class="form-control" name="lat" value="{{ old('lat') }}" id="lat">
                        </div>
                        <div class="form-group">
                            <label for="long">Long</label>
                            <input type="text" class="form-control" name="long" value="{{ old('long') }}" id="long">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="discpriton" class="form-control ckeditor">{{ old('discpriton') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="logo">Logo</label>
                            <div class="input-group">

                                    <input type="file" name="logo" class="form-control">


                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pdf">Color Charts Pdf</label>
                            <div class="input-group">

                                    <input type="file" name="pdf" class="form-control">


                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ourvision">our vision</label>
                            <textarea name="ourvision" class="form-control ckeditor">{{ old('ourvision') }}</textarea>
                        </div>
                           <div class="form-group">
                            <label for="logo">Ourvision Logo</label>
                            <div class="input-group">

                                    <input type="file" name="Ourvisionlogo" class="form-control">


                            </div>
                        </div>
                        
                           <div class="form-group">
                            <label for="logo">Ourvision image</label>
                            <div class="input-group">

                                    <input type="file" name="Ourvisionimage" class="form-control">


                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="Ourvendorsbrands">Our vendors brands</label>
                            <textarea name="Ourvendorsbrands" class="form-control ckeditor">{{ old('Ourvendorsbrands') }}</textarea>
                        </div>
                        
                          <div class="form-group">
                            <label for="logo">Ourvendorsbrands Logo</label>
                            <div class="input-group">

                                    <input type="file" name="Ourvendorsbrandslogo" class="form-control">


                            </div>
                        </div>
                        
                           <div class="form-group">
                            <label for="logo">Ourvendorsbrands image</label>
                            <div class="input-group">

                                    <input type="file" name="Ourvendorsbrandsimage" class="form-control">


                            </div>
                        </div>
                        
                        
                           <div class="form-group">
                            <label for="logo">What We Offer Logo</label>
                            <div class="input-group">

                                    <input type="file" name="WhatWeOfferlogo" class="form-control">


                            </div>
                        </div>
                        
                        
                  
                        <div class="form-group">
                            <label for="sliderimg1">slider image1</label>
                            <div class="input-group">

                                    <input type="file" name="sliderimg1" class="form-control">


                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sliderimg2">slider image2</label>
                            <div class="input-group">

                                    <input type="file" name="sliderimg2" class="form-control">


                            </div>
                        </div>
                        <div class="form-group">
                            <label for="footerimg">footer image</label>
                            <div class="input-group">

                                    <input type="file" name="footerimg" class="form-control">


                            </div>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" name="web" class="form-check-input" id="web">
                            <label class="form-check-label" for="web">Web</label>
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
