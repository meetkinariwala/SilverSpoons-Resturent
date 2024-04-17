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
    <title>Signup page</title>
</head>
<body>
    

    <div class="container ">
        
        <div id="signupbox" class="justify-content-center text-center">
            <form>
            
                <h1 class="text-center mt-1 mb-2">Signup Here</h1>

                <p class="text-start fw-bold me-1">Username:</p>                   
                    <input type="email" class="form-control" id="floatingInput" placeholder="Username">
                

                  <p class="text-start fw-bold mt-1">Password:</p>                
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">

                  <p class="text-start fw-bold mt-1"> Confirm Password:</p>                 
                   <input type="password" class="form-control" id="floatingPassword" placeholder=" confirm Password">
                

                  <p class="text-start fw-bold mt-1">Email Address:</p>
                    <input type="password" class="form-control" id="floatingPassword" placeholder=" confirm Password">
                   

                  <p class="text-start fw-bold mt-1"> Phone no:</p>
                    <input type="password" class="form-control" id="floatingPassword" placeholder=" confirm Password">
                    

                  <p class="text-start fw-bold mt-1"> City:</p>
                  <div class="input-group  mt-1 ">
                    <select class="form-select" id="inputGroupSelect01" name="city">
                      <option selected>City</option>
                      <option value="1">Surat</option>
                      <option value="2">Amdabad</option>
                      <option value="3">Vadodra</option>
                    </select>
                  </div>

              <button type="submit" class="btn btn-dark mt-4  w-50 " >Login <i class="fa-solid fa-right-to-bracket fa-lg ms-2"></i></button>
            </form>
            
            <P class="mt-3">Already Have An Account?<a class="ms-2" href="/login" style="text-decoration: underline; color: rgb(0, 0, 0);">Sign In</a></P>
           
        </div>
       
           

    </div>
    
    
</body>
</html>