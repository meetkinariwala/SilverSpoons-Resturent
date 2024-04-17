@include('adminnavbar')

<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <form method="POST" enctype="multipart/form-data" action="{{route('banners.store')}}">
            @csrf

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Banner Title</label>
                <input type="text" name="title" class="form-control" value="{{old('title')}}" style="color: black" id="exampleFormControlInput1" placeholder="Banner Title">
                <span class="text-danger">@error('title'){{$message}}@enderror</span>
              </div>

              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Upload Pic</label>
                <input type="file" name="pic" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                <span class="text-danger">@error('pic'){{$message}}@enderror</span>
              </div>

              <div class="form-check form-switch">
                <input class="form-check-input" name="status" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                <label class="form-check-label" for="flexSwitchCheckChecked">Active Status</label>
              </div>
            <br>
              <button type="submit" class="btn btn-primary">Add Record</button>


        </form>

    </div>

</div>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>



