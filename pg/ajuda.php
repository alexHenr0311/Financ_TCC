<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link rel="stylesheet" href="../css/ajuda.css" />
  <link rel="shortcut icon" href="../img/icon_title.png" />
  <title>Central de ajuda</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</head>

<body>
  <div class="row g-3 m-0">
    <!-- ------------------- volume para dar espaçamento ------------------- -->
    <div class="col-2 navbar-lateral-fantasma">
      <!-- sem conteúdo -->
    </div>
    <!-- ------------------- volume para dar espaçamento fim ------------------- -->

    <!-- ------------------- navbar-lateral fixada ------------------- -->
    <div class="navbar-lateral text-center m-0">
      <div class="row g-5">
        <div class="col-12">
          <a href="home.php" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Home">
            <img src="../img/icon_title.png" alt="" class="img-fluid" />
          </a>
        </div>
        <div class="col-12">
          <a href="orcamentos.php" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Orçamentos">
            <i class="bi bi-cash-coin"></i>
          </a>
        </div>
        <div class="col-12">
          <a href="despesas.php" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Despesas">
            <i class="bi bi-graph-down-arrow"></i>
          </a>
        </div>
        <div class="col-12">
          <a href="receitas.php" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Receitas">
            <i class="bi bi-graph-up-arrow"></i>
          </a>
        </div>
        <div class="col-12">
          <a href="relatorios.php" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Relatórios">
            <i class="bi bi-graph-up"></i>
          </a>
        </div>
        <div class="col-12">
          <a href="configuracoes.php" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Configurações">
            <i class="bi bi-gear"></i>
          </a>
        </div>
        <div class="col-12">
          <a href="ajuda.php" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Ajuda">
            <i class="bi bi-info-circle"></i>
          </a>
        </div>
      </div>
    </div>
    <!-- ------------------- navbar-lateral fixada fim ------------------- -->

    <div class="col-10">
      <!-- ------------------- CABEÇALHO DA PG ------------------- -->
      <!-- ------------------- User icon, notificações e logout ------------------- -->
      <header>
        <div class="container">
          <div class="row">
            <div class="col-6">
              <div class="titulo-bloco">
                <h2 class="mt-3">Central de ajuda</h2>
              </div>
            </div>
            <div class="col-6">
              <div class="user-config">
                <div class="btn-group">
                  <button type="button" class="btn-dropdown dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="bi bi-person-circle"></i>
                  </button>
                  <button style="border: none; background-color: white" data-bs-toggle="popover"
                    data-bs-title="Notificações" data-bs-content="Sem notificações" data-bs-placement="bottom">
                    <i class="bi bi-bell-fill"></i>
                  </button>
                  <ul class="dropdown-menu">
                    <li>
                      <a class="dropdown-item dropdown-item-mobile" href="home.php">Home</a>
                    </li>
                    <li>
                      <a class="dropdown-item dropdown-item-mobile" href="orcamentos.php">Orçamentos</a>
                    </li>
                    <li>
                      <a class="dropdown-item dropdown-item-mobile" href="despesas.php">Despesas</a>
                    </li>
                    <li>
                      <a class="dropdown-item dropdown-item-mobile" href="receitas.php">Receitas</a>
                    </li>
                    <li>
                      <a class="dropdown-item dropdown-item-mobile" href="relatorios.php">Relatórios</a>
                    </li>
                    <li>
                      <a class="dropdown-item dropdown-item-mobile" href="configuracoes.php">Configurações</a>
                    </li>
                    <li>
                      <a class="dropdown-item dropdown-item-mobile" href="ajuda.php">Ajuda</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="../php/logoff.php">Sair</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- ------------------- CABEÇALHO DA PG fim ------------------- -->
      <!-- ------------------- User icon, notificações e logout fim ------------------- -->

      <!-- ------------------- Conteúdo da pg ------------------- -->
        <form class="d-flex mt-5" role="search">
          <i class="fa-solid fa-magnifying-glass"></i>
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Pesquisar" />
          <button class="btn btn-danger" type="submit">Pesquisar</button>
        </form>

      <div class="text-center">
        <img class="img-fluid w-50 img-ajuda-principal" src="../img/central_ajuda.png" alt="tela_vazia" />
        <h3 class="mt-5">Responda todas suas dúvidas aqui</h3>
      </div>

      <div class="container">
        <div class="row g-3 cards-ajuda">
          <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100">
              <img src="../img/ajuda_1.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title text-center">Meus dados</h5>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100">
              <img src="../img/ajuda_2.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title text-center">Conta</h5>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100">
              <img src="../img/ajuda_3.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title text-center">Como usar o site?</h5>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100">
              <img src="../img/ajuda_4.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title text-center">Problemas com receitas</h5>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100">
              <img src="../img/ajuda_5.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title text-center">Problemas com despesas</h5>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-4">
            <div class="card h-100">
              <img src="../img/ajuda_6.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title text-center">Problemas com orçamentos</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ------------------- Conteúdo da pg fim ------------------- -->
    </div>
  </div>

  <!-- ------------------- popover ------------------- -->
  <script src="../js/popup_notificacoes.js"></script>
  <!-- ------------------- popover fim ------------------- -->
</body>

</html>