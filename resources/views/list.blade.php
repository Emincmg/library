@extends('layouts.app')
@section('content')
    <!-- ======= Future Book List Section ======= -->
            <section id="myList" class="myList section-bg">
                <div class="container mt-5">

                    <div class="section-title">
                        <h2>The list of books I will read.</h2>
                        <p></p>
                    </div>

                    <div class="">
                        <ul>
                            @foreach($unreadBooks as $book)
                            <li data-aos="fade-up d-flex">
                                <div class="row">
                                    <div class="col-md-2 img-container">
                                        <img src="{{$book->img}}" alt="" class="img-fluid">
{{--                                        <a href="{{$book->link}}" class="mt-2"><i class='bx bxl-play-store'></i>Store</a>--}}
                                    </div>
                                    <div class="col-md-10 ">
                                        <a data-bs-toggle="collapse" class="collapse" data-bs-target="#-{{$loop->iteration}}">{{$book->title}} - {{ implode(', ', $book->authors) }}
                                            <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                        <div id="-{{$loop->iteration}}" class="collapse" data-bs-parent=".">
                                            <p><strong>Info : </strong>{{strip_tags($book->explanation)}}</p>
                                        </div>
                                        <p><strong>Categories :</strong> {{implode(',',$book->category)}}</p>
                                        <p><strong>Release Date :</strong> {{$book->date}}</p>
                                        <p><strong>{{$book->pages}} Pages</strong>
                                    </div>
                                </div>
{{--                                <span class="rating">--}}
{{--                                    <input value="5" name="rating" id="star5" type="radio">--}}
{{--                                    <label for="star5"></label>--}}
{{--                                    <input value="4" name="rating" id="star4" type="radio">--}}
{{--                                    <label for="star4"></label>--}}
{{--                                    <input value="3" name="rating" id="star3" type="radio">--}}
{{--                                    <label for="star3"></label>--}}
{{--                                    <input value="2" name="rating" id="star2" type="radio">--}}
{{--                                    <label for="star2"></label>--}}
{{--                                    <input value="1" name="rating" id="star1" type="radio">--}}
{{--                                    <label for="star1"></label>--}}
{{--                                </span>--}}
                            </li>
                            @endforeach
                        </ul>
                    </div>

                </div>
                <div class="col">
                    <div class="container portfolio-insert">
                        <div class="col-md-6 icon-box">
                            <div class="d-flex flex-column">
                                <a href="{{route('addbookpage')}}"><i class="bx bx-plus rounded-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End Future Book List Section Section -->

    <!-- ======= Already Read Book List Section ======= -->
    <section id="myList" class="myList section-bg">
        <div class="container">

            <div class="section-title">
                <h2>The list of books I already read.</h2>
                <p></p>
            </div>

            <div class="">
                <ul>
                    @foreach($readBooks as $book)
                        <li data-aos="fade-up d-flex">
                            <div class="row">
                                <div class="col-md-2 img-container">
                                    <img src="{{$book->img}}" alt="" class="img-fluid">
                                    {{--                                        <a href="{{$book->link}}" class="mt-2"><i class='bx bxl-play-store'></i>Store</a>--}}
                                </div>
                                <div class="col-md-10 ">
                                    <a data-bs-toggle="collapse" class="collapse" data-bs-target="#-{{$loop->iteration}}">{{$book->title}} - {{ implode(', ', $book->authors) }}
                                        <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="-{{$loop->iteration}}" class="collapse" data-bs-parent=".">
                                        <p><strong>Info : </strong>{{strip_tags($book->explanation)}}</p>
                                    </div>
                                    <p><strong>Categories :</strong> {{implode(',',$book->category)}}</p>
                                    <p><strong>Release Date :</strong> {{$book->date}}</p>
                                    <p><strong>{{$book->pages}} Pages</strong>
                                </div>
                            </div>
                            {{--                                <span class="rating">--}}
                            {{--                                    <input value="5" name="rating" id="star5" type="radio">--}}
                            {{--                                    <label for="star5"></label>--}}
                            {{--                                    <input value="4" name="rating" id="star4" type="radio">--}}
                            {{--                                    <label for="star4"></label>--}}
                            {{--                                    <input value="3" name="rating" id="star3" type="radio">--}}
                            {{--                                    <label for="star3"></label>--}}
                            {{--                                    <input value="2" name="rating" id="star2" type="radio">--}}
                            {{--                                    <label for="star2"></label>--}}
                            {{--                                    <input value="1" name="rating" id="star1" type="radio">--}}
                            {{--                                    <label for="star1"></label>--}}
                            {{--                                </span>--}}
                        </li>
                    @endforeach
                </ul>
            </div>

        </div>
    </section><!-- End Already Read Book List Section -->

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
