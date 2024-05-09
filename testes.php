<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal com Bootstrap</title>
    <!-- CSS do Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilo para o hr vertical */
        .vertical-hr {
            height: 100%;
            border-left: 1px solid #ccc;
            margin-left: 15px;
            margin-right: 15px;
        }

        /* Estilo para as imagens */
        .nav-link img {
            width: 5em; /* Tamanho das imagens em "em" */
            height: 5em; /* Tamanho das imagens em "em" */
            object-fit: cover; /* Para manter proporção da imagem */
            margin-bottom: 0.5em; /* Espaçamento entre as imagens */
        }

        /* Estilo para o modal */
        .custom-modal {
            width: 80vw; /* 80% da largura da janela */
            height: 80vh; /* 80% da altura da janela (important para garantir prioridade) */
            max-height: none;
            max-width: none; /* Remover largura máxima para permitir 80% da largura */
            margin: auto; /* Centralizar o modal na tela */
        }

        /* Estilo para habilitar scroll */
        .scrollable {
            max-height: 60vh; /* Altura máxima para habilitar scroll */
            overflow-y: auto; /* Habilitar scroll vertical */
        }
    </style>
</head>
<body>

<!-- Botão que abre o modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#meuModal">
  Abrir Modal
</button>

<!-- Modal -->
<div class="modal fade h-100" id="meuModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered custom-modal"> <!-- modal centralizado com classe custom-modal -->
    <div class="modal-content h-100">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Meu Modal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <!-- Lado Esquerdo: Menu Vertical com Imagens (com scroll) -->
            <div class="col-md-4 scrollable">
              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link" href="#">
                  <img src="https://via.placeholder.com/150" alt="Imagem 1" class="img-fluid">
                </a>
                <a class="nav-link" href="#">
                  <img src="https://via.placeholder.com/150" alt="Imagem 2" class="img-fluid">
                </a>
                <!-- Adicione mais imagens aqui conforme necessário -->
              </div>
            </div>
            <!-- Divisor Vertical (hr na vertical) -->
            <div class="col-md-1 d-none d-md-block">
              <hr class="vertical-hr"> <!-- Apenas visível em telas médias e grandes -->
            </div>
            <!-- Lado Direito: Texto (com scroll) -->
            <div class="col-md-7 scrollable">
              <p>Texto qualquer que não está relacionado à seleção de imagens.</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lobortis velit nec mi convallis, id fringilla ex volutpat.</p>
              <!-- Adicione mais conteúdo de texto aqui conforme necessário -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- JavaScript do Bootstrap (necessário para funcionalidades como modais) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
