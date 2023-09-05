

<?php require "./templates/header.php"; ?>
<?php 
    $page = 'home';
    require "./templates/nav_bar.php"; 
?>


        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="static/img/carousel-1.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Transformamos vidas</h1>
                            <p>
                                Por 49 años hemos transformado la vida de niños, niñas y jóvenes con discapacidad y la de sus familias.
                            </p>
                            <div class="carousel-btn">
                                <a class="btn btn-custom" href="donate.php">Apóyanos</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="static/img/carousel-2.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Cambia su mundo, cambia nuestro mundo</h1>
                            <p>
                                Trabajamos por la prevención, la sensibilización y la inclusión. Con tu ayuda lograremos transformar vidas.                         
                            </p>
                            <div class="carousel-btn">
                                <a class="btn btn-custom" href="donate.php">Apóyanos</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="static/img/carousel-3.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Aprende sobre discapacidad</h1>
                            <p>
                                El conocimiento es la herramienta para superar la intolerancia y promover la equidad.                            </p>
                            <div class="carousel-btn">
                                <a class="btn btn-custom" href="https://medium.com/@fundacionfrine" target="_blank">Ir al blog</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->        

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img" data-parallax="scroll" data-image-src="static/img/about.jpg"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header">
                            <p>Quiénes somos</p>
                            <h2>Institución con más de 45 años de experiencia</h2>
                        </div>
                        <div class="about-tab">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#tab-content-1">Sobre FRINE</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-2">Misión</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-3">Visión</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="tab-content-1" class="container tab-pane active">
                                    Somos una institución sin ánimo de lucro que brinda servicios de prevención de vulneración de derechos a población en condición de discapacidad múltiple para mejorar su calidad de vida y la de sus familias. Con programas sociales, orientados a la garantía de los derechos de la población con discapacidad, promovemos su inclusión en la sociedad. Además, ofrecemos programas de prevención y sensibilización ante la discapacidad para la comunidad en general.
                                </div>
                                <div id="tab-content-2" class="container tab-pane fade">
                                    Promover la protección de los derechos y la inclusión social de la población vulnerable en condición de discapacidad, a través de programas de atención y protección integral, servicios terapéuticos complementarios y  acciones de fortalecimiento familiar y comunitario,  para desarrollar  competencias que posibiliten su crecimiento digno y humano.                                  
                                </div>
                                <div id="tab-content-3" class="container tab-pane fade">
                                    Al 2030 FRINE expandirá el impacto social a nivel local y nacional de sus programas y servicios a través de la excelencia y  el compromiso en la promoción de los derechos de la población  vulnerable con discapacidad.                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>Qué hacemos</p>
                    <h2>Trabajamos por una sociedad útil y feliz</h2>
                </div>
                <div class="row" id="what-we-do">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-healthcare"></i>
                            </div>
                            <div class="service-text">
                                <h3>Prevención</h3>
                                <p>Brindamos herramientas para mejorar la calidad de vida de población vulnerable en condición de discapacidad y la de sus familias.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-diet"></i>
                            </div>
                            <div class="service-text">
                                <h3>Apoyo nutricional</h3>
                                <p>Ofrecemos refrigerio y almuerzo a todos nuestros usuarios, acordes a las necesidades nutricionales de cada uno.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-education"></i>
                            </div>
                            <div class="service-text">
                                <h3>Fortalecimiento de habilidades</h3>
                                <p>Desarrollamos programas para potenciar habilidades que favorecen la autonomía e independencia de cada usuario.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-home"></i>
                            </div>
                            <div class="service-text">
                                <h3>Fortalecimiento a las familias</h3>
                                <p>Proporcionamos herramientas para que las familias conozcan estrategias de manejo, derechos y redes que los pueden apoyar en su proceso.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-social-care"></i>
                            </div>
                            <div class="service-text">
                                <h3>Inclusión</h3>
                                <p>Acompañamos procesos de inclusión a partir de programas sociales orientados a la garantía de derechos.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">  
                            <div class="service-icon">
                                <img src="static/img/apoyo_icon.png" alt="Image">
                            </div>
                            <div class="service-text">
                                <h3>Sensibilizacion</h3>
                                <p>Contamos con programas para generar conciencia sobre la discapacidad y su prevención.</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- Service End -->
        
        
        <!-- Facts Start -->
        <div class="facts" data-parallax="scroll" data-image-src="static/img/facts.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-home"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">52</h3>
                                <p>Años de trabajo</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-charity"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">9736</h3>
                                <p>Niños y niñas</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-kindness"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">5000</h3>
                                <p>Familias beneficiadas</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-donation"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">7</h3>
                                <p>Empresas capacitadas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->


        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p>Conoce a nuestro equipo</p>
                    <h2>Un grupo de personas increíble detrás de nuestros programas</h2>
                </div>
                <div class="row" style="display: flex; width: 100%; justify-content: center;">
                    <div class="col-lg-8 col-md-8">
                        <div class="team-item">
                            <div class="team-img" style="border-radius: 2rem;">
                                <img src="static/img/equipo.jpg" alt="Team Image">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
        
        
        <!-- Volunteer Start -->
        <div class="volunteer" data-parallax="scroll" data-image-src="static/img/volunteer.jpg">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="volunteer-form">
                            <form method="POST" action="./backend/mail.php">
                                <div class="control-group">
                                    <input name="name" type="text" class="form-control" placeholder="Nombre" required="required" />
                                </div>
                                <div class="control-group">
                                    <input name="email" type="email" class="form-control" placeholder="Correo electrónico" required="required" />
                                </div>
                                <div class="control-group">
                                    <textarea name="message" class="form-control" placeholder="¿Cómo quieres ayudarnos?" required="required"></textarea>
                                </div>
                                <div>
                                    <input class="btn btn-custom" type="submit" value="Enviar" name="action"/>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="volunteer-content">
                            <div class="section-header">
                                <p>Sé voluntaria o voluntario</p>
                                <h2>Hagamos la diferencia en la vida de los demás</h2>
                            </div>
                            <div class="volunteer-text">    
                                <p>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Volunteer End -->
        
        
        <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
                <div class="section-header text-center">
                    <p>Testimonios</p>
                    <h2>Lo que dicen de FRINE</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="static/img/woman.png" alt="Image">
                            <div class="testimonial-name">
                                <h3>Isvey Pardo</h3>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p>
                                “Gracias a FRINE prendí que con amor y paciencia y siguiendo las estrategias dadas por la formadora podía fortalecer los aprendizajes de Juan Sebastián quien cada día me sorprende con algo nuevo”                             
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="static/img/woman_2.png" alt="Image">
                            <div class="testimonial-name">
                                <h3>Adriana Robelto</h3>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p>
                                “Comprendí que a pesar de las adversidades y los tiempos difíciles siempre puedo contar con los profesionales de la fundación quienes apoyan y guían el proceso de aprendizaje de mi hija Nataly Robelto.”
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="static/img/woman_3.png" alt="Image">
                            <div class="testimonial-name">
                                <h3>Liliana Riaño</h3>
                                <!-- <p>Profession</p> -->
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p>
                                “Descubrí nuevas formas de comunicarme y entender a mi hija, a mantener rutinas y a fortalecer los procesos de aprendizaje por medio de las actividades, guías y retos.”
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="static/img/woman_4.png" alt="Image">
                            <div class="testimonial-name">
                                <h3>Luz Marina Cortés</h3>
                                <!-- <p>Profession</p> -->
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p>
                                “Aprendí a crear y agregar rutinas diarias, con el apoyo del trabajo de refuerzo en casa para Nilo, aprendimos a organizarnos en familia y lograr cumplir con las diferentes actividades del día”. 
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="static/img/woman_5.png" alt="Image">
                            <div class="testimonial-name">
                                <h3>María Elsa Castillo</h3>
                                <!-- <p>Profession</p> -->
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p>
                                “Aprendí a brindarle tiempo de calidad a mi hija, no me había permitido observar las capacidades que Andrea ha desarrollado con el apoyo de los diferentes programas de la fundación, gracias por la oportunidad para que aprendamos juntas.” 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        
        
        <!-- Contact Start -->
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
            </div>
        </div>
        <!-- Contact End -->

<?php require "./templates/footer.php"; ?>
<?php require "./backend/mail.php"; ?>