@extends('layouts.dashboard.app')

@section('title', 'Decolux')

@section('content-header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">jops</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">jops</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

@section('content')
<section class="content">

    <form action="{{route('dashboard.jops.index')}}" method="get">

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
            <h3 class="card-title">jops</h3>

            <div class="card-tools">

                <span class="badge badge-info right">{{$jops->total()}}</span>
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>

        <div class="card-body p-0">
            @if($jops)

            <table class="table table-striped jops">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 20%">
                            Title
                        </th>
                        <th style="width: 20%">
                            Created By
                        </th>
                        <th style="width: 20%">
                            Country
                        </th>
                        <th style="width: 20%">
                            Types
                        </th>
                        <th style="width: 20%">
                            Featured
                        </th>


                        <th style="width: 20%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jops as $jop )
                    <tr>
                        <td>
                            {{$jop->id }}
                        </td>
                        <td>
                            <a>
                                {{$jop->title}}
                            </a>
                            <br>
                            <small>
                                {{$jop->created_at}}
                            </small>

                        </td>
                        <td>
                            {{$jop->user->name}}

                        </td>
                        <td>
                            {{$jop->country->title}}

                        </td>
                        <td>
                            @isset($jop->types)
                            @foreach ($jop->types as $type )
                            {{$type->title }} @if ($jop->types->last()->id != $type->id) / @endif
                            @endforeach
                            @endisset
                        </td>
                        <td>
                            {{$jop->featured ? 'Featured' : 'Not featured'}}

                        </td>
                        <td class="jop-actions text-right">
                            <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-jop{{$jop->id}}">
                                <i class="fas fa-folder">
                                </i>
                            </a>
                            <a class="btn btn-info btn-sm edit" href="{{ route('dashboard.jops.edit', $jop->id) }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                            </a>

                            <form action="{{ route('dashboard.jops.destroy', $jop->id) }}" method="post" style="display: inline-block">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>

                    <div class="modal fade" id="modal-jop{{$jop->id}}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">{{$jop->title}} - #{{$jop->id}}</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    {!! $jop->description !!}
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                    </div>
                    @endforeach



                </tbody>
            </table>
            {{$jops->appends(request()->query())->links()}}
            @else
            <h2>No jops </h2>
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