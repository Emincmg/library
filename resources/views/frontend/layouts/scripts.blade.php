@section('scripts')
    <script type="text/javascript">
        //View featured book modal
        $(document).on('click', '#featuredBook', function (e) {
            let bookID = {{$featuredBook->id}};
            let book = booksdata.find(book => book.id === bookID);

            $('#bookViewModal').modal('show');
            $('#book_dtl_title').text(book.book_title + " - " + book.book_author);
            $('#book_dtl_explanation').text(book.book_explanation);
            $('#book_dtl_category_date').text("Categories : " + book.book_category + " | " + "Published : " + book.book_date);
            $('#book_dtl_img').attr('src', book.book_img);
        });
    </script>
@endsection
