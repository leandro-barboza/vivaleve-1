<?php $title = "Home | Viva Leve"; ?>
    <?php include_once('header.php'); ?>
    <?php include_once('slider_home.php'); ?>
    <section id="feature" >
        <div class="container">
           <div class="center wow fadeInDown">
           <?php
                include_once('../DAO/Fixos_imagem_paginaDAO.php'); 
                $img = Fixos_imagem_paginaDAO::read(array("pagina" => $_SERVER['PHP_SELF'],
                "nome_campo" => "lead"));
            ?>
                <h2><img class="img-responsive logo-img-lead" <?php echo 'src="'.$img[0]['src'].'" alt="'.$img[0]['legenda'].'"';?>></h2>
                <p class="lead">
                    <?php
                        include_once('../DAO/Fixos_texto_paginaDAO.php'); 
                        $a = Fixos_texto_paginaDAO::read(array("pagina" => $_SERVER['PHP_SELF'],
                            "nome_campo" => "lead"));
                        echo $a[0]['valor'];
                    ?>
                </p>
            </div>
        </div><!--/.container-->
    </section><!--/#feature-->

    <?php include_once('portfolio_home.php'); ?>
    
    <?php include_once('partners_home.php'); ?>

    <section id="contact-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h2><?php $contato = Fixos_texto_paginaDAO::read(array("pagina" => $_SERVER['PHP_SELF'],
                            "nome_campo" => "contato h2"));
                        echo $contato[0]['valor']; ?></h2>
                            <p><?php $contato = Fixos_texto_paginaDAO::read(array("pagina" => $_SERVER['PHP_SELF'],
                            "nome_campo" => "contato p"));
                        echo $contato[0]['valor']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->    
    </section><!--/#contact-info-->

    <?php include_once('footer.php'); ?>