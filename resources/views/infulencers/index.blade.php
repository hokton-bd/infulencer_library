@extends('layouts.app')
@section('content')

<section class="section infulencers" id="infulencers">
    <div class="container-fluid">

        <div class="row mb-3">
            <div class="col-lg-4 col-md-12 mx-auto">
                {{ Form::text('infulencer_name', null, ['class' => 'form-control', 'placeholder' => '名前で検索']) }}
            </div>
        </div>

        <div class="row">
            <div class="col-lg-2 col-md-8 mx-auto">
                {!! Form::submit('検索', ['class' => 'form-control btn btn-primary']) !!}
            </div>
        </div>

    </div><!-- ./container-fluid -->
</section>

<section class="section infulencers my-5" id="infulencers">
    <div class="container-fluid">

        <div class="row">
          @foreach ($infulencers as $item)
            <a href="{{ route('infulencers.show', ['id' => $item->id]) }}" class="col-lg-3 col-md-1 mb-3 d-block">
              <div class="card">
                <img src="{{ $item->image_url }}" class="card-img-top" alt="{{ $item->name }}さんの画像">
                <div class="card-body">
                  <h5 class="card-title">{{ $item->name }}</h5>
                  <p class="card-text">{{ $item->description }}</p>
                </div>
              </div>
            </a>
          @endforeach
          </div><!-- ./row -->

    </div>
</section>

@endsection