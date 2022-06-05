@extends('layouts.app')
@section('content')
    <section class="section books" id="books">
        <div class="container-fluid">

            <div class="card-group justify-content-start">
                @foreach ($books as $item)
                    <div class="card mb-3 mx-3" style="max-width: 540px;">
                        <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ $item->image_url }}" class="img-fluid rounded-start" alt="{{$title = $item->title }}の画像">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $title }}</h5>
                                <p class="card-text">{{ $item->description }}</p>
                                <p class="card-text"><a href="{{ $item->rakuten_url }}" class="btn btn-danger mx-2">楽天で買う</a><a href="{{ $item->amazon_url }}" class="btn btn-warning">Amazonで買う</a></p>
                            </div>
                        </div>
                        </div>
                    </div>
                @endforeach
            </div>
                
        </div><!-- ./container-fluid -->
    </section>
@endsection