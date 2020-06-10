<!-- Load header -->
<?php get_header() ?>
    <body <?php body_class(''); ?>
        <main>
            <section class="hero" id="start">

            <!-- START WITH WORDPRESS FETCHING DATA (ADVANCED CUSTOM FIEDLS)-->
            <?php 
                $args = array(
                    'post_type' => 'dane_kontakt'
                );

                $the_query = new WP_Query($args);
            ?>

            <?php if ($the_query->have_posts()) 
            : while ($the_query->have_posts() )  : $the_query->the_post(); ?>
            <!-- START WITH WORDPRESS FETCHING DATA (ADVANCED CUSTOM FIEDLS)-->

                <!-- Hamburger fullscrn menu START-->
                <div class="menu" id="menu">
                    <img id="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Ilu Studio Logo" class="menu__logo">
                    <!-- Close hamburger icon -->
                    <div class="menu__divToHover" id="close">
                        <button class="menu__close"></button>
                    </div>

                    <ul class="menu__ul" id="ul">
                        <li class="menu__li menu__li-first "><a href="#start" class="menu__a">Start</a></li>
                        <li class="menu__li"><a href="#ilustudio" class="menu__a">Ilu Studio</a></li>
                        <li class="menu__li"><a href="#oferta" class="menu__a">Oferta</a></li>
                        <li class="menu__li"><a href="#cennik" class="menu__a">Cennik</a></li>
                        <li class="menu__li"><a href="#galeria" class="menu__a">Galeria</a></li>
                        <li class="menu__li"><a href="#kontakt" class="menu__a">Kontakt</a></li>
                    </ul>
                </div>
                <!-- Hamburger fullscrn menu END-->
                <div class="hero__header">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Ilu Studio Logo" class="hero__logo">
                    <!-- Hamburger menu -->
                    <div class="hero__divToHover" id="open">
                        <button id="hero__hamburger"></button>
                    </div>
                </div>
                <h1 class="hero__h1">
                    <span class="hero__h1-span">Ilu Studio</span>
                Salon Kosmetyczny
                </h1>
                <h1 class="hero__h1-mobile">
                    <span class="hero__h1-span-mobile">Salon</span>Kosmetyczny
                </h1>
                <div class="hero__socialm-container">
                    <a target="_blank" href="<?php the_field('instagram'); ?>" class="hero__socialm-link hero__socialm-link-first">
                        <i class="fab fa-instagram hero__social-icon"></i>
                    </a>
                    <a target="_blank" href="<?php the_field('facebook'); ?>" class="hero__socialm-link">
                    <i class="fab fa-facebook-f hero__social-icon"></i>
                    </a>
                </div>
                <div class="hero__phone-mail-container">
                    <span class="hero__phone">Telefon: 
                        <span class="hero__phone-second"><?php the_field('telefon'); ?></span>
                    </span>
                    <span class="hero__mail">E-mail: 
                        <span class="hero__mail-second"><?php the_field('email'); ?></span>
                    </span>
                </div>

                <div class="separator"></div>
            </section>

            <section class="about" id="ilustudio">
                <div class="about__text-container">
                    <h2 class="about__h2">Ilu Studio</h2>
                    <p class="about__span">
                    Miejsce dla osób ceniących sobie profesjonalizm oraz indywidualne podejście do klienta. W naszym studio dbamy o bezpieczeństwo i sterylizację narzędzi najwyższej klasy autoklawem Enbio. Wszystkie usługi wykonywane są przy pomocy jednorazowych materiałów takich jak pilniczki, polerki, tarki czy szczoteczki.
                    Jesteśmy tu dla Ciebie — Ilu Studio.
                    </p>
                </div>

                <div class="separator"></div>
            </section>

            <section class="offer" id="oferta">
                <h2 class="offer__h2">Oferta</h2>

                <div class="offer__container-up">
                    <div class="offer__manicure">
                        <!-- Responsive Images -->
                        <picture>
                            <source media="(min-width: 1921px)" srcset="<?php echo get_template_directory_uri(); ?>/img/4k/4k__zel.png">
                            <source media="(min-width: 1025px)" srcset="<?php echo get_template_directory_uri(); ?>/img/fhd/fhd__zel.png">
                            <!-- <source media="(min-width: 415px)" srcset=""> *HD Photo*
                            Poniżej to *smartfony* -->
                            <img class="offer__img" src="<?php echo get_template_directory_uri(); ?>/img/fhd/fhd__zel.png" alt="Przykład manicure">
                        </picture>
                        <!-- Responsive Images -->
                        <h3 class="offer__h3">Manicure</h3>
                        <div class="offer__underline"></div>
                        <p class="offer__p">Manicure kombinowany to połączenie manicure frezarkowego z cążkowym, który pozwala na precyzyjne przygotowanie płytki do aplikacji koloru „pod skórki”. Dzięki tej metodzie odrost widoczny jest dopiero po ponad tygodniu.</p>
                    </div>

                    <div class="offer__pedicure">
                        <!-- Responsive Images -->
                        <picture>
                            <source media="(min-width: 1921px)" srcset="<?php echo get_template_directory_uri(); ?>/img/4k/4k__pedicure.png">
                            <source media="(min-width: 1025px)" srcset="<?php echo get_template_directory_uri(); ?>/img/fhd/fhd__pedicure.png">
                            <!-- <source media="(min-width: 415px)" srcset=""> *HD Photo*
                            Poniżej to *smartfony* -->
                            <img class="offer__img" src="<?php echo get_template_directory_uri(); ?>/img/fhd/fhd__pedicure.png" alt="Przykład pedicure">
                        </picture>
                        <!-- Responsive Images -->
                        <h3 class="offer__h3">Pedicure</h3>
                        <div class="offer__underline"></div>
                        <p class="offer__p">Kompleksowa pielęgnacja stóp to indywidualne rozwiązania dostosowane do Twoich potrzeb. Rekonstrukcja płytki paznokcia, zabieg złuszczający Callus Eliminator, regeneracja osłabionych paznokci oraz piękny kolor.</p>
                    </div>
                </div>

                <div class="offer__container-down">
                    <div class="offer__zel">
                        <!-- Responsive Images -->
                        <picture>
                            <source media="(min-width: 1921px)" srcset="<?php echo get_template_directory_uri(); ?>/img/4k/4k__manicure.png">
                            <source media="(min-width: 1025px)" srcset="<?php echo get_template_directory_uri(); ?>/img/fhd/fhd__manicure.png">
                            <!-- <source media="(min-width: 415px)" srcset=""> *HD Photo*
                            Poniżej to *smartfony* -->
                            <img class="offer__img" src="<?php echo get_template_directory_uri(); ?>/img/fhd/fhd__manicure.png" alt="Przykład nakładania żelu">
                        </picture>
                        <!-- Responsive Images -->
                        <h3 class="offer__h3">Żel</h3>
                        <div class="offer__underline"></div>
                        <p class="offer__p">Przedłużanie, utwardzanie naturalnej płytki oraz rekonstrukcja paznokci możliwa dzięki trwałemu żel manicure. Krótkie, naturalne i delikatne, długie ze zdobieniami a może klasyczny french? Wybór należy do Ciebie.</p>
                    </div>

                    <div class="offer__brwi">
                        <!-- Responsive Images -->
                        <picture>
                            <source media="(min-width: 1921px)" srcset="<?php echo get_template_directory_uri(); ?>/img/4k/4k__brwi.png">
                            <source media="(min-width: 1025px)" srcset="<?php echo get_template_directory_uri(); ?>/img/fhd/fhd__brwi.png">
                            <!-- <source media="(min-width: 415px)" srcset=""> *HD Photo*
                            Poniżej to *smartfony* -->
                            <img class="offer__img" src="<?php echo get_template_directory_uri(); ?>/img/fhd/fhd__brwi.png" alt="Przykład stylizacji brwi">
                        </picture>
                        <!-- Responsive Images -->
                        <h3 class="offer__h3">Stylizacja Brwi</h3>
                        <div class="offer__underline"></div>
                        <p class="offer__p">Podkreślona oprawa oczu nadaje pełniejszego wyrazu całej twarzy. Geometria kształtu brwi, odpowiednio dobrany kolor henny oraz podkreślenie linii rzęs to kompletna usługa dająca wyrazisty wygląd i idealny, trwały efekt.</p>
                    </div>
                </div>

                <div class="separator"></div>
            </section>

            <section class="pricelist" id="cennik">
                <h2 class="pricelist__h2">Cennik</h2>
                <div class="pricelist__container">
                    <div class="pricelist__left">
                        <!-- Manicure -->
                        <div class="pricelist__manicure pricelist__manicure-first">
                            <h3 class="pricelist__h3">Manicure</h3>
                            <div class="pricelist__underline"></div>
                            <div class="pricelist__single-container">
                            <div class="pricelist__row pricelist__row-first">
                                    <span class="pricelist__offert">manicure pielęgnacyjny</span><span class="pricelist__price"><?php the_field('manicure_pielegnacyjny'); ?></span>
                                </div>
                                <div class="pricelist__row">
                                    <span class="pricelist__offert">manicure    klasyczny</span><span class="pricelist__price"><?php the_field('manicure_klasyczny'); ?></span>
                                </div>
                                <div class="pricelist__row">
                                    <span class="pricelist__offert">manicure    hybrydowy</span><span  class="pricelist__price"><?php the_field('manicure_hybrydowy'); ?></span>
                                </div>
                                <div class="pricelist__row">
                                    <span class="pricelist__offert">malowanie   klasyczne</span><span class="pricelist__price"><?php the_field('malowanie_klasyczne'); ?></span>
                                </div>
                                <div class="pricelist__row">
                                    <span class="pricelist__offert">malowanie   hybrydowe</span><span class="pricelist__price"><?php the_field('malowanie_hybrydowe'); ?></span>
                                </div>
                                <div class="pricelist__row">
                                    <span class="pricelist__offert">usunięcie hybrydy bez manicure</span><span class="pricelist__price"><?php the_field('usuniecie_hybrydy_bez_manicure'); ?></span>
                                </div>
                                <div class="pricelist__row">
                                    <span class="pricelist__offert">usunięcie hybrydy obcej</span><span class="pricelist__price"><?php the_field('usuniecie_hybrydy_obcej'); ?></span>
                                </div>
                                <div class="pricelist__row">
                                    <span class="pricelist__offert">usunięcie naszej hybrydy przez manicure</span><span class="pricelist__price"><?php the_field('usuniecie_naszej_hybrydy_przez_manicure'); ?></span>
                                </div>
                                <div class="pricelist__row">
                                    <span class="pricelist__offert">baza utwardzająca</span><span class="pricelist__price"><?php the_field('baza_utwardzajaca'); ?></span>
                                </div>
                                <div class="pricelist__row">
                                    <span class="pricelist__offert">IBX pierwsza wizyta</span><span class="pricelist__price"><?php the_field('ibx_pierwsza_wizyta'); ?></span>
                                </div>
                                <div class="pricelist__row">
                                    <span class="pricelist__offert">IBX druga wizyta i kolejna</span><span class="pricelist__price"><?php the_field('ibx_druga_wizyta_i_kolejna'); ?></span>
                                </div>
                                <div class="pricelist__row">
                                    <span class="pricelist__offert">naprawa pękniętego paznokcia</span><span class="pricelist__price"><?php the_field('naprawa_peknietego_paznokcia'); ?></span>
                                </div>
                                <div class="pricelist__row">
                                    <span class="pricelist__offert">Zdobienie</span><span class="pricelist__price"><?php the_field('zdobienie'); ?></span>
                                </div>
                            </div>
                        </div>

                        <!-- Henna -->
                        <div class="pricelist__manicure pricelist__margin-top">
                            <h3 class="pricelist__h3">Henna</h3>
                            <div class="pricelist__underline"></div>
                            <div class="pricelist__single-container">
                            <div class="pricelist__row pricelist__row-first">
                                    <span class="pricelist__offert">henna brwi lub rzęsy</span><span class="pricelist__price"><?php the_field('henna_brwi_lub_rzesy'); ?></span>
                                </div>
                                <div class="pricelist__row">
                                    <span class="pricelist__offert">regulacja brwi</span><span class="pricelist__price"><?php the_field('regulacja_brwi'); ?></span>
                                </div>
                                <div class="pricelist__row">
                                    <span class="pricelist__offert">henna + regulacja brwi</span><span  class="pricelist__price"><?php the_field('henna_+_regulacja_brwi'); ?></span>
                                </div>
                                <div class="pricelist__row">
                                    <span class="pricelist__offert">henna brwi + rzęsy + regulacja</span><span class="pricelist__price"><?php the_field('henna_brwi_+_rzesy_+_regulacja'); ?></span>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="pricelist__right">

                        <div class="pricelist__pedicure">
                            <h3 class="pricelist__h3">Pedicure</h3>
                            <div class="pricelist__underline"></div>
                            <div class="pricelist__single-container">
                                <div class="pricelist__row pricelist__row-first">
                                    <span class="pricelist__offert">pedicure pielęgnacyjny</span><span class="pricelist__price"><?php the_field('pedicure_pielegnacyjny'); ?></span>
                                </div>
                                <div class="pricelist__row">
                                    <span class="pricelist__offert">pedicure    klasyczny</span><span class="pricelist__price"><?php the_field('pedicure_klasyczny'); ?></span>
                                </div>
                                <div class="pricelist__row">
                                    <span class="pricelist__offert">pedicure    hybrydowy</span><span  class="pricelist__price"><?php the_field('pedicure_hybrydowy'); ?></span>
                                </div>
                                <div class="pricelist__row">
                                    <span class="pricelist__offert">pół pedicure klasyczny</span><span class="pricelist__price"><?php the_field('pol_pedicure_klasyczny'); ?></span>
                                </div>
                                <div class="pricelist__row">
                                    <span class="pricelist__offert">pół pedicure hybrydowy</span><span class="pricelist__price"><?php the_field('pol_pedicure_hybrydowy'); ?></span>
                                </div>
                                <div class="pricelist__row">
                                    <span class="pricelist__offert">zabieg złuszczający Callus Eliminator</span><span class="pricelist__price"><?php the_field('zabieg_zluszczajacy_callus_eliminator'); ?></span>
                                </div>
                                <div class="pricelist__row">
                                    <span class="pricelist__offert">rekonstrukcja paznokcia</span><span class="pricelist__price"><?php the_field('rekonstrukcja_paznokcia'); ?></span>
                                </div>
                            </div>
                        </div>

                        <div class="pricelist__pedicure pricelist__margin-top">
                            <h3 class="pricelist__h3">Żel</h3>
                            <div class="pricelist__underline"></div>
                            <div class="pricelist__single-container">
                                <div class="pricelist__row pricelist__row-first">
                                    <span class="pricelist__offert">naprawa paznokcia żel</span><span class="pricelist__price"><?php the_field('naprawa_paznokcia_zel'); ?></span>
                                </div>
                                <div class="pricelist__row">
                                    <span class="pricelist__offert">żel założenie</span><span class="pricelist__price"><?php the_field('zel_zalozenie'); ?></span>
                                </div>
                                <div class="pricelist__row">
                                    <span class="pricelist__offert">żel założenie + manicure klasyczny</span><span  class="pricelist__price"><?php the_field('zel_zalozenie_+_manicure_klasyczny'); ?></span>
                                </div>
                                <div class="pricelist__row">
                                    <span class="pricelist__offert">żel założenie + manicure hybrydowy</span><span class="pricelist__price"><?php the_field('zel_zalozenie_+_manicure_hybrydowy'); ?></span>
                                </div>
                                <div class="pricelist__row">
                                    <span class="pricelist__offert">uzupełnienie żelu + manicure klasyczny</span><span class="pricelist__price"><?php the_field('uzupelnienie_zelu_+_manicure_klasyczny'); ?></span>
                                </div>
                                <div class="pricelist__row">
                                    <span class="pricelist__offert">uzupełnienie żelu + manicure hybrydowy</span><span class="pricelist__price"><?php the_field('uzupelnienie_zelu_+_manicure_hybrydowy'); ?></span>
                                </div>
                                <div class="pricelist__row">
                                    <span class="pricelist__offert">odnowa żelu + manicure klasyczny</span><span class="pricelist__price"><?php the_field('odnowa_zelu_+_manicure_klasyczny'); ?></span>
                                </div>
                                <div class="pricelist__row">
                                    <span class="pricelist__offert">odnowa żelu + manicure hybrydowy</span><span class="pricelist__price"><?php the_field('odnowa_zelu_+_manicure_hybrydowy'); ?></span>
                                </div>
                                <div class="pricelist__row">
                                    <span class="pricelist__offert">usunięcie żelu</span><span class="pricelist__price"><?php the_field('usuniecie_zelu'); ?></span>
                                </div>
                                <div class="pricelist__row">
                                    <span class="pricelist__offert">usunięcie żelu + manicure pielęgnacyjny</span><span class="pricelist__price"><?php the_field('usuniecie_zelu_+_manicure_pielegnacyjny'); ?></span>
                                </div>
                                <div class="pricelist__row">
                                    <span class="pricelist__offert">usunięcie żelu + manicure klasyczny</span><span class="pricelist__price"><?php the_field('usuniecie_zelu_+_manicure_klasyczny'); ?></span>
                                </div>
                                <div class="pricelist__row">
                                    <span class="pricelist__offert">usunięcie żelu + manicure hybrydowy</span><span class="pricelist__price"><?php the_field('usuniecie_zelu_+_manicure_hybrydowy'); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="separator"></div>
            </section>

            <section class="gallery" id="galeria">
                <div class="gallery__left">
                    <h2 class="gallery__h2">Galeria</h2>
                    <p class="gallery__p">French, nude, minimal, ombre, babyboomer, gładki kolor a może błyskotki? Jaki jest Twój styl? Delikatnie czy z pazurem? Oto kilka propozycji na wyjątkowy manicure, zainspiruj się lub stwórz swój własny, unikatowy look.</p>
                </div>
                <div class="gallery__right">
                    <div class="gallery__btn-left" id="prev">
                        <i class="gallery__icon fas fa-chevron-left"></i>
                    </div>

                    <img id="image" src="" 
                    alt="Zdjęcie realizacji z salonu kosmetycznego" class="gallery__images">
                    <div class="gallery__btn-right" id="next">
                        <i class="gallery__icon fas fa-chevron-right"></i>
                    </div>
                </div>


                <div class="separator"></div>
            </section>

            <section class="contact" id="kontakt">
                <h2 class="contact__h2">Kontakt</h2>

                <div class="contact__left">
                    <div class="contact__map">
                        <iframe width="890" height="100%" src="https://maps.google.com/maps?width=890&amp;height=668&amp;hl=en&amp;q=al.%20Jerozolimskie%20155%2C%20Warszawa+(Ilu%20Studio)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                        </iframe>
                    </div>
                    <div class="contact__phone-mail-container">
                        <span class="contact__phone">Telefon: 
                            <span class="contact__phone-second"><?php the_field('telefon'); ?></span>
                        </span>
                        <span class="contact__mail">E-mail: 
                            <span class="contact__mail-second"><?php the_field('email'); ?></span>
                        </span>
                    </div>
                </div>

                <div class="contact__right">
                    <span class="contact__span-h3style">Godziny Otwarcia</span>
                    <span class="contact__span-h2style">Poniedziałek - Piątek</span>
                    <span class="contact__span"><?php the_field('od_poniedzialku'); ?></span>
                    <span class="contact__span-h2style">Sobota</span>
                    <span class="contact__span"><?php the_field('sobota'); ?></span>

                    <span class="contact__span-h3style contact__margin-top">Adres Salonu</span>
                    <span class="contact__span-h2style">Al. Jerozolimskie 155</span>
                    <span class="contact__span">02-326 Warszawa</span>
                    <span class="contact__span-little">wejście od ul. Sękocińskiej</span>

                    <div class="contact__socialm-container">
                        <a target="_blank" href="<?php the_field('instagram'); ?>" class="contact__socialm-link contact__socialm-link-first">
                            <i class="fab fa-instagram contact__social-icon"></i>
                        </a>
                        <a target="_blank" href="<?php the_field('facebook'); ?>" class="contact__socialm-link">
                        <i class="fab fa-facebook-f contact__social-icon"></i>
                        </a>
                    </div>
                </div>

                <span class="contact__copyright">© <?php echo date("Y"); ?> Ilu Studio. Wszelkie prawa zastrzeżone. Zaprojektowane przez <a href="https://cyberwolfdesign.com/" class="contact__link">Cyber Wolf Design.</a></span>
            </section>
        </main>

        <!-- END WITH WORDPRESS FETCHING DATA (ADVANCED CUSTOM FIEDLS) -->
        <?php endwhile; ?>
        <?php endif; ?>
        <!-- END WITH WORDPRESS FETCHING DATA (ADVANCED CUSTOM FIEDLS) -->

   
<!-- Load footer -->
<?php get_footer(); ?>
