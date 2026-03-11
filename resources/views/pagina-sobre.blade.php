<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sobre Nós | Escola Técnica Modelo</title>
    <!-- Bootstrap 5.3 CSS (mesma configuração) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- Ícones Bootstrap (mesmo estilo) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
      /* mantendo o mesmo padrão de estilo da home */
      .hero-section {
        background-color: #f8f9fa;
        padding: 4rem 2rem;
        border-radius: 0 0 2rem 2rem;
      }
      .navbar-brand {
        font-weight: 600;
        letter-spacing: 0.5px;
      }
      footer {
        background-color: #212529;
        color: #f8f9fa;
      }
      .team-img {
        width: 140px;
        height: 140px;
        object-fit: cover;
        border: 4px solid #fff;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      }
      .timeline-item {
        border-left: 3px solid #0d6efd;
        padding-left: 1.5rem;
        position: relative;
        margin-bottom: 2rem;
      }
      .timeline-item:before {
        content: '';
        width: 16px;
        height: 16px;
        background: #0d6efd;
        border-radius: 50%;
        position: absolute;
        left: -9px;
        top: 0;
      }
    </style>
  </head>
  <body>

    <!-- ========== NAVBAR (idêntica à home, com link ativo para "Sobre") ========== -->
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
              <a class="nav-link" href="{{ route('pagina-principal') }}">Home</a>
            </li>
            <!-- Links de cursos (mantidos para consistência, mas apontam para home) -->
            <li class="nav-item">
              <a class="nav-link" href="{{ route('pagina-desenvolvimento') }}">Desenvolvimento</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('pagina-administração') }}">Administração</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('pagina-meio-ambiente') }}">Meio Ambiente</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('pagina-farmacia') }}">Farmácia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('pagina-contato') }}">Contato</a>
            </li>
            <!-- Link SOBRE em destaque como ativo -->
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Sobre</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- ========== HERO DA PÁGINA SOBRE (compatível com a home) ========== -->
    <section class="hero-section text-center" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
      <div class="container">
        <h1 class="display-4 fw-bold"><i class="bi bi-building me-3"></i>Sobre Nós</h1>
        <p class="lead">Conheça a história, os valores e as pessoas por trás da Escola Técnica Modelo.</p>
        <p class="text-secondary">Mais de 15 anos formando profissionais para o mercado.</p>
      </div>
    </section>

    <!-- ========== NOSSA HISTÓRIA (COM TEXTO EXEMPLO) ========== -->
    <div class="container my-5">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="mb-5">
            <h2 class="border-bottom pb-3 mb-4"><i class="bi bi-clock-history me-2 text-primary"></i>Nossa trajetória</h2>
            <div class="row">
              <div class="col-md-6">
                <p class="fs-5">A <strong>Escola Técnica Modelo</strong> nasceu em 2009 da visão de dois educadores que acreditavam no ensino profissionalizante como ferramenta de transformação social. Começamos com dois cursos (Administração e Meio Ambiente) e 80 alunos em uma pequena sede no centro da cidade.</p>
                <p>Ao longo dos anos, expandimos nossa atuação para áreas estratégicas como Desenvolvimento de Sistemas e Farmácia, sempre acompanhando as demandas do mercado. Em 2023, fomos eleitos a melhor escola técnica da região pelo quarto ano consecutivo.</p>
              </div>
              <div class="col-md-6">
                <div class="bg-light p-4 rounded-4">
                  <h5><i class="bi bi-award-fill text-warning me-2"></i>Conquistas recentes</h5>
                  <ul class="list-unstyled">
                    <li class="mb-2"><i class="bi bi-check-lg text-success me-2"></i>+ 3.500 alunos formados</li>
                    <li class="mb-2"><i class="bi bi-check-lg text-success me-2"></i>Convênio com 150+ empresas</li>
                    <li class="mb-2"><i class="bi bi-check-lg text-success me-2"></i>Nota máxima no MEC (cursos técnicos)</li>
                    <li class="mb-2"><i class="bi bi-check-lg text-success me-2"></i>Laboratórios modernizados em 2024</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <!-- Linha do tempo simples (texto de exemplo) -->
          <h3 class="mb-4"><i class="bi bi-signpost-2 me-2 text-primary"></i>Marcos da nossa história</h3>
          <div class="row">
            <div class="col-md-6">
              <div class="timeline-item">
                <h5>2009 - Fundação</h5>
                <p>Inauguração com os cursos de Administração e Meio Ambiente, atendendo 80 alunos.</p>
              </div>
              <div class="timeline-item">
                <h5>2014 - Primeira expansão</h5>
                <p>Novo campus e lançamento do curso técnico em Farmácia.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="timeline-item">
                <h5>2018 - Chegada da tecnologia</h5>
                <p>Criação do curso de Desenvolvimento de Sistemas e parceria com empresas de TI.</p>
              </div>
              <div class="timeline-item">
                <h5>2025 - Meta alcançada</h5>
                <p>Mais de 4.000 alunos matriculados e reconhecimento como centro de excelência.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ========== FUNDADORES (EQUIPE) ========== -->
    <div class="container my-5">
      <h2 class="text-center mb-5 border-bottom pb-3"><i class="bi bi-people-fill me-2 text-primary"></i>Nossos fundadores</h2>
      <div class="row g-4">
        <!-- Fundador 1 -->
        <div class="col-lg-3 col-md-6">
          <div class="card h-100 border-0 shadow-sm text-center p-3">
            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" class="team-img rounded-circle mx-auto mt-3" alt="Foto de João Pedro">
            <div class="card-body">
              <h5 class="card-title">João Pedro da Silva</h5>
              <p class="text-primary fw-semibold">Co-fundador & Diretor Pedagógico</p>
              <p class="card-text small">Mestre em Educação Profissional, com 20 anos de experiência em gestão escolar. Idealizador da metodologia de ensino por projetos.</p>
            </div>
          </div>
        </div>
        <!-- Fundador 2 -->
        <div class="col-lg-3 col-md-6">
          <div class="card h-100 border-0 shadow-sm text-center p-3">
            <img src="https://images.unsplash.com/photo-1494790108777-766fd04f0b6f?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" class="team-img rounded-circle mx-auto mt-3" alt="Foto de Ana Lúcia">
            <div class="card-body">
              <h5 class="card-title">Ana Lúcia Mendes</h5>
              <p class="text-primary fw-semibold">Co-fundadora & Diretora Administrativa</p>
              <p class="card-text small">Administradora com MBA em Gestão de Pessoas. Responsável pela expansão da escola e parcerias com o setor produtivo.</p>
            </div>
          </div>
        </div>
        <!-- Fundador 3 (membro posterior, para completar) -->
        <div class="col-lg-3 col-md-6">
          <div class="card h-100 border-0 shadow-sm text-center p-3">
            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" class="team-img rounded-circle mx-auto mt-3" alt="Foto de Carlos Eduardo">
            <div class="card-body">
              <h5 class="card-title">Carlos Eduardo Rocha</h5>
              <p class="text-primary fw-semibold">Coordenador Técnico</p>
              <p class="card-text small">Engenheiro ambiental e especialista em sustentabilidade. Integrou a equipe em 2010 e tornou-se sócio em 2015.</p>
            </div>
          </div>
        </div>
        <!-- Fundador 4 (membro da área da saúde) -->
        <div class="col-lg-3 col-md-6">
          <div class="card h-100 border-0 shadow-sm text-center p-3">
            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" class="team-img rounded-circle mx-auto mt-3" alt="Foto de Fernanda Costa">
            <div class="card-body">
              <h5 class="card-title">Fernanda Costa</h5>
              <p class="text-primary fw-semibold">Coordenadora do curso de Farmácia</p>
              <p class="card-text small">Farmacêutica clínica, doutora em Ciências Farmacêuticas. À frente da implementação do laboratório de análises.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Texto complementar sobre os fundadores (exemplo) -->
      <div class="alert alert-light bg-light border-0 mt-4 p-4 rounded-4">
        <p class="mb-0"><i class="bi bi-quote fs-1 text-primary opacity-50 me-2"></i> A Escola Técnica Modelo nasceu do sonho de oferecer educação de qualidade que realmente preparasse os jovens para o mercado de trabalho. Mais do que professores, somos uma família que acolhe e transforma vidas. <span class="fw-bold">— João Pedro e Ana Lúcia</span></p>
      </div>
    </div>

    <!-- ========== MISSÃO, VISÃO E VALORES (texto de exemplo) ========== -->
    <div class="container my-5">
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card h-100 border-0 bg-light text-center p-4">
            <i class="bi bi-bullseye display-3 text-primary mb-3"></i>
            <h4>Missão</h4>
            <p>Formar profissionais éticos, críticos e competentes, contribuindo para o desenvolvimento socioeconômico da região através da educação técnica de excelência.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 border-0 bg-light text-center p-4">
            <i class="bi bi-eye-fill display-3 text-primary mb-3"></i>
            <h4>Visão</h4>
            <p>Ser referência nacional em ensino técnico até 2030, reconhecida pela inovação pedagógica e pela empregabilidade de seus alunos.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 border-0 bg-light text-center p-4">
            <i class="bi bi-gem display-3 text-primary mb-3"></i>
            <h4>Valores</h4>
            <p>Ética, Inovação, Sustentabilidade, Respeito à diversidade e Compromisso com o sucesso do aluno.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- ========== NÚMEROS DA ESCOLA (texto extra) ========== -->
    <div class="container my-5">
      <div class="row text-center bg-primary bg-opacity-10 p-5 rounded-5">
        <div class="col-6 col-md-3">
          <h2 class="display-5 fw-bold text-primary">+15</h2>
          <p>Anos de história</p>
        </div>
        <div class="col-6 col-md-3">
          <h2 class="display-5 fw-bold text-primary">4.2k</h2>
          <p>Alunos formados</p>
        </div>
        <div class="col-6 col-md-3">
          <h2 class="display-5 fw-bold text-primary">150+</h2>
          <p>Empresas parceiras</p>
        </div>
        <div class="col-6 col-md-3">
          <h2 class="display-5 fw-bold text-primary">48</h2>
          <p>Docentes especializados</p>
        </div>
      </div>
    </div>

    <!-- ========== FOOTER (idêntico ao da home) ========== -->
    <footer class="py-4">
      <div class="container text-center">
        <p class="mb-1"><i class="bi bi-c-circle me-1"></i> 2025 Escola Técnica Modelo - Todos os direitos reservados.</p>
        <p class="small">Imagens meramente ilustrativas (via Unsplash). Conteúdo de exemplo para página sobre.</p>
      </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>