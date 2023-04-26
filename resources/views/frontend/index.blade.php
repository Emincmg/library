@extends('frontend.layouts.app')
@include('frontend.addbook')
@include('frontend.viewbook')
@include('frontend.editbook')


@section('content')
    <section
        style="background-image:url('https://images.wallpaperscraft.com/image/single/library_inscription_sign_140549_1920x1080.jpg')">
        <div class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    @if(isset($featuredBook))
                        <h1><span class="text-white">{{$featuredBook->book_title}}</span></h1>
                        <p class="lead text-white">by {{$featuredBook->book_author}}</p>
                        <p>
                            <a href="#" class="btn btn-primary my-2" id="featuredBook">Inspect</a>
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mb-3">
                    <div id="alerts">

                    </div>
                    <div class="row text-left mb-5">
                        <div class="col-lg-6 mb-3 mb-sm-0">
                            <div
                                class="dropdown form-control form-control-lg bg-white bg-op-9 text-sm w-lg-50"
                                style="width: 100%;">

                                <div class="dropdown-header text-primary">Author</div>
                                <select class="form-control form-control-lg bg-white bg-op-9 text-sm w-lg-50"
                                        data-toggle="select" tabindex="-98">
                                    <option> Novel</option>
                                    <option> Science</option>
                                    <option> Etc.</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 text-lg-right">
                            <div
                                class="dropdown form-control form-control-lg bg-white bg-op-9 ml-auto text-sm w-lg-50"
                                style="width: 100%;">
                                <div class="dropdown-header text-primary">Category</div>
                                <select class="form-control form-control-lg bg-white bg-op-9 ml-auto text-sm w-lg-50"
                                        data-toggle="select" tabindex="-98">
                                    <option> Votes</option>
                                    <option> Views</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    {{--Book list section--}}
                    <div class="container" id="booklist">
                        @foreach($books as $key)
                            <div
                                class="card row-hover pos-relative py-1 px-1 mb-3 border-warning border-top-0 border-right-0 border-bottom-0 rounded-0 display-flex">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="row">
                                            <h5>
                                                <a href="javascript:void(0);"
                                                   class="bookName text-primary" style="font-size: medium"
                                                   id="{{ $key->id }}">{{ $key->book_title }} </a>
                                                <a href="">-</a>
                                                <a href="#"
                                                   class="bookAuthor text-primary"
                                                   style="font-size: medium">{{ $key->book_author }}</a>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="row">
                                            <div class="col-md-auto px-1">
                                                        <span class="d-block text-sm"
                                                              style="font-size: 12px; margin-top: 5px;">Last Update: {{ $key->updated_at }} </span>
                                            </div>
                                            <div class="col-md-auto px-1">
                                                        <span class="d-block text-sm"
                                                              style="font-size: 12px; margin-top: 5px;">Stock: {{ $key->book_stock }} </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <button class="btn editButton text-primary btn-close-white" id="editButton" data-id="{{$key->id}}"><i
                                                class="ionicons ion-edit"></i></button>
                                    </div>
                                    <div class="col">
                                        <button data-id="{{$key->id}}"
                                                class="btn deleteButton text-danger btn-close-white"
                                                style="font-size: 14px;">
                                            <i class="bi bi-trash-fill"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{--End of book list section--}}

                {{--Sidebar content--}}
                <div class="col-lg-3 mb-4 mb-lg-0 px-lg-0 mt-lg-0">
                    <div class="d-flex flex-row op-7 btn-group ">
                        <button id="addModalButton" type="button" class="btn btn-success m-2 rounded my-2">
                            Add a new book
                        </button>
                    </div>
                    <div
                        style="visibility: hidden; display: none; width: 285px; height: 801px; margin: 0px; float: none; position: static; inset: 85px auto auto;"></div>

                    <div
                        data-settings="{&quot;parent&quot;:&quot;#content&quot;,&quot;mind&quot;:&quot;#header&quot;,&quot;top&quot;:10,&quot;breakpoint&quot;:992}"
                        data-toggle="sticky" class="sticky" style="top: 85px;">
                        <div class="sticky-inner" id="latest_book">
                            <div class="bg-white mb-3">
                                <h4 class="px-3 py-4 op-5 m-0">
                                    Latest book entry
                                </h4>
                                <hr class="m-0">
                                @if(isset($latestBook))
                                    <div class="pos-relative px-3 py-3">
                                        <h6 class="text-primary text-sm">
                                            <a href="#" class="text-primary">{{$latestBook->book_title}}</a>
                                        </h6>
                                        <p class="mb-0 text-sm"><span class="op-6">Registered at</span> <a
                                                class="text-black"
                                                href="#">{{$latestBook->created_at}}</a>
                                    </div>
                                @endif
                            </div>
                            <div class="bg-white text-sm">
                                <h4 class="px-3 py-4 op-5 m-0 roboto-bold">
                                    Stats
                                </h4>
                                <hr class="my-0">
                                <div class="row text-center d-flex flex-row op-7 mx-0">
                                    <div class="col-sm-6 flex-ew text-center py-3 border-bottom border-right"><a
                                            class="d-block lead font-weight-bold" href="#">58</a> Categories
                                    </div>
                                    <div class="col-sm-6 col flex-ew text-center py-3 border-bottom mx-0"><a
                                            class="d-block lead font-weight-bold" href="#">{{$count}}</a> Books
                                    </div>
                                </div>
                                <div class="row d-flex flex-row op-7">
                                    <div class="col-sm-6 flex-ew text-center py-3 border-right mx-0"><a
                                            class="d-block lead font-weight-bold" href="#">300</a> Authors
                                    </div>
                                    @if(isset($leastBook))
                                        <div class="col-sm-6 flex-ew text-center py-3 mx-0">Least stock<a
                                                class="d-block lead font-weight-bold"
                                                href="#">{{$leastBook->book_title}}</a> with: {{$leastBook->book_stock}}
                                            stock.
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--Book inserting modal--}}
                <div class="modal fade" id="addBookModal">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header d-block border-0">
                                <h4 class="modal-title w-100 text-center">Add a new book</h4>
                            </div>
                            <div class="modal-body align-items-center">
                                @yield('addbook form modal body')
                            </div>
                            <div class="modal-footer border-0">
                                <input type="submit" class="btn btn-primary" form="addBookForm" value="Submit">
                            </div>
                        </div>
                    </div>
                </div>

                {{--Book editing modal--}}
                <div class="modal fade" id="editBookModal">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header d-block border-0">
                                <h4 class="modal-title w-100 text-center">Edit Book</h4>
                            </div>
                            <div class="modal-body align-items-center">
                                @yield('editbook form modal body')
                            </div>
                            <div class="modal-footer border-0">
                                <input type="submit" class="btn btn-primary" form="editBookForm" value="Submit">
                            </div>
                        </div>
                    </div>
                </div>
                {{--Book detail modal--}}
                <div class="modal fade" id="viewModal">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body align-items-center">
                                @yield('book detail modal body')
                            </div>
                            <div class="modal-footer border-0">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

