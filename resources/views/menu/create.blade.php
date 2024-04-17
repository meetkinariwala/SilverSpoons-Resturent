@include('adminnavbar')
<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="../form.css">
    <title>Form page</title>
</head>

<body>
    <form method="POST" action="{{ route('menu.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="row justify-content-center">
            <div class="col-md-6">


                <div class="menuinsert ">

                    <h2 class="text-center mb-4 fw-bolder" style="font-family: 'Libre Baskerville', serif;">Menu Insert
                    </h2>

                    <p class="mt-2 fw-bolder">Dish Name:</p>
                    <input type="text" class="inputform" placeholder="Enter here" name="dname" value="{{old('dname')}}">
                    <span class="text-danger">
                        @error('dname')
                            {{ $message }}
                        @enderror
                    </span>

                    <p class="mt-2 fw-bolder">Dish Description:</p>
                    <Textarea rows="2" cols="60" class="textreaform" placeholder="Enter Description" name="ddesc"></Textarea><br>
                    <span class="text-danger">
                        @error('ddesc')
                            {{ $message }}
                        @enderror
                    </span>

                    <p class="mt-2 fw-bolder"> Dish Ingredient:</p>
                    <Textarea rows="2" cols="60" class="textreaform" placeholder="Enter Ingredient" name="dingre"></Textarea><br>
                    <span class="text-danger">
                        @error('dingre')
                            {{ $message }}
                        @enderror
                    </span>

                    <p class="mt-2 fw-bolder">Dish Price:</p>
                    <input type="text" class="inputform" name="dprice" placeholder="Enter Price" value="{{old('dprice')}}">
                    <span class="text-danger">
                        @error('dprice')
                            {{ $message }}
                        @enderror
                    </span>

                    <label class="mt-4 mb-3">Choose a Cuisin Type:</label>
                    <select name="ctype" id="dog-names" class="btn btn-dark ms-3">
                        @foreach ($data as $item)
                            <option value="{{ $item->id }}">{{ $item->cname }}</option>
                        @endforeach
                    </select>



                    <Div class="d-lg-flex mt-3 gap-1">
                        <p class="mt-2 fw-bolder ">pic1:</p>
                        <input type="file" class="fileupload" name="pic1">

                        <p class="mt-2 fw-bolder d-flex">pic2:</p>
                        <input type="file" class="fileupload" name="pic2">

                    </Div>

                    <Div class="d-lg-flex mt-3 gap-1">
                        <p class="mt-2 fw-bolder ">pic3:</p>
                        <input type="file" class="fileupload" name="pic3">

                        <p class="mt-2 fw-bolder d-flex">pic4:</p>
                        <input type="file" class="fileupload" name="pic4">

                    </Div>

                    <button class="btn btn-light mt-3 w-50" type="submit">Submit</button>
                </div>
            </div>
        </div>

    </form>

</body>

</html>
