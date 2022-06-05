@extends('layouts.app')
@section('content')

    <section class="section infulencer_desc mb-5" id="infulencer_desc">
        <div class="container-fluid">

            <div class="row mb-3 d-flex justify-content-center">
                <div class="col-3">
                    <h2>{{ $infulencer_name = $infulencer->name }}</h2>
                    <div class="image-box"><img src="{{ $infulencer->image_url }}" alt="{{ $infulencer_name }}さんの画像"></div>
                </div>
                <div class="col-4 d-flex flex-column">
                    <div class="row">
                        <p>{{ $infulencer->description }}</p>
                    </div>

                    <div class="row">
                        <p class=" col-4"><a href="{{ $infulencer->blog_url }}" class="blog_url">ブログ</a></p>
                        <p class=" col-4"><a href="{{ $infulencer->twitter_link }}" class="twitter_link">Twitter</a></p>
                        <p class=" col-4"><a href="{{ $infulencer->youtube_link }}" class="youtube_link">YouTube</a></p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="section recommend-books" id="recommenc-books">
        <div class="container-fluid px-5 mx-5">

            <h2>{{ $infulencer_name }}さんおすすめの本</h2>

            <div class="row">

                @include('layouts.components.recommend', ['books' => $books])
            
            </div><!-- ./row -->

        </div><!-- ./container-fulid -->
    </section>
    
    <section class="section connect_books" id="connect_books">
        <div class="container-fluid px-5">
            
            {!! Form::open(['route' => 'search.books', 'method' => 'POST']) !!}

                <div class="row mb-3">
                    <div class="col-lg-4 col-md-12 mx-auto">
                        {!! Form::hidden('infulencer_id', 4, ['id' => 'infulencer_id']) !!}
                        {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'search-box', 'placeholder' => 'タイトルで検索']) !!}
                    </div> <!-- ./col-lg-4 -->
                </div><!-- ./row -->
                
                <div class="row">
                    <button id="search-books-btn" type="button" class="d-block col-2 mx-auto btn btn-primary">検索</button>
                </div>

            {!! Form::close() !!}

        </div>
    </section>

    <section class="section">
        <div class="container-fluid">

            <ul class="list-group row" id="result">
                
            </ul>

        </div>
    </section>

@endsection