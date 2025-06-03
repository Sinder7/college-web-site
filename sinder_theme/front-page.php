<?php
/**
 * Шаблон главной страницы
 * @package MyCustomTheme
 */
?>


<section class="hero">
    <div class="container hero__inner">
        <?php get_header(); ?>
        <div class="hero__content">
            <h1 class="hero__title">
                ГБПОУ РД <br>
                "КОЛЛЕДЖ ИННОВАЦИОННЫХ ТЕХНОЛОГИЙ"
            </h1>
            <div class="hero__social-wrap">
                <div class="hero__social">
                    <div class="hero__field">
                        <div class="field__icon"><img src="img/geo_icon.svg" alt=""></div>
                        <a href="https://yandex.ru/maps/-/CHr7eYiR" target="_blank" class="field__link">
                            368001, Хасавюрт,
                            ул. Тотурбиева, 61</a>
                    </div>
                    <div class="hero__field">
                        <div class="field__icon"><img src="img/mail_icon.svg" alt=""></div>
                        <a href="mailto:gbpou_kol_innov@e-dag.ru" class="field__link">
                            gbpou_kol_innov@e-dag.ru
                        </a>
                    </div>
                    <div class="hero__field">
                        <div class="field__icon"><img src="img/phone_icon.svg" alt=""></div>
                        <a href="tel:8(928) 288-98-98" class="field__link">8(928) 288-98-98</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="baner">
    <div class="banner__inner container">
        <div class="banner__grid-items">
            <div class="banner__grid-item">
                <img src="img/banner.png" alt="Описание 1" class="photo-grid__image">
            </div>
            <div class="banner__grid-item">
                <img src="img/banner2.png" alt="Описание 2" class="photo-grid__image">
            </div>
            <div class="banner__grid-item">
                <img src="img/banner3.png" alt="Описание 3" class="photo-grid__image">
            </div>
            <div class="banner__grid-item">
                <img src="img/banner4.png" alt="Описание 4" class="photo-grid__image">
            </div>
            <div class="banner__grid-item">
                <img src="img/banner5.png" alt="Описание 5" class="photo-grid__image">
            </div>
            <div class="banner__grid-item">
                <img src="img/banner6.png" alt="Описание 6" class="photo-grid__image">
            </div>
            <div class="banner__grid-item">
                <img src="img/banner7.png" alt="Описание 7" class="photo-grid__image">
            </div>
            <div class="banner__grid-item">
                <img src="img/banner8.png" alt="Описание 8" class="photo-grid__image">
            </div>
            <div class="banner__grid-item">
                <img src="img/banner9.png" alt="Описание 9" class="photo-grid__image">
            </div>
            <div class="banner__grid-item">
                <img src="img/banner10.png" alt="Описание 9" class="photo-grid__image">
            </div>
        </div>
    </div>
</section>
<section class="about">
    <div class="about__inner container">
        <div class="photo-stack">
            <img src="img/IMG_4087.JPG" alt="Photo 1" class="stack bottom">
            <img src="img/director.png" alt="Photo 2" class="stack top">
        </div>
        <div class="abount__content">
            <div class="heading">Государственное бюджетное профессиональное образовательное учреждение Республики
                Дагестан «Колледж инновационных технологий»</div>
            <div class="caption">Это одно из ведущих профильных образовательных учреждений Юга Российской Федерации.
                С момента образования колледжа выпустил более 20 тысяч специалистов, многие из которых продолжают
                вносить весомый вклад в развитие народного хозяйства страны. Реализуемая в колледже программа
                практико-ориентированного обучения направлена на выполнение требований современного производства и
                соответствует реалиям современной экономики.
            </div>
            <div class="button">
                Как поступить?
            </div>
        </div>

    </div>
</section>
<section class="specialization">
    <div class="container">
        <div class="heading center">Колледж готовит студентов по следующим специальностям:</div>
        <?php if( have_rows('home_slider', 'option') ): ?>
        <div id="splide" class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php while( have_rows('home_slider', 'option') ): the_row(); ?>
                    <li class="splide__slide">
                        <div class="card splide__slide">
                            <div class="img_wrapper"></div>
                            <img src="<?php the_sub_field('image'); ?>" alt="">
                            <div class="rating">
                                <img src="img/logowhite.png" alt="">
                            </div>
                            <div class="info">
                                <h3 class="title"><?php the_sub_field('title'); ?></h3>
                                <p class="subtitle"><?php the_sub_field('caption'); ?></p>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card">
                            <div class="img_wrapper"></div>
                            <img src="img/example2.png" alt="Озеро возле гор">
                            <div class="rating">
                                <img src="img/logowhite.png" alt="">
                            </div>
                            <div class="info">
                                <h3 class="title">Бухгалтер</h3>
                                <p class="subtitle">Срок обучения: 3 года 10 месяцев</p>
                            </div>
                        </div>
                    </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>