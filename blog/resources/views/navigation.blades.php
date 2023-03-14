<div class="container">
    <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
            @foreach ($pages as $page)
                <li class="nav-item"><a href="/{{$page}}" class="nav-link" aria-current="page">{{$page}}</a></li>
            @endforeach
        </ul>
    </header>
</div>