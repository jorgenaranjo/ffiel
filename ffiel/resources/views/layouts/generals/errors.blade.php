@if ($errors->any())
    <div class="row">
        <div class="col l12 center">
            <ul>
                @foreach($errors->all() as $error)
                    <li class="red-text text-darken-3">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
