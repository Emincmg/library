@section('editbook form modal body')
    <form method="POST" action="editbook" enctype="multipart/form-data" id="editBookForm">
        @csrf
        <div id="editBook-errors"></div>
        <div class="container" style="width: 28rem; height: 28rem;">
            <div class="form-group ">
                <input type="hidden" class="form-control" name="id" id="id">
            </div>
            <div class="form-group mt-2">
                <label for="inputBookTitle">Title</label>
                <input type="text" class="form-control" name="book_title" placeholder="Book title" id="book_title">
            </div>
            <div class="form-group mt-2">
                <label for="inputBookTitle">Author</label>
                <input type="text" class="form-control" name="book_author"
                       placeholder="Author of the book" id="book_author">
            </div>
            <div class="form-group mt-2">
                <label for="inputBookExp">Explanation</label>
                <input type="text" class="form-control" name="book_explanation"
                       placeholder="Information about the book" id="book_explanation">
            </div>
            <div class="form-group">
                <label for="bookCategorySelect">Book category</label>
                <select class="form-control selectpicker" name="book_category[]" multiple
                        id="book_category">
                    @foreach($categories as $category)
                        <option> {{$category->book_category}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group mt-2">
                <label for="inputBookExp">Book wiki image</label>
                <input type="url" class="form-control" name="book_img"
                       placeholder="Please insert book wikipedia image url only" id="book_img">
            </div>
            <div class="form-group ">
                <br>
                <label for="inputBookDate">Date Published &nbsp; : &nbsp; </label><input name="book_date" type="date" id="book_date">
            </div>
            <div class="form-group">
                <br>
                <label for="inputBookStock">Book Stock &nbsp; : &nbsp; </label><input name="book_stock" type="number" id="book_stock">
            </div>
        </div>
    </form>

@endsection
