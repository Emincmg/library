@php
session_start();
@endphp

@extends('frontend.layouts.inner-page')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Add Book</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Add Book</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
            <div class="addbook-container">
                <div class="form">
                    <form action="addbook" method="post" enctype="multipart/form-data" role="form" id="addBookForm" class="add-book-form">
                        @csrf
                        <div id="addBook-errors"></div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="book_title" class="form-control" id="book_title" placeholder="Book title"
                                           data-rule="minlen:2" data-msg="Please enter at least 2 chars" required value="@if(isset($_SESSION['book_title'])){{$_SESSION['book_title']}}@endif">
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="text" class="form-control" name="book_author" id="book_author" placeholder="Book author"
                                           data-rule="minlen:4|" data-msg="Please enter a valid name" required value="@if(isset($_SESSION['book_author'])){{$_SESSION['book_author']}}@endif">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                        <textarea class="form-control" name="book_explanation" id="book_explanation" rows="5" placeholder="Book explanation"
                                  required>@if(isset($_SESSION['book_explanation'])){{$_SESSION['book_explanation']}}@endif</textarea>
                        </div>
                        <div class="form-group mt-4">
                            <div class="row">
                        <span class="col form-group">
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
                                   placeholder="Please insert book wikipedia image url only" id="book_img" value="@if(isset($_SESSION['book_img'])){{$_SESSION['book_img']}}@endif">
                        </div>
                        <div class="form-group mt-3">
                            <div class="form-group mt-3"><label for="book_date">Book release date:  </label></div>
                            <div class="row mt-3">
                                <div class="col-md-6 form-group">
                                    <input class="form-control" name="book_date" type="date" id="book_date" value="@if(isset($_SESSION['book_date'])){{$_SESSION['book_date']}}@endif">
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input name="book_stock" type="number" class="form-control" id="book_stock" placeholder="Book stock" value="@if(isset($_SESSION['book_stock'])){{$_SESSION['book_stock']}}@endif">
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
        </div>
    </section>
    @endsection
