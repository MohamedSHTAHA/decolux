@extends('layouts.dashboard.app')

@section('content')

    <div class="content-wrapper">
        <section class="content-header">
            <h1>News</h1>

            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="{{ route('news.index') }}"> News</a></li>
                <li class="active">Add </li>
            </ol>
        </section>

        <section class="content">

            <div class="box box-primary">

            
                <div class="box-body">

                    @include('partials._errors')

                    <form action="{{ route('news.store') }}" method="post"  enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('post') }}

                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                            </div>
                            
                                <div class="form-group ">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control ckeditor">{{ old('description') }}</textarea>
                                </div>
                         
                        <div class="form-group">
                            <label>@lang('site.image')</label>
                            <input type="file" name="image" class="form-control image">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>Create</button>
                        </div>

                    </form><!-- end of form -->

                </div><!-- end of box body -->

            </div><!-- end of box -->

        </section><!-- end of content -->

    </div><!-- end of content wrapper -->

@endsection
