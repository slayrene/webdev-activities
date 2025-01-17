<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Master Website</title>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body class = "bg-success">
        <br>
        <h1 class = "text-center fw-bold"> Hello Master! </h1>

        <div class = "container-xl border border-black">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-bold">Email Address</label>
                <input type="email" class="form-control border border-black" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label fw-bold">Example Text Area</label>
                <textarea class="form-control border border-black" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </div>
        <br>
        <div class = "container border border-black">
            <div class = "row">
                <div class = "col-lg-4 col-md-6 col-sm-12 border border-black"> 1 </div>
                <div class = "col-lg-4 col-md-6 col-sm-12 border border-black"> 2 </div>
                <div class = "col-lg-4 col-md-6 col-sm-12 border border-black"> 3 </div>
            </div>   
            <div class = "row mt-4">
                <div class = "col-lg-4 col-md-6 col-sm-12 border border-black"> 1 </div>
                <div class = "col-lg-4 col-md-6 col-sm-12 border border-black"> 2 </div>
                <div class = "col-lg-4 col-md-6 col-sm-12 border border-black"> 3 </div>
            </div>   
        </div>
    </body>
</html>