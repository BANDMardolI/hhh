<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
    <script src="<?php echo get_template_directory_uri();?>/js/vacancy_desc.js" defer></script>
    <title>Document</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="header_container">
                <div class="burger_btn">
                    <img class="burger_btn__item" src="<?php echo get_template_directory_uri();?>/src/icons/burger.svg" alt="icon">
                </div>
                <div class="main_logo">
                    <img class="main_logo__img" src="<?php echo get_template_directory_uri();?>/src/logo/logo.svg" alt="logo">
                </div>
                <div class="tel">
                    <p class="tel__item">8 (812) 603-72-22</p>
                    <p class="tel__item">8 (499) 380-77-33</p>
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="front">
            <div class="container">
                <div class="front__container">
                    <h1>«Пестовский Лесокомбинат»</h1>
                    <p class="front_description">Cтань частью нашей команды!</p>
                    <button class="main_btn" onclick="document.location='form.html'">отправить анкету</button>
                </div>
            </div>
        </section>
        <section class="about">
            <div class="container">
                <div class="about__container">
                    <h2 class="section_title">о компании</h2>
                    <div class="about__items">
                        <div class="about__item">
                            <div class="frame">
                                <p class="frame__count">2</p>
                            </div>
                            <p class="about__item_description">Города присутствия: Санкт-Петербург и Москва</p>
                        </div>
                        <div class="about__item">
                            <div class="frame">
                                <p class="frame__count">>30</p>
                            </div>
                            <p class="about__item_description">Лет среди лидеров рынка</p>
                        </div>
                        <div class="about__item">
                            <div class="frame">
                                <p class="frame__count">100</p>
                            </div>
                            <p class="about__item_description">Домов и бань сдаём ежегодно</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="vacancy_section">
            <div class="container">
                <div class="subdivision__container">
                    <h2 class="section_title">выбери подразделение:</h2>
                    <div class="subdivision_container">
                        <div class="subdivision__item active">
                            <p class="subdivision__name">строительный отдел</p>
                        </div>
                        <div class="subdivision__item">
                            <p class="subdivision__name">офис</p>
                        </div>
                        <div class="subdivision__item">
                            <p class="subdivision__name">финансовый отдел</p>
                        </div>
                        <div class="subdivision__item">
                            <p class="subdivision__name">отдел продаж</p>
                        </div>
                        <div class="subdivision__item">
                            <p class="subdivision__name">внештатный сотрудник</p>
                        </div>
                    </div>
                </div>
                <div class="vacancy__container">
                    <div class="vacancy">
                        <div class="vacancy_wrapper">
                            <div class="vacancy__items">
                                <div class="vacancy__info">
                                    <img src="<?php echo get_template_directory_uri();?>/src/icons/vacancy.svg" alt="icon">
                                    <p class="vacancy__name">Прораб</p>
                                </div>
                                <div class="vacancy__info">
                                    <img src="<?php echo get_template_directory_uri();?>/src/icons/price.svg" alt="icon">
                                    <p class="salary">от 00 000 руб</p>
                                </div>
                            </div>
                            <button class="open_description">+</button>
                        </div>
                        <div class="vacancy_description">
                            <h5 class="vacancy_description__list_title">Задачи</h5>
                            <ul class="vacancy_description__list">
                                <li>описание</li>
                                <li>описание</li>
                                <li>описание</li>
                            </ul>
                            <h5 class="vacancy_description__list_title">Наши ожидания</h5>
                            <ul class="vacancy_description__list">
                                <li>описание</li>
                                <li>описание</li>
                            </ul>
                            <h5 class="vacancy_description__list_title">Мы предлагаем</h5>
                            <ul class="vacancy_description__list">
                                <li>график 5/2 с гибким началом рабочего дня;</li>
                                <li>оформление по ТК РФ с первого рабочего дня, полностью белую заработную плату;</li>
                                <li>ежеквартальную премию по итогам работы;</li>
                            </ul>
                        </div>
                    </div>
                    <div class="vacancy">
                        <div class="vacancy_wrapper">
                            <div class="vacancy__items">
                                <div class="vacancy__info">
                                    <img src="<?php echo get_template_directory_uri();?>/src/icons/vacancy.svg" alt="icon">
                                    <p class="vacancy__name">Специалист службы снабжения</p>
                                </div>
                                <div class="vacancy__info">
                                    <img src="<?php echo get_template_directory_uri();?>/src/icons/price.svg" alt="icon">
                                    <p class="salary">от 00 000 руб</p>
                                </div>
                            </div>
                            <button class="open_description">+</button>
                        </div>
                        <div class="vacancy_description">
                            <h5 class="vacancy_description__list_title">Задачи</h5>
                            <ul class="vacancy_description__list">
                                <li>описание</li>
                                <li>описание</li>
                                <li>описание</li>
                            </ul>
                            <h5 class="vacancy_description__list_title">Наши ожидания</h5>
                            <ul class="vacancy_description__list">
                                <li>описание</li>
                                <li>описание</li>
                            </ul>
                            <h5 class="vacancy_description__list_title">Мы предлагаем</h5>
                            <ul class="vacancy_description__list">
                                <li>график 5/2 с гибким началом рабочего дня;</li>
                                <li>оформление по ТК РФ с первого рабочего дня, полностью белую заработную плату;</li>
                                <li>ежеквартальную премию по итогам работы;</li>
                            </ul>
                        </div>
                    </div>
                    <div class="vacancy">
                        <div class="vacancy_wrapper">
                            <div class="vacancy__items">
                                <div class="vacancy__info">
                                    <img src="<?php echo get_template_directory_uri();?>/src/icons/vacancy.svg" alt="icon">
                                    <p class="vacancy__name">Логист</p>
                                </div>
                                <div class="vacancy__info">
                                    <img src="<?php echo get_template_directory_uri();?>/src/icons/price.svg" alt="icon">
                                    <p class="salary lower_txt">Обсуждается на собеседовании</p>
                                </div>
                            </div>
                            <button class="open_description">+</button>
                        </div>
                        <div class="vacancy_description">
                            <h5 class="vacancy_description__list_title">Задачи</h5>
                            <ul class="vacancy_description__list">
                                <li>описание</li>
                                <li>описание</li>
                                <li>описание</li>
                            </ul>
                            <h5 class="vacancy_description__list_title">Наши ожидания</h5>
                            <ul class="vacancy_description__list">
                                <li>описание</li>
                                <li>описание</li>
                            </ul>
                            <h5 class="vacancy_description__list_title">Мы предлагаем</h5>
                            <ul class="vacancy_description__list">
                                <li>график 5/2 с гибким началом рабочего дня;</li>
                                <li>оформление по ТК РФ с первого рабочего дня, полностью белую заработную плату;</li>
                                <li>ежеквартальную премию по итогам работы;</li>
                            </ul>
                        </div>
                    </div>
                    <div class="vacancy">
                        <div class="vacancy_wrapper">
                            <div class="vacancy__items">
                                <div class="vacancy__info">
                                    <img src="<?php echo get_template_directory_uri();?>/src/icons/vacancy.svg" alt="icon">
                                    <p class="vacancy__name">Проектировщик</p>
                                </div>
                                <div class="vacancy__info">
                                    <img src="<?php echo get_template_directory_uri();?>/src/icons/price.svg" alt="icon">
                                    <p class="salary">от 00 000 руб</p>
                                </div>
                            </div>
                            <button class="open_description">+</button>
                        </div>
                        <div class="vacancy_description">
                            <h5 class="vacancy_description__list_title">Задачи</h5>
                            <ul class="vacancy_description__list">
                                <li>описание</li>
                                <li>описание</li>
                                <li>описание</li>
                            </ul>
                            <h5 class="vacancy_description__list_title">Наши ожидания</h5>
                            <ul class="vacancy_description__list">
                                <li>описание</li>
                                <li>описание</li>
                            </ul>
                            <h5 class="vacancy_description__list_title">Мы предлагаем</h5>
                            <ul class="vacancy_description__list">
                                <li>график 5/2 с гибким началом рабочего дня;</li>
                                <li>оформление по ТК РФ с первого рабочего дня, полностью белую заработную плату;</li>
                                <li>ежеквартальную премию по итогам работы;</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <button class="main_btn" onclick="document.location='form.html'">Откликнуться на вакансию</button>
            </div>
        </section>
        <section class="advantages">
            <h2 class="section_title">преимущества компании</h2>
            <div class="adventage">
                <div class="container adventage_container">
                    <img src="<?php echo get_template_directory_uri();?>/src/icons/icon.svg" alt="icon">
                    <div class="adventage__info_wrapper">
                        <p class="adventage_name">Качество продукта</p>
                        <p class="adventage__description_pc">
                            Мы гордимся результатами своей работы! Мы убеждены, что именно качество — это самое главное, это то, что даёт Нам уверенность в завтрашнем дне.
                        </p>
                    </div>
                    <button class="open_description">+</button>
                </div>
                <p class="adventage__description">Мы гордимся результатами своей работы! Мы убеждены, что именно качество — это самое главное, это то, что даёт Нам уверенность в завтрашнем дне.</p>
            </div>
            <div class="adventage">
                <div class="container adventage_container">
                    <img src="<?php echo get_template_directory_uri();?>/src/icons/icon-1.svg" alt="icon">
                    <div class="adventage__info_wrapper">
                        <p class="adventage_name">Популярность бренда в сети</p>
                        <p class="adventage__description_pc">
                            Мы занимаем высокие позиции в поисковой выдаче и имеем многочисленные отзывы, привлекающие новых заказчиков независимо от времени года.
                        </p>
                    </div>
                    <button class="open_description">+</button>
                </div>
                <p class="adventage__description">Мы занимаем высокие позиции в поисковой выдаче и имеем многочисленные отзывы, привлекающие новых заказчиков независимо от времени года.</p>
            </div>
            <div class="adventage">
                <div class="container adventage_container">
                    <img src="<?php echo get_template_directory_uri();?>/src/icons/icon-2.svg" alt="icon">
                    <div class="adventage__info_wrapper">
                        <p class="adventage_name">Передовое рабочее место</p>
                        <p class="adventage__description_pc">
                            Комфортный офис в центре г. Санкт-Петербург, оборудованный передовыми технологиями. Твой рабочий компьютер может быть даже в твоём смартфоне!
                        </p>
                    </div>
                    <button class="open_description">+</button>
                </div>
                <p class="adventage__description">Комфортный офис в центре г. Санкт-Петербург, оборудованный передовыми технологиями. Твой рабочий компьютер может быть даже в твоём смартфоне!</p>
            </div>
            <div class="adventage">
                <div class="container adventage_container">
                    <img src="<?php echo get_template_directory_uri();?>/src/icons/icon-3.svg" alt="icon">
                    <div class="adventage__info_wrapper">
                        <p class="adventage_name">Свои автоматизированные системы обучения</p>
                        <p class="adventage__description_pc">
                        Создали и постоянно улучшаем собственные автоматизированные системы обучения специалистов и повышения их квалификации внутри компании.
                        </p>
                    </div>
                    <button class="open_description">+</button>
                </div>
                <p class="adventage__description">Создали и постоянно улучшаем собственные автоматизированные системы обучения специалистов и повышения их квалификации внутри компании.</p>
            </div>
            <div class="adventage">
                <div class="container adventage_container">
                    <img src="<?php echo get_template_directory_uri();?>/src/icons/icon-4.svg" alt="icon">
                    <div class="adventage__info_wrapper">
                        <p class="adventage_name">Сотрудничество с ведущими Компаниями рынка</p>
                        <p class="adventage__description_pc">
                            Сотрудничаем с ведущими Компаниями рынка строительных материалов: «Grand Line», «Петрович», «Окна Петербурга», «КраскиДоски», «Technonicol» и другими.
                        </p>
                    </div>
                    <button class="open_description">+</button>
                </div>
                <p class="adventage__description">Сотрудничаем с ведущими Компаниями рынка строительных материалов: «Grand Line», «Петрович», «Окна Петербурга», «КраскиДоски», «Technonicol» и другими.</p>
            </div>
        </section>
        <section class="products">

        </section>
        <section class="career">
            <h2 class="section_title">карьерный рост</h2>
            <div class="container">
                <div class="career__info">
                    <img src="<?php echo get_template_directory_uri();?>/src/icons/career-1.svg" alt="">
                    <p>
                        Наша Компания является ярким примером, где достойные люди смело и заслуженно поднимаются по карьерной лестнице. 
                    </p>
                </div>
                <div class="career__info">
                    <img src="<?php echo get_template_directory_uri();?>/src/icons/career-2.svg" alt="">
                    <p>
                        Мы ценим стремление к развитию и предоставляем все необходимые для этого условия.
                    </p>
                </div>
            </div>
            <?php echo do_shortcode('[smartslider3 slider="2"]');?>
        </section>
        <section class="invite_job">
            <div class="container">
                <h3 class="invite_job__main_text">Наши успехи — это заслуга замечательных людей, работающих в нашей Команде.<br><br>
                    У Нас всегда есть вакансии для сильных кандидатов</h3>
                <div class="invite_job__link_window">
                    <h4 class="invite_job__link_window_text">Если чувствуешь в Себе потенциал и здоровые амбиции — ждём рядом с Нами!</h4>
                    <button class="main_btn" onclick="document.location='form.html'">Присоединиться к команде</button>
                </div>
            </div>
        </section>
        <section class="contacts">
            <div class="container">
                <div class="subdivision__container">
                    <h2 class="section_title">контакты</h2>
                    <div class="subdivision_container">
                        <div class="subdivision__item active">
                            <p class="subdivision__name">санкт-петербург</p>
                        </div>
                        <div class="subdivision__item">
                            <p class="subdivision__name">москва</p>
                        </div>
                    </div>
                    <div class="contacts__item">
                        <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_961)">
                              <circle cx="16.5" cy="16" r="15.75" stroke="#21A038" stroke-width="0.5" />
                              <path d="M15.0691 15.5599C15.0691 15.8219 14.8571 16.0339 14.5951 16.0339C14.3331 16.0339 14.1211 15.8219 14.1211 15.5599C14.1211 15.2979 14.3331 15.0859 14.5951 15.0859C14.8571 15.0859 15.0691 15.2979 15.0691 15.5599Z" fill="#21A038" />
                              <path d="M17.1472 15.5599C17.1472 15.8219 16.9352 16.0339 16.6732 16.0339C16.4112 16.0339 16.1992 15.8219 16.1992 15.5599C16.1992 15.2979 16.4112 15.0859 16.6732 15.0859C16.9352 15.0859 17.1472 15.2979 17.1472 15.5599Z" fill="#21A038" />
                              <path d="M19.2253 15.5599C19.2253 15.8219 19.0133 16.0339 18.7513 16.0339C18.4893 16.0339 18.2773 15.8219 18.2773 15.5599C18.2773 15.2979 18.4893 15.0859 18.7513 15.0859C19.0133 15.0859 19.2253 15.2979 19.2253 15.5599Z" fill="#21A038" />
                              <path d="M14.5951 16.9951C14.3331 16.9951 14.1211 17.2071 14.1211 17.4691C14.1211 17.7311 14.3331 17.9431 14.5951 17.9431C14.8571 17.9431 15.0691 17.7311 15.0691 17.4691C15.0691 17.2071 14.8571 16.9951 14.5951 16.9951Z" fill="#21A038" />
                              <path d="M16.6732 16.9951C16.4112 16.9951 16.1992 17.2071 16.1992 17.4691C16.1992 17.7311 16.4112 17.9431 16.6732 17.9431C16.9352 17.9431 17.1472 17.7311 17.1472 17.4691C17.1472 17.2071 16.9352 16.9951 16.6732 16.9951Z" fill="#21A038" />
                              <path d="M18.7513 16.9951C18.4893 16.9951 18.2773 17.2071 18.2773 17.4691C18.2773 17.7311 18.4893 17.9431 18.7513 17.9431C19.0133 17.9431 19.2253 17.7311 19.2253 17.4691C19.2253 17.2071 19.0133 16.9951 18.7513 16.9951Z" fill="#21A038" />
                              <path d="M15.0691 19.267C15.0691 19.529 14.8571 19.741 14.5951 19.741C14.3331 19.741 14.1211 19.529 14.1211 19.267C14.1211 19.005 14.3331 18.793 14.5951 18.793C14.8571 18.793 15.0691 19.005 15.0691 19.267Z" fill="#21A038" />
                              <path d="M17.1472 19.267C17.1472 19.529 16.9352 19.741 16.6732 19.741C16.4112 19.741 16.1992 19.529 16.1992 19.267C16.1992 19.005 16.4112 18.793 16.6732 18.793C16.9352 18.793 17.1472 19.005 17.1472 19.267Z" fill="#21A038" />
                              <path d="M19.2253 19.267C19.2253 19.529 19.0133 19.741 18.7513 19.741C18.4893 19.741 18.2773 19.529 18.2773 19.267C18.2773 19.005 18.4893 18.793 18.7513 18.793C19.0133 18.793 19.2253 19.005 19.2253 19.267Z" fill="#21A038" />
                              <path d="M24.831 12.6C24.829 12.595 24.828 12.59 24.826 12.586C24.133 10.49 22.193 9.003 19.905 9H13.165C10.878 9.003 8.939 10.491 8.259 12.55L8.249 12.587C8.247 12.591 8.246 12.595 8.244 12.6C8.089 13.068 8 13.606 8 14.166C8 14.538 8.302 14.84 8.674 14.84H11.673L10.293 17.137C9.786 17.968 9.485 18.974 9.485 20.049V20.691C9.486 21.583 10.209 22.307 11.102 22.308H22.387C23.279 22.307 24.003 21.584 24.004 20.691C24.004 20.688 24.004 20.685 24.004 20.681C24.004 19.207 23.54 17.842 22.75 16.723L22.764 16.745L21.436 14.84H24.409C24.777 14.84 25.075 14.541 25.076 14.173C25.076 13.611 24.986 13.071 24.82 12.565L24.83 12.601L24.831 12.6ZM13.165 9.561H19.905C21.818 9.563 23.458 10.729 24.156 12.389L24.167 12.419H20.264C19.82 11.911 19.171 11.593 18.448 11.593C18.447 11.593 18.446 11.593 18.445 11.593H14.543C13.822 11.596 13.176 11.914 12.735 12.417L12.733 12.42H8.907C9.614 10.73 11.253 9.564 13.164 9.562L13.165 9.561ZM8.561 14.165C8.563 13.743 8.621 13.336 8.729 12.949L8.721 12.981H12.363C12.245 13.222 12.165 13.504 12.139 13.8L12.138 13.809C12.121 13.983 12.071 14.141 11.995 14.284L11.998 14.277H8.673C8.611 14.277 8.56 14.227 8.56 14.164L8.561 14.165ZM23.443 20.69C23.442 21.272 22.97 21.744 22.388 21.745H11.103C10.521 21.744 10.049 21.272 10.048 20.69V20.048C10.048 19.079 10.319 18.173 10.788 17.402L10.775 17.425L12.362 14.782C12.427 14.736 12.47 14.664 12.478 14.582C12.595 14.372 12.674 14.124 12.698 13.862L12.699 13.855C12.784 12.902 13.577 12.16 14.544 12.155H18.447C19.436 12.155 20.246 12.932 20.296 13.909V13.913C20.306 14.112 20.372 14.294 20.479 14.445L20.477 14.442L22.306 17.065C23.019 18.073 23.445 19.327 23.445 20.681C23.445 20.684 23.445 20.687 23.445 20.691L23.443 20.69ZM24.41 14.277H21.045L20.936 14.12C20.889 14.054 20.86 13.973 20.855 13.885V13.884C20.838 13.553 20.757 13.245 20.624 12.966L20.63 12.981H24.353C24.454 13.338 24.513 13.748 24.515 14.171V14.172C24.515 14.23 24.468 14.277 24.41 14.277Z" fill="#21A038" />
                            </g>
                            <defs>
                              <clipPath id="clip0_1_961">
                                <rect width="32" height="32" fill="white" transform="translate(0.5)" />
                              </clipPath>
                            </defs>
                          </svg>
                        <p class="phone">8 (812) 602-77-60</p>
                    </div>
                    <div class="contacts__item">
                        <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_976)">
                              <path d="M24.4675 11.5026C24.4655 11.5006 24.4655 11.4986 24.4645 11.4966C24.4615 11.4926 24.4555 11.4906 24.4525 11.4856C24.1035 11.0946 23.5975 10.8496 23.0345 10.8486H12.4975C11.9345 10.8486 11.4285 11.0936 11.0815 11.4836L11.0795 11.4856C11.0755 11.4896 11.0705 11.4916 11.0675 11.4966C11.0655 11.4986 11.0655 11.5006 11.0645 11.5036C10.7705 11.8356 10.5915 12.2756 10.5915 12.7566V15.7206H8.3425C8.1875 15.7216 8.0625 15.8466 8.0625 16.0016C8.0625 16.1566 8.1875 16.2816 8.3425 16.2826H10.5915V17.8086H9.6075H9.6065C9.4515 17.8086 9.3255 17.9346 9.3255 18.0896C9.3255 18.2446 9.4515 18.3706 9.6065 18.3706H9.6075H10.5915V19.2466C10.5925 20.2996 11.4455 21.1526 12.4985 21.1536H23.0355C24.0885 21.1526 24.9415 20.2996 24.9425 19.2466V12.7576C24.9425 12.2766 24.7635 11.8366 24.4675 11.5026ZM23.0345 11.4096C23.3225 11.4096 23.5895 11.5016 23.8075 11.6566L23.8035 11.6536L18.4385 15.8176C18.2545 15.9616 18.0205 16.0476 17.7665 16.0476C17.5125 16.0476 17.2785 15.9606 17.0925 15.8156L17.0945 15.8176L11.7295 11.6536C11.9435 11.5016 12.2105 11.4096 12.4975 11.4096H23.0345ZM24.3795 19.2436C24.3785 19.9866 23.7765 20.5876 23.0345 20.5886H12.4975C11.7545 20.5876 11.1535 19.9856 11.1525 19.2436V18.3676H13.9075H13.9085C14.0635 18.3676 14.1895 18.2416 14.1895 18.0866C14.1895 17.9316 14.0635 17.8056 13.9085 17.8056H13.9075H11.1525V12.7546C11.1535 12.5006 11.2265 12.2636 11.3505 12.0626L11.3475 12.0686L16.7505 16.2616C17.0285 16.4786 17.3825 16.6096 17.7665 16.6096C18.1505 16.6096 18.5055 16.4786 18.7865 16.2586L18.7825 16.2616L24.1855 12.0686C24.3065 12.2646 24.3785 12.5006 24.3805 12.7546L24.3795 19.2436Z" fill="#21A038" />
                              <circle cx="16.5" cy="16" r="15.75" stroke="#21A038" stroke-width="0.5" />
                            </g>
                            <defs>
                              <clipPath id="clip0_1_976">
                                <rect width="32" height="32" fill="white" transform="translate(0.5)" />
                              </clipPath>
                            </defs>
                          </svg>
                        <p class="email">info@pplk.ru</p>
                    </div>
                    <div class="contacts__item">
                        <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_981)">
                              <path d="M18.4126 19.4055L21.0236 15.8515C21.6436 15.0525 22.0166 14.0355 22.0166 12.9315C22.0166 12.9255 22.0166 12.9195 22.0166 12.9145V12.9155C22.0066 11.3565 21.3446 9.95446 20.2906 8.96646L20.2876 8.96346C19.3286 8.07046 18.0376 7.52246 16.6186 7.52246C13.7496 7.52246 11.4036 9.76346 11.2376 12.5915L11.2366 12.6065C11.2306 12.6985 11.2276 12.8065 11.2276 12.9145C11.2276 14.1185 11.6216 15.2315 12.2876 16.1295L12.2776 16.1145L14.5406 19.4105C10.7366 19.6165 7.05762 20.4515 7.05762 21.9185C7.05762 23.5815 11.9226 24.4795 16.4996 24.4795C21.0766 24.4795 25.9416 23.5815 25.9416 21.9185C25.9416 20.4195 22.2306 19.5895 18.4126 19.4055ZM11.7976 12.6365C11.9406 10.2045 13.8646 8.26346 16.2766 8.09546L16.2916 8.09446C16.4029 8.08713 16.514 8.08346 16.6246 8.08346C16.6286 8.08346 16.6336 8.08346 16.6396 8.08346C17.9036 8.08346 19.0536 8.57446 19.9076 9.37646L19.9046 9.37446C20.8526 10.2635 21.4456 11.5205 21.4546 12.9165V12.9185C21.4536 13.8915 21.1276 14.7885 20.5806 15.5065L20.5886 15.4965L16.4236 21.1635L12.7346 15.7885C12.1436 15.0015 11.7876 14.0085 11.7876 12.9325C11.7876 12.8285 11.7906 12.7265 11.7976 12.6245L11.7966 12.6385L11.7976 12.6365ZM16.4996 23.9175C10.9976 23.9175 7.61862 22.7535 7.61862 21.9185C7.61862 21.6115 8.14862 21.1295 9.63462 20.7005C11.2026 20.2785 13.0146 20.0095 14.8796 19.9555L14.9136 19.9545L15.8826 21.3665H13.3216C13.1666 21.3665 13.0406 21.4925 13.0406 21.6475C13.0406 21.8025 13.1666 21.9285 13.3216 21.9285H19.4296C19.5846 21.9285 19.7106 21.8025 19.7106 21.6475C19.7106 21.4925 19.5846 21.3665 19.4296 21.3665H16.9716L18.0116 19.9505C22.5636 20.1175 25.3796 21.0985 25.3796 21.9185C25.3796 22.7535 22.0016 23.9175 16.4996 23.9175Z" fill="#21A038" />
                              <path d="M17.7829 13.0379C17.7829 13.6789 17.2639 14.1979 16.6229 14.1979C15.9819 14.1979 15.4629 13.6789 15.4629 13.0379C15.4629 12.3969 15.9819 11.8779 16.6229 11.8779C17.2639 11.8779 17.7829 12.3969 17.7829 13.0379Z" fill="#21A038" />
                              <circle cx="16.5" cy="16" r="15.75" stroke="#21A038" stroke-width="0.5" />
                            </g>
                            <defs>
                              <clipPath id="clip0_1_981">
                                <rect width="32" height="32" fill="white" transform="translate(0.5)" />
                              </clipPath>
                            </defs>
                          </svg>
                        <p class="adress">ул. Заозёрная, д. 8 к. 2, офис 202<br>(7 мин. пешком от метро Фрунзенская)</p>
                    </div>
                    <div class="contacts__social">
                        <a href=""><svg width="51" height="36" viewBox="0 0 51 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.6594 0.246826H25.9375C28.5063 0.256201 41.5219 0.349952 45.0313 1.2937C46.0922 1.58173 47.0589 2.14315 47.8349 2.92185C48.6108 3.70056 49.1688 4.66928 49.4531 5.7312C49.7688 6.9187 49.9906 8.49058 50.1406 10.1125L50.1719 10.4375L50.2406 11.25L50.2656 11.575C50.4688 14.4312 50.4938 17.1062 50.4969 17.6906V17.925C50.4938 18.5312 50.4656 21.3874 50.2406 24.3624L50.2156 24.6906L50.1875 25.0156C50.0313 26.8031 49.8 28.5781 49.4531 29.8843C49.1697 30.9467 48.612 31.9159 47.8359 32.6947C47.0598 33.4735 46.0926 34.0347 45.0313 34.3218C41.4063 35.2968 27.6281 35.3656 25.7188 35.3687H25.275C24.3094 35.3687 20.3156 35.35 16.1281 35.2062L15.5969 35.1875L15.325 35.1749L14.7906 35.1531L14.2563 35.1312C10.7875 34.9781 7.48438 34.7312 5.9625 34.3187C4.90153 34.0318 3.93458 33.4711 3.15851 32.6929C2.38245 31.9146 1.82452 30.9461 1.54063 29.8843C1.19375 28.5812 0.9625 26.8031 0.80625 25.0156L0.78125 24.6875L0.75625 24.3624C0.602024 22.2449 0.516562 20.123 0.5 18L0.5 17.6156C0.50625 16.9437 0.53125 14.6218 0.7 12.0593L0.721875 11.7375L0.73125 11.575L0.75625 11.25L0.825 10.4375L0.85625 10.1125C1.00625 8.49058 1.22813 6.91558 1.54375 5.7312C1.82717 4.66885 2.38488 3.69967 3.16098 2.92083C3.93708 2.14199 4.90428 1.58086 5.96563 1.2937C7.4875 0.887452 10.7906 0.637451 14.2594 0.481201L14.7906 0.459326L15.3281 0.440577L15.5969 0.431202L16.1313 0.409327C19.1053 0.313622 22.0806 0.260491 25.0563 0.249951H25.6594V0.246826ZM20.5 10.2781V25.3343L33.4906 17.8093L20.5 10.2781Z" fill="#999999" />
                          </svg></a>
                        <a href=""><svg width="43" height="42" viewBox="0 0 43 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M27.9024 0.166992H15.1191C3.44408 0.166992 0.666992 2.94408 0.666992 14.5982V27.3816C0.666992 39.0545 3.42324 41.8337 15.0982 41.8337H27.8816C39.5545 41.8337 42.3337 39.0774 42.3337 27.4024V14.6191C42.3337 2.94408 39.5774 0.166992 27.9024 0.166992ZM34.3045 29.8962H31.2649C30.1149 29.8962 29.7691 28.9649 27.7066 26.9024C25.9066 25.167 25.1462 24.9503 24.6899 24.9503C24.0607 24.9503 23.8878 25.1232 23.8878 25.992V28.7253C23.8878 29.4649 23.6482 29.8982 21.717 29.8982C19.8427 29.7723 18.0252 29.2029 16.4141 28.2369C14.803 27.2708 13.4444 25.9359 12.4503 24.342C10.0903 21.4045 8.44812 17.9569 7.65449 14.2732C7.65449 13.817 7.82741 13.4045 8.69616 13.4045H11.7337C12.5149 13.4045 12.7962 13.7524 13.1024 14.5545C14.5774 18.8962 17.0941 22.6712 18.1149 22.6712C18.5066 22.6712 18.6774 22.4982 18.6774 21.5212V17.0503C18.5482 15.0107 17.4649 14.8378 17.4649 14.1003C17.4788 13.9058 17.568 13.7244 17.7134 13.5944C17.8589 13.4645 18.0492 13.3964 18.2441 13.4045H23.0191C23.6712 13.4045 23.8878 13.7295 23.8878 14.5107V20.5441C23.8878 21.1962 24.1691 21.4128 24.3649 21.4128C24.7566 21.4128 25.0587 21.1962 25.7753 20.4795C27.3146 18.6023 28.5723 16.5109 29.5087 14.2712C29.6044 14.0021 29.7855 13.7718 30.0243 13.6153C30.2632 13.4588 30.5467 13.3848 30.8316 13.4045H33.8712C34.7816 13.4045 34.9753 13.8607 34.7816 14.5107C33.6763 16.9866 32.3088 19.3369 30.7024 21.5212C30.3753 22.0212 30.2441 22.2816 30.7024 22.867C31.0045 23.3232 32.0691 24.2128 32.7857 25.0587C33.8272 26.0975 34.6921 27.2994 35.3462 28.617C35.6066 29.4628 35.1712 29.8962 34.3045 29.8962Z" fill="#999999" />
                          </svg></a>
                        <a href=""><svg width="43" height="42" viewBox="0 0 43 42" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.5003 0.166992C10.0003 0.166992 0.666992 9.50033 0.666992 21.0003C0.666992 32.5003 10.0003 41.8337 21.5003 41.8337C33.0003 41.8337 42.3337 32.5003 42.3337 21.0003C42.3337 9.50033 33.0003 0.166992 21.5003 0.166992ZM31.167 14.3337C30.8545 17.6253 29.5003 25.6253 28.8128 29.3128C28.5212 30.8753 27.9378 31.3962 27.3962 31.4587C26.1878 31.5628 25.2712 30.667 24.1045 29.8962C22.2712 28.6878 21.2295 27.9378 19.4587 26.7712C17.3962 25.417 18.7295 24.667 19.917 23.4587C20.2295 23.1462 25.5628 18.292 25.667 17.8545C25.6815 17.7882 25.6795 17.7194 25.6614 17.6541C25.6432 17.5887 25.6094 17.5288 25.5628 17.4795C25.4378 17.3753 25.2712 17.417 25.1253 17.4378C24.9378 17.4795 22.0212 19.417 16.3337 23.2503C15.5003 23.8128 14.7503 24.1045 14.0837 24.0837C13.3337 24.0628 11.917 23.667 10.8545 23.3128C9.54199 22.8962 8.52116 22.667 8.60449 21.9378C8.64616 21.5628 9.16699 21.1878 10.1462 20.792C16.2295 18.1462 20.2712 16.3962 22.292 15.5628C28.0837 13.1462 29.2712 12.7295 30.0628 12.7295C30.2295 12.7295 30.6253 12.7712 30.8753 12.9795C31.0837 13.1462 31.1462 13.3753 31.167 13.542C31.1462 13.667 31.1878 14.042 31.167 14.3337Z" fill="#999999" />
                          </svg></a>
                    </div>
                </div>
                <div class="map">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A390f8c8d7334de819fe0702ecd0566c446b6dee6044741e0624400c10e5af2a1&amp;lang=ru_RU&amp;scroll=true"></script>    
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p>© 2023 Пестовский Лесокомбинат. Все права защищены.</p>
        <p><a href="">Реквизиты</a></p>
        <p><a href="">Политика конфиденциальности</a></p>
    </footer>
</body>
</html>