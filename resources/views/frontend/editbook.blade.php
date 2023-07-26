@extends('frontend.layouts.inner-page')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Edit Book</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Edit Book</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <div class="editbook-container">
        <div class="form">
            <form action="{{route('editbook')}}" method="post" enctype="multipart/form-data" role="form" id="editBookForm" class="edit-book-form">
                @csrf
                <div id="editBook-errors"></div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input value="{{$book->id}}"  name="id" id="id" type="hidden">
                            <input type="text" name="book_title" class="form-control" id="book_title" placeholder="Book title"
                                   data-rule="minlen:2" data-msg="Please enter at least 2 chars" required value="{{$book->book_title}}">
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input type="text" class="form-control" name="book_author" id="book_author" placeholder="Book author"
                                   data-rule="minlen:4|" data-msg="Please enter a valid name" required value="{{$book->book_author}}">
                        </div>
                    </div>
                </div>
                <div class="form-group mt-3">
                        <textarea class="form-control" name="book_explanation" id="book_explanation" rows="5" placeholder="Book explanation"
                                  required>{{$book->book_explanation}}</textarea>
                </div>
                <div class="form-group mt-4">
                    <div class="row">
                        <span class="col-sm-3 form-group">
                            <label for="category-select">Category :</label>
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
                           placeholder="Please insert book wikipedia image url only" id="book_img" value="{{$book->book_img}}">
                </div>
                <div class="form-group mt-3">
                    <div class="form-group mt-3"><label for="book_date">Book release date:  </label></div>
                    <div class="row mt-3">
                        <div class="col-md-6 form-group">
                            <input class="form-control" name="book_date" type="date" id="book_date" value="{{$book->book_date}}">
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <input name="book_stock" type="number" class="form-control" id="book_stock" placeholder="Book stock" value="{{$book->book_stock}}">
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <button type="submit">Edit book</button>
                </div>
            </form>
        </div>
    </div>
@endsection
