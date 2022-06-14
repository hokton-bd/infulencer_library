@extends('layouts.app')
@section('content')
    <section class="book-search">
        <div class="container-fluid">
            <div class="row w-50 mx-auto">
                {{ Form::text('title', '',['id' => 'title', 'class' => 'form-control size-input-name mb-3', 'placeholder' => 'タイトル']) }}
                    <span class="btn btn-primary col-3 mx-auto" id="search-books">検索</span>
            </div><!-- ./row -->
        
            <div class="row">
                <div id="book-list" class="book-list d-flex justify-content-start flex-wrap">
    
                </div>
            </div>
        </div><!-- ./container-fluid -->
    </section>
@endsection