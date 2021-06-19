@extends('layouts.dashboard.app')

@section('title', 'Decolux')

@section('content-header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">galleries</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">galleries</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

@section('content')
<section class="content">

    <form action="{{route('dashboard.galleries.index')}}" method="get">

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
            <h3 class="card-title">galleries</h3>

            <div class="card-tools">

                <span class="badge badge-info right">{{$galleries->total()}}</span>
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>

        <div class="card-body p-0">
            @if($galleries)

            <table class="table table-striped galleries">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 20%">
                            gallery title
                        </th>
                        <th style="width: 30%">
                            Image
                        </th>
                       

                        <th style="width: 20%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($galleries as $gallery )
                    <tr>
                        <td>
                            {{$gallery->id }}
                        </td>
                        <td>
                            <a>
                                {{$gallery->title}}
                            </a>
                            <br>
                            <small>
                                {{$gallery->created_at}}
                            </small>
                        </td>
                        <td>
                            <ul class="list-inline">

                                @if(!empty($gallery->getFirstMedia('galleries')))
                                <li class="list-inline-item">
                                    <img width="100px" height="100px" onclick="openImage(this)" class="table-avatar" src="{{$gallery->getFirstMediaUrl('galleries')}}">
                                </li>
                                @endif

                            </ul>
                        </td>
                     

                        <td class="gallery-actions text-right">
                           
                            <a class="btn btn-info btn-sm edit" href="{{ route('dashboard.galleries.edit', $gallery->id) }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                            </a>

                            <form action="{{ route('dashboard.galleries.destroy', $gallery->id) }}" method="post" style="display: inline-block">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>

                  
                    @endforeach



                </tbody>
            </table>
            {{$galleries->appends(request()->query())->links()}}
            @else
            <h2>No galleries </h2>
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