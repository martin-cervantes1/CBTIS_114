<?php
  $titulo = 'Inicio';
  $pagina_activa = 'inicio';
?>

<!DOCTYPE html>
<html lang="es">
<?php include 'includes/head.php'; ?>
<body>

  <?php include 'includes/topbar.php'; ?>
  <?php include 'includes/navbar.php'; ?>

  <!-- ===== HERO ===== -->
  <header class="hero">
    <div class="container hero-content">
      <div class="hero-text">
        <div class="hero-eyebrow">
          <i class="fas fa-award"></i> Educación Media Superior · DGETI
        </div>
        <h1>Formamos <span class="accent">líderes</span> para el futuro</h1>
        <p class="subhead">
          Centro de Bachillerato Tecnológico Industrial y de Servicios No. 114.
          Educación de excelencia, formación técnica y valores que trascienden.
        </p>
        <div class="hero-actions">
          <a href="oferta.php" class="btn btn-primary">
            <i class="fas fa-graduation-cap"></i> Ver Oferta Académica
          </a>
          <a href="contacto.php" class="btn btn-ghost">
            <i class="fas fa-envelope"></i> Contáctanos
          </a>
        </div>
      </div>
      <div class="hero-escudo">
        <img src="img/escudo-oficial.png" alt="Escudo oficial CBTIS 114">
      </div>
    </div>
  </header>

  <main>
    <section id="inicio">
      <div class="container">
        <div class="section-header reveal">
          <div class="section-eyebrow">Actualidad</div>
          <h2 class="section-title">Anuncios y Avisos</h2>
          <p class="section-subtitle">Mantente informado sobre las actividades, convocatorias y eventos más recientes de nuestra comunidad.</p>
        </div>

        <div class="anuncios-grid">
          <article class="anuncio-card reveal">
            <div class="anuncio-header">
              <span class="anuncio-tag">Graduación</span>
              <h3>Egresan 822 estudiantes</h3>
            </div>
            <div class="anuncio-body">
              <p>La generación 2023-2026 egresó de las diferentes especialidades técnicas, lista para continuar sus estudios o integrarse al sector productivo.</p>
              <div class="anuncio-meta">
                <span class="fecha"><i class="fas fa-calendar-alt"></i> 01 Jul 2026</span>
                <a href="#">Leer más <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </article>

          <article class="anuncio-card reveal">
            <div class="anuncio-header">
              <span class="anuncio-tag">Evento</span>
              <h3>Concurso Estatal de Robótica</h3>
            </div>
            <div class="anuncio-body">
              <p>El CBTIS 114 será sede del Primer Concurso de Robótica DGTI Chihuahua 2026. Participan 20 planteles del estado. ¡Apoya a nuestros Lobos!</p>
              <div class="anuncio-meta">
                <span class="fecha"><i class="fas fa-calendar-alt"></i> 07 Mayo 2026</span>
                <a href="#">Leer más <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </article>

          <article class="anuncio-card reveal">
            <div class="anuncio-header">
              <span class="anuncio-tag">Aviso</span>
              <h3>Rehabilitación del gimnasio</h3>
            </div>
            <div class="anuncio-body">
              <p>Se entregaron los trabajos de rehabilitación del gimnasio del plantel con una inversión de más de 1.8 millones de pesos.</p>
              <div class="anuncio-meta">
                <span class="fecha"><i class="fas fa-calendar-alt"></i> 25 Mayo 2025</span>
                <a href="#">Leer más <i class="fas fa-arrow-right"></i></a>
              </div>
            </div>
          </article>
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
