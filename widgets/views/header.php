<?php
/**
 *
 * header widget
 * */
?>
<header class="noFixMenu menu_right without_user_menu">
    <div class="topWrapFixed"></div>
    <div class="topWrap">
        <div class="mainmenu_area">
            <div class="main with_logo_left">
                <div class="logo logo_left">
                    <a href="index-2.html">
                        <img src="images/logo.png" class="logo_main" alt="">
                        <img src="images/logo.png" class="logo_fixed" alt="">
                        <span class="logo_slogan"></span>
                    </a>
                </div>
                <div class="search" title="Open/close search form">
                    <div class="searchForm">
                        <form method="get" class="search-form" action="#">
                            <button type="submit" class="searchSubmit" title="Start search">
                                <span class="icoSearch"></span>
                            </button>
                            <input type="text" class="searchField" placeholder="Search &hellip;" value="" name="s"
                                   title="Search for:"/>
                        </form>
                    </div>
                    <div class="ajaxSearchResults"></div>
                </div>
                <a href="#" class="openResponsiveMenu">Меню</a>
                <nav role="navigation" class="menuTopWrap topMenuStyleLine">
                    <ul id="mainmenu" class="">
                        <li class="menu-item current-menu-ancestor menu-item-has-children">
                            <a href="index-2.html">Главная</a>
                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a href="index-2.html">Спектакли</a>

                        </li>
                        <li class="menu-item menu-item-has-children columns custom_view_item">
                            <a title="Tools and Pages" href="#">
                                <span class="menu_icon icon-params"></span>
                                Репертуар
                            </a>

                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a title="Layouts and hovers" href="#">
                                <span class="menu_icon icon-thumbs-up"></span>
                                Галерея
                            </a>

                        </li>
                        <li class="menu-item menu-item-has-children">
                            <a title="Posts pages" href="#">
                                <span class="menu_icon icon-note"></span>
                                Контакты
                            </a>

                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>