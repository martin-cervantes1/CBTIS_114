<div class="modal-overlay" id="loginModal" role="dialog" aria-modal="true" aria-labelledby="loginTitle">
  <div class="modal">
    <div class="modal-header">
      <button class="modal-close" id="modalClose" aria-label="Cerrar">
        <i class="fas fa-times"></i>
      </button>
      <h2 id="loginTitle">Iniciar sesión</h2>
      <p>Accede al Portal CBTIS 114</p>
    </div>

    <div class="modal-body">
      <form id="loginForm" novalidate>
        <div class="form-error" id="formError">
          <i class="fas fa-exclamation-circle"></i>
          <span id="formErrorText">Credenciales incorrectas.</span>
        </div>

        <div class="form-group">
          <label for="userEmail">Correo institucional</label>
          <div class="input-wrapper">
            <i class="fas fa-envelope"></i>
            <input type="email" id="userEmail" placeholder="nombre.apellido@cbtis114.edu.mx" autocomplete="username" required>
          </div>
        </div>

        <div class="form-group">
          <label for="userPassword">Contraseña</label>
          <div class="input-wrapper">
            <i class="fas fa-lock"></i>
            <input type="password" id="userPassword" placeholder="Tu contraseña" autocomplete="current-password" required>
            <button type="button" class="toggle-password" id="togglePassword" aria-label="Mostrar contraseña">
              <i class="fas fa-eye"></i>
            </button>
          </div>
        </div>

        <div class="form-row">
          <label class="remember">
            <input type="checkbox" id="rememberMe">
            Recordarme
          </label>
          <a href="#" id="forgotPassword">¿Olvidaste tu contraseña?</a>
        </div>

        <button type="submit" class="btn-submit" id="btnSubmit">
          <i class="fas fa-sign-in-alt"></i> Acceder
        </button>
      </form>
    </div>
  </div>
</div>
