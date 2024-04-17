@include('adminnavbar')
<!DOCTYPE html>
<html lang="en">
 <head>
    
    <title>Form page</title>
</head> 
<body>
    <form method="POST" action="{{route('cuisins.update',$cuisin->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
         <div class="row justify-content-center">
            <div class="col-md-5">

            
                <div class="cuisininsert mt-5">

                    <h2 class="text-center mb-4 fw-bolder" style="font-family: 'Libre Baskerville', serif;">Cuisin Update</h2>

                    <p class="mt-5 fw-bolder">Cuisin Name:</p>
                    <input type="text" class="inputform" name="cname" value="{{$cuisin->cname}}" placeholder="Enter here">
                    <span class="text-danger">@error('cname')
                        {{$message}}
                    @enderror
                    </span>

                    <p class="mt-4 fw-bolder">Cuisin pic:</p>
                    <input type="file"  name="cpic" class="fileupload">
                    <span class="text-danger">@error('cpic')
                        {{$message}}
                    @enderror
                    </span>


                     <button class="btn btn-light mt-5 w-50" type="submit">Update</button>
                </div>
            </div>
        </div>

    </form>

</body>
</html>
