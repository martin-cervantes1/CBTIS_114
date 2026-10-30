<?php
  $titulo = 'Nosotros';
  $pagina_activa = 'nosotros';
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
          <i class="fas fa-users"></i> Quiénes somos
        </div>
        <h1>Nosotros</h1>
        <p class="subhead">
          Conoce nuestra historia, misión y visión como institución formadora
          de generaciones en Ciudad Juárez.
        </p>
      </div>
    </div>
  </header>

  <main>
    <section id="nosotros">
      <div class="container">
        <div class="nosotros-intro">
          <div class="nosotros-escudo reveal">
            <img src="img/escudo-oficial.png" alt="Escudo oficial CBTIS 114">
          </div>
          <div class="nosotros-text reveal">
            <p>
              El CBTIS 114 es una institución pública de Educación Media Superior perteneciente a la DGETI,
              ubicada en Ciudad Juárez, Chihuahua. Ofrecemos bachillerato tecnológico con formación para el trabajo,
              preparando a nuestros estudiantes para continuar sus estudios universitarios o incorporarse al mercado laboral.
            </p>
            <p>
              Con más de 40 años de trayectoria, somos orgullosamente <strong>"La Casa de los Lobos"</strong>.
              Nuestro compromiso es formar jóvenes íntegros, competentes y con una sólida base humanística y tecnológica.
            </p>
            <div class="nosotros-stat">
              <div class="stat-number">+40</div>
              <div class="stat-label">Años formando generaciones de profesionistas y técnicos en Ciudad Juárez.</div>
            </div>
          </div>
        </div>

        <div class="mision-vision">
          <div class="mv-card reveal">
            <div class="mv-icon"><i class="fas fa-bullseye"></i></div>
            <h3>Misión</h3>
            <p>Contribuir, con base en los requerimientos de la sociedad del conocimiento y del desarrollo sustentable, a la formación integral de los jóvenes para ampliar su participación creativa en la economía y el desarrollo social del país, mediante el desempeño de una actividad productiva y el ejercicio pleno social.</p>
          </div>
          <div class="mv-card reveal">
            <div class="mv-icon"><i class="fas fa-eye"></i></div>
            <h3>Visión</h3>
            <p>Ser una institución de educación media superior certificada, orientada al aprendizaje y el desarrollo de conocimientos tecnológicos y humanísticos.</p>
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
