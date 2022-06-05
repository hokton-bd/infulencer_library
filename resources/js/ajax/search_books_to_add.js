$('#search-books').on('click', function() {
    title = $('#title').val();
    sendApiToRakuten(title);
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
                $html += '<div class="">';
                $html += `<div class="title"><input type="text" name="title" class="form-control" value="${item.title}" disabled ></div>`;
                $html += `<textarea name="description" class="form-control" disabled>${item.itemCaption}</textarea>`;
                $html += `<input type="text" name="isbn" class="form-control" value="${item.isbn}" disabled>`;
                $html += `<input type="text" name="rakuten_url" class="form-control" value="${item.affiliateUrl}" disabled>`;
                $html += `<input type="text" name="author" class="form-control" value="${item.author}" disabled>`;
                $html += `<input type="text" name="publishded_date" class="form-control" value="${item.salesDate}" disabled>`;
                $html += '</div><!-- ./-body --!>'
                $html += '</div><!-- ./ --!>'
                $('#book-list').append($html);
            }
        }).fail(function(data) {
            console.log('Ajax fail (communication error)');
        });
}