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
                <a href="sobrenos.blade" class="navbar-link" data-nav-link>Sobre Nós</a>
              </li>

              <li>
                <a href="noticias.blade.php" class="navbar-link" data-nav-link>Notícias</a>
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
            <img src="{{ asset('assets/about-banner-3.jpg')}}" alt="House interior">

          </figure>

          <div class="about-content">

            <p class="section-subtitle">Sobre nós</p>

            <h2 class="h2 section-title">História</h2>

            <p class="about-text">A Etec Zona Leste rapidamente se estabeleceu como uma instituição de referência no ensino técnico e tecnológico. Desde o início, sua missão foi proporcionar oportunidades de aprendizado que preparassem os alunos para os desafios do mercado de trabalho, além de incentivá-los a buscar a excelência acadêmica.</p>

            <p class="about-text">Ao longo dos anos, a escola tem evoluído e se adaptado às demandas da sociedade e do mercado, ampliando sua oferta de cursos e modernizando suas instalações. Com uma equipe dedicada de professores e funcionários, a Etec Zona Leste oferece uma variedade de cursos técnicos em áreas como informática, administração, eletrônica, entre outros, proporcionando aos alunos uma formação sólida e atualizada.</p>

            <p class="about-text">Além da excelência acadêmica, a Etec Zona Leste também se destaca por suas atividades extracurriculares, que incluem projetos de pesquisa, competições acadêmicas, eventos culturais e esportivos. Essas atividades complementam o currículo escolar, promovendo o desenvolvimento integral dos estudantes e estimulando o trabalho em equipe, a liderança e a criatividade.</p>
            

          </div>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="service" id="service">
        <div class="container">

          <section class="about" id="about">
            <div class="container">
    
             
    
              <div class="about-content">
    
                <p class="section-subtitle">Sobre nós</p>
    
                <h2 class="h2 section-title">Infraestrutura</h2>
    
                <p class="about-text">Em 6 de abril de 2002, foi inaugurada a ETEC da Zona Leste de São Paulo, um centro de ensino que oferece uma gama diversificada de cursos técnicos e superiores. Localizada na Avenida Águia de Haia, 2683, Cidade A.E. Carvalho, São Paulo, a escola possui uma infraestrutura completa</p>
    
                <p class="about-text">Suas instalações abrangem desde salas de aula modernas até laboratórios bem equipados, uma biblioteca bem fornecida, enfermaria, teatro, áreas de lazer e duas quadras poliesportivas, uma delas coberta. Além disso, o amplo estacionamento e o sistema de segurança interno, com câmeras de vigilância, oferecem comodidade e tranquilidade aos estudantes e visitantes.</p>
    
                <p class="about-text">Uma característica notável da ETEC da Zona Leste é a oferta de cursos técnicos modulares e descentralizados, que proporcionam uma abordagem flexível e adaptável ao aprendizado. Adicionalmente, a escola disponibiliza diversos cursos gratuitos, ampliando o acesso à educação de qualidade.</p>

                <p class="about-text">Com uma estrutura tão completa e uma gama diversa de cursos, a ETEC da Zona Leste se destaca como uma instituição comprometida com o desenvolvimento educacional e profissional de seus alunos.</p>
                
              
    
              </div>

              <figure class="about-banner">
                <img src="{{ asset('assets/about-banner-2.jpg')}}" alt="House interior">
    
              </figure>
    
            </div>
          </section>
     
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