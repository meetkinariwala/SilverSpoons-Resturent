@include('adminnavbar')
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11">

                <a class="addbtn btn btn-primary" href="{{route('banners.create')}}">
                    <i class="fa-solid fa-plus"></i> Add Banner
                </a>

                <a class="btn btn-warning">
                    <i class="fa-solid fa-arrow-left"></i> Back
                </a>

                <div class="cardb">
                    <table class="table table-bordered table-striped table-condensed flip-content mt-3 text-center">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Sr No</th>
                            <th scope="col">Banner Title</th>
                            <th scope="col">Picture</th>
                            <th scope="col">Status</th>
                            <th scope="col">Operations</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($banners as $item)
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>{{$item->btitle}}</td>
                                <td><img src="banner/{{$item->pic}}" class="rounded" height="50px" width="75px" /></td>
                                <td>@if ($item->status)
                                    On Air
                                @else
                                    Off Air
                                @endif</td>
                                <td><a href="{{route('banners.edit',$item->id)}}" class="btn btn-warning  mt-1 content-icon">
                                    <i class="fa fa-edit"></i> update
                                </a>
                                <form method="POST" action="{{ route('banners.destroy', $item->id) }}" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <input name="_method" type="hidden" value="DELETE">
                                    <button type="submit" id="btndel" class="btn btn-danger content-icon show_confirm mt-1 ms-2" data-toggle="tooltip" title='Delete'><i class="fa fa-trash"></i>Delete</button>
                                  </form>
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                      <div class="justify-content-end">
                        {{$banners->links();}}
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Delete</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Are you sure?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <form action="" method="POST">
            @csrf
            @method('delete')
            <input type="hidden" value="" name="bid" id="bid"/>
          <button type="submit" class="btn btn-primary">Delete</button>
        </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
    $('.btn-danger').click(function (event) {
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

</body>
</html>




<script >

$(document).ready(function() {
    function getvalue(params) {
        $('#bid').val();
    }
});
    </script>
