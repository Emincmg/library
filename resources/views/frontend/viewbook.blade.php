@section('book detail modal body')
    <div class="col-lg-2">
        @isset($detailbook)<p>{{$detailbook->book_title}}</p>@endisset
    </div>
@endsection
