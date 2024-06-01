<x-guest-layout>
<div class="home-slider owl-carousel js-height80">
    <div class="slider-item js-height75" style="background-image:url(https://volarenglobo.com.mx/portalweb/wp-content/uploads/2018/12/ANUNCIO-1200-628-025-min-1.jpeg); background-repeat: no-repeat; background-size: cover;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-height75 align-items-center justify-content-center">
          <div class="col-md-12 ftco-animate">
            <div class="text w-100 text-center">
              <h2>Best Place to Travel</h2>
              <h1 class="mb-3">Norway</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="slider-item js-height75" style="background-image:url(https://volarenglobo.com.mx/portalweb/wp-content/uploads/2018/12/slider-4-2-min.jpeg); background-repeat: no-repeat; background-size: cover;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-height75 align-items-center justify-content-center">
          <div class="col-md-12 ftco-animate">
            <div class="text w-100 text-center">
              <h2>Best Place to Travel</h2>
              <h1 class="mb-3">Japan</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="slider-item js-height75" style="background-image:url(https://volarenglobo.com.mx/portalweb/wp-content/uploads/2018/12/IMG-20200624-WA0004-min.jpeg); background-repeat: no-repeat; background-size: cover;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-height75 align-items-center justify-content-center">
          <div class="col-md-12 ftco-animate">
            <div class="text w-100 text-center">
              <h2>Best Place to Travel</h2>
              <h1 class="mb-3">Singapore</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section id="features">
    <div class="feature-box container">
      <div class="row ">
        <div class="col-12 mb-5 mb-md-0">
          <div class="feature-item bg-success py-5  rounded-4">
            <div class=" text-center">
              <div class="input-group mb-3 px-2 w-100">
                <button class="btn btn-outline-primary dropdown-toggle w-100 h-100" type="button" data-bs-toggle="dropdown" aria-expanded="false">Tipo de vuelo</button>
                <ul class="dropdown-menu w-100 text-center">
                  <li  class="dropdown-item" >
                    <label for="compartido">Compartido</label>
                    <input type="radio" name="flight_type" value="compartido" id="compartido" />
                  </li>
                  <li class="dropdown-item">
                    <label for="privado">Privado</label>
                    <input type="radio" name="flight_type" value="privado" id="privado" />
                  </li>
                  <li class="dropdown-item">
                    <label for="festejos">Festejos</label>
                    <input type="radio" name="flight_type" value="compartido" id="festejos" />
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="padding-medium mt-xl-5">
    <div class="container">
      <div class="row align-items-center mt-xl-5">
        <div class="offset-md-1 col-md-5">
          <img src="{{ asset('build/bootstrap/images/about.jpeg')}}" alt="img" class="img-fluid ">
        </div>
        <div class="col-md-5 mt-5 mt-md-0">
          <div class="mb-3">
            <h2 class="display-6 fw-semibold">Acerca de nosotros</h2>
          </div>
          <p>Somos un grupo de soñadores, nos llaman agentes de felicidad. Y estamos dispuestos a cumplir
            tu deseo de Volar en Globo aerostático y ayudarte a darle forma a ese momento mágico que quieres recrear para hacerlo
            inolvidable para ti, tus amigos, familiares y seres queridos.</p>

            <p>En Volar en Globo te prometemos que vivirás una aventura sorprendente. Te guiaremos en todo momento, desde tu llegada, preparación de tu globo, abordaje y fin de tu aventura.</p>
          <div class="d-flex">
            <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px">
              <use href="#tick-circle" class="text-secondary" />
            </svg>
            <p class="ps-4">¡Nuestra garantía será tu felicidad!</p>
          </div>

          <a href="about.html" class="btn btn-primary px-5 py-3 mt-4">Leer más</a>


        </div>
      </div>
    </div>
  </section>

  <section id="category">
    <div class="container d-flex justify-content-center mt-100">
      <div class="row">
        <div class="col-md-3 col-4">
          <div class="product-wrapper mb-45 text-center">
            <div class="product-img"><a href="#" data-abc="true">
              <img src="images/1.jpeg" alt=""> </a>
              <span class="text-center"><i class="fa fa-rupee"></i> 43,000</span>
              <div class="product-action">
                <div class="product-action-style"><a href="#"> <i class="fa fa-plus"></i> </a>
                  <a href="#"> <i class="fa fa-heart"></i> </a>
                  <a href="#"> <i class="fa fa-shopping-cart"></i> </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-4">
          <div class="product-wrapper mb-45 text-center">
            <div class="product-img"><a href="#" data-abc="true">
              <img src="https://i.imgur.com/lAQxXCK.jpg" alt=""> </a>
              <span><i class="fa fa-rupee"></i> 41,000</span>
              <div class="product-action">
                <div class="product-action-style">
                  <a class="action-plus" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#"
                     data-abc="true">
                    <i class="fa fa-plus"></i> </a> <a class="action-heart" title="Wishlist" href="#" data-abc="true">
                  <i class="fa fa-heart"></i> </a> <a class="action-cart" title="Add To Cart" href="#" data-abc="true">
                  <i class="fa fa-shopping-cart"></i> </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-4"  >
          <div class="product-wrapper mb-45 text-center">
            <div class="product-img"><a href="#" data-abc="true">
              <img src="https://i.imgur.com/HxEEu5g.jpg" alt="">
            </a> <span><i class="fa fa-rupee"></i> 33,000</span>
              <div class="product-action">
                <div class="product-action-style"><a class="action-plus" title="Quick View" data-toggle="modal"
                                                     data-target="#exampleModal" href="#" data-abc="true"> <i
                        class="fa fa-plus"></i> </a> <a class="action-heart" title="Wishlist" href="#" data-abc="true">
                  <i class="fa fa-heart"></i> </a> <a class="action-cart" title="Add To Cart" href="#" data-abc="true">
                  <i class="fa fa-shopping-cart"></i> </a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="courses" class="padding-medium">
    <div class="container">
      <script defer async src='https://cdn.trustindex.io/loader-feed.js?1f2e857299e890896576d941152'></script>

    </div>
  </section>

  <section id="testimonial" class="padding-medium ">
    <div class="container">
      <script defer async src='https://cdn.trustindex.io/loader.js?71a8a1c29b3985626b46d9d145a'></script>
    </div>


  </section>

  <section id="teacher" class="padding-medium">

      <div class="text-center div-sep">
        <h2 class="text-white">¿Estás pensando en volar?</h2><br>
        <p class="text-white">Tenemos las mejores ofertas</p><br>
        <button type="button" class="btn btn-light">ELEGIR MI VUELO</button>
      </div>

  </section>

  <section id="points" class="padding-medium pt-0">
    <div class="container">
      <div class=" p-4 bg-light">
        <h3 class="mb-3">Preguntas Frecuentes sobre Volar en Globo</h3>
        <div class="accordion accordion-flush" id="accordionFlushExample">
          <div class="accordion-item rounded-3 border-0 shadow mb-2">
            <h2 class="accordion-header">
              <button class="accordion-button border-bottom collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1" aria-expanded="false" aria-controls="flush-collapseOne">
                ¿A qué hora son los vuelos?
              </button>
            </h2>
            <div id="flush-collapse1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <p>Los vuelos son muy temprano por la mañana, la cita es alrededor de las 6 am en nuestro globopuerto VOLAR EN GLOBO.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item rounded-3 border-0 shadow mb-2">
            <h2 class="accordion-header">
              <button class="accordion-button border-bottom collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapseTwo">
                ¿A qué distancia están de la Ciudad de México?
              </button>
            </h2>
            <div id="flush-collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <p>Nuestro Globopuerto se encuentra a 60 km de la Ciudad de México, aproximadamente 1 hora de zona centro.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item rounded-3 border-0 shadow mb-2">
            <h2 class="accordion-header">
              <button class="accordion-button border-bottom collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapseTwo">
                ¿Cuentan con servicio de transporte desde la Ciudad de México?
              </button>
            </h2>
            <div id="flush-collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <p>Sí, el costo del transporte ida y vuelta desde la zona centro de la Ciudad de México es de $500 por persona. En caso de que tu hotel o Airbnb esté en zona centro, pasamos directamente a tu ubicación. Si no, tendrás que acercarte a algún punto más céntrico.
                  <b>Consulta los horarios de regreso que manejamos</b>.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item rounded-3 border-0 shadow mb-2">
            <h2 class="accordion-header">
              <button class="accordion-button border-bottom collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapseTwo">
                ¿Cuántas personas caben por globo aerostático?
              </button>
            </h2>
            <div id="flush-collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <p>Para tu comodidad, contamos con más de 18 globos aerostáticos con diferentes capacidades, que van desde 2 hasta 20 pasajeros.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item rounded-3 border-0 shadow mb-2">
            <h2 class="accordion-header">
              <button class="accordion-button border-bottom collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapseTwo">
                ¿Los niños pueden volar?
              </button>
            </h2>
            <div id="flush-collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <p>Claro, la edad mínima para vivir la experiencia de Volar en Globo es a partir de los 4 años.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item rounded-3 border-0 shadow mb-2">
            <h2 class="accordion-header">
              <button class="accordion-button border-bottom collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse6" aria-expanded="false" aria-controls="flush-collapseTwo">
                ¿Cuánto tiempo dura la actividad?
              </button>
            </h2>
            <div id="flush-collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <p>La duración total de la actividad es desde 3 horas aproximadamente.
                  El transporte, desayuno y vista a las pirámides agrega tiempo extra.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item rounded-3 border-0 shadow mb-2">
            <h2 class="accordion-header">
              <button class="accordion-button border-bottom collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse7" aria-expanded="false" aria-controls="flush-collapseTwo">
                ¿Con cuánto tiempo de anticipación debo reservar?
              </button>
            </h2>
            <div id="flush-collapse7" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <p>Te recomendamos reservar con una semana de anticipación para asegurar disponibilidad, aunque se puede reservar de un día para otro siempre y cuando contemos con lugares disponibles. Ten en
                  cuenta que los Vuelos Privados son los primeros que se terminan.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item rounded-3 border-0 shadow mb-2">
            <h2 class="accordion-header">
              <button class="accordion-button border-bottom collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse8" aria-expanded="false" aria-controls="flush-collapseTwo">
                ¿Cómo debo ir vestido?
              </button>
            </h2>
            <div id="flush-collapse8" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <p>Te recomendamos llevar suéter, jeans, cubrebocas, tenis o zapatos cerrados ya que suele hacer frío en las mañanas en Teotihuacán.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item rounded-3 border-0 shadow mb-2">
            <h2 class="accordion-header">
              <button class="accordion-button border-bottom collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse9" aria-expanded="false" aria-controls="flush-collapseTwo">
                ¿Cómo puedo reservar mi viaje en globo en Teotihuacán?
              </button>
            </h2>
            <div id="flush-collapse9" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <p>Para garantizar tu lugar en el globo, se requiere de un anticipo de $1.000 MX.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item rounded-3 border-0 shadow mb-2">
            <h2 class="accordion-header">
              <button class="accordion-button border-bottom collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse10" aria-expanded="false" aria-controls="flush-collapseTwo">
                ¿Cuáles son las opciones de pago del viaje en globo?
              </button>
            </h2>
            <div id="flush-collapse10" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <p>Algunas de nuestras opciones de pago son Transferencia Bancaria, Pay Pal, depósitos en Oxxo, Cargo directo en terminal bancaria, Mercado Pago y Tarjeta de Crédito.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item rounded-3 border-0 shadow mb-2">
            <h2 class="accordion-header">
              <button class="accordion-button border-bottom collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse11" aria-expanded="false" aria-controls="flush-collapseTwo">
                ¿Qué días hay vuelos en globo en Teotihuacán?
              </button>
            </h2>
            <div id="flush-collapse11" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <p>Volamos todas las mañanas a las primeras horas del día en Teotihuacán.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item rounded-3 border-0 shadow mb-2">
            <h2 class="accordion-header">
              <button class="accordion-button border-bottom collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse12" aria-expanded="false" aria-controls="flush-collapseTwo">
                ¿Cuánto tiempo dura el viaje arriba del globo aerostático?
              </button>
            </h2>
            <div id="flush-collapse12" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <p>La duración del paseo en globo sobre Teotihuacán es de 45 minutos aproximadamente y la duración total de la actividad es de 3 horas o más.</p>
              </div>
            </div>
          </div>
          <div class="accordion-item rounded-3 border-0 mb-2 shadow">
            <h2 class="accordion-header">
              <button class="accordion-button border-bottom collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse13" aria-expanded="false" aria-controls="flush-collapseThree">
                ¿Qué tan seguro es viajar en globo?
              </button>
            </h2>
            <div id="flush-collapse13" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <p>Los globos aerostáticos son la aeronave más segura. Para tu tranquilidad, contamos con pilotos certificados y globos matriculados.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container padding-medium">
      <h3>Contamos con Servicio de Transporte desde Ciudad de México</h3>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60102.22238173586!2d-98.85888322249127!3d19.696060286735275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xff4f4587c24e2324!2sVOLAR%20EN%20GLOBO!5e0!3m2!1ses-419!2sar!4v1646616164225!5m2!1ses-419!2sar"
               style="border: 0px; pointer-events: none; width:100%; max-width: height:100vh" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </section>

 

</x-guest-layout>
