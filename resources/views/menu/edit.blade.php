@include('adminnavbar')
<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="../form.css">
    <title>Form page</title>
</head>

<body>
    <form method="POST" action="{{ route('menu.update', $menu->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row justify-content-center">
            <div class="col-md-6">


                <div class="menuinsert mt-2">

                    <h2 class="text-center mb-4 fw-bolder" style="font-family: 'Libre Baskerville', serif;">Menu Update
                    </h2>

                    <p class="mt-3 fw-bolder">Dish Name:</p>
                    <input type="text" class="inputform" placeholder="Enter here" name="dname"
                        value="{{ $menu->dishname }}">
                    <span class="text-danger">
                        @error('dname')
                            {{ $message }}
                        @enderror
                    </span>

                    <p class="mt-2 fw-bolder">Dish Description:</p>
                    <Textarea rows="2" cols="60" class="textreaform" placeholder="Enter Description" name="ddesc">{{ $menu->dishdescription }}</Textarea><br>
                    <span class="text-danger">
                        @error('ddesc')
                            {{ $message }}
                        @enderror
                    </span>

                    <p class="mt-2 fw-bolder"> Dish Ingredient:</p>
                    <Textarea rows="2" cols="60" class="textreaform" placeholder="Enter Ingredient" name="dingre">{{ $menu->ingredient }}</Textarea><br>
                    <span class="text-danger">
                        @error('dingre')
                            {{ $message }}
                        @enderror
                    </span>

                    <p class="mt-2 fw-bolder">Dish Price:</p>
                    <input type="text" class="inputform" name="dprice" placeholder="Enter Price"
                        value="{{ $menu->price }}">
                    <span class="text-danger">
                        @error('dprice')
                            {{ $message }}
                        @enderror
                    </span>

                    <label class="mt-3">Choose a Cuisin Type:</label>
                    <select name="ctype" id="dog-names" class="btn btn-dark ms-3">
                        <option selected value="{{ $cuisin->id }}">{{ $cuisin->cname }}</option>

                        @foreach ($data as $item)
                            @if ($item->id != $cuisin->id)
                                <option value="{{ $item->id }}">{{ $item->cname }}</option>
                            @endif
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"
    integrity="sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</html>
