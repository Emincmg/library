<div>
    <div class="input-group search-container mt-4">
        <span class="input-group-text" id="basic-addon1" style="background-color: #5c9f24"><i class="bi bi-search" style="color: white"></i></span>
        <input wire:model="search" type="search" class="form-control search-box" placeholder="Search Books">
    </div>
    <div class="portfolio-ccontainer">
            @foreach($lvBooks as $book)
                <div class="portfolio-item filter-card rounded-1">
                    <div class="portfolio-wrap rounded-1" style="height: 220px;">
                        <img src="{{$book->book_img}}" class="img-fluid w-100">
                        <div class="portfolio-info">
                            <h4></h4>
                            <p>{{$book->book_title}}</p>
                            <div class="portfolio-links">
                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                <a href="{{route('editbookpage',$book->id)}}"><i
                                        class="bx bx-edit-alt" title ="Edit book"></i></a>
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
                </div>
            </div>
        </div>
    </div>
     {{$lvBooks->links('frontend.layouts.pagination-links')}}
</div>

