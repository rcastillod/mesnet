/* -------------------------------------------------------------------------- */
/*                              Custom icon tabs                              */
/* -------------------------------------------------------------------------- */

// Create empty tab icon src array
const planTabsIcons = []

// Get icon tab from acf field
const planDuoIcon = mesnet_script_object.tab_duo
const planInternetIcon = mesnet_script_object.tab_internet

planTabsIcons.push(planDuoIcon, planInternetIcon)

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
var swiper = new Swiper(".tabSlider", {
  slidesPerView: 1,
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