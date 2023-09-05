<?php require "./templates/header.php"; ?>
<?php 
    $page = 'contact';
    require "./templates/nav_bar.php"; 
?>


<br>
<br>
<br> 

<div class="contact">
    <div class="container">
        <div class="section-header text-center">
            <p>Contacto</p>
            <h2>Si tienes dudas, contáctanos</h2>
        </div>
        <div class="contact-img">
            <img src="static/img/contact.jpg" alt="Image">
        </div>
        <div class="contact-form">
                <div id="success"></div>
                <form method="POST" action="./backend/mail.php">
                    <div class="control-group">
                        <input name="name" type="text" class="form-control" id="name" placeholder="Tu nombre" required="required" data-validation-required-message="Please enter your name" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input name="email" type="email" class="form-control" id="email" placeholder="Tu correo" required="required" data-validation-required-message="Please enter your email" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input name="subject" type="text" class="form-control" id="subject" placeholder="Asunto" required="required" data-validation-required-message="Please enter a subject" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea name="message" class="form-control" id="message" placeholder="Mensaje" required="required" data-validation-required-message="Please enter your message"></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div>
                        <input class="btn btn-custom" type="submit" value="Contactar" name="action"/>
                    </div>
                </form>
            </div>
            <div class="contact-info">
                <h3>Información de contacto</h3>
                <p><strong>Correo:</strong><a href="mailto:info@frine.org"> info@frine.org </a></p>
                <p><strong>Telofonos</strong></p>
                <ul>
                    <li> +57 311 2311487</li>
                    <li> +57 311 2311494</li>
                </ul>
                <p><strong>Dirección:</strong> Calle 44 #17-45</p>
            </div>
        </div>
    </div>
</div>




<?php require "./templates/footer.php"; ?>
<?php require "./backend/mail.php"; ?>