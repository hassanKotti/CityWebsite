@extends('layouts.app')

@section('jum-container')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <section class="pt-5 pb-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3 mt-7 hero-title"><b>
                                        <span class="hero-title_text_top">DUBAI</span>
                                        <br>
                                        <span class="hero-title_text_bottom">DASHBOARD</span>
                                    </b>
                                </div>
                            </div>
                            <div class="col-12">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="cards-wrapper">
                                                <div x-data="{ open: false }">
                                                    <div class="card " @mouseover="open = true">
                                                        <div class="card-body card-trans" @mouseout="open = false">
                                                            <h5 class="card-title text-center">DUBAI BIKES</h5>
                                                            <p class="card-text">Some quick example text to build on the
                                                                card
                                                                title and make up the bulk of the card's content.</p>
                                                        </div>
                                                        <div class="card-footer card-trans" x-show="open">
                                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div x-data="{ open: false }">
                                                    <div class="card d-none d-md-block" @mouseover="open = true">
                                                        <div class="card-body" @mouseout="open = false">
                                                            <h5 class="card-title">AIR QUALITY - CITY</h5>
                                                            <p class="card-text">Some quick example text to build on the
                                                                card
                                                                title and make up the bulk of the card's content.</p>
                                                        </div>
                                                        <div class="card-footer card-trans" x-show="open">
                                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div x-data="{ open: false }">
                                                    <div class="card d-none d-md-block" @mouseover="open = true">
                                                        <div class="card-body card-trans" @mouseout="open = false">
                                                            <h5 class="card-title">HOUSE PRICE</h5>
                                                            <p class="card-text">Some quick example text to build on the
                                                                card
                                                                title and make up the bulk of the card's content.</p>
                                                        </div>
                                                        <div class="card-footer" x-show="open">
                                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div x-data="{ open: false }">
                                                    <div class="card d-none d-md-block" @mouseover="open = true">
                                                        <div class="card-body" @mouseout="open = false">
                                                            <h5 class="card-title">HOUSE COMPLETION</h5>
                                                            <p class="card-text">Some quick example text to build on the
                                                                card
                                                                title and make up the bulk of the card's content.</p>
                                                        </div>
                                                        <div class="card-footer" x-show="open">
                                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="cards-wrapper">
                                                <div x-data="{ open: false }">
                                                    <div class="card" @mouseover="open = true">
                                                        <div class="card-body" @mouseout="open = false">
                                                            <h5 class="card-title">HOUSE PRICE</h5>
                                                            <p class="card-text">Some quick example text to build on the
                                                                card
                                                                title and make up the bulk of the card's content.</p>
                                                        </div>
                                                        <div class="card-footer" x-show="open">
                                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div x-data="{ open: false }">
                                                    <div class="card d-none d-md-block" @mouseover="open = true">
                                                        <div class="card-body" @mouseout="open = false">
                                                            <h5 class="card-title">HOUSE PRICE</h5>
                                                            <p class="card-text">Some quick example text to build on the
                                                                card
                                                                title and make up the bulk of the card's content.</p>
                                                        </div>
                                                        <div class="card-footer" x-show="open">
                                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div x-data="{ open: false }">
                                                    <div class="card d-none d-md-block" @mouseover="open = true">
                                                        <div class="card-body" @mouseout="open = false">
                                                            <h5 class="card-title">HOUSE PRICE</h5>
                                                            <p class="card-text">Some quick example text to build on the
                                                                card
                                                                title and make up the bulk of the card's content.</p>
                                                        </div>
                                                        <div class="card-footer" x-show="open">
                                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div x-data="{ open: false }">
                                                    <div class="card d-none d-md-block" @mouseover="open = true">
                                                        <div class="card-body" @mouseout="open = false">
                                                            <h5 class="card-title">HOUSE PRICE</h5>
                                                            <p class="card-text">Some quick example text to build on the
                                                                card
                                                                title and make up the bulk of the card's content.</p>
                                                        </div>
                                                        <div class="card-footer" x-show="open">
                                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="cards-wrapper">
                                                <div x-data="{ open: false }">
                                                    <div class="card" @mouseover="open = true">
                                                        <div class="card-body" @mouseout="open = false">
                                                            <h5 class="card-title">HOUSE PRICE</h5>
                                                            <p class="card-text">Some quick example text to build on the
                                                                card
                                                                title and make up the bulk of the card's content.</p>
                                                        </div>
                                                        <div class="card-footer" x-show="open">
                                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div x-data="{ open: false }">
                                                    <div class="card d-none d-md-block" @mouseover="open = true">
                                                        <div class="card-body" @mouseout="open = false">
                                                            <h5 class="card-title">HOUSE PRICE</h5>
                                                            <p class="card-text">Some quick example text to build on the
                                                                card
                                                                title and make up the bulk of the card's content.</p>
                                                        </div>
                                                        <div class="card-footer" x-show="open">
                                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div x-data="{ open: false }">
                                                    <div class="card d-none d-md-block" @mouseover="open = true">
                                                        <div class="card-body" @mouseout="open = false">
                                                            <h5 class="card-title">HOUSE PRICE</h5>
                                                            <p class="card-text">Some quick example text to build on the
                                                                card
                                                                title and make up the bulk of the card's content.</p>
                                                        </div>
                                                        <div class="card-footer" x-show="open">
                                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div x-data="{ open: false }">
                                                    <div class="card d-none d-md-block" @mouseover="open = true">
                                                        <div class="card-body" @mouseout="open = false">
                                                            <h5 class="card-title">HOUSE PRICE</h5>
                                                            <p class="card-text">Some quick example text to build on the
                                                                card
                                                                title and make up the bulk of the card's content.</p>
                                                        </div>
                                                        <div class="card-footer" x-show="open">
                                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <img class="card-img-top" data-src="holder.js/100x180/?text=Image cap" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Item 1</li>
                        <li class="list-group-item">Item 2</li>
                        <li class="list-group-item">Item 3</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
