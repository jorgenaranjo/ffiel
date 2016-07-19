@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <p>@yield('title_error')</p>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
