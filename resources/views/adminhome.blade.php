@include('adminnavbar')

<h4 class="mt-2">Admin home</h4>
<div class="row mt-3">
    <div class="col-xl-4 col-lg-4" data-aos="slide-right">
        <div class="cardindex l-bg-cherry">
            <div class="cardindex-statistic-3 p-4">
                <div class="cardindex-icon cardindex-icon-large"><i class="fas fa-shopping-cart"></i></div>
                <div class="mb-4">
                    <h5 class="cardindex-title mb-0">New Orders</h5>
                </div>
                <div class="row align-items-center mb-2 d-flex">
                    <div class="col-8">
                        <h2 class="d-flex align-items-center mb-0">
                            {{ $orders }}
                        </h2>
                    </div>
                    <div class="col-4 text-right">
                        <span>12.5% <i class="fa fa-arrow-up"></i></span>
                    </div>
                </div>
                <div class="progress mt-1 " data-height="8" style="height: 8px;">
                    <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-4" >
        <div class="cardindex l-bg-blue-dark">
            <div class="cardindex-statistic-3 p-4">
                <div class="cardindex-icon cardindex-icon-large"><i class="fas fa-users"></i></div>
                <div class="mb-4">
                    <h5 class="cardindex-title mb-0">Dishes</h5>
                </div>
                <div class="row align-items-center mb-2 d-flex">
                    <div class="col-8">
                        <h2 class="d-flex align-items-center mb-0">
                            {{ $menu }}
                        </h2>
                    </div>
                    <div class="col-4 text-right">
                        <span>9.23% <i class="fa fa-arrow-up"></i></span>
                    </div>
                </div>
                <div class="progress mt-1 " data-height="8" style="height: 8px;">
                    <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-4" data-aos="slide-left">
        <div class="cardindex l-bg-green-dark">
            <div class="cardindex-statistic-3 p-4">
                <div class="cardindex-icon cardindex-icon-large"><i class="fas fa-ticket-alt"></i></div>
                <div class="mb-4">
                    <h5 class="cardindex-title mb-0">Total Users</h5>
                </div>
                <div class="row align-items-center mb-2 d-flex">
                    <div class="col-8">
                        <h2 class="d-flex align-items-center mb-0">
                            {{ $totaluser }}
                        </h2>
                    </div>
                    <div class="col-4 text-right">
                        <span>10% <i class="fa fa-arrow-up"></i></span>
                    </div>
                </div>
                <div class="progress mt-1 " data-height="8" style="height: 8px;">
                    <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6 mt-3" data-aos="slide-right">
        <div class="cardindex l-bg-orange-dark1">
            <div class="cardindex-statistic-3 p-4">
                <div class="cardindex-icon cardindex-icon-large"><i class="fas fa-solid fa-table"></i></div>
                <div class="mb-4">
                    <h5 class="cardindex-title mb-0">Table Booking</h5>
                </div>
                <div class="row align-items-center mb-2 d-flex">
                    <div class="col-8">
                        <h2 class="d-flex align-items-center mb-0">
                            {{ $totaltable }}
                        </h2>
                    </div>
                    <div class="col-4 text-right">
                        <span>4.5% <i class="fa fa-arrow-up"></i></span>
                    </div>
                </div>
                <div class="progress mt-1 " data-height="8" style="height: 8px;">
                    <div class="progress-bar l-bg-cyan" role="progressbar" data-width="30%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-xl-6 col-lg-6 mt-3 " data-aos="slide-left">
        <div class="cardindex l-bg-orange-dark" >
            <div class="cardindex-statistic-3 p-4">
                <div class="cardindex-icon cardindex-icon-large"><i class="fas fa-dollar-sign"></i></div>
                <div class="mb-4">
                    <h5 class="cardindex-title mb-0">Revenue Today</h5>
                </div>
                <div class="row align-items-center mb-2 d-flex">
                    <div class="col-8">
                        <h2 class="d-flex align-items-center mb-0">
                            {{ $totalrevenue }}
                        </h2>
                    </div>
                    <div class="col-4 text-right">
                        <span>2.5% <i class="fa fa-arrow-up"></i></span>
                    </div>
                </div>
                <div class="progress mt-1 " data-height="8" style="height: 8px;">
                    <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                </div>
            </div>
        </div>
    </div>



</div>


</div>

{{-- element scroll script --}}
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init({
    
    offset: 300, // offset (in px) from the original trigger point
    duration:1000,
    
    
    });
</script>




    <figure class="pie-chart">
        <h2>Silver Spoons - Resturent app</h2>
        <figcaption>
            Users {{$totaluser}}<span style="color:#4e79a7"></span><br>
            Table {{ $totaltable}}<span style="color:#e15759"></span><br>
            Dishes {{$menu}}<span style="color:#76b7b2"></span><br>
            Revenue {{$totalrevenue}}<span style="color:#59a14f"></span><br>
            Orders {{$orders}}<span style="color:#edc949"></span>
        </figcaption>
        <cite>Resturent Mnagement App</cite>
    </figure>



    <style>
        .pie-chart {
background:
    radial-gradient(
        circle closest-side,
        transparent 70%,
        white 0
    ),
    conic-gradient(
        #4e79a7 0,
        #4e79a7 49.4%,
        #e15759 0,
        #e15759 70.2%,
        #76b7b2 0,
        #76b7b2 83.2%,
        #59a14f 0,
        #59a14f 91%,
        #edc949 0,
        #edc949 100%
);
position: relative;
width: max;
min-height: 350px;
margin: 0;
outline: 1px solid #ccc;
}
.pie-chart h2 {
position: absolute;
margin: 1rem;
}
.pie-chart cite {
position: absolute;
bottom: 0;
font-size: 80%;
padding: 1rem;
color: gray;
}
.pie-chart figcaption {
position: absolute;
bottom: 1em;
right: 1em;
font-size: smaller;
text-align: right;
}
.pie-chart span:after {
display: inline-block;
content: "";
width: 0.8em;
height: 0.8em;
margin-left: 0.4em;
height: 0.8em;
border-radius: 0.2em;
background: currentColor;
}
    </style>



<div class="row mt-4 mb-5">
    
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body text-center">
                <h5 class="card-title m-b-0">Order Table </h5>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-dark table-hover">
                        <tr>

                            <th scope="col">order uid</th>
                            <th scope="col">pid</th>
                            <th scope="col">pname</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">amount</th>
                            <th scope="col">Total_amount</th>
                        </tr>
                    </thead>
                    <tbody class="customtable">
                       
                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->pid }}</td>
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
            
                                
                            
    
                        </tr>
                    @endforeach


                    </tbody>
                </table>
                {{$data->links()}}
            </div>
        </div>
    </div>


    

</div>







<!--Container Main end-->
</body>

</html>
