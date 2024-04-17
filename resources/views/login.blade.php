<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/dist/boxicons.js" integrity="sha512-Dm5UxqUSgNd93XG7eseoOrScyM1BVs65GrwmavP0D0DujOA8mjiBfyj71wmI2VQZKnnZQsSWWsxDKNiQIqk8sQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;1,600&display=swap" rel="stylesheet">
    
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="login signup.css">
    <title>Login page</title>
</head>
<body>


    <div class="container">

        
        
        <div id="loginbox" class="justify-content-center text-center">
            <form method="POST" action="/login">
            @csrf
                <h1 class="text-center mt-3 mb-3">Login Here</h1>

                <p class="text-start fw-bold">Username:</p>
                <div class="form-floating mb-3">
                    <input type="text"  name="username" class="form-control" id="floatingInput" placeholder="name@example.com" value="{{old('username')}}">
                    <label for="floatingInput">Email or Phone</label>
                  </div>

                  <p class="text-start fw-bold">Password:</p>
                  <div class="form-floating ">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                  </div>

                  <div class="text-danger">
                    @if ($msg=Session::get('success'))
                         {{$msg}}
                     @endif
                  </div>

              <button type="submit" class="btn btn-dark mt-4  w-50" >Login <i class="fa-solid fa-right-to-bracket fa-lg ms-2"></i></button>
            </form>
            <p class="mt-2 ">Forgot password?</p>
            <div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-md-3">
                  <a href="https://www.instagram.com/accounts/login/"> <i class="fa-brands fa-instagram fa-xl" style="color: #a03172;"></i></a> 
                </div>
                <div class="col-md-3">
                
                    <a href="#"><i class="fa-brands fa-facebook fa-xl" style="color: #1d28c3;"></i></a>
                </div>
                <div class="col-md-3">
                   <a href="#"> <i class="fa-brands fa-twitter fa-xl" style="color: #3776e1;"></i></a>
                </div>
            </div>
            <P class="mt-3">Don't Have An Account?<a class="ms-2" href="/signup" style="text-decoration: underline; color: rgb(0, 0, 0);">Sign up</a></P>
           
        </div>
       
           

    </div>
    
    
</body>
</html>