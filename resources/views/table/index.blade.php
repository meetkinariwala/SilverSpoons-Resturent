@include('adminnavbar')
<div>
    <h4 class="mt-lg-5">Table</h4>

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


        {{-- <div class="add text-start mt-3 ">
            <a href="{{ route('table.create') }}" class="btn btn-primary ms-3" style="border-radius: 10px; "><i
                    class="fa-solid fa-plus fa-lg me-2" style="color: #ffffff;"></i>Add Table</a>
        </div> --}}


        {{-- //card of cuisin --}}


        <table class="table table-bordered table-striped table-condensed justify-content-center p-3 text-center mt-3">
            <thead>
                <tr>
                    <th scope="col">Table ID</th>
                    <th scope="col">Table Uid</th>
                    <th scope="col">Table Number</th>
                    <th scope="col">No of Guest</th>
                    <th scope="col">Date</th>
                    <th scope="col">Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                       <td>{{$loop->index+1}}</td>
                       <td>{{$item->uid}}</td>
                       <td>{{$item->tnumber}}</td>
                       <td>{{$item->guest}}</td>
                       <td>{{$item->date}}</td>
                       <td>{{$item->time}}</td>
                    </tr>
                @endforeach



            </tbody>

           
        </table>
        {{$data->links()}}

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
