<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/dist/boxicons.js"
        integrity="sha512-Dm5UxqUSgNd93XG7eseoOrScyM1BVs65GrwmavP0D0DujOA8mjiBfyj71wmI2VQZKnnZQsSWWsxDKNiQIqk8sQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;1,600&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="admin login signup.css">
    <title>Admin signup page</title>
</head>

<body>
    <div class="container mt-5">

        <div class="row justify-content-center">
            <div class="col-md-4">
                <div id="signupbox" class="justify-content-center text-center">
                    <form>

                        <h1 class="text-center text-white">Signup Here</h1>

                        <p class="text-start fw-bold text-white">Username:</p>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput"
                                placeholder="name@example.com">
                            <label for="floatingInput">Username</label>
                        </div>

                        <p class="text-start fw-bold text-white">Password:</p>
                        <div class="form-floating ">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>

                        <p class="text-start fw-bold mt-3 text-white">Email:</p>
                        <div class="form-floating ">
                            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Enter Email</label>
                        </div>

                        <button type="submit" class="btn btn-dark mt-4  w-50">Login <i
                                class="fa-solid fa-right-to-bracket fa-lg ms-2"></i></button>
                    </form>
                    <p class="mt-2 text-white">Forgot password?</p>
                    <div>
                    </div>
                    <div class="row justify-content-center mt-4">
                        <div class="col-md-3">
                            <a href="https://www.instagram.com/accounts/login/"> <i class="fa-brands fa-instagram fa-xl"
                                    style="color: #a03172;"></i></a>
                        </div>
                        <div class="col-md-3">

                            <a href="#"><i class="fa-brands fa-facebook fa-xl" style="color: #1d28c3;"></i></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#"> <i class="fa-brands fa-twitter fa-xl" style="color: #3776e1;"></i></a>
                        </div>
                    </div>
                    <P class="mt-3 text-white">Already have an account?<a class="ms-2 text-white" href="/alogin"
                            style="text-decoration: underline; color: rgb(0, 0, 0);">Sign in</a></P>

                </div>
            </div>
        </div>


    </div>


</body>

</html>
