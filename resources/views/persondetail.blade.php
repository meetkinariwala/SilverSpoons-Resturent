@include('adminnavbar')
<div >
    <h4 class="mt-lg-5">Person detail</h4>
      
</div>
<div class="container">

  @if ($m=Session::get('success'))
  <div class="alert alert-success" role="alert">
      {{$m}}
  </div>
  @endif

  @if ($m=Session::get('error'))
  <div class="alert alert-danger" role="alert">
      {{$m}}
  </div>
  @endif



    {{-- //card of cuisin--}}

    {{-- <div class="row">
        <div class="col-md-3 mt-3">
            <div class="cardc bg-light">
                <img src="silverspoonsimg/silver spoon.png" class="card-img-top" alt="..." style="height: 150px;" >
                <div class="card-body">
                  <h4 class="card-text text-center mt-2 mb-2 fw-bolder text-capitalize ">chinese</h4>
                <div class="btn mb-3 mt-3 ">
                    <a href="#" class="btn btn-secondary ">Update</a>
                   <a href="#" class=" ms-3 btn btn-danger ">delete</a>
                </div>
                  
                </div>
              </div>

        </div>
    </div> --}}

    <table class="table table-bordered table-striped table-condensed justify-content-center p-3 text-center mt-3">
        <thead>
          <tr>
            <th scope="col">User ID</th>
            <th scope="col">User Name</th>
            <th scope="col">Password</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">pic</th>
            <th scope="col">Fullname</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

            @foreach ($data as $item)
          <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$item->username}}</td>
            <td><a href="" class="btn btn-secondary mt-2"><i class="fa-solid fa-pen-to-square"></i> Update</button> 
            </a>
              {{-- <form method="POST" action="{{ route('persondetail.destroy', $item->id) }}" class="d-inline">
                @csrf
                @method('delete')
                <input name="_method" type="hidden" value="DELETE">
                <button type="submit" id="btndel" class="btn btn-danger content-icon show_confirm mt-1 ms-2" data-toggle="tooltip" title='Delete'><i class="fa fa-trash"></i>Delete</button>
              </form> --}}
            </td>
          </tr>
          @endforeach
         
        </tbody>
      </table>

      {{$data->links()}}
    

   
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

