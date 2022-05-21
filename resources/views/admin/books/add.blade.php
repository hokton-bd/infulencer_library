<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

<div class="w-50">
    {{ Form::open(['route' => 'books.store']) }}
    {{ Form::text('title', '',['class' => 'form-control size-input-name', 'placeholder' => 'タイトル', 'disabled']) }}
    {{ Form::text('book_link', null,['class' => 'form-control size-input-name', 'placeholder' => 'リンク', 'disabled']) }}
    {{ Form::text('author', null,['class' => 'form-control size-input-name', 'placeholder' => '著者', 'disabled']) }}
    {{ Form::text('image_url', null,['class' => 'form-control size-input-name', 'placeholder' => '画像のURL', 'disabled']) }}
    {{ Form:: textarea('description', null, ['class' => 'form-control', 'placeholder' => '入力してください', 'rows' => '5', 'disabled']) }}
    {{ Form::date('published_date', null, ['class' => 'form-control', 'disabled']) }}
    {{ Form::submit('送信', ['class'=>'form-control']) }}
    {{ Form::close() }}
</div>
