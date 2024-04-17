@include('adminnavbar')
<!DOCTYPE html>
<html lang="en">
 <head>
    
    <link rel="stylesheet" href="../form.css">
    <title>Form page</title>
</head> 
<body>
    <form method="POST" action="{{route('cuisins.store')}}" enctype="multipart/form-data">
        @csrf
         <div class="row justify-content-center">
            <div class="col-md-5">

            
                <div class="cuisininsert mt-5">

                    <h2 class="text-center mb-4 fw-bolder"  style="font-family: 'Libre Baskerville', serif;">Cuisin Insert</h2>

                    <p class="mt-5 fw-bolder">Cuisine Name:</p>
                    <input type="text" class="inputform" name="cname"  placeholder="Enter here" value="{{old('cname')}}">
                    <span class="text-danger">@error('cname')
                        {{$message}}
                    @enderror
                    </span>

                    <p class="mt-4 fw-bolder">Cuisine pic:</p>
                    <input type="file"  name="cpic" class="fileupload" >
                    <span class="text-danger">@error('cpic')
                        {{$message}}
                    @enderror
                    </span>


                     <button class="btn btn-light mt-5 w-50" type="submit">Submit</button>
                </div>
            </div>
        </div>

    </form>

</body>
</html>
