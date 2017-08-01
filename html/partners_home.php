<section id="partner">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Nossos Parceiros</h2>
            </div>    
            <div class="partners">
                <ul>
                    <?php
                        include_once('../Classes/Parceiro.php');
                        include_once('../DAO/ParceiroDAO.php');
                        $partner_home = ParceiroDAO::readAll();
                        foreach ($partner_home as $key => $value) {
                        echo '
                        <li> <a href="' . $value['link'] . '"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="' . (($key + 1) * 300) . 'ms" src="' . $value['logo'] . '"></a></li>
                            ';
                        }
                    ?>
                </ul>
            </div>        
        </div><!--/.container-->
    </section><!--/#partner-->