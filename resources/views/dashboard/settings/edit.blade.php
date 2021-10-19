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
                            <label for="phone">phone 1</label>
                            <input type="text" class="form-control" name="phone" value="{{ $setting->phone }}" id="phone">
                        </div>
                        <div class="form-group">
                            <label for="phone">phone 2</label>
                            <input type="text" class="form-control" name="phone1" value="{{ $setting->phone1 }}" id="phone">
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
                            <label for="images">logo</label>
                            <div class="input-group">
                                    <input type="file" name="logo" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <img src="{{ asset('uploads/logo/'.$setting->logo) }}" style="width: 100px" class="img-thumbnail image-preview" alt="">

                        </div>

                        <div class="form-group">
                            <label for="pdf">Color Charts Pdf</label>
                            <div class="input-group">

                                    <input type="file" value='{{ $setting->pdf }}' name="pdf" class="form-control">


                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ourvision">our vision</label>
                            <textarea name="ourvision" class="form-control ckeditor">{{ $setting->ourvision }}</textarea>
                        </div>
                        
                        
                        
                             <div class="form-group">
                            <label for="images">Ourvision Logo</label>
                            <div class="input-group">
                                    <input type="file" name="Ourvisionlogo" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <img src="{{ asset('uploads/logo/'.$setting->Ourvisionlogo) }}" style="width: 100px" class="img-thumbnail image-preview" alt="">

                        </div>
                        
                             <div class="form-group">
                            <label for="images">Ourvision image</label>
                            <div class="input-group">
                                    <input type="file" name="Ourvisionimage" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <img src="{{ asset('uploads/logo/'.$setting->Ourvisionimage) }}" style="width: 100px" class="img-thumbnail image-preview" alt="">

                        </div>
                        
                        
                        
                        
                        
                        
                        <div class="form-group">
                            <label for="Ourvendorsbrands">Our vendors brands</label>
                            <textarea name="Ourvendorsbrands" class="form-control ckeditor">{{ $setting->Ourvendorsbrands }}</textarea>
                        </div>
                        
                        
                        
                             <div class="form-group">
                            <label for="images">Ourvendorsbrands Logo</label>
                            <div class="input-group">
                                    <input type="file" name="Ourvendorsbrandslogo" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <img src="{{ asset('uploads/logo/'.$setting->Ourvendorsbrandslogo) }}" style="width: 100px" class="img-thumbnail image-preview" alt="">

                        </div>
                        
                             <div class="form-group">
                            <label for="images">Ourvendorsbrands image</label>
                            <div class="input-group">
                                    <input type="file" name="Ourvendorsbrandsimage" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <img src="{{ asset('uploads/logo/'.$setting->Ourvendorsbrandsimage) }}" style="width: 100px" class="img-thumbnail image-preview" alt="">

                        </div>
                        
                        
                            <div class="form-group">
                            <label for="images">What We Offer Logo </label>
                            <div class="input-group">
                                    <input type="file" name="WhatWeOfferlogo" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <img src="{{ asset('uploads/logo/'.$setting->WhatWeOfferlogo) }}" style="width: 100px" class="img-thumbnail image-preview" alt="">

                        </div>
                        
                        
                        
                        

                        <div class="form-group">
                            <label for="images">Pdf</label>
                            <div class="input-group">
                                    <input type="file" name="pdf" value="{{ $setting->pdf }}" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="images">sliderimg1</label>
                            <div class="input-group">
                                    <input type="file" name="sliderimg1" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <img src="{{ asset('uploads/logo/'.$setting->sliderimg1) }}" style="width: 100px" class="img-thumbnail image-preview" alt="">

                        </div>


                        <div class="form-group">
                            <label for="images">slider img2</label>
                            <div class="input-group">
                                    <input type="file" name="sliderimg2" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <img src="{{ asset('uploads/logo/'.$setting->sliderimg2) }}" style="width: 100px" class="img-thumbnail image-preview" alt="">

                        </div>

                        <div class="form-group">
                            <label for="images">footer img</label>
                            <div class="input-group">
                                    <input type="file" name="footerimg" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <img src="{{ asset('uploads/logo/'.$setting->footerimg) }}" style="width: 100px" class="img-thumbnail image-preview" alt="">

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
