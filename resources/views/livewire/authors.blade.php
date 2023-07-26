<div>
    <div class="member-container">
        @foreach($lvAuthors as $author)
            <div class="col-xl-2 rounded-1">
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
            </div>
        @endforeach
    </div>
    {{$lvAuthors->links('frontend.layouts.pagination-links')}}
</div>
