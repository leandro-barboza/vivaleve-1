<?php $title = "Planos | Viva leve"; ?>
<?php
	include_once('header.php');
    include_once('../DAO/Fixos_imagem_paginaDAO.php'); 
    $img = Fixos_imagem_paginaDAO::read(array("pagina" => $_SERVER['PHP_SELF'],
    "nome_campo" => "center wow"));
?>
    <section class="no-margin">
        <div class="row">
            <div class="center wow ">
                <img class="col-md-12 col-sm-3 img-responsive "<?php echo'src="'. $img[0]['src'] .'" alt='. $img[0]['legenda'] .'">'; ?>
            </div>
        </div>
    </section>
<?php include_once('planos_itens.php'); ?>    
<?php include_once('footer.php'); ?>