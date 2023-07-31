@extends('frontend.layouts.inner-page')
@section('content')
    <div class="container dtl-container">
        <div class="card dtl-card">
            <div class="row p-3">
                <div class="col-md-3">
                    <img src="{{$book->book_img}}" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <h4>{{$book->book_title}} - {{$book->book_author}}</h4>
                    <hr class="solid">
                    <p>Categories: {{ implode(', ', $book->book_category) }} | Publish date: {{$book->book_date}}</p>
                    <p></p>
                    <hr class="solid">
                    <p>{{$book->book_explanation}}</p>
                </div>
            </div>
        </div>
    </div>
