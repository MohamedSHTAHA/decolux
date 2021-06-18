@extends('layouts.dashboard.app')

@section('title', 'Decolux')

@section('content-header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">services</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">services</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

@section('content')


    <section class="content">

        <div class="box box-primary">

            <div class="box-header with-border">

                <h3 class="box-title" style="margin-bottom: 15px">services <small>{{ $services->total() }}</small></h3>

                <form action="{{ route('dashboard.services.index') }}" method="get">

                    <div class="row">

                        <div class="col-md-4">
                            <input type="text" name="search" class="form-control" placeholder="Search" value="{{ request()->search }}">
                        </div>

                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Search</button>

                                <a href="{{ route('dashboard.services.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i> Add</a>

                        </div>

                    </div>
                </form><!-- end of form -->

            </div><!-- end of box header -->

            <div class="box-body">

                @if ($services->count() > 0)

                    <table class="table table-hover">

                        <thead>
                        <tr>
                            <th>#</th>
                            <th>user</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($services as $index=>$service)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $service->users->name }}</td>
                                <td>{{ $service->name }}</td>

                                <td><img src="{{ asset('uploads/services_images/'.$service->image) }}" style="width: 100px"  class="img-thumbnail" alt=""></td>
                                <td>

                                        <a href="{{ route('dashboard.services.edit', $service->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Edit</a>


                                        <form action="{{ route('dashboard.services.destroy', $service->id) }}" method="post" style="display: inline-block">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> Delete</button>
                                        </form><!-- end of form -->

                                </td>
                            </tr>

                        @endforeach
                        </tbody>

                    </table><!-- end of table -->

                    {{ $services->appends(request()->query())->links() }}

                @else

                    <h2>No Data Found</h2>

                @endif

            </div><!-- end of box body -->


        </div><!-- end of box -->

    </section><!-- end of content -->


@endsection
