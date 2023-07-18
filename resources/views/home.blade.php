@extends("layouts.main-layout")

@section("content")

    <div class="text-center my-5">
        <h1>
            Available comics
            <a href="{{ route('create') }}">
                +
            </a>
        </h1>
        <div class="container">
            <div class="row row-g-4">
            @foreach ($comics as $comic)
            <div class="col-lg-4 my-3">
                <div class="card">
                    <div class="h-100 w-100">
                        <img src="{{ $comic -> thumb }}" class="img-fluid" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic -> title }}</h5>
                        <a href="{{ route('show', $comic -> id) }}" class="btn btn-primary">Vai al fumetto</a>
                        <a href="{{ route('edit', $comic -> id)}}">Modifica</a>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
        </div>
    </div>

@endsection
