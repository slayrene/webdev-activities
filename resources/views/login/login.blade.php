<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
        <!-- Fonts -->
        <link rel = "dns-prefetch" href="http://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body class = "bg-primary-subtle" >
    <div class="bg-image" style="background-image: url('https://i.pinimg.com/originals/8a/e1/04/8ae104a88d8fd8e5c4d1a9cbea4d4c96.gif'); height: 100vh; width: 100%; background-size: cover">
            <div class="container position-absolute top-50 start-50 translate-middle w-25 border border-black mx-auto rounded-4 bg-danger">

                @if($errors->any())
                    @foreach($errors->all() as $error)
                        <div class = "alert alert-danger" role = "alert">
                            {{ $error }}
                        </div> 
                    @endforeach
                @endif

                <form action = "{{ route ('login.submit') }}" method = "POST">
                    @csrf
                    <div>
                        <div class="mb-5 mx-5 mt-5">
                            <h3 class = "text-center mb-4">Login Form</h3>
                            
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">

                            <label for="inputPassword5" class="form-label mt-3">Password</label>
                            <input name = "password" type="password" id="inputPassword5" class="form-control mb-2" aria-describedby="passwordHelpBlock">

                            <input class="form-check-input" type="checkbox" id="remember" name="remember">
                            <label class="form-check-label mb-3" for="remember"> Remember me </label>

                            <button type="submit" class="btn btn-warning mt-2 mb-3 w-100">Login</button>
                            <h7 class = "text-center mb-4">Forgot Password?</h7>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>