<?php require "./templates/header.php"; ?>
<?php 
    $page = 'programs';
    require "./templates/nav_bar.php"; 
?>


<style>
    .box-shadow {
        box-shadow: -12px 16px 14px -1px rgba(0,0,0,0.1);
        border-radius: 2rem;
    }
</style>

<!-- Blog Start -->
<div class="blog" id="blog-isolated">   
    <div class="container">
        <div class="section-header text-center">
            <p>Nuestros programas empresariales</p>
            <h2>Programas que tenemos disponibles para tu empresa</h2>
        </div>
        <div class="row" style="justify-content: space-around;">
            <div class="col-lg-4">
                <div class="blog-item box-shadow">
                    <div class="blog-img">
                        <img src="static/img/sentidos.jpg" alt="Image" style="border-radius: 2rem 2rem 0px 0px; height: 29rem; object-fit: cover;">
                    </div>
                    <div class="blog-text">
                        <h3>Programa Atiende tus sentidos</h3>
                        <p>
                            Con este programa tu empresa o comunidad podrá detectar y prevenir alteraciones sensoriales en primera infancia que puedan ocasionar trastornos en el aprendizaje.
                        </p>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog-item box-shadow">
                    <div class="blog-img">
                        <img src="static/img/zapatos.jpg" alt="Image" style="border-radius: 2rem 2rem 0px 0px; height: 29rem; object-fit: cover;">
                    </div>
                    <div class="blog-text">
                        <h3>Programa Ponte en mis zapatos</h3>
                        <p>
                            Está dirigido a diferentes grupos de interés con el fin de promover el acercamiento y conocimiento básico frente a la discapacidad, buscando una interacción armoniosa de cooperación, tolerancia, pluralismo y solidaridad.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Blog End -->

<div class="contact">
    <div class="container">
        <div class="section-header text-center">
            <p>Contacto</p>
            <h2>Escríbenos para charlar sobre tu programa</h2>
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
    </div>
</div>

<?php require "./templates/footer.php"; ?>
<?php require "./backend/mail.php"; ?>