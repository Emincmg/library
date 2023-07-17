<div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
    <input wire:model="search" type="search" class="form-control" placeholder="Search Books">
</div>
@if(Empty($lvBooks))
    @foreach($lvpBooks as $book)
        <div class="col-lg-2 col-md-5 portfolio-item filter-card">
        <div class="portfolio-wrap rounded-1 " style="height: 220px;">
            <img src="{{url($book->book_img)}}" class="h-100 w-100 img-fluid" alt="">
            <div class="portfolio-info">
                <h4></h4>
                <p>{{$book->book_title}}</p>
                <div class="portfolio-links">
                    <a href="{{url($book->book_img)}}" data-gallery="portfolioGallery"
                       class="portfolio-lightbox" title="{{$book->book_title}}"><i
                            class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>
        </div>
        </div>
    @endforeach
    <div class="container ">{{$lvpBooks->links()}}</div>
@else
@foreach($lvBooks as $book)
    <div class="col-lg-2 col-md-5 portfolio-item filter-card">
        <div class="portfolio-wrap rounded-1 " style="height: 220px;">
            <img src="{{url($book->book_img)}}" class="h-100 w-100 img-fluid" alt="">
            <div class="portfolio-info">
                <h4></h4>
                <p>{{$book->book_title}}</p>
                <div class="portfolio-links">
                    <a href="{{url($book->book_img)}}" data-gallery="portfolioGallery"
                       class="portfolio-lightbox" title="{{$book->book_title}}"><i
                            class="bx bx-plus"></i></a>
                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
            </div>
        </div>
    </div>
@endforeach
<div class="container d-flex align-items-center justify-content-center">{{$lvBooks->links()}}</div>
@endif
