@extends('layouts.app')
@section('content')

@foreach ($infulencers as $item)
<h2>{{ $item->name }}</h2>
@endforeach

@endsection