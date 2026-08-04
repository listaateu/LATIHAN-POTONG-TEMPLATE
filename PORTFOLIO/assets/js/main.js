/**
 * Template Name: iPortfolio - Fixed for Portfolio Project
 * Updated: Custom Fixed Version
 * Author: BootstrapMade.com / Custom Fix
 */

(function() {
    "use strict";

    /**
     * Header toggle (Fungsi untuk tombol menu mobile)
     */
    const headerToggleBtn = document.querySelector('.header-toggle');

    function headerToggle() {
        const header = document.querySelector('#header');
        // Cek apakah element header ada sebelum melakukan toggle class
        if (header) {
            header.classList.toggle('header-show');
        }
        // Cek apakah tombol toggle ada sebelum mengubah icon
        if (headerToggleBtn) {
            headerToggleBtn.classList.toggle('bi-list');
            headerToggleBtn.classList.toggle('bi-x');
        }
    }

    // FIXED: Tambahkan pengecekan 'if (headerToggleBtn)' agar tidak error NULL
    if (headerToggleBtn) {
        headerToggleBtn.addEventListener('click', headerToggle);
    }

    /**
     * Hide mobile nav on same-page/hash links
     */
    const navMenuLinks = document.querySelectorAll('#navmenu a');
    if (navMenuLinks.length > 0) {
        navMenuLinks.forEach(navmenu => {
            navmenu.addEventListener('click', () => {
                if (document.querySelector('.header-show')) {
                    headerToggle();
                }
            });
        });
    }

    /**
     * Toggle mobile nav dropdowns
     */
    const navMenuDropdowns = document.querySelectorAll('.navmenu .toggle-dropdown');
    if (navMenuDropdowns.length > 0) {
        navMenuDropdowns.forEach(navmenu => {
            navmenu.addEventListener('click', function(e) {
                e.preventDefault();
                if (this.parentNode && this.parentNode.nextElementSibling) {
                    this.parentNode.classList.toggle('active');
                    this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
                    e.stopImmediatePropagation();
                }
            });
        });
    }

    /**
     * Preloader
     */
    const preloader = document.querySelector('#preloader');
    if (preloader) {
        window.addEventListener('load', () => {
            preloader.remove();
        });
    }

    /**
     * Scroll top button
     */
    const scrollTop = document.querySelector('.scroll-top');

    function toggleScrollTop() {
        if (scrollTop) {
            window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
        }
    }

    // FIXED: Tambahkan pengecekan 'if (scrollTop)' agar tidak error NULL
    if (scrollTop) {
        scrollTop.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    window.addEventListener('load', toggleScrollTop);
    document.addEventListener('scroll', toggleScrollTop);

    /**
     * Animation on scroll function and init
     */
    function aosInit() {
        // Cek apakah library AOS sudah dimuat di HTML
        if (typeof AOS !== 'undefined') {
            AOS.init({
                duration: 600,
                easing: 'ease-in-out',
                once: true,
                mirror: false
            });
        }
    }
    window.addEventListener('load', aosInit);

    /**
     * Init typed.js
     */
    const selectTyped = document.querySelector('.typed');
    // Cek apakah element .typed ada DAN library Typed sudah dimuat
    if (selectTyped && typeof Typed !== 'undefined') {
        let typed_strings = selectTyped.getAttribute('data-typed-items');
        if (typed_strings) {
            typed_strings = typed_strings.split(',');
            new Typed('.typed', {
                strings: typed_strings,
                loop: true,
                typeSpeed: 100,
                backSpeed: 50,
                backDelay: 2000
            });
        }
    }

    /**
     * Initiate Pure Counter
     */
    // Cek apakah library PureCounter sudah dimuat
    if (typeof PureCounter !== 'undefined') {
        new PureCounter();
    }

    /**
     * Animate the skills items on reveal
     */
    const skillsAnimation = document.querySelectorAll('.skills-animation');
    // Cek apakah element skills-animation ada DAN library Waypoint sudah dimuat
    if (skillsAnimation.length > 0 && typeof Waypoint !== 'undefined') {
        skillsAnimation.forEach((item) => {
            new Waypoint({
                element: item,
                offset: '80%',
                handler: function(direction) {
                    const progress = item.querySelectorAll('.progress .progress-bar');
                    progress.forEach(el => {
                        el.style.width = el.getAttribute('aria-valuenow') + '%';
                    });
                }
            });
        });
    }

    /**
     * Initiate glightbox
     */
    // Cek apakah library GLightbox sudah dimuat
    if (typeof GLightbox !== 'undefined') {
        const glightbox = GLightbox({
            selector: '.glightbox'
        });
    }

    /**
     * Init isotope layout and filters
     */
    const isotopeLayouts = document.querySelectorAll('.isotope-layout');
    // Cek apakah element isotope-layout ada DAN library Isotope & imagesLoaded sudah dimuat
    if (isotopeLayouts.length > 0 && typeof Isotope !== 'undefined' && typeof imagesLoaded !== 'undefined') {
        isotopeLayouts.forEach(function(isotopeItem) {
            let layout = isotopeItem.getAttribute('data-layout') || 'masonry';
            let filter = isotopeItem.getAttribute('data-default-filter') || '*';
            let sort = isotopeItem.getAttribute('data-sort') || 'original-order';

            let initIsotope;
            const isotopeContainer = isotopeItem.querySelector('.isotope-container');
            if (isotopeContainer) {
                imagesLoaded(isotopeContainer, function() {
                    initIsotope = new Isotope(isotopeContainer, {
                        itemSelector: '.isotope-item',
                        layoutMode: layout,
                        filter: filter,
                        sortBy: sort
                    });
                });
            }

            const filtersList = isotopeItem.querySelectorAll('.isotope-filters li');
            if (filtersList.length > 0) {
                filtersList.forEach(function(filters) {
                    filters.addEventListener('click', function() {
                        const activeFilter = isotopeItem.querySelector('.isotope-filters .filter-active');
                        if (activeFilter) {
                            activeFilter.classList.remove('filter-active');
                        }
                        this.classList.add('filter-active');
                        if (initIsotope) {
                            initIsotope.arrange({
                                filter: this.getAttribute('data-filter')
                            });
                        }
                        if (typeof aosInit === 'function') {
                            aosInit();
                        }
                    }, false);
                });
            }
        });
    }

    /**
     * Init swiper sliders
     */
    function initSwiper() {
        const swiperElements = document.querySelectorAll(".init-swiper");
        // Cek apakah element swiper ada DAN library Swiper sudah dimuat
        if (swiperElements.length > 0 && typeof Swiper !== 'undefined') {
            swiperElements.forEach(function(swiperElement) {
                const configEl = swiperElement.querySelector(".swiper-config");
                if (configEl) {
                    let config = JSON.parse(configEl.innerHTML.trim());
                    if (swiperElement.classList.contains("swiper-tab")) {
                        if (typeof initSwiperWithCustomPagination === 'function') {
                            initSwiperWithCustomPagination(swiperElement, config);
                        }
                    } else {
                        new Swiper(swiperElement, config);
                    }
                }
            });
        }
    }

    window.addEventListener("load", initSwiper);

    /**
     * Correct scrolling position upon page load for URLs containing hash links.
     */
    window.addEventListener('load', function(e) {
        if (window.location.hash) {
            const section = document.querySelector(window.location.hash);
            if (section) {
                setTimeout(() => {
                    let scrollMarginTop = getComputedStyle(section).scrollMarginTop;
                    window.scrollTo({
                        top: section.offsetTop - parseInt(scrollMarginTop),
                        behavior: 'smooth'
                    });
                }, 100);
            }
        }
    });

    /**
     * Navmenu Scrollspy
     */
    const navMenuLinksSpy = document.querySelectorAll('.navmenu a');

    function navmenuScrollspy() {
        if (navMenuLinksSpy.length > 0) {
            navMenuLinksSpy.forEach(navmenulink => {
                if (!navmenulink.hash) return;
                const section = document.querySelector(navmenulink.hash);
                if (!section) return;
                let position = window.scrollY + 200;
                if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
                    document.querySelectorAll('.navmenu a.active').forEach(link => link.classList.remove('active'));
                    navmenulink.classList.add('active');
                } else {
                    navmenulink.classList.remove('active');
                }
            });
        }
    }
    window.addEventListener('load', navmenuScrollspy);
    document.addEventListener('scroll', navmenuScrollspy);

})();