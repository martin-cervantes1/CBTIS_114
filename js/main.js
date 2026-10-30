/* ============================================
   MENÚ MÓVIL
   ============================================ */
const menuToggle = document.getElementById('menuToggle');
const navRight = document.getElementById('navRight');

if (menuToggle && navRight) {
  menuToggle.addEventListener('click', () => {
    navRight.classList.toggle('open');
    const icon = menuToggle.querySelector('i');
    icon.classList.toggle('fa-bars');
    icon.classList.toggle('fa-times');
  });

  navRight.querySelectorAll('.nav-menu a').forEach(link => {
    link.addEventListener('click', () => {
      if (window.innerWidth <= 980) {
        navRight.classList.remove('open');
        const icon = menuToggle.querySelector('i');
        icon.classList.add('fa-bars');
        icon.classList.remove('fa-times');
      }
    });
  });
}

/* ============================================
   REVEAL ANIMACIONES
   ============================================ */
const revealElements = document.querySelectorAll('.reveal');
if (revealElements.length > 0) {
  const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry, index) => {
      if (entry.isIntersecting) {
        setTimeout(() => entry.target.classList.add('visible'), index * 60);
        revealObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
  revealElements.forEach(el => revealObserver.observe(el));
}

/* ============================================
   SISTEMA DE LOGIN (DEMO - SOLO FRONTEND)
   Login con correo institucional @cbtis114.edu.mx
   ============================================ */
const loginModal = document.getElementById('loginModal');
const btnAbrirLogin = document.getElementById('btnAbrirLogin');
const modalClose = document.getElementById('modalClose');
const loginForm = document.getElementById('loginForm');
const userEmailInput = document.getElementById('userEmail');
const userPasswordInput = document.getElementById('userPassword');
const togglePassword = document.getElementById('togglePassword');
const formError = document.getElementById('formError');
const formErrorText = document.getElementById('formErrorText');
const btnSubmit = document.getElementById('btnSubmit');
const forgotPassword = document.getElementById('forgotPassword');
const rememberMe = document.getElementById('rememberMe');
const userMenu = document.getElementById('userMenu');
const userMenuBtn = document.getElementById('userMenuBtn');
const userDropdown = document.getElementById('userDropdown');
const userAvatar = document.getElementById('userAvatar');
const userName = document.getElementById('userName');
const userInfoName = document.getElementById('userInfoName');
const userInfoEmail = document.getElementById('userInfoEmail');
const btnLogout = document.getElementById('btnLogout');
const loginHover = document.getElementById('loginHover');

const DOMINIO_INSTITUCIONAL = '@cbtis114.edu.mx';

if (loginModal && btnAbrirLogin) {

  function abrirModal() {
    loginModal.classList.add('open');
    document.body.style.overflow = 'hidden';
    setTimeout(() => userEmailInput.focus(), 300);
  }
  function cerrarModal() {
    loginModal.classList.remove('open');
    document.body.style.overflow = '';
    loginForm.reset();
    formError.classList.remove('show');
    userPasswordInput.type = 'password';
    togglePassword.querySelector('i').classList.remove('fa-eye-slash');
    togglePassword.querySelector('i').classList.add('fa-eye');
  }

  btnAbrirLogin.addEventListener('click', abrirModal);
  modalClose.addEventListener('click', cerrarModal);
  loginModal.addEventListener('click', (e) => { if (e.target === loginModal) cerrarModal(); });
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && loginModal.classList.contains('open')) cerrarModal();
  });

  togglePassword.addEventListener('click', () => {
    const icon = togglePassword.querySelector('i');
    if (userPasswordInput.type === 'password') {
      userPasswordInput.type = 'text';
      icon.classList.remove('fa-eye');
      icon.classList.add('fa-eye-slash');
    } else {
      userPasswordInput.type = 'password';
      icon.classList.remove('fa-eye-slash');
      icon.classList.add('fa-eye');
    }
  });

  loginForm.addEventListener('submit', (e) => {
    e.preventDefault();

    const email = userEmailInput.value.trim().toLowerCase();
    const password = userPasswordInput.value;

    formError.classList.remove('show');

    if (!email.endsWith(DOMINIO_INSTITUCIONAL)) {
      formErrorText.textContent = 'Debes usar tu correo institucional ' + DOMINIO_INSTITUCIONAL;
      formError.classList.add('show');
      userEmailInput.focus();
      return;
    }

    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
      formErrorText.textContent = 'El correo no tiene un formato válido.';
      formError.classList.add('show');
      userEmailInput.focus();
      return;
    }

    if (!password || password.length < 6) {
      formErrorText.textContent = 'La contraseña debe tener al menos 6 caracteres.';
      formError.classList.add('show');
      userPasswordInput.focus();
      return;
    }

    btnSubmit.disabled = true;
    btnSubmit.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Verificando...';

    setTimeout(() => {
      const nombreParte = email.split('@')[0];
      const nombreFormateado = nombreParte
        .split(/[._-]/)
        .map(p => p.charAt(0).toUpperCase() + p.slice(1))
        .join(' ');

      const sesion = {
        email: email,
        nombre: nombreFormateado,
        recordar: rememberMe.checked,
        timestamp: Date.now()
      };

      if (rememberMe.checked) {
        localStorage.setItem('cbtis114_sesion', JSON.stringify(sesion));
      } else {
        sessionStorage.setItem('cbtis114_sesion', JSON.stringify(sesion));
      }

      mostrarSesion(sesion);
      btnSubmit.disabled = false;
      btnSubmit.innerHTML = '<i class="fas fa-sign-in-alt"></i> Acceder';
      cerrarModal();
    }, 900);
  });

  forgotPassword.addEventListener('click', (e) => {
    e.preventDefault();
    alert('Para recuperar tu contraseña, acude a Servicios Escolares del plantel o envía un correo a contacto@cbtis114.edu.mx');
  });
}

/* ============================================
   MOSTRAR / OCULTAR SESIÓN
   ============================================ */
function mostrarSesion(sesion) {
  if (!loginHover || !userMenu) return;
  loginHover.style.display = 'none';
  userMenu.style.display = 'block';

  userAvatar.textContent = (sesion.nombre || 'U').charAt(0).toUpperCase();
  userName.textContent = (sesion.nombre || 'Usuario').split(' ')[0];
  userInfoName.textContent = sesion.nombre || 'Usuario';
  userInfoEmail.textContent = sesion.email || '';
}
function ocultarSesion() {
  if (!loginHover || !userMenu) return;
  loginHover.style.display = 'block';
  userMenu.style.display = 'none';
  userDropdown.classList.remove('open');
}

if (userMenuBtn && userDropdown) {
  userMenuBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    userDropdown.classList.toggle('open');
  });
  document.addEventListener('click', (e) => {
    if (!userMenu.contains(e.target)) userDropdown.classList.remove('open');
  });
}
if (btnLogout) {
  btnLogout.addEventListener('click', () => {
    localStorage.removeItem('cbtis114_sesion');
    sessionStorage.removeItem('cbtis114_sesion');
    ocultarSesion();
  });
}

(function cargarSesion() {
  const guardada = localStorage.getItem('cbtis114_sesion')
                || sessionStorage.getItem('cbtis114_sesion');
  if (guardada) {
    try { mostrarSesion(JSON.parse(guardada)); }
    catch (err) {
      localStorage.removeItem('cbtis114_sesion');
      sessionStorage.removeItem('cbtis114_sesion');
    }
  }
})();

/* ============================================
   ACORDEÓN DE ESPECIALIDADES
   ============================================ */
const acordeones = document.querySelectorAll('.acordeon-item');

acordeones.forEach(item => {
  const header = item.querySelector('.acordeon-header');
  const content = item.querySelector('.acordeon-content');

  header.addEventListener('click', () => {
    const isOpen = item.classList.contains('open');

    acordeones.forEach(otro => {
      otro.classList.remove('open');
      otro.querySelector('.acordeon-content').style.maxHeight = null;
      otro.querySelector('.acordeon-header').setAttribute('aria-expanded', 'false');
    });

    if (!isOpen) {
      item.classList.add('open');
      content.style.maxHeight = content.scrollHeight + 'px';
      header.setAttribute('aria-expanded', 'true');

      setTimeout(() => {
        if (item.classList.contains('open')) {
          content.style.maxHeight = content.scrollHeight + 'px';
        }
      }, 500);
    }
  });
});

window.addEventListener('resize', () => {
  const abierto = document.querySelector('.acordeon-item.open');
  if (abierto) {
    const content = abierto.querySelector('.acordeon-content');
    content.style.maxHeight = content.scrollHeight + 'px';
  }
});
