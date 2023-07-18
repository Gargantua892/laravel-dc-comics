@extends("layouts.main-layout")

@section("content")

    <div class="text-center">
        <img class="py-3" src="{{ $comic -> thumb }}" width="350px">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="">{{ $comic -> title}}</h1>
                    <h3 class="mb-3">{{ $comic -> price }}</h3>
                    Type:<h5>{{ $comic -> type }}</h5>
                    Info:
                    <h5>Serie: {{ $comic -> series }}<br>{{ $comic -> sale_date }}</h5>
                    <br>
                </div>
            </div>
        </div>
        <div class="row justify-content-between py-3">
            <span class="col bg-dark text-light mx-3 rounded">
                
            </span>
            <span class="col bg-dark text-light mx-3 rounded">
                
            </span>
        </div>
        <div class="row justify-content-between py-3">
            <span class="col bg-dark text-light mx-3 rounded">
                
            </span>
            <span class="col bg-dark text-light mx-3 rounded">
                
            </span>
        </div>
        <div class="row justify-content-between py-3">
            <div class="col">
                <h4>
                    <b>
                        Artists
                    </b>
                </h4>
                <ul class="list-unstyled">
                    @foreach (json_decode($comic -> artists) as $artistName)
                        <li>
                            {{ $artistName }}
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col">
                <h4>
                    <b>
                        Writers
                    </b>
                </h4>
                <ul class="list-unstyled">
                    @foreach (json_decode($comic -> writers) as $writerName)
                        <li>
                            {{ $writerName }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>

@endsection
