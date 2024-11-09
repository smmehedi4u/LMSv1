
@extends('layouts.master')

@section('content')


    <!-- Courses Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row mx-0 justify-content-center">
                <div class="col-lg-12">
                    <div class="section-title text-center position-relative mb-5">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">All Books</h6>
                </div>
            </div>
            <div class="row">
                @foreach($books as $book)
                <div class="col-lg-4 col-md-4 pb-4">
                    <a class="courses-list-item position-relative d-block overflow-hidden mb-2" href="{{route('detail',$book->id) }}">
                        <img class="img-fluid" src="{{$book->img}}" alt="" style=" width: 200px; height: 300px">
                        <div class="courses-text">
                            <h4 class="text-center text-white px-3">{{$book->name}}</h4>
                            <div class="border-top w-100 mt-3">
                                <div class="d-flex justify-content-between p-4">
                                    <span class="text-center text-white"><i class="fa fa-pen-nib mr-2"></i>{{$book->author->name}}</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                    @endforeach
            </div>
                <div class="row">
                    <div class="col-12">

                        {{$books->links()}}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Courses End -->

@endsection
