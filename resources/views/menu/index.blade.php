@include('adminnavbar')
<div>
    <h4 class="mt-lg-5">Menu</h4>

</div>
<div class="container">

    <div class="container">

        @if ($m = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{ $m }}
            </div>
        @endif

        @if ($m = Session::get('error'))
            <div class="alert alert-danger" role="alert">
                {{ $m }}
            </div>
        @endif


        <div class="add text-start mt-3 ">
            <a href="{{ route('menu.create') }}" class="btn btn-primary ms-3" style="border-radius: 10px; "><i
                    class="fa-solid fa-plus fa-lg me-2" style="color: #ffffff;"></i>Add Menu</a>
        </div>


        {{-- //card of cuisin --}}

        <style>
            .carousel-item img {
                width: 100%;
                height: 250px;
                object-fit: cover;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .carousel-caption {
                color: #dc3545
            }

            .cardc {
                background-color: white;
                border: 1px solid #ddd;
                overflow: hidden;
                min-height: 250px;
                /* Set a minimum height for the card */
            }

            .cardc .menutext {
                text-transform: capitalize
            }

            .carousel-inner {
                height: 250px;
                /* Set a fixed height for the carousel-inner */
            }

            .card-body {
                padding: 15px;
            }

            .btn-secondary {
                background-color: #6c757d;
                color: #fff;
            }

            .btn-danger {
                background-color: #dc3545;
                color: #fff;
            }
        </style>



        {{-- <div class="row ">

            @foreach ($data as $item)
                <div class="col-md-3 mt-3">

                    <img src="menu_dish/{{ $item->pic1 }}" class="d-block w-100" alt="..." style="width: 100px; height: 300px;">
                    
                        <div class="card-body d-block">
                            <h5 class="menutext text-center mt-3 fw-bolder">
                                <p class="text-muted d-lg-inline"> DishName: </p>{{ $item->dishname }}
                            </h5>

                            <h5 class=" menutext text-center mt-3 fw-bolder">
                                <p class="text-muted d-lg-inline"> Dishprice: </p>{{ $item->price }}rs
                            </h5>

                            <h5 class=" menutext text-center mt-3 fw-bolder">
                                <p class="text-muted d-lg-inline">Cuisintype: </p>{{ $item->ctype }}

                            </h5>


                            <a class="btn btn-secondary ms-2 mb-2 mt-2" href="{{ route('menu.edit', $item->id) }}"><i
                                    class="fa-solid fa-pen-to-square"></i> Update</a>
                            <form method="POST" action="{{ route('menu.destroy', $item->id) }}" class="d-inline">
                                @csrf
                                @method('delete')
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit" id="btndel"
                                    class="btn btn-danger content-icon show_confirm mt-2 ms-2 mb-2"
                                    data-toggle="tooltip" title='Delete'><i class="fa fa-trash"></i> Delete</button>
                            </form>

                        </div>
                    
                </div>
            @endforeach
        </div> --}}






        <table class="table table-bordered table-striped table-condensed justify-content-center p-3 text-center mt-3">
            <thead>
                <tr>
                    <th scope="col">Dish ID</th>
                    <th scope="col">Dish Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Cuisintype</th>
                    <th scope="col">Pic1</th>
                    <th scope="col">Pic2</th>
                    <th scope="col">Pic3</th>
                    <th scope="col">Pic4</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td class="menutext">{{ $loop->index + 1 }}</td>
                        <td class="menutext"> {{ $item->dishname }}</td>
                        <td class="menutext">{{ $item->price }}</td>
                        <td class="menutext">{{ $item->ctype }}</td>
                        <td><img src="menu_dish/{{ $item->pic1 }}"class="rounded"  style="height: 50px; width: 50px; "></td>
                        <td><img src="menu_dish/{{ $item->pic2 }}"
                                style="height: 50px; width: 50px; border-radius: 50%;"></td>
                        <td><img src="menu_dish/{{ $item->pic3 }}"
                                style="height: 50px; width: 50px; border-radius: 50%;"></td>
                        <td><img src="menu_dish/{{ $item->pic4 }}"
                                style="height: 50px; width: 50px; border-radius: 50%;"></td>
                        <td>
                            <a class="btn btn-primary me-2 mt-1" href="{{route('menu.show',$item->id)}}">
                                <i class="fa-solid fa-eye"></i> View</a>
                            
                            <a class="btn btn-secondary mt-1" href="{{ route('menu.edit', $item->id) }}"><i
                                    class="fa-solid fa-pen-to-square"></i> Update</a>

                                
                            <form method="POST" action="{{ route('menu.destroy', $item->id) }}" class="d-inline">
                                @csrf
                                @method('delete')
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit" class="btn btn-danger content-icon show_confirm mt-1 ms-2"
                                    data-toggle="tooltip" title='Delete'><i class="fa fa-trash"></i> Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach



            </tbody>
        </table>
        {{ $data->links() }}

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.btn-danger').click(function(event) {
                var form = $(this).closest("form");
                event.preventDefault();
                swal({
                        title: "DELETE", // Assuming DELETE is the correct string for the title
                        text: "If you delete this, it will be gone forever.",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            form.submit();
                        }
                    });
            });
        });
    </script>

    <!--Container Main end-->
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"
        integrity="sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    </html>
