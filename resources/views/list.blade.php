@extends('layouts.app')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>My List</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>My List</li>
                </ol>
            </div>
        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= My List Section ======= -->
    <section id="myList" class="myList section-bg">
        <div class="container mt-5">
            <div class="myList-list">
                <ul>
                    @isset($bookData)
                        @foreach($bookData as $book)
                            <li data-aos="fade-up d-flex">
                                <div class="row">
                                    <div class="col-md-2 img-container collapse" data-bs-toggle="collapse"  data-bs-target="#myList-list-{{$loop->iteration}}" >
                                        @if(isset($book['volumeInfo']['imageLinks']['thumbnail']) && !empty($book['volumeInfo']['imageLinks']['thumbnail']))
                                            <img src="{{$book['volumeInfo']['imageLinks']['thumbnail']}}" alt=""
                                                 class="img-fluid">
                                        @endif
                                        <a href="{{$book['volumeInfo']['previewLink']}}}}" class="store-link"><i class='bx bxl-google' ></i>Preview</a>
                                    </div>
                                    <div class="col-md-10 ">
                                        <a data-bs-toggle="collapse" class="collapse title"
                                           data-bs-target="#myList-list-{{$loop->iteration}}">@if(isset($book['volumeInfo']['title']) && !empty($book['volumeInfo']['title']))
                                                {{$book['volumeInfo']['title']}}
                                            @endif
                                            - @if(isset($book['volumeInfo']['authors']) && !empty($book['volumeInfo']['authors']))
                                                {{ implode(', ', $book['volumeInfo']['authors']) }}
                                            @endif <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                        @if(isset($book['volumeInfo']['categories']) && !empty($book['volumeInfo']['categories']))
                                            <p><strong>Categories
                                                    :</strong> {{implode(',',$book['volumeInfo']['categories'])}}</p>
                                        @endif
                                        @if(isset($book['volumeInfo']['publishedDate']) && !empty($book['volumeInfo']['publishedDate']))
                                            <p><strong>Release Date :</strong> {{$book['volumeInfo']['publishedDate']}}
                                            </p>
                                        @endif
                                        @if(isset($book['volumeInfo']['pageCount']) && !empty($book['volumeInfo']['pageCount']))
                                            <p><strong>{{$book['volumeInfo']['pageCount']}} </strong> Pages
                                        @endif
                                        <div id="myList-list-{{$loop->iteration}}" class="collapse mb-5" data-bs-parent=".myList-list">
                                            @if(isset($book['volumeInfo']['description']) && !empty($book['volumeInfo']['description']))
                                                <p><strong>Info
                                                        : </strong>{{strip_tags($book['volumeInfo']['description'])}}</p>
                                            @endif
                                        </div>
                                        <div class="read-links">
                                            <button title="Add to already read book list" id="alreadyReadButton" data-id="{{$book['id']}}"><i
                                                    class='bx bx-list-check'></i></button>
                                            <button title="Add to will read book list" id="willReadButton" data-id="{{$book['id']}}"><i class='bx bx-list-plus'></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                {{--                                                                    <span class="rating">--}}
                                {{--                                                                        <input value="5" name="rating" id="star5" type="radio">--}}
                                {{--                                                                        <label for="star5"></label>--}}
                                {{--                                                                        <input value="4" name="rating" id="star4" type="radio">--}}
                                {{--                                                                        <label for="star4"></label>--}}
                                {{--                                                                        <input value="3" name="rating" id="star3" type="radio">--}}
                                {{--                                                                        <label for="star3"></label>--}}
                                {{--                                                                        <input value="2" name="rating" id="star2" type="radio">--}}
                                {{--                                                                        <label for="star2"></label>--}}
                                {{--                                                                        <input value="1" name="rating" id="star1" type="radio">--}}
                                {{--                                                                        <label for="star1"></label>--}}
                                {{--                                                                    </span>--}}
                            </li>
                        @endforeach
                    @endisset
                </ul>
            </div>
        </div>
    </section>
    <!-- ======= End My List Section ======= -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container">

            <div class="row no-gutters">

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class='bx bx-book-open'></i>
                        <span data-purecounter-start="0" data-purecounter-end="54"
                              data-purecounter-duration="1" class="purecounter"></span>
                        <p><strong>Books</strong> registered.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class='bx bx-user-pin'></i>
                        <span data-purecounter-start="0" data-purecounter-end="55"
                              data-purecounter-duration="1" class="purecounter"></span>
                        <p><strong>Authors</strong> registered.</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class='bx bx-objects-horizontal-left'></i>
                        <span data-purecounter-start="0" data-purecounter-end="56" data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p>Book <strong>Categories.</strong> </p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class='bx bx-objects-horizontal-left'></i>
                        <span data-purecounter-start="0" data-purecounter-end="57" data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p><strong>Book stocks</strong> total.</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->
@endsection
