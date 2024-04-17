@include('adminnavbar')
<div>
    <h4 class="mt-lg-5">Staff</h4>

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
            <a href="{{ route('staff.create') }}" class="btn btn-primary ms-3" style="border-radius: 10px; "><i
                    class="fa-solid fa-plus fa-lg me-2" style="color: #ffffff;"></i>Add staff</a>
        </div>


        {{-- //card of cuisin --}}


        <table class="table table-bordered table-striped table-condensed justify-content-center p-3 text-center mt-3">
            <thead>
                <tr>
                    <th scope="col">Staff ID</th>
                    <th scope="col">staff Name</th>
                    <th scope="col">staff designation</th>
                    <th scope="col">adharno</th>
                    <th scope="col">Address</th>
                    <th scope="col">phone no</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($data as $item)
                    
                
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$item->fullname}}</td>
                    <td>{{$item->designation}}</td>
                    <td>{{$item->adharno}}</td>
                    <td>{{$item->address}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->email}}</td>
                    <td><a class="btn btn-secondary" href="{{route('staff.edit',$item->id)}}"><i class="fa-solid fa-pen-to-square"></i> Update</a>
                        <form method="POST" action="{{route('staff.destroy',$item->id)}}" class="d-inline">
                            @csrf
                            @method('delete')
                            <input name="_method" type="hidden" value="DELETE">
                            <button type="submit" id="btndel" class="btn btn-danger content-icon show_confirm  ms-2"
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
