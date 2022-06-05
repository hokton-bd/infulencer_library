search_books();
function search_books() {
    $('#search-books-btn').on('click', function() {
    let $target = $('#result');
    let $search_word = $('#search-box').val();
    let infulencer_id = $('#infulencer_id').val();
    
    $target.empty();
    AjaxSearchBookList($search_word, infulencer_id);

});
}

function AjaxSearchBookList($search_word, infulencer_id) {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('input[name="_token"]').val()
        },
        url: 'search',
        method: 'POST',
        dataType: 'json',
        data: {
            'title': $search_word,
            'infulencer_id': infulencer_id
        },
    })
    //通信成功した時の処理
    .done(function (books) {
        let $target = $('#result');
        let item = books[0];
        let $html;
        for(let $i = 0; $i < item.length; $i++) {
            $html += `<li id="book_${item[$i]['id']}" class="list-group-item">`;
            $html += `<p class="title">タイトル: ${item[$i]['title']}</p>`;
            $html += `<p class="author">著者: ${item[$i]['author']}</p>`;
            $html += '<button class="btn btn-primary connect-infulencer">追加</button>';
            $html += '</li>';
        }
        $target.append($html);
    })
    //通信失敗した時の処理
    .fail(function (books) {
        console.log(books);
        console.log('fail'); 
    });
};