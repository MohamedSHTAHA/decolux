@extends('layouts.dashboard.app')

@section('title', 'Decolux')

@section('content-header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">countries</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">countries</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

@section('content')
<section class="content">

    <form action="{{route('dashboard.countries.index')}}" method="get">

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
            <h3 class="card-title">countries</h3>

            <div class="card-tools">

                <span class="badge badge-info right">{{$countries->total()}}</span>
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>

        <div class="card-body p-0">
            @if($countries)

            <table class="table table-striped countries">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 20%">
                            country title
                        </th>
                        <th style="width: 20%">
                            created at
                        </th>


                        <th style="width: 20%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($countries as $country )
                    <tr>
                        <td>
                            {{$country->id }}
                        </td>
                        <td>
                            <a>
                                {{$country->title}}
                            </a>

                        </td>
                        <td>
                            {{$country->created_at}}
                        </td>

                        <td class="country-actions text-right">

                            <a class="btn btn-info btn-sm edit" href="{{ route('dashboard.countries.edit', $country->id) }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                            </a>

                            <form action="{{ route('dashboard.countries.destroy', $country->id) }}" method="post" style="display: inline-block">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>


                    @endforeach



                </tbody>
            </table>
            {{$countries->appends(request()->query())->links()}}
            @else
            <h2>No countries </h2>
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


<script>
    function openImage(th) {
        $('#modal-image .modal-body').html('<img id="image-zoom" width="100%" height="100%" src="' + $(th).attr("src") + '" />');
        $('#modal-image').modal('toggle');
    }
</script>
@endsection