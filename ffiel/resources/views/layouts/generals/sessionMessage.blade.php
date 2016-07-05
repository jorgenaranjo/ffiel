@if (Session::has('warning'))
    <div class="alert alert-warning" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <p style="font-size: 20px">
            {{ Session::get('warning') }}
        </p>
    </div>
@endif

@if (Session::has('success'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert">
            <span aria-hidden="true">&times;</span>
            <span class="sr-only">Close</span>
        </button>
        <p style="font-size: 20px">
            {{ Session::get('success') }}
        </p>
    </div>
@endif