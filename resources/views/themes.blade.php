@extends('layouts.app')

@section('jum-container')


    <!--ul class="nav justify-content-center">
                                                                                <li class="nav-item">
                                                                                    <a class="nav-link active" href="#">Transport</a>
                                                                                </li>
                                                                                <li class="nav-item">
                                                                                    <a class="nav-link" href="#">Environment
                                                                                    </a>
                                                                                </li>
                                                                                <li class="nav-item">
                                                                                    <a class="nav-link" href="#">Housing</a>
                                                                                </li>
                                                                                <li class="nav-item">
                                                                                    <a class="nav-link " href="#">Economy</a>
                                                                                </li>
                                                                                <li class="nav-item">
                                                                                    <a class="nav-link " href="#">Education</a>
                                                                                </li>
                                                                            </ul>
                                                                            </div-->
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
                    aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarExample01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->

        <!-- Jumbotron -->
        <div class="container-fluid p-5 text-left bg-image rounded-3" style="
                                                                                                    background-image: url('{{ asset('assets/banner_dubai_burj_khalifa.jpg') }}');
                                                                                                    background-size: cover;
                                                                                                    background-repeat: no-repeat;
                                                                                                    background-attachment: scroll;
                                                                                                    background-position-x: center;
                                                                                                    background-position-y: center;
                                                                                                    height: 500px;">
            <h1 class="mb-3">Transport</h1>
            <h4 class="mb-3">Travel and transport trends for Dubai
            </h4>
        </div>
        <!-- Jumbotron -->
    </header>
@endsection
@section('content')
    <div class="container py-5">
        <div class="card">
            <div class="card-header">
                </h3>Public Transport Usage</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <p class="card-text"> transport is a key mode of travel in the city and has been growing across bus,
                            train and Luas over the
                            past decade, with the exception of Bus Eireann which remains relatively stable. As the city
                            grows, along
                            with the need to address climate change, these modes need to continue to expand, along with
                            cycling and
                            walking.


                            The chart shows how the COVID-19 pandemic greatly reduced the number of trips being taken in
                            2020.</p>
                        <p>
                            <i class="fa fa-bus" aria-hidden="true"></i>
                            39.5 Million
                            trips were taken on Dublin Bus in the last quarter of 2019
                        </p>

                    </div>
                    <div class="col"><canvas id="myChart" width="100" height="100"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="card d-none-block mt-5">
            <div class="card-header">
                </h3>Dublin Bikes</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <p class="card-text"> Just Eat dublinbikes is a self-service bike rental system open to everyone
                            from 14 years of age. Users can travel through the city centre, commute between home and work
                            and get out and about to enjoy Dublin City at their leisure. Visit the Dublin Bikes website for
                            more information

                            The chart shows the general trend of bikes availability for the past day, week and month- click
                            on a button to move between views
                        </p>

                    </div>
                    <div class="col"><canvas id="bikeChart" width="100" height="100"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.4.1/dist/chart.min.js"></script>
    <script>
        var ctx = document.getElementById('myChart');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    <script>
        var ctx = document.getElementById('bikeChart');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
