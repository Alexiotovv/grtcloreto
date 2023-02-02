@extends('layouts.base')
@section('content')
    <!--Start About Style1 Area-->
    <section class="about-style1-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-style1__image1 martop0">
                        <div class="inner">
                            <img src="assets/images/about/about-imagen1.jpg" alt="">
                        </div>
                        <div class="overlay-box">
                            <div class="bg-image"
                                style="background-image: url(assets/images/about/about-style1.jpg);">
                            </div>
                            <div class="left">
                                {{-- <h2>Al</h2> --}}
                            </div>
                            <div class="right">
                                {{-- <h2>Servicio<br> de la población</h2> --}}
                            </div>
                        </div>
                        <div class="round-box">
                            <div class="image-bg"
                                style="background-image: url(assets/images/about/about-style1.jpg);">
                            </div>
                        </div>
                        <div class="arrow-box">
                            <div class="dot-top"></div>
                            <div class="top-angle-line"></div>
                            <div class="line"></div>
                            <div class="dot-bottom"></div>
                        </div>


                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="about-style1__content">
                        <div class="sec-title">
                            <div class="sub-title">
                                <h6><span class="border-left"></span>Nuestra Institución</h6>
                            </div>
                            <h2>Gerencia Regional<br>de Transportes y Comunicaciones<br>de Loreto</h2>
                        </div>
                        <div class="inner-content">
                            <ul>
                                <li><span class="flaticon-quality"></span> Logros</li>
                                <li><span class="flaticon-settings"></span> Finalidad</li>
                                <li><span class="flaticon-home-repair"></span> Servicios</li>
                            </ul>
                            <div class="text-box">
                                <p>La Dirección Regional de Transportes y Comunicaciones de Loreto es un órgano de línea de la 
                                    Gerencia Regional de Infraestructura del Gobierno Regional de Loreto.
                                    Mantiene relaciones técnico – normativas con el Ministerio de 
                                    Transportes y Comunicaciones y relaciones de coordinación con los 
                                    diferentes órganos del Gobierno Regional de Loreto y con los
                                     organismos públicos y privados involucrados con las actividades que realiza para el 
                                     adecuado ejercicio de sus funciones.
                                </p>
                                <p>La Dirección Regional de Transportes y Comunicaciones de Loreto, tiene por 
                                    finalidad planificar, organizar, dirigir y controlar, fiscalizar y regular 
                                    las acciones en materia de Transporte; diseñar y ejecutar proyectos viales, 
                                    así como promover el desarrollo sostenible de los servicios de comunicaciones y 
                                    el acceso universal a los mismos, a fin de mejorar la calidad de vida de las personas 
                                    en el ámbito jurisdiccional del Gobierno Regional de Loreto.</p>

                            </div>
                            <div class="btns-box">
                                <a class="btn-one" href="{{route('home')}}">
                                    <span class="txt">Inicio</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!--End About Style1 Area-->
@endsection