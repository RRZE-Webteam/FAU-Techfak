jQuery(document).ready(function ($) {
        var $html = $('html');
        var $body = $('body');

        // This browser supports JS
        $html.removeClass('no-js').addClass('js');
        // Add JS-enabled class to body
        $body.addClass('js-enabled responsive-large');

        var sliderFade = $body.hasClass('slider-fade');
        var sliderAutostart = $body.hasClass('slider-autoplay');
        var sliderAdaptiveHeight = $body.hasClass('slider-adaptiveHeight');
        var forceClick = $body.hasClass('mainnav-forceclick');
        var hasLogo = !$body.hasClass('nologo');
        var swapLogo = !$body.hasClass('md-showsitelogo');
        var $openflyover = false;
        var breakMD = 768;


        //  Slider
        var autostart = !!sliderAutostart;
        var pauseOnHovervar = autostart
        var showdots = false;
        var fadeit = !!sliderFade;
        var adaptiveHeight = !!sliderAdaptiveHeight;
        var autoplaySpeedval = 7000;
        var sliderNextHTML = '<button type="button" class="slick-next">Next</button>';
        var sliderPrevHTML = '<button type="button" class="slick-prev">Vor</button>';
        var stopSliderHTML = 'Stop Animation';
        var startSliderHTML = 'Start Animation';

        if ($('html').attr('lang') == 'de-DE') {
            sliderNextHTML = '<button type="button" class="slick-next">Weiter</button>';
            sliderPrevHTML = '<button type="button" class="slick-prev">Vor</button>';
            stopSliderHTML = 'Animation stoppen';
            startSliderHTML = 'Animation starten';
        }

        if ($.fn.slick) {
            $('.featured-slider').slick({
                dots: showdots,
                slidesToShow: 1,
                autoplay: autostart,
                cssEase: 'ease',
                draggable: true,
                pauseOnHover: pauseOnHovervar,
                pauseOnFocus: pauseOnHovervar,
                infinite: true,
                adaptiveHeight: adaptiveHeight,
                fade: fadeit,
                autoplaySpeed: autoplaySpeedval,
                nextArrow: sliderNextHTML,
                prevArrow: sliderPrevHTML,
                // mobileFirst: true,
                appendArrows: '.slider-controls',
            });

            $('.slick-startstop').on('click', function () {
                if ($('.slick-startstop').hasClass("stopped")) {
                    $('.featured-slider').slick('slickPlay');
                    $('.slick-startstop').removeClass('stopped');
                    $('.slick-startstop').html(stopSliderHTML);
                } else {
                    $('.featured-slider').slick('slickPause');
                    $('.slick-startstop').addClass('stopped');
                    $('.slick-startstop').html(startSliderHTML);
                }
            })
        }

        // Fancybox for lightboxes
        $('a.lightbox').fancybox({ helpers: { title: { type: 'outside' } } });

        // Assistant tabs
        $('.assistant-tabs-nav a').bind('click', function (event) {
            event.preventDefault();
            var pane = $(this).attr('href');
            $(this).parents('ul').find('a').removeClass('active');
            $(this).addClass('active');
            $(this).parents('.assistant-tabs').find('.assistant-tab-pane').removeClass('assistant-tab-pane-active');
            $(pane).addClass('assistant-tab-pane-active');
        });

        // Keyboard navigation for assistant tabs
        $('.assistant-tabs-nav a').keydown('click', function (event) {
            if (event.keyCode == 32) {
                var pane = $(this).attr('href');
                $(this).parents('ul').find('a').removeClass('active');
                $(this).addClass('active');
                $(this).parents('.assistant-tabs').find('.assistant-tab-pane').removeClass('assistant-tab-pane-active');
                $(pane).addClass('assistant-tab-pane-active');
            }
        });

        // Set environmental parameters
        var windowWidth = window.screen.width < window.outerWidth ? window.screen.width : window.outerWidth;
        var isMobile = function () {
            var windowWidth = window.screen.width < window.outerWidth ? window.screen.width : window.outerWidth;
            return windowWidth < breakMD;
        };
        var isTouch = (('ontouchstart' in window) || (navigator.msMaxTouchPoints > 0));

        // Responsive tables
        $("#content table").wrap('<div class="table-wrapper" />').wrap('<div class="scrollable" />');

        // Make #header fixed once scrolled down behind meta or on small screens
        var fixedHeader = function() {
            if ($(window).scrollTop() > 0) {
                if (!$body.hasClass("nav-scrolled")) {
                    $body.addClass('nav-scrolled');
                }
            } else {
                if ($body.hasClass("nav-scrolled")) {
                    $body.removeClass('nav-scrolled');
                }
            }
            if ($(window).scrollTop() > 200) {
                if (!$body.hasClass("toplink-faded")) {
                    $('.top-link').fadeIn();
                    $body.addClass('toplink-faded');
                }
            } else {
                if ($body.hasClass("toplink-faded")) {
                    $('.top-link').fadeOut();
                    $body.removeClass('toplink-faded');
                }
            }
	    if ($(window).scrollTop() > 400) {
                if (!$body.hasClass("breakpoint-header")) {
                    $body.addClass('breakpoint-header');
                }
            } else {
                if ($body.hasClass("breakpoint-header")) {
                    $body.removeClass('breakpoint-header');
                }
            }
		
        };

        fixedHeader();

        $(window).scroll(fixedHeader); // TODO: Automatically debounced via JQuery?


        // Add toggle icons to organigram
        $('.organigram .has-sub').each(function () {
            $(this).prepend('<span class="toggle-icon"></span>');
            $(this).children('ul').hide();
        });

        $('.organigram .has-sub .toggle-icon').bind('click', function (event) {
            event.preventDefault();

            $(this).closest('.has-sub').toggleClass('active');
            $(this).closest('.has-sub').children('ul').slideToggle();
        });


        // Handling touch devices and laptops with touch window:
        $('#nav > .nav > li > a').on('touchstart ontouchstart', function (e) {
            if ($(this).parent().hasClass("has-sub")) {
                if ($(this).hasClass('clicked-once')) {
                    $openflyover = false;
                    return true;
                } else {
                    $('#nav > .nav > li > a').removeClass('clicked-once');
                    $('#nav > .nav > li').removeClass('focus');
                    $(this).addClass('clicked-once');
                    $(this).parent('li').addClass('focus');
                    e.preventDefault();
                    $openflyover = true;
                    return false;
                }
            } else {
                return true;
            }
        });

        // Swap out the main navigation link against a button and create a JavaScript enabled backdrop
        $('#mainnav-toggle').each(function () {
            var $toggleButton = $('<button id="mainnav-toggle" type="button" aria-controls="nav" aria-haspopup="true" aria-expanded="false"/>')
                .append(this.innerHTML)
                .click(function () {
                    this._isExpanded = !this._isExpanded;
                    $(this).attr('aria-expanded', this._isExpanded ? 'true' : 'false');
                   //  $('#logo').toggle(!this._isExpanded);
                    $('html, body').animate({scrollTop: '0px'}, 0);
		    $body.toggleClass('nav-toggled', this._isExpanded);
                });
            $(this).replaceWith($toggleButton);
            $backdrop = $('<div id="menu-backdrop" aria-hidden="true"/>').click(function () {
                $toggleButton.trigger('click');
            });
            $('#nav').after($backdrop);	   
	   
        });

        // Install the search toggle
        var searchToggle = document.getElementById('search-toggle');
        searchToggle._expanded = false;
        searchToggle._toggleSearch = function (onOff) {
            this._expanded = onOff;
            $body.toggleClass('search-toggled', this._expanded);
            this.setAttribute('aria-expanded', this._expanded ? 'true' : 'false');
            $("#headsearchinput")[this._expanded ? 'focus' : 'blur']();
        };
	
        $(searchToggle).bind('click', function (event) {
            event.preventDefault();
            this._toggleSearch(!this._expanded);
        });

        // Create and inject alternative toggle buttons for submenus
        var $topLevelFlyouts = $('.nav > .has-sub > a + .nav-flyout');
        var toggleFlyout = function () {
            var toggle = this || null;
            var isExpanded = false;
            $('.nav > .has-sub > [type=button]').each(function (i, btn) {
                btn._isExpanded = (toggle === btn) ? !btn._isExpanded : false;
                $(btn).attr('aria-expanded', btn._isExpanded ? 'true' : 'false');
                isExpanded = isExpanded || btn._isExpanded;
                btn.nextElementSibling.scrollTop = 0;
            });
            $html.toggleClass('flyout-scrolling', isExpanded);
        };
        $topLevelFlyouts.each(function (index, topLevelFlyout) {
            var uniqueId = '_' + Math.random().toString(36).substr(2, 9);
            topLevelFlyout.$_link = $(topLevelFlyout.previousSibling);
            topLevelFlyout.$_button = $('<button type="button" aria-controls="' + uniqueId + '" aria-haspopup="true" aria-expanded="false" aria-hidden="true"/>')
                .text(topLevelFlyout.$_link.text())
                .click(toggleFlyout);
            topLevelFlyout.$_button.addClass(topLevelFlyout.$_link.attr('class'));
            $(topLevelFlyout).before(topLevelFlyout.$_button).attr('id', uniqueId);
        });

        /**
         * Enable / disable the flyout toggle buttons
         *
         * @param {Boolean} openOnClick Use a click to open the flyout menus
         */
	var updateToggleState = function(openOnClick) {
            $topLevelFlyouts.each(function (index, topLevelFlyout) {
                topLevelFlyout.$_link[openOnClick ? 'hide' : 'show']().attr('aria-hidden', openOnClick ? 'true' : 'false');
                topLevelFlyout.$_button[openOnClick ? 'show' : 'hide']().attr('aria-hidden', openOnClick ? 'false' : 'true');
            });
        };


        // Clone the hero navigation into the footer
        var $heroNavigation = $('#hero .hero-navigation').clone().attr("aria-label", "Quicklink Navigation");
        $('<div class="cloned-hero-nav"></div>').append($heroNavigation).prependTo('#footer');


        // Find the sidebar navigation (if present)
        var sidebarNavigation = $('.sidebar-subnav');
        sidebarNavigation = sidebarNavigation.length ? sidebarNavigation[0] : null;
        if (sidebarNavigation) {
            sidebarNavigation._origParentNode = sidebarNavigation.parentNode;
        }

        /**
         * Move the sidebar navigation
         *
         * @param {Boolean} sidebar True sidebar
         */
        var moveSidebarNavigation = function(sidebar) {
            if (sidebarNavigation) {
                if (sidebar) {
                    sidebarNavigation._origParentNode.insertBefore(sidebarNavigation, sidebarNavigation._origParentNode.firstChild);
                } else {
                    document.getElementById('nav').appendChild(sidebarNavigation);
                }
            }
        };

        var $metaNavigation = $('ul.meta-nav');
        var $metaNavigationOrigParent = $metaNavigation.length ? $metaNavigation.parent() : null;

        /**
         * Move the meta navigation
         *
         * @param {Boolean} header Place in header
         */
        var moveMetaNavigation = function(header) {
            if ($metaNavigation.length) {
                if (header) {
                    $('.meta-links').append($metaNavigation.attr({ role: null, 'aria-label': null }));
                    $metaNavigationOrigParent.append($metaNavigation);
                } else {
                    $('#nav').append($metaNavigation.attr({ role: 'navigation', 'aria-label': 'Portal links' }));
                }
            }
        };

        var mobileState = null;
        var updateResponsivePositioning = function () {
            var newMobileState = (window.innerWidth < breakMD);
            if (newMobileState !== mobileState) {
                mobileState = newMobileState;

                // If a logo is shown
                if (hasLogo && swapLogo) {
                    // Mobile view
                    if (newMobileState) {
                        if (!$body.hasClass('visiblelogo')) {
                            $body.addClass('visiblelogo');
                            var logoalt = $body.hasClass('nologo') ? '' : $('.branding p.sitetitle img').attr('alt');
                            $('.branding p.sitetitle img').after('<span class="visiblelogo">' + logoalt + '</span>');
                        }
                        // Desktop view
                    } else if ($body.hasClass('visiblelogo')) {
                        $body.removeClass('visiblelogo');
                        $('.visiblelogo').remove();
                    }
                }

                $body[mobileState ? 'removeClass' : 'addClass']('responsive-large')[mobileState ? 'addClass' : 'removeClass']('ismobile');

                // Enable / disable the toggle buttons
                updateToggleState(forceClick || mobileState);

                // Close all flyouts
                toggleFlyout();

                // Move the sidebar & meta navigations
                moveSidebarNavigation(!mobileState);
                moveMetaNavigation(!mobileState);
            }
        };

        $(window).on('resize', updateResponsivePositioning);
        updateResponsivePositioning();

        // Tablesorter
        $('.sorttable').tablesorter();
    }
);

