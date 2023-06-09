

            <section id="search-top" class="search-top col-12">
                
            <video autoplay muted loop>
                <?php if($idproduto == 1){ ?>
                    <source src="/img/painel_led_redondo.mp4" type="video/mp4">
                <?php }else if($idproduto == 2){ ?>
                    <source src="/img/indoor_em_acm.mp4" type="video/mp4">
                <?php }else if($idproduto == 3){ ?>
                    <source src="/img/menuboard.mp4" type="video/mp4">
                <?php }else if($idproduto == 4){ ?>
                    <source src="/img/posto_combustivel.mp4" type="video/mp4">
                <?php }else if($idproduto == 5){ ?>
                    <source src="/img/totens_para_monitor_e_tvs.mp4" type="video/mp4">
                <?php } ?>
                
            </video>
            </section>

            <section id="produtos">
                <?php $produto = urldecode($route2); ?>
          
                <h1>
                    <?php echo ucwords($produto) .' - '.$idproduto; ?>
                </h1>

                <?php 
                    if($route2 == 'paineis'){?>
       
                    <?php }?>
            </section>
          
              
     
