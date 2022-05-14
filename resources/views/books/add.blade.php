<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>

{{ Form::text('search-box', null, ['class' => 'form-control', 'id' => 'search-box', 'placeholder' => '検索']) }}
<button type="button" class="btn btn-primary">Primary</button>

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
<div id="result">

</div>

<script>
    $('.btn').on('click', function() {
        $word = $('#search-box').val();
        sendApiToRakuten($word);
    });

    function sendApiToRakuten($title) {
        
        $.ajax({
                type:     "GET",
                url:      "https://app.rakuten.co.jp/services/api/BooksBook/Search/20170404?format=json&applicationId=1093463676271087198&title="+$title,
                dataType: 'json'

            }).done(function(data) {
                books = data.Items;
                for(let i = 0; i < books.length; i++) {
                    $title = books[i]["Item"]["title"];
                    console.log($title);
                    $html = `{{ Form::text('title', '${$title}', ['class' => 'form-control', 'disabled' ]) }}`;
                    $('#result').append($html);
                }
            }).fail(function(data) {
                console.log('Ajax fail (communication error)');
            });
    }
</script>