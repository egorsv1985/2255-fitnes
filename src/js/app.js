/*
(i) Код попадает в итоговый файл,
только когда вызвана функция,
например flsFunctions.spollers();
Или когда импортирован весь файл,
например import "files/script.js";
Неиспользуемый (не вызванный)
код в итоговый файл не попадает.

Если мы хотим добавить модуль
следует его расскоментировать
*/

// Включить/выключить FLS (Full Logging System) (в работе)
window["FLS"] = true;

// Подключение основного файла стилей
import "../scss/style.scss";
// import "/node_modules/bootstrap/js/dist/*.js";
// ========================================================================================================================================================================================================================================================
// Функционал ========================================================================================================================================================================================================================================================
// ========================================================================================================================================================================================================================================================
import * as flsFunctions from "./files/functions.js";

/* Проверка поддержки webp, добавление класса webp или no-webp для HTML */
/* (i) необходимо для корректного отображения webp из css  */
flsFunctions.isWebp();
/* Добавление класса touch для HTML если браузер мобильный */
// flsFunctions.addTouchClass();
/* Добавление loaded для HTML после полной загрузки страницы */
// flsFunctions.addLoadedClass();
/* Модуль для работы с меню (Бургер) */
flsFunctions.menuInit();
/* Учет плавающей панели на мобильных устройствах при 100vh */
// flsFunctions.fullVHfix();

/*
Модуль работы со спойлерами
Документация:
Сниппет (HTML): spollers
*/
// flsFunctions.spollers();

/*
Модуль работы с табами
Документация:
Сниппет (HTML): tabs
*/
// flsFunctions.tabs();

/*
Модуль "показать еще"
Документация по работе в шаблоне:
Сниппет (HTML): showmore
*/
// flsFunctions.showMore();

/*
Попапы
Документация по работе в шаблоне:
Сниппет (HTML): pl
*/
import "./libs/popup.js";

/*
Модуль параллакса мышью
Документация по работе в шаблоне:
Сниппет (HTML): 
*/
// import './libs/parallax-mouse.js'

// ========================================================================================================================================================================================================================================================
// Работа с формами ========================================================================================================================================================================================================================================================
// ========================================================================================================================================================================================================================================================
import * as flsForms from "./files/forms/forms.js";

/* Работа с полями формы: добавление классов, работа с placeholder. */
// flsForms.formFieldsInit();

/* Oтправка формы со встроенной валидацией полей. false - отключит валидацию */
// flsForms.formSubmit(true);

/* Модуль формы "количество" */
// flsForms.formQuantity();

/* Модуль формы "показать пароль" */
// flsForms.formViewpass();

/* Модуль звездного рейтинга */
// flsForms.formRating();

/* Модуль работы с select. */
// import './libs/select.js'

/* (В работе) Модуль работы с масками.*/
/*
Подключение и настройка выполняется в файле js/files/forms/inputmask.js
Документация по работе в шаблоне:
Документация плагина: https://github.com/RobinHerbots/inputmask
Сниппет(HTML):
*/
// import "./files/forms/inputmask.js";

/* Модуль работы с ползунком */
/*
Подключение и настройка выполняется в файле js/files/forms/range.js
Документация по работе в шаблоне:
Документация плагина: https://refreshless.com/nouislider/
Сниппет (HTML): range
*/
// import "./files/forms/range.js";

/* Модуль работы с подсказками (tippy) */
/*
Подключение плагина Tippy.js и настройка выполняется в файле js/files/tippy.js
Документация по работе в шаблоне:
Документация плагина: https://atomiks.github.io/tippyjs/
Сниппет (HTML): tip (добавляет атрибут с подсказкой для html тега)
*/
// import "./files/tippy.js";

// ========================================================================================================================================================================================================================================================
// Работа со слайдером (Swiper) ========================================================================================================================================================================================================================================================
// ========================================================================================================================================================================================================================================================
/*
Настройка подключения плагина слайдера Swiper и новых слайдеров выполняется в файле js/files/sliders.js
Документация по работе в шаблоне:
Документация плагина: https://swiperjs.com/
Сниппет(HTML): swiper
*/
import "./files/sliders.js";

// Модули работы с прокруткой страницы ========================================================================================================================================================================================================================================================

/*
Изменение дизайна скроллбара
Документация по работе в шаблоне: В HTML добавляем к блоку атрибут data-simplebar
Документация плагина: https://github.com/Grsmto/simplebar/tree/master/packages/simplebar
Сниппет(HTML): 
*/
// import './files/scroll/simplebar.js';

// Ленивая (отложенная) загрузка картинок
// Документация по работе в шаблоне: В HTML добавляем img, video, audio, iframe но вместо src пишем data-src
// Документация плагина: https://github.com/verlok/vanilla-lazyload
// Сниппет(HTML):
//import './files/scroll/lazyload.js';

// Наблюдатель за объектами c атрибутом data-watch
// Документация по работе в шаблоне: js/libs/watcher.js
// Сниппет(HTML):
// import './libs/watcher.js'

// Функции работы скроллом
import * as flsScroll from "./files/scroll/scroll.js";

// Плавная навигация по странице
flsScroll.pageNavigation();

// Функционал добавления классов к хедеру при прокрутке
flsScroll.headerScroll();

// Функционал липкого блока
// flsScroll.stickyBlock();

/*
Документация по работе в шаблоне: https://www.lightgalleryjs.com/docs/
Документация плагина: https://www.lightgalleryjs.com/docs/
Сниппет(HTML):
*/
// import "./files/gallery.js";

// Прочие плагины ============================================================================================================================================================================================================================================================================================================

/* Динамический адаптив */
// import "./libs/dynamic_adapt.js";

/* Форматирование чисел */
// import './libs/wNumb.min.js';

// Прочее ========================================================================================================================================================================================================================================================

/* Подключаем файлы со своим кодом */
import "./files/script.js";
//============================================================================================================================================================================================================================================

const body = document.body;
const scrollUp = "scroll-up";
const scrollDown = "scroll-down";
let lastScroll = 0;

window.addEventListener("scroll", () => {
  const currentScroll = window.pageYOffset;
  if (currentScroll <= 0) {
    body.classList.remove(scrollUp);
    return;
  }

  if (currentScroll > lastScroll && !body.classList.contains(scrollDown)) {
    // down
    body.classList.remove(scrollUp);
    body.classList.add(scrollDown);
    // lottiePlayer.play();
  } else if (
    currentScroll < lastScroll &&
    body.classList.contains(scrollDown)
  ) {
    // up
    body.classList.remove(scrollDown);
    body.classList.add(scrollUp);
    // lottiePlayer.stop();
  }
  lastScroll = currentScroll;
});

// Инициализация swiper для каждой вкладки
const tabContents = document.querySelectorAll(".tabpanel");
tabContents.forEach((content) => {
  const swiper = new Swiper(content.querySelector(".swiper"), {
    // настройки swiper

    slidesPerView: "1",
    spaceBetween: 20,
    breakpoints: {
      768: {
        slidesPerView: 2,
        spaceBetween: 30,
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 60,
      },
    },

    loop: true,

    grabCursor: true, // опция для изменения курсора при наведении на слайдер
  });
});

// Обработчик событий клика на вкладку
const tabs = document.querySelectorAll(".tab");
tabs.forEach((tab) => {
  tab.addEventListener("click", (e) => {
    e.preventDefault();
    // установка активной вкладки
    tabs.forEach((tab) => tab.classList.remove("active"));
    tab.classList.add("active");
    // отображение соответствующей панели
    const tabContentId = tab.getAttribute("href");
    tabContents.forEach((content) => {
      content.classList.remove("active");
      if ("#" + content.getAttribute("id") === tabContentId) {
        content.classList.add("active");
      }
    });
  });
});

const tablist = document.querySelector("#tablist");
const tablistItems = tablist.querySelectorAll("li");
const tabPanels = document.querySelectorAll(".tabpanel");
const swiper = document.querySelectorAll(".trainerSwiper");

// Отключаем дефолтный режим перехода по ссылкам
for (const tablistItem of tablistItems) {
  const tabLink = tablistItem.querySelector("a");

  tabLink.addEventListener("click", (e) => {
    e.preventDefault();
    showPanel(tabLink);
  });
}

// Переключаемся на панель
function showPanel(tab) {
  // Находим панель соответствующую выбранному табу
  const selectedTab = document.querySelector(tab.getAttribute("href"));
  // Скрываем неактивные панели и показываем выбранную панель
  for (const tabPanel of tabPanels) {
    if (tabPanel === selectedTab) {
      tabPanel.classList.add("active");
      // Инициализация Swiper для первой вкладки
      initSwiper(selectedTab);
    } else {
      tabPanel.classList.remove("active");
    }
  }
}

// Инициализация Swiper
function initSwiper(panel) {
  const swiperContainer = panel.querySelector(".trainerSwiper");
  if (!swiperContainer.classList.contains("swiper-container-initialized")) {
    new Swiper(swiperContainer, {
      slidesPerView: "1",
      spaceBetween: 20,
      breakpoints: {
        768: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
        1200: {
          slidesPerView: 3,
          spaceBetween: 60,
        },
      },

      loop: true,

      grabCursor: true, // опция для изменения курсора при наведении на слайдер
    });
    swiperContainer.classList.add("swiper-container-initialized");
  }
}
const gallerySwipers = new Swiper(".gallerySwiper", {
  // Опции Swiper
  slidesPerView: "1",
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  paginationType: "fraction",

  grabCursor: true,
});
// Активация первой вкладки при загрузке страницы
showPanel(tablistItems[0].querySelector("a"));

// Получаем все элементы с классом "gallery__tab"
const galleryTabs = document.querySelectorAll(".gallery__tab");

// Добавляем обработчик события "click" на каждый элемент "gallery__tab"
galleryTabs.forEach((tab) => {
  tab.addEventListener("click", (event) => {
    event.preventDefault(); // Предотвращаем действие по умолчанию (например, переход по ссылке)
    // Удаляем класс "active" у всех элементов "gallery__tab"
    galleryTabs.forEach((tab) => {
      tab.classList.remove("active");
    });
    // Добавляем класс "active" только на текущий элемент "gallery__tab", на который был клик
    tab.classList.add("active");
  });
});
