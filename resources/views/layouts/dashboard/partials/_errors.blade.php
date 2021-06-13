
@if(Session::has('error'))
    <div style="margin: 20px" >
        <div class="alert round  alert-icon-left alert-dismissible  btn btn-lg btn-block btn-outline-danger mb-2" role="alert">
                <span class="alert-icon"><i class="la la-thumbs-o-down"></i></span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                </button>
                <strong>Oh snap!</strong> {{Session::get('error')}}.
        </div>
    </div>
@endif
