@extends('layouts.base')

@section('documentTitle')
    Trains
@endsection

@section('content')
@foreach ($trains as $train)
<ul>
    <li>Company: {{$train->company}}</li>
    <li>Train Code: {{$train->train_code}}</li>
    <li>Departure: {{$train->departure_station}}</li>
    <li>Arrival: {{$train->arrival_station}}</li>
    <li>Departure date: {{$train->departure_date}}</li>
    <li>Departure time: {{$train->departure_time}}</li>
    <li>
        @if ($train->on_time == true)
        Treno in orario
        @else
        Treno in ritardo 
        @endif
    </li>
        @if($train->cancelled == true)
        <li>
            Treno cancellato
        </li>
        @endif
    <button><a href="{{route('show', $train)}}">View Train</a></button>
</ul>
    
@endforeach  
@endsection