@extends('layouts.app')
@section('content')
    <section class="book-search">
        <div class="container-fluid">
            <div class="row">
                {{ Form::text('title', '',['id' => 'title', 'class' => 'form-control size-input-name', 'placeholder' => 'タイトル']) }}
                    <span class="btn btn-primary" id="search-books">検索</span>
            </div><!-- ./row -->
        
            <div class="row">
                {{ Form::open(['route' => 'books.store']) }}
                    <div id="book-list" class="book-list d-flex justify-content-start flex-wrap">
        
                    </div>
                {{ Form::close() }}
            </div>
        </div><!-- ./container-fluid -->
    </section>
@endsection