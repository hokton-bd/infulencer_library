@extends('layouts.app')
@section('content')
    
{{ Form::open(['route' => 'infulencers.store']) }}
{{ Form::text('name', null,['class' => 'display-block form-control size-input-name', 'placeholder' => '名前']) }}
{{ Form::text('twitter_link', null,['class' => 'display-block form-control size-input-name', 'placeholder' => 'Twitterのリンク']) }}
{{ Form::text('youtube_link', null,['class' => 'display-block form-control size-input-name', 'placeholder' => 'You Tubeのリンク']) }}
{{ Form::text('instagram_link', null,['class' => 'display-block form-control size-input-name', 'placeholder' => 'Instagramのリンク']) }}
{{ Form:: textarea('description', null, ['class' => 'display-block form-control', 'placeholder' => '入力してください', 'rows' => '5']) }}
{{ Form::submit('送信', ['class'=>'display-block form-control']) }}
{{ Form::close() }}
@endsection