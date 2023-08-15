<div>
    <!-- ======= My List Section ======= -->
    <section id="myList" class="myList section-bg" style="min-height: 70vh">
        <div class="container mt-5">
            <nav wire:ignore>
                <div class="nav nav-tabs" id="nav-tab" role="tablist" >
                    <button class="nav-link active" id="nav-will-read-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-will-read" type="button" role="tab" aria-controls="nav-will-read"
                            aria-selected="true"  >Will read
                    </button>
                    <button class="nav-link " id="nav-already-read-tab" data-bs-toggle="tab"
                            data-bs-target="#nav-already-read" type="button" role="tab" aria-controls="nav-already-read"
                            aria-selected="false" >Already read
                    </button>
                    <div class="filters-wrapper d-flex ml-auto">
                        <button class="custom-button negative" id="sortByButton"><i class='bx bx-sort' style="font-size: 0.8rem;"></i></button>
                        <button class="custom-button negative" id="filterButton"><i class='bx bx-search-alt-2' style="font-size: 0.8rem;"></i></button>
                    </div>
                </div>
            </nav>
            <div class="search-container mt-3" id="filterDiv" wire:ignore>
                <form class="search-form" onkeydown="return event.key != 'Enter';" style="position: unset">
                    <button>
                        <svg width="17" height="16" fill="none" xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="search">
                            <path d="M7.667 12.667A5.333 5.333 0 107.667 2a5.333 5.333 0 000 10.667zM14.334 14l-2.9-2.9" stroke="currentColor" stroke-width="1.333" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    <input wire:model.live="search" class="input" placeholder="Title, author, category etc..." required="" type="text">
                    <button class="reset" type="reset">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </form>
            </div>
            <div class="mt-3 mb-3" id="sortByOptions" wire:ignore>
                <div class="form-check form-check-inline">
                    <input class="form-check-input selected" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="title" wire:click="sortBy('title')">
                    <label class="form-check-label" for="inlineRadio1">Title</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="authors" wire:click="sortBy('authors')">
                    <label class="form-check-label" for="inlineRadio2">Author</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="rate" wire:click="sortBy('rate')">
                    <label class="form-check-label" for="inlineRadio3">Rating</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="date" wire:click="sortBy('date')">
                    <label class="form-check-label" for="inlineRadio4">Date</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="pages" wire:click="sortBy('pages')">
                    <label class="form-check-label" for="inlineRadio5">Page</label>
                </div>
                <div class="form-check form-check-inline ml-auto">
                    <button class="custom-button negative" wire:click="sortDirection('asc')" value="asc"><i class='bx bx-chevron-up'></i></button>
                    <button class="custom-button negative" wire:click="sortDirection('desc')" value="desc"><i class='bx bx-chevron-down'></i></button>
                </div>
            </div>

            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-will-read" role="tabpanel"
                     aria-labelledby="nav-will-read-tab" tabindex="0" wire:ignore.self>
                    <div class="myList-list mt-3">
                        <ul>
                            @forelse($booksNotReadBefore as $book)
                                <li data-aos="fade-up d-flex">
                                    <div class="row">
                                        <div class="col-md-2 img-container collapse" data-bs-toggle="collapse"
                                             data-bs-target="#myList-list-{{$loop->iteration}}">
                                            @if(isset($book->img) && !empty($book->img))
                                                <img src="{{$book->img}}" alt=""
                                                     class="img-fluid">
                                            @endif
                                        </div>
                                        <div class="col-md-10 ">
                                            @if(isset($book->link) && !empty($book->link))
                                                <a href="{{$book->link}}" class="list-store-link"><i
                                                        class='bx bxl-google'></i>Preview</a>
                                            @endif
                                            <a data-bs-toggle="collapse" class="collapse title"
                                               data-bs-target="#myList-list-{{$loop->iteration}}">@if(isset($book->title) && !empty($book->title))
                                                    {{$book->title}}
                                                @endif
                                                - @if(isset($book->authors) && !empty($book->authors))
                                                    {{ implode(', ', $book->authors) }}
                                                @endif
                                            </a>
                                                @if(isset($book->rate) && !empty($book->rate))
                                                    <div class="rateInfo">
                                                        <h4><strong style="color:#052E45 ">{{rtrim(rtrim($book->rate, '0'), '.')}} /5</strong>
                                                        </h4>
                                                    </div>
                                                @endif
                                                <div class="del-button-wrapper">
                                                    <button class="custom-button positive" id="rateButton" data-rate="{{$book->rate}}" data-id="{{$book->id}}"><i class='bx bxs-star' style='font-size: 0.8rem' ></i></button>
                                                <button class="custom-button negative" title="Delete book" id="deleteButton" data-id="{{$book['id']}}">
                                                    <i class='bx bx-x' style='font-size: 0.8rem'></i></button>
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
                                            <div id="myList-list-{{$loop->iteration}}" class="collapse mb-5"
                                                 data-bs-parent=".myList-list">
                                                @if(isset($book->explanation) && !empty($book->explanation))
                                                    <p><strong>Info
                                                            : </strong>{{strip_tags($book->explanation)}}</p>
                                                @endif
                                            </div>
                                            <div class="read-links">
                                                <button class="custom-button positive" title="View notes"
                                                        id="viewNotesButton" data-note="{{$book->notes}}"
                                                        data-title="{{$book->title}}" data-id="{{$book->id}}"><i
                                                        class='bx bx-note'></i></button>
                                                <button class="custom-button positive"
                                                        title="Add to already read book list" id="alreadyReadChangeBtn"
                                                        data-id="{{$book->id}}"><i
                                                        class='bx bx-list-check'></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                    @empty
                                        <div class="empty-container">
                                            <h2>No books.</h2>
                                        </div>
                            @endforelse
                                {{$booksNotReadBefore->links('layouts.pagination-links')}}
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

                    </div>
                </div>
                <div class="tab-pane fade" id="nav-already-read" role="tabpanel" aria-labelledby="nav-already-read-tab"
                     tabindex="0" wire:ignore.self>
                    <div class="myList-list mt-3">
                        <ul>
                                @forelse($booksReadBefore as $book)
                                    <li data-aos="fade-up d-flex">
                                        <div class="row">
                                            <div class="col-md-2 img-container collapse" data-bs-toggle="collapse"
                                                 data-bs-target="#myList-list-{{$loop->iteration}}">
                                                @if(isset($book->img) && !empty($book->img))
                                                    <img src="{{$book->img}}" alt=""
                                                         class="img-fluid">
                                                @endif
                                            </div>
                                            <div class="col-md-10 ">
                                                @if(isset($book->link) && !empty($book->link))
                                                    <a href="{{$book->link}}" class="list-store-link"><i
                                                            class='bx bxl-google'></i>Preview</a>
                                                @endif
                                                <a data-bs-toggle="collapse" class="collapse title"
                                                   data-bs-target="#myList-list-{{$loop->iteration}}">@if(isset($book->title) && !empty($book->title))
                                                        {{$book->title}}
                                                    @endif
                                                    - @if(isset($book->authors) && !empty($book->authors))
                                                        {{ implode(', ', $book->authors) }}
                                                    @endif
                                                </a>
                                                    @if(isset($book->rate) && !empty($book->rate))
                                                        <div class="rateInfo">
                                                            <h4><strong style="color:#052E45 ">{{rtrim(rtrim($book->rate, '0'), '.')}} /5</strong>
                                                            </h4>
                                                        </div>
                                                    @endif
                                                <div class="del-button-wrapper">
                                                    <button class="custom-button positive" id="rateButton" data-rate="{{$book->rate}}" data-id="{{$book->id}}"><i class='bx bxs-star' style='font-size: 0.8rem' ></i></button>
                                                    <button class="custom-button negative" title="Delete book" id="deleteButton"
                                                            data-id="{{$book->id}}"><i class='bx bx-x' style='font-size: 0.8rem'></i></button>
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
                                                <div id="myList-list-{{$loop->iteration}}" class="collapse mb-5"
                                                     data-bs-parent=".myList-list">
                                                    @if(isset($book->explanation) && !empty($book->explanation))
                                                        <p><strong>Info
                                                                : </strong>{{strip_tags($book->explanation)}}</p>
                                                    @endif

                                                </div>
                                                <div class="read-links">
                                                    <button class="custom-button positive" title="View notes"
                                                            id="viewNotesButton" data-note="{{$book->notes}}"
                                                            data-title="{{$book->title}}" data-id="{{$book->id}}"><i
                                                            class='bx bx-note'></i></button>
                                                    <button class="custom-button positive"
                                                            title="Add to will read book list" id="willReadChangeBtn"
                                                            data-id="{{$book['id']}}"><i class='bx bx-list-plus'></i>
                                                    </button>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                @empty
                                    <div class="empty-container">
                                        <h2>No books.</h2>
                                    </div>
                                @endforelse
                            {{$booksReadBefore->links('layouts.pagination-links')}}
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
                    </div>
                </div>
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
                        <p><strong>Books</strong></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class='bx bx-user-pin'></i>
                        <span data-purecounter-start="0" data-purecounter-end="{{$authorsCount}}"
                              data-purecounter-duration="1" class="purecounter"></span>
                        <p><strong>Authors</strong></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class='bx bx-objects-horizontal-left'></i>
                        <span data-purecounter-start="0" data-purecounter-end="{{$categoriesCount}}"
                              data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p><strong>Categories.</strong></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class='bx bx-notepad' ></i>
                        <span data-purecounter-start="0" data-purecounter-end="{{$notesCount}}" data-purecounter-duration="1"
                              class="purecounter"></span>
                        <p><strong>Book notes</strong></p>
                    </div>
                </div>

            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const sortByOptions = document.getElementById('sortByOptions');
                const sortByButton = document.getElementById('sortByButton');
                const filterDiv = document.getElementById('filterDiv');
                const filterButton = document.getElementById('filterButton');


                sortByOptions.style.display = 'none';
                if(filterDiv)
                    filterDiv.style.display = 'none';


                sortByButton.addEventListener('click', function() {

                    if (sortByOptions.style.display === 'none') {
                        sortByOptions.style.display = 'block';
                    } else {
                        sortByOptions.style.display = 'none';
                    }
                });
                filterButton.addEventListener('click', function() {

                    if (filterDiv.style.display === 'none') {
                        filterDiv.style.display = 'block';
                    } else {
                        filterDiv.style.display = 'none';
                    }
                });
            });
        </script>
    </section><!-- End Counts Section -->
</div>
