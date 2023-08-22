@extends ('layouts.base')
@section('content')

<div>
    <h2>Aquí es donde van las cards de los destinos</h2>
    <a href="{{ route('happy_travel.create') }}"  class="btn btn-primary">Page Introducir destino</a>

    <div class="row">
    @foreach($travels as $travel)
        <div class="col-md-3 col-sm-6">
            <div class="mx-auto">
                @include('components.card', ['travel' => $travel])
            </div>
        </div>
    @endforeach
    </div>
@endsection