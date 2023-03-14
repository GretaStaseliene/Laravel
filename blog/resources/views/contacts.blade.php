{{-- @include('navigation'); --}}
<a href="/" class="btn btn-success">Home</a>

<h2>contacts</h2>

@foreach($contacts as $key => $value)
    <div>
        {{$key}}: {{$value}}
    </div>
@endforeach