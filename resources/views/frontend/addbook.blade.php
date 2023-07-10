@extends('frontend.layouts.app')
@section('content')
    <div class="container-lg mt5">
{{--    <form method="POST" action="addbook" enctype="multipart/form-data" id="addBookForm">--}}
{{--        @csrf--}}
{{--        <div id="addBook-errors"></div>--}}
{{--        <div class="container" style="width: 28rem; height: 28rem;">--}}
{{--            <div class="form-group mt-2">--}}
{{--                <label for="inputBookTitle">Title</label>--}}
{{--                <input type="text" class="form-control" name="book_title" placeholder="Book title" id="book_title">--}}
{{--            </div>--}}
{{--            <div class="form-group mt-2">--}}
{{--                <label for="inputBookTitle">Author</label>--}}
{{--                <input type="text" class="form-control" name="book_author"--}}
{{--                       placeholder="Author of the book" id="book_author">--}}
{{--            </div>--}}
{{--            <div class="form-group mt-2">--}}
{{--                <label for="inputBookExp">Explanation</label>--}}
{{--                <input type="text" class="form-control" name="book_explanation"--}}
{{--                       placeholder="Information about the book" id="book_explanation">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label for="bookCategorySelect">Book category</label>--}}
{{--                <select class="form-control selectpicker" name="book_category[]" multiple--}}
{{--                        id="bookCategorySelect" id="book_category">--}}
{{--                    @foreach($categories as $category)--}}
{{--                        <option> {{$category->book_category}}</option>--}}
{{--                    @endforeach--}}
{{--                </select>--}}
{{--            </div>--}}
{{--            <div class="form-group mt-2">--}}
{{--                <label for="inputBookExp">Book wiki image</label>--}}
{{--                <input type="url" class="form-control" name="book_img"--}}
{{--                       placeholder="Please insert book wikipedia image url only" id="book_img">--}}
{{--            </div>--}}
{{--            <div class="form-group ">--}}
{{--                <br>--}}
{{--                <label for="inputBookDate">Date Published &nbsp; : &nbsp; </label><input name="book_date" type="date" id="book_date">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <br>--}}
{{--                <label for="inputBookStock">Book Stock &nbsp; : &nbsp; </label><input name="book_stock" type="number" id="book_stock">--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </form>--}}
        <div class="form">
            <form action="addbook" method="post" enctype="multipart/form-data" role="form" id="addBookForm" class="add-book-form">
                @csrf
                <h4>Add a new book</h4>
                <div id="addBook-errors"></div>
                <div class="row mt-lg-5">
                    <div class="col-md-6 form-group">
                        <input type="text" name="book_title" class="form-control" id="book_title" placeholder="Book title"
                               data-rule="minlen:2" data-msg="Please enter at least 2 chars">
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="text" class="form-control" name="book_author" id="book_author" placeholder="Book author"
                               data-rule="minlen:4" data-msg="Please enter a valid name">
                    </div>
                </div>
                <div class="form-group mt-3">
                        <textarea class="form-control" name="book_explanation" id="book_explanation" rows="5" placeholder="Book explanation"
                                  required></textarea>
                </div>
                <div class="form-group mt-3">
                    <select class="form-control selectpicker show-tick" multiple name="book_category[]"
                            id="bookCategorySelect" id="book_category">
                        @foreach($categories as $category)
                            <option> {{$category->book_category}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mt-3">
                    <input type="url" class="form-control" name="book_img"
                     placeholder="Please insert book wikipedia image url only" id="book_img">
                    </div>
                <div class="form-group mt-3">
                    <div class="form-group mt-3"><label for="book_date">Book release date:  </label></div>
                    <div class="row mt-3">
                        <div class="col-md-6 form-group">
                            <input class="form-control" name="book_date" type="date" id="book_date">
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input name="book_stock" type="text" class="form-control" id="book_stock" placeholder="Book stock" data-rule="integer">
                        </div>
                    </div>
                </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center">
                        <button type="submit">Add book</button>
                    </div>
                </form>
            </div>
        </div>
    @endsection
