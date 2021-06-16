@if(Session::has('error'))
<div style="margin: 20px">
    <div class="alert round  alert-icon-left alert-dismissible  btn btn-lg btn-block btn-outline-danger mb-2" role="alert">
        <span class="alert-icon"><i class="la la-thumbs-o-down"></i></span>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <strong>Oh snap!</strong> {{Session::get('error')}}.
    </div>
</div>
@endif
@if ($errors->any())

<div class="col-md-12">
    <div class="card card-danger" style="transition: all 0.15s ease 0s; height: inherit; width: inherit;">
        <div class="card-header">
            <h3 class="card-title">All Errors</h3>

            <div class="card-tools">
               
                <button type="button" class="btn btn-tool" data-card-widget="maximize">
                    <i class="fas fa-expand"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">

            @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
            <hr>
            @endforeach
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

@endif