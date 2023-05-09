@section('book detail modal body')
    <div class="container">
        <div class="row">
            <div class="col-sm-3 align-self-center">
                <img class="rounded img-responsive" id="book_dtl_img" src="" alt="" style="max-height: 200%; max-width: 100%">
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col">
                        <h5 class="text-primary" id="book_dtl_title"></h5>
                    </div>
                </div>
                <div class="row">
                        <p class="text-black" id="book_dtl_category_date"></p>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <p id="book_dtl_explanation"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
