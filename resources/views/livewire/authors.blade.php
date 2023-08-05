<div>
    <div class="input-group search-container mt-4">
        <span class="input-group-text" id="basic-addon1" style="background-color:#052E45"><i class="bi bi-search" style="color: white"></i></span>
        <input wire:model="search" type="search" class="form-control search-box" placeholder="Search Authors">
    </div>
    <div class="member-container">
        @foreach($lvAuthors as $author)
                <div class="member rounded-1">
                    <img src="{{$author->author_img}}" class="w-100 img-fluid rounded-1"  alt=""
                         style="height: 220px;">
                    <div class="member-info">
                        <div class="member-info-content">
                            <h4>{{$author->author_name}}</h4>
                            <span>{{$author->author_books}}</span>
                        </div>
                    </div>
                </div>
        @endforeach
    </div>
    {{$lvAuthors->links('layouts.pagination-links')}}
</div>
