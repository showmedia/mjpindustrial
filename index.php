<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/mobile.css">
		 
    </head>

    <body>
           <?php 
            include "pages/nav.php"; 
           ?>

            <main>
      
            

            <section id="quemsomos">
        <h1>
            Quem Somos
        </h1>

        <p>
        Com mais de duas décadas de experiência no mercado, a MJP Industrial é uma empresa líder no setor de suportes de TV, estruturas de painéis de LED e totens personalizados. Nossa equipe de profissionais altamente qualificados e experientes está pronta para ajudá-lo em todas as suas necessidades. <br><br>

        Nós nos orgulhamos de oferecer um serviço dedicado, responsável e profissional, sempre prontos para superar as expectativas dos nossos clientes. Na MJP Industrial, temos um compromisso com a excelência em todas as áreas, desde o design e fabricação até a instalação e manutenção de nossos produtos. <br><br>

        Nossos projetos personalizados são criados para atender às necessidades específicas de nossos clientes, garantindo que cada projeto seja único e atenda aos mais altos padrões de qualidade. Seja para um suporte de TV personalizado ou uma estrutura de painel de LED de grande escala, nossa equipe está preparada para oferecer um serviço ágil e eficiente. <br><br>
        
        Na MJP Industrial, valorizamos a confiança de nossos clientes e trabalhamos incansavelmente para mantê-la. Seja qual for sua necessidade, conte conosco para fornecer as melhores soluções e serviços da indústria. Estamos prontos para trabalhar com você e ajudá-lo a alcançar seus objetivos!
        </p>
    </section>
             

                <?php 
                    include "pages/chat.php";
                ?>
               
            </main>
           
            <?php 
                include "pages/footer.php"; 
            ?>


 
    <!-- script bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 
    <script src="js/jquery.mask.js"></script>
      <!-- SCRIPT DA APLICAÇÃO-->
      <script src="js/script.js"></script>
    <!-- icons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>