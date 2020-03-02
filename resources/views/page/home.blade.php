@extends('layouts.page.app')
@section('content')
    <header>
        <div class="overlay"></div>
        <div class="homepage-video">
{{--            <iframe src="https://player.vimeo.com/video/361847703?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>--}}
            <iframe src="https://player.vimeo.com/video/294846484?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>

        </div>
        <div class="container h-100">
            <div class="row d-flex h-75 text-center align-items-end">
                <div class="col w-100 text-white">
                    <h1 class="h1">Un viaje de ensueño</h1>
                    <h2 class="font-weight-lighter h4">Los mejores destinos en Perú operado por los mejores asesores de viaje.</h2>
{{--                    <a href="#consulte" class="btn btn-dark btn-lg h2 font-weight-bold mt-3">Diseña tu Viaje</a>--}}
                    {{--                        <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p>--}}
                </div>
            </div>
            <div class="row h-25 align-items-end">
                <div class="col">
                    <formhome-component></formhome-component>
                </div>
            </div>
        </div>
    </header>

    <section class="container-fluid bg-light">

        <div class="row py-3">
            <div class="col">
                <!-- Swiper -->
                <div class="swiper-category overflow-hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="row no-gutters position-relative">
                                <div class="card shadow-sm rounded-pill">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col-md-4">
                                            <img src="http://admin.mietnia.com/admin/categoria/editar/imagen/foto-2.jpeg" alt="" class="w-100 rounded-circle">
                                        </div>
                                        <div class="col-md position-static p-2">
                                            <a href="" class="p-0 m-0 text-decoration-none font-weight-bold text-secondary stretched-link">Vivencial</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row no-gutters position-relative">
                                <div class="card shadow-sm rounded-pill">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col-md-4">
                                            <img src="http://admin.mietnia.com/admin/categoria/editar/imagen/foto-2.jpeg" alt="" class="w-100 rounded-circle">
                                        </div>
                                        <div class="col-md position-static p-2">
                                            <a href="" class="p-0 m-0 text-decoration-none font-weight-bold text-secondary stretched-link">Vivencial</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row no-gutters position-relative">
                                <div class="card shadow-sm rounded-pill">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col-md-4">
                                            <img src="http://admin.mietnia.com/admin/categoria/editar/imagen/foto-2.jpeg" alt="" class="w-100 rounded-circle">
                                        </div>
                                        <div class="col-md position-static p-2">
                                            <a href="" class="p-0 m-0 text-decoration-none font-weight-bold text-secondary stretched-link">Vivencial</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row no-gutters position-relative">
                                <div class="card shadow-sm rounded-pill">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col-md-4">
                                            <img src="http://admin.mietnia.com/admin/categoria/editar/imagen/foto-2.jpeg" alt="" class="w-100 rounded-circle">
                                        </div>
                                        <div class="col-md position-static p-2">
                                            <a href="" class="p-0 m-0 text-decoration-none font-weight-bold text-secondary stretched-link">Vivencial</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row no-gutters position-relative">
                                <div class="card shadow-sm rounded-pill">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col-md-4">
                                            <img src="http://admin.mietnia.com/admin/categoria/editar/imagen/foto-2.jpeg" alt="" class="w-100 rounded-circle">
                                        </div>
                                        <div class="col-md position-static p-2">
                                            <a href="" class="p-0 m-0 text-decoration-none font-weight-bold text-secondary stretched-link">Vivencial</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row no-gutters position-relative">
                                <div class="card shadow-sm rounded-pill">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col-md-4">
                                            <img src="http://admin.mietnia.com/admin/categoria/editar/imagen/foto-2.jpeg" alt="" class="w-100 rounded-circle">
                                        </div>
                                        <div class="col-md position-static p-2">
                                            <a href="" class="p-0 m-0 text-decoration-none font-weight-bold text-secondary stretched-link">Vivencial</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row no-gutters position-relative">
                                <div class="card shadow-sm rounded-pill">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col-md-4">
                                            <img src="http://admin.mietnia.com/admin/categoria/editar/imagen/foto-2.jpeg" alt="" class="w-100 rounded-circle">
                                        </div>
                                        <div class="col-md position-static p-2">
                                            <a href="" class="p-0 m-0 text-decoration-none font-weight-bold text-secondary stretched-link">Vivencial</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Pagination -->
{{--                    <div class="swiper-pagination"></div>--}}
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white pt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col text-center">
                    <h1 class="font-weight-semi-bold text-secondary">Tours totalmente personalizables en Perú</h1>
                    <h2 class="lead text-black font-weight-bold">Servicio amable y profesional de principio a fin para un viaje inolvidable.</h2>
                    <p class="font-weight-light mt-5 text-muted">Expertos operadores de viajes locales. Nuestros guías, conductores y representantes estarán muy contentos en compartir lo mejor de nuestro Perú. Tenemos 10 años de experiencia diseñando viajes inolvidable a la tierra de los Incas! Incluyendo Socios Globales como Expedia, Travelocity, Tripadvisor, que nos reconocen como Operador Top en Perú. Cotize el dia de hoy un viaje inolvidable para conocer MachuPicchu !</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col text-center">
                    <package-component></package-component>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-light pt-4 pb-3">
        <div class="container">
            <div class="row pb-4">
                <div class="col">
                    <h2 class="font-weight-semi-bold h3">Destinos recomendados</h2>
                    <p class="font-weight-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cumque dolor dolore enim et, expedita hic incidunt inventore iure libero nisi odio perferendis porro possimus quo sint sit vel voluptatem?</p>
                </div>
            </div>
            <div class="row">
                @foreach($destino as $destinos)
                    <div class="col-12 col-md-4">
                        <div class="card">
                            <div class="position-relative bx-img-destinohome">
                                <a href="" class="text-dark d-block">
                                    <img src="{{$destinos->imagen}}" alt="" class="w-100">
                                </a>
                            </div>
                            <div class="card-body position-relative text-center">
                                <p class="d-block h5 font-weight-light t-corrido">{{$destinos->pais}}</p>
                                <span class="text-uppercase">{{$destinos->nombre}}</span>
                                <a href="" class="d-block btn-sm t-small-6 stretched-link text-muted mt-2">VER DETALLES</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="row">
                <div class="col text-center">
                    <a href="" class="btn btn-info font-weight-bold btn-sm text-uppercase small my-4"><small>Explore todos nuestros destinos en Perú</small></a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row pt-5 pb-4">
                <div class="col">
                    <h2 class="font-weight-semi-bold h4 text-center">NUESTRAS RECOMENDACIONES</h2>
                </div>
            </div>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="row align-items-center">
                            <div class="col-5">
                                <div class="box-sectionslider my-5 p-5 text-center">
                                    <h4 class="t-corrido">Familia</h4>
                                    <h3>PENSADO PARA FAMILIAS Y GRUPOS</h3>
                                    <span class="t-small-6 text-muted">RECOMENDADO</span>
                                    <p class="py-4 m-0 font-weight-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis harum nemo, perferendis quidem quo sapiente! Consequuntur doloremque praesentium quibusdam voluptates. Ducimus fuga impedit iure molestias neque nulla optio quos rem!</p>
                                    <a href="" class="btn btn-dark mt-3 btn-sm"><img src="{{asset('images/whatsapp-i.png')}}" width="30" alt=""> Contactar con un asesor de viajes</a>
                                </div>
                            </div>
                            <div class="col-7">
                                <img src="https://backpacktraveler.qodeinteractive.com/wp-content/uploads/2018/08/single-post-3.jpg" alt="" class="w-100 my-5">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="row align-items-center">
                            <div class="col-5">
                                <div class="box-sectionslider my-5 p-5 text-center">
                                    <h4 class="t-corrido">Aventura</h4>
                                    <h3>PAQUETE DISEÑADO PARA PERSONAS QUE GUSTAN DE LA AVENTURA</h3>
                                    <span class="t-small-6 text-muted">RECOMENDADO</span>
                                    <p class="py-3 m-0 font-weight-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis harum nemo, perferendis quidem quo sapiente! Consequuntur doloremque praesentium quibusdam voluptates. Ducimus fuga impedit iure molestias neque nulla optio quos rem!</p>
                                    <a href="" class="btn btn-dark mt-3 btn-sm"><img src="{{asset('images/whatsapp-i.png')}}" width="30" alt=""> Contactar con un asesor de viajes</a>
                                </div>
                            </div>
                            <div class="col-7">
                                <img src="https://backpacktraveler.qodeinteractive.com/wp-content/uploads/2018/08/single-post-3.jpg" alt="" class="w-100 my-5">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

        </div>
    </section>

    {{--    <section>--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col">--}}
    {{--                    <form action="https://api.rd.services/platform/contacts/{identifier}:{value}" method="post">--}}
    {{--                        @csrf--}}
    {{--                        <input type="text" name="email" placeholder="email">--}}
    {{--                        <input type="text" name="nombre" placeholder="nombre">--}}
    {{--                        <input type="submit" value="enviar">--}}
    {{--                    </form>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </section>--}}

@endsection

@push('scripts')
    <script>
        var swiper = new Swiper('.swiper-category', {
            slidesPerView: 6,
            spaceBetween: 30,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });

        var swiper = new Swiper('.swiper-container', {
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

    </script>
@endpush
