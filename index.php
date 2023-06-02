
<!DOCTYPE html>
<html lang="pt_br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MJP Industrial</title>

        <!-- FONTS DO GOOGLE-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">


        <!-- CSS BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!-- CSS DA APLICAÇÃO-->
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/mobile.css">
		 
    </head>

    <body>
           <?php 
            include "pages/nav.php"; 
           ?>

            <main>

<?php
// Obtém a URL da solicitação
$url = $_SERVER['REQUEST_URI'];

// Remove a barra inicial, se houver
$url = ltrim($url, '/');

// Separa a URL em segmentos
$segments = explode('/', $url);

// Define as rotas disponíveis
$routes = [
    '' => 'HomeController@index',
    'produtos' => 'ProdutosController@index'
];

// Obtém o primeiro segmento da URL
$route = isset($segments[0]) ? $segments[0] : '';
$route2 = isset($segments[1]) ? $segments[1] : '';
$idproduto = isset($segments[2]) ? $segments[2] : '';


// Verifica se a rota existe
if (array_key_exists($route, $routes)) {
    // Divide o controlador e o método
    $routeParts = explode('@', $routes[$route]);
    $controller = $routeParts[0];
    $method = $routeParts[1];

    // Inclui o arquivo do controlador
   include 'controllers/' . $controller . '.php';


} else {
    // Rota não encontrada
    echo "Rota não encontrada.";
}




include "pages/chat.php";
?>

</main>

<?php 
include "pages/footer.php"; 
?>



<!-- script bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="/js/jquery.mask.js"></script>
<!-- SCRIPT DA APLICAÇÃO-->
<script src="/js/script.js?v=2"></script>
<!-- icons -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
