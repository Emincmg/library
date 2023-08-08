<div>
    <section id="myList" class="myList section-bg">
        <div class="container mt-5">
            <div class="myList-list">
                <div class="search-container">
                    <form class="search-form" onkeydown="return event.key != 'Enter';">
                        <button>
                            <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="search">
                                <path d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9" stroke="currentColor" stroke-width="1.333" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                        <input wire:model="search" class="input" placeholder="Title, author, category etc..." required="" type="text">
                        <button class="reset" type="reset">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </form>
                </div>
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
                                    </div>
                                    <div class="col-md-10 ">
                                        <a href="{{$book['volumeInfo']['previewLink']}}" class="store-link"><i class='bx bxl-google' ></i>Preview</a>
                                        <a data-bs-toggle="collapse" class="collapse title"
                                           data-bs-target="#myList-list-{{$loop->iteration}}">@if(isset($book['volumeInfo']['title']) && !empty($book['volumeInfo']['title']))
                                                {{$book['volumeInfo']['title']}}
                                            @endif
                                            - @if(isset($book['volumeInfo']['authors']) && !empty($book['volumeInfo']['authors']))
                                                {{ implode(', ', $book['volumeInfo']['authors']) }}
                                            @endif <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                        <div class="search-rating" data-rate="@if(isset( $book['volumeInfo']['averageRating']) && $book['volumeInfo']['averageRating'] !== 0 ){{$book['volumeInfo']['averageRating']}}@endif"></div>
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
                                            <button class="custom-button positive" title="Add to book list" id="add-button" data-id="{{$book['id']}}"><i class='bx bx-plus'></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    @endisset
                        <div class="container" wire:loading.remove style="height: 60vh">

                        </div>

                    <div wire:loading.block>

                        <li class="placeholder-wrapper">

                            <div class="col-md-2">
                                <div class="placeholder-img section-bg"></div>
                            </div>
                            <div class="col-md-10" >
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

                    </div>

                </ul>
            </div>
        </div>
    </section>
</div>


