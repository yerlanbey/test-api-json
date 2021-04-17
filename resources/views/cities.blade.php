@extends('layouts.app')


@section('content')

@foreach($cities as  $city)
<div class="container">
    <ul>
        <li>
            {{$city}}
        </li>
    </ul>
</div>
@endforeach

@endsection
