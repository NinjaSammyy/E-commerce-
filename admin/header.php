<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
 <!-- Overlay for Setting of right bar -->
 <div id="overlay"></div>
    <!-----------------------
         Topbar
     ------------------------->
    <div class="topbar">
        <div class="humberger">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <!---------------------
            left Topbar-container 
        --------------------- -->
        <ul class="left-topbar-item">
            <!--  Search Button Large -->
            <li class="search-btn-lg">
                <a class="search-input-box" href="#">
                    <input type="text" placeholder="Search...">
                    <img src="../img/icons/search-black.svg" alt="">
                    <button>Search</button>
                </a>
                <!-- Seraching Box -->
                <div class="searching-box">
                    <h1 class="searching-head-title">
                        Found
                        <span class="danger-red">17</span>
                        Results
                    </h1>
                    <ul class="searching-option">
                        <li><a href="#"><span>Analytics Report</span></a></li>
                        <li><a href="#"><span>How can I help you?</span></a></li>
                        <li><a href="#"><span>User Profile settings</span></a></li>
                    </ul>
                    <span class="top-search-title">Users</span>
                    <ul class="top-searched">
                        <li><a href="#">
                                <span class="user-img"><img src="../img/User/Account_user_icon.jpg"></span>
                                <span>
                                    <span class="user-data">Demonic</span>
                                    <span class="user-sm-data">Founder</span>
                                </span>
                            </a>
                        </li>
                        <li><a href="#">
                                <span class="user-img"><img src="../img/User/Account_user_icon.jpg"></span>
                                <span>
                                    <span class="user-data">Vikas Kukreti</span>
                                    <span class="user-sm-data">Co-Founder</span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>

        <!------------------------
             Right Topbar Items
         ------------------------->
        <ul class="right_topbar_items">
            <li id="search-btn" class="right-topbar-item search-btn-md"><a href="#"><img
                        src="../img/icons/search-black.svg"></a>
                <div class="search_dialog_box">
                    <input type="text" placeholder="Search...">
                </div>
            </li>
            <li id="language-btn" class="right-topbar-item language_option"><a href="#"><img
                        src="../img/icons/english-lang.svg"><span class="lang-name">English</span><img class="lang-arrow"
                        src="../img/icons/downArrow.svg"></a>
                <ul class="lang-dropdown">
                    <li><a href="#"><img src="../img/icons/hindi-lang.svg"> Hindi</a></li>
                    <li><a href="#"><img src="../img/icons/english-lang.svg"> Russian</a></li>
                    <li><a href="#"><img src="../img/icons/hindi-lang.svg"> Spanish</a></li>
                    <li><a href="#"><img src="../img/icons/india-flag.svg"> French</a></li>
                </ul>
            </li>
            <li id="notification-btn" class="right-topbar-item notification-option"><a href="#"><img
                        src="../img/icons/notification.svg"></a>
                <ul class="notification-dropdown">
                    <div class="notifcation-head">
                        <span class="head1"><strong>Notification</strong></span>
                        <a href="#" class="head2">Clear All</a>
                    </div>
                    <div class="notification-box">
                        <li><a href="#"><img src="../img/icons/add-friend.svg"><span>
                                    <span class="notification-comment">Caleb Flaker Commented on Ad</span>
                                    <span class="notifcation-time">1 min ago</span>
                                </span></a></li>
                        <li><a href="#"><img src="../img/icons/comment.svg"><span>
                                    <span class="notification-comment">New User Registered</span>
                                    <span class="notifcation-time">5 min ago</span>
                                </span></a></li>
                        <li><a href="#"><img src="../img/icons/user.svg"><span>
                                    <span class="notification-comment">Vikas Kukreti is online</span>
                                    <span class="notifcation-time">10 min ago</span>
                                </span></a></li>
                        <li><a href="#"><img src="../img/icons/add-friend.svg"><span>
                                    <span class="notification-comment">Caleb Flaker Commented on Ad</span>
                                    <span class="notifcation-time">1 min ago</span>
                                </span></a></li>
                        <li><a href="#"><img src="../img/icons/comment.svg"><span>
                                    <span class="notification-comment">New User Registered</span>
                                    <span class="notifcation-time">5 min ago</span>
                                </span></a></li>
                        <li><a href="#"><img src="../img/icons/user.svg"><span>
                                    <span class="notification-comment">Vikas Kukreti is online</span>
                                    <span class="notifcation-time">10 min ago</span>
                                </span></a></li>
                    </div>
                    <div class="view-all">
                        <button>View All</button>
                    </div>
                </ul>
            </li>
            <li class="right-topbar-item"><a id="right_setting-btn" href="#"><img src="../img/icons/setting.svg"></a></li>
            <li id="right-account-btn" class="right-topbar-item Account_information">
                <a class="user-small-deatils" href="#"><span class="user-avatar">
                        <img src="../img/User/Account_user_icon.jpg">
                    </span>
                    <span>
                        <span class="user-name">Demonic</span>
                        <span class="user-designation">Founder</span>
                    </span>
                </a>
                <div id="account-dropdown" class="account-dropdown">
                    <span class="greetings">Welcome!</span>
                    <ul class="account-dropdown-items">
                        <li><a href="#"><img src="../img/icons/email-24px.svg">My Account</a></li>
                        <li><a href="#"><img src="../img/icons/accout-setting.svg">Settings</a></li>
                        <li><a href="#"><img src="../img/icons/email-24px.svg"> Support</a></li>
                        <li><a href="#"><img src="../img/icons/screen.svg"> Lock Screen</a></li>
                        <li><a href="#"><img src="../img/icons/logout.svg"> Logout</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    <div class="sub-topbar">
        <a href="adminpanel.php">DashBoard</a>
        <a href="categories.php">Category</a>
        <a href="#">data</a>
        <a href="#">Link 1</a>
        <a href="query.php">Customer Queries</a>
    </div>

    <!-- 
        Left Bar Setting Option
     -->
    <div class="right-bar-setting" id="right_setting">
        <div class="right-bar-head">
            <h4>Settings</h4>
            <a id="setting_close_btn" href="#"><img src="../img/icons/humberger.svg"></a>
        </div>
        <div class="simplebar-content">
            <div class="alert-warning">
                <strong>Customize</strong> the overall color scheme, sidebar menu etc.
            </div>
            <!-- setings -->
            <h5>Color Scheme</h5>
            <hr>
            <div class="custom-control-input">
                <input type="radio" id="light-mode-check" checked="">
                <label for="light-mode-check">Light Mode</label>
            </div>
            <div class="custom-control-input">
                <input type="radio" id="dark-mode-check" checked="">
                <label for="dark-mode-check">Dark Mode</label>
            </div>
            <h5>Left SideBar</h5>
            <hr>
            <div class="custom-control-input">
                <input type="radio" id="default-mode-check" checked="">
                <label for="default-mode-check">Default</label>
            </div>
            <div class="custom-control-input">
                <input type="radio" id="light-check" checked="">
                <label for="light-check">Light</label>
            </div>
            <div class="custom-control-input">
                <input type="radio" id="dark-check" checked="">
                <label for="dark-check">Dark</label>
            </div>
            <!-- Buttons Default -->
            <div class="setting-btn">
                <button class="normal-btn reset-btn">Reset to Default</button>
                <a class="normal-btn purchase-btn">Purchase Now</a>
            </div>
        </div>
    </div>
    <!-- 
            Left Navigation bar 
         -->
    <nav>
        <li class="nav-head-name">Demonic</li>
        <li class="nav-components-name">Navigation</li>

        <ul class="nav-dropdown-list">
            <li id="dropdown-link" class="nav-side-item"><a class="nav-dropdown-menu" href="#"><img
                        class="nav-menu-image" src="../img/icons/dashboard-black-18dp.svg"><span
                        class="menu-name">DashBoards</span></a>
                <ul id="dropdown-container" class="menu-dropdown-content">
                    <li><a href="#">Analytics</a></li>
                    <li><a href="#">CRM</a></li>
                    <li><a href="#">Ecommerce</a></li>
                    <li><a href="#">Projects</a></li>
                </ul>
            </li>

            <li class="nav-components-name">Apps</li>

            <li class="nav-side-item"><a class="nav-dropdown-menu" href="#"><img class="nav-menu-image"
                        src="../img/icons/calendar_today-24px.svg"><span class="menu-name">Calendar</span></a></li>

            <li class="nav-components-name">Components</li>
            <li id="dropdown-link" class="nav-side-item"><a class="nav-dropdown-menu" href="#"><img
                        class="nav-menu-image" src="../img/icons/work-24px.svg"><span class="menu-name"> Base UI</span></a>
                <ul id="dropdown-container" class="menu-dropdown-content">
                    <li><a href="#">Accordians</a></li>
                    <li><a href="#">Alerts</a></li>
                    <li><a href="#">Badges</a></li>
                    <li><a href="#">Cards</a></li>
                    <li><a href="#">Carousel</a></li>
                    <li><a href="#">Dropdown</a></li>
                </ul>
            </li>

        </ul>
    </nav>
    </div>
</body>
</html>