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

            <section id="search-top" class="search-top col-12">
                
            <video autoplay muted loop>
                <source src="img/mjp.mp4" type="video/mp4">
            </video>
            </section>
            <section id="servicos"></section>
            

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

    <section id="perguntas" class="row">
        <col-12>
            <h1 class="text-center">Dúvidas frequentes</h1>
        </col-12>
        <div class="perg col-md-7">
            <ul>
                <li class="li-pai"><span>A MJP atende somente empresa?</span>
                    <ul>
                        <li><span>Não. Atendemos empresas e pessoas físicas conforme a necessidade, com projetos residenciais, marketing, para shows, eventos, igrejas etc.</span></li>
                    </ul>
                </li>
                <li class="li-pai"><span>Terei ajuda de um profissional para escolher a melhor solução para o meu ambiente??</span>
                    <ul>
                        <li><span>Sim. Contamos com uma equipe de profissionais especializados em projetos que irá desenvolver um projeto idealizado de acordo com sua necessidade.</span></li>
                    </ul>
                </li>
                <li class="li-pai"><span>A MJP atende todos os segmentos?</span>
                    <ul>
                        <li><span>Sim. Oferecemos soluções e para diversos segmentos e aplicações. Faça contato conosco e cuidaremos do seu projeto.</span></li>
                    </ul>
                </li>
               
                <li class="li-pai"><span>Para revender ou distribuir os produtos, com quem devo falar?</span>
                    <ul>
                        <li><span>Se tem interesse em revender ou distribuir os nossos produtos, entre em contato pelo nosso whatsapp.</span></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="ainda col-md-5">
            <div>
            <p>
                A dúvida de muito de nossos clientes, também pode ser a sua, então separamos aqui a resposta das perguntas feitas com frequência por nossos clientes. <br><br>
                Ainda tem alguma dúvida?
            </p>
            <a target="_blanck" href="https://wa.me/5511941202161">Tire Agora!</a>
            </div>
        </div>
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