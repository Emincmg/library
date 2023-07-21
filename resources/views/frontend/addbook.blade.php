@extends('frontend.layouts.app')
@section('content')
    <div class="addbook-container">
        <div class="form">
            <form action="addbook" method="post" enctype="multipart/form-data" role="form" id="addBookForm" class="add-book-form">
                @csrf
                <h4>Add a new book</h4>
                <div id="addBook-errors"></div>
               <div class="form-group">
                   <div class="row mt-lg-5">
                       <div class="col-md-6 form-group">
                           <input type="text" name="book_title" class="form-control" id="book_title" placeholder="Book title"
                                  data-rule="minlen:2" data-msg="Please enter at least 2 chars" required>
                       </div>
                       <div class="col-md-6 form-group mt-3 mt-md-0">
                           <input type="text" class="form-control" name="book_author" id="book_author" placeholder="Book author"
                                  data-rule="minlen:4|" data-msg="Please enter a valid name" required>
                       </div>
                   </div>
               </div>
                <div class="form-group mt-3">
                        <textarea class="form-control" name="book_explanation" id="book_explanation" rows="5" placeholder="Book explanation"
                                  required></textarea>
                </div>
                <div class="form-group mt-4">
                    <div class="row">
                        <span class="col-sm-2 form-group">
                            <label for="category-select">Book category :</label>
                        </span>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <select name="book_category[]" id="category-select" multiple>
                                @foreach($categories as $category)
                                    <option value="{{$category->book_category}}"> {{$category->book_category}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
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
                            <input name="book_stock" type="number" class="form-control" id="book_stock" placeholder="Book stock">
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
