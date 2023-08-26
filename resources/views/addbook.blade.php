@extends('layouts.app')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Search Books</h2>
                <ol>
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li>Search Books</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->
    @livewire('search-books')
    @endsection
