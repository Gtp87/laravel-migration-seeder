@extends('layouts.base')

@section('content')
@foreach ($trains as $train)
<ul>
    <li>Company: {{$train->company}}</li>
    <li>Departure: {{$train->departure_station}}</li>
    <li>Arrival: {{$train->arrival_station}}</li>
    <li>Departure date: {{$train->departure_date}}</li>


</ul>
    
@endforeach  
@endsection