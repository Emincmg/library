<div>
    <!-- ======= My List Section ======= -->
    <section id="myList" class="myList section-bg">
        <div class="container mt-5">
            <div class="myList-list ">
                <div class="section-title">
                    <h2>Books i will read</h2>
                </div>
                <ul>
                        @forelse($unreadBooks as $book)
                            <li data-aos="fade-up d-flex" wire:key="{{$loop->iteration}}">
                                <div class="row">
                                    <div class="col-md-2 img-container collapse" data-bs-toggle="collapse"  data-bs-target="#myList-list-{{$loop->iteration}}" >
                                        @if(isset($book->img) && !empty($book->img))
                                            <img src="{{$book->img}}" alt=""
                                                 class="img-fluid">
                                        @endif
                                            @if(isset($book->link) && !empty($book->link))
                                                <a href="{{$book->link}}}}" class="list-store-link"><i class='bx bxl-google' ></i>Preview</a>
                                            @endif
                                    </div>
                                    <div class="col-md-10 ">
                                        <a data-bs-toggle="collapse" class="collapse title"
                                           data-bs-target="#myList-list-{{$loop->iteration}}">@if(isset($book->title) && !empty($book->title))
                                                {{$book->title}}
                                            @endif
                                            - @if(isset($book->authors) && !empty($book->authors))
                                                {{ implode(', ', $book->authors) }}
                                            @endif </a>
                                        <div class="del-button-wrapper">
                                            <button title="Delete book" id="deleteButton" data-id="{{$book['id']}}"><i class='bx bx-x' ></i></button>
                                        </div>
                                        @if(isset($book->category) && !empty($book->category))
                                            <p><strong>Categories
                                                    :</strong> {{implode(',',$book->category)}}</p>
                                        @endif
                                        @if(isset($book->date) && !empty($book->date))
                                            <p><strong>Release Date :</strong> {{$book->date}}
                                            </p>
                                        @endif
                                        @if(isset($book->pages) && !empty($book->pages))
                                            <p><strong>{{$book->pages}} </strong> Pages
                                        @endif
                                        <div id="myList-list-{{$loop->iteration}}" class="collapse mb-5" data-bs-parent=".myList-list">
                                            @if(isset($book->explanation) && !empty($book->explanation))
                                                <p><strong>Info
                                                        : </strong>{{strip_tags($book->explanation)}}</p>
                                            @endif

                                        </div>
                                        <div class="read-links">
                                            <button title="Add to already read book list" wire:click="changeReadField('{{ json_encode([$book->id, true]) }}')"><i
                                                    class='bx bx-list-check'></i></button>
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
                    @empty
                        <li class="placeholder-wrapper">

                                <div class="col-md-2" >
                                    <div class="placeholder-img section-bg"></div>
                                </div>
                                <div class="col-md-10">
                                <div class="row">
                                </div>

                                    <div class="row">
                                    </div>
                                    <div class="row">
                                    </div>
                                    <div class="row">
                                    </div>
                            </div>
                        </li>
                        @endforelse
                    <div class="col mt-4">
                        <div class="container portfolio-insert">
                            <div class="col-md-6 icon-box">
                                <div class="d-flex flex-column">
                                    <a href="{{route('addbookpage')}}"><i class="bx bx-plus rounded-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </ul>
                <div class="section-title mt-5">
                    <h2>Books i already read</h2>
                </div>
                <ul>
                    @isset($readBooks)
                        @forelse($readBooks as $book)
                            <li data-aos="fade-up d-flex" wire:key="{{$loop->iteration}}">
                                <div class="row">
                                    <div class="col-md-2 img-container collapse" data-bs-toggle="collapse"  data-bs-target="#myList-list-{{$loop->iteration}}" >
                                        @if(isset($book->img) && !empty($book->img))
                                            <img src="{{$book->img}}" alt=""
                                                 class="img-fluid">
                                        @endif
                                            @if(isset($book->link) && !empty($book->link))
                                                <a href="{{$book->link}}}}" class="list-store-link"><i class='bx bxl-google' ></i>Preview</a>
                                            @endif
                                    </div>
                                    <div class="col-md-10 ">
                                        <a data-bs-toggle="collapse" class="collapse title"
                                           data-bs-target="#myList-list-{{$loop->iteration}}">@if(isset($book->title) && !empty($book->title))
                                                {{$book->title}}
                                            @endif
                                            - @if(isset($book->authors) && !empty($book->authors))
                                                {{ implode(', ', $book->authors) }}
                                            @endif
                                        </a>
                                        <div class="del-button-wrapper">
                                            <button title="Delete book" id="deleteButton" data-id="{{$book->id}}"><i class='bx bx-x'></i></button>
                                        </div>
                                        @if(isset($book->category) && !empty($book->category))
                                            <p><strong>Categories
                                                    :</strong> {{implode(',',$book->category)}}</p>
                                        @endif
                                        @if(isset($book->date) && !empty($book->date))
                                            <p><strong>Release Date :</strong> {{$book->date}}
                                            </p>
                                        @endif
                                        @if(isset($book->pages) && !empty($book->pages))
                                            <p><strong>{{$book->pages}} </strong> Pages
                                        @endif
                                        <div id="myList-list-{{$loop->iteration}}" class="collapse mb-5" data-bs-parent=".myList-list">
                                            @if(isset($book->explanation) && !empty($book->explanation))
                                                <p><strong>Info
                                                        : </strong>{{strip_tags($book->explanation)}}</p>
                                            @endif
                                        </div>
                                        <div class="read-links">
                                            <button title="Add to will read book list" @isset($book->id)wire:click="changeReadField('{{ json_encode([$book->id, false]) }}')"@endisset><i class='bx bx-list-plus'></i>
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
                        @empty
                            <li class="placeholder-wrapper">

                                <div class="col-md-2" >
                                    <div class="placeholder-img section-bg"></div>
                                </div>
                                <div class="col-md-10">
                                    <div class="row">
                                    </div>

                                    <div class="row">
                                    </div>
                                    <div class="row">
                                    </div>
                                    <div class="row">
                                    </div>
                                </div>
                            </li>
                        @endforelse

                    @endisset
                </ul>
            </div>
        </div>
    </section>

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
        <div class="container">

            <div class="row no-gutters">

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class='bx bx-book-open'></i>
                        <span data-purecounter-start="0" data-purecounter-end="{{$booksCount}}"
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
</div>
