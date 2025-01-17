<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home Page</title>
    </head>
    <body class = "bg-primary-subtle">
        @extends('layout.main-master')
        @section('content')
        <div id="carouselExampleCaptions" class="carousel slide carousel-dark slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset ('act3.jpg')}}" class="d-block h-25 w-50 mx-auto" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset ('act33.jpg')}}" class="d-block h-25 w-50 mx-auto" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset ('act333.jpg')}}" class="d-block h-25 w-50 mx-auto" alt="...">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class = "container-fluid row">
            <div class = "col-4 mt-4">
                <div class="accordion ms-5" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Facts about Cat #1
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Cats are nearsighted, but their peripheral vision and night vision are much better than that of humans.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Facts about Cat #2
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Cats use their long tails to balance themselves when theyre jumping or walking along narrow ledges.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Facts about Cat #3
                        </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Cats use their whiskers to <code>“feel”</code> the world around them in an effort to determine which small spaces they can fit into. A cats whiskers are generally about the same width as its body. <strong> (This is why you should never, EVER cut their whiskers.)</strong>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Facts about Cat #4
                        </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Cats mark you as their territory when they rub their faces and bodies against you, as they have scent glands in those areas.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            Facts about Cat #5
                        </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Cats spend about 13 to 16 hours a day sleeping, which is nearly two-thirds of their lives. They’re most active during the early morning and evening hours.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            Facts about Cat #6
                        </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Unlike humans and many other animals, cats dont have taste receptors for sweetness. This is because they evolved as carnivores and have no need for carbohydrates or sugary foods.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class = "col-8 mt-4 mb-4">
                    <div class="container">
                        <div class="row">
                            @foreach($mains as $main)
                                <div class="col-md-4 mb-4">
                                    <div class="card" style="width: 18rem;">
                                        <img src="{{ asset($main['image']) }}" class="card-img-top" alt="{{ $main['title'] }} image">
                                        <div class="card-body">
                                            <h5 class="card-title fw-bold">{{ $main['title'] }}</h5>
                                            <p class="card-text">{{ $main['body'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
            </div>

        </div>

        @endsection
        <style>
            .card:hover{
                transform: scale(1.1);
            }

            .card{
                transition: transform 0.3s ease;
            }
        </style>
    </body>
</html>