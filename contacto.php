<?php
 $titulo = 'Contáctanos';
 $pagina_activa = 'contacto';
?>

<!DOCTYPE html>
<html lang="es">
<?php include 'includes/head.php'; ?>
<body>

  <?php include 'includes/topbar.php'; ?>
  <?php include 'includes/navbar.php'; ?>

  <header class="hero" style="padding: 50px 0 60px;">
    <div class="container">
      <div class="hero-text" style="max-width: 720px;">
        <div class="hero-eyebrow">
          <i class="fas fa-envelope"></i> Estamos para ti
        </div>
        <h1>Contáctanos</h1>
        <p class="subhead">
          ¿Tienes dudas o necesitas más información? Aquí encuentras todos nuestros canales de atención.
        </p>
      </div>
    </div>
  </header>

  <main>
    <section id="contacto">
      <div class="container">
        <div class="contacto-grid">
          <div class="contacto-card reveal">
            <div class="contacto-icon"><i class="fas fa-map-marker-alt"></i></div>
            <h4>Dirección</h4>
            <p>Calle Ing. Benjamín Herrera No. 2825,<br>Col. Infonavit Parques Industriales,<br>C.P. 32610, Ciudad Juárez, Chihuahua.</p>
          </div>
          <div class="contacto-card reveal">
            <div class="contacto-icon"><i class="fas fa-phone-alt"></i></div>
            <h4>Teléfonos</h4>
            <p>
              <a href="tel:+526568872706">(656) 887 27 06</a><br>
              <a href="tel:+526568872707">(656) 887 27 07</a>
            </p>
          </div>
          <div class="contacto-card reveal">
            <div class="contacto-icon"><i class="fas fa-envelope"></i></div>
            <h4>Correo electrónico</h4>
            <p><a href="mailto:contacto@cbtis114.edu.mx">contacto@cbtis114.edu.mx</a></p>
          </div>
          <div class="contacto-card reveal">
            <div class="contacto-icon"><i class="fab fa-facebook-f"></i></div>
            <h4>Facebook</h4>
            <p>
              <a href="https://www.facebook.com/p/CBTIS-114-Cd-Ju%C3%A1rez-100057258978230" target="_blank" rel="noopener">
                CBTIS 114 Cd. Juárez
              </a>
            </p>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/login-modal.php'; ?>

  <!-- <a href="https://wa.me/526561023353" class="whatsapp-float" target="_blank" rel="noopener" aria-label="WhatsApp">
    <i class="fab fa-whatsapp"></i>
  </a> -->

  <script src="js/main.js"></script>
</body>
</html>
