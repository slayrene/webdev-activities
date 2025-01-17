<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blogs Page</title>
    </head>
    <body>
        @extends('layout.main-master')
        @section('content')

            <main class="container">
                <div class="row">
                    @foreach($blogs as $blog)
                        @if($blog->status == 0)
                            <div class="card" style="width: 18rem;">
                            <img src=" {{ asset('act2.jpg')}} " class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">{{   $blog->title    }}</h5>
                                    <p class="card-text">{{ $blog->description   }}</p>
                                    <p class="card-text"><b>Category: </b> {{ $blog->name  }}</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        @else 
                            <div class="card" style="width: 18rem;">
                            <img src=" {{ asset('act2.jpg')}} " class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">{{   $blog->title    }}</h5>
                                    <p class="card-text">{{ $blog->description  }}</p>
                                    <p class="card-text"><b>Category:</b> {{ $blog->name }}</p>
                                </div>
                            </div>                        
                        @endif
                    @endforeach
                </div>
            </main>

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