connect_books();

function connect_books() {
    $(document).ajaxStop(function() {
        $target = $('.connect-infulencer');
        $target.on('click', function() {
            $target.off('click');
            let infulencer_id = $('#infulencer_id').val();
            let id = $(this).parent().attr('id');
            let book_id = id.slice(5);

            $.ajax({
                url: 'connect/'+ book_id + '/' +infulencer_id,
                method: 'GET',
                data: {
                    'book_id': book_id,
                    'infulencer_id': infulencer_id
                },
                dataType: 'json'
            })
            //通信成功した時の処理
            .done(function (data) {
                $('#'+id).addClass('d-none');
            })
            //通信失敗した時の処理
            .fail(function (data) {
                console.log('fail');
                console.log(data); 
            });

        });
        
    });
}