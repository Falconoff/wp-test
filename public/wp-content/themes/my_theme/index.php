<!DOCTYPE html>
<html lang="uk">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="тестове завдання для Глянець" />
  <meta name="robots" content="тестове завдання, верстка, Глянець" />

  <?php wp_head(); ?>

  <title>test</title>
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/1.1.0/modern-normalize.min.css" integrity="sha512-wpPYUAdjBVSE4KJnH1VR1HeZfpl1ub8YT/NKx4PuQ5NmX2tKuGu6U/JRp5y+Y8XG2tV+wKQpNHVUX03MfMFn9Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./css/main.css" /> -->
</head>

<body id="top">
  <header>
    <div class="header-top__wrap">
      <div class="container">
        <div class="header-top">
          <div class="header__contacts">
            <div class="socials">
              <span class="socials__title">Ми в соціальних мережах:</span>
              <ul class="socials__list">
                <li class="socials__item">
                  <a class="socials__link" href="#" target="_blank" rel="noopener noreferrer" title="ми в Telegram" aria-label="посилання на нас у Telegram">
                    <svg class="socials__icon" width="22" height="18">
                      <use href="./icons/sprite.svg#telegram"></use>
                    </svg>
                  </a>
                </li>
                <li class="socials__item">
                  <a class="socials__link" href="#" target="_blank" rel="noopener noreferrer" title="ми в Facebook" aria-label="посилання на нас у Facebook"><svg class="socials__icon" width="10" height="22">
                      <use href="./icons/sprite.svg#icon-fb"></use>
                    </svg></a>
                </li>
                <li class="socials__item">
                  <a class="socials__link" href="#" target="_blank" rel="noopener noreferrer" title="ми в Instagram" aria-label="посилання на нас у Instagram"><svg class="socials__icon" width="22" height="22">
                      <use href="./icons/sprite.svg#instagram"></use>
                    </svg></a>
                </li>
              </ul>
            </div>
            <div class="phone">
              <a class="phone__number" href="tel:+380991112233" title="подзвонити">
                <svg class="phone__icon" width="24" height="24">
                  <use href="./icons/sprite.svg#smartphone"></use>
                </svg>
                +38 099 111 22 33
                <svg class="arrow__icon" width="14" height="8">
                  <use href="./icons/sprite.svg#arrow-down"></use>
                </svg>
              </a>
            </div>
          </div>
          <nav>
            <ul class="nav__list">
              <li class="nav__item nav__item--active">
                <a href="#">головна</a>
              </li>
              <li class="nav__item"><a href="#promo">акції</a></li>
              <li class="nav__item">
                <a href="#delivery">доставка та оплата</a>
              </li>
              <li class="nav__item"><a href="#about-us">про нас</a></li>
              <li class="nav__item"><a href="#contacts">контакти</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="header-bottom">
        <ul class="categories-nav">
          <li class="categories-nav__item">
            <a href="#" class="category__link">
              дивани<svg class="arrow__icon" width="14" height="10">
                <use href="./icons/sprite.svg#arrow-down"></use>
              </svg>
            </a>
          </li>
          <li class="categories-nav__item">
            <a href="#" class="category__link">
              ліжка<svg class="arrow__icon" width="14" height="10">
                <use href="./icons/sprite.svg#arrow-down"></use>
              </svg>
            </a>
          </li>
          <li class="categories-nav__item">
            <a href="#" class="category__link">
              крісла<svg class="arrow__icon" width="14" height="10">
                <use href="./icons/sprite.svg#arrow-down"></use>
              </svg>
            </a>
          </li>
          <li class="categories-nav__item">
            <a href="#" class="category__link">
              комоди<svg class="arrow__icon" width="14" height="10">
                <use href="./icons/sprite.svg#arrow-down"></use>
              </svg>
            </a>
          </li>
          <li class="categories-nav__item">
            <a href="#" class="category__link">
              шафи<svg class="arrow__icon" width="14" height="10">
                <use href="./icons/sprite.svg#arrow-down"></use>
              </svg>
            </a>
          </li>
          <li class="categories-nav__item">
            <a href="#" class="category__link">
              кухня<svg class="arrow__icon" width="14" height="10">
                <use href="./icons/sprite.svg#arrow-down"></use>
              </svg>
            </a>
          </li>
        </ul>
        <a href="#" class="logo" title="на головну" aria-label="посилання на головну сторінку"><img src="./images/logo-black.png" alt="logo Furniture test" /></a>
        <div class="wrapper">
          <a href="#" class="cart-btn">
            <svg class="shopping-cart__icon" width="30" height="30">
              <use href="./icons/sprite.svg#shopping-cart"></use>
            </svg>кошик
          </a>
          <button class="button--accent-color" type="button">
            замовити дзвінок
          </button>
        </div>
      </div>
    </div>
  </header>

  <main>
    <section class="hero">
      <h1 class="visually-hidden">Меблі Furniture</h1>
      <img class="hero-slider__img" src="./images/hero-bg.jpg" alt="Ліжко Ornella" />
      <div class="hero-slider">
        <p class="hero-slider__title">Новинка!</p>
        <p class="hero-slider__product-name">Ліжко Ornella</p>
        <p class="hero-slider__text">Це новий рівень комфортного сну</p>
        <a class="button--accent-color" href="#">Детальніше</a>
        <p class="hero-slider__counter">
          <span class="hero-slider__current">01</span>
          <span class="hero-slider__total">/04</span>
        </p>
        <div class="hero-slider__btn-wrap">
          <button class="hero-slider__btn" type="button" title="попередній">
            <svg class="arrow__icon" width="12" height="20">
              <use href="./icons/sprite.svg#arrow-left"></use>
            </svg>
          </button>
          <button class="hero-slider__btn" type="button" title="наступний">
            <svg class="arrow__icon" width="12" height="20">
              <use href="./icons/sprite.svg#arrow-right"></use>
            </svg>
          </button>
        </div>
      </div>
    </section>

    <section class="benefits" id="delivery">
      <div class="title">
        <h2 class="title__text">Наші переваги</h2>
      </div>
      <div class="container">
        <div class="benefits__slider">
          <ul class="gallery">
            <li class="card">
              <img class="card__img" src="./images/benefits-1.jpg" alt="Елітна мебель" />
              <div class="card__overlay">
                <p class="card__title">Меблі преміум класу</p>
                <p class="card__text">
                  Меблі з ДСП та ДВП, але ну дуже якісних. Робимо як для себе,
                  але для вас!
                </p>
              </div>
            </li>
            <li class="card">
              <img class="card__img" src="./images/benefits-2.jpg" alt="Ділові люди за столом" />
              <div class="card__overlay">
                <p class="card__title">Надійність</p>
                <p class="card__text">
                  За 14 років на ринку меблів для дому ми стали надійними
                  партнерами на ринку Вінницької області та України
                </p>
              </div>
            </li>
            <li class="card">
              <img class="card__img" src="./images/benefits-3.jpg" alt="Вантажівка" />
              <div class="card__overlay">
                <p class="card__title">Безкоштовна доставка</p>
                <p class="card__text">
                  Безкоштовну доставку ви сплачуєте при купівлі мебелі. Lorem
                  ipsum dolor, sit amet consectetur adipisicing elit. Suscipit
                  labore aspernatur vel molestiae, ullam excepturi laudantium
                  quibusdam vero dolorum et numquam pariatur, dolores
                  voluptatum ex consequatur! Asperiores amet provident
                  tenetur.
                </p>
              </div>
            </li>
          </ul>

          <button class="benefits-slider__btn benefits-slider__btn--left" id="benefits-slider__prev" title="попередній">
            <svg class="arrow__icon" width="12" height="20">
              <use href="./icons/sprite.svg#arrow-left"></use>
            </svg>
          </button>
          <button class="benefits-slider__btn benefits-slider__btn--right" id="benefits-slider__next" title="наступний">
            <svg class="arrow__icon" width="12" height="20">
              <use href="./icons/sprite.svg#arrow-right"></use>
            </svg>
          </button>
        </div>
      </div>
    </section>

    <section class="categories">
      <div class="title">
        <h2 class="title__text">Категорії товарів</h2>
      </div>
      <div class="container">
        <ul class="categories__list">
          <li class="categories__item">
            <button class="cat__btn" type="button">
              <svg class="cat__img" width="100" height="100">
                <use href="./icons/sprite.svg#categs_living-room"></use>
              </svg>
              <span class="cat__name">дивани</span>
            </button>
          </li>
          <li class="categories__item">
            <button class="cat__btn" type="button">
              <svg class="cat__img" width="100" height="100">
                <use href="./icons/sprite.svg#categs_bedroom"></use>
              </svg>
              <span class="cat__name">ліжка</span>
            </button>
          </li>
          <li class="categories__item">
            <button class="cat__btn" type="button">
              <svg class="cat__img" width="100" height="100">
                <use href="./icons/sprite.svg#categs_armchair"></use>
              </svg>
              <span class="cat__name">крісла</span>
            </button>
          </li>
          <li class="categories__item">
            <button class="cat__btn" type="button">
              <svg class="cat__img" width="100" height="100">
                <use href="./icons/sprite.svg#categs_wardrobe"></use>
              </svg>
              <span class="cat__name">комоди</span>
            </button>
          </li>
          <li class="categories__item">
            <button class="cat__btn" type="button">
              <svg class="cat__img" width="100" height="100">
                <use href="./icons/sprite.svg#categs_wardrobe2"></use>
              </svg>
              <span class="cat__name">шафи</span>
            </button>
          </li>
          <li class="categories__item">
            <button class="cat__btn" type="button">
              <svg class="cat__img" width="100" height="100">
                <use href="./icons/sprite.svg#categs_kitchen"></use>
              </svg>
              <span class="cat__name">кухня</span>
            </button>
          </li>
        </ul>

        <ul class="promo-list" id="promo">
          <li class="promo-list__item">
            <a class="product" href="#"><img src="./images/promo-1.jpg" alt="Ліжко Рамона" />
              <div class="product__title">
                <p class="product__name">Ліжко Рамона</p>
                <p class="product__price">
                  <span class="product__price--current">8 999 грн</span>
                </p>
              </div>
              <p class="product__flag product__flag--hit">новинка</p>
            </a>
          </li>
          <li class="promo-list__item">
            <a class="product" href="#"><img src="./images/promo-2.jpg" alt="Ліжко Честер" />
              <div class="product__title">
                <p class="product__name">Ліжко Честер</p>
                <p class="product__price">
                  <span class="product__price--new">8 999 грн</span><span class="product__price--old">8 999 грн</span>
                </p>
              </div>
              <p class="product__flag product__flag--hit">ХІт продаж</p>
              <p class="product__flag product__flag--promo">акція</p>
            </a>
          </li>
          <li class="promo-list__item">
            <a class="product" href="#"><img src="./images/promo-3.jpg" alt="Ліжко Венеція люкс" />
              <div class="product__title">
                <p class="product__name">Ліжко Венеція люкс</p>
                <p class="product__price">
                  <span class="product__price--current">8 999 грн</span>
                </p>
              </div>
            </a>
          </li>
          <li class="promo-list__item">
            <a class="product" href="#"><img src="./images/promo-4.jpg" alt="Ліжко Імперія" />
              <div class="product__title">
                <p class="product__name">Ліжко Імперія</p>
                <p class="product__price">
                  <span class="product__price--current">8 999 грн</span>
                </p>
              </div>
              <p class="product__flag product__flag--hit">новинка</p>
            </a>
          </li>
          <li class="promo-list__item">
            <a class="product" href="#"><img src="./images/promo-5.jpg" alt="Ліжко Адель" />
              <div class="product__title">
                <p class="product__name">Ліжко Адель</p>
                <p class="product__price">
                  <span class="product__price--current">8 999 грн</span>
                </p>
              </div>
            </a>
          </li>
          <li class="promo-list__item">
            <a class="product" href="#"><img src="./images/promo-6.jpg" alt="Ліжко Атлант" />
              <div class="product__title">
                <p class="product__name">Ліжко Атлант</p>
                <p class="product__price">
                  <span class="product__price--new">8 999 грн</span><span class="product__price--old">8 999 грн</span>
                </p>
              </div>
              <p class="product__flag product__flag--hit">ХІт продаж</p>
              <p class="product__flag product__flag--promo">акція</p>
            </a>
          </li>
        </ul>
        <div class="centered">
          <a class="to-catalog-btn button--accent-color" href="#">в каталог</a>
        </div>
      </div>
    </section>

    <section class="about-us" id="about-us">
      <div class="title">
        <h2 class="title__text">Про нас</h2>
      </div>
      <div class="about-us__content">
        <img class="about-us__img" src="./images/about-us-bg.jpg" alt="менеджер з продажу мебелів консультує покупців" />
        <article class="furniture">
          <h3 class="visually-hidden">Стаття про FURNITURE</h3>
          <p>
            <span class="article__title">"FURNITURE"</span> – "Lorem ipsum
            dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim
            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
            ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
            voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
            officia deserunt mollit anim id est laborum."
          </p>
          <p>
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
            enim ad minim veniam, quis nostrud exercitation ullamco laboris
            nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
            reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur. Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deserunt mollit anim id est laborum."
          </p>
          <p>
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
            enim ad minim veniam, quis nostrud exercitation ullamco laboris
            nisi ut aliquip ex ea commodo consequat. Duis aute irure
          </p>
        </article>
      </div>
    </section>

    <section class="feedback">
      <div class="title">
        <h2 class="title__text">Залишились питання?</h2>
      </div>
      <div class="feedback__content">
        <img class="feedback__img" src="./images/feedback-bg.jpg" alt="менеджер з продажу мебелів консультує покупців" />
        <div class="feedback__form">
          <p class="form__title">Замовте консультацію</p>
          <form action="post">
            <input class="form__input" type="text" name="client-name" placeholder="Ваше ім'я" required />
            <input class="form__input" type="tel" name="client-tel" placeholder="Номер телефону" required />
            <button class="form__submit-btn button--accent-color" type="submit">
              відправити
            </button>
          </form>
          <p>
            Залиште заявку або телефонуйте за номером
            <a class="feedback__phone" href="tel:+380991112233" title="подзвонити">(099) 111 22 33</a>, і наш менеджер зв'яжеться з вами для кваліфікованої
            консультації.
          </p>
        </div>
      </div>
    </section>
  </main>
  <footer>
    <div class="footer__sidebar">
      <a href="#" class="footer__logo"><img src="./images/logo-white.png" alt="logo Furniture test" /></a>

      <div class="footer__nav-wriper">
        <div class="left-side">
          <div class="left-side__options">
            <ul class="footer__cat-list">
              <li class="footer__cat-item"><a href="#">дивани</a></li>
              <li class="footer__cat-item"><a href="#">ліжка</a></li>
              <li class="footer__cat-item"><a href="#">крісла</a></li>
              <li class="footer__cat-item"><a href="#">шафи</a></li>
              <li class="footer__cat-item"><a href="#">кухні</a></li>
              <li class="footer__cat-item"><a href="#">комоди</a></li>
            </ul>
            <ul class="footer__nav-list">
              <li class="footer__nav-item"><a href="#promo">акції</a></li>
              <li class="footer__nav-item">
                <a href="#delivery">доставка та оплата</a>
              </li>
              <li class="footer__nav-item">
                <a href="#about-us">про нас</a>
              </li>
              <li class="footer__nav-item">
                <a href="#contacts">контакти</a>
              </li>
            </ul>
          </div>
          <p class="footer__copyright">
            &#169; ТОВ Furniture, працюємо з 2006 року
          </p>
        </div>

        <div class="right-side">
          <div class="right-side__contacts" id="contacts">
            <address>
              <a class="footer__map" href="https://goo.gl/maps/fzCpC8pRtYY8eX5m9" target="_blank" rel="noopener noreferrer">
                <svg class="footer__icon footer__map-icon" width="20" height="24">
                  <use href="./icons/sprite.svg#map-pin"></use>
                </svg>
                Київ, Майдан Незалежності
              </a>
              <p class="footer__schedule">
                <svg class="footer__icon footer__calendar-icon" width="20" height="24">
                  <use href="./icons/sprite.svg#calendar"></use>
                </svg>
                Пн-Пт, з 10 до 18
              </p>
              <div class="footer__phones">
                <svg class="footer__phone-icon" width="24" height="24">
                  <use href="./icons/sprite.svg#smartphone"></use>
                </svg>
                <a class="footer__phone-num" href="tel:+380991112233" title="подзвонити">(099) 111 22 33</a>
                <a class="footer__phone-num" href="tel:+380992223344" title="подзвонити">(099) 222 33 44</a>
              </div>
            </address>
            <div class="footer__socials">
              <p class="footer__socials-title">Ми в соціальних мережах:</p>

              <ul class="footer__socials-list">
                <li class="footer__socials-item">
                  <a class="footer__socials-link" href="#" target="_blank" rel="noopener noreferrer" title="ми в Telegram" aria-label="посилання на нас у Telegram">
                    <svg class="footer__socials-icon" width="22" height="18">
                      <use href="./icons/sprite.svg#telegram"></use>
                    </svg>
                  </a>
                </li>
                <li class="footer__socials-item">
                  <a class="footer__socials-link" href="#" target="_blank" rel="noopener noreferrer" title="ми в Facebook" aria-label="посилання на нас у Facebook"><svg class="footer__socials-icon" width="10" height="22">
                      <use href="./icons/sprite.svg#icon-fb"></use>
                    </svg></a>
                </li>
                <li class="footer__socials-item">
                  <a class="footer__socials-link" href="#" target="_blank" rel="noopener noreferrer" title="ми в Instagram" aria-label="посилання на нас у Instagram"><svg class="footer__socials-icon" width="22" height="22">
                      <use href="./icons/sprite.svg#instagram"></use>
                    </svg></a>
                </li>
              </ul>
            </div>
          </div>
          <a class="footer__made-of" href="#" title="на сайт розробника">
            <img src="./images/logo-glyanets.png" alt="logo Glyanets" />ГЛЯНЕЦЬ - РОЗРОБКА ІНТЕРНЕТ-МАГАЗИНІВ
          </a>
        </div>
      </div>
    </div>
    <img class="footer__img" src="./images/footer-bg.jpg" alt="м'яка софа" />
  </footer>

  <!-- btn Up -->
  <a href="#top" class="up-btn" title="наверх" aria-label="кнопка наверх">
    <svg class="arrow-up__icon" width="20" height="20">
      <use href="./icons/sprite.svg#arrow-up"></use>
    </svg>
  </a>
</body>

</html>