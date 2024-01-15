@extends('layouts.app')

@section('title')

@section('content')

    <section class="hero-area">
        <div class="single-hero-slide d-flex align-items-center justify-content-center">
            <!-- Imagen -->
            <div class="slide-img bg-img" style="background-image">
                <img src="{{ asset('assets/image/Post-Malones-concert.jpg') }}" object-fit= "cover" width="100%"
                    height="100%">
            </div>
            <!-- Movimiento -->
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-slides-content text-center">
                            <h6 data-animation="fadeInUp" data-delay="100ms">Lo ultimo en la musica</h6>
                            <h2 data-animation="fadeInUp" data-delay="800ms">Descubrelo aqui</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <!-- ##### Albums Conocidos Inicio ##### -->
    <section class="latest-albums-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading style-2">
                        <h2>Albums Conocidos</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-9">
                    <div class="ablums-text text-center mb-70">
                        <p> Nuestro blog de música es un sitio en donde encotraras los últimos sencillos o álbumes que hayan
                            sido
                            éxitosos a lo largo del año, podras escucharlos y conocer su informacion mas
                            relevante, a continuacion algunos de ellos</p>
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-12">
                    <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>


                        <div class="carousel-inner">
                            @foreach ($category as $item)
                                @continue($item->id == 0)
                                <div class="carousel-item active">
                                    <img src="{{ asset('uploads/category/images/' . $item->image) }}" width="350px"
                                        height="350px">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>{{ $item->artist }}</h5>
                                        <p>{{ $item->title_album }}</p>
                                        <p>{{ $item->genre }}</p>
                                    </div>
                                </div>
                                @break($item->id == 5)
                            @endforeach
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
    </section>
    <!-- ##### Albums Conocidos End ##### -->


    <!-- ##### Start ##### -->
    <section class="breadcumb-area bg-img bg-overlay" style="background-image: url(assets/image/tracks4.jpg);">
        <div class="bradcumbContent">
            <p>Descubre lo ultimo </p>
            <h2>Libreria de Musica</h2>
        </div>
    </section>
    <!-- ##### End ##### -->

    <div class="container-fluid px-4" style="padding-top: 100px;padding-bottom: 130px;">

        <div class="row justify-content-center">
            <div class="col-12 col-lg-9">
                <div class="ablums-text text-center mb-70">
                    <p> Busca y filtra los datos segun tus gustos musicales</p>
                </div>
            </div>
        </div>

        <div class="card mt-4" style="background-color: rgb(255, 252, 250);">
            <div class="card-header">
                <h4>Lista de Musica </h4>
            </div>
            <div class="card-body">
                <table id="myDataTable" class="table table-striped table compact" style="width:85%">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Imagen Artista</th>
                            <th>Artista</th>
                            <th>Titulo Cancion</th>
                            <th>Imagen Album</th>
                            <th>Titulo Album</th>
                            <th>Año</th>
                            <th>Genero</th>
                            <th>Cancion</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>
                                    <img src="{{ asset('uploads/category/images/' . $item->image_artist) }}" width="80px"
                                        height="80px" alt="img">
                                </td>
                                <td>{{ $item->artist }}</td>
                                <td>{{ $item->title_song }}</td>
                                <td>
                                    <img src="{{ asset('uploads/category/images/' . $item->image) }}" width="80px"
                                        height="80px" alt="img">
                                </td>
                                <td>{{ $item->title_album }}</td>
                                <td>{{ $item->year }}</td>
                                <td>{{ $item->genre }}</td>
                                <td>
                                    <audio controls="true">
                                        <source src="{{ asset('uploads/category/songs/' . $item->song) }}"
                                            type="audio/mpeg">
                                    </audio>
                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

        </div>

    </div>



    <!-- ##### Miscellaneous Area Start ##### -->
    <section class="miscellaneous-area section-padding-100-0" style="background-color: rgb(214, 214, 214);">
        <div class="container">
            <div class="row">
                <h2></h2>
                <!-- ***** Top Canciones ***** -->
                <div class="col-12 col-lg-4">
                    <div class="new-hits-area mb-100">
                        <div class="section-heading text-left mb-50">

                            <h2>Canciones</h2>
                        </div>

                        @foreach ($category as $item)
                            @continue($item->id == 0)

                            <div class="single-new-item d-flex align-items-center justify-content-between ">
                                <div class="first-part d-flex align-items-center">
                                    <div class="thumbnail">
                                        <img src="{{ asset('uploads/category/images/' . $item->image) }}" width="80px"
                                            height="80px" alt="img">
                                    </div>
                                    <div class="content-">
                                        <h6>{{ $item->artist }}</h6>
                                        <p>{{ $item->title_song }}</p>
                                    </div>
                                </div>
                                <audio controls>
                                    <source src="{{ asset('uploads/category/songs/' . $item->song) }}" type="audio/mpeg">
                                </audio>
                            </div>
                            @break($item->id == 6)
                        @endforeach
                    </div>
                </div>


                <!-- ***** Top Album ***** -->
                <div class="col-12 col-lg-4">
                    <div class="weeks-top-area mb-100">
                        <div class="section-heading text-left mb-50 ">

                            <h2>Albums</h2>
                        </div>
                        @foreach ($category as $item)
                            @continue($item->id == 0)
                            <!-- Single Top Item -->
                            <div class="single-top-item d-flex">
                                <div class="thumbnail">
                                    <img src="{{ asset('uploads/category/images/' . $item->image) }}" alt="">
                                </div>
                                <div class="content-">
                                    <h6>{{ $item->artist }}</h6>
                                    <p>{{ $item->title_album }}</p>
                                </div>
                            </div>
                            @break($item->id == 6)
                        @endforeach
                    </div>
                </div>

                <!-- ***** Artistas Populares ***** -->
                <div class="col-12 col-lg-4">
                    <div class="popular-artists-area mb-100">
                        <div class="section-heading text-left mb-50">

                            <h2>Artistas</h2>
                        </div>
                        @foreach ($category as $item)
                            @continue($item->id == 0)
                            <!-- Single Artist -->
                            <div class="single-artists d-flex align-items-center ">
                                <div class="thumbnail">
                                    <img src="{{ asset('uploads/category/images/' . $item->image_artist) }}"
                                        width="80px" height="80px" alt="img">
                                </div>
                                <div class="content-">
                                    <p>{{ $item->artist }}</p>
                                </div>
                            </div>
                            @break($item->id == 6)
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ##### Footer ##### -->
    <footer class="footer-area">
        <div class="container" style="padding-bottom: 0px;">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-12 col-md-6">
                    <a href="#"><img src="" alt=""></a>
                    <p class="copywrite-text"><a href="#">
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> Todos los derechos reservados | This template is made with <i
                                class="fa fa-heart-o" aria-hidden="true"></i> by <a>Colorlib</a></p>
                </div>

                <div class="col-12 col-md-6">
                    <div class="footer-nav">
                        <ul>
                            <li><a href="{{ url('/') }}">Inicio</a></li>
                            <li class="nav-item"> <a href="https://www.facebook.com/"> <img
                                        src="{{ asset('assets/logos/facebook.png') }}" width="25px"
                                        height="25px"></a></li>
                            <li class="nav-item"> <a href="https://twitter.com/home"> <img
                                        src="{{ asset('assets/logos/instagram.png') }}" width="25px"
                                        height="25px"></a></li>
                            <li class="nav-item"> <a href="https://www.instagram.com/"> <img
                                        src="{{ asset('assets/logos/twitter.png') }}" width="25px" height="25px"></a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer End ##### -->
@endsection
