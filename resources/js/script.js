const { result } = require("lodash");

$('#search-books-btn').on('click', function() {

    let $target = $('#result');
    let $search_word = $('#search-box').val();
    
    $target.empty();
    AjaxSearchBookList($search_word);

});

function AjaxSearchBookList($search_word) {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('input[name="_token"]').val()
        },
        url: 'search',
        method: 'POST',
        dataType: 'json',
        data: {
            'title': $search_word
        },
    })
    //通信成功した時の処理
    .done(function (books) {
        let $target = $('#result');
        let item = books[0];
        let $html;
        for(let $i = 0; $i < item.length; $i++) {
            $html += '<li class="list-group-item">';
            $html += `<p class="title">タイトル: ${item[$i]['title']}</p>`;
            $html += `<p class="author">著者: ${item[$i]['author']}</p>`;
            $html += '<span class="btn btn-primary">追加</span>';
            $html += '</li>';
        }
        $target.append($html);
    })
    //通信失敗した時の処理
    .fail(function () {
        console.log('fail'); 
    });
};