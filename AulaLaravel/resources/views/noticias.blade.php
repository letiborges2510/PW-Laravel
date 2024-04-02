<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
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
                <a href="noticias.blade.php" class="navbar-link" data-nav-link>Noticias</a>
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
        
            <img src=" {{ asset('assets/hero-banner.png')}}" alt="Modern house model" class="w-100">
          </figure>

        </div>
      </section>





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
                  <a href="#">Etecs e Fatecs ganham espaços para turbinar projetos de alunos</a>
                </h3>

                <p class="card-text">
                  Um novo ensino nasce com o layout inovador e equipamentos tecnológicos; projetos saem do papel e deixam alunos mais preparados para o mercado de trabalho ...
                </p>


              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
               
                  <img src="{{ asset('assets/service-2.png')}} "alt="Service icon">
                </div>

                <h3 class="h3 card-title">
                  <a href="#">Aluna ganha prêmio com podcast sobre Carolina Maria de Jesus</a>
                </h3>

                <p class="card-text">
                  Trabalho da aluna é resultado de parceria com o projeto Lusomicrofonia, que reúne alunos do Brasil, Portugal e Espanha, por meio de programas de rádio, para falar sobre a língua portuguesa ...
                </p>

              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                {{ asset('assets/eteczl.webp')}}"
                  <img src="{{ asset('assets/service-3.png')}}" alt="Service icon">
                </div>

                <h3 class="h3 card-title">
                  <a href="#">Etec Zona Leste vence a final do Pense Grande Digital</a>
                </h3>

                <p class="card-text">
                  Na final da competição, estudantes apresentaram aplicativo que conecta quem precisa fazer descarte de lixo com empresas e prestadores de serviço de coleta ...
                </p>


              </div>
            </li>

          </ul>

        </div>
      </section>









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