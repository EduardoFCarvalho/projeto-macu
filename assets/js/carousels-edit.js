//https://swiperjs.com/demos --> utilizar a opção "Core"

async function runSwiperConfigs() {
  const domLoaded = await domContentLoaded.getPromise();
  if (domLoaded) {

    //====================================== Banner Carousel ==============================================
    var swiper = new Swiper(".projects-slider", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 3000,
        pauseOnMouseEnter: true,
        disableOnInteraction: false,
      },
      // pagination: {
      //   el: ".swiper-pagination",
      //   clickable: true,
      // },
      // pagination: {
      //   el: ".swiper-pagination",
      //   clickable: true,
      //   renderBullet: function (index, className) {
      //     return '<span class="' + className + '">Teste' + (index + 1) + "</span>";
      //   },
      // },
    });

    const projectLista = document.querySelectorAll('.project-list li');
    console.log(projectLista);

    swiper.on('slideChange', function () {
      console.log(swiper.activeIndex);
      // const activeSlide = swiper.slides[swiper.activeIndex].getAttribute('aria-label');
      const activeSlidePos = swiper.activeIndex;

      if(activeSlidePos != null && activeSlidePos != undefined) {
        projectLista.forEach((proj, i) => {
          proj.classList.remove('current');
        });
        projectLista[activeSlidePos].classList.add('current');
      }
    });

    if(projectLista) {
      projectLista.forEach((proj, i) => {
        proj.addEventListener('click', () => {
          swiper.slideTo(i);
        })
      })
    }

    

    //====================================== Brand Carousel ==============================================
    // var swiper = new Swiper(".brandSwiper", {
    //   slidesPerView: 2,
    //   spaceBetween: 10,
    //   autoplay: {
    //     delay: 2500,
    //     disableOnInteraction: false,
    //   },
    //   loop: true,
    //   breakpoints: {
    //     768: {
    //       slidesPerView: 3,
    //       spaceBetween: 20,
    //     },
    //     992: {
    //       slidesPerView: 4,
    //       spaceBetween: 40,
    //     },
    //     1200: {
    //       slidesPerView: 5,
    //       spaceBetween: 50,
    //     },
    //   },
    // });
    //============================================ Product Carousel ===========================================
    // var swiper = new Swiper(".productSwiper", {
    //   slidesPerView: 1,
    //   spaceBetween: 10,
    //   navigation: {
    //     nextEl: ".swiper-button-next",
    //     prevEl: ".swiper-button-prev",
    //   },
    //   autoplay: {
    //     delay: 2500,
    //     disableOnInteraction: false,
    //   },
    //   loop: true,
    //   breakpoints: {
    //     768: {
    //       slidesPerView: 2,
    //     },
    //     992: {
    //       slidesPerView: 1,
    //     },
    //     1200: {
    //       slidesPerView: 2,
    //     },
    //   },
    // });

    //============================================ Product Carousel Intern ===========================================
    // var swiper = new Swiper(".prodintSwiper", {
    //   pagination: {
    //     el: ".swiper-pagination",
    //     type: "fraction",
    //   },
    //   navigation: {
    //     nextEl: ".swiper-button-next",
    //     prevEl: ".swiper-button-prev",
    //   },
    // });


  }
}
runSwiperConfigs()


