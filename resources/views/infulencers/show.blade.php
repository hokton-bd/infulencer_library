@extends('layouts.app')
@section('content')

    <section class="section infulencer_desc mb-5" id="infulencer_desc">
        <div class="container-fluid">

            <div class="row mb-3 d-flex justify-content-between">
                <div class="col-4">
                    <h2>{{ $infulencer->name }}</h2>
                    <div class="image-box"><img src="https://pbs.twimg.com/profile_images/1441258621900263426/A8FZxP43_400x400.jpg" alt="" srcset=""></div>
                </div>
                <div class="col-4">
                    <p><a href="{{ $infulencer->blog_url }}" class="blog_url">ブログ</a></p>
                    <p><a href="{{ $infulencer->twitter_link }}" class="twitter_link">Twitter</a></p>
                    <p><a href="{{ $infulencer->youtube_link }}" class="youtube_link">YouTube</a></p>
                </div>
            </div>

        </div>
    </section>
    
    <section class="section connect_books" id="connect_books">
        <div class="container-fluid px-5">
            
            {!! Form::open(['route' => 'infulencers.connect']) !!}
                <div class="row mb-3">
                    <div class="col-lg-4 col-md-12 mx-auto">
                        {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'タイトルで検索']) !!}
                    </div> <!-- ./col-lg-4 -->
                </div><!-- ./row -->
                
                <div class="row">
                    <div class="col-2 mx-auto">
                        {!! Form::submit('検索', ['class' => 'form-control btn btn-primary']) !!}
                    </div>
                </div>
            {!! Form::close() !!}

        </div>
    </section>

@endsection