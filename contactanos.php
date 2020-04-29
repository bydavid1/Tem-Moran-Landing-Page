<?php 
include("layouts/header.php");
?>

 <!-- Contacts-->
 <section id="contact" class="contact-sec">
  <div class="container">
    <div class="title">
      <h2>Contact <span>Us</span></h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar lacus at feugiat iaculis. Suspendisse at viverra mauris, sit amet facilisis lectus. Pellentesque mattis auctor quam, et feugiat elit volutpat vel.</p>
    </div>
    <div class="row">
      <div class="col-lg-10">
        <div class="contact-form-wrapper">
          <form id="contact-form" method="POST" action="sendmail.php">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="name">Nombre :</label>
                  <input type="text" class="input-field" name="name" placeholder="Ingrese su nombre completo" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="email">Email :</label>
                  <input type="email" class="input-field" name="email" placeholder="Ingrese su correo" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="subjict">Asunto :</label>
                  <input type="text" class="input-field" name="subject" placeholder="Ingrese su asunto" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label for="phone">Telefono :</label>
                  <input type="text" class="input-field" name="phone" placeholder="Ingrese su numero de telefono">
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group button-area">
                  <label for="message">Mensaje :</label>
                  <textarea name="message" class="input-field textarea" placeholder="Ingrese su mensaje" required></textarea>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="form-group button-area">
                  <button type="submit" class="btn btn-primary" id="send">Enviar <i class="fas fa-paper-plane"></i></button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="snackbars" id="form-output-global"></div>

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

<script>
		$('#contact-form').submit(function () {
      output = $("#form-output-global");
		  $("#send").prop('disabled', true);
		  $("#send").button('loading');
		  $('#result').html('');
		  $.ajax({
		    type: $(this).attr('method'),
		    url: $(this).attr('action'),
		    data: $(this).serialize(),
		    dataType: 'json',
		    success: function (response) {
		      if (response.success == true) {
            output.addClass("active");
            output.html('<p><span class="fa-check"></span><span>' + response.message + '</span></p>')

            setTimeout(function () {
											output.removeClass("active");
										}, 3500);

		        $("#send").button('reset');
		        $("#send").prop('disabled', false);
		        $('#covid-form')[0].reset();
		      } else {
            output.addClass("active");
            output.html('<p><span class="fa-warning"></span><span>' + response.message + '</span></p>')
            setTimeout(function () {
											output.removeClass("active");
										}, 3500);

		        $("#send").button('reset');
		        $("#send").prop('disabled', false);
		      }
		    }
		  })

		  return false;
		});
</script>