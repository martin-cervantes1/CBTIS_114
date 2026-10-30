<?php
  $titulo = 'Oferta Académica';
  $pagina_activa = 'oferta';

  /* ============================================
     DATOS DE LAS ESPECIALIDADES
     ============================================ */
  $especialidades = [
    [
      'slug' => 'rh',
      'nombre' => 'Administración de Recursos Humanos',
      'icono' => 'fas fa-users',
      'descripcion' => 'Forma Técnicos capaces de elaborar y gestionar la información administrativa de la organización, integrar el capital humano, asistir en el control y evaluación del desempeño del personal, controlar los procesos de higiene y seguridad, y determinar las remuneraciones al capital humano.',
      'perfil' => [
        'Elabora y gestiona la información administrativa de la organización.',
        'Integra el capital humano a la organización.',
        'Asiste en el control y evaluación del desempeño del capital humano.',
        'Controla los procesos y servicios de higiene y seguridad del capital humano.',
        'Determina las remuneraciones al capital humano de la organización.',
      ],
      'modulos' => [
        ['nombre' => 'Módulo I', 'titulo' => 'Elabora y gestiona la información administrativa de la organización', 'horas' => '272 h'],
        ['nombre' => 'Módulo II', 'titulo' => 'Integra el capital humano a la organización', 'horas' => '272 h'],
        ['nombre' => 'Módulo III', 'titulo' => 'Asiste en el control y evaluación del desempeño del capital humano', 'horas' => '272 h'],
        ['nombre' => 'Módulo IV', 'titulo' => 'Controla los procesos y servicios de higiene y seguridad', 'horas' => '192 h'],
        ['nombre' => 'Módulo V', 'titulo' => 'Determina las remuneraciones al capital humano', 'horas' => '192 h'],
      ],
      'campo' => 'Servicios de administración de negocios, departamentos de recursos humanos, reclutamiento y selección, nóminas, capacitación y desarrollo, auditoría de personal.',
    ],
    [
      'slug' => 'ciberseguridad',
      'nombre' => 'Ciberseguridad',
      'icono' => 'fas fa-shield-alt',
      'descripcion' => 'Forma Técnicos capaces de proteger la integridad de los sistemas informáticos contra amenazas cibernéticas, empleando herramientas, procedimientos y normativa vigente de seguridad para mantener los sistemas en operación.',
      'perfil' => [
        'Desarrolla algoritmos de programación para resguardar la seguridad de la información.',
        'Instala sistemas operativos para asegurar la información.',
        'Mitiga riesgos de seguridad en sistemas informáticos.',
        'Monitorea el tráfico de redes para detectar vulnerabilidades.',
        'Auxilia en el proceso de preservación de evidencias de ataques informáticos.',
      ],
      'modulos' => [
        ['nombre' => 'Módulo I', 'titulo' => 'Desarrolla algoritmos de programación para resguardar la seguridad de la información', 'horas' => '272 h'],
        ['nombre' => 'Módulo II', 'titulo' => 'Instala sistemas operativos para asegurar la información', 'horas' => '272 h'],
        ['nombre' => 'Módulo III', 'titulo' => 'Mitiga riesgos de seguridad en sistemas informáticos', 'horas' => '272 h'],
        ['nombre' => 'Módulo IV', 'titulo' => 'Monitorea el tráfico de redes para detectar vulnerabilidades', 'horas' => '192 h'],
        ['nombre' => 'Módulo V', 'titulo' => 'Auxilia en la preservación de evidencias de ataques informáticos', 'horas' => '192 h'],
      ],
      'campo' => 'Servicios de diseño de sistemas de cómputo, consultoría de informática, administración de redes y bases de datos, centros de datos, gestión de instalaciones informáticas.',
    ],
    [
      'slug' => 'contabilidad',
      'nombre' => 'Contabilidad',
      'icono' => 'fas fa-calculator',
      'descripcion' => 'Forma Técnicos capaces de registrar operaciones contables de empresas comerciales y de servicios, operar procesos contables en sistemas electrónicos, registrar operaciones de entidades fabriles, determinar contribuciones fiscales y asistir en auditoría.',
      'perfil' => [
        'Registra operaciones contables de empresas comerciales y de servicios.',
        'Opera los procesos contables dentro de un sistema electrónico.',
        'Registra operaciones contables de una entidad fabril.',
        'Determina las contribuciones fiscales de personas físicas y morales.',
        'Asiste en actividades de auditoría de una entidad.',
      ],
      'modulos' => [
        ['nombre' => 'Módulo I', 'titulo' => 'Registra operaciones contables de empresas comerciales y de servicios', 'horas' => '272 h'],
        ['nombre' => 'Módulo II', 'titulo' => 'Opera los procesos contables dentro de un sistema electrónico', 'horas' => '272 h'],
        ['nombre' => 'Módulo III', 'titulo' => 'Registra operaciones contables de una entidad fabril', 'horas' => '272 h'],
        ['nombre' => 'Módulo IV', 'titulo' => 'Determina las contribuciones fiscales de personas físicas y morales', 'horas' => '192 h'],
        ['nombre' => 'Módulo V', 'titulo' => 'Asiste en actividades de auditoría de una entidad', 'horas' => '192 h'],
      ],
      'campo' => 'Servicios de contabilidad y auditoría, despachos contables, departamentos de contabilidad en empresas públicas y privadas, nóminas, fiscal, auditoría interna.',
    ],
    [
      'slug' => 'electromovilidad',
      'nombre' => 'Electromovilidad',
      'icono' => 'fas fa-bolt',
      'descripcion' => 'Formación orientada al diseño, mantenimiento y diagnóstico de sistemas de propulsión eléctrica en vehículos, así como a la instalación y mantenimiento de infraestructura de carga y sistemas de almacenamiento de energía.',
      'perfil' => [
        'Instala y mantiene sistemas eléctricos y electrónicos de vehículos eléctricos e híbridos.',
        'Diagnostica fallas en sistemas de propulsión eléctrica.',
        'Mantiene baterías de tracción y sistemas de gestión de energía.',
        'Instala y da mantenimiento a estaciones de carga.',
        'Aplica normas de seguridad en sistemas de alto voltaje.',
      ],
      'modulos' => [
        ['nombre' => 'Módulo I', 'titulo' => 'Sistemas eléctricos y electrónicos del vehículo', 'horas' => '272 h'],
        ['nombre' => 'Módulo II', 'titulo' => 'Sistemas de propulsión eléctrica e híbrida', 'horas' => '272 h'],
        ['nombre' => 'Módulo III', 'titulo' => 'Baterías de tracción y gestión de energía', 'horas' => '272 h'],
        ['nombre' => 'Módulo IV', 'titulo' => 'Infraestructura de carga y mantenimiento', 'horas' => '192 h'],
        ['nombre' => 'Módulo V', 'titulo' => 'Diagnóstico y seguridad en alto voltaje', 'horas' => '192 h'],
      ],
      'campo' => 'Agencias automotrices, talleres especializados en vehículos eléctricos e híbridos, empresas de transporte eléctrico, instalación de estaciones de carga, industria automotriz.',
    ],
    [
      'slug' => 'mecanica',
      'nombre' => 'Mecánica Industrial',
      'icono' => 'fas fa-industry',
      'descripcion' => 'Forma Técnicos capaces de dar mantenimiento a sistemas de transmisión de potencia utilizando máquinas-herramienta convencionales y de control numérico, máquinas de soldar con arco eléctrico y oxigas, y procesos de ajuste de piezas mecánicas.',
      'perfil' => [
        'Suelda y ajusta piezas mecánicas.',
        'Maquina piezas mecánicas en taladro y torno.',
        'Maquina piezas mecánicas en fresadora, rectificadora y cepillo.',
        'Maquina piezas mecánicas por CNC.',
        'Mantiene sistemas de transmisión de potencia.',
      ],
      'modulos' => [
        ['nombre' => 'Módulo I', 'titulo' => 'Suelda y ajusta piezas mecánicas', 'horas' => '272 h'],
        ['nombre' => 'Módulo II', 'titulo' => 'Maquina piezas mecánicas en taladro y torno', 'horas' => '272 h'],
        ['nombre' => 'Módulo III', 'titulo' => 'Maquina piezas mecánicas en fresadora, rectificadora y cepillo', 'horas' => '272 h'],
        ['nombre' => 'Módulo IV', 'titulo' => 'Maquina piezas mecánicas por CNC', 'horas' => '192 h'],
        ['nombre' => 'Módulo V', 'titulo' => 'Mantiene sistemas de transmisión de potencia', 'horas' => '192 h'],
      ],
      'campo' => 'Fabricación de estructuras metálicas, maquinaria y equipo industrial, mantenimiento de equipo metalmecánico, industria automotriz, fabricación de herramientas.',
    ],
    [
      'slug' => 'programacion',
      'nombre' => 'Programación',
      'icono' => 'fas fa-code',
      'descripcion' => 'Forma Técnicos capaces de analizar, diseñar, desarrollar, instalar y mantener software de aplicación, así como aplicaciones web y móviles, con almacenamiento persistente de datos y soluciones de e-learning y comercio electrónico.',
      'perfil' => [
        'Desarrolla e instala software con programación estructurada y almacenamiento persistente.',
        'Desarrolla software con programación orientada a objetos.',
        'Desarrolla aplicaciones web y móviles.',
        'Administra sistemas operativos, aplicaciones y servicios.',
        'Desarrolla, administra y configura soluciones de e-learning y comercio electrónico.',
      ],
      'modulos' => [
        ['nombre' => 'Módulo I', 'titulo' => 'Desarrolla e instala software con programación estructurada', 'horas' => '272 h'],
        ['nombre' => 'Módulo II', 'titulo' => 'Desarrolla software con programación orientada a objetos', 'horas' => '272 h'],
        ['nombre' => 'Módulo III', 'titulo' => 'Desarrolla aplicaciones web y móviles', 'horas' => '272 h'],
        ['nombre' => 'Módulo IV', 'titulo' => 'Administra sistemas operativos, aplicaciones y servicios', 'horas' => '192 h'],
        ['nombre' => 'Módulo V', 'titulo' => 'Soluciones de e-learning y comercio electrónico', 'horas' => '192 h'],
      ],
      'campo' => 'Edición de software, diseño de sistemas de cómputo, desarrollo de aplicaciones web y móviles, escuelas de computación, comercio electrónico, administración de servicios en la nube.',
    ],
    [
      'slug' => 'robotica',
      'nombre' => 'Robótica y Automatización',
      'icono' => 'fas fa-robot',
      'descripcion' => 'Forma Técnicos capaces de programar y poner en marcha robots industriales, integrar tecnologías de mecánica, eléctrica y electrónica, mantener en operación sistemas robóticos y automatizados, y participar en proyectos de innovación.',
      'perfil' => [
        'Construye circuitos electrónicos y eléctricos para sistemas robóticos y automatizados.',
        'Instala sensores, actuadores y mecanismos en sistemas robóticos y automatizados.',
        'Opera sistemas de control en procesos robóticos y automatizados.',
        'Opera robots en procesos automatizados.',
        'Integra estaciones robóticas y automatizadas en procesos industriales.',
      ],
      'modulos' => [
        ['nombre' => 'Módulo I', 'titulo' => 'Construye circuitos electrónicos y eléctricos para sistemas robóticos', 'horas' => '272 h'],
        ['nombre' => 'Módulo II', 'titulo' => 'Instala sensores, actuadores y mecanismos en sistemas robóticos', 'horas' => '272 h'],
        ['nombre' => 'Módulo III', 'titulo' => 'Opera sistemas de control en procesos robóticos y automatizados', 'horas' => '272 h'],
        ['nombre' => 'Módulo IV', 'titulo' => 'Opera robots en procesos automatizados', 'horas' => '192 h'],
        ['nombre' => 'Módulo V', 'titulo' => 'Integra estaciones robóticas y automatizadas en procesos industriales', 'horas' => '192 h'],
      ],
      'campo' => 'Fabricación de maquinaria y equipo industrial, automatización de procesos, integración de sistemas robóticos, mantenimiento industrial, industria 4.0.',
    ],
  ];
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
          <i class="fas fa-graduation-cap"></i> Formación técnica
        </div>
        <h1>Oferta Académica</h1>
        <p class="subhead">
          Descubre nuestras especialidades técnicas. Formación de excelencia
          con validez oficial DGETI, turnos matutino y vespertino.
        </p>
      </div>
    </div>
  </header>

  <main>
    <section id="oferta">
      <div class="container">
        <div class="section-header reveal">
          <div class="section-eyebrow">Especialidades</div>
          <h2 class="section-title">Nuestras Carreras Técnicas</h2>
          <p class="section-subtitle">
            Haz clic en cualquiera para ver el perfil de egreso, los módulos y el campo laboral.
          </p>
        </div>

        <div class="acordeon-especialidades">
          <?php foreach ($especialidades as $esp): ?>
            <div class="acordeon-item reveal" data-especialidad="<?= htmlspecialchars($esp['slug']) ?>">
              <button type="button" class="acordeon-header" aria-expanded="false">
                <div class="acordeon-icon">
                  <i class="<?= $esp['icono'] ?>"></i>
                </div>
                <div class="acordeon-titulo">
                  <strong><?= htmlspecialchars($esp['nombre']) ?></strong>
                </div>
                <i class="fas fa-chevron-down acordeon-chevron"></i>
              </button>

              <div class="acordeon-content">
                <div class="acordeon-inner">
                  <p class="esp-descripcion"><?= htmlspecialchars($esp['descripcion']) ?></p>

                  <div class="esp-columnas">
                    <div class="esp-col">
                      <h4><i class="fas fa-user-graduate"></i> Perfil de egreso</h4>
                      <ul class="esp-lista">
                        <?php foreach ($esp['perfil'] as $p): ?>
                          <li><?= htmlspecialchars($p) ?></li>
                        <?php endforeach; ?>
                      </ul>
                    </div>

                    <div class="esp-col">
                      <h4><i class="fas fa-briefcase"></i> Campo laboral</h4>
                      <p class="esp-campo"><?= htmlspecialchars($esp['campo']) ?></p>
                    </div>
                  </div>

                  <h4 class="esp-modulos-titulo"><i class="fas fa-book"></i> Módulos</h4>
                  <div class="esp-modulos">
                    <?php foreach ($esp['modulos'] as $m): ?>
                      <div class="esp-modulo">
                        <span class="num"><?= htmlspecialchars($m['nombre']) ?></span>
                        <span class="titulo"><?= htmlspecialchars($m['titulo']) ?></span>
                        <span class="horas"><?= htmlspecialchars($m['horas']) ?></span>
                      </div>
                    <?php endforeach; ?>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

        <p style="margin-top: 30px; font-style: italic; color: #5a4a3a; text-align: center;">
          * Todas las especialidades son de modalidad escolarizada, opción presencial. Turnos matutino y vespertino.
        </p>
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
