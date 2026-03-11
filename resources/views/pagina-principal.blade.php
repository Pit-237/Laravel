<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - Escola Técnica</title>
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- Ícones Bootstrap (opcional, para um toque visual) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
      /* pequenos ajustes de espaçamento e cor */
      .hero-section {
        background-color: #f8f9fa;
        padding: 4rem 2rem;
        border-radius: 0 0 2rem 2rem;
      }
      .card-img-top {
        height: 200px;
        object-fit: cover;
      }
      .navbar-brand {
        font-weight: 600;
        letter-spacing: 0.5px;
      }
      footer {
        background-color: #212529;
        color: #f8f9fa;
      }
    </style>
  </head>
  <body>

    <!-- ========== NAVBAR ========== -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">
          <i class="bi bi-mortarboard-fill me-2"></i>Escola Técnica Modelo
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCursos" aria-controls="navbarCursos" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCursos">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <!-- Itens de cursos exigidos -->
            <li class="nav-item">
              <a class="nav-link" href="{{ route('pagina-desenvolvimento') }}">Desenvolvimento</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('pagina-administracao') }}">Administração</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('pagina-meio-ambiente') }}">Meio Ambiente</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('pagina-farmacia') }}">Farmácia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('pagina-sobre') }}">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ route('pagina-contato') }}">Contato</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- ========== HOME / HERO ========== -->
    <section id="home" class="hero-section text-center">
      <div class="container">
        <h1 class="display-4 fw-bold">Bem-vindo ao futuro profissional</h1>
        <p class="lead">Conheça nossos cursos técnicos integrados ao mercado de trabalho.</p>
        <p class="text-secondary">Formação de qualidade nas áreas de: Desenvolvimento, Administração, Meio Ambiente e Farmácia.</p>
        <a href="#desenvolvimento" class="btn btn-primary btn-lg mt-3"><i class="bi bi-arrow-down-circle"></i> Explorar cursos</a>
      </div>
    </section>

    <!-- ========== CARDS DOS CURSOS ========== -->
    <div class="container my-5">
      <!-- Linha com 4 cards (um para cada curso) -->
      <div class="row g-4">

        <!-- Desenvolvimento de Sistemas -->
        <div class="col-md-6 col-lg-3" id="desenvolvimento">
          <div class="card h-100 shadow-sm">
            <img src="https://images.unsplash.com/photo-1581291518633-83b4ebd1d83e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Pessoa programando em notebook">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-code-slash me-2 text-primary"></i>Desenvolvimento de Sistemas</h5>
              <p class="card-text">Aprenda a criar aplicações web, mobile e desktop. Do front-end ao back-end, com as tecnologias mais requisitadas do mercado.</p>
              <p class="fw-semibold mt-3">Disciplinas:</p>
              <ul class="list-unstyled">
                <li><i class="bi bi-check-circle-fill text-success me-1 small"></i> Lógica e Algoritmos</li>
                <li><i class="bi bi-check-circle-fill text-success me-1 small"></i> Banco de Dados</li>
                <li><i class="bi bi-check-circle-fill text-success me-1 small"></i> Programação Web</li>
              </ul>
            </div>
            <div class="card-footer bg-transparent border-0 pb-3">
              <a href="#" class="btn btn-outline-primary w-100">Saiba mais</a>
            </div>
          </div>
        </div>

        <!-- Administração -->
        <div class="col-md-6 col-lg-3" id="administracao">
          <div class="card h-100 shadow-sm">
            <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Pessoas em reunião de negócios">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-bar-chart-steps me-2 text-success"></i>Administração</h5>
              <p class="card-text">Domine gestão de pessoas, finanças, marketing e logística. Prepare-se para liderar equipes e tomar decisões estratégicas.</p>
              <p class="fw-semibold mt-3">Disciplinas:</p>
              <ul class="list-unstyled">
                <li><i class="bi bi-check-circle-fill text-success me-1 small"></i> Gestão de Pessoas</li>
                <li><i class="bi bi-check-circle-fill text-success me-1 small"></i> Contabilidade</li>
                <li><i class="bi bi-check-circle-fill text-success me-1 small"></i> Marketing Digital</li>
              </ul>
            </div>
            <div class="card-footer bg-transparent border-0 pb-3">
              <a href="#" class="btn btn-outline-success w-100">Saiba mais</a>
            </div>
          </div>
        </div>

        <!-- Meio Ambiente -->
        <div class="col-md-6 col-lg-3" id="meio-ambiente">
          <div class="card h-100 shadow-sm">
            <img src="https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Campo com grama e céu">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-tree-fill me-2 text-success"></i>Meio Ambiente</h5>
              <p class="card-text">Atue na preservação ambiental, gestão de recursos naturais, sustentabilidade e licenciamento. Uma área em plena expansão.</p>
              <p class="fw-semibold mt-3">Disciplinas:</p>
              <ul class="list-unstyled">
                <li><i class="bi bi-check-circle-fill text-success me-1 small"></i> Ecologia</li>
                <li><i class="bi bi-check-circle-fill text-success me-1 small"></i> Gestão de Resíduos</li>
                <li><i class="bi bi-check-circle-fill text-success me-1 small"></i> Recursos Hídricos</li>
              </ul>
            </div>
            <div class="card-footer bg-transparent border-0 pb-3">
              <a href="#" class="btn btn-outline-success w-100">Saiba mais</a>
            </div>
          </div>
        </div>

        <!-- Farmácia -->
        <div class="col-md-6 col-lg-3" id="farmacia">
          <div class="card h-100 shadow-sm">
            <img src="https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Laboratório farmacêutico">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-capsule-pill me-2 text-danger"></i>Farmácia</h5>
              <p class="card-text">Técnicas de manipulação, análises clínicas, farmacologia e atendimento. Formação completa para atuar em drogarias e laboratórios.</p>
              <p class="fw-semibold mt-3">Disciplinas:</p>
              <ul class="list-unstyled">
                <li><i class="bi bi-check-circle-fill text-success me-1 small"></i> Farmacologia</li>
                <li><i class="bi bi-check-circle-fill text-success me-1 small"></i> Química Farmacêutica</li>
                <li><i class="bi bi-check-circle-fill text-success me-1 small"></i> Assistência Farmacêutica</li>
              </ul>
            </div>
            <div class="card-footer bg-transparent border-0 pb-3">
              <a href="#" class="btn btn-outline-danger w-100">Saiba mais</a>
            </div>
          </div>
        </div>

      </div> <!-- fim row -->
    </div> <!-- fim container -->

    <!-- ========== SEÇÃO DE DEPOIMENTOS / INFORMAÇÕES EXTRAS (texto de exemplo) ========== -->
    <div class="container my-5">
      <div class="row align-items-center bg-light p-4 rounded-4">
        <div class="col-md-7">
          <h2><i class="bi bi-chat-quote-fill text-secondary me-2"></i>O que nossos alunos dizem</h2>
          <p class="fs-5 fst-italic">"A estrutura dos laboratórios e a didática dos professores fazem toda diferença. Concluí o curso de Farmácia e fui contratado antes mesmo de me formar."</p>
          <p class="fw-bold">— Amanda Souza, ex-aluna de Farmácia</p>
          <hr>
          <p class="fs-5 fst-italic">"O curso de Desenvolvimento de Sistemas me deu base sólida para atuar como dev full-stack. Consegui meu estágio logo no segundo semestre."</p>
          <p class="fw-bold">— Carlos Lima, aluno de Desenvolvimento</p>
        </div>
        <div class="col-md-5 text-center">
          <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="img-fluid rounded-circle shadow" alt="Alunos em sala" style="max-height: 200px; width: auto;">
        </div>
      </div>
    </div>

    <!-- ========== CHAMADA PARA MATRÍCULAS (texto extra) ========== -->
    <div class="container my-5 text-center">
      <div class="p-5 bg-primary text-white rounded-4">
        <h2 class="mb-3">Matrículas abertas para 2025</h2>
        <p class="lead">Garanta sua vaga em um dos nossos cursos técnicos. Ensino reconhecido pelo MEC e parcerias com empresas da região.</p>
        <button class="btn btn-light btn-lg mt-2" type="button"><i class="bi bi-pencil-square me-2"></i>Inscreva-se agora</button>
      </div>
    </div>

    <!-- ========== FOOTER ========== -->
    <footer class="py-4">
      <div class="container text-center">
        <p class="mb-1"><i class="bi bi-c-circle me-1"></i> 2025 Escola Técnica Modelo - Todos os direitos reservados.</p>
        <p class="small">Imagens meramente ilustrativas (via Unsplash). Conteúdo de exemplo para página home.</p>
      </div>
    </footer>

    <!-- Bootstrap JS com Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>