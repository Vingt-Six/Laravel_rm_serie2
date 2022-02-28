<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ Route('first') }}">Prénom</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ Route('second') }}">Nom</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ Route('third') }}">Age</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARwAAACyCAMAAACnS4D4AAAAA1BMVEWoStT7OYBAAAAASElEQVR4nO3BMQEAAADCoPVPbQ0PoAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADeDcYqAAE00FRDAAAAAElFTkSuQmCC" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.ceradel.fr/6075-thickbox_default/fond-couleur-vert-moyen-dim33x23cm.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.wapiti-magazine.com/wp-content/uploads/sites/26/2013/06/Graeme-Purdy-iStock.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://i-mom.unimedias.fr/2020/09/16/le-loup-un-animal-sauvage-rare-et-majestueux.jpg?auto=format,compress&cs=tinysrgb" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.galbani.fr/wp-content/uploads/2017/07/shutterstock_142426168-800x600.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.galbani.fr/wp-content/uploads/2017/07/pizza_maison.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <footer class="bg-secondary fixed-bottom">
        <h3>Footer</h3>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
