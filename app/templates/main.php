<body>
    <div class="tattoo">
        <!-- HEADER Menu and BSackgroundImage-->
        <div class="header">
            <div class="parallax-window" data-parallax="scroll" data-image-src="assest/img/background.jpg">
                <div class="wrapper">
                    <div class="container-header">
                        <div class="logo wow">Сайт портфолио Аникеева Ивана</div>

                        <div class="container-menu">
                            <ul class="menu-list">
                                <?php
                                    include($_SERVER['DOCUMENT_ROOT'].'/app/components/menu.php');
                                ?>
                            </ul> 
                        </div>
                    </div>

                    <div class="container-header-mobile">
                        <div class="logo">Сайт портфолио Аникеева Ивана</div>
                        <div class="container-menu-mobile">
                            <ul class="menu-list-mobile">
                                <?php
                                    include($_SERVER['DOCUMENT_ROOT'].'/app/components/menu.php');
                                ?>
                            </ul>
                        </div>
                        <div class="container-burger">
                            <i class="fas fa-bars"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           


        <!--MAIN -->
         <div class="main">
            <div id="menu0" class="container-logo wow fadeIn">
                Немного обо мне
            </div>

            <div class="about-text parallax-window " data-parallax="scroll" data-image-src="assest/img/background-2-copy.jpg">
                <div class="about-text wow fadeIn">
                    <p>
                        Привет, Я Иван, мне 23 года. Всю свою (относительно взрослую) жизнь работаю в сфере, даже близко не расположенной к творчеству. Осенью прошлого года меня озарило, что я должен стать татуировщиком :D 
                    </p>

                    <p>
                        С начала 2018 года посвящаю себя постижению азов художественной татуировки. На сегодняшний день в моей копилке около 20 работ разных стилей. Работаю в стиле "OldSchool","NewSchool", "Line work", "Полинезия", "Traditional" осваиваю cтили "Whipshading", "Dotwork", кому интересно, всегда рад общению,без проблем отвечу на все ваши вопросы, и вгоню красочки вам под кожу :D
                    </p>
                </div>
            </div>

            <div id="menu1" class="container-logo wow fadeIn">
                    Мои работы
                </div>
            
            <div class="portfolio"> 
                <div class="container-portfolio">
                    <div class="portfolio-item wow fadeIn">
                        <img src="assest/img/tattoo-images/1.jpg" alt="1">
                        <img src="assest/img/tattoo-images/11.jpg" alt="11">
                    </div>

                    <div class="portfolio-item wow fadeIn">
                        <img src="assest/img/tattoo-images/2.jpg" alt="2">
                        <img src="assest/img/tattoo-images/22.jpg" alt="22">
                    </div>

                    <div class="portfolio-item wow fadeIn">
                        <img src="assest/img/tattoo-images/3.jpg" alt="3">
                        <img src="assest/img/tattoo-images/33.jpg" alt="33">
                    </div>

                    <div class="portfolio-item wow fadeIn">
                        <img src="assest/img/tattoo-images/4.jpg" alt="4">
                        <img src="assest/img/tattoo-images/44.jpg" alt="44">
                    </div>

                    <div class="portfolio-item wow fadeIn">
                        <img src="assest/img/tattoo-images/5.jpg" alt="5">
                        <img src="assest/img/tattoo-images/55.jpg" alt="55">
                    </div>

                    <div class="portfolio-item wow fadeIn">
                        <img src="assest/img/tattoo-images/6.jpg" alt="6">
                        <img src="assest/img/tattoo-images/66.jpg" alt="66">
                    </div>

                </div>

                <div class="container-button wow fadeIn">
                    <button><a href="https://www.instagram.com/anikeev_ivan/">Посмотреть все работы</a></button>
                </div>
                
            </div>

            <div id="menu2" class="container-logo wow fadeIn">
                Отзывы
            </div>
            <div class="reviews"> 
                <div class="container-items">
                    <div class="items-left reviews-show wow fadeIn">
                            <?php
                                include($_SERVER['DOCUMENT_ROOT'].'/app/logic/review-show.php');
                            ?>
                    </div>

                    <div name="comment"  class="items-right wow fadeIn">
                        <form action="app/logic/review.php" method="POST">
                            <h2>Оставьте свой отзыв</h2>
                            <label for="name">Имя:</label> <input type="text" name="name"><br>
                            <div id="reviewStars-input">
                                <input value="0" id="star-0" type="radio" name="reviewStars"/>
                                <label value="0" for="star-0"><i class='far fa-star'></i></label>
                            
                                <input value="1" id="star-1" type="radio" name="reviewStars"/>
                                <label value="1" for="star-1"><i class='far fa-star'></i></label>
                            
                                <input value="2" id="star-2" type="radio" name="reviewStars"/>
                                <label value="2" for="star-2"><i class='far fa-star'></i></label>
                            
                                <input value="3" id="star-3" type="radio" name="reviewStars"/>
                                <label value="3" for="star-3"><i class='far fa-star'></i></label>
                            
                                <input value="4" id="star-4" type="radio" name="reviewStars"/>
                                <label value="4" for="star-4"><i class='far fa-star'></i></label>

                                <input name ="countStars" type="hidden" id=countStars>
                            </div>
                            
                            <label for="text-comment">Отзыв:</label> <textarea name="text-comment" id="reviews-text" cols="30" rows="10"></textarea><br>
                            <input type="hidden" name="page_id" value="150">
                            <input type="submit" class="form-btn" value="Отправить">
                        </form>
                    </div>
                </div>
            </div>

            <div class="container-logo wow fadeIn">
                Контакты
            </div>

            <div class="about-text parallax-window" data-parallax="scroll" data-image-src="assest/img/Office.jpg">
                <div class="contacts wow fadeIn">
                        <div class="container-items">
                            <div class="items-left map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1889.2702642453457!2d37.52633822970133!3d56.72430064397511!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b46119168c919f%3A0x26333b4612a857d6!2z0YPQuy4g0JrRg9GB0YLQsNGA0L3QsNGPLCAxLCDQotCw0LvQtNC-0LwsINCc0L7RgdC60L7QstGB0LrQsNGPINC-0LHQuy4sIDE0MTkwMA!5e0!3m2!1sru!2sru!4v1532545135380" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>

                            <div class="items-right">
                                <h2>Адрес:</h2>
                                Московская область, г. Талдом, ул. Кустарная, д. 1, 3 этаж.
                                <h2>Я в социальных сетях:</h2>
                                Телефон: +79991112233<br>
                                <div class="social-icons">
                                    <a href="https://www.instagram.com/anikeev_ivan/"><i class="fab fa-instagram"></i></a>
                                    <a href="https://vk.com/id55767827"><i class="fab fa-vk"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>