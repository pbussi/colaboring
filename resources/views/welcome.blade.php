@extends('layouts.app')

@section('content')
<section id="featured" class="bg">
    <!-- start slider -->
    <!-- start slider -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Slider -->
                <div id="main-slider" class="main-slider flexslider">
                    <ul class="slides">
                        <li>
                            <img src="{{asset('img/slides/flexslider/1.jpg')}}" alt="" />
                            <div class="flex-caption">
                                <h3>Ingeniería Superior</h3>
                                <p>Contamos con un grupo de ingenieros altamente capacitados en distintos ámbitos</p>
                                <a href="#" class="btn btn-theme">Más...</a>
                            </div>
                        </li>
                        <li>
                            <img src="{{asset('img/slides/flexslider/2.jpg')}}" alt="" />
                            <div class="flex-caption">
                                <h3>Trabajo Colaborativo</h3>
                                <p>Tenemos la capacidad de un abordaje multidisciplinario en cualquier proyecto.</p>
                                <a href="#" class="btn btn-theme">Más</a>
                            </div>
                        </li>
                        <li>
                            <img src="{{asset('img/slides/flexslider/3.jpg')}}" alt="" />
                            <div class="flex-caption">
                                <h3>Soporte Tecnológico</h3>
                                <p>Nuesto trabajo se basa en la incorporación inteligente de la tecnología de la información en cada proyecto.</p>
                                <a href="#" class="btn btn-theme">Más</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- end slider -->
            </div>
        </div>
    </div>
</section>


<section class="callaction">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="cta-text">
                    <h2>Comunidad <span>co-working</span> internacional de ingenieros freelancers creada para vincular a los profesionales y a las empresas alrededor del mundo.</h2>
                    <p> Ofrecemos una amplia cartera de soluciones ya que disponemos de todas las ramas de las ingenierías y sus especializaciones. Damos la oportunidad a nuestros profesionales y clientes de generar una internacionalización automática ya que contamos con comunidades en diferentes países. </p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cta-btn">
                    <a href="#" class="btn btn-theme btn-lg">Quiero saber mas <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <h2>Nuestra  <span class="highlight">Visión</span></h2>
                    <p>La tendencia a nivel mundial es que cada vez más profesionales se transforman en freelancers y la ingeniería no esta exenta a esto. Debido a las nuevas tecnologías e ideologías, los profesionales buscan tener una mejor calidad de vida, disfrutar mas tiempo con sus hijos, viajar, tener mayor independencia, lo cual conlleva a cambiar los comportamientos de las empresas. Los empleados ya no trabajan eternamente en la misma compañía, esto produce un gran inconveniente para los empleadores al aumentar la rotación del personal y sus costos derivados. </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <div class="box">
                            <div class="aligncenter">
                                <div class="icon">
                                    <i class="fa fa-desktop fa-5x"></i>
                                </div>
                                <h4>Soprte tecnológico</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <div class="box">
                            <div class="aligncenter">
                                <div class="icon">
                                    <i class="fa fa-file-code-o fa-5x"></i>
                                </div>
                                <h4>Colaborativo</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <div class="box">
                            <div class="aligncenter">
                                <div class="icon">
                                    <i class="fa fa-paper-plane-o fa-5x"></i>
                                </div>
                                <h4>Gestión de los tiempos</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <div class="box">
                            <div class="aligncenter">
                                <div class="icon">
                                    <i class="fa fa-cubes fa-5x"></i>
                                </div>
                                <h4>Comunicación</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- divider -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="solidline">
                </div>
            </div>
        </div>
    </div>
    <!-- end divider -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-sm-6 col-lg-6">
                        <h4>Freelancers</h4>
                        <p><strong>Te proponemos resolver tres problemas principales de los profesionales freelancers:</strong></p>
                        <p>
                            El lugar de trabajo: Brindamos un ambiente cálido y cómodo de co-working exclusivo de ingenieros, de todas las ramas y especialidades.
                        </p>
                        <p>
                            La generación de trabajo: La comunidad potencia la interrelación entre los profesionales, donde día a día se generan proyectos colaborativos con especialistas de las mismas o de diferentes ramas. Tenemos constante relación con Universidades, Gobierno de la Provincia y Municipal, parques industriales, Asociaciones de empresas y civiles de profesionales, entre otros. Todo lo mencionado ayuda a generar proyectos y trabajos donde se necesitan de las personas que forman parte de nuestra comunidad.
                        </p>
                        <p>
                            Capacitaciones exclusivas: Constantemente realizamos capacitaciones para la mejora continua de nuestra comunidad, teniendo en cuenta las necesidades de la misma.
                        </p>
                        <p>
                            Ofrecemos una INTERNACIONALIZACIÓN AUTOMÁTICA para nuestros profesionales. Al tener comunidades en diferentes países, hacemos mucho más ágiles los canales de comunicación para importar/exportar servicios, pudiendo trabajar en cualquier parte del mundo, desde cualquier parte del mundo.
                        </p>
                        <p>
                            Envíanos tu Curriculum Vitae a ingenieriaencomunidad@gmail.com .
                        </p>
                    </div>
                    <div class="col-sm-6 col-lg-6">
                        <h4>Empresas</h4>
                        <p>
                            Las empresas que nos contratan tienen la posibilidad de contar con una OFICINA TÉCNICA EXTERNA FLEXIBLE a sus requerimientos, para dar solución a cualquier tipo de problema, de todas las ramas y especializaciones de la ingeniería. Brindamos para nuestros clientes una amplia cartera de soluciones, ya que contamos con todas las ramas de las ingenierías y sus especializaciones.
                        </p>
                        <p>
                            Al ser una red global internacional de profesionales independientes logramos una internacionalización automática y simple de la empresa que confía en nosotros.
                        </p>
                        <p>
                         Además, significa una ventaja muy grande trabajar con freelancer’s ya que baja los costos fijos, los riesgos y se obtiene una mirada sin vicios del día a día interno. 
                     </p>

                     <p>
                        ¿CÓMO LO HACEMOS?

                        Seleccionamos los mejores profesionales independientes de nuestra red y formamos el equipo de trabajo según la necesidad del cliente.
                    </p>
                    <p>
                        Trabajamos en base a nuestro Sistema de Gestión de Calidad y a las Buenas Prácticas establecidas por el Project Management Institute (PMBOK ®) e ISO 21500.

                        Contáctenos por e-mail a: ingenieriaencomunidad@gmail.com
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- divider -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="blankline">
            </div>
        </div>
    </div>
</div>
<!-- end divider -->

</section>

@endsection