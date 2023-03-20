/* -------------------------------------------------------------------------- */
/*                              Custom icon tabs                              */
/* -------------------------------------------------------------------------- */

// Create empty tab icon src array
const planTabsIcons = []

// Get icon tab from acf field
const planDuoIcon = mesnet_script_object.tab_duo
const planInternetIcon = mesnet_script_object.tab_internet
const planInternetInalambricoIcon = mesnet_script_object.tab_internet_in
const planEmpresaIcon = mesnet_script_object.tab_empresa

planTabsIcons.push(planInternetIcon, planInternetInalambricoIcon, planDuoIcon, planEmpresaIcon)

// Tabs
const planTabs = document.querySelectorAll('.elementor-tabs-wrapper > .elementor-tab-title')

// Create img tag to append in tab
const createImageTab = (src) => {
  const tabImg = document.createElement('img')
  tabImg.src = src
  return tabImg
}

// Iterate over each tab and insert the image
planTabs.forEach((tab, index) => {
  tab.appendChild(createImageTab(planTabsIcons[index]))
})


/* -------------------------------------------------------------------------- */
/*                             Tabs content slider                            */
/* -------------------------------------------------------------------------- */

window.addEventListener('load', () => {

  const servicesSlider = document.querySelectorAll('.tabSlider') // Select all slider
  const swiperWrapper = document.querySelectorAll('.swiper-wrapper') // Swiper wrapper
  const mediaQuery = window.matchMedia("(max-width: 991px)") // Media query

  for (let slider = 0; slider < servicesSlider.length; slider++) {
    servicesSlider[slider].classList.add('tabSlider-' + slider);

    const swiper = new Swiper('.tabSlider-' + slider, {
      slidesPerView: 1.2,
      spaceBetween: 10,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 30,
        },
      },
    });

    if (mediaQuery.matches) {
      // Slide change event
      swiper.on('slideChange', () => {
        // Check if the slider reached the end and the slide has the class swiper-slide-active
        if (swiper.isEnd) {
          swiperWrapper[slider].style.left = 'unset'
          swiperWrapper[slider].style.right = '34px'
        } else {
          swiperWrapper[slider].style.left = '34px'
          swiperWrapper[slider].style.right = 'unset'
        }
      })
    }

  }


});