<!-- Notyfication plugins -->

@if (Session::has('success'))

    <script>

        new Noty({

            theme: 'metroui',
            type: 'success',
            layout: 'topRight',
            text: "{{ session('success') }}",
            timeout: 2500,
            killer: true

        }).show();

    </script>

@endif

@if (Session::has('danger'))

    <script>

        new Noty({

            theme: 'metroui',
            type: 'danger',
            layout: 'topRight',
            text: "{{ session('danger') }}",
            timeout: 2500,
            killer: true

        }).show();

    </script>

@endif

@if (Session::has('error'))

    <script>

        new Noty({

            theme: 'metroui',
            type: 'error',
            layout: 'topRight',
            text: "{{ session('error') }}",
            timeout: 2500,
            killer: true

        }).show();

    </script>

@endif

@if (session('message'))

<script>

    new Noty({

        theme: 'metroui',
        type: "{{ session('alert-type') }}",
        layout: 'topRight',
        text: "{{ session('message') }}",
        timeout: 2500,
        killer: true

    }).show();

</script>

@endif


<script>
$(document).ready(function(){
// Confirm delete
    $(".delete").click(function(e) {
        let that = $(this);
        e.preventDefault();
        let n = new Noty({
            theme: 'metroui'
            , text: "هل انت متاكد من الحذف"
            , layout: 'topCenter'
            , type: "warning"
            , killer: true
            , buttons: [
                Noty.button("نعم ", 'btn btn-success btn-space m-2', function() {
                    window.location.href = $(that).attr("href");

                })

                , Noty.button("لا", 'btn btn-danger btn-space m-2', function() {
                    n.close();
                })
            ]

            //End of button
        });
        n.show();

    }); //End of confirm delete

    // Image preview

    $('.image').change(function() {

        if (this.files && this.files[0]) {
            let reader = new FileReader();

            preview = $(this).data('preview');
            reader.onload = function(e) {
                $('#'+preview).attr('src', e.target.result);
            }

            reader.readAsDataURL(this.files[0]);
        }
    }); // End Image preview

    $('body').on('click', '.edit', function(e) {
    let that = $(this);
    e.preventDefault();
    let n = new Noty({
        theme: 'metroui'
        , text: "هل انت متاكد من التعديل"
        , layout: 'topCenter'
        , type: "info"
        , killer: true
        , buttons: [
            Noty.button("نعم", 'btn btn-success btn-space m-2', function() {
                //window.open($(that).attr("href"));
                window.location.href = $(that).attr("href");

                n.close();
            })

            , Noty.button("لا", 'btn btn-danger btn-space m-2', function() {
                n.close();
            })
        ]

        //End of button
    });
    n.show();
    }); //end of delete
    
});
    </script>