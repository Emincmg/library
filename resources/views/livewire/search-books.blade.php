<div class="container">
    <div class="section-title">
        <h2>Books</h2>
        <p>Browse through books</p>
    </div>
    <div class="input-group search-container mt-4">
        <span class="input-group-text" id="basic-addon1" style="background-color: #5c9f24"><i class="bi bi-search" style="color: white"></i></span>
        <input wire:model="search" type="search" class="form-control search-box" placeholder="Search Books">
    </div>
    <div class="row portfolio-container mt-4">
            @foreach($lvBooks as $book)
                <div class="col-lg-2 col-md-5 portfolio-item filter-card">
                    <div class="portfolio-wrap rounded-1 " style="height: 220px;">
                        <img src="{{$book->book_img}}" class="h-100 w-100 img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4></h4>
                            <p>{{$book->book_title}}</p>
                            <div class="portfolio-links">
                                <a href="{{route('editbookpage',$book->id)}}"><i
                                        class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

    </div>
    <div class="col">
        <div class="container portfolio-insert">
            <div class="col-md-6 icon-box">
                <div class="d-flex flex-column">
                    <a href="{{route('addbookpage')}}"><i class="bx bx-plus rounded-1"></i></a>
{{--                    <p>Add new book</p>--}}
                </div>
            </div>
        </div>
    </div>
     {{$lvBooks->links('frontend.layouts.pagination-links')}}
</div>


