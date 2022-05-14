<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
{{ Form::open(['route' => 'books.store']) }}
{{ Form::text('title', null,['class' => 'display-block form-control size-input-name', 'placeholder' => 'タイトル']) }}
{{ Form::text('book_link', null,['class' => 'display-block form-control size-input-name', 'placeholder' => 'リンク']) }}
{{ Form::text('author', null,['class' => 'display-block form-control size-input-name', 'placeholder' => '著者']) }}
{{ Form::text('image_url', null,['class' => 'display-block form-control size-input-name', 'placeholder' => '画像のURL']) }}
{{ Form:: textarea('description', null, ['class' => 'display-block form-control', 'placeholder' => '入力してください', 'rows' => '5']) }}
{{ Form::date('published_date', null, ['class' => 'form-control']) }}
{{ Form::submit('送信', ['class'=>'display-block form-control']) }}
{{ Form::close() }}