@section('scripts')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        //Create a public variable that contains all book data.
        let booksdata = {!! str_replace("'", "\'", json_encode($books)) !!};
        let authorsdata = {!! str_replace("'", "\'", json_encode($authors)) !!};


        //View clicked book modal
        $(document).on('click', '.bookName', function (e) {
            let bookID = $(this).data('id');
            let book = booksdata.find(book => book.id === bookID);

            $('#book_dtl_title').text(book.book_title + " - " + book.book_author);
            $('#book_dtl_explanation').text(book.book_explanation);
            $('#book_dtl_category_date').text("Categories : " + book.book_category + " | " + "Published : " + book.book_date);
            $('#book_dtl_img').attr('src', book.book_img);
            $('#viewModal').modal('show');
        });

        //Open new book inserting modal
        $(document).on('click', '#addModalButton', function (e) {
            $('#addBookModal').modal('show');
        });

        //Open editing modal
        $(document).on('click', '.editButton', function (e) {
            let bookID = $(this).data('id');
            let book = booksdata.find(book => book.id === bookID);

            $('#editBookModal').modal('show');
            $('input[name="id"]').val(book.id);
            $('input[name="book_title"]').val(book.book_title);
            $('input[name="book_author"]').val(book.book_author);
            $('input[name="book_explanation"]').val(book.book_explanation);
            $('input[name="book_date"]').val(book.book_date);
            $('input[name="book_img"]').val(book.book_img);

            $('#book_category option').each(function (index) {
                $('#book_category option').eq(index).prop('selected', false)
            });
            $('#book_category option').each(function (index) {
                if (book.book_category.includes($('#book_category option').eq(index).val())) {
                    $('#book_category option').eq(index).prop('selected', true)
                    $('#book_category').change()
                }
            });

            $('input[name="book_category"]').val(book.book_category);
            $('input[name="book_stock"]').val(book.book_stock);
        });

        //View featured book modal
        $(document).on('click', '#featuredBook', function (e) {
            let bookID = {{$featuredBook->id}};
            let book = booksdata.find(book => book.id === bookID);

            $('#viewModal').modal('show');
            $('#book_dtl_title').text(book.book_title + " - " + book.book_author);
            $('#book_dtl_explanation').text(book.book_explanation);
            $('#book_dtl_category_date').text("Categories : " + book.book_category + " | " + "Published : " + book.book_date);
            $('#book_dtl_img').attr('src', book.book_img);
        });

        //Delete clicked book from server
        $(document).on('click', '.deleteButton', function () {
            var id = $(this).data("id");
            $.ajax({
                type: 'get',
                url: '/deletebook/' + id,
                success: function () {
                    $('#booklist').load(document.URL + ' #booklist');
                    $('#latest_book').load(document.URL + ' #latest_book');
                }
            })
        });

        // Insert a new book to server
        $(document).on('submit', '#addBookForm', function (e) {

            e.preventDefault();
            let formData = $(this).serialize();
            $.ajax({
                type: 'POST',
                url: 'addbook',
                data: formData,
                success: function (response, xhr, status) {
                    $.each(response, function (index, value) {
                        booksdata.push(value)
                        $('#booklist').load(document.URL + ' #booklist');
                        $('#latest_book').load(document.URL + ' #latest_book');
                        $('#addBookModal').modal('hide');
                        if (jQuery.inArray(value.book_author, authorsdata) !== -1) {
                            console.log('var');
                        } else {
                            $('#authorDrpDown').append('<select>+ value.book_author +</select>');
                        }
                        $('#alerts').empty().show().html('').delay(2000).fadeOut(500);
                        $('#alerts').append('<div class="alert alert-success">' + "Book added successfully!" + '</div>');
                    })
                },
                error: function (xhr, status, error) {
                    $('#addBook-errors').empty().show().html('').delay(3000).fadeOut(500);
                    $.each(xhr.responseJSON.errors, function (key, value) {
                        $('#addBook-errors').append('<div class="alert alert-danger">' + value + '</div>');
                    });
                }
            });
        });

        //Edit book
        $(document).on('submit', '#editBookForm', function (e) {
            e.preventDefault();
            let foundBook;
            let formData = $(this).serialize();
            $.ajax({
                type: 'POST',
                url: 'editbook',
                data: formData,
                success: function (response, xhr, status) {
                    $('#booklist').load(document.URL + ' #booklist');
                    $('#latest_book').load(document.URL + ' #latest_book');
                    $('#editBookModal').modal('hide');
                    $('#alerts').empty().show().html('').delay(3000).fadeOut(500);
                    $('#alerts').append('<div class="alert alert-success">' + "Book edited successfully!" + '</div>');
                    $.each(response, function (index, object) {
                        foundBook = booksdata.findIndex(book => book.id === object.id);
                        booksdata[foundBook] = object;
                    })
                },
                error: function (xhr, status, error) {
                    $('#editBook-errors').empty().show().html('').delay(3000).fadeOut(500);
                    $.each(xhr.responseJSON.errors, function (key, value) {
                        $('#editBook-errors').append('<div class="alert alert-danger">' + value + '</div>');
                    });
                }
            })
        })

        //Filter books
        $(document).on('change','#authorDrpDown,#categoryDrpDown',function (e){
            let authorFilter = $('#authorDrpDown').val();
            let categoryFilter = $('#categoryDrpDown').val();
            if($('#authorDrpDown').val() !== "all" && $('#categoryDrpDown').val() !== "all"){
                $('.card').each(function (){
                    let cardctg = $(this).data("category");
                    if ($(this).data("author") === authorFilter && cardctg.indexOf(categoryFilter) != -1){
                        $(this).show();
                    }else{
                        $(this).hide();
                    }
                })
            } else if($('#authorDrpDown').val() === "all" && $('#categoryDrpDown').val() !== "all") {
                $('.card').each(function (){
                    let cardctg = $(this).data("category");
                    if (cardctg.indexOf(categoryFilter) != -1){
                        $(this).show();
                    }else{
                        $(this).hide();
                    }
                })
            }
            else if ($('#authorDrpDown').val() !== "all" && $('#categoryDrpDown').val() === "all"){
                $('.card').each(function (){
                    if ($(this).data("author") === authorFilter){
                        $(this).show();
                    }else{
                        $(this).hide();
                    }
                })
            }
            else{
                $(".card").each(function (){
                    $(this).show();
                })
            }
            $('#authorDrpDown').val(authorFilter);
            $('#categoryDrpDown').val(categoryFilter);
        })
    </script>
@endsection
