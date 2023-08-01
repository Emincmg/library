@extends('layouts.inner-page')
@section('content')
    <div class="container dtl-container">
        <div class="card dtl-card">
            <div class="row p-3">
                <div class="col-md-3 img-container">
                    <img src="{{$book->img}}" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <h4>{{$book->title}} - {{$book->author}}</h4>
                    <hr class="solid">
                    <p>Categories: {{ implode(', ', $book->category) }} | Publish date: {{$book->date}}</p>
                    <p></p>
                    <hr class="solid">
                    <p>{{$book->explanation}}</p>
                    <div class="read-links">
                        <button title="Add to already read book list"><i class='bx bx-list-check'></i></button>
                        <button title="Add to will read book list"><i class='bx bx-list-plus' ></i></button>
                    </div>
                </div>
            </div>

        </div>
    </div>
