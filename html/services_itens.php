<?php include_once('../DAO/ServicoDAO.php');
    $services = ServicoDAO::readAll();
?>
<div class="row">
                <div class="features">
                    <div class="col-xs-12 col-sm-12">
                    <div class="tab-wrap wow fadeInDown">
                        <div class="media">
                            <div class="parrent pull-left">
                                <ul class="nav nav-tabs nav-stacked">
                                    <?php
                                        foreach ($services as $key => $value){
                                            $class = "";
                                            if($value['id'] == 1) $class = "active";
                                            echo '<li class="'. $class .'"><a href="#tab'. $value['id'] .'" data-toggle="tab" class="analistic-01">'. $value['nome'] .'</a></li>
                                        ';
                                        }
                                    ?>
                                </ul>
                            </div>
                            <div class="parrent media-body wow fadeInDown">
                                <div class="tab-content">
                                <?php
                                    foreach ($services as $key => $value) {
                                        $class = "";
                                            if($value['id'] == 1) $class = " active";
                                            echo '<div class="tab-pane'. $class .'" id="tab'. $value['id'] .'">
                                        <div class="media">
                                           <div class="">
                                                <img class="img-responsive" src="'. $value['imagem_principal'] .'">
                                            </div>
                                            <div class="media">
                                                 <h4>'. $value['nome'] .'</h4>
                                                 <p>'. $value['texto_principal'] .'</p>
                                            </div>
                                        </div>
                                    </div>';
                                    }
                                ?>
                                    
                                </div> <!--/.tab-content-->  
                            </div> <!--/.media-body--> 
                        </div> <!--/.media-->     
                    </div><!--/.tab-wrap-->               
                </div><!--/.col-sm-6-->
            </div><!--/.row-->