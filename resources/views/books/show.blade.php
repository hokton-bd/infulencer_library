@extends('layouts.app')
@section('content')

    <section class="section book-desc" id="book-desc">
        <div class="container-fluid">
            <div class="row">
                <a href="{{ url()->previous() }}" class="link-secondary">戻る</a>
            </div>
            <div class="row">
                <div class="col-5">
                    <h2 class="">{{ $book_title = $book->title}}</h2>
                    <div class="row">
                        <img src="{{$book->image_url}}" alt="{{ $book_title }}の画像" class="img-fluid">
                    </div>
                </div>
                <div class="col-5">
                    <p>{{ $book->description }}</p>
                    <a href="{{ $book->rakuten_url }}" class="btn btn-danger">楽天で買う</a>
                    <a href="{{ $book->amazon_url }}" class="btn btn-warning">Amazonで買う</a>
                </div>
            </div><!-- ./row -->

        </div>
    </section>

@endsection