const body = document.querySelector('body')
const topbar = document.querySelector('.topbar')
const searchInputBox = topbar.querySelector('.search-input-box')
const inputBox = searchInputBox.querySelector('input')
const overlay = body.querySelector('#overlay')

// Navigation left bar elemnts
const nav = body.querySelector('nav')
const humberger = body.querySelector('.humberger')
// Settings right bar animation

const rightBarSetting = topbar.querySelector('#right_setting-btn')
const settingCloseBtn = body.querySelector('#setting_close_btn')

// Right bar container
const rightBarContainer = body.querySelector('#right_setting')

// Account element
const rightAccountBtn = body.querySelector('#right-account-btn')
const accountDropdown = rightAccountBtn.querySelector('#account-dropdown')

// Langauge elements
const languageBtn = body.querySelector('#language-btn')
const languageDropdown = languageBtn.querySelector('.lang-dropdown')

// Notification elements 
const notificationBtn = body.querySelector('#notification-btn')
const notificationDropdown = body.querySelector('.notification-dropdown')

// Search btn md 
const searchBtn = body.querySelector('#search-btn')
const search_dialog_box = searchBtn.querySelector('.search_dialog_box')


// Left Navigation Menu bar dropdown Elements
const navSideItem = body.querySelectorAll('#dropdown-link > a');


//  Left Navigation Menu bar dropdown  function 
navSideItem.forEach(element => {
    element.addEventListener('click', (e) =>  {
        const dropdown = element.parentElement.querySelector('#dropdown-container');
        if (dropdown.style.height == '') {
            dropdown.style.height = dropdown.scrollHeight + 'px';
        } else {
            dropdown.style.height = ''
        }
    });
}); 



// searching function
searchBtn.addEventListener('click', () => {
    if (search_dialog_box.classList.contains('active')) {
        search_dialog_box.classList.remove('active');
        
    } else {
        search_dialog_box.classList.add('active');
        notificationDropdown.classList.remove('active')
        humberger.classList.remove('active')
        nav.classList.remove('active')
        languageDropdown.classList.remove('active')
        accountDropdown.classList.remove('active')
    }
});



// Notification function 
let menuState1 = 0
notificationBtn.addEventListener('click', () => {
    if (menuState1 == 0) {
        notificationDropdown.classList.add('active')

        search_dialog_box.classList.remove('active');
        languageDropdown.classList.remove('active')
        humberger.classList.remove('active')
        accountDropdown.classList.remove('active')
        nav.classList.remove('active')
        menuState1 = 1;
    } else if (menuState1 == 1) {
        notificationDropdown.classList.remove('active')
        menuState1 = 0;
    }
});


// language Function
let menuState = 0
languageBtn.addEventListener('click', () => {
    if (menuState == 0) {
        languageDropdown.classList.add('active')

        notificationDropdown.classList.remove('active')
        search_dialog_box.classList.remove('active');
        humberger.classList.remove('active')
        nav.classList.remove('active')
        accountDropdown.classList.remove('active')
        menuState = 1;
    } else if (menuState == 1) {
        languageDropdown.classList.remove('active')
        menuState = 0;
    }
});


// Right Bar Setting open Function
rightBarSetting.addEventListener('click', () => {
    rightBarContainer.classList.add('active')

    search_dialog_box.classList.remove('active');
    notificationDropdown.classList.remove('active')
    humberger.classList.remove('active')
    accountDropdown.classList.remove('active')
    nav.classList.remove('active')
    languageDropdown.classList.remove('active')
    overlay.classList.add('active')
});

// Righ bar setting Close function
settingCloseBtn.addEventListener('click', () => {
    rightBarContainer.classList.remove('active')
    overlay.classList.remove('active')
    humberger.classList.remove('active')
    nav.classList.remove('active')
    languageDropdown.classList.remove('active')
    accountDropdown.classList.remove('active')
    search_dialog_box.classList.remove('active');
});

// Overlay of right navigation bar
overlay.addEventListener('click', () => {
    overlay.classList.remove('active')
    rightBarContainer.classList.remove('active')
    notificationDropdown.classList.remove('active')
    humberger.classList.remove('active')
    nav.classList.remove('active')
    languageDropdown.classList.remove('active')
    search_dialog_box.classList.remove('active');
    accountDropdown.classList.remove('active')
});


// Account Dropdown Menu 
let count = 0;
rightAccountBtn.addEventListener('click', () => {
    if (count == 0) {
        accountDropdown.classList.add('active')
        
        notificationDropdown.classList.remove('active')
        humberger.classList.remove('active')
        nav.classList.remove('active')
        languageDropdown.classList.remove('active')
        search_dialog_box.classList.remove('active');
        count = 1;
    } else if (count == 1) {
        accountDropdown.classList.remove('active')
        count = 0;
    }
});



// Input box of searching
inputBox.addEventListener('input', (e) => {
    const searchString = e.target.value;
    const searching_box = topbar.querySelector('.searching-box')
    if (searchString === '') {
        searching_box.style.height = '0';
    } else {
        searching_box.style.height = searching_box.scrollHeight + 'px';
    }
});

// HUmberger left naviagation bar function 
let state = 0
humberger.addEventListener('click', () => {
    if(state == 0) {
        humberger.classList.add('active')
        nav.classList.add('active')

        notificationDropdown.classList.remove('active')
        languageDropdown.classList.remove('active')
        search_dialog_box.classList.remove('active');
        accountDropdown.classList.remove('active')
        state = 1;
    } else if (state == 1) {
        humberger.classList.remove('active')
        nav.classList.remove('active')
        state = 0;
    }
});



