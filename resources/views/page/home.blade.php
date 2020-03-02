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
            <div class="row h-25 align-items-center">
                <div class="col">
                    <formhome-component></formhome-component>
                </div>
            </div>
        </div>
    </header>

    <section class="bg-light clearfix">
        <div class="container">

            <div class="row py-3">
                <div class="col-12">
                    <!-- Swiper -->
                    <div class="swiper-category overflow-hidden">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="row no-gutters position-relative">
                                    <div class="">
                                        <div class="row align-items-center no-gutters">
                                            <div class="col-md-3">
                                                <img src="http://admin.mietnia.com/admin/categoria/editar/imagen/foto-2.jpeg" alt="" class="w-100 rounded-circle">
                                            </div>
                                            <div class="col-md position-static p-2">
                                                <a href="" class="p-0 m-0 text-decoration-none font-weight-bold t-corrido text-secondary stretched-link">Vivencial</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="row no-gutters position-relative">
                                    <div class="">
                                        <div class="row align-items-center no-gutters">
                                            <div class="col-md-3">
                                                <img src="http://admin.mietnia.com/admin/categoria/editar/imagen/foto-2.jpeg" alt="" class="w-100 rounded-circle">
                                            </div>
                                            <div class="col-md position-static p-2">
                                                <a href="" class="p-0 m-0 text-decoration-none font-weight-bold t-corrido text-secondary stretched-link">Vivencial</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="row no-gutters position-relative">
                                    <div class="">
                                        <div class="row align-items-center no-gutters">
                                            <div class="col-md-3">
                                                <img src="http://admin.mietnia.com/admin/categoria/editar/imagen/foto-2.jpeg" alt="" class="w-100 rounded-circle">
                                            </div>
                                            <div class="col-md position-static p-2">
                                                <a href="" class="p-0 m-0 text-decoration-none font-weight-bold t-corrido text-secondary stretched-link">Vivencial</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="row no-gutters position-relative">
                                    <div class="">
                                        <div class="row align-items-center no-gutters">
                                            <div class="col-md-3">
                                                <img src="http://admin.mietnia.com/admin/categoria/editar/imagen/foto-2.jpeg" alt="" class="w-100 rounded-circle">
                                            </div>
                                            <div class="col-md position-static p-2">
                                                <a href="" class="p-0 m-0 text-decoration-none font-weight-bold t-corrido text-secondary stretched-link">Vivencial</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="row no-gutters position-relative">
                                    <div class="">
                                        <div class="row align-items-center no-gutters">
                                            <div class="col-md-3">
                                                <img src="http://admin.mietnia.com/admin/categoria/editar/imagen/foto-2.jpeg" alt="" class="w-100 rounded-circle">
                                            </div>
                                            <div class="col-md position-static p-2">
                                                <a href="" class="p-0 m-0 text-decoration-none font-weight-bold t-corrido text-secondary stretched-link">Vivencial</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="row no-gutters position-relative">
                                    <div class="">
                                        <div class="row align-items-center no-gutters">
                                            <div class="col-md-3">
                                                <img src="http://admin.mietnia.com/admin/categoria/editar/imagen/foto-2.jpeg" alt="" class="w-100 rounded-circle">
                                            </div>
                                            <div class="col-md position-static p-2">
                                                <a href="" class="p-0 m-0 text-decoration-none font-weight-bold t-corrido text-secondary stretched-link">Vivencial</a>
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
        </div>
    </section>

    <section class="bg-white py-5">
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

    <section class="bg-light py-5 pb-3">
        <div class="container">
            <div class="row pb-4">
                <div class="col">
                    <h2 class="font-weight-semi-bold h3">Destinos recomendados</h2>
                    <p class="font-weight-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cumque dolor dolore enim et, expedita hic incidunt inventore iure libero nisi odio perferendis porro possimus quo sint sit vel voluptatem?</p>
                </div>
            </div>
            <div class="row">
                <div class="swiper-destino overflow-hidden">
                    <div class="swiper-wrapper">
                        @foreach($destino as $destinos)
                            <div class="swiper-slide">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="row">
                                            <div class="col">
                                                <div class="position-relative bx-img-destinohome">
                                                    <a href="" class="text-dark d-block">
                                                        <img src="{{$destinos->imagen}}" alt="" class="w-100">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="card-body alert-d-yellow position-relative">
                                                    <p class="d-block font-weight-bold text-lowercase h2 t-corrido">{{$destinos->nombre}}</p>
                                                    <span class="">Lorem ipsum dolor sit amet, consectetur adipisicing  adipisicing elit. </span>
                                                    <a href="" class="d-block btn-sm t-small-6 stretched-link text-muted mt-2">EXPLORE</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-7">

                                        <div class="position-relative bx-img-destinohome">
                                            <a href="" class="text-dark d-block">
                                                <img src="{{$destinos->imagen}}" alt="" class="w-100">
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col text-center">
                    <a href="" class="btn btn-info font-weight-bold btn-sm text-uppercase small mt-5"><small>Explore todos nuestros destinos en Perú</small></a>
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

    <section class="box-fondohome">
        <div class="container">
            <div class="row pb-4">
                <div class="col text-center">
                    <h2 class="font-weight-light h3">SOMOS LOCALES APASIONADOS POR LOS VIAJES</h2>
                    <p class="font-weight-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium cumque dolor dolore enim et, expedita hic incidunt inventore iure libero nisi odio perferendis porro possimus quo sint sit vel voluptatem?</p>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                    <i data-feather="users" class="d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                    <span class="small mt-3 d-block">Grupos pequeños y personalizados.</span>
                </div>
                <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                    <i data-feather="clock" class="d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                    <span class="small mt-3 d-block">Nosotros vivimos aquí, somos locales 100%.</span>
                </div>
                <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                    <i data-feather="pen-tool" class="d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                    <span class="small mt-3 d-block">Reserve ahora o Diseña tu Viaje!</span>
                </div>
                <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                    <i data-feather="map-pin" class="d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                    <span class="small mt-3 d-block">Sin intermediarios, sede en Perú.</span>
                </div>
                <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                    <i data-feather="thumbs-up" class="d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                    <span class="small mt-3 d-block">Estamos orgullosos de nuestros recomendaciones!</span>
                </div>
                <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                    <i data-feather="calendar" class="d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                    <span class="small mt-3 d-block">Nos adaptamos a cualquier hora de llegada.</span>
                </div>
            </div>

            <div class="row mt-5 pb-5">
                <div class="col">
                    <h3 class="my-4">POR QUE VIAJAR <span class="d-block mt-2">CON <mark>DESTINO</mark></span></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias cum cupiditate ex labore numquam perspiciatis provident quis, repudiandae sapiente sequi sint, suscipit voluptatibus. Alias dignissimos fugiat id maiores quod saepe?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur consequatur error esse laborum maiores molestias nesciunt, nisi odio pariatur praesentium, quaerat quidem quos ratione saepe sapiente, tempore unde veniam vitae!</p>
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <a href=""><i data-feather="facebook" class="text-primary" stroke-width="2"></i></a>
                        </div>
                        <div class="col-auto">
                            <a href=""><i data-feather="twitter" class="text-info" stroke-width="2"></i></a>
                        </div>
                        <div class="col-auto">
                            <a href=""><i data-feather="instagram" class="text-dark" stroke-width="2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col">

                </div>
            </div>
        </div>
    </section>

    <section class="bg-secondary py-4">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-5">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h5 class="text-white t-corrido">Parte del grupo:</h5>
                        </div>
                        <div class="col">
                            <img src="https://www.mietnia.com/images/etnias-peru.png" alt="" class="w-100 p-3">
                        </div>
                        <div class="col">
                            <img src="{{asset('images/logo-destino.png')}}" alt="" class="w-100 p-3">
                        </div>
{{--                        <div class="col">--}}
{{--                            <img src="https://www.incasperutours.travel/images/logo-yovana.png" alt="" class="w-100">--}}
{{--                        </div>--}}
                    </div>
                </div>
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

        var swiper = new Swiper('.swiper-destino', {

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });

    </script>
@endpush
