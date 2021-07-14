@extends('layouts.app')

@section('jum-container')
    <div class="container-fluid p-5 text-center bg-image rounded-3" style="
                    background-image: url('{{ asset('assets/banner_dubai_burj_khalifa.jpg') }}');
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-attachment: scroll;
                    background-position-x: center;
                    background-position-y: center;
                    height: 500px;">
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
        <div class="row ">
            <div class="card">
                <div class="card-header border-0 bg-dark">
                    <h2 class="card-title text-left">ABOUT DUBAI</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">Dublin is the capital and largest city in Ireland. It is located in the
                            province of Leinster and covers a total area of 921 km². Dublin has a total population of
                            1.35M people, with a median age of 36.7 years. The median household income is €42821.

                            Between 2011 and 2016, the population of Dublin increased from 1.27M to 1.35M, a 5.68% ▲
                            increase. The median household </div>
                        <div class="col">income for the region grew from €41035 to €42821, a 4.35% ▲ increase.

                            There are four local authorities whose remit collectively encompasses the geographic area of
                            the county and city of Dublin. Select a council on the map in the next section to see
                            specific informatio</div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col  d-flex justify-content-center text-center py-10">
                SELECT A COUNTY COUNCIL ON THE MAP TO LEARN MORE
                <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </div>
            <div class="col">
                <img src="{{ asset('assets/unitedArabEmiratesHigh.svg') }}" alt="UAE Map" class="city_map">
            </div>
        </div>
        <div class="row ">
            <div class="card">
                <div class="card-header border-0 bg-dark">
                    <h2 class="card-title pull-left">ABOUT THE DASHBOARD</h2>
                    <h6 class="card-title pull-right"><a href="http://twitter.com/dubai">Follow @dubuidashboard on
                            Twitter</a></h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">Dublin Dashboard provides citizens, public sector workers and companies with
                            real-time information, time-series indicator data, and interactive maps about all aspects of the
                            city. It enables users to gain detailed, up to date intelligence about the city that aids
                            everyday decision making and fosters evidence-informed analysis.

                            Data is pulled together from major sources -- including Dublin City Council, Dublinked, Central
                            Statistics Office, Eurostat, and government departments, and links to a variety of existing
                        </div>
                        <div class="col">applications -- to provide thousands of interactive data visualisations. The
                            underlying data is freely available so others can undertake their own analysis and build their
                            own applications and visualisations.</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
