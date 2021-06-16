@extends('layouts.dashboard.app')

@section('title', 'Decolux')

@section('content-header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">News comments</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                    <li class="breadcrumb-item active">News comments</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection

@section('content')
<div class="content-wrapper">

    <section class="content">

        <div class="box box-primary">

            <div class="box-header with-border">

                <h3 class="box-title" style="margin-bottom: 15px">Comments <small>{{ $comments->total() }}</small></h3>

         

            </div><!-- end of box header -->

            <div class="box-body">

                @if ($comments->count() > 0)

                    <table class="table table-hover">

                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Comment</th>
                            <th>News Title</th>
        
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($comments as $index=>$comment)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $comment->name }}</td>
                                <td>{{ $comment->email }}</td>
                                <td>{{ $comment->comment }}</td>
                                <td>{{ $comment->news->title }}</td>
                            
                            </tr>

                        @endforeach
                        </tbody>

                    </table><!-- end of table -->

                    {{ $comments->appends(request()->query())->links() }}

                @else

                    <h2>No Data Found</h2>

                @endif

            </div><!-- end of box body -->


        </div><!-- end of box -->

    </section><!-- end of content -->

</div><!-- end of content wrapper -->
@endsection