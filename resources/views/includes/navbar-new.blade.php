<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('includes/header_old')
</head>
<body>
    @include('../structures/navbarStucture')
    <?php $structure = navbarStructure();  ?>
    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand logo-laptop" aria-label="redirect to Homepage" href="{{ URL::to('/')}}">
                <figure>
                    <img src="{{ URL::asset('/images/newlogo.png')}}" alt="databar logo">
                </figure>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <div class="product-toggler">
                    <a class="btn-toggler" aria-label="Toggle product">
                        <span class="navbar-toggler-icon"></span>
                        <span class="navbar-text">
                            Product
                        </span>
                    </a>
                </div>
              <ul class="navbar-nav ml-auto">
                  @foreach ($structure as $item)
                    <li class="nav-item "> 
                        <a class="nav-link" href="{{$item['link']}}">{{ $item['label'] }} </a>
                    </li>
                  @endforeach
              </ul>
            </div>
        </div>
    </nav>

    {{-- CSS --}}
    <style>
        /* Button Product */
        .product-toggler{
            display: flex;
        }
        .btn-toggler {
            background: transparent;
            border: transparent;
        }
        .btn-toggler .navbar-toggler-icon{
            color : #0066cc;
        }
        .btn-toggler .navbar-text{

        }
        /*  */
        .nav-link{
            font-size: 13px;
        }
        .navbar {
            background:#eee;
        }

        .navbar-light .navbar-nav .nav-item::after {
            display: none !important;
        }

        .logo-laptop > figure{
            width:150px;
            height:auto;
            margin:0;
        }

        .logo-laptop > figure > img{
            width:100%;
        }

    </style>

</body>
</html>
