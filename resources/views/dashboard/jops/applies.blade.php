@extends('layouts.dashboard.app')

@section('title', 'Decolux')

@section('content-header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">applies</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">applies</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

@section('content')
<section class="content">

    <form action="@if($applies->first()) {{route('dashboard.applies',$applies->first()->jop->id)}} @endif" method="get">

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
            <h3 class="card-title">applies</h3>

            <div class="card-tools">

                <span class="badge badge-info right">{{$applies->total()}}</span>
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>

        <div class="card-body p-0">
            @if($applies)

            <table class="table table-striped applies">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 20%">
                            Title Jop
                        </th>
                        <th style="width: 20%">
                            Name
                        </th>
                        <th style="width: 20%">
                            Email
                        </th>
                        <th style="width: 20%">
                            Phone
                        </th>
                        <th style="width: 20%">
                            Resume
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($applies as $apply )
                    <tr>
                        <td>
                            {{$apply->id }}
                        </td>
                        <td>
                            <a>
                                {{$apply->jop->title}}
                            </a>
                            <br>
                            <small>
                                {{$apply->jop->created_at}}
                            </small>

                        </td>
                        <td>
                            <a>
                                {{$apply->firstname}} &nbsp;&nbsp; {{$apply->lastname}}
                            </a>
                            <br>
                            <small>
                                {{$apply->created_at}}
                            </small>

                        </td>


                        <td>
                            {{$apply->email}}

                        </td>
                        <td>
                            {{$apply->phone}}

                        </td>
                        <td>
                            @if(!empty($apply->getFirstMedia('applies')))
                            <a target="_blank" href="{{$apply->getFirstMediaUrl('applies')}}">Resume</a>
                            @endif

                        </td>


                    </tr>
                    @endforeach



                </tbody>
            </table>
            {{$applies->appends(request()->query())->links()}}
            @else
            <h2>No applies </h2>
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