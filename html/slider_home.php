<section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <?php
                    include_once('../Classes/Slide_home.php');
                    include_once('../DAO/Slide_homeDAO.php'); 
                   $a = Slide_homeDAO::readAll();
                   for($i = 2; $i <= count($a); $i++){
                    echo '<li data-target="#main-slider" data-slide-to="' . ($i - 1) . '"></li>';
                   }
                ?>
            </ol>
            <div class="carousel-inner">
            <?php
                foreach ($a as $key => $value) {
                    $class = "";
                    if($key == 0) $class = " active img-responsive";
                    echo '<div class="item ' . $class . ' " style="background-image: url(' . $value['imagem_grande'] . ')">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">' . $value['texto_grande'] . '</h1>
                                    <h2 class="animation animated-item-2">' . $value['texto_pequeno'] . '</h2>
                                    <a class="btn-slide animation animated-item-3" href="' . $value['link'] . '">Saiba mais</a>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="' . $value['imagem_pequena'] . '" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->
                ';
                }
            ?>

            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->