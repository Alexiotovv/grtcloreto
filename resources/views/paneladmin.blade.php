@extends('layouts.base')
@section('content')
    <!--navigation-->
    <nav class="main-menu">
        <div class="collapse navbar-collapse show clearfix"
        id="navbarSupportedContent">
        <ul class="navigation clearfix">

            <li class="dropdown"><a href="#">Institución</a>
                <ul>
                    <li><a href="{{route ('nosotros')}}">Nosotros</a></li>
                    <li><a href="{{route ('direcciones')}}">Direcciones</a></li>
                    <li class="dropdown"><a href="#">Servicios</a>
                        <ul>
                            <li><a target="_blank" href="http://aplicaciones04.regionloreto.gob.pe/sistematramitedocumentarioDRTC/">Mesa de Partes</a></li>
                            <li><a href="">Laboratorio y Estudios de Suelos</a><li>
                            <li>
                                <a href="#">Licencias</a>
                                <li><a href="files/Obtencion-Directa-A1.pdf">Obtención Directa A1</a></li>
                                <li><a target="_blank" href="assets/files/Revalidacion-A1.pdf">Revalidación A1</a></li>
                                <li><a target="_blank" href="assets/files/REVALIDACION-AIIA-AIIB-AIIIA-AIIIB-AIIIC.pdf">Revalidación AIIA</a></li>
                                <li><a target="_blank" href="assets/files/REVALIDACION-AIIA-AIIB-AIIIA-AIIIB-AIIIC.pdf">Revalidación AIIB</a></li>
                                <li><a target="_blank" href="assets/files/REVALIDACION-AIIA-AIIB-AIIIA-AIIIB-AIIIC.pdf">Revalidación AIIIA</a></li>
                                <li><a target="_blank" href="assets/files/REVALIDACION-AIIA-AIIB-AIIIA-AIIIB-AIIIC.pdf">Revalidación AIIIB</a></li>
                                <li><a target="_blank" href="assets/files/REVALIDACION-AIIA-AIIB-AIIIA-AIIIB-AIIIC.pdf">Revalidación AIIIc</a></li>
                                <li><a target="_blank" href="assets/files/REVALIDACION-AIIA-AIIB-AIIIA-AIIIB-AIIIC.pdf">Convocatorias</a></li>
                            </li>
                            
                            
                        </ul>
                    </li>
                    <li><a href="{{route('misionvision')}}">Misión y Visión</a></li>
                </ul>
            </li>
            <li class="dropdown"><a href="{{route('publicaciones')}}">Publicaciones</a>
                {{-- <ul>
                    <li><a href="services.html">Ultimas Noticias</a></li>
                </ul> --}}
            </li>

            <li class="dropdown"><a href="#">Instrumentos de Gestión</a>
                <ul>
                    <li><a target="_blank" href="assets/files/MOF.pdf">MOF</a></li>
                    <li><a target="_blank" href="assets/files/ROF">ROF</a></li>
                    <li><a target="_blank" href="assets/files/TUPA">TUPA</a></li>
                </ul>
            </li>

        </ul>
    </div>
</div>
	<!--end navigation-->
@endsection