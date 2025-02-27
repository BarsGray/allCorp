<?php get_header(); ?>

<body class="bg-light">
    <!-- Header -->
    <header class="bg-white shadow-sm mb-4">
        <div class="container py-3 d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <img src="https://placehold.co/100x40" alt="AllCorp 2.0" class="me-3">
                <span class="h5 mb-0">AllCorp 2.0</span>
            </div>
            
            <?php
                wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker()
                    ));
            ?>
            <nav class="d-none d-lg-flex align-items-center">
                <ul class="nav align-items-center">
                    <li class="nav-item dropdown me-3">
                        <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown">Компания</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">О нас</a></li>
                            <li><a class="dropdown-item" href="#">Команда</a></li>
                            <li><a class="dropdown-item" href="#">Вакансии</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown me-3">
                        <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown">Каталог</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Продукты</a></li>
                            <li><a class="dropdown-item" href="#">Услуги</a></li>
                        </ul>
                    </li>
                    <li class="nav-item me-3"><a href="#" class="nav-link text-dark">Услуги</a></li>
                    <li class="nav-item me-3"><a href="#" class="nav-link text-dark">Контакты</a></li>
                </ul>
            </nav>
            <div class="d-flex align-items-center">
                <div class="d-none d-md-block me-3 text-secondary">Москва, ул. Пушкина, 27</div>
                <a href="tel:+79000000030" class="btn btn-primary">+7 (900) 000-00-30</a>
            </div>
            <button class="navbar-toggler d-lg-none border-0 bg-transparent" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="mobileMenuLabel">Меню</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Закрыть"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">Компания</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Каталог</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Услуги</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Контакты</a></li>
                </ul>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
 <section class="hero-slider mb-5">
  <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://placehold.co/1920x900" class="d-block w-100" alt="Слайд 1">
        <div class="carousel-caption d-none d-md-block">
          <h2>Добро пожаловать в AllCorp 2.0</h2>
          <p>Ваш надежный партнер в бизнесе</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://placehold.co/1920x600" class="d-block w-100" alt="Слайд 2">
        <div class="carousel-caption d-none d-md-block">
          <h2>Широкий выбор услуг</h2>
          <p>Решения под любые потребности</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://placehold.co/1920x600" class="d-block w-100" alt="Слайд 3">
        <div class="carousel-caption d-none d-md-block">
          <h2>Качество и надежность</h2>
          <p>Мы гарантируем высокие стандарты</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>

    <!-- Services Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="h3 fw-bold mb-4">Наши услуги</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="https://placehold.co/700x450" alt="Автоматизация бизнеса" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Автоматизация бизнеса</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="https://placehold.co/750x500" alt="Монтаж шкафов" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Монтаж шкафов</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="https://placehold.co/800x550" alt="Программные продукты" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Программные продукты</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Products Section -->
    <section class="bg-light py-5">
        <div class="container">
            <h2 class="h3 fw-bold mb-4">Наши продукты</h2>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <img src="https://placehold.co/300x200" alt="Продукт" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Автокран КСМ 500</h5>
                            <p class="text-primary fw-bold">от 8 000 ₽/смена</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <img src="https://placehold.co/300x200" alt="Продукт" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Электрокамин Ньюпорт</h5>
                            <p class="text-primary fw-bold">19 600 ₽</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <img src="https://placehold.co/300x200" alt="Продукт" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Помпа дренажная</h5>
                            <p class="text-primary fw-bold">2 750 ₽</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <img src="https://placehold.co/300x200" alt="Продукт" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Аппарат для лазерной эпиляции</h5>
                            <p class="text-primary fw-bold">1 260 000 ₽</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="h3 fw-bold mb-4">Новости</h2>
            <div class="row g-4">
                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <img src="https://placehold.co/300x200" alt="Новость" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Новый филиал в Нижнем Новгороде</h5>
                            <p class="text-muted">17 октября 2017</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <img src="https://placehold.co/300x200" alt="Новость" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Открываем сезон конференций</h5>
                            <p class="text-muted">16 октября 2017</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <img src="https://placehold.co/300x200" alt="Новость" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Внимание! Переезд магазина!</h5>
                            <p class="text-muted">13 октября 2017</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow-sm">
                        <img src="https://placehold.co/300x200" alt="Новость" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Объявляем конкурс! Приз 100 тысяч рублей!</h5>
                            <p class="text-muted">с 1 по 20 ноября</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Articles Section -->
    <section class="py-5">
        <div class="container">
            <h2 class="h3 fw-bold mb-4">Статьи</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="https://placehold.co/300x200" alt="Статья" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">На что обращать внимание малому бизнесу при выборе CRM-системы</h5>
                            <p class="text-muted">27 февраля 2017</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="https://placehold.co/300x200" alt="Статья" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Виды газонных трав</h5>
                            <p class="text-muted">28 сентября 2017</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="https://placehold.co/300x200" alt="Статья" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Дизайн интерьера. Стиль Фьюжн</h5>
                            <p class="text-muted">2 октября 2017</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>