$('#search-books').on('click', function() {
    title = $('#title').val();
    sendApiToRakuten(title);
});

$(document).ajaxStop(function() {
    $('.add-book').off('click');
    $('.add-book').on('click', function() {
        let $sibs = $(this).siblings();
        addBooks($($sibs[0]).val(), $($sibs[1]).val(), $($sibs[2]).val(), $($sibs[3]).val(), $($sibs[4]).val(), $($sibs[5]).val(), $($sibs[6]).val(), $($sibs[7]).val());
    });

});

function sendApiToRakuten(title) {
    const rakuten_aff_id = 'g00q072a.zmoxu0ca.g00q072a.zmoxvf59';
    
    $.ajax({
            type:     "GET",
            url:      `https://app.rakuten.co.jp/services/api/BooksBook/Search/20170404?format=json&title=${title}&affiliateId=${rakuten_aff_id}&applicationId=1093463676271087198`,
            dataType: 'json'

        }).done(function(data) {
            books = data.Items;
            for(let i = 0; i < books.length; i++) {
                let item = books[i]["Item"];
                $html = '<div class=" mb-3 col-md-4">'
                $html += `<div class="row g-0"><div class="col-md-4"><img src="${item.largeImageUrl}" class="img-fluid rounded-start" alt="${item.title}の画像"></div>`;
                $html += '<div class="col-md-8">';
                $html += `<input type="text" name="title" class="form-control" value="${item.title}" disabled >`;
                $html += `<textarea name="description" class="form-control" disabled>${item.itemCaption}</textarea>`;
                $html += `<input type="text" name="isbn" class="form-control" value="${item.isbn}" disabled>`;
                $html += `<input type="text" name="rakuten_url" class="form-control" value="${item.affiliateUrl}" disabled>`;
                $html += `<input type="text" name="amazon_url" class="form-control" value="" placeholder="Amazonのリンク">`;
                $html += `<input type="text" name="author" class="form-control" value="${item.author}" disabled>`;
                $html += `<input type="text" name="published_date" class="form-control" value="${item.salesDate}" disabled>`;
                $html += `<input type="text" name="image_url" class="form-control" value="${item.largeImageUrl}" disabled>`;
                $html += '<input type="submit" name="submit" value="追加" class="btn btn-primary add-book">'
                $html += '</div><!-- ./-body --!>'
                $html += '</div><!-- ./ --!>'
                $('#book-list').append($html);
            }
        }).fail(function(data) {
            console.log('Ajax fail (communication error)');
        });
}

function addBooks(title, description, isbn, rakuten_url, amazon_url, author, published_date, image_url) {
    $.ajax({
        type: 'GET',
        url: 'store',
        dataType: 'json',
        data: {
            'title': title,
            'description': description,
            'isbn': isbn,
            'rakuten_url': rakuten_url,
            'amazon_url': amazon_url,
            'author': author,
            'published_date': published_date,
            'image_url': image_url
        }
    })
    .done(function (data) {
        console.log(data);
    })
    .fail(function (data) {
        console.log('fail');
    });
}