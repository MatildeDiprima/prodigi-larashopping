@if ($errors->any())
    <div class="alert alert-danger my-5"> <!--Bootstrap-->
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif