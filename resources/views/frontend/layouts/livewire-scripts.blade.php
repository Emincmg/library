@section('lv-scripts')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        //Public variables.
        let booksdata = {!! str_replace("'", "\'", json_encode($lvaBooks)) !!};
        let authorsdata = {!! str_replace("'", "\'", json_encode($lvAuthors)) !!};

        //List all books
        function booksLoad() {
            $.each(booksdata, function (index, book) {
                let author = book.book_author;
                let category = JSON.stringify(book.book_category);
                let id = book.id;
                let title = book.book_title;
                let updatedAt = book.updated_at;
                let formattedUpdate = new Date(updatedAt).toLocaleString();
                let stock = book.book_stock;


                let newBook = '<div class="card row-hover pos-relative px-2 mb-2 border-warning border-top-0 border-right-0 border-bottom-0 rounded-1 display-flex" data-author="' + author + '" data-category=\'' + category + '\' data-id="' + id + '">'
                    + '<div class="row">'
                    + '<div class="col-md-5">'
                    + '<div class="row pt-1">'
                    + '<h5>'
                    + '<a href="javascript:void(0);" class="bookName text-primary" style="font-size: medium" data-id="' + id + '">' + title + '</a>'
                    + '<a href="javascript:void(0);"> - </a>'
                    + '<a href="javascript:void(0);" class="bookAuthor text-primary" style="font-size: medium">' + author + '</a>'
                    + '</h5>'
                    + '</div>'
                    + '</div>'
                    + '<div class="col-md-5">'
                    + '<div class="row pt-1">'
                    + '<div class="col-md-auto px-1">'
                    + '<span class="bookDate d-block text-sm" style="font-size: 12px; margin-top: 5px;">Last Update: ' + formattedUpdate + '</span>'
                    + '</div>'
                    + '<div class="col-md-auto px-1">'
                    + '<span class="bookStock d-block text-sm" style="font-size: 12px; margin-top: 5px;">Stock: ' + stock + '</span>'
                    + '</div>'
                    + '</div>'
                    + '</div>'
                    + '<div class="col">'
                    + '<button class="btn editButton text-primary btn-close-white" id="editButton" data-id="' + id + '">'
                    + '<i class="ionicons ion-edit"></i>'
                    + '</button>'
                    + '</div>'
                    + '<div class="col">'
                    + '<button data-id="' + id + '" class="btn deleteButton text-danger btn-close-white" style="font-size: 14px;">'
                    + '<i class="bi bi-trash-fill"></i>'
                    + '</button>'
                    + '</div>'
                    + '</div>'
                    + '</div>';

                $('#booklist').append(newBook);

            });
        }

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

        //View clicked book modal
        $(document).on('click', '.bookName', function (e) {
            let bookID = $(this).data('id');
            let book = booksdata.find(book => book.id === bookID);

            $('#book_dtl_title').text(book.book_title + " - " + book.book_author);
            $('#book_dtl_explanation').text(book.book_explanation);
            $('#book_dtl_category_date').text("Categories : " + book.book_category + " | " + "Published : " + book.book_date);
            $('#book_dtl_img').attr('src', book.book_img);
            $('#bookViewModal').modal('show');
        });

        //View clicked author modal
        $(document).on('click', '.bookAuthor', function (e) {
            let authorName = $(this).text();
            let author = authorsdata.find(author => author.author_name === authorName);

            $('#author_dtl_img').attr('src', author.author_img);
            $('#author_dtl_name').text(author.author_name);
            $('#author_dtl_born_demise').text("Born: " + author.author_born + ", Demise: " + author.author_demise);
            $('#author_dtl_explanation').text(author.author_explanation);
            $('#authorViewModal').modal('show');
        });

        //Delete clicked book from server
        $(document).on('click', '.deleteButton', function () {
            let id = $(this).data("id");
            $.ajax({
                type: 'get',
                url: '/deletebook/' + id,
                success: function () {
                    $('#latest_book').load(document.URL + ' #latest_book');
                    $('#alerts').empty().show().html('').delay(2000).fadeOut(500);
                    $('#alerts').append('<div class="alert alert-info">' + "Book deleted successfully" + '</div>');
                }
            })
            $(this).closest('.card').hide();
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
                        $('#latest_book').load(document.URL + ' #latest_book');
                        $('#addBookModal').modal('hide');
                        if (jQuery.inArray(value.book_author, authorsdata) !== -1) {
                            console.log('var');
                        } else {
                            $('<option>').text(value.book_author).appendTo('#authorDrpDown');
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
            var formData = $(this).serialize();

            $.ajax({
                type: 'POST',
                url: 'editbook',
                data: formData,
                success: function (response, xhr, status) {
                    $('#latest_book').load(document.URL + ' #latest_book');
                    $('#editBookModal').modal('hide');
                    $('#alerts').empty().show().html('').delay(3000).fadeOut(500);
                    $('#alerts').append('<div class="alert alert-success">Book edited successfully!</div>');

                    $.each(response, function (index, object) {
                        var foundBook = booksdata.find(function (book) {
                            return book.id === object.id;
                        });

                        if (foundBook) {
                            var bookIndex = booksdata.indexOf(foundBook);
                            booksdata.splice(bookIndex, 1, object);
                            $('.card[data-id="' + foundBook.id + '"] .bookName').text(object.book_title);
                            let updatedAt = object.updated_at;
                            let formattedUpdate = new Date(updatedAt).toLocaleString();
                            $('.card[data-id="' + foundBook.id + '"] .bookDate').text('Last Update: ' + formattedUpdate);
                            $('.card[data-id="' + foundBook.id + '"] .bookStock').text('Stock: ' + object.book_stock);
                        }
                    });
                },
                error: function (xhr, status, error) {
                    $('#editBook-errors').empty().show().html('').delay(3000).fadeOut(500);
                    $.each(xhr.responseJSON.errors, function (key, value) {
                        $('#editBook-errors').append('<div class="alert alert-danger">' + value + '</div>');
                    });
                }
            });
        });
    </script>
@endsection

