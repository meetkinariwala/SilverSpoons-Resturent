@include('adminnavbar')
<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="../form.css">
    <title>Table page</title>
</head>

<body>
    <form method="POST" action="{{ route('table.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center">
            <div class="col-md-8">


                <div class="tableinsert mt-2">

                    <h2 class="text-center mb-4 fw-bolder" style="font-family: 'Libre Baskerville', serif;">Table Insert
                    </h2>

                    <p class="mt-5 fw-bolder">Table Name:</p>
                    <input type="text" class="inputform" name="tname" placeholder="Enter here">
                    <span class="text-danger">
                        @error('tname')
                            {{ $message }}
                        @enderror
                    </span>

                    <p class="mt-5 fw-bolder">Table Description:</p>
                    <input type="text" class="inputform" name="tdesc" placeholder="Enter here">
                    <span class="text-danger">
                        @error('tdesc')
                            {{ $message }}
                        @enderror
                    </span>

                    <p class="mt-4 fw-bolder">Cuisin pic 1:</p>
                    <input type="file" name="tpic1" class="fileupload">
                    <span class="text-danger">
                        @error('tpic1')
                            {{ $message }}
                        @enderror
                    </span>

                    <p class="mt-4 fw-bolder d-inline">Cuisin pic 2:</p>
                    <input type="file" name="tpic2" class="fileupload">


                    <p class="mt-4 fw-bolder">Cuisin pic 3:</p>
                    <input type="file" name="tpic3" class="fileupload">
                    <br>


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
