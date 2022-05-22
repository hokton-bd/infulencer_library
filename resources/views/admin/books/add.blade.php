@extends('layouts.app')
@section('content')
<div class="w-50">
    {{ Form::open(['route' => 'books.store']) }}
    {{ Form::text('title', '',['class' => 'form-control size-input-name', 'placeholder' => 'タイトル']) }}
    {{ Form::text('book_link', null,['class' => 'form-control size-input-name', 'placeholder' => 'リンク']) }}
    {{ Form::text('author', null,['class' => 'form-control size-input-name', 'placeholder' => '著者']) }}
    {{ Form::text('image_url', null,['class' => 'form-control size-input-name', 'placeholder' => '画像のURL']) }}
    {{ Form::text('rakuten_url', null,['class' => 'form-control size-input-name', 'placeholder' => '楽天URL']) }}
    {{ Form::text('amazon_url', null,['class' => 'form-control size-input-name', 'placeholder' => 'AmazonのURL']) }}
    {{ Form:: textarea('description', null, ['class' => 'form-control', 'placeholder' => '入力してください', 'rows' => '5']) }}
    {{ Form::date('published_date', null, ['class' => 'form-control']) }}
    {{ Form::submit('送信', ['class'=>'form-control']) }}
    {{ Form::close() }}
</div>
@endsection