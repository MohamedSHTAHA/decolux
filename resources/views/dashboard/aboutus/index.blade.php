@extends('layouts.dashboard.app')

@section('title', 'Decolux')

@section('content-header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">About Us settings</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">About Us settings</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

@section('content')




<section class="content">

    <form action="{{route('dashboard.aboutus.index')}}" method="get">

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
            <h3 class="card-title">About Us settings</h3>

            <div class="card-tools">

                    <a href="{{ route('dashboard.aboutus.create') }}" class="btn btn-primary btn-xs"><i class="fa fa-plus"></i> Add About Us settings</a>

                <span class="badge badge-info right">{{$aboutus->total()}}</span>
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>

        <div class="card-body p-0">
            @if ($aboutus->count() > 0)


            <table class="table table-striped">

                <thead>
                <tr>
                    <th>#</th>
                    <th>Text</th>
                    

                    <th>message1</th>
                    <th>message2</th>
                    <th>Image</th>
                    <th>action</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($aboutus as $index=>$new)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $new->text }}</td>
         

                        <td>{!! $new->message1 !!}</td>
                        <td>{!! $new->message2 !!}</td>
                        <td><img src="{{ asset('uploads/aboutus/'.$new->image) }}" style="width: 100px"  class="img-thumbnail" alt=""></td>

                        <td>

                                <a href="{{ route('dashboard.aboutus.edit', $new->id) }}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Edit</a>


                                <form action="{{ route('dashboard.aboutus.destroy', $new->id) }}" method="post" style="display: inline-block">
                                    {{ csrf_field() }}
                                    {{ method_field('delete') }}
                                    <button type="submit" class="btn btn-danger delete btn-sm"><i class="fa fa-trash"></i> Delete</button>
                                </form><!-- end of form -->

                        </td>
                    </tr>

                @endforeach
                </tbody>

            </table><!-- end of table -->
            {{$aboutus->appends(request()->query())->links()}}
            @else
            <h2>No About Us settings </h2>
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
