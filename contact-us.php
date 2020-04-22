<?php 
include("layouts/header.php");
?>

 <!-- Contacts-->
 <section class="section-50 section-md-75 section-md-100 section-lg-120 section-xl-150 bg-wild-sand" id="contacts">
      <div class="shell text-left">
        <h2><span class="small">Si tienes alguna consulta</span>Contactanos</h2>
        <form class="rd-mailform text-left" data-form-output="form-output-global" data-form-type="contact" method="post"
          action="bat/rd-mailform.php">
          <div class="range offset-top-40 offset-md-top-60">
            <div class="cell-lg-4 cell-md-6">
              <div class="form-group postfix-xl-right-40">
                <input class="form-control" id="contact-name" placeholder="Nombre" type="text" name="name"
                  data-constraints="@Required">
              </div>
              <div class="form-group postfix-xl-right-40">
                <input class="form-control" id="contact-email" placeholder="Email" type="email" name="email"
                  data-constraints="@Email @Required">
              </div>
            </div>
            <div class="cell-lg-4 cell-md-6 offset-top-20 offset-md-top-0">
              <div class="form-group postfix-xl-right-40">
                <input class="form-control" id="contact-company" placeholder="Compañía" type="text" name="company"
                  data-constraints="@Required">
              </div>
              <div class="form-group postfix-xl-right-40">
                <input class="form-control" id="contact-subject" placeholder="Asunto" type="text" name="subject"
                  data-constraints="@Required">
              </div>
            </div>
            <div class="cell-lg-4 offset-top-20 offset-lg-top-0">
              <div class="form-group postfix-xl-right-40">
                <textarea class="form-control" id="contact-message" placeholder="Mensaje" name="message"
                  data-constraints="@Required"></textarea>
              </div>
            </div>
          </div>
          <button class="btn btn-form btn-default" type="submit">Enviar mensaje</button>
        </form>
      </div>
    </section>

    <!-- Get In Touch-->
    <section class="section section-75 section-md-100 section-lg-150 section-bottom-40">
      <div class="rd-map-wrap">
        <div class="shell text-sm-left">
          <div class="range">
            <div class="cell-sm-6 cell-lg-5 cell-xl-4">
              <h1>Cómo encontrarnos</h1>
              <h6 class="offset-md-top-35">If you are living nearby, come visit us at one of our comfortable offices.
              </h6><span
                class="small text-spacing-340 text-uppercase text-regular offset-top-40 offset-md-top-60">Información</span>
              <ul class="list offset-top-20 list-lg-middle text-left">
                <li>
                  <div class="unit unit-horizontal unit-spacing-md">
                    <div class="unit-left"><span class="icon icon-primary fa-map-marker"></span></div>
                    <div class="unit-body">
                      <h6><a class="text-darker" href="#">Calle principal colonia San José,
                          Cantón El Guineo, El Congo Santa Ana</a></h6>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="unit unit-horizontal unit-spacing-md">
                    <div class="unit-left"><span class="icon icon-primary fa-phone"></span></div>
                    <div class="unit-body">
                      <h6><a class="text-darker" href="tel:#">2431-5100 / 7920-5340</a></h6>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="unit unit-horizontal unit-spacing-md">
                    <div class="unit-left"><span class="icon icon-primary fa-envelope"></span></div>
                    <div class="unit-body">
                      <h6><a class="text-primary" href="mailto:#">ventas@temmoran.com</a></h6>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="cell-sm-6 cell-lg-preffix-1 cell-lg-5 cell-xl-preffix-2 cell-xl-6">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3873.2095305087096!2d-89.4987860109062!3d13.88641607018875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f62ddbc1df92d51%3A0x272da29f83f88fa8!2sINVERSIONES%20TEM%20MORAN%20SA%20DE%20CV!5e0!3m2!1ses-419!2ssv!4v1587486003752!5m2!1ses-419!2ssv"
                width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php 
include("layouts/footer.php");
?>