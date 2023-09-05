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
                    <p>Nuestros programas</p>
                    <h2>Programas que tenemos disponibles</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="blog-item box-shadow">
                            <div class="blog-img">
                                <img src="static/img/fortalecimiento.jpg" alt="Image" style="border-radius: 2rem 2rem 0px 0px; height: 29rem; object-fit: cover;">
                            </div>
                            <div class="blog-text">
                                <h3>Programa de Fortalecimiento de capacidades personales</h3>
                                <ul>
                                    <li>Desarrollo y fortalecimiento de Capacidades y Competencias básicas.</li>
                                    <li>Apoyo terapéutico en las áreas de Fonoaudiología, Fisioterapia, Terapia ocupacional, Psicología.</li>
                                    <li>Formación en Talleres Artesanales.</li>
                                    <li>Grupo de música.</li>
                                    <li>Expresión corporal y grupo de teatro.</li>
                                    <li>Talleres de capacitación y fortalecimiento de habilidades.</li>
                                    <li>Nutrición.</li>
                                    <li>Refuerzo Escolar.</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-item box-shadow">
                            <div class="blog-img">
                                <img src="static/img/consulta.jpg" alt="Image" style="border-radius: 2rem 2rem 0px 0px; height: 29rem; object-fit: cover;">
                            </div>
                            <div class="blog-text">
                                <h3>Consulta externa</h3>
                                <ul>
                                    <li>Fonoaudiología.</li>
                                    <li>Fisioterapia.</li>
                                    <li>Psicología.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-item box-shadow">
                            <div class="blog-img">
                                <img src="static/img/familiar.jpeg" alt="Image" style="border-radius: 2rem 2rem 0px 0px; height: 29rem; object-fit: cover;">
                            </div>
                            <div class="blog-text">
                                <h3>Programa de Fortalecimiento Familiar</h3>
                                <ul>
                                    <li>Apoyo Psicosocial: fortalecimiento, empoderamiento y capacidades familiares.</li>
                                    <li>Manejo del duelo ante la discapacidad.</li>
                                    <li>Asesoría y fortalecimiento y en el uso de redes de apoyo familiar.</li>
                                </ul>
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
                        <input name="name" type="text" class="form-control" id="name" placeholder="Tu nombre" required="required" data-validation-required-message="Porfavor coloca tu nombre" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input name="email" type="email" class="form-control" id="email" placeholder="Tu correo" required="required" data-validation-required-message="Porfavor coloca tu correo" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input name="subject" type="text" class="form-control" id="subject" placeholder="Asunto" required="required" data-validation-required-message="Porfavor coloca una razón" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea name="message" class="form-control" id="message" placeholder="Mensaje" required="required" data-validation-required-message="Porfavor coloca un mensaje"></textarea>
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