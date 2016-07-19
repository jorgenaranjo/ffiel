@if (Session::has('warning'))
    <div class="row">
        <div class="col l12 center">
            <p style="font-size: 20px" class="yellow-text text-darken-2">
                {{ Session::get('warning') }}
            </p>
        </div>
    </div>
@endif

@if (Session::has('success'))
    <div class="row">
        <div class="col l12 center">
            <p style="font-size: 20px" class="green-text text-darken-2">
                {{ Session::get('warning') }}
            </p>
        </div>
    </div>
@endif