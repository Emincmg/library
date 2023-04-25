@section('addbook form modal body')
    <form method="POST" action="addbook" enctype="multipart/form-data" id="addBookForm">
        @csrf
        <div id="validation-errors"></div>
        <div class="container" style="width: 28rem; height: 28rem;">
            <div class="form-group mt-2">
                <label for="inputBookTitle">Title</label>
                <input type="text" class="form-control" name="book_title" placeholder="Book title">
            </div>
            <div class="form-group mt-2">
                <label for="inputBookTitle">Author</label>
                <input type="text" class="form-control" name="book_author"
                       placeholder="Author of the book">
            </div>
            <div class="form-group mt-2">
                <label for="inputBookExp">Explanation</label>
                <input type="text" class="form-control" name="book_explanation"
                       placeholder="Information about the book">
            </div>
            <div class="form-group mt-2">
                <label for="inputBookExp">Book wiki image</label>
                <input type="url" class="form-control" name="book_img"
                       placeholder="Please insert book wikipedia image url only">
            </div>

            <div class="form-group ">
                <br>
                <label for="inputBookDate">Date Published</label><input name="book_date" type="date">
            </div>
            <br>
            <div class="form-group">
                <label for="bookCategorySelect">Book category</label>
                <select class="form-control selectpicker" name="book_category[]" multiple
                        id="bookCategorySelect">
                    <option>Novel</option>
                    <option>Science-Fiction</option>
                    <option>Grim Dark</option>
                    <option>Fantasy</option>
                    <option>Shitpost</option>
                </select>
            </div>
            <div class="form-group ">
                <br>
                <label for="inputBookStock">Book Stock :</label><input name="book_stock" type="number">
            </div>
        </div>
    </form>
@endsection
