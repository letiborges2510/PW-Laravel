<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/style.css', 'resources/js/script.js'])
  <title>Etec Zona Leste</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  
  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet">
</head>

<body>

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>

    <div class="overlay" data-overlay></div>

    <div class="header-top">
      <div class="container">

        <ul class="header-top-list">

          <li>
            <a href="mailto:info@homeverse.com" class="header-top-link">
              <ion-icon name="mail-outline"></ion-icon>

              <span>@etec.sp.gov.br</span>
            </a>
          </li>

          <li>
            <a href="#" class="header-top-link">
              <ion-icon name="location-outline"></ion-icon>

              <address>ETEC Zona Leste,SP</address>
            </a>
          </li>

        </ul>

       

      </div>
    </div>

    <div class="header-bottom">
      <div class="container">

     

        <nav class="navbar" data-navbar>

          <div class="navbar-top">


            <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </div>

          <div class="navbar-bottom">
            <ul class="navbar-list">

              <li>
                <a href="index.blade.php" class="navbar-link" data-nav-link>Home</a>
              </li>

              <li>
                <a href="sobrenos.blade.php" class="navbar-link" data-nav-link>Sobre Nós</a>
              </li>

              <li>
                <a href="noticias.blade.php"no class="navbar-link" data-nav-link>Noticias</a>
              </li>

              <li>
                <a href="contato.blade.php" class="navbar-link" data-nav-link>Contato</a>
              </li>

            

            </ul>
          </div>

        </nav>

        <div class="header-bottom-actions">

          <button class="header-bottom-actions-btn" aria-label="Search">
            <ion-icon name="search-outline"></ion-icon>

            <span>Search</span>
          </button>

          <button class="header-bottom-actions-btn" aria-label="Profile">
            <ion-icon name="person-outline" href=""></ion-icon>

            <span>Profile</span>
          </button>

  

      
          <button class="header-bottom-actions-btn" data-nav-open-btn aria-label="Open Menu">
            <ion-icon name="menu-outline"></ion-icon>

            <span>Menu</span>
          </button>

        </div>

      </div>
    </div>

  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home">
        <div class="container">

          <div class="hero-content">

            <p class="hero-subtitle">
              <ion-icon name="home"></ion-icon>

              <span>Etec Zona Leste</span>
            </p>

            <h2 class="h1 hero-title">Educação Técnica na Região da Zona Leste de São Paulo</h2>


            <button class="btn">Conheça nossa escola</button>

          </div>

          <figure class="hero-banner">

            <img src="{{ asset('assets/hero-banner.png')}}" alt="Modern house model" class="w-100">
          </figure>

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <section class="about" id="about">
        <div class="container">

          <figure class="about-banner">
            <img src="{{ asset('assets/about-banner-1.png')}}" alt="House interior">

          </figure>

          <div class="about-content">

            <p class="section-subtitle">Sobre nós</p>

            <h2 class="h2 section-title">Conheça Nossa Instituição</h2>

            <p class="about-text">
              Localizada estrategicamente na Avenida Águia de Haia, na Zona Leste de São Paulo, a Etec Zona Leste se destaca como um importante polo educacional na região. Sua história remonta ao compromisso com a excelência educacional e o desenvolvimento profissional dos estudantes.
            </p>

            <ul class="about-list">

              <li class="about-item">
                <div class="about-item-icon">
                  <ion-icon name="home-outline"></ion-icon>
                </div>

                <p class="about-item-text">Infraestrutura Moderna</p>
              </li>

              <li class="about-item">
                <div class="about-item-icon">
                  <ion-icon name="leaf-outline"></ion-icon>
                </div>

                <p class="about-item-text">Futuro brilhante </p>
              </li>

              <li class="about-item">
                <div class="about-item-icon">
                  <ion-icon name="wine-outline"></ion-icon>
                </div>

                <p class="about-item-text">Aprendizados para além da sala de aula</p>
              </li>

              <li class="about-item">
                <div class="about-item-icon">
                  <ion-icon name="shield-checkmark-outline"></ion-icon>
                </div>

                <p class="about-item-text">Excelência Educacional</p>
              </li>

            </ul>

            <p class="callout">
              "Além da excelência acadêmica, a Etec Zona Leste também se destaca por suas atividades extracurriculares, que incluem projetos de pesquisa, competições acadêmicas, eventos culturais e esportivos."
            </p>

            <a href="sobrenos.blade.php" class="btn">Saiba mais</a>

          </div>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="service" id="service">
        <div class="container">

          <p class="section-subtitle">Oportunidades</p>

          <h2 class="h2 section-title">Oportunidades na Etec </h2>

          <ul class="service-list">

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img src="{{ asset('assets/service-1.png')}}" alt="Service icon">
                </div>

                <h3 class="h3 card-title">
                  <a href="#">Concurso Público</a>
                </h3>

                <p class="card-text">
                  Estão em andamento concursos públicos para contratação de 2,7 mil docentes e servidores administrativos para atuar em Escolas Técnicas (Etecs), Faculdades de Tecnologia (Fatecs) do Estado e na Administração Central do Centro Paula Souza (CPS).
                </p>


              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img src="{{ asset('assets/service-2.png')}}" alt="Service icon">
                </div>

                <h3 class="h3 card-title">
                  <a href="#">Auxiliar de Docente</a>
                </h3>

                <p class="card-text">
                  Prepare-se para embarcar em uma jornada de ensino e aprendizado! O Processo Seletivo Simplificado para Auxiliar de Docente nas renomadas Escolas Técnicas Estaduais (ETECs) ou Faculdades de Tecnologia (FATECs) está com inscrições abertas.
                </p>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <img src="{{ asset('assets/service-3.png')}}" alt="Service icon">
                </div>

                <h3 class="h3 card-title">
                  <a href="#">Aprendiz Paulista</a>
                </h3>

                <p class="card-text">
                  Se você tem entre 14 e 24 anos, está matriculado em cursos técnicos profissionalizantes do Centro Estadual de Educação Tecnológica Paula Souza e reside em São Paulo,você pode conquistar uma vaga de aprendizagem em empresas parceiras.
                </p>


              </div>
            </li>

          </ul>

        </div>
      </section>

      <!-- 
        - #FEATURES
      -->

      <section class="features">
        <div class="container">

          <p class="section-subtitle">Cursos técnicos</p>

          <h2 class="h2 section-title">Cursos da nossa Etec</h2>

          <ul class="features-list">

            <li>
              <a href="#" class="features-card">

                <div class="card-icon">
                  <ion-icon name="car-sport-outline"></ion-icon>
                </div>

                <h3 class="card-title">Novotec Desenvolvimento de Sistemas</h3>

                <div class="card-btn">
                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </div>

              </a>
            </li>

            <li>
              <a href="#" class="features-card">

                <div class="card-icon">
                  <ion-icon name="water-outline"></ion-icon>
                </div>

                <h3 class="card-title">Contabilidade</h3>

                <div class="card-btn">
                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </div>

              </a>
            </li>

            <li>
              <a href="#" class="features-card">

                <div class="card-icon">
                  <ion-icon name="water-outline"></ion-icon>
                </div>

                <h3 class="card-title">Logística</h3>

                <div class="card-btn">
                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </div>

              </a>
            </li>


            <li>
              <a href="#" class="features-card">

                <div class="card-icon">
                  <ion-icon name="water-outline"></ion-icon>
                </div>

                <h3 class="card-title">Recursos Humanos</h3>

                <div class="card-btn">
                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </div>

              </a>
            </li>


            <li>
              <a href="#" class="features-card">

                <div class="card-icon">
                  <ion-icon name="shield-checkmark-outline"></ion-icon>
                </div>

                <h3 class="card-title">Administração</h3>

                <div class="card-btn">
                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </div>

              </a>
            </li>


            <li>
              <a href="#" class="features-card">

                <div class="card-icon">
                  <ion-icon name="library-outline"></ion-icon>
                </div>

                <h3 class="card-title">Serviços Jurídicos</h3>

                <div class="card-btn">
                  <ion-icon name="arrow-forward-outline"></ion-icon>
                </div>

              </a>
            </li>

            
          </ul>

        </div>
      </section>





      <!-- 
        - #CTA
      -->

  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <h1> ETEC ZONA LESTE</h1>

          <p class="section-text">
            A Escola Técnica Estadual (ETEC) é um programa de formação, mantido pelo Governo do Estado de São Paulo, que objetiva a formação de profissões de nível técnico. 
          </p>

          <ul class="contact-list">

            <li>
              <a href="#" class="contact-link">
                <ion-icon name="location-outline"></ion-icon>

                <address>Avenida Águia de Haia, 2683, Cidade A.E. Carvalho, São Paulo</address>
              </a>
            </li>

            <li>
              <a href="tel:+0123456789" class="contact-link">
                <ion-icon name="call-outline"></ion-icon>

                <span>(11) 20454017.</span>
              </a>
            </li>

            <li>
              <a href="mailto:contact@homeverse.com" class="contact-link">
                <ion-icon name="mail-outline"></ion-icon>

                <span>contact@etec.sp.gov.br
                </span>
              </a>
            </li>

          </ul>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-youtube"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

        <div class="footer-link-box">

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Instituição</p>
            </li>

            <li>
              <a href="#" class="footer-link">Sobre Nós</a>
            </li>

          
          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Notícias</p>
            </li>

            <li>
              <a href="noticias.blade.php" class="footer-link">Notícias sobre a etec</a>
            </li>
          </ul>
           
          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Entre em contato</p>
            </li>

           

            <li>
              <a href="contato.blade.php" class="footer-link">Contanto</a>
            </li>

          </ul>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2024 <a href="#">Etec Zona Leste</a>. Todos os direitos reservados.
        </p>

      </div>
    </div>

  </footer>
  
  
   <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>