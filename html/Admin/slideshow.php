<h2>SlideShow</h2>
<div>
<?php
    include_once('../../DAO/Slide_homeDAO.php');
    include_once('../../DB/factory.php');
    $slides = Slide_homeDAO::readAll();
    foreach ($slides as $key => $value) {
        echo '<h3>Slide '.$value['id'].'</h3>
                                <form class="formulario-slideshow" method="POST" action="teste.php">
                                    <input type="hidden" value ="'.$value['id'].'" name = "id" /> 
                                    <p>Imagem principal (obrigatório)</p>
                                    <p class="flutuar">Imagem menor</p><br><br>
                                    <input type="file" name="arquivos1" class="btn files"/>
                                    
                                    <input type="file" name="arquivos2" class="btn files"/><br><br>

                                     <p>Slide Show - Texto maior</p>
                                    <textarea name="texto_grande">'.$value['texto_grande'].'</textarea><br><br>
                                    <p>Slide Show - Texto menor</p>
                                    <textarea name="texto_pequeno">'.$value['texto_pequeno'].'</textarea><br><br>
                                    <input type="submit">
                                </form><br><br>';
    }
?>
<button class="btn ">Adicionar novo slide</button>
</div>