<?php
// Caminho completo para o arquivo atual
$filePath = __DIR__; // Use __DIR__ para obter o diretório atual do script

// Obter o nome da última pasta no caminho do diretório
$lastDirectoryName = basename($filePath);



// Inicia a sessão para manter a persistência de dados entre as requisições
session_start();

// Configurações da base de dados
$db_host = 'localhost'; // Host do banco de dados
$db_name = 'concertpulse'; // Nome do banco de dados
$db_user = 'root'; // Usuário do banco de dados
$db_pass = ''; // Senha do banco de dados

// Tenta estabelecer a conexão com o banco de dados usando o PDO
try {
    // Cria uma nova instância da classe PDO para estabelecer a conexão com o banco de dados
    $pdo = new PDO('mysql:host=' . $db_host . ';dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);

    // Configuração do PDO para lançar exceções em caso de erros, facilitando a detecção e tratamento de problemas na conexão
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $exception) {
    // Se ocorrer uma exceção durante a conexão, encerra o script exibindo uma mensagem de erro
    exit('Falha ao conectar ao banco de dados!');
}


// Prepara uma consulta SQL utilizando o PDO para selecionar todos os campos da tabela 'accounts' onde o email corresponde ao email do perfil do usuário do Google
$stmt = $pdo->prepare('SELECT * FROM accounts WHERE url = ?');

// Executa a consulta SQL, substituindo o marcador de posição '?' pelo valor do endereço de e-mail do perfil do usuário do Google
$stmt->execute([$lastDirectoryName]);

// Obtém o resultado da consulta
$result = $stmt->fetch(); // Retorna a primeira linha do resultado como um array associativo


if ($result) {
    // O ID retornado pela consulta
    $id = $result['id'];

} else {
}



// Conexão com o banco de dados (substitua com suas credenciais)
$db_host = "localhost";
$db_name = "concertpulse";
$db_user = "root";
$db_pass = "";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);


$name = "";
$image_url = "";
$location = "";
$type = "";

$shows = 0;
$follows = 0;
$rating = 0;
$valor = 0;





$sql_infos = "SELECT * FROM accounts WHERE id = ?";
$stmt_infos = $conn->prepare($sql_infos);
$stmt_infos->bind_param("i", $id);
$stmt_infos->execute();
$result_infos = $stmt_infos->get_result();
$row_infos = $result_infos->fetch_assoc();
$sobre = $row_infos["about"];
$nome = $row_infos["name"];
$email = $row_infos["email"];
$numero = $row_infos["number"];
$localizacao = $row_infos["location"];
$facebook = $row_infos["facebook"];
$type_utilizador = $row_infos["type"];
$fotodeperfil = $row_infos["picture"];
$fotodecapa = $row_infos["picture_background"];



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../assets/img/favicon.png">
    <title>
        ConcertPulse Artist
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

    <!-- Nucleo Icons -->
    <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />

    <!-- CSS Files -->
    <link id="pagestyle" href="../../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />

    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>

<body class="g-sidenav-show bg-gray-100">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3"
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="../../dashboard.php">
                <img src="../../img/logo.png" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold">Concert Pulse Artist's</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse w-auto h-100 " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="../../dashboard.php">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <svg width="12px" height="12px" viewBox="0 0 40 44" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>document</title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF"
                                        fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g transform="translate(154.000000, 300.000000)">
                                                <path class="color-background opacity-6"
                                                    d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z">
                                                </path>
                                                <path class="color-background"
                                                    d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./pages/profile.html">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>customer-support</title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF"
                                        fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g transform="translate(1.000000, 0.000000)">
                                                <path class="color-background opacity-6"
                                                    d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z">
                                                </path>
                                                <path class="color-background"
                                                    d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z">
                                                </path>
                                                <path class="color-background"
                                                    d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Profile</span>
                    </a>
                </li>

                <?php
                // Conexão com o banco de dados (substitua com suas credenciais)
                $db_host = "localhost";
                $db_name = "concertpulse";
                $db_user = "root";
                $db_pass = "";

                $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

                if ($conn->connect_error) {
                    die("Erro de conexão: " . $conn->connect_error);
                }

                $iddoutilizador = $_SESSION['user_id'];

                // Query para buscar os dados dos artistas
                $sql = "SELECT function FROM accounts WHERE id = $iddoutilizador";
                $result = $conn->query($sql);


                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {

                        if ($row['function'] == 2) {
                            echo '
              
              <li class="nav-item">
          <a class="nav-link" href="../../registarevento.php">
            <div
              class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
              <svg width="12px" height="20px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <title>spaceship</title>
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g transform="translate(-1720.000000, -592.000000)" fill="#FFFFFF" fill-rule="nonzero">
                    <g transform="translate(1716.000000, 291.000000)">
                      <g transform="translate(4.000000, 301.000000)">
                        <path class="color-background"
                          d="M39.3,0.706666667 C38.9660984,0.370464027 38.5048767,0.192278529 38.0316667,0.216666667 C14.6516667,1.43666667 6.015,22.2633333 5.93166667,22.4733333 C5.68236407,23.0926189 5.82664679,23.8009159 6.29833333,24.2733333 L15.7266667,33.7016667 C16.2013871,34.1756798 16.9140329,34.3188658 17.535,34.065 C17.7433333,33.98 38.4583333,25.2466667 39.7816667,1.97666667 C39.8087196,1.50414529 39.6335979,1.04240574 39.3,0.706666667 Z M25.69,19.0233333 C24.7367525,19.9768687 23.3029475,20.2622391 22.0572426,19.7463614 C20.8115377,19.2304837 19.9992882,18.0149658 19.9992882,16.6666667 C19.9992882,15.3183676 20.8115377,14.1028496 22.0572426,13.5869719 C23.3029475,13.0710943 24.7367525,13.3564646 25.69,14.31 C26.9912731,15.6116662 26.9912731,17.7216672 25.69,19.0233333 L25.69,19.0233333 Z">
                        </path>
                        <path class="color-background opacity-6"
                          d="M1.855,31.4066667 C3.05106558,30.2024182 4.79973884,29.7296005 6.43969145,30.1670277 C8.07964407,30.6044549 9.36054508,31.8853559 9.7979723,33.5253085 C10.2353995,35.1652612 9.76258177,36.9139344 8.55833333,38.11 C6.70666667,39.9616667 0,40 0,40 C0,40 0,33.2566667 1.855,31.4066667 Z">
                        </path>
                        <path class="color-background opacity-6"
                          d="M17.2616667,3.90166667 C12.4943643,3.07192755 7.62174065,4.61673894 4.20333333,8.04166667 C3.31200265,8.94126033 2.53706177,9.94913142 1.89666667,11.0416667 C1.5109569,11.6966059 1.61721591,12.5295394 2.155,13.0666667 L5.47,16.3833333 C8.55036617,11.4946947 12.5559074,7.25476565 17.2616667,3.90166667 L17.2616667,3.90166667 Z">
                        </path>
                        <path class="color-background opacity-6"
                          d="M36.0983333,22.7383333 C36.9280725,27.5056357 35.3832611,32.3782594 31.9583333,35.7966667 C31.0587397,36.6879974 30.0508686,37.4629382 28.9583333,38.1033333 C28.3033941,38.4890431 27.4704606,38.3827841 26.9333333,37.845 L23.6166667,34.53 C28.5053053,31.4496338 32.7452344,27.4440926 36.0983333,22.7383333 L36.0983333,22.7383333 Z">
                        </path>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </div>
            <span class="nav-link-text ms-1">Registar Evento</span>
          </a>
        </li>
              
              ';
                        }
                    }
                }

                ?>

            </ul>
        </div>
        <div class="sidenav-footer mx-3 ">
            <div class="card card-background shadow-none card-background-mask-secondary" id="sidenavCard">
                <div class="full-background"
                    style="background-image: url('../../assets/img/curved-images/white-curved.jpg')"></div>
            </div>
        </div>
    </aside>
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100 py-3">
        <!-- Navbar -->
        <nav
            class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-absolute px-4 w-100 z-index-2">
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 ps-2 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="text-dark opacity-5" href="javascript:;">Pages</a>
                        </li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Profile</li>
                    </ol>
                    <h6 class="text-dark font-weight-bolder ms-2">Profile</h6>
                </nav>
                <div class="collapse navbar-collapse me-md-0 me-sm-4 mt-sm-0 mt-2" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    </div>
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item d-xl-none ps-3 pe-0 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0">
                                <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                    <div class="sidenav-toggler-inner">
                                        <i class="sidenav-toggler-line bg-white"></i>
                                        <i class="sidenav-toggler-line bg-white"></i>
                                        <i class="sidenav-toggler-line bg-white"></i>
                                    </div>
                                </a>
                            </a>
                        </li>
                        <li class="nav-item dropdown pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell cursor-pointer text-dark h5"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end px-2 py-3 ms-n4"
                                aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="../../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New message</span> from Laur
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    13 minutes ago
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="../../assets/img/small-logos/logo-spotify.svg"
                                                    class="avatar avatar-sm bg-gradient-dark me-3">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New album</span> by Travis Scott
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    1 day
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="avatar avatar-sm bg-gradient-secondary me-3 my-auto">
                                                <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>credit-card</title>
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g transform="translate(-2169.000000, -745.000000)"
                                                            fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(453.000000, 454.000000)">
                                                                    <path class="color-background"
                                                                        d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                        opacity="0.593633743"></path>
                                                                    <path class="color-background"
                                                                        d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    Payment successfully completed
                                                </h6>
                                                <p class="text-xs text-secondary mb-0">
                                                    <i class="fa fa-clock me-1"></i>
                                                    2 days
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-white p-0">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer h5 text-dark"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        <!-- End Navbar -->
        <div class="container-fluid w-90" style="margin-top: 9.5em;">
            <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
                <div class="row gx-4">
                    <div class="col-lg-12 col-md-12 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                        <div class="nav-wrapper position-relative end-0 ms-5">
                            <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 active" href="javascript:mostrarSobre();"
                                        role="tab" id="sobre_nav">
                                        <i class="fas fa-user-edit text-sm" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Edit Profile"></i>
                                        <span class="ms-1">Sobre</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1" href="javascript:mostrarAgenda();"
                                        id="agenda_nav" role="tab">
                                        <i class="ni ni-calendar-grid-58 text-sm" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Agenda"></i>
                                        <span class="ms-1">Agenda</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1" id="projetos_nav"
                                        href="javascript:mostrarProjetos();" role="tab" aria-selected="false">
                                        <i class="ni ni-book-bookmark text-sm" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Agenda"></i>
                                        <span class="ms-1">Projetos</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1" id="perfil_nav"
                                        href="javascript:mostrarPerfil();" role="tab" aria-selected="false">
                                        <i class="ni ni-circle-08" data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Agenda"></i>
                                        <span class="ms-1">Foto de Perfil/Capa</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid py-4 editar w-90">

            <div class="form-group" id="ver_sobre">
                <div class="row">
                    <div class="col-12 col-xl-6">
                        <div class="card h-100 p-3">
                            <label for="example-text-input" class="col-auto col-form-label">Nome</label>
                            <input class="form-control mb-4" type="text" value="John Snow" id="alterar_nome">

                            <label for="example-text-input" class="col-auto col-form-label">Numero</label>
                            <input class="form-control mb-4" type="text" value="913 123 123" id="alterar_numero">

                            <label for="example-text-input" class="col-auto col-form-label">Email</label>
                            <input class="form-control mb-4" type="text" value="utilizador@gmail.com"
                                id="alterar_email">

                            <label for="example-text-input" class="col-auto col-form-label">País</label>
                            <input class="form-control mb-4" type="text" value="Amadora" id="alterar_localizacao">

                            <!-- por scrollbar em vez disto -->
                            <label for="example-text-input" class="col-auto col-form-label">Nome</label>
                            <textarea class="form-control" id="alterar_sobre" rows="3"
                                style="overflow-y: scroll; resize: none; height: 15em;"></textarea>

                        </div>
                    </div>


                    <div class="container-fluid col-6 col-xl-6">


                        <div class="col-6 col-xl-12">
                            <div class="card p-3">

                                <div class="row align-items-center">
                                    <label for="example-text-input" class="col-auto col-form-label">Linked In</label>
                                    <div class="col">
                                        <div class="form-check form-switch float-end">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
                                                checked="">
                                        </div>
                                    </div>
                                </div>

                                <input class="form-control mb-4" type="text" value="utilizador@gmail.com"
                                    id="alterar_linkedin">

                                <div class="row align-items-center">
                                    <label for="example-text-input" class="col-auto col-form-label">Spotify</label>
                                    <div class="col">
                                        <div class="form-check form-switch float-end">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
                                                checked="">
                                        </div>
                                    </div>
                                </div>
                                <input class="form-control mb-4" type="text" value="utilizador@gmail.com"
                                    id="alterar_tiktok">



                                <div class="row align-items-center">
                                    <label for="example-text-input" class="col-auto col-form-label">Youtube</label>
                                    <div class="col">
                                        <div class="form-check form-switch float-end">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
                                                checked="">
                                        </div>
                                    </div>
                                </div>
                                <input class="form-control mb-4" type="text" value="utilizador@gmail.com"
                                    id="alterar_tiktok">


                                <div class="row align-items-center">
                                    <label for="example-text-input" class="col-auto col-form-label">Tiktok</label>
                                    <div class="col">
                                        <div class="form-check form-switch float-end">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
                                                checked="">
                                        </div>
                                    </div>
                                </div>
                                <input class="form-control mb-4" type="text" value="utilizador@gmail.com"
                                    id="alterar_tiktok">



                                <div class="row align-items-center">
                                    <label for="example-text-input" class="col-auto col-form-label">Instagram</label>
                                    <div class="col">
                                        <div class="form-check form-switch float-end">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
                                                checked="">
                                        </div>
                                    </div>
                                </div>
                                <input class="form-control mb-4" type="text" value="utilizador@gmail.com"
                                    id="alterar_instagram">


                                <div class="row align-items-center">
                                    <label for="example-text-input" class="col-auto col-form-label">Twitter</label>
                                    <div class="col">
                                        <div class="form-check form-switch float-end">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
                                                checked="">
                                        </div>
                                    </div>
                                </div>
                                <input class="form-control mb-4" type="text" value="913 123 123" id="alterar_twitter">



                                <div class="row align-items-center">
                                    <label for="example-text-input" class="col-auto col-form-label">Facebook</label>
                                    <div class="col">
                                        <div class="form-check form-switch float-end">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
                                                checked="">
                                        </div>
                                    </div>
                                </div>
                                <input class="form-control mb-4" type="text" value="John Snow" id="alterar_facebook">


                                <div class="row align-items-center">
                                    <label for="example-text-input" class="col-auto col-form-label">Blog Pessoal</label>
                                    <div class="col">
                                        <div class="form-check form-switch float-end">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
                                                checked="">
                                        </div>
                                    </div>
                                </div>
                                <input class="form-control mb-4" type="text" value="utilizador@gmail.com"
                                    id="alterar_blog">


                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="d-none" id="ver_agenda">
                <p>sou asd</p>
            </div>



            <div class="d-none" id="ver_perfil">

                <div class="page-header min-height-300 border-radius-xl mt-4" id="headerDiv" <?php
                if ($fotodecapa == null) {
                    echo 'style="background-image: url(\'../../assets/img/curved-images/curved0.jpg\');"';
                } else {
                    echo 'style="background-image: url(\'../../utilizador/' . $id . '/' . $fotodecapa . '\');"';
                }
                ?>>
                    <div class="overlay" id="overlay">
                        <span class="overlay-text">Selecione para alterar a imagem</span>
                        <input type="file" id="imageUpload" style="display: none;">
                    </div>
                </div>

                <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
                    <div class="row gx-4">
                        <div class="col-auto">
                            <div class="avatar avatar-xl position-relative">
                                <img <?php

                                // Obtém a extensão do arquivo em letras minúsculas
                                $extension = strtolower(pathinfo($fotodeperfil, PATHINFO_EXTENSION));

                                // Verifica se a extensão do arquivo está em um array de extensões de imagem permitidas
                                $allowed_extensions = array('jpg', 'jpeg', 'png', 'gif'); // Adicione outras extensões se necessário
                                
                                // Verifica se a extensão está na lista de extensões permitidas
                                if (in_array($extension, $allowed_extensions)) {
                                    $google_image = false;
                                } else {
                                    $google_image = true;
                                }


                                if ($google_image == false) {
                                    echo 'src="../../utilizador/' . $id . '/' . $fotodeperfil . '"';
                                } else {
                                    echo 'src="' . $fotodeperfil . '"';
                                }
                                ?>
                     alt="profile_image" class="w-100 border-radius-lg shadow-sm">

                            </div>
                        </div>
                        <div class="col-auto my-auto">
                            <div class="h-100">
                                <h5 class="mb-1">
                                    <?php echo $nome; ?>
                                </h5>

                                <p class="mb-0 font-weight-bold text-sm">
                                    <?php echo $type_utilizador; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- End Navbar -->
                <div class="container-fluid fixed-bottom ms-12" style="margin-top: 9.5em; width:90%;">
                    <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
                        <div class="row gx-4">
                            <div class="col-lg-12 col-md-12 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                                <div class="nav-wrapper position-relative end-0 ms-5">
                                    <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link mb-0 px-0 py-1 active" href="javascript:mostrarSobre();"
                                                role="tab" id="sobre_nav">
                                                <i class="fas fa-user-edit text-sm" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Edit Profile"></i>
                                                <span class="ms-1">Sobre</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link mb-0 px-0 py-1" href="javascript:mostrarAgenda();"
                                                id="agenda_nav" role="tab">
                                                <i class="ni ni-calendar-grid-58 text-sm" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Agenda"></i>
                                                <span class="ms-1">Agenda</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link mb-0 px-0 py-1" id="projetos_nav"
                                                href="javascript:mostrarProjetos();" role="tab" aria-selected="false">
                                                <i class="ni ni-book-bookmark text-sm" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Agenda"></i>
                                                <span class="ms-1">Projetos</span>
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link mb-0 px-0 py-1" id="perfil_nav"
                                                href="javascript:mostrarPerfil();" role="tab" aria-selected="false">
                                                <i class="ni ni-circle-08" data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title="Agenda"></i>
                                                <span class="ms-1">Foto de Perfil/Capa</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>












                <div class="col-12 mt-4" id="ver_projetos">
                    <div class="card mb-4">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-1">Projects</h6>
                            <p class="text-sm">Um pouco sobre o meu trabalho</p>
                        </div>
                        <div class="card-body p-3">
                            <div class="row">



                                <?php

                                $count = 1001;
                                $count2 = 1;

                                // Consulta SQL para obter os dados desejados
                                $sql = "SELECT * FROM projects WHERE id_founder = $id";

                                $result = mysqli_query($conn, $sql);

                                // Verifica se a consulta retornou resultados
                                if (mysqli_num_rows($result) > 0) {
                                    // Exibindo os dados encontrados
                                    while ($row = mysqli_fetch_assoc($result)) {

                                        $p_id = $row["id"];
                                        $p_nome = $row["nome"];
                                        $p_imagem = $row["imagem"];
                                        $p_sinopse = $row["sinopse"];
                                        $p_descricao = $row["descricao"];
                                        $p_local = $row["local"];
                                        $p_data = $row["data"];


                                        // Texto original com quebras de linha
                                        $texto_original2 = $p_descricao;

                                        // Substituir \n por <br>
                                        $texto_formatado2 = nl2br(htmlspecialchars($texto_original2)); // Use nl2br para manter as quebras de linha e htmlspecialchars para escapar caracteres especiais HTML
                                

                                        // Consulta SQL para obter os dados desejados
                                        $sql2 = "SELECT * FROM projects_images WHERE id_project = $p_id";

                                        $result2 = mysqli_query($conn, $sql2);

                                        $totalRows = mysqli_num_rows($result2);


                                        echo '
                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                                        
                                    <div class="card card-blog card-plain">
                                        <div class="position-relative">
                                            <a class="d-block shadow-xl border-radius-xl">
                                                <img src="' . $p_imagem . '" alt="img-blur-shadow"
                                                    class="img-fluid shadow border-radius-xl" style="width:235px; height:134px;">
                                            </a>
                                        </div>
                                        <div class="card-body px-1 pb-0">
                                            <p class="text-gradient text-dark mb-2 text-sm">' . $p_local . '</p>
                                                <h5>
                                                    ' . $p_nome . '
                                                </h5>
                                                <p class="mb-4 text-sm" style="height: 63px;">
                                                ' . $p_sinopse . '
                                            </p>

                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="w-100">
                                                    <button type="button"
                                                        class="btn btn-outline-primary btn-sm w-100 d-flex justify-content-center text-center mb-0"
                                                        data-bs-toggle="modal" data-bs-target="#modal-default' . $count . '">Ver
                                                        Mais</button>

                                                        <button type="button"
                                                        class="btn btn-outline-primary btn-sm w-100 d-flex justify-content-center text-center mb-0"
                                                        data-bs-toggle="modal" data-bs-target="#modal-default' . $count . '">Editar</button>

                                                        <button type="button"
                                                        class="btn btn-outline-primary btn-sm w-100 d-flex justify-content-center text-center mb-0"
                                                        data-bs-toggle="modal" data-bs-target="#modal-default' . $count . '">Remover</button>

                                                        
                                                    <div class="modal fade" id="modal-default' . $count . '" tabindex="-1"
                                                    role="dialog" aria-labelledby="modal-default' . $count . '"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">

                                                        <div class="modal-body">

                                                        <div class="row">
                                                            <div class="mx-auto">
                                                                
                                                            <!-- Main Carousel -->
    <div id="carousel' . $count . '" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">';

                                        if (mysqli_num_rows($result2) > 0) {
                                            $isActive = true; // For setting the first item as active
                                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                                $pi_imagem = $row2["image"];

                                                echo '
                                                        <div class="carousel-item ' . ($isActive ? 'active' : '') . '">
                                                            <img src="' . $pi_imagem . '" class="d-block rounded" class="d-block rounded"
                                                            style="margin-left: 2.5%; width:95%; height: 25em;" alt="...">
                                                        </div>';

                                                $isActive = false; // Set to false after the first item
                                            }
                                        }

                                        echo '
                                                                    </div>
                                                                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel' . $count . '" data-bs-slide="prev">
                                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                        <span class="visually-hidden">Previous</span>
                                                                    </button>
                                                                    <button class="carousel-control-next" type="button" data-bs-target="#carousel' . $count . '" data-bs-slide="next">
                                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                        <span class="visually-hidden">Next</span>
                                                                    </button>
                                                                </div>

                                                                <div class="text-justify mt-4"
                                                                style="width: 95%; margin-left: 2.5%;">
                                                                <h1 class="title">' . $p_nome . '</h1>
                                                                <p>' . $texto_formatado2 . '</p>

                                                                <div
                                                                    class="mt-4 d-inline-flex align-items-center text-dark">
                                                                    <i class="mb-0 ni ni-send me-2"></i>

                                                                    <dt class="mb-0 me-2">País:
                                                                    </dt>
                                                                    <p class="mb-0 me-2">' . $p_local . '</p>
                                                                </div>
                                                                <br>
                                                                <div
                                                                    class="mt-2 mb-4 d-inline-flex align-items-center text-dark">
                                                                    <i
                                                                        class="mb-0 ni ni-watch-time me-2"></i>

                                                                    <dt class="mb-0 me-2"> Data: </dt>
                                                                    <p class="mb-0 me-2">' . $p_data . '</p>
                                                                </div>

                                                            </div>


                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button"
                                                                class="btn bg-gradient-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                                
                                        ';


                                        if ($count2 % 4 == 0) {
                                            echo '<span class="w-100 mt-5"></span>';
                                        }

                                        $count++;

                                        $count2++;


                                    }
                                }


                                ?>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fixed-plugin">
                <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
                    <i class="fa fa-cog py-2"> </i>
                </a>
                <div class="card shadow-lg ">
                    <div class="card-header pb-0 pt-3 ">
                        <div class="float-start">
                            <h5 class="mt-3 mb-0">Configurations</h5>
                            <p>See your dashboard options</p>
                        </div>
                        <div class="float-end mt-4">
                            <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                                <i class="fa fa-close"></i>
                            </button>
                        </div>
                        <!-- End Toggle Button -->
                    </div>
                    <hr class="horizontal dark my-1">
                    <div class="card-body pt-sm-3 pt-0">
                        <!-- Sidebar Backgrounds -->
                        <div>
                            <h6 class="mb-0">Sidebar Colors</h6>
                        </div>
                        <a href="javascript:void(0)" class="switch-trigger background-color">
                            <div class="badge-colors my-2 text-start">
                                <span class="badge filter bg-gradient-primary active" data-color="primary"
                                    onclick="sidebarColor(this)"></span>
                                <span class="badge filter bg-gradient-dark" data-color="dark"
                                    onclick="sidebarColor(this)"></span>
                                <span class="badge filter bg-gradient-info" data-color="info"
                                    onclick="sidebarColor(this)"></span>
                                <span class="badge filter bg-gradient-success" data-color="success"
                                    onclick="sidebarColor(this)"></span>
                                <span class="badge filter bg-gradient-warning" data-color="warning"
                                    onclick="sidebarColor(this)"></span>
                                <span class="badge filter bg-gradient-danger" data-color="danger"
                                    onclick="sidebarColor(this)"></span>
                            </div>
                        </a>
                        <!-- Sidenav Type -->
                        <div class="mt-4">
                            <h6 class="mb-0">Sidenav Type</h6>
                            <p class="text-sm">Choose between 2 different sidenav types.</p>
                        </div>
                        <div class="d-flex">
                            <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent"
                                onclick="sidebarType(this)">Transparent</button>
                            <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white"
                                onclick="sidebarType(this)">White</button>
                        </div>
                        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop
                            view.
                        </p>

                        <hr class="horizontal dark my-sm-4">
                        <div class="w-100 text-center">
                        </div>
                    </div>
                </div>
            </div>


            <!--   Core JS Files   -->
            <script src="../../assets/js/core/popper.min.js"></script>
            <script src="../../assets/js/core/bootstrap.min.js"></script>
            <script src="../../assets/js/plugins/perfect-scrollbar.min.js"></script>
            <script src="../../assets/js/plugins/smooth-scrollbar.min.js"></script>
            <script>
                var win = navigator.platform.indexOf('Win') > -1;
                if (win && document.querySelector('#sidenav-scrollbar')) {
                    var options = {
                        damping: '0.5'
                    }
                    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
                }
            </script>
            <!-- Github buttons -->
            <script async defer src="https://buttons.github.io/buttons.js"></script>
            <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
            <script src="../../assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>

            <script>
                $(document).ready(function () {
                    // Função para verificar e ajustar o texto conforme necessário
                    $('.comentario').each(function () {
                        var max_width = $(this).width(); // Largura do elemento <p>
                        var text_width = $(this)[0].scrollWidth; // Largura real do texto dentro do elemento

                        // Verifica se o texto excede a largura do elemento
                        if (text_width > max_width) {
                            // O texto excede a largura - ajusta adicionando "..."
                            var text = $(this).text();
                            while ($(this)[0].scrollWidth > max_width) {
                                text = text.slice(0, -1); // Remove um caractere por vez até caber
                                $(this).text(text + '...');
                            }
                        }
                    });
                });

            </script>


            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    var headerDiv = document.getElementById('headerDiv');
                    var overlay = document.getElementById('overlay');
                    var imageUpload = document.getElementById('imageUpload');

                    // Adicionar evento de clique no texto "Alterar Imagem"
                    overlay.addEventListener('click', function () {
                        imageUpload.click(); // Quando o texto é clicado, aciona o clique no input de arquivo
                    });

                    // Adicionar evento de seleção de arquivo
                    imageUpload.addEventListener('change', function () {
                        var file = imageUpload.files[0]; // Obter o arquivo selecionado pelo usuário

                        if (file) {
                            var reader = new FileReader();

                            // Callback executado quando a imagem é carregada
                            reader.onload = function (e) {
                                // Atualizar o background-image da div com a imagem carregada
                                headerDiv.style.backgroundImage = 'url(' + e.target.result + ')';
                            };

                            // Ler o conteúdo do arquivo como URL de dados
                            reader.readAsDataURL(file);
                        }
                    });

                    // Adicionar evento de mouseover para mostrar a sobreposição
                    headerDiv.addEventListener('mouseover', function () {
                        overlay.style.opacity = 1; // Torna a sobreposição visível
                    });

                    // Adicionar evento de mouseout para ocultar a sobreposição
                    headerDiv.addEventListener('mouseout', function () {
                        overlay.style.opacity = 0; // Torna a sobreposição invisível novamente
                    });
                });
            </script>



            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    var sobre_nav = document.getElementById('sobre_nav');
                    sobre_nav.classList.remove('px-0');
                    sobre_nav.classList.add('px-4');

                });



                function mostrarAgenda() {
                    var sobre = document.getElementById('ver_sobre');
                    var projetos = document.getElementById('ver_projetos');
                    var agenda = document.getElementById('ver_agenda');
                    var perfil = document.getElementById('ver_perfil');
                    var sobre_nav = document.getElementById('sobre_nav');
                    var perfil_nav = document.getElementById('perfil_nav');
                    var agenda_nav = document.getElementById('agenda_nav');
                    var projetos_nav = document.getElementById('projetos_nav');

                    console.log(sobre, projetos, agenda, perfil); // Verifique se os elementos foram corretamente obtidos

                    perfil.classList.add('d-none');
                    perfil_nav.classList.remove('active');

                    agenda.classList.remove('d-none');
                    agenda_nav.classList.add('active');

                    sobre.classList.add('d-none');
                    sobre_nav.classList.remove('active');

                    projetos.classList.add('d-none');
                    projetos_nav.classList.remove('active');
                }



                function mostrarSobre() {
                    var sobre = document.getElementById('ver_sobre');
                    var projetos = document.getElementById('ver_projetos');
                    var agenda = document.getElementById('ver_agenda');
                    var perfil = document.getElementById('ver_perfil');
                    var sobre_nav = document.getElementById('sobre_nav');
                    var perfil_nav = document.getElementById('perfil_nav');
                    var agenda_nav = document.getElementById('agenda_nav');
                    var projetos_nav = document.getElementById('projetos_nav');

                    console.log(sobre, projetos, agenda, perfil, 'aaaaaaaaaaaaaaaa'); // Verifique se os elementos foram corretamente obtidos


                    perfil.classList.add('d-none');
                    perfil_nav.classList.remove('active');

                    agenda.classList.add('d-none');
                    agenda_nav.classList.remove('active');

                    sobre.classList.remove('d-none');
                    sobre_nav.classList.add('active');

                    projetos.classList.add('d-none');
                    projetos_nav.classList.remove('active');
                }


                function mostrarProjetos() {
                    var sobre = document.getElementById('ver_sobre');
                    var projetos = document.getElementById('ver_projetos');
                    var agenda = document.getElementById('ver_agenda');
                    var perfil = document.getElementById('ver_perfil');
                    var sobre_nav = document.getElementById('sobre_nav');
                    var perfil_nav = document.getElementById('perfil_nav');
                    var agenda_nav = document.getElementById('agenda_nav');
                    var projetos_nav = document.getElementById('projetos_nav');

                    console.log(sobre, projetos, agenda, perfil); // Verifique se os elementos foram corretamente obtidos

                    perfil.classList.add('d-none');
                    perfil_nav.classList.remove('active');

                    agenda.classList.add('d-none');
                    agenda_nav.classList.remove('active');

                    sobre.classList.add('d-none');
                    sobre_nav.classList.remove('active');

                    projetos.classList.remove('d-none');
                    projetos_nav.classList.add('active');
                }

                function mostrarPerfil() {
                    var sobre = document.getElementById('ver_sobre');
                    var projetos = document.getElementById('ver_projetos');
                    var agenda = document.getElementById('ver_agenda');
                    var perfil = document.getElementById('ver_perfil');
                    var sobre_nav = document.getElementById('sobre_nav');
                    var perfil_nav = document.getElementById('perfil_nav');
                    var agenda_nav = document.getElementById('agenda_nav');
                    var projetos_nav = document.getElementById('projetos_nav');

                    console.log(sobre, projetos, agenda, perfil); // Verifique se os elementos foram corretamente obtidos

                    perfil.classList.remove('d-none');
                    perfil_nav.classList.add('active');

                    agenda.classList.add('d-none');
                    agenda_nav.classList.remove('active');

                    sobre.classList.add('d-none');
                    sobre_nav.classList.remove('active');

                    projetos.classList.add('d-none');
                    projetos_nav.classList.remove('active');
                }

            </script>



            <script>
                function mostrarTextoCompleto() {
                    var divTexto = document.getElementById('textoDiv');
                    var btnVerMais = document.getElementById('verMaisBtn');

                    // Remover a limitação de altura para mostrar todo o texto
                    divTexto.style.maxHeight = 'none';

                    // Ocultar o botão "ver mais" após expandir o texto
                    btnVerMais.style.display = 'none';
                }

                // Verificar se o texto na div ultrapassa a altura máxima
                var divTexto = document.getElementById('textoDiv');
                var btnVerMais = document.getElementById('verMaisBtn');

                if (divTexto.scrollHeight > divTexto.clientHeight) {
                    // Mostrar o botão "ver mais" se o texto estiver cortado
                    btnVerMais.style.display = 'block';
                }

            </script>

</body>

</html>