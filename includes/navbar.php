<?php
  $pagina_activa = $pagina_activa ?? 'inicio';
?>

<nav class="main-nav">
  <div class="container">
    <a href="index.php" class="brand">
      <img src="img/logo-lobo.svg" alt="CBTIS 114" class="brand-logo">
      <div class="brand-text">
        <strong>CBTIS 114</strong>
        <span>La Casa de los Lobos</span>
      </div>
    </a>

    <button class="menu-toggle" id="menuToggle" aria-label="Abrir menú">
      <i class="fas fa-bars"></i>
    </button>

    <div class="nav-right" id="navRight">
      <ul class="nav-menu" id="navMenu">
        <li><a href="index.php" class="<?= $pagina_activa === 'inicio' ? 'active' : '' ?>">Inicio</a></li>
        <li><a href="nosotros.php" class="<?= $pagina_activa === 'nosotros' ? 'active' : '' ?>">Nosotros</a></li>
        <li><a href="oferta.php" class="<?= $pagina_activa === 'oferta' ? 'active' : '' ?>">Oferta Académica</a></li>
        <li><a href="contacto.php" class="<?= $pagina_activa === 'contacto' ? 'active' : '' ?>">Contáctanos</a></li>
      </ul>

      <!-- <div class="nav-actions" id="navActions">
        <div class="login-hover" id="loginHover">
          <button class="btn-login-icon" id="btnLogin" aria-label="Iniciar sesión">
            <i class="fas fa-user"></i>
          </button>

          <div class="login-dropdown" id="loginDropdown">
            <div class="login-dropdown-header">
              <i class="fas fa-graduation-cap"></i>
              <div>
                <strong>Portal CBTIS 114</strong>
                <small>Acceso con correo institucional</small>
              </div>
            </div>

            <button type="button" class="login-dropdown-btn" id="btnAbrirLogin">
              <i class="fas fa-sign-in-alt"></i>
              <span>Iniciar sesión</span>
            </button>

            <p class="login-dropdown-nota">
              Usa tu correo <strong>@cbtis114.edu.mx</strong>
            </p>
          </div>
        </div>

        <div class="user-menu" id="userMenu" style="display: none;">
          <button class="user-menu-btn" id="userMenuBtn">
            <div class="user-menu-avatar" id="userAvatar">A</div>
            <span class="user-name" id="userName">Usuario</span>
            <i class="fas fa-chevron-down" style="font-size: 0.7rem; opacity: 0.6;"></i>
          </button>
          <div class="user-menu-dropdown" id="userDropdown">
            <div class="user-info">
              <strong id="userInfoName">Usuario</strong>
              <small id="userInfoEmail">correo@cbtis114.edu.mx</small>
            </div>
            <button id="btnLogout">
              <i class="fas fa-sign-out-alt"></i> Cerrar sesión
            </button>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</nav>
