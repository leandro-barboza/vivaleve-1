<?php $title = "Contato | Viva Leve"; ?>
<?php include_once('header.php'); ?>

    <section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Saiba mais sobre nós!</h2>
                <p class="lead">Preencha o formulário abaixo para saber mais de como podemos te ajudar</div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Nome *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Telefone</label>
                            <input type="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Empresa</label>
                            <input type="text" class="form-control">
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Assunto *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Messagem *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="8"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Enviar</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
    
    <section id="contact-info">
        <div class="center">                
            <h2>Como chegar até nós?</h2>
            <p class="lead"></p>
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.9850634991953!2d-46.85200198447925!3d-23.497047484714876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf023b674cbc41%3A0xcb6988e1d3a74d8a!2sCal%C3%A7ada+das+Margaridas%2C+336+-+Alphaville+Comercial%2C+Barueri+-+SP%2C+06453-038!5e0!3m2!1spt-PT!2sbr!4v1496666740172" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <li class="col-sm-6">
                                <address>
                                    <h5>Centro de Emagrecimento Viva Leve</h5>
                                    <p>Calçada das Margaridas, 336 <br>
                                    Centro Comercial Alphavile - Barueri/SP</p>
                                    <p>Contato: +55 11 4191-5122 <br>
                                    Email: contato@centrovivaleve.com.br</p>
                                </address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->

    <?php include_once('footer.php'); ?>