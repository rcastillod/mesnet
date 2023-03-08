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
