<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined">
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ancizar+Sans:ital,wght@0,100..1000;1,100..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="vista/css/inicio.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>Document</title>
</head>
<body>
    <!-- Nav Bar -->
<nav>
    <div class="container-fluid">
        <div class="row p-2">
            <div class="col-12 d-flex justify-content-end align-items-center">
                <a class="sobreEl nav-icons" href="https://github.com/freyder319">Github</a>
                <a class="sobreEl icons" href="https://www.linkedin.com/in/freyder-diaz-pe%C3%B1uela-017878345/">Linkedin</a>
                <div class="dropdown">
                    <button class="btn" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="material-symbols-outlined icons">apps</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Opción 1</a></li>
                        <li><a class="dropdown-item" href="#">Opción 2</a></li>
                        <li><a class="dropdown-item" href="#">Opción 3</a></li>
                    </ul>
                </div>
                <span class="material-symbols-outlined icons">work</span>

            </div>
        </div>
    </div>
</nav>
<br><br><br><br><br><br>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div data-aos="fade-right" data-aos-delay="300" class="col-6 text-center">
                <h1 data-aos="fade-right" data-aos-delay="300" class="tittle1" data-aos="fade-up">Freyder Diaz</h1>
                <h2 class="tittle2">Desarrollador de software</h2>
                <br><br><br><br>
                 <h2 class="tittle3">Resumen de Habilidades</h2>
                 <br><br>
                <!-- =========================
     PASARELA DE 6 SKILLS
========================= -->
<div class="skills-wrapper">
  <div class="skills-track" id="skills-track">
    <!--   Logos: añade o quita los que quieras  -->
    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/html5/html5-original-wordmark.svg"  alt="HTML">
    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/css3/css3-original-wordmark.svg"    alt="CSS">
    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript">
    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/php/php-original.svg" alt="php">
    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/angularjs/angularjs-original.svg" alt="Angular">
    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/bootstrap/bootstrap-original-wordmark.svg" alt="Bootstrap">
    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/tailwindcss/tailwindcss-original.svg" alt="tailwind">
    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/mysql/mysql-original-wordmark.svg" alt="mysql">
    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/azuresqldatabase/azuresqldatabase-original.svg" alt="sql">
    <!--  === logos extra (se mostrarán al desplazar) === -->
    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mongodb/mongodb-original.svg" alt="MongoDB">
    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/git/git-original.svg" alt="Git">
    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/github/github-original-wordmark.svg" alt="GitHub">
    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/xd/xd-original.svg" alt="Xd">
    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/vscode/vscode-original.svg" alt="visual studio code">
    <!-- clona más si necesitas -->
  </div>
</div>

<style>
/* --- contenedor visible --- */
.skills-wrapper{
  max-width: 600px;      /* ≈ 6 * 90 px; ajusta al gusto        */
  margin: 0 auto;        /* centrado                             */
  overflow: hidden;      /* oculta lo que rebasa                 */
}

/* --- pista desplazable --- */
.skills-track{
  display: flex;
  gap: 1.5rem;           /* espacio entre logos                  */
  transition: transform .6s ease;
}

/* --- cada logo --- */
.skills-track img{
  width: 80px;           /* tamaño uniforme; ajusta si quieres   */
  flex-shrink: 0;        /* evita que se reduzcan                */
  filter: drop-shadow(0 0 4px #0002);
}
</style>

<script>
/* ===== JS: desplazar de 1 en 1 logo cada 3 s ===== */
const track        = document.getElementById('skills-track');
const logos        = track.querySelectorAll('img');
const visibleCount = 6;                     // logos visibles a la vez
let   index        = 0;                     // logo inicial

// calcula ancho real de un “paso” (logo + gap)
const logoWidth = logos[0].offsetWidth;
const gap       = parseFloat(getComputedStyle(track).gap) || 0;
const step      = logoWidth + gap;

setInterval(()=>{
  index = (index + 1) % (logos.length - visibleCount + 1); // reinicia al final
  track.style.transform = `translateX(-${ index * step }px)`;
}, 1500);
</script>

            </div>
            <div data-aos="fade-left" data-aos-delay="300" class="col-6 d-flex flex-column align-items-center text-center">
                <img src="vista/imagenes/perfil-removebg-preview.png" alt="" class="mb-3 imagen-fade" />
                <h2 class="tittle2">"Soluciones inteligentes para retos reales en desarrollo web."</h2>
            </div>
        </div>
    </div>
  <br><br><br><br><br><br><br><br>
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-12 text-center">
            <h1 class="tittle1">Proyectos</h1>
        </div>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 sobreEl"> <br> Colombia</div>
        </div>
        <hr>
<div class="row">
  <div class="col-12 d-flex flex-column flex-md-row justify-content-md-between align-items-center text-center gap-3">
    <div class="d-flex flex-wrap justify-content-center gap-2">
      <a class="sobreEl" href="#">Sobre Freyder</a>
      <a class="sobreEl" href="#">Experiencia</a>
      <a class="sobreEl" href="#">Estudios</a>
    </div>
    <div class="d-flex flex-wrap justify-content-center gap-2">
      <a class="sobreEl" href="#">Conocimientos</a>
      <a class="sobreEl" href="#">Curriculum</a>
    </div>
  </div>
</div>

        <br>
    </div>
</footer>
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init();
</script>

</body>
</html>