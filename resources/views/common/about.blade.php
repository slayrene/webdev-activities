<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Page</title>
    </head>
    <body>
        @extends('layout.main-master')
        @section('content')
            <h1>
                {{ $about }}
                {{ $about2 }}
            </h1>
        @endsection
    </body>
</html>