@extends('layouts.app')
@section('content')
    
    <section class="section connect_books" id="connect_books">
        <div class="container-fluid px-5">

            <div class="row">
                <h2>{{ $infulencer->name }}</h2>
            </div>

            <div class="row">
                {!! Form::open(['route' -> 'infulencers.connect']) !!}

            </div>

        </div>
    </section>

@endsection