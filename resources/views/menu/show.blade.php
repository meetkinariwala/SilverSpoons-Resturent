{{-- @include('adminnavbar') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/dist/boxicons.js"
        integrity="sha512-Dm5UxqUSgNd93XG7eseoOrScyM1BVs65GrwmavP0D0DujOA8mjiBfyj71wmI2VQZKnnZQsSWWsxDKNiQIqk8sQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
 
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('menu_show.css')}}">
  
</head>
<body>

    <section class="product ">
        <div class="product__photo">
            <div class="photo-container">
                <div class="photo-main">
                    <div class="controls">
                        <i class="material-icons">share</i>
                        <i class="material-icons">favorite_Dishes</i>
                    </div>
                    <img src="{{ asset('menu_dish/'.$menu->pic1) }}" alt="Dishes images not found">
                </div>
                <!-- <div class="photo-album">
                    <ul>
                        <li><img src="p1.png" alt="green apple"></li>
                        <li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537303532/codepen/delicious-apples/half-apple.png" alt="half apple"></li>
                        <li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537303160/codepen/delicious-apples/green-apple-flipped.png" alt="green apple"></li>
                        <li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537303708/codepen/delicious-apples/apple-top.png" alt="apple top"></li>
                    </ul>
                </div> -->
            </div>
        </div>
        <div class="product__info">
            <div class="title">
                <h1>{{$menu->dishname}}</h1>
                <span>COD: 45999</span>
            </div>
            <div class="price">
                RS<span>{{$menu->price}}</span>
            </div>
            <!-- <div class="variant">
                <h3>SELECT A COLOR</h3>
                <ul>
                    <li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537302064/codepen/delicious-apples/green-apple2.png" alt="green apple"></li>
                    <li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537302752/codepen/delicious-apples/yellow-apple.png" alt="yellow apple"></li>
                    <li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537302427/codepen/delicious-apples/orange-apple.png" alt="orange apple"></li>
                    <li><img src="https://res.cloudinary.com/john-mantas/image/upload/v1537302285/codepen/delicious-apples/red-apple.png" alt="red apple"></li>
                </ul>
            </div> -->
            <div class="description">
                <h3>Description</h3>
                <ul>
                    <li class="w-75">{{$menu->dishdescription}}</li>
                </ul>

                <h3>Ingridient</h3>
                <ul>
                    <li class="w-75">{{$menu->ingredient}}</li>
                </ul>
            </div>
            <form action="{{route('menu.index')}}">
                @csrf
            <button class="buy--btn" type="submit" href="{{route('menu.index')}}">GO TO MENU PAGE</button>
            </form>
        </div>
    </section>
    

    
</body>
</html>