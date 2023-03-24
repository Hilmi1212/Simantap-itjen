@extends('layouts.main')

@section('container')
    <div class="album py-2 ">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($hauditor as $key => $a)
                    <div class="carousel-item{{ $key == 0 ? ' active' : '' }}">
                        <img src="img/bg.jpg" alt="background" width="auto" height="auto">
                        <svg class="bd-placeholder-img" width="auto" height="auto" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                            <rect width="100%" height="100%" fill="#777" />
                        </svg>
                        <div class="container">
                            <div class="carousel-caption text-start">
                                <h1>{{ $a['title'] }}</h1>
                                <p>{{ $a['deskripsi'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    @foreach ($auditor_page as $auditorpost)
        <div class='row'>
            <div class="album py-2 ">
                <div class="container">
                    <div class="col">
                        <div class="card mb-2" style="width: 28rem; ">
                            <div class="card-body">
                                <h5 class="card-title">{{ $auditorpost->title }}</h5>
                                <p class="card-text">{{ $auditorpost->deskripsi }}</p>
                                <a href={{ $auditorpost->link }} class="btn btn-primary">Go</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    @foreach ($footers as $item)
        <div class="container">
            <footer class="py-3 my-4">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item"><a href="https://wa.me/{{ $item->notlp }}"
                            class="nav-link px-2 text-muted">Contact: +{{ $item->notlp }}</a>
                    </li>
                </ul>
                <p class="text-center text-muted">&copy; {{ $item->footer }}
                </p>
            </footer>
        </div>
    @endforeach
@endsection
