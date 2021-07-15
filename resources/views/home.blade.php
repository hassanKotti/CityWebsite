@extends('layouts.app')

@section('jum-container')
    <div class="container-fluid p-5 text-center bg-image rounded-3" style="background-image: url('{{ asset('assets/banner_dubai_burj_khalifa.png') }}');
                                                                        background-repeat: no-repeat;
                                                                        background-attachment: scroll;
                                                                        background-position-x: center;
                                                                        background-position-y: center;
                                                                        height: 600px;">
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
                        </div>
                        <div class="col-12 hv-300">
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
                    <div class="row justify-content-center  mt-5">
                        <div class="d-flex justify-content-between">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row "><i class="fa fa-lg fa-image"></i></div>
                                    <div class="row justify-content-center">Themes</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row"><i class="fa fa-lg fa-image"></i></div>
                                    <div class="row justify-content--center">Themes</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row"><i class="fa fa-lg fa-image"></i></div>
                                    <div class="row justify-content-center">Themes</div>
                                </div>
                            </div>
                            <div class="card ml-">
                                <div class="card-body">
                                    <div class="row"><i class="fa fa-lg fa-image"></i></div>
                                    <div class="row justify-content-center">Themes</div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </section>
        </div>
        <i class="fa fa-lg fa-angle-down" aria-hidden="true"></i>
    </div>
@endsection
@section('content')
    <div class="container py-5">
        <div class="row ">
            <h2 class="card-title text-left" style="color: #6fd1f6;">ABOUT DUBAI</h2>
            <div class="d-flex py-5 bg-dark">
                <div class="p-2 flex-fill">Dubai is the capital and largest city in Ireland. It is located in the
                    province of Leinster and covers a total area of 921 km². Dubai has a total population of
                    1.35M people, with a median age of 36.7 years. The median household income is €42821.

                    Between 2011 and 2016, the population of Dubai increased from 1.27M to 1.35M, a 5.68% ▲
                    increase. The median household </div>
                <div class="p-2 flex-fill">income for the region grew from €41035 to €42821, a 4.35% ▲ increase.

                    There are four local authorities whose remit collectively encompasses the geographic area of
                    the county and city of Dubai. Select a council on the map in the next section to see
                    specific informatio</div>
            </div>
        </div>

        <div class="d-flex align-items-center flex-wrap py-5">
            <div class="p-2  flex-fill">
                <span class="align-self-center text-success">SELECT A COUNTY COUNCIL ON THE MAP TO LEARN MORE<i
                        class="fa fa-lg fa-angle-right ml-3" aria-hidden="true"></i></span>

            </div>
            <div class="p-2  flex-fill">
                <img src="{{ asset('assets/unitedArabEmiratesHigh.svg') }}" alt="UAE Map" class="city_map">
                {{-- <div id="map"></div> --}}
            </div>
        </div>

        <div class="row">
            <div class="d-flex justify-content-between py-2">
                <h2 class="p-2  text-success">ABOUT THE DASHBOARD</h2>
                <a class="p-2  text-success justify-content-end" href="http://twitter.com/dubai">Follow
                    @dubuidashboard on
                    Twitter</a>
            </div>
            <div class="card-body bg-dark p-2">
                <div class="row">
                    <div class="col">Dubai Dashboard provides citizens, public sector workers and companies with
                        real-time information, time-series indicator data, and interactive maps about all aspects of
                        the
                        city. It enables users to gain detailed, up to date intelligence about the city that aids
                        everyday decision making and fosters evidence-informed analysis.

                        Data is pulled together from major sources -- including Dubai City Council, Dubaiked,
                        Central
                        Statistics Office, Eurostat, and government departments, and links to a variety of existing
                    </div>
                    <div class="col">applications -- to provide thousands of interactive data visualisations. The
                        underlying data is freely available so others can undertake their own analysis and build
                        their
                        own applications and visualisations.</div>
                </div>
            </div>
        </div>
    </div>
@endsection
