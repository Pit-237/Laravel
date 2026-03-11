<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contato | Escola Técnica Modelo</title>
    <!-- Bootstrap 5.3 CSS (mesma configuração) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- Ícones Bootstrap (mesmo estilo) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
      /* mantendo o mesmo padrão de estilo das páginas anteriores */
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
      .contact-icon {
        font-size: 2rem;
        color: #0d6efd;
        margin-right: 1rem;
      }
      .map-container {
        width: 100%;
        height: 300px;
        border-radius: 1rem;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      }
      .map-container iframe {
        width: 100%;
        height: 100%;
        border: 0;
      }
      .form-control, .form-select {
        border-radius: 0.5rem;
        padding: 0.75rem 1rem;
      }
      .btn-submit {
        padding: 0.75rem 2rem;
        border-radius: 2rem;
      }
    </style>
  </head>
  <body>

    <!-- ========== NAVBAR (idêntica às anteriores, com link ativo para "Contato") ========== -->
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
            <li class="nav-item">
              <a class="nav-link" href="#">Desenvolvimento</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#administracao">Administração</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#meio-ambiente">Meio Ambiente</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#farmacia">Farmácia</a>
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

    <!-- ========== HERO DA PÁGINA CONTATO ========== -->
    <section class="hero-section text-center" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
      <div class="container">
        <h1 class="display-4 fw-bold"><i class="bi bi-envelope-paper me-3"></i>Fale Conosco</h1>
        <p class="lead">Estamos prontos para atender você. Tire dúvidas, solicite informações ou agende uma visita.</p>
        <p class="text-secondary">Retornamos em até 24 horas em dias úteis.</p>
      </div>
    </section>

    <!-- ========== INFORMAÇÕES DE CONTATO (CARDS SUPERIORES) ========== -->
    <div class="container my-5">
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm text-center p-4">
            <i class="bi bi-geo-alt-fill contact-icon mx-auto mb-3" style="font-size: 2.5rem;"></i>
            <h5>Visite-nos</h5>
            <p class="mb-0">Av. Paulista, 1500<br>Bela Vista, São Paulo - SP<br>CEP 01310-100</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm text-center p-4">
            <i class="bi bi-telephone-fill contact-icon mx-auto mb-3" style="font-size: 2.5rem;"></i>
            <h5>Central de Atendimento</h5>
            <p class="mb-0">(11) 3456-7890<br>WhatsApp: (11) 98765-4321<br>Segunda a Sexta, 8h às 20h</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card h-100 border-0 shadow-sm text-center p-4">
            <i class="bi bi-envelope-fill contact-icon mx-auto mb-3" style="font-size: 2.5rem;"></i>
            <h5>Canais de E-mail</h5>
            <p class="mb-0">contato@escolatecnicamodelo.edu.br<br>secretaria@escolatecnicamodelo.edu.br<br>suporte@escolatecnicamodelo.edu.br</p>
          </div>
        </div>
      </div>
    </div>

    <!-- ========== FORMULÁRIO DE CONTATO + MAPA ========== -->
    <div class="container my-5">
      <div class="row g-5">
        <!-- Coluna do Formulário -->
        <div class="col-lg-7">
          <h3 class="mb-4"><i class="bi bi-chat-dots-fill me-2 text-primary"></i>Envie uma mensagem</h3>
          <form class="needs-validation" novalidate>
            <div class="row g-3">
              <div class="col-md-6">
                <label for="nome" class="form-label fw-semibold">Seu nome</label>
                <input type="text" class="form-control" id="nome" placeholder="Ex: Maria Oliveira" required>
                <div class="invalid-feedback">Por favor, informe seu nome.</div>
              </div>
              <div class="col-md-6">
                <label for="email" class="form-label fw-semibold">E-mail</label>
                <input type="email" class="form-control" id="email" placeholder="maria@email.com" required>
                <div class="invalid-feedback">E-mail válido é obrigatório.</div>
              </div>
              <div class="col-12">
                <label for="telefone" class="form-label fw-semibold">Telefone / WhatsApp</label>
                <input type="tel" class="form-control" id="telefone" placeholder="(11) 98765-4321">
              </div>
              <div class="col-12">
                <label for="assunto" class="form-label fw-semibold">Assunto</label>
                <select class="form-select" id="assunto" required>
                  <option selected disabled value="">Escolha...</option>
                  <option>Informações sobre cursos</option>
                  <option>Matrículas e documentação</option>
                  <option>Parcerias com empresas</option>
                  <option>Visita à escola</option>
                  <option>Outros assuntos</option>
                </select>
                <div class="invalid-feedback">Selecione um assunto.</div>
              </div>
              <div class="col-12">
                <label for="mensagem" class="form-label fw-semibold">Mensagem</label>
                <textarea class="form-control" id="mensagem" rows="5" placeholder="Digite sua mensagem com detalhes..." required></textarea>
                <div class="invalid-feedback">Escreva sua mensagem.</div>
              </div>
              <div class="col-12">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="receberNovidades">
                  <label class="form-check-label" for="receberNovidades">
                    Quero receber novidades sobre cursos e eventos por e-mail.
                  </label>
                </div>
              </div>
              <div class="col-12 mt-4">
                <button class="btn btn-primary btn-submit" type="submit"><i class="bi bi-send me-2"></i>Enviar mensagem</button>
                <button class="btn btn-outline-secondary btn-submit ms-2" type="reset"><i class="bi bi-eraser me-2"></i>Limpar</button>
              </div>
            </div>
          </form>
          <!-- Exemplo de texto adicional -->
          <p class="text-muted small mt-4"><i class="bi bi-info-circle me-1"></i>Seu contato é seguro. Não compartilhamos seus dados.</p>
        </div>

        <!-- Coluna do Mapa e outros contatos rápidos -->
        <div class="col-lg-5">
          <h3 class="mb-4"><i class="bi bi-map-fill me-2 text-primary"></i>Localização</h3>
          <div class="map-container mb-4">
            <!-- Mapa incorporado (exemplo com OpenStreetMap via iframe) -->
            <iframe src="https://www.openstreetmap.org/export/embed.html?bbox=-46.657%2C-23.564%2C-46.651%2C-23.558&amp;layer=mapnik&amp;marker=-23.561%2C-46.654" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <!-- Redes Sociais (texto de exemplo) -->
          <div class="bg-light p-4 rounded-4">
            <h5><i class="bi bi-share-fill me-2 text-primary"></i>Siga nossas redes</h5>
            <div class="d-flex justify-content-around mt-3">
              <a href="#" class="text-decoration-none text-dark"><i class="bi bi-facebook fs-1 text-primary"></i></a>
              <a href="#" class="text-decoration-none text-dark"><i class="bi bi-instagram fs-1 text-danger"></i></a>
              <a href="#" class="text-decoration-none text-dark"><i class="bi bi-linkedin fs-1 text-primary"></i></a>
              <a href="#" class="text-decoration-none text-dark"><i class="bi bi-youtube fs-1 text-danger"></i></a>
            </div>
            <p class="text-center mt-3 small">@escolatecnicamodelo</p>
          </div>
          <!-- Horário de funcionamento (exemplo) -->
          <div class="mt-4 p-3 border rounded-3">
            <h6><i class="bi bi-clock-history me-2"></i>Horário de atendimento presencial</h6>
            <p class="mb-1">Segunda a sexta: 8h às 21h</p>
            <p class="mb-0">Sábados: 9h às 13h</p>
          </div>
        </div>
      </div>
    </div>

    <!-- ========== FAQ RÁPIDO / TEXTO EXEMPLO ========== -->
    <div class="container my-5">
      <div class="accordion" id="accordionFAQ">
        <h3 class="mb-4"><i class="bi bi-question-circle-fill me-2 text-primary"></i>Perguntas frequentes (FAQ)</h3>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true">
              Quais são os prazos de matrícula?
            </button>
          </h2>
          <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#accordionFAQ">
            <div class="accordion-body">
              As matrículas para o primeiro semestre de 2025 vão até 15 de fevereiro. Para o segundo semestre, até 15 de julho. Recomendamos entrar em contato com antecedência.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false">
              A escola oferece visitas guiadas?
            </button>
          </h2>
          <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
            <div class="accordion-body">
              Sim! Oferecemos visitas monitoradas às quartas-feiras, às 15h. É necessário agendar pelo telefone ou e-mail.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false">
              Como faço para solicitar documentos antigos?
            </button>
          </h2>
          <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
            <div class="accordion-body">
              Basta enviar um e-mail para secretaria@escolatecnicamodelo.edu.br com seu nome completo, CPF e ano de conclusão. O prazo de emissão é de até 10 dias úteis.
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- ========== FOOTER (idêntico ao das outras páginas) ========== -->
    <footer class="py-4">
      <div class="container text-center">
        <p class="mb-1"><i class="bi bi-c-circle me-1"></i> 2025 Escola Técnica Modelo - Todos os direitos reservados.</p>
        <p class="small">Imagens meramente ilustrativas. Conteúdo de exemplo para página de contato.</p>
      </div>
    </footer>

    <!-- Bootstrap JS (necessário para validação e accordion) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <!-- Script simples para validação de formulário (opcional, apenas para desabilitar submit se inválido) -->
    <script>
      (function() {
        'use strict';
        const forms = document.querySelectorAll('.needs-validation');
        Array.from(forms).forEach(form => {
          form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
              event.preventDefault();
              event.stopPropagation();
            } else {
              event.preventDefault(); // remove isso se quiser enviar de verdade
              alert('Mensagem enviada com sucesso! (simulação)');
              form.reset();
              form.classList.remove('was-validated');
            }
            form.classList.add('was-validated');
          }, false);
        });
      })();
    </script>
  </body>
</html>