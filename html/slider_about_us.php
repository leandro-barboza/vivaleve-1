<?php
    include_once('../DAO/Slide_SobreNosDAO.php');
    $slide = Slide_SobreNosDAO::readAll();
?>
<!-- about us slider -->
            <div id="about-slider">
                <div id="carousel-slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">

                            <?php
                                foreach ($slide as $key => $value) {
                                    $active = "";
                                    if($key == 0) $active = " active";
                                    echo '<div class="item' . $active . '">
                                    <img src="' . $value['imagem'] . '" class="img-responsive" alt="' . $value['legenda'] . '"> 
                                    </div>';
                                }
                            ?>
                            
                    </div>
                    <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
                        <i class="fa fa-angle-left"></i> 
                    </a>
                    
                    <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
                        <i class="fa fa-angle-right"></i> 
                    </a>
                </div> <!--/#carousel-slider-->
            </div><!--/#about-slider-->