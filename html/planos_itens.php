<section class="pricing-area shortcode-item">
        <div class="container">
            <div class="center wow fadeInDown " data-wow-duration="1000ms" data-wow-delay="600ms">
                <h2 class="titulo_precos text-uppercase">CONFIRA NOSSOS PLANOS </h2>
            </div>
            <div class="row text-center">
                
<?php
    include_once('../DAO/Produto_PlanoDAO.php');
    $prods = Produto_PlanoDAO::readAll();
    $color_num = array("zero", "one", "two", "three", "four", "five", "six");
    foreach ($prods as $key => $value) {
        echo'<div class="col-sm-3 plan price-'. $color_num[$value['Cor']] .' wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <ul>
                        <li class="heading-'. $color_num[$value['Cor']] .'">
                            <span>'. $value['Nome'] .'</span>
                            <h3>'. $value['Descricao'] .'</h3>';
                            foreach ($value["Produtos"] as $k => $val) {
                                echo'<li>'. $val['texto']. '</li>
                                ';
                            }
                        echo'
                        <li class="plan-action">
                            <a href="contact-us.html" class="btn btn-primary">Adquira Já</a>
                        </li>
                    </ul>
                </div> ';
    }
?>
            </div>
        </div>
    </section><!--/pricing_area-->