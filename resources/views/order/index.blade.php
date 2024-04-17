@include('adminnavbar')
<div>
    <h4 class="mt-lg-5">Order Detail</h4>

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
                    <th scope="col">order uid</th>
                    <th scope="col">pid</th>
                    <th scope="col">uid</th>
                    <th scope="col">pname</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">amount</th>
                    <th scope="col">Total_amount</th>
                    <th scope="col">Click on button</th>
                
                </tr>
            </thead>
            <tbody>
               
                @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->pid }}</td>
                    <td>{{ $item->uid }}</td>
                    <td>{{ $item->pname }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->amount }}</td>
                    <td>{{ $item->Total_amount }}</td>

                  
                        @php
                        if($item->status==1){
                          $status="Order Received";
                          $class="btn btn-info";
                        }elseif($item->status==2){
                          $status="Order is in Progress";
                          $class="btn btn-warning";

                        }else{
                          $status="Order Completed";
                          $class="btn btn-success";

                        }
                    @endphp
                    <td><a class="{{$class}}" href="/order/update/{{$item->id}}" >{{$status}}</a></td>

                    
                    {{-- <td>
                        <form method="POST" action="{{route('order.destroy', $item->id) }}" class="d-inline">
                            @csrf
                            @method('delete')
                            <input name="_method" type="hidden" value="DELETE">
                            <button type="submit" class="btn btn-danger content-icon show_confirm mt-1 ms-2"
                                data-toggle="tooltip" title='Delete'><i class="fa fa-trash"></i> Delete</button>
                        </form>
                    </td> --}}

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
