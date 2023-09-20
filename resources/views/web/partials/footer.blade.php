<section class="footer">
    <div class="container-fluid">
        <div class="row justify-content-center">
           <div class="col-md-3">
               <div class="col1">
                   <ul>
                       <li class="ubicacion">
                           <p>
                               UBICACIÓN
                           </p>
                           <p>
                                {{ $setting->address }}
                           </p>
                       </li>
                       <li>
                           <a href="{{ route('contacto') }}">
                                <img src="{{ asset('images/ubicacion.png') }}" alt="">
                                Cómo llegar
                            </a>
                       </li>
                       <li>
                           <a href="{{ route('contacto') }}">Ver mapa</a>
                       </li>
                   </ul>
               </div>
           </div>
            <div class="col-md-3">
                <div class="col2">
                    <ul>
                        <li class="contacto">
                            <p>
                                CONTACTO
                            </p>
                            <p>
                                Central telefónica {{ $setting->telephone }}
                            </p>
                            <p>
                                Número de Whatsapp <a href="https://api.whatsapp.com/send?phone=51{{ $setting->whatsapp }}" target="blank">{{ $setting->whatsapp }}</a>
                            </p>
                        </li>
                        <li>
                            <div class="items">
                                <div class="mail">
                                    <a href="{{ route('contacto') }}">
                                        <p>Enviar mensaje</p>
                                        <img src="{{ asset('images/mail.png') }}" alt="">
                                    </a>
                                </div>
                                <div class="libro">
                                    <a href="{{ route('libro.reclamaciones') }}">
                                        <p>Libro de <br>reclamaciones</p>
                                        <img src="{{ asset('images/libro.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="col3">
                    <ul>
                        <li class="sitio">
                            <p>SOBRE ESTE SITIO</p>
                        </li>
                        <li>
                            <a href="{{ route('terminos-y-condiciones') }}">Términos y condiciones de uso</a>
                        </li>
                        <li>
                            <a href="{{ route('manual.alumno') }}">Manual del Alumno</a>
                        </li>
                        <li>
                            <a href="{{ route('politicas') }}">Política de privacidad</a>
                        </li>
                    </ul>
                    <ul class="redes">
                        <li>
                            <p>
                                SIGUENOS EN:
                            </p>
                        </li>
                        <li>
                            <a href="{{ $setting->facebook }}" target="_blank">
                                <img src="{{ asset('images/fb.png') }}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="{{ $setting->instagram }}" target="_blank">
                                <img src="{{ asset('images/ig.png') }}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="{{ $setting->linkedin }}" target="_blank">
                                <img src="{{ asset('images/in.png') }}" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="{{ $setting->youtube }}" target="_blank">
                                <img src="{{ asset('images/yt.png') }}" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 copyright">
                <ul>
                    <li>
                        © Summa Center - Todos los derechos reservados
                    </li>
                    <li>
                        <img src="{{ asset('images/pais1.png') }}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('images/pais2.png') }}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('images/pais3.png') }}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('images/pais4.png') }}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('images/pais5.png') }}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('images/pais6.png') }}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('images/pais7.png') }}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('images/pais8.png') }}" alt="">
                    </li>
                    <li>
                        <img src="{{ asset('images/pais9.png') }}" alt="">
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>