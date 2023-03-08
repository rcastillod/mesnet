/* -------------------------------------------------------------------------- */
/*                              Custom icon tabs                              */
/* -------------------------------------------------------------------------- */

// Tabs
const planTabs = document.querySelectorAll('.elementor-tabs-wrapper > .elementor-tab-title')
// Tabs images source
const planTabsImages = ['http://mesnet.local/wp-content/uploads/2023/03/placeholder-pin-svgrepo-com.svg', 'http://mesnet.local/wp-content/uploads/2023/03/speedometer-svgrepo-com.svg', 'http://mesnet.local/wp-content/uploads/2023/03/browser-computing-svgrepo-com.svg']

// Create img tag to append in tab
const createImageTab = (src) => {
  const tabImg = document.createElement('img')
  tabImg.src = src
  return tabImg
}

// Iterate over each tab and insert the image
planTabs.forEach((tab, index) => {
  tab.appendChild(createImageTab(planTabsImages[index]))
})
