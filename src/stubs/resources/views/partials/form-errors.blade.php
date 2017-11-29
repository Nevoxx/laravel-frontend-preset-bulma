@if($errors->count() > 0)
    <div class="notification is-danger">
        <button type="button" class="delete"></button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif