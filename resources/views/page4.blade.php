@extends('layout.app')
@section('content')
    <ul>
        @foreach ($matos as $item)
            <li>{{$item -> nom}}</li>
        @endforeach
    </ul>
@endsection