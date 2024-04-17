@include('adminnavbar')
<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="../form.css">
    <title>Staff page</title>
</head>

<body>
    <form method="POST" action="{{ route('staff.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-8">


                <div class="staffinsert mt-2">

                    <h2 class="text-center mb-4 fw-bolder" style="font-family: 'Libre Baskerville', serif;">Table Insert
                    </h2>

                    <p class="mt-5 fw-bolder">staff Name:</p>
                    <input type="text" class="inputform" name="sname" placeholder="Enter here" value="{{old('sname')}}">
                    <span class="text-danger">
                        @error('sname')
                            {{ $message }}
                        @enderror
                    </span>

                    <label class="mt-4  mt-3">Choose a designation:</label>
                    <select name="designation" id="dog-names" class="btn btn-dark ms-3 mt-3">
                        <option value="manager" selected>manager</option>
                        <option value="waiter">waiter</option>
                        <option value="cheff">cheff</option>
                    </select>
                    <span class="text-danger">
                        @error('designation')
                        {{$message}}
                            
                        @enderror

                    </span>


                    <p class="mt-5 fw-bolder">Adhaar no:</p>
                    <input type="text" class="inputform" name="adhaar" placeholder="Enter here" value="{{old('adhaar')}}">
                    <span class="text-danger">
                        @error('adhaar')
                            {{ $message }}
                        @enderror
                    </span>

                    <p class="mt-5 fw-bolder">Address:</p>
                    <input type="text" class="inputform" name="address" placeholder="Enter here" value="{{old('address')}}">
                    <span class="text-danger">
                        @error('address')
                            {{ $message }}
                        @enderror
                    </span>

                    <p class="mt-5 fw-bolder">phno:</p>
                    <input type="text" class="inputform" name="phno" placeholder="Enter here" value="{{old('phno')}}">
                    <span class="text-danger">
                        @error('phno')
                            {{ $message }}
                        @enderror
                    </span>

                    <p class="mt-5 fw-bolder">Email:</p>
                    <input type="text" class="inputform" name="email" placeholder="Enter here" value="{{old('email')}}">
                    <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>




                    <button class="btn btn-light mt-5 w-50" type="submit">Submit</button>
                </div>
            </div>
        </div>

    </form>

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"
    integrity="sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</html>
