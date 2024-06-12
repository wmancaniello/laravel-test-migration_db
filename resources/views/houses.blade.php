@extends('layouts.app')

@section('content')
    <h1>Houses List:</h1>
    <ul>
        @foreach ($houseInfo as $house)
            <li class="my-3">
                <strong>Città:</strong> {{ $house->city }}<br>
                <strong>Stato:</strong> {{ $house->state }}<br>
                <strong>Indirizzo:</strong> {{ $house->address }}<br>
                <strong>Prezzo:</strong> {{ $house->price }}
                <strong>Metri Quadrati:</strong> {{ $house->square_meters }}<br>
                <strong>Numero Stanze:</strong> {{ $house->rooms_number }}<br>
                <strong>Descrizione:</strong> {{ $house->description }}<br>
            </li>
        @endforeach
    </ul>
@endsection
