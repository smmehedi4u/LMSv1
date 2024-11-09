@extends('layouts.master')


@section('content')
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="section-title position-relative mb-4">
                        <h5 class="display-4">Book Details</h5>
                    </div>


                    <div class="d-flex mb-3">
                        <div class="btn-icon bg-primary mr-4">
                            <i class="fa fa-2x fa-graduation-cap text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Library Name</h4>

                            @foreach ($libraries as $lib)
                                <a
                                    href="http://maps.google.com/maps?&z=15&mrt=yp&t=k&q={{ $lib['longitude'] }}+{{ $lib['latitude'] }}" class="btn btn-primary rounded-pill">
                                    {{ $lib['name'] }}
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <div class="d-flex mb-3">
                        <div class="btn-icon bg-secondary mr-4">
                            <i class="fa fa-2x fa-certificate text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Book Name</h4>
                            <p>{{ $book->name }}</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="btn-icon bg-warning mr-4">
                            <i class="fa fa-2x fa-book-reader text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Author Name</h4>
                            <p>{{ $book->author->name }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{ $book->img }}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
