@extends('layouts.inner-page')
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
    <section class="inner-page">
        <div class="container">
            <div class="editbook-container">
                <div class="form">
                    <form action="{{route('editbook')}}" method="post" enctype="multipart/form-data" role="form"
                          id="editBookForm" class="edit-book-form">
                        @csrf
                        <div id="editBook-errors"></div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input value="{{$book->id}}" name="id" id="id" type="hidden">
                                    <input type="text" name="title" class="form-control" id="title"
                                           placeholder="Book title"
                                           data-rule="minlen:2" data-msg="Please enter at least 2 chars" required
                                           value="{{$book->title}}">
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="text" class="form-control" name="author" id="author"
                                           placeholder="Book author"
                                           data-rule="minlen:4|" data-msg="Please enter a valid name" required
                                           value="{{$book->author}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                        <textarea class="form-control" name="explanation" id="explanation" rows="5"
                                  placeholder="Book explanation"
                                  required>{{$book->explanation}}</textarea>
                        </div>
                        <div class="form-group mt-4">
                            <div class="row">
                        <span class="col-sm-3 form-group">
                            <label for="category-select">Category :</label>
                        </span>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <select name="category[]" id="category-select" multiple>
                                        @foreach($categories as $category)
                                            <option
                                                value="{{$category->category}}" <?= in_array($category->category, $book->category) ? 'selected="selected">' : '>' ?> {{$category->category}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="url" class="form-control" name="img"
                                   placeholder="Please insert book wikipedia image url only" id="img"
                                   value="{{$book->img}}">
                        </div>
                        <div class="form-group mt-3">
                            <div class="form-group mt-3"><label for="date">Book release date: </label></div>
                            <div class="row mt-3">
                                <div class="col-md-6 form-group">
                                    <input class="form-control" name="date" type="date" id="date"
                                           value="{{$book->date}}">
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input name="stock" type="number" class="form-control" id="stock"
                                           placeholder="Book stock" value="{{$book->stock}}">
                                </div>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <button type="submit">Edit book</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
