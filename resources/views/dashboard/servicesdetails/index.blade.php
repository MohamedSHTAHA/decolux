@extends('layouts.dashboard.app')

@section('title', 'Decolux')

@section('content-header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Services Details</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Services Details</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

@section('content')




<section class="content">

    <form action="{{route('dashboard.servicesdetails.index')}}" method="get">

        <div class="form-group">
            <div class="input-group input-group-lg">
                <input type="search" name="search" class="form-control form-control-lg" placeholder="Type your keywords here" value="{{ request()->search }}">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-lg btn-default">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </form>

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Services Details</h3>

            <div class="card-tools">

                    <a href="{{ route('dashboard.servicesdetails.create') }}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Add Services Details</a>

                <span class="badge badge-info right">{{$servicesdetails->total()}}</span>
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>

        <div class="card-body p-0">
            @if ($servicesdetails->count() > 0)


            <table class="table table-striped">

                <thead>
                <tr>
                    <th>#</th>
                    <th>Service</th>
                    <th>description</th>
                    <th>Image</th>
                    <th>action</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($servicesdetails as $index=>$service)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>@if(!empty($service->services)) {{ $service->services->name }}@endif</td>
                        <td>{!! $service->description !!}</td>

                        <td><img src="{{ asset('uploads/servicesdetails_images/'.$service->image) }}" style="width: 100px"  class="img-thumbnail" alt=""></td>
                        <td>

                                <a href="{{ route('dashboard.servicesdetails.edit', $service->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Edit</a>


                                <form action="{{ route('dashboard.servicesdetails.destroy', $service->id) }}" method="post" style="display: inline-block">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                    <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> Delete</button>
                                </form><!-- end of form -->

                        </td>
                    </tr>

                @endforeach
                </tbody>

            </table><!-- end of table -->
            {{$servicesdetails->appends(request()->query())->links()}}
            @else
            <h2>No Services Details</h2>
            @endif
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>

<div class="modal fade" id="modal-image">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->


@endsection
