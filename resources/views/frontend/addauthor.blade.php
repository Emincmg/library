@php
session_start();
@endphp

@extends('frontend.layouts.inner-page')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Edit Book</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Edit Book</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <div class="addauthor-container">
        <div class="form">
            <form action="addauthor" method="post" enctype="multipart/form-data" role="form" id="addAuthorForm" class="add-author-form">
                @csrf
                <div id="addAuthor-errors"></div>
                <div class="form-group">
                        <input type="text" name="author_name" class="form-control" id="author_name" placeholder="Author name"
                               data-rule="minlen:2" data-msg="Please enter at least 2 chars" required value="@if(isset($_SESSION['book_author'])){{$_SESSION['book_author']}}@endif">
                </div>
                <div class="form-group mt-3">
                        <textarea class="form-control" name="author_explanation" id="author_explanation" rows="5" placeholder="Author explanation"
                                  required></textarea>
                </div>
                <div class="form-group mt-3">
                    <input type="url" class="form-control" name="author_img"
                     placeholder="Please insert author wikipedia image url only" id="author_img" required>
                    </div>
                <div class="row mt-3">
                    <div class="form-group mt-3">
                    <div class="row mt-3">
                        <div class="col-md-6 form-group">
                            <label for="author_born">Born:  </label>
                            <input class="form-control" name="author_born" type="date" id="author_born" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="author_demise"> Demise: </label>
                            <input class="form-control" name="author_demise" type="date" id="author_demise">
                        </div>

                    </div>
                </div>
                    <div class="text-center mt-5">
                        <button type="submit">Add author</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    <script type="text/javascript">
    </script>
    @endsection
