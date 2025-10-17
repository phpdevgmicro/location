<!-- header band n navigaition by debasish starts -->

<style>
    /* Top Header Band */
    .header-band {
        width: 100%;
        background-color: #0c3666;
        color: white;
        padding: 0.4rem 1rem;
        display: flex;
        justify-content: flex-end;
        align-items: center;
        gap: 1rem;
        font-size: 1rem;
    }

    .header-band select {
        padding: 2px 4px;
        border-radius: 3px;
        color: black;
        outline: none;
    }

    /* Main Navigation */
    .main-navi-bar {
        background-color: white;
        border-bottom: 1px solid #ccc;
        position: relative;
        padding: 0;
        font-family: Rogan Regular !important;
    }

    .main-navi-bar a {
        font-size: 18px;
    }

    .main-navi-container {
        max-width: 1380px;
        margin: 0 auto;
        padding: .3rem 1rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .main-navi-logo {
        font-weight: bold;
        font-size: 1.5rem;
    }

    .main-navi-links {
        display: flex;
        gap: .8rem;
        font-weight: bold;
    }

    .main-navi-right {
        display: flex;
        align-items: center;
        gap: 2rem;
    }

    .main-navi-phone {
        background-color: #0c3666;
        color: white;
        padding: 0.5rem 0.75rem;
        border-radius: 4px;
        font-weight: bold;
        white-space: nowrap;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 5px;
    }

    .main-navi-phone:hover {
        background-color: rgb(20, 79, 147);
    }

    .main-navi-more {
        cursor: pointer;
        font-size: 1.5rem;
        display: flex;
        align-items: center;
        color: #0c3666;
    }

    .more-menu {
        list-style: none;
        padding: 0;
        margin: 0;
        background: white;
        z-index: 99999;
        width: 250px;
        position: absolute;
        right: .5rem;
        top: 86.59px;
    }

    .more-menu>li {
        position: relative;
        border-bottom: 1px solid #ddd;
        width: 100%;
    }

    .more-menu>li:last-child {
        border-bottom: none;
    }

    .more-menu a {
        display: flex;
        justify-content: space-between;
        align-items: center;
        text-decoration: none;
        padding: 2px 16px;
        color: #000;
        font-weight: 500;
    }

    .dropdown-icon {
        margin-left: 8px;
        transition: transform 0.3s ease;
    }

    .dropdown-icon.rotated {
        transform: rotate(180deg) !important;
    }

    .submenu {
        display: none !important;
        position: relative;
        background: #f9f9f9;
        border-top: 1px solid #ccc;
        animation: fadeDown 0.2s ease-in-out;
        top: 0;
        float: none;
    }

    .submenu-open {
        display: block !important;
    }


    .submenu li {
        border-bottom: 1px solid #e9e9e9;
    }

    .submenu li:last-child {
        border-bottom: none;
    }

    .submenu a {
        color: #333;
        background: #f9f9f9;
    }

    @keyframes fadeDown {
        0% {
            opacity: 0;
            transform: translateY(-5px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }


    .more-menu.hidden {
        display: none;
    }

    .main-navi-phone-span {
        color: white;
        line-height: normal;
    }

    .more-span-menu {
        font-size: 22px;
    }


    .mobile-menu {
        list-style: none;
        padding: 0;
        margin: 0;
        background: white;
        width: 100%;
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 999;
        border-top: 1px solid #ccc;
    }

    .mobile-menu li {
        border-bottom: 1px solid #eee;
    }

    .mobile-menu li a {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 3px 20px;
        text-decoration: none;
        color: #000;
    }

    .mobile-menu .submenu {
        display: none;
        background-color: #f1f1f1;
    }


    .mobile-menu .submenu a {
        padding-left: 40px;
    }

    .mobile-menu.hidden {
        display: none;
    }

    #mobileMenu {
        display: none;
    }

    .main-navi-more-desktop-hidden {
        display: none;
    }

    .locations-submenu {
        display: none;
        flex-wrap: wrap;
        max-height: 300px;
        overflow-y: auto;
        padding: 0px 10px;
        ;
        background-color: #f9f9f9;
        border-top: 1px solid #ccc;
        position: absolute;
        top: 86.59px;
        max-width: 270px;
    }

    .locations-submenu li {
        width: 100%;
    }

    li.has-submenu {
        list-style: none;
    }

    .loaction-main-menu-a {
        display: flex;
        align-items: center;
    }

    .svg-arrow-loc {
        width: 1.4rem;
        height: 1.4rem;
        flex: 0 0 auto;
        fill: none;
        stroke: currentColor;
        stroke-width: 2;
        color: #424b4b;
    }

    .submenu.locations-submenu::-webkit-scrollbar {
        width: 6px;
    }

    .submenu.locations-submenu::-webkit-scrollbar-thumb {
        background-color: rgba(0, 0, 0, 0.2);
        border-radius: 4px;
    }

    .submenu.locations-submenu::-webkit-scrollbar-track {
        background: transparent;
    }


    @media (max-width: 430px) {
        .header-band {
            font-size: 13px;
            padding: .4rem;
        }
    }


    @media (max-width: 768px) {
        .fullhsection {
            margin-top: 25px;
        }

        .main-navi-more-desktop-hidden {
            display: block;
        }

        .locations-submenu {
            display: none;
            flex-wrap: wrap;
            position: static;
            max-width: 100%;
        }

        .locations-submenu li {
            width: 100%;
        }


        .has-submenu .dropdown-icon {
            width: 40px;
            height: 40px;
        }

        #mobileMenu {
            display: block;
        }

        .main-navi-more-mobile-hidden {
            display: none;
        }

        .main-navi-links {
            display: none;
        }

        .header-band {
            justify-content: center;
        }

        .more-span-menu {
            display: none;
        }

        .main-navi-phone svg {
            margin-right: 0;
        }

        .main-navi-right {
            gap: 1rem;
        }

        .main-navi-logo img {
            width: 112px;
            height: 45px;
            object-fit: cover;
        }

        .main-navi-phone {
            height: 35px;
        }

        .main-navi-phone svg {
            width: 15px;
            height: 15px;
        }

        .main-navi-phone-span {
            font-size: 14px;
        }

        .more-menu {
            top: 62px;
            right: 0.5rem;
        }
    }

    @media (min-width: 768px) and (max-width: 1200px) {
        .locations-submenu {
            display: none;
            flex-wrap: wrap;
            position: static;
            max-width: 100%;
        }

        .locations-submenu li {
            width: 100%;
        }

        .main-navi-links {
            display: none;
        }

        .main-navi-more-desktop-hidden {
            display: block;
        }


        .has-submenu .dropdown-icon {
            width: 55px;
            height: 55px;
        }

        #mobileMenu {
            display: flex;
            flex-direction: column;
        }

        .main-navi-more-mobile-hidden {
            display: none;
        }

    }
</style>
<!-- Top Header Band -->
<div class="header-band">
    <a href="#">Patient Portal</a>
    <a href="#">Our Mission</a>
    <a href="#">Contact Us</a>
    <select id="languageSwitcher">
        <option value="" disabled selected>Language</option>
        <option value="en">English</option>
        <option value="es">Spanish</option>
    </select>


</div>

<!-- Main Navigation -->
<nav class="main-navi-bar">
    <div class="main-navi-container">
        <div class="main-navi-logo">
            <img alt="logo" width="190" height="43" loading="lazy"
                data-src="/specialtycareclinics2023/assets/images/logo.png"
                src="/specialtycareclinics2023/assets/images/logo.png">
        </div>
        <div class="main-navi-links">
            <a href="#">DOCTORS</a>
            <li class="has-submenu">
                <a class="loaction-main-menu-a" href="javascript:void(0);" onclick="toggleSubmenu(this)">
                    LOCATIONS
                    <svg class="svgarrow svg-arrow-loc" viewBox="0 0 16 16">
                        <path d="M10.8287 7L8.0003 9.82843L5.17188 7" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </svg>
                </a>
                <ul class="submenu locations-submenu">
                    <li><a href="#">Arlington</a></li>
                    <li><a href="#">Bedford</a></li>
                    <li><a href="#">Corsicana</a></li>
                    <li><a href="#">Desoto</a></li>
                    <li><a href="#">East Dallas</a></li>
                    <li><a href="#">East Plano</a></li>
                    <li><a href="#">Ennis</a></li>
                    <li><a href="#">Fannin</a></li>
                    <li><a href="#">Farmers Branch</a></li>
                    <li><a href="#">Flowermound</a></li>
                    <li><a href="#">Fort Worth</a></li>
                    <li><a href="#">Greenville</a></li>
                    <li><a href="#">Harlingen</a></li>
                    <li><a href="#">Hillsboro</a></li>
                    <li><a href="#">Houston</a></li>
                    <li><a href="#">Katy</a></li>
                    <li><a href="#">Lancaster</a></li>
                    <li><a href="#">Little Elm</a></li>
                    <li><a href="#">Mansfield</a></li>
                    <li><a href="#">McAllen</a></li>
                    <li><a href="#">Mesquite</a></li>
                    <li><a href="#">Midland</a></li>
                    <li><a href="#">Odessa</a></li>
                    <li><a href="#">Richardson</a></li>
                    <li><a href="#">San Antonio</a></li>
                    <li><a href="#">Temple</a></li>
                    <li><a href="#">Waco</a></li>
                    <li><a href="#">Waxahachie</a></li>
                    <li><a href="#">Webster</a></li>
                    <li><a href="#">Weslaco</a></li>
                    <li><a href="#">West Plano</a></li>
                </ul>


            </li>

            <a href="#">SERVICES & SPECIALTIES</a>
            <a href="#">PAY BILL</a>
            <a href="#">GET CARE NOW</a>
        </div>
        <div class="main-navi-right">
            <a href="tel:1972865445" class="main-navi-phone">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24">
                    <path fill="white"
                        d="M21.384,17.752a2.108,2.108,0,0,1-.522,3.359,7.543,7.543,0,0,1-5.476.642C10.5,20.523,3.477,13.5,2.247,8.614a7.543,7.543,0,0,1,.642-5.476,2.108,2.108,0,0,1,3.359-.522L8.333,4.7a2.094,2.094,0,0,1,.445,2.328A3.877,3.877,0,0,1,8,8.2c-2.384,2.384,5.417,10.185,7.8,7.8a3.877,3.877,0,0,1,1.173-.781,2.092,2.092,0,0,1,2.328.445Z" />
                </svg>
                <span class="main-navi-phone-span">1 (972) 865-4454</span>
            </a>
            <div class="main-navi-more main-navi-more-desktop-hidden" onclick="toggleMoreMenu()"><span
                    class="more-span-menu">More </span> &#9776;</div>
            <div class="main-navi-more main-navi-more-mobile-hidden" onclick="toggleMoreMenu1()"><span
                    class="more-span-menu">More </span> &#9776;</div>
        </div>
    </div>


    <ul id="mobileMenu" class="mobile-menu hidden">
        <li><a href="#">DOCTORS</a></li>
        <li class="has-submenu">
            <a class="loaction-main-menu-a" href="javascript:void(0);" onclick="toggleSubmenu(this)">
                LOCATIONS
                <svg class="svgarrow svg-arrow-loc" viewBox="0 0 16 16">
                    <path d="M10.8287 7L8.0003 9.82843L5.17188 7" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </a>
            <ul class="submenu locations-submenu">
                <li><a href="#">Arlington</a></li>
                <li><a href="#">Bedford</a></li>
                <li><a href="#">Corsicana</a></li>
                <li><a href="#">Desoto</a></li>
                <li><a href="#">East Dallas</a></li>
                <li><a href="#">East Plano</a></li>
                <li><a href="#">Ennis</a></li>
                <li><a href="#">Fannin</a></li>
                <li><a href="#">Farmers Branch</a></li>
                <li><a href="#">Flowermound</a></li>
                <li><a href="#">Fort Worth</a></li>
                <li><a href="#">Greenville</a></li>
                <li><a href="#">Harlingen</a></li>
                <li><a href="#">Hillsboro</a></li>
                <li><a href="#">Houston</a></li>
                <li><a href="#">Katy</a></li>
                <li><a href="#">Lancaster</a></li>
                <li><a href="#">Little Elm</a></li>
                <li><a href="#">Mansfield</a></li>
                <li><a href="#">McAllen</a></li>
                <li><a href="#">Mesquite</a></li>
                <li><a href="#">Midland</a></li>
                <li><a href="#">Odessa</a></li>
                <li><a href="#">Richardson</a></li>
                <li><a href="#">San Antonio</a></li>
                <li><a href="#">Temple</a></li>
                <li><a href="#">Waco</a></li>
                <li><a href="#">Waxahachie</a></li>
                <li><a href="#">Webster</a></li>
                <li><a href="#">Weslaco</a></li>
                <li><a href="#">West Plano</a></li>
            </ul>


        </li>

        <li><a href="#">SERVICES & SPECIALTIES</a></li>
        <li><a href="#">PAY BILL</a></li>
        <li><a href="#">GET CARE NOW</a></li>

        <li class="has-submenu">
            <a href="javascript:void(0);" onclick="toggleSubmenu(this)">
                Patient Portal Login
                <svg class="svgarrow svg-arrow-loc" viewBox="0 0 16 16">
                    <path d="M10.8287 7L8.0003 9.82843L5.17188 7" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                </svg>
            </a>
            <ul class="submenu">
                <li><a href="#">Schedule an Appointment</a></li>
            </ul>
        </li>

        <li><a href="#">Patient Resources</a></li>
        <li><a href="#">After Care</a></li>
        <li><a href="#">About Specialty Care Clinics</a></li>

        <li class="has-submenu">
            <a href="javascript:void(0);" onclick="toggleSubmenu(this)">
                Careers
                <svg class="svgarrow svg-arrow-loc" viewBox="0 0 16 16">
                    <path d="M10.8287 7L8.0003 9.82843L5.17188 7" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                </svg>
            </a>
            <ul class="submenu">
                <li><a href="#">Physician Resources</a></li>
            </ul>
        </li>

        <li><a href="#">Contact Us</a></li>
    </ul>

    <ul id="moreMenu" class="more-menu hidden">
        <li class="has-submenu">
            <a href="javascript:void(0);" onclick="toggleSubmenu(this)">
                Patient Portal Login
                <svg class="svgarrow svg-arrow-loc" viewBox="0 0 16 16">
                    <path d="M10.8287 7L8.0003 9.82843L5.17188 7" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                </svg>
            </a>
            <ul class="submenu">

                <li><a href="#">Schedule an Appointment</a></li>

            </ul>
        </li>
        <li><a href="#">Patient Resources</a></li>
        <li><a href="#">After Care</a></li>
        <li><a href="#">About Specialty Care Clinics</a></li>

        <li class="has-submenu">
            <a href="javascript:void(0);" onclick="toggleSubmenu(this)">
                Careers
                <svg class="svgarrow svg-arrow-loc" viewBox="0 0 16 16">
                    <path d="M10.8287 7L8.0003 9.82843L5.17188 7" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                </svg>
            </a>
            <ul class="submenu">
                <li><a href="#">Physician Resources</a></li>
            </ul>
        </li>

        <li><a href="#">Contact Us</a></li>
    </ul>



</nav>
<script>
    function toggleMoreMenu() {
        document.getElementById("mobileMenu").classList.toggle("hidden");
    }

    function toggleMoreMenu1() {
        document.getElementById("moreMenu").classList.toggle("hidden");
    }

    function toggleSubmenu(element) {
        const submenu = element.parentElement.querySelector(".submenu");
        const icon = element.querySelector(".dropdown-icon");

        if (submenu) {
            const isOpen = submenu.classList.contains("submenu-open");
            submenu.classList.toggle("submenu-open", !isOpen);

            if (icon) {
                icon.classList.toggle("rotated", !isOpen);
            }
        }
    }

    function getCurrentLang() {
        const match = document.cookie.match(/googtrans=\/en\/(\w+)/);
        return match ? match[1] : '';
    }

    function setLanguage(lang) {
        if (!lang) return;
        document.cookie = `googtrans=/en/${lang}; path=/`;
        document.cookie = `googtrans=/en/${lang}; domain=${window.location.hostname}; path=/`;
        location.reload();
    }

    document.addEventListener('DOMContentLoaded', () => {
        const langSelect = document.getElementById('languageSwitcher');
        const currentLang = getCurrentLang();

        if (currentLang) {
            langSelect.value = currentLang;
        }

        langSelect.addEventListener('change', function () {
            setLanguage(this.value);
        });
    });



</script>

<!-- header band n navigation by debasish ends -->