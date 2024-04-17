@include('adminnavbar')
<!DOCTYPE html>
<html lang="en">
 <head>
    
    <link rel="stylesheet" href="../form.css">
    <title>Form page</title>
</head> 
<body>
    <form method="POST" action="{{route('coupons.update',$coupon->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
         <div class="row justify-content-center">
            <div class="col-md-5">

            
                <div class="cuisininsert mt-5">

                    <h2 class="text-center mb-4 fw-bolder" style="font-family: 'Libre Baskerville', serif;">Coupon Update</h2>

                    <p class="mt-5 fw-bolder">Coupon code:</p>
                    <input type="text" class="inputform" name="ccode"  placeholder="Enter here" value="{{$coupon->couponcode}}">
            

                    <p class="mt-5 fw-bolder">Cuisin Title:</p>
                    <input type="text" class="inputform" name="ctitle"  placeholder="Enter here" value="{{$coupon->coupontitle}}">
                    

                    <p class="mt-5 fw-bolder">Cuisin desc:</p>
                    <input type="text" class="inputform" name="cdesc"  placeholder="Enter here" value="{{$coupon->coupondesc}}">
                    

                    <p class="mt-5 fw-bolder">Cuisin discount:</p>
                    <input type="text" class="inputform" name="cdiscount"  placeholder="Enter here" value="{{$coupon->coupondiscount}}">
                    <span class="text-danger">
                        @error('cdiscount')
                            {{$message}}
                        @enderror
                    </span>

                


                    <p class="mt-4 fw-bolder">coupon pic:</p>
                    <input type="file"  name="cpic" class="fileupload">
                


                     <button class="btn btn-light mt-5 w-50" type="submit">Submit</button>
                </div>
            </div>
        </div>

    </form>

</body>
</html>
