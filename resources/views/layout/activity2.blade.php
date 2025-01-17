<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Activity 2</title>
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body class = "bg-light">

        <div class = "row border border-black bg-secondary-subtle">
            <div class = "col-lg-8 mt-2">
                <h1 class = "mx-5">Brand</h1>
            </div>
            
            <div class = "col-lg-1 mt-4">
                <h5>Feature</h5>
            </div>

            <div class = "col-lg-1 mt-4">
                <h5>Enterprise</h5>
            </div>

            <div class = "col-lg-1 mt-4">
                <h5>Support</h5>
            </div>

            <div class = "col-lg-1 mt-4">
                <h5>Pricing</h5>
            </div>
        </div>
        
        <div class = "container-fluid row">
            <div class = "col-4 mt-4">
                <div class = "container shadow border border-black bg-secondary-subtle">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label fw-bold mt-4">Email Address</label>
                    <input type="email" class="form-control border border-black" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label fw-bold">Example Text Area</label>
                    <textarea class="form-control border border-black" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="d-flex">
                    <button type = "submit" class="bg-secondary-subtle mb-5"> Login </button>
                    <h6 class = "text-primary mb-4 mx-3"> Forgot password? </h6>
                </div>
            </div>  
        </div>

            <div class = "col-8 mt-4">
                <h1 class = "text-center"> Pricing </h1>
                <p class = "text-center mx-5"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum libero beatae magni aspernatur 
                    aliquid rerum deleniti in minus odio reprehenderit ex nobis aliquam eos pariatur, tempore totam dolor, molestiae 
                    necessitatibus error officia quasi consequuntur sit perferendis reiciendis. Numquam, impedit excepturi quasi dignissimos 
                    dicta aspernatur repellendus placeat dolores libero temporibus. Iure. </p>
            
                    <div class = "row mx-5"> 
                        <img class = "col-lg-4" src = "{{ asset('act2.jpg') }}" alt = "Image">
                        <img class = "col-lg-4" src = "{{ asset('act2.jpg') }}" alt = "Image">
                        <img class = "col-lg-4" src = "{{ asset('act2.jpg') }}" alt = "Image">
                    </div>

                    <div class = "row mt-4 mx-5"> 
                        <img class = "col-lg-4" src = "{{ asset('act2.jpg') }}" alt = "Image">
                        <img class = "col-lg-4" src = "{{ asset('act2.jpg') }}" alt = "Image">
                        <img class = "col-lg-4" src = "{{ asset('act2.jpg') }}" alt = "Image">
                    </div>

                    <h6 class = "text-center mt-4 fw-bold">Compare Plans</h6>

                    <table class="table mt-4 mx-5">
                    <thead>
                        <tr class = "border-bottom border-black">
                            <th scope="col"></th>
                            <th scope="col">Price Pro</th>
                            <th scope="col">Enterprise</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class = "border-bottom border-black">
                            <th scope="row">Public</th>
                            <td>✔✔</td>
                            <td>✔</td>
                        </tr>
                        <tr class = "border-bottom border-black">
                            <th scope="row">Private</th>
                            <td>✔✔</td>
                            <td></td>
                        </tr>
                        <tr class = "border-bottom border-black">
                            <th scope="row">Permissions</th>
                            <td>✔</td>
                            <td>✔</td>
                        </tr>
                    </tbody>
                    </table>    
            </div>
        </div>
    </body>
</html>