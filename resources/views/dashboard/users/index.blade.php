@extends('layouts.dashboard.app')

@section('title', 'Decolux')

@section('content-header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">users</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item active">users</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

@section('content')
<section class="content">

    <form action="{{route('dashboard.users.index')}}" method="get">

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
            <h3 class="card-title">users</h3>

            <div class="card-tools">

                <span class="badge badge-info right">{{$users->total()}}</span>
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>

        <div class="card-body p-0">
            @if($users)

            <table class="table table-striped users">
                <thead>
                    <tr>
                        <th style="width: 1%">
                            #
                        </th>
                        <th style="width: 20%">
                            Name
                        </th>
                        <th style="width: 30%">
                            Email
                        </th>
                      


                        <th style="width: 20%">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user )
                    <tr>
                        <td>
                            {{$user->id }}
                        </td>
                        <td>
                            <a>
                                {{$user->name}}
                            </a>
                            <br>
                            <small>
                                {{$user->created_at}}
                            </small>
                        </td>
                        <td>
                            {{$user->email}}

                        </td>
                        

                        <td class="user-actions text-right">
                            <a class="btn btn-info btn-sm edit" href="{{ route('dashboard.users.edit', $user->id) }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                            </a>

                            <form action="{{ route('dashboard.users.destroy', $user->id) }}" method="post" style="display: inline-block">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>


                    @endforeach



                </tbody>
            </table>
            {{$users->appends(request()->query())->links()}}
            @else
            <h2>No users </h2>
            @endif
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>



@endsection