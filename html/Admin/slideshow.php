<?php
    include_once('../../DAO/Slide_homeDAO.php');
    $slides = Slide_homeDAO::readAll();
?>
                        <h2>SlideShow</h2>
                            <div id = "1">
                                <form class="formulario-slideshow">
                                    <p>Imagem principal (obrigatório)</p>
                                    <p class="flutuar">Imagem menor</p><br><br>
                                    <input type="file" name="arquivos" class="btn files"/>
                                    
                                    <input type="file" name="arquivos" class="btn files"/><br><br>

                                     <p>Slide Show - Texto maior</p>
                                    <textarea></textarea><br><br>
                                    <p>Slide Show - Texto menor</p>
                                    <textarea></textarea><br><br>
                                    <button class="btn ">Adicionar novo slide</button>
                                </form>
                            </div>