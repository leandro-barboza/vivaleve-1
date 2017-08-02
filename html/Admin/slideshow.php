<?php
    include_once('../../DAO/Slide_homeDAO.php');
    include_once('../../DB/factory.php');
    $slides = Slide_homeDAO::readAll();
?>
                        <h2>SlideShow</h2>
                            <div id = "1">
                                <form class="formulario-slideshow" method="POST" action="teste.php">
                                    <p>Imagem principal (obrigatório)</p>
                                    <p class="flutuar">Imagem menor</p><br><br>
                                    <input type="file" name="arquivos1" class="btn files"/>
                                    
                                    <input type="file" name="arquivos2" class="btn files"/><br><br>

                                     <p>Slide Show - Texto maior</p>
                                    <textarea name="Texto_maior"></textarea><br><br>
                                    <p>Slide Show - Texto menor</p>
                                    <textarea name="Texto_menor"></textarea><br><br>
                                    <button class="btn ">Adicionar novo slide</button>
                                    <input type="submit">
                                </form>
                            </div>