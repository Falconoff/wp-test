<?php get_header(); ?>

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

<?php get_footer(); ?>