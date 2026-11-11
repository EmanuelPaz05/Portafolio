const toggle = document.querySelector('.menu-toggle');
const menu = document.querySelector('#mobile-nav');
if (toggle && menu) {
  const closeMenu = () => {
    menu.hidden = true;
    toggle.setAttribute('aria-expanded', 'false');
    toggle.setAttribute('aria-label', 'Abrir menú');
  };
  toggle.addEventListener('click', () => {
    const open = toggle.getAttribute('aria-expanded') !== 'true';
    menu.hidden = !open;
    toggle.setAttribute('aria-expanded', String(open));
    toggle.setAttribute('aria-label', open ? 'Cerrar menú' : 'Abrir menú');
  });
  menu.addEventListener('click', (event) => {
    if (event.target.closest('a')) closeMenu();
  });
  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape' && !menu.hidden) { closeMenu(); toggle.focus(); }
  });
  window.matchMedia('(min-width: 601px)').addEventListener('change', closeMenu);
}

/* Enlaces del coloquio: proyectos Net-Gestión y automatización. */
(function () {
  const list = document.querySelector('#proyectos .project-list');
  if (list && !document.querySelector('a[href="proyectos/automatizacion-reportes.html"]')) {
    const row = document.createElement('article');
    row.className = 'project-row';
    row.innerHTML = '<span class="project-number">04</span><div><p class="eyebrow">AUTOMATIZACIÓN / CASO TÉCNICO</p><h3>Reportes automáticos</h3><p>Demo independiente que procesa ventas ficticias, calcula totales y genera reportes para correo, con un modo opcional de envío por Resend.</p><ul class="tags"><li>Node.js</li><li>JSON</li><li>Resend</li></ul><div class="project-actions"><a class="text-link" href="proyectos/automatizacion-reportes.html">Ver el proyecto <i class="bi bi-arrow-up-right" aria-hidden="true"></i></a><a class="text-link" href="https://github.com/EmanuelPaz05/NetGestion-Automatizacion-Reportes" target="_blank" rel="noopener noreferrer">Código en GitHub <i class="bi bi-github" aria-hidden="true"></i></a></div></div><a class="round-link" href="proyectos/automatizacion-reportes.html" aria-label="Conocer la automatización de reportes" title="Automatización de reportes"><i class="bi bi-arrow-up-right" aria-hidden="true"></i></a>';
    list.appendChild(row);
  }
  const netGestion = document.querySelector('#proyectos .project.featured .project-actions');
  if (netGestion && !netGestion.querySelector('a[href*="NetGestion-Presentacion"]')) {
    const link = document.createElement('a');
    link.className = 'text-link';
    link.href = 'https://github.com/EmanuelPaz05/NetGestion-Presentacion';
    link.target = '_blank';
    link.rel = 'noopener noreferrer';
    link.innerHTML = 'Repositorio técnico <i class="bi bi-github" aria-hidden="true"></i>';
    netGestion.appendChild(link);
  }
})();
