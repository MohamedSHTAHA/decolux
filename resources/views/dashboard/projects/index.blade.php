@extends('layouts.dashboard.app')

@section('title', 'Decolux')

@section('content-header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Projects</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">Projects</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

@section('content')
<section class="content">

    <form action="{{route('dashboard.projects.index')}}" method="get">

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
            <h3 class="card-title">Projects</h3>

            <div class="card-tools">

                <span class="badge badge-info right">{{$projects->total()}}</span>
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>

        <div class="card-body p-0">
            @if($projects)

            <table class="table table-striped projects">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 20%">
                            Project Name
                        </th>
                        <th style="width: 30%">
                            Images
                        </th>
                        <!-- <th>
                            client

                        </th>
                       <th style="width: 8%" class="text-center">
                            Description
                        </th>
                        <th style="width: 8%" class="text-center">
                            consultant
                        </th>
                        <th style="width: 8%" class="text-center">
                            contractor
                        </th>
                        <th style="width: 8%" class="text-center">
                            value
                        </th>
                        <th style="width: 8%" class="text-center">
                            Scope Of Work
                        </th>-->
                        <th style="width: 8%" class="text-center">
                            from - to
                        </th>


                        <th style="width: 20%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project )
                    <tr>
                        <td>
                            {{$project->id }}
                        </td>
                        <td>
                            <a>
                                {{$project->name}}
                            </a>
                            <br>
                            <small>
                                {{$project->created_at}}
                            </small>
                        </td>
                        <td>
                            <ul class="list-inline">

                                @if(!empty($project->getMedia('projects')))
                                @foreach ($project->getMedia('projects') as $media )
                                <li class="list-inline-item">
                                    <img onclick="openImage(this)" class="table-avatar" src="{{$media->getFullUrl()}}">
                                </li>
                                @endforeach
                                @endif

                            </ul>
                        </td>
                        <!--<td>
                            {{$project->client }}
                        </td>
                       <td>
                            {{$project->description }}
                        </td>
                        <td>
                            {{$project->consultant }}
                        </td>
                        <td>
                            {{$project->contractor }}
                        </td>
                        <td>
                            {{$project->value }}
                        </td>
                        
                        <td>
                            {{$project->scope_work }}
                        </td>-->
                        <td>
                            {{$project->from }}<br>{{$project->to }}
                        </td>

                        <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-project{{$project->id}}">
                                <i class="fas fa-folder">
                                </i>
                            </a>
                            <a class="btn btn-info btn-sm edit" href="{{ route('dashboard.projects.edit', $project->id) }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                            </a>

                            <form action="{{ route('dashboard.projects.destroy', $project->id) }}" method="post" style="display: inline-block">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>

                    <div class="modal fade" id="modal-project{{$project->id}}">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">{{$project->name}}  - #{{$project->id}}</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p><h2>Client :</h2> {{$project->client }}&hellip;</p>
                                    <hr>
                                    <p><h2>Description :</h2> {!! $project->description !!}&hellip;</p>
                                    <hr>
                                    <p><h2>consultant :</h2> {{$project->consultant }}&hellip;</p>
                                    <hr>
                                    <p><h2>contractor :</h2>{{$project->contractor }}&hellip;</p>
                                    <hr>
                                    <p><h2>value :</h2> {{$project->value }}&hellip;</p>
                                    <hr>
                                    <p><h2>Scope Of Work :</h2> {!! $project->scope_work !!}&hellip;</p>
                                    
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
            {{$projects->appends(request()->query())->links()}}
            @else
            <h2>No Projects </h2>
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