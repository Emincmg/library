@include('frontend.layouts.livewire-scripts')
<div>
<div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
    <input wire:model="search" type="search" class="form-control" placeholder="Search Books">
</div>
    @if(Empty($lvBooks))
    @foreach($lvpBooks as $book)
    <div class="card row-hover pos-relative px-2 mb-2 border-warning border-top-0 border-right-0 border-bottom-0 rounded-1 display-flex"  data-author="{{ $book->book_author }}" data-category='{{ json_encode($book->book_category) }}' data-id="{{$book->id}}">
        <div class="row">
            <div class="col-md-5">
                <div class="row pt-1">
                    <h5>
                        <a href="javascript:void(0);" class="bookName text-primary" style="font-size: medium" data-id="{{$book->id}}">{{$book->book_title}}</a>
                        <a href="javascript:void(0);"> - </a>
                        <a href="javascript:void(0);" class="bookAuthor text-primary" style="font-size: medium">{{$book->book_author }}</a>
                    </h5>
                </div>
            </div>
            <div class="col-md-5">
                <div class="row pt-1">
                    <div class="col-md-auto px-1">
                        <span class="bookDate d-block text-sm" style="font-size: 12px; margin-top: 5px;">Last Update: {{$book->updated_at }}</span>
                    </div>
                    <div class="col-md-auto px-1">
                        <span class="bookStock d-block text-sm" style="font-size: 12px; margin-top: 5px;">Stock: {{$book->book_stock }}</span>
                    </div>
                </div>
            </div>
            <div class="col">
                <button class="btn editButton text-primary btn-close-white" id="editButton" data-id="{{ $book->id }}">
                    <i class="ionicons ion-edit"></i>
                </button>
            </div>
            <div class="col">
                <button data-id="{{ $book->id }}" class="btn deleteButton text-danger btn-close-white" style="font-size: 14px;">
                    <i class="bi bi-trash-fill"></i>
                </button>
            </div>
        </div>
    </div>
   @endforeach
        <div class="container d-flex align-items-center justify-content-center">{{$lvpBooks->links()}}</div>
    @else
        @foreach($lvBooks as $book)
            <div class="card row-hover pos-relative px-2 mb-2 border-warning border-top-0 border-right-0 border-bottom-0 rounded-1 display-flex"  data-author="{{ $book->book_author }}" data-category='{{ json_encode($book->book_category) }}' data-id="{{ $book->id }}">
                <div class="row">
                    <div class="col-md-5">
                        <div class="row pt-1">
                            <h5>
                                <a href="javascript:void(0);" class="bookName text-primary" style="font-size: medium" data-id="{{$book->id }}">{{$book->book_title }}</a>
                                <a href="javascript:void(0);"> - </a>
                                <a href="javascript:void(0);" class="bookAuthor text-primary" style="font-size: medium">{{$book->book_author }}</a>
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="row pt-1">
                            <div class="col-md-auto px-1">
                                <span class="bookDate d-block text-sm" style="font-size: 12px; margin-top: 5px;">Last Update: {{$book->updated_at }}</span>
                            </div>
                            <div class="col-md-auto px-1">
                                <span class="bookStock d-block text-sm" style="font-size: 12px; margin-top: 5px;">Stock: {{$book->book_stock }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <button class="btn editButton text-primary btn-close-white" id="editButton" data-id="{{ $book->id }}">
                            <i class="ionicons ion-edit"></i>
                        </button>
                    </div>
                    <div class="col">
                        <button data-id="{{ $book->id }}" class="btn deleteButton text-danger btn-close-white" style="font-size: 14px;">
                            <i class="bi bi-trash-fill"></i>
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    <div class="container d-flex align-items-center justify-content-center">{{$lvBooks->links()}}</div>
    @endif

</div>
@yield('lv-scripts')
