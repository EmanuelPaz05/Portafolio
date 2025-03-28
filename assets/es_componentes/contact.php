<section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contacto</h2>
        <p>Hablemos, Estoy aqui para ayudarte en tu proximo proyecto.</p>
      </div>

      <div class="row" data-aos="fade-in">

        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Ciudad:</h4>
              <p>Cordoba, Argentina</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>emanuelpazdeveloper@gmail.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Hablame al whatsapp:</h4>
              <p><a href="https://wa.me/+5493572606288">Toca aqui para hablar</i></a></p>
            </div>

            <img src="assets/img/Foto_perfil.jpg" class="rounded" style="border:0; width: 100%; height: 290px;"></img>
          </div>

        </div>

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form action="forms/recibir_emails.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Tu nombre</label>
                <input type="text" name="name" class="form-control" id="name" required>
              </div>
              <div class="form-group col-md-6">
                <label for="name">Tu Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
              </div>
            </div>
            <div class="form-group">
              <label for="name">Mensaje</label>
              <textarea class="form-control py-3 px-4" name="mensaje" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
            </div>
            <div class="text-center">
              <button class="btn btn-outline-primary" type="submit" name="submit">
              Enviar Mensaje
              </button>
            </div>
          </form>
        </div>

      </div>

    </div>
  </section>