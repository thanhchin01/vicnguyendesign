import './bootstrap';

import Alpine from 'alpinejs'

window.Alpine = Alpine
Alpine.start()



document.addEventListener('DOMContentLoaded', function () {
    CKEDITOR.replace('editor', {
        height: 350,

        // Plugin cần thiết
        extraPlugins: 'uploadimage,font,colorbutton,justify',

        // Loại bỏ plugin không cần
        removePlugins: 'iframe,div,flash,smiley,pagebreak,about,forms',

        // Toolbar tối ưu cho bài viết
        toolbar: [{
            name: 'styles',
            items: ['Format', 'Font', 'FontSize']
        },
        {
            name: 'basicstyles',
            items: ['Bold', 'Italic', 'Underline', 'RemoveFormat']
        },
        {
            name: 'colors',
            items: ['TextColor', 'BGColor']
        },
        {
            name: 'paragraph',
            items: ['NumberedList', 'BulletedList', 'Blockquote']
        },
        {
            name: 'align',
            items: ['JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock']
        },
        {
            name: 'insert',
            items: ['Image']
        },
        {
            name: 'links',
            items: ['Link', 'Unlink']
        },
        {
            name: 'tools',
            items: ['Maximize']
        }
        ],

        // Cho phép upload ảnh (bạn sẽ thêm route xử lý riêng)
        filebrowserUploadUrl: "/upload-image?_token={{ csrf_token() }}",
        filebrowserUploadMethod: 'form',
    });
});


//123
/*!
 * AdminLTE v4.0.0-rc5 (https://adminlte.io)
 * Copyright 2014-2025 Colorlib <https://colorlib.com>
 * Licensed under MIT (https://github.com/ColorlibHQ/AdminLTE/blob/master/LICENSE)
 */
(function (global, factory) {
    typeof exports === 'object' && typeof module !== 'undefined' ? factory(exports) :
        typeof define === 'function' && define.amd ? define(['exports'], factory) :
            (global = typeof globalThis !== 'undefined' ? globalThis : global || self, factory(global.adminlte = {}));
})(this, (function (exports) {
    'use strict';

    const domContentLoadedCallbacks = [];
    const onDOMContentLoaded = (callback) => {
        if (document.readyState === 'loading') {
            // add listener on the first call when the document is in loading state
            if (!domContentLoadedCallbacks.length) {
                document.addEventListener('DOMContentLoaded', () => {
                    for (const callback of domContentLoadedCallbacks) {
                        callback();
                    }
                });
            }
            domContentLoadedCallbacks.push(callback);
        }
        else {
            callback();
        }
    };
    /* SLIDE UP */
    const slideUp = (target, duration = 500) => {
        target.style.transitionProperty = 'height, margin, padding';
        target.style.transitionDuration = `${duration}ms`;
        target.style.boxSizing = 'border-box';
        target.style.height = `${target.offsetHeight}px`;
        target.style.overflow = 'hidden';
        globalThis.setTimeout(() => {
            target.style.height = '0';
            target.style.paddingTop = '0';
            target.style.paddingBottom = '0';
            target.style.marginTop = '0';
            target.style.marginBottom = '0';
        }, 1);
        globalThis.setTimeout(() => {
            target.style.display = 'none';
            target.style.removeProperty('height');
            target.style.removeProperty('padding-top');
            target.style.removeProperty('padding-bottom');
            target.style.removeProperty('margin-top');
            target.style.removeProperty('margin-bottom');
            target.style.removeProperty('overflow');
            target.style.removeProperty('transition-duration');
            target.style.removeProperty('transition-property');
        }, duration);
    };
    /* SLIDE DOWN */
    const slideDown = (target, duration = 500) => {
        target.style.removeProperty('display');
        let { display } = globalThis.getComputedStyle(target);
        if (display === 'none') {
            display = 'block';
        }
        target.style.display = display;
        const height = target.offsetHeight;
        target.style.overflow = 'hidden';
        target.style.height = '0';
        target.style.paddingTop = '0';
        target.style.paddingBottom = '0';
        target.style.marginTop = '0';
        target.style.marginBottom = '0';
        globalThis.setTimeout(() => {
            target.style.boxSizing = 'border-box';
            target.style.transitionProperty = 'height, margin, padding';
            target.style.transitionDuration = `${duration}ms`;
            target.style.height = `${height}px`;
            target.style.removeProperty('padding-top');
            target.style.removeProperty('padding-bottom');
            target.style.removeProperty('margin-top');
            target.style.removeProperty('margin-bottom');
        }, 1);
        globalThis.setTimeout(() => {
            target.style.removeProperty('height');
            target.style.removeProperty('overflow');
            target.style.removeProperty('transition-duration');
            target.style.removeProperty('transition-property');
        }, duration);
    };

    /**
     * --------------------------------------------
     * @file AdminLTE layout.ts
     * @description Layout for AdminLTE.
     * @license MIT
     * --------------------------------------------
     */
    /**
     * ------------------------------------------------------------------------
     * Constants
     * ------------------------------------------------------------------------
     */
    const CLASS_NAME_HOLD_TRANSITIONS = 'hold-transition';
    const CLASS_NAME_APP_LOADED = 'app-loaded';
    /**
     * Class Definition
     * ====================================================
     */
    class Layout {
        _element;
        constructor(element) {
            this._element = element;
        }
        holdTransition() {
            let resizeTimer;
            window.addEventListener('resize', () => {
                document.body.classList.add(CLASS_NAME_HOLD_TRANSITIONS);
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(() => {
                    document.body.classList.remove(CLASS_NAME_HOLD_TRANSITIONS);
                }, 400);
            });
        }
    }
    onDOMContentLoaded(() => {
        const data = new Layout(document.body);
        data.holdTransition();
        setTimeout(() => {
            document.body.classList.add(CLASS_NAME_APP_LOADED);
        }, 400);
    });

    /**
     * --------------------------------------------
     * @file AdminLTE card-widget.ts
     * @description Card widget for AdminLTE.
     * @license MIT
     * --------------------------------------------
     */
    /**
     * Constants
     * ====================================================
     */
    const DATA_KEY$4 = 'lte.card-widget';
    const EVENT_KEY$4 = `.${DATA_KEY$4}`;
    const EVENT_COLLAPSED$2 = `collapsed${EVENT_KEY$4}`;
    const EVENT_EXPANDED$2 = `expanded${EVENT_KEY$4}`;
    const EVENT_REMOVE = `remove${EVENT_KEY$4}`;
    const EVENT_MAXIMIZED$1 = `maximized${EVENT_KEY$4}`;
    const EVENT_MINIMIZED$1 = `minimized${EVENT_KEY$4}`;
    const CLASS_NAME_CARD = 'card';
    const CLASS_NAME_COLLAPSED = 'collapsed-card';
    const CLASS_NAME_COLLAPSING = 'collapsing-card';
    const CLASS_NAME_EXPANDING = 'expanding-card';
    const CLASS_NAME_WAS_COLLAPSED = 'was-collapsed';
    const CLASS_NAME_MAXIMIZED = 'maximized-card';
    const SELECTOR_DATA_REMOVE = '[data-lte-toggle="card-remove"]';
    const SELECTOR_DATA_COLLAPSE = '[data-lte-toggle="card-collapse"]';
    const SELECTOR_DATA_MAXIMIZE = '[data-lte-toggle="card-maximize"]';
    const SELECTOR_CARD = `.${CLASS_NAME_CARD}`;
    const SELECTOR_CARD_BODY = '.card-body';
    const SELECTOR_CARD_FOOTER = '.card-footer';
    const Default$1 = {
        animationSpeed: 500,
        collapseTrigger: SELECTOR_DATA_COLLAPSE,
        removeTrigger: SELECTOR_DATA_REMOVE,
        maximizeTrigger: SELECTOR_DATA_MAXIMIZE
    };
    class CardWidget {
        _element;
        _parent;
        _clone;
        _config;
        constructor(element, config) {
            this._element = element;
            this._parent = element.closest(SELECTOR_CARD);
            if (element.classList.contains(CLASS_NAME_CARD)) {
                this._parent = element;
            }
            this._config = { ...Default$1, ...config };
        }
        collapse() {
            const event = new Event(EVENT_COLLAPSED$2);
            if (this._parent) {
                this._parent.classList.add(CLASS_NAME_COLLAPSING);
                const elm = this._parent?.querySelectorAll(`${SELECTOR_CARD_BODY}, ${SELECTOR_CARD_FOOTER}`);
                elm.forEach(el => {
                    if (el instanceof HTMLElement) {
                        slideUp(el, this._config.animationSpeed);
                    }
                });
                setTimeout(() => {
                    if (this._parent) {
                        this._parent.classList.add(CLASS_NAME_COLLAPSED);
                        this._parent.classList.remove(CLASS_NAME_COLLAPSING);
                    }
                }, this._config.animationSpeed);
            }
            this._element?.dispatchEvent(event);
        }
        expand() {
            const event = new Event(EVENT_EXPANDED$2);
            if (this._parent) {
                this._parent.classList.add(CLASS_NAME_EXPANDING);
                const elm = this._parent?.querySelectorAll(`${SELECTOR_CARD_BODY}, ${SELECTOR_CARD_FOOTER}`);
                elm.forEach(el => {
                    if (el instanceof HTMLElement) {
                        slideDown(el, this._config.animationSpeed);
                    }
                });
                setTimeout(() => {
                    if (this._parent) {
                        this._parent.classList.remove(CLASS_NAME_COLLAPSED, CLASS_NAME_EXPANDING);
                    }
                }, this._config.animationSpeed);
            }
            this._element?.dispatchEvent(event);
        }
        remove() {
            const event = new Event(EVENT_REMOVE);
            if (this._parent) {
                slideUp(this._parent, this._config.animationSpeed);
            }
            this._element?.dispatchEvent(event);
        }
        toggle() {
            if (this._parent?.classList.contains(CLASS_NAME_COLLAPSED)) {
                this.expand();
                return;
            }
            this.collapse();
        }
        maximize() {
            const event = new Event(EVENT_MAXIMIZED$1);
            if (this._parent) {
                this._parent.style.height = `${this._parent.offsetHeight}px`;
                this._parent.style.width = `${this._parent.offsetWidth}px`;
                this._parent.style.transition = 'all .15s';
                setTimeout(() => {
                    const htmlTag = document.querySelector('html');
                    if (htmlTag) {
                        htmlTag.classList.add(CLASS_NAME_MAXIMIZED);
                    }
                    if (this._parent) {
                        this._parent.classList.add(CLASS_NAME_MAXIMIZED);
                        if (this._parent.classList.contains(CLASS_NAME_COLLAPSED)) {
                            this._parent.classList.add(CLASS_NAME_WAS_COLLAPSED);
                        }
                    }
                }, 150);
            }
            this._element?.dispatchEvent(event);
        }
        minimize() {
            const event = new Event(EVENT_MINIMIZED$1);
            if (this._parent) {
                this._parent.style.height = 'auto';
                this._parent.style.width = 'auto';
                this._parent.style.transition = 'all .15s';
                setTimeout(() => {
                    const htmlTag = document.querySelector('html');
                    if (htmlTag) {
                        htmlTag.classList.remove(CLASS_NAME_MAXIMIZED);
                    }
                    if (this._parent) {
                        this._parent.classList.remove(CLASS_NAME_MAXIMIZED);
                        if (this._parent?.classList.contains(CLASS_NAME_WAS_COLLAPSED)) {
                            this._parent.classList.remove(CLASS_NAME_WAS_COLLAPSED);
                        }
                    }
                }, 10);
            }
            this._element?.dispatchEvent(event);
        }
        toggleMaximize() {
            if (this._parent?.classList.contains(CLASS_NAME_MAXIMIZED)) {
                this.minimize();
                return;
            }
            this.maximize();
        }
    }
    /**
     *
     * Data Api implementation
     * ====================================================
     */
    onDOMContentLoaded(() => {
        const collapseBtn = document.querySelectorAll(SELECTOR_DATA_COLLAPSE);
        collapseBtn.forEach(btn => {
            btn.addEventListener('click', event => {
                event.preventDefault();
                const target = event.target;
                const data = new CardWidget(target, Default$1);
                data.toggle();
            });
        });
        const removeBtn = document.querySelectorAll(SELECTOR_DATA_REMOVE);
        removeBtn.forEach(btn => {
            btn.addEventListener('click', event => {
                event.preventDefault();
                const target = event.target;
                const data = new CardWidget(target, Default$1);
                data.remove();
            });
        });
        const maxBtn = document.querySelectorAll(SELECTOR_DATA_MAXIMIZE);
        maxBtn.forEach(btn => {
            btn.addEventListener('click', event => {
                event.preventDefault();
                const target = event.target;
                const data = new CardWidget(target, Default$1);
                data.toggleMaximize();
            });
        });
    });

    /**
     * --------------------------------------------
     * @file AdminLTE treeview.ts
     * @description Treeview plugin for AdminLTE.
     * @license MIT
     * --------------------------------------------
     */
    /**
     * ------------------------------------------------------------------------
     * Constants
     * ------------------------------------------------------------------------
     */
    // const NAME = 'Treeview'
    const DATA_KEY$3 = 'lte.treeview';
    const EVENT_KEY$3 = `.${DATA_KEY$3}`;
    const EVENT_EXPANDED$1 = `expanded${EVENT_KEY$3}`;
    const EVENT_COLLAPSED$1 = `collapsed${EVENT_KEY$3}`;
    const EVENT_LOAD_DATA_API = `load${EVENT_KEY$3}`;
    const CLASS_NAME_MENU_OPEN$1 = 'menu-open';
    const SELECTOR_NAV_ITEM$1 = '.nav-item';
    const SELECTOR_NAV_LINK = '.nav-link';
    const SELECTOR_TREEVIEW_MENU = '.nav-treeview';
    const SELECTOR_DATA_TOGGLE$1 = '[data-lte-toggle="treeview"]';
    const Default = {
        animationSpeed: 300,
        accordion: true
    };
    /**
     * Class Definition
     * ====================================================
     */
    class Treeview {
        _element;
        _config;
        constructor(element, config) {
            this._element = element;
            this._config = { ...Default, ...config };
        }
        open() {
            const event = new Event(EVENT_EXPANDED$1);
            if (this._config.accordion) {
                const openMenuList = this._element.parentElement?.querySelectorAll(`${SELECTOR_NAV_ITEM$1}.${CLASS_NAME_MENU_OPEN$1}`);
                openMenuList?.forEach(openMenu => {
                    if (openMenu !== this._element.parentElement) {
                        openMenu.classList.remove(CLASS_NAME_MENU_OPEN$1);
                        const childElement = openMenu?.querySelector(SELECTOR_TREEVIEW_MENU);
                        if (childElement) {
                            slideUp(childElement, this._config.animationSpeed);
                        }
                    }
                });
            }
            this._element.classList.add(CLASS_NAME_MENU_OPEN$1);
            const childElement = this._element?.querySelector(SELECTOR_TREEVIEW_MENU);
            if (childElement) {
                slideDown(childElement, this._config.animationSpeed);
            }
            this._element.dispatchEvent(event);
        }
        close() {
            const event = new Event(EVENT_COLLAPSED$1);
            this._element.classList.remove(CLASS_NAME_MENU_OPEN$1);
            const childElement = this._element?.querySelector(SELECTOR_TREEVIEW_MENU);
            if (childElement) {
                slideUp(childElement, this._config.animationSpeed);
            }
            this._element.dispatchEvent(event);
        }
        toggle() {
            if (this._element.classList.contains(CLASS_NAME_MENU_OPEN$1)) {
                this.close();
            }
            else {
                this.open();
            }
        }
    }
    /**
     * ------------------------------------------------------------------------
     * Data Api implementation
     * ------------------------------------------------------------------------
     */
    onDOMContentLoaded(() => {
        const openMenuItems = document.querySelectorAll(`${SELECTOR_NAV_ITEM$1}.${CLASS_NAME_MENU_OPEN$1}`);
        openMenuItems.forEach(menuItem => {
            const childElement = menuItem.querySelector(SELECTOR_TREEVIEW_MENU);
            if (childElement) {
                slideDown(childElement, 0);
                const event = new Event(EVENT_LOAD_DATA_API);
                menuItem.dispatchEvent(event);
            }
        });
        const button = document.querySelectorAll(SELECTOR_DATA_TOGGLE$1);
        button.forEach(btn => {
            btn.addEventListener('click', event => {
                const target = event.target;
                const targetItem = target.closest(SELECTOR_NAV_ITEM$1);
                const targetLink = target.closest(SELECTOR_NAV_LINK);
                const targetTreeviewMenu = targetItem?.querySelector(SELECTOR_TREEVIEW_MENU);
                const lteToggleElement = event.currentTarget;
                // Avoid creating Treeview instances on non menu elements
                if (!targetTreeviewMenu) {
                    return;
                }
                if (target?.getAttribute('href') === '#' || targetLink?.getAttribute('href') === '#') {
                    event.preventDefault();
                }
                if (targetItem) {
                    // Read data attributes
                    const accordionAttr = lteToggleElement.dataset.accordion;
                    const animationSpeedAttr = lteToggleElement.dataset.animationSpeed;
                    // Build config from data attributes, fallback to Default
                    const config = {
                        accordion: accordionAttr === undefined ? Default.accordion : accordionAttr === 'true',
                        animationSpeed: animationSpeedAttr === undefined ? Default.animationSpeed : Number(animationSpeedAttr)
                    };
                    const data = new Treeview(targetItem, config);
                    data.toggle();
                }
            });
        });
    });

    /**
     * --------------------------------------------
     * @file AdminLTE direct-chat.ts
     * @description Direct chat for AdminLTE.
     * @license MIT
     * --------------------------------------------
     */
    /**
     * Constants
     * ====================================================
     */
    const DATA_KEY$2 = 'lte.direct-chat';
    const EVENT_KEY$2 = `.${DATA_KEY$2}`;
    const EVENT_EXPANDED = `expanded${EVENT_KEY$2}`;
    const EVENT_COLLAPSED = `collapsed${EVENT_KEY$2}`;
    const SELECTOR_DATA_TOGGLE = '[data-lte-toggle="chat-pane"]';
    const SELECTOR_DIRECT_CHAT = '.direct-chat';
    const CLASS_NAME_DIRECT_CHAT_OPEN = 'direct-chat-contacts-open';
    /**
     * Class Definition
     * ====================================================
     */
    class DirectChat {
        _element;
        constructor(element) {
            this._element = element;
        }
        toggle() {
            if (this._element.classList.contains(CLASS_NAME_DIRECT_CHAT_OPEN)) {
                const event = new Event(EVENT_COLLAPSED);
                this._element.classList.remove(CLASS_NAME_DIRECT_CHAT_OPEN);
                this._element.dispatchEvent(event);
            }
            else {
                const event = new Event(EVENT_EXPANDED);
                this._element.classList.add(CLASS_NAME_DIRECT_CHAT_OPEN);
                this._element.dispatchEvent(event);
            }
        }
    }
    /**
     *
     * Data Api implementation
     * ====================================================
     */
    onDOMContentLoaded(() => {
        const button = document.querySelectorAll(SELECTOR_DATA_TOGGLE);
        button.forEach(btn => {
            btn.addEventListener('click', event => {
                event.preventDefault();
                const target = event.target;
                const chatPane = target.closest(SELECTOR_DIRECT_CHAT);
                if (chatPane) {
                    const data = new DirectChat(chatPane);
                    data.toggle();
                }
            });
        });
    });

    /**
     * --------------------------------------------
     * @file AdminLTE fullscreen.ts
     * @description Fullscreen plugin for AdminLTE.
     * @license MIT
     * --------------------------------------------
     */
    /**
     * Constants
     * ============================================================================
     */
    const DATA_KEY$1 = 'lte.fullscreen';
    const EVENT_KEY$1 = `.${DATA_KEY$1}`;
    const EVENT_MAXIMIZED = `maximized${EVENT_KEY$1}`;
    const EVENT_MINIMIZED = `minimized${EVENT_KEY$1}`;
    const SELECTOR_FULLSCREEN_TOGGLE = '[data-lte-toggle="fullscreen"]';
    const SELECTOR_MAXIMIZE_ICON = '[data-lte-icon="maximize"]';
    const SELECTOR_MINIMIZE_ICON = '[data-lte-icon="minimize"]';
    /**
     * Class Definition.
     * ============================================================================
     */
    class FullScreen {
        _element;
        _config;
        constructor(element, config) {
            this._element = element;
            this._config = config;
        }
        inFullScreen() {
            const event = new Event(EVENT_MAXIMIZED);
            const iconMaximize = document.querySelector(SELECTOR_MAXIMIZE_ICON);
            const iconMinimize = document.querySelector(SELECTOR_MINIMIZE_ICON);
            void document.documentElement.requestFullscreen();
            if (iconMaximize) {
                iconMaximize.style.display = 'none';
            }
            if (iconMinimize) {
                iconMinimize.style.display = 'block';
            }
            this._element.dispatchEvent(event);
        }
        outFullscreen() {
            const event = new Event(EVENT_MINIMIZED);
            const iconMaximize = document.querySelector(SELECTOR_MAXIMIZE_ICON);
            const iconMinimize = document.querySelector(SELECTOR_MINIMIZE_ICON);
            void document.exitFullscreen();
            if (iconMaximize) {
                iconMaximize.style.display = 'block';
            }
            if (iconMinimize) {
                iconMinimize.style.display = 'none';
            }
            this._element.dispatchEvent(event);
        }
        toggleFullScreen() {
            if (document.fullscreenEnabled) {
                if (document.fullscreenElement) {
                    this.outFullscreen();
                }
                else {
                    this.inFullScreen();
                }
            }
        }
    }
    /**
     * Data Api implementation
     * ============================================================================
     */
    onDOMContentLoaded(() => {
        const buttons = document.querySelectorAll(SELECTOR_FULLSCREEN_TOGGLE);
        buttons.forEach(btn => {
            btn.addEventListener('click', event => {
                event.preventDefault();
                const target = event.target;
                const button = target.closest(SELECTOR_FULLSCREEN_TOGGLE);
                if (button) {
                    const data = new FullScreen(button, undefined);
                    data.toggleFullScreen();
                }
            });
        });
    });

    /**
     * --------------------------------------------
     * @file AdminLTE push-menu.ts
     * @description Push menu for AdminLTE.
     * @license MIT
     * --------------------------------------------
     */
    /**
     * ------------------------------------------------------------------------
     * Constants
     * ------------------------------------------------------------------------
     */
    const DATA_KEY = 'lte.push-menu';
    const EVENT_KEY = `.${DATA_KEY}`;
    const EVENT_OPEN = `open${EVENT_KEY}`;
    const EVENT_COLLAPSE = `collapse${EVENT_KEY}`;
    const CLASS_NAME_SIDEBAR_MINI = 'sidebar-mini';
    const CLASS_NAME_SIDEBAR_COLLAPSE = 'sidebar-collapse';
    const CLASS_NAME_SIDEBAR_OPEN = 'sidebar-open';
    const CLASS_NAME_SIDEBAR_EXPAND = 'sidebar-expand';
    const CLASS_NAME_SIDEBAR_OVERLAY = 'sidebar-overlay';
    const CLASS_NAME_MENU_OPEN = 'menu-open';
    const SELECTOR_APP_SIDEBAR = '.app-sidebar';
    const SELECTOR_SIDEBAR_MENU = '.sidebar-menu';
    const SELECTOR_NAV_ITEM = '.nav-item';
    const SELECTOR_NAV_TREEVIEW = '.nav-treeview';
    const SELECTOR_APP_WRAPPER = '.app-wrapper';
    const SELECTOR_SIDEBAR_EXPAND = `[class*="${CLASS_NAME_SIDEBAR_EXPAND}"]`;
    const SELECTOR_SIDEBAR_TOGGLE = '[data-lte-toggle="sidebar"]';
    const Defaults = {
        sidebarBreakpoint: 992
    };
    /**
     * Class Definition
     * ====================================================
     */
    class PushMenu {
        _element;
        _config;
        constructor(element, config) {
            this._element = element;
            this._config = { ...Defaults, ...config };
        }
        menusClose() {
            const navTreeview = document.querySelectorAll(SELECTOR_NAV_TREEVIEW);
            navTreeview.forEach(navTree => {
                navTree.style.removeProperty('display');
                navTree.style.removeProperty('height');
            });
            const navSidebar = document.querySelector(SELECTOR_SIDEBAR_MENU);
            const navItem = navSidebar?.querySelectorAll(SELECTOR_NAV_ITEM);
            if (navItem) {
                navItem.forEach(navI => {
                    navI.classList.remove(CLASS_NAME_MENU_OPEN);
                });
            }
        }
        expand() {
            const event = new Event(EVENT_OPEN);
            document.body.classList.remove(CLASS_NAME_SIDEBAR_COLLAPSE);
            document.body.classList.add(CLASS_NAME_SIDEBAR_OPEN);
            this._element.dispatchEvent(event);
        }
        collapse() {
            const event = new Event(EVENT_COLLAPSE);
            document.body.classList.remove(CLASS_NAME_SIDEBAR_OPEN);
            document.body.classList.add(CLASS_NAME_SIDEBAR_COLLAPSE);
            this._element.dispatchEvent(event);
        }
        addSidebarBreakPoint() {
            const sidebarExpandList = document.querySelector(SELECTOR_SIDEBAR_EXPAND)?.classList ?? [];
            const sidebarExpand = Array.from(sidebarExpandList).find(className => className.startsWith(CLASS_NAME_SIDEBAR_EXPAND)) ?? '';
            const sidebar = document.getElementsByClassName(sidebarExpand)[0];
            const sidebarContent = globalThis.getComputedStyle(sidebar, '::before').getPropertyValue('content');
            this._config = { ...this._config, sidebarBreakpoint: Number(sidebarContent.replace(/[^\d.-]/g, '')) };
            // FIXED: Don't auto-collapse on mobile if sidebar is currently open
            // This prevents resize events (triggered by scrolling) from closing the sidebar
            const isCurrentlyOpen = document.body.classList.contains(CLASS_NAME_SIDEBAR_OPEN);
            if (window.innerWidth <= this._config.sidebarBreakpoint) {
                // Only collapse if not currently open (prevents scroll-triggered closes)
                if (!isCurrentlyOpen) {
                    this.collapse();
                }
            }
            else {
                if (!document.body.classList.contains(CLASS_NAME_SIDEBAR_MINI)) {
                    this.expand();
                }
                if (document.body.classList.contains(CLASS_NAME_SIDEBAR_MINI) && document.body.classList.contains(CLASS_NAME_SIDEBAR_COLLAPSE)) {
                    this.collapse();
                }
            }
        }
        toggle() {
            if (document.body.classList.contains(CLASS_NAME_SIDEBAR_COLLAPSE)) {
                this.expand();
            }
            else {
                this.collapse();
            }
        }
        init() {
            this.addSidebarBreakPoint();
        }
    }
    /**
     * ------------------------------------------------------------------------
     * Data Api implementation
     * ------------------------------------------------------------------------
     */
    onDOMContentLoaded(() => {
        const sidebar = document?.querySelector(SELECTOR_APP_SIDEBAR);
        if (sidebar) {
            const data = new PushMenu(sidebar, Defaults);
            data.init();
            window.addEventListener('resize', () => {
                data.init();
            });
        }
        const sidebarOverlay = document.createElement('div');
        sidebarOverlay.className = CLASS_NAME_SIDEBAR_OVERLAY;
        document.querySelector(SELECTOR_APP_WRAPPER)?.append(sidebarOverlay);
        let overlayTouchMoved = false;
        // Handle touch events on overlay (area outside sidebar)
        sidebarOverlay.addEventListener('touchstart', () => {
            overlayTouchMoved = false;
        }, { passive: true });
        sidebarOverlay.addEventListener('touchmove', () => {
            overlayTouchMoved = true;
        }, { passive: true });
        sidebarOverlay.addEventListener('touchend', event => {
            if (!overlayTouchMoved) {
                event.preventDefault();
                const target = event.currentTarget;
                const data = new PushMenu(target, Defaults);
                data.collapse();
            }
            overlayTouchMoved = false;
        }, { passive: false });
        sidebarOverlay.addEventListener('click', event => {
            event.preventDefault();
            const target = event.currentTarget;
            const data = new PushMenu(target, Defaults);
            data.collapse();
        });
        const fullBtn = document.querySelectorAll(SELECTOR_SIDEBAR_TOGGLE);
        fullBtn.forEach(btn => {
            btn.addEventListener('click', event => {
                event.preventDefault();
                let button = event.currentTarget;
                if (button?.dataset.lteToggle !== 'sidebar') {
                    button = button?.closest(SELECTOR_SIDEBAR_TOGGLE);
                }
                if (button) {
                    event?.preventDefault();
                    const data = new PushMenu(button, Defaults);
                    data.toggle();
                }
            });
        });
    });

    /**
     * AdminLTE Accessibility Module
     * WCAG 2.1 AA Compliance Features
     */
    class AccessibilityManager {
        config;
        liveRegion = null;
        focusHistory = [];
        constructor(config = {}) {
            this.config = {
                announcements: true,
                skipLinks: true,
                focusManagement: true,
                keyboardNavigation: true,
                reducedMotion: true,
                ...config
            };
            this.init();
        }
        init() {
            if (this.config.announcements) {
                this.createLiveRegion();
            }
            if (this.config.skipLinks) {
                this.addSkipLinks();
            }
            if (this.config.focusManagement) {
                this.initFocusManagement();
            }
            if (this.config.keyboardNavigation) {
                this.initKeyboardNavigation();
            }
            if (this.config.reducedMotion) {
                this.respectReducedMotion();
            }
            this.initErrorAnnouncements();
            this.initTableAccessibility();
            this.initFormAccessibility();
        }
        // WCAG 4.1.3: Status Messages
        createLiveRegion() {
            if (this.liveRegion)
                return;
            this.liveRegion = document.createElement('div');
            this.liveRegion.id = 'live-region';
            this.liveRegion.className = 'live-region';
            this.liveRegion.setAttribute('aria-live', 'polite');
            this.liveRegion.setAttribute('aria-atomic', 'true');
            this.liveRegion.setAttribute('role', 'status');
            document.body.append(this.liveRegion);
        }
        // WCAG 2.4.1: Bypass Blocks
        addSkipLinks() {
            const skipLinksContainer = document.createElement('div');
            skipLinksContainer.className = 'skip-links';
            const skipToMain = document.createElement('a');
            skipToMain.href = '#main';
            skipToMain.className = 'skip-link';
            skipToMain.textContent = 'Skip to main content';
            const skipToNav = document.createElement('a');
            skipToNav.href = '#navigation';
            skipToNav.className = 'skip-link';
            skipToNav.textContent = 'Skip to navigation';
            skipLinksContainer.append(skipToMain);
            skipLinksContainer.append(skipToNav);
            document.body.insertBefore(skipLinksContainer, document.body.firstChild);
            // Ensure targets exist and are focusable
            this.ensureSkipTargets();
        }
        ensureSkipTargets() {
            const main = document.querySelector('#main, main, [role="main"]');
            if (main && !main.id) {
                main.id = 'main';
            }
            if (main && !main.hasAttribute('tabindex')) {
                main.setAttribute('tabindex', '-1');
            }
            const nav = document.querySelector('#navigation, nav, [role="navigation"]');
            if (nav && !nav.id) {
                nav.id = 'navigation';
            }
            if (nav && !nav.hasAttribute('tabindex')) {
                nav.setAttribute('tabindex', '-1');
            }
        }
        // WCAG 2.4.3: Focus Order & 2.4.7: Focus Visible
        initFocusManagement() {
            document.addEventListener('keydown', (event) => {
                if (event.key === 'Tab') {
                    this.handleTabNavigation(event);
                }
                if (event.key === 'Escape') {
                    this.handleEscapeKey(event);
                }
            });
            // Focus management for modals and dropdowns
            this.initModalFocusManagement();
            this.initDropdownFocusManagement();
        }
        handleTabNavigation(event) {
            const focusableElements = this.getFocusableElements();
            const currentIndex = focusableElements.indexOf(document.activeElement);
            if (event.shiftKey) {
                // Shift+Tab (backward)
                if (currentIndex <= 0) {
                    event.preventDefault();
                    focusableElements.at(-1)?.focus();
                }
            }
            else if (currentIndex >= focusableElements.length - 1) {
                // Tab (forward)
                event.preventDefault();
                focusableElements[0]?.focus();
            }
        }
        getFocusableElements() {
            const selector = [
                'a[href]',
                'button:not([disabled])',
                'input:not([disabled])',
                'select:not([disabled])',
                'textarea:not([disabled])',
                '[tabindex]:not([tabindex="-1"])',
                '[contenteditable="true"]'
            ].join(', ');
            return Array.from(document.querySelectorAll(selector));
        }
        handleEscapeKey(event) {
            // Close modals, dropdowns, etc.
            const activeModal = document.querySelector('.modal.show');
            const activeDropdown = document.querySelector('.dropdown-menu.show');
            if (activeModal) {
                const closeButton = activeModal.querySelector('[data-bs-dismiss="modal"]');
                closeButton?.click();
                event.preventDefault();
            }
            else if (activeDropdown) {
                const toggleButton = document.querySelector('[data-bs-toggle="dropdown"][aria-expanded="true"]');
                toggleButton?.click();
                event.preventDefault();
            }
        }
        // WCAG 2.1.1: Keyboard Access
        initKeyboardNavigation() {
            // Add keyboard support for custom components
            document.addEventListener('keydown', (event) => {
                const target = event.target;
                // Handle arrow key navigation for menus
                if (target.closest('.nav, .navbar-nav, .dropdown-menu')) {
                    this.handleMenuNavigation(event);
                }
                // Handle Enter and Space for custom buttons
                if ((event.key === 'Enter' || event.key === ' ') && target.hasAttribute('role') && target.getAttribute('role') === 'button' && !target.matches('button, input[type="button"], input[type="submit"]')) {
                    event.preventDefault();
                    target.click();
                }
            });
        }
        handleMenuNavigation(event) {
            if (!['ArrowUp', 'ArrowDown', 'ArrowLeft', 'ArrowRight', 'Home', 'End'].includes(event.key)) {
                return;
            }
            const currentElement = event.target;
            const menuItems = Array.from(currentElement.closest('.nav, .navbar-nav, .dropdown-menu')?.querySelectorAll('a, button') || []);
            const currentIndex = menuItems.indexOf(currentElement);
            let nextIndex;
            switch (event.key) {
                case 'ArrowDown':
                case 'ArrowRight': {
                    nextIndex = currentIndex < menuItems.length - 1 ? currentIndex + 1 : 0;
                    break;
                }
                case 'ArrowUp':
                case 'ArrowLeft': {
                    nextIndex = currentIndex > 0 ? currentIndex - 1 : menuItems.length - 1;
                    break;
                }
                case 'Home': {
                    nextIndex = 0;
                    break;
                }
                case 'End': {
                    nextIndex = menuItems.length - 1;
                    break;
                }
                default: {
                    return;
                }
            }
            event.preventDefault();
            menuItems[nextIndex]?.focus();
        }
        // WCAG 2.3.3: Animation from Interactions
        respectReducedMotion() {
            const prefersReducedMotion = globalThis.matchMedia('(prefers-reduced-motion: reduce)').matches;
            if (prefersReducedMotion) {
                document.body.classList.add('reduce-motion');
                // Disable smooth scrolling
                document.documentElement.style.scrollBehavior = 'auto';
                // Reduce animation duration
                const style = document.createElement('style');
                style.textContent = `
        *, *::before, *::after {
          animation-duration: 0.01ms !important;
          animation-iteration-count: 1 !important;
          transition-duration: 0.01ms !important;
        }
      `;
                document.head.append(style);
            }
        }
        // WCAG 3.3.1: Error Identification
        initErrorAnnouncements() {
            const observer = new MutationObserver((mutations) => {
                mutations.forEach((mutation) => {
                    mutation.addedNodes.forEach((node) => {
                        if (node.nodeType === Node.ELEMENT_NODE) {
                            const element = node;
                            // Check for error messages
                            if (element.matches('.alert-danger, .invalid-feedback, .error')) {
                                this.announce(element.textContent || 'Error occurred', 'assertive');
                            }
                            // Check for success messages
                            if (element.matches('.alert-success, .success')) {
                                this.announce(element.textContent || 'Success', 'polite');
                            }
                        }
                    });
                });
            });
            observer.observe(document.body, {
                childList: true,
                subtree: true
            });
        }
        // WCAG 1.3.1: Info and Relationships
        initTableAccessibility() {
            document.querySelectorAll('table').forEach((table) => {
                // Add table role if missing
                if (!table.hasAttribute('role')) {
                    table.setAttribute('role', 'table');
                }
                // Ensure headers have proper scope
                table.querySelectorAll('th').forEach((th) => {
                    if (!th.hasAttribute('scope')) {
                        const isInThead = th.closest('thead');
                        const isFirstColumn = th.cellIndex === 0;
                        if (isInThead) {
                            th.setAttribute('scope', 'col');
                        }
                        else if (isFirstColumn) {
                            th.setAttribute('scope', 'row');
                        }
                    }
                });
                // Add caption if missing but title exists
                if (!table.querySelector('caption') && table.hasAttribute('title')) {
                    const caption = document.createElement('caption');
                    caption.textContent = table.getAttribute('title') || '';
                    table.insertBefore(caption, table.firstChild);
                }
            });
        }
        // WCAG 3.3.2: Labels or Instructions
        initFormAccessibility() {
            document.querySelectorAll('input, select, textarea').forEach((input) => {
                const htmlInput = input;
                // Ensure all inputs have labels
                if (!htmlInput.labels?.length && !htmlInput.hasAttribute('aria-label') && !htmlInput.hasAttribute('aria-labelledby')) {
                    const placeholder = htmlInput.getAttribute('placeholder');
                    if (placeholder) {
                        htmlInput.setAttribute('aria-label', placeholder);
                    }
                }
                // Add required indicators
                if (htmlInput.hasAttribute('required')) {
                    const label = htmlInput.labels?.[0];
                    if (label && !label.querySelector('.required-indicator')) {
                        const indicator = document.createElement('span');
                        indicator.className = 'required-indicator sr-only';
                        indicator.textContent = ' (required)';
                        label.append(indicator);
                    }
                }
                // Handle invalid state unless the element explicitly opts out via the
                // 'disable-adminlte-validations' class.
                if (!htmlInput.classList.contains('disable-adminlte-validations')) {
                    htmlInput.addEventListener('invalid', () => {
                        this.handleFormError(htmlInput);
                    });
                }
            });
        }
        handleFormError(input) {
            const errorId = `${input.id || input.name}-error`;
            let errorElement = document.getElementById(errorId);
            if (!errorElement) {
                errorElement = document.createElement('div');
                errorElement.id = errorId;
                errorElement.className = 'invalid-feedback';
                errorElement.setAttribute('role', 'alert');
                // Always append the error element as the last child of the parent.
                // This prevents breaking layouts where inputs use Bootstrap's
                // `.input-group-text` decorators, ensuring the error stays below
                // the entire input group.
                input.parentNode?.append(errorElement);
            }
            errorElement.textContent = input.validationMessage;
            input.setAttribute('aria-describedby', errorId);
            input.classList.add('is-invalid');
            this.announce(`Error in ${input.labels?.[0]?.textContent || input.name}: ${input.validationMessage}`, 'assertive');
        }
        // Modal focus management
        initModalFocusManagement() {
            document.addEventListener('shown.bs.modal', (event) => {
                const modal = event.target;
                const focusableElements = modal.querySelectorAll('button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])');
                if (focusableElements.length > 0) {
                    focusableElements[0].focus();
                }
                // Store previous focus
                this.focusHistory.push(document.activeElement);
            });
            document.addEventListener('hidden.bs.modal', () => {
                // Restore previous focus
                const previousElement = this.focusHistory.pop();
                if (previousElement) {
                    previousElement.focus();
                }
            });
        }
        // Dropdown focus management
        initDropdownFocusManagement() {
            document.addEventListener('shown.bs.dropdown', (event) => {
                const dropdown = event.target;
                const menu = dropdown.querySelector('.dropdown-menu');
                const firstItem = menu?.querySelector('a, button');
                if (firstItem) {
                    firstItem.focus();
                }
            });
        }
        // Public API methods
        announce(message, priority = 'polite') {
            if (!this.liveRegion) {
                this.createLiveRegion();
            }
            if (this.liveRegion) {
                this.liveRegion.setAttribute('aria-live', priority);
                this.liveRegion.textContent = message;
                // Clear after announcement
                setTimeout(() => {
                    if (this.liveRegion) {
                        this.liveRegion.textContent = '';
                    }
                }, 1000);
            }
        }
        focusElement(selector) {
            const element = document.querySelector(selector);
            if (element) {
                element.focus();
                // Ensure element is visible
                element.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }
        trapFocus(container) {
            const focusableElements = container.querySelectorAll('button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])');
            const focusableArray = Array.from(focusableElements);
            const firstElement = focusableArray[0];
            const lastElement = focusableArray.at(-1);
            container.addEventListener('keydown', (event) => {
                if (event.key === 'Tab') {
                    if (event.shiftKey) {
                        if (document.activeElement === firstElement) {
                            lastElement?.focus();
                            event.preventDefault();
                        }
                    }
                    else if (document.activeElement === lastElement) {
                        firstElement.focus();
                        event.preventDefault();
                    }
                }
            });
        }
        addLandmarks() {
            // Add main landmark if missing
            const main = document.querySelector('main');
            if (!main) {
                const appMain = document.querySelector('.app-main');
                if (appMain) {
                    appMain.setAttribute('role', 'main');
                    appMain.id = 'main';
                }
            }
            // Add navigation landmarks
            document.querySelectorAll('.navbar-nav, .nav').forEach((nav, index) => {
                if (!nav.hasAttribute('role')) {
                    nav.setAttribute('role', 'navigation');
                }
                if (!nav.hasAttribute('aria-label')) {
                    nav.setAttribute('aria-label', `Navigation ${index + 1}`);
                }
            });
            // Add search landmark
            const searchForm = document.querySelector('form[role="search"], .navbar-search');
            if (searchForm && !searchForm.hasAttribute('role')) {
                searchForm.setAttribute('role', 'search');
            }
        }
    }
    // Initialize accessibility when DOM is ready
    const initAccessibility = (config) => {
        return new AccessibilityManager(config);
    };

    /**
     * AdminLTE v4.0.0-rc5
     * Author: Colorlib
     * Website: AdminLTE.io <https://adminlte.io>
     * License: Open source - MIT <https://opensource.org/licenses/MIT>
     */
    onDOMContentLoaded(() => {
        /**
         * Initialize AdminLTE Core Components
         * -------------------------------
         */
        const layout = new Layout(document.body);
        layout.holdTransition();
        /**
         * Initialize Accessibility Features - WCAG 2.1 AA Compliance
         * --------------------------------------------------------
         */
        const accessibilityManager = initAccessibility({
            announcements: true,
            skipLinks: true,
            focusManagement: true,
            keyboardNavigation: true,
            reducedMotion: true
        });
        // Add semantic landmarks
        accessibilityManager.addLandmarks();
        // Mark app as loaded after initialization
        setTimeout(() => {
            document.body.classList.add('app-loaded');
        }, 400);
    });

    exports.CardWidget = CardWidget;
    exports.DirectChat = DirectChat;
    exports.FullScreen = FullScreen;
    exports.Layout = Layout;
    exports.PushMenu = PushMenu;
    exports.Treeview = Treeview;
    exports.initAccessibility = initAccessibility;

}));
//# sourceMappingURL=adminlte.js.map

//profile

(function () {
    if (window.bbPasswordToggleInitialized) {
        return;
    }

    window.bbPasswordToggleInitialized = true;

    function initPasswordToggles() {
        document.querySelectorAll('[data-bb-toggle-password]').forEach(function (button) {
            if (button.dataset.initialized === 'true') {
                return;
            }

            button.dataset.initialized = 'true';

            button.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();

                const inputGroup = this.closest('.input-group');
                const passwordField = inputGroup ? inputGroup.querySelector(
                    '[data-bb-password]') : null;

                if (!passwordField) {
                    console.warn('Password field not found for toggle button');
                    return;
                }

                if (passwordField.getAttribute('type') === 'password') {
                    passwordField.setAttribute('type', 'text');
                    this.innerHTML = `<svg class="icon svg-icon-ti-ti-eye-off"
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <path d="M10.585 10.587a2 2 0 0 0 2.829 2.828" />
  <path d="M16.681 16.673a8.717 8.717 0 0 1 -4.681 1.327c-3.6 0 -6.6 -2 -9 -6c1.272 -2.12 2.712 -3.678 4.32 -4.674m2.86 -1.146a9.055 9.055 0 0 1 1.82 -.18c3.6 0 6.6 2 9 6c-.666 1.11 -1.379 2.067 -2.138 2.87" />
  <path d="M3 3l18 18" />
</svg>`;
                } else {
                    passwordField.setAttribute('type', 'password');
                    this.innerHTML = `<svg class="icon svg-icon-ti-ti-eye"
  xmlns="http://www.w3.org/2000/svg"
  width="24"
  height="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
  <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
</svg>`;
                }
            });
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initPasswordToggles);
    } else {
        initPasswordToggles();
    }
})();

(function () {
    if (window.bbPhoneNumberFieldInitialized) {
        return;
    }

    window.bbPhoneNumberFieldInitialized = true;

    function initPhoneNumberFields() {
        document.querySelectorAll('.js-phone-number-mask[data-country-code-selection="true"]').forEach(function (
            element) {
            if (element.dataset.itiInitialized === 'true') {
                return;
            }

            const hasCountryCodeSelection = element.dataset.countryCodeSelection === 'true';


            const availableCountries = [];

            const getDefaultCountry = function () {
                if (availableCountries.length === 0) {
                    return 'us';
                }
                return availableCountries.includes('us') ? 'us' : availableCountries[0];
            };

            const defaultCountry = getDefaultCountry();

            const config = {
                geoIpLookup: function (callback) {
                    const cacheKey = 'ipinfo_country_code';
                    const cacheExpiry = 'ipinfo_country_expiry';
                    const cachedCountry = localStorage.getItem(cacheKey);
                    const cachedExpiry = localStorage.getItem(cacheExpiry);
                    const now = new Date().getTime();

                    if (cachedCountry && cachedExpiry && now < parseInt(cachedExpiry)) {
                        const isCountryAvailable = availableCountries.length === 0 ||
                            availableCountries.includes(cachedCountry.toLowerCase());
                        callback(isCountryAvailable ? cachedCountry : defaultCountry);
                        return;
                    }

                    fetch('https://ipinfo.io/json', {
                        credentials: 'omit',
                        headers: {
                            'Accept': 'application/json',
                            'Content-Type': 'application/json'
                        }
                    })
                        .then(function (response) {
                            if (!response.ok) {
                                throw new Error('Network response was not ok');
                            }
                            return response.json();
                        })
                        .then(function (data) {
                            let countryCode = data && data.country ? data.country
                                .toLowerCase() : defaultCountry;

                            const isCountryAvailable = availableCountries.length === 0 ||
                                availableCountries.includes(countryCode);

                            if (!isCountryAvailable) {
                                countryCode = defaultCountry;
                            }

                            if (countryCode && countryCode !== defaultCountry) {
                                try {
                                    localStorage.setItem(cacheKey, countryCode);
                                    localStorage.setItem(cacheExpiry, (now + 24 * 60 * 60 *
                                        1000).toString());
                                } catch (e) {
                                    console.warn('Could not cache country code:', e);
                                }
                            }

                            callback(countryCode);
                        })
                        .catch(function () {
                            callback(defaultCountry);
                        });
                },
                initialCountry: 'auto',
                utilsScript: 'https://cms.botble.com/vendor/core/core/base/libraries/intl-tel-input/js/utils.js',
            };

            if (availableCountries && availableCountries.length > 0) {
                config.onlyCountries = availableCountries;
            }

            if (hasCountryCodeSelection) {
                config.separateDialCode = true;
                config.nationalMode = false;
                config.autoHideDialCode = false;
            }

            const iti = window.intlTelInput(element, config);
            element.dataset.itiInitialized = 'true';

            if (hasCountryCodeSelection) {
                const hiddenFieldId = element.id + '-full';
                const hiddenField = document.getElementById(hiddenFieldId);

                if (hiddenField) {
                    const updateHiddenField = function () {
                        const fullNumber = iti.getNumber();
                        const oldValue = hiddenField.value;
                        let newValue = '';

                        if (fullNumber) {
                            newValue = fullNumber;
                        } else if (element.value) {
                            const selectedCountryData = iti.getSelectedCountryData();
                            if (selectedCountryData && selectedCountryData.dialCode) {
                                newValue = '+' + selectedCountryData.dialCode + element.value
                                    .replace(/\D/g, '');
                            } else {
                                newValue = element.value;
                            }
                        }

                        hiddenField.value = newValue;

                        if (oldValue !== newValue) {
                            const changeEvent = new Event('change', {
                                bubbles: true
                            });
                            element.dispatchEvent(changeEvent);
                        }
                    };

                    const initialValue = hiddenField.value || element.value;

                    if (initialValue) {
                        if (initialValue.startsWith('+')) {
                            iti.setNumber(initialValue);
                        } else if (initialValue) {
                            element.value = initialValue;
                        }

                        setTimeout(function () {
                            updateHiddenField();
                        }, 100);
                    }

                    element.addEventListener('countrychange', updateHiddenField);
                    element.addEventListener('input', updateHiddenField);
                    element.addEventListener('blur', updateHiddenField);

                    const form = element.closest('form');
                    if (form) {
                        form.addEventListener('submit', function () {
                            updateHiddenField();
                        });
                    }
                }
            }
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initPhoneNumberFields);
    } else {
        initPhoneNumberFields();
    }

    document.addEventListener('payment-form-reloaded', function () {
        initPhoneNumberFields();
    });
})();

const Ht = t => {
    const n = $t({}, t);
    let { data: e, withXSRFToken: r, xsrfHeaderName: o, xsrfCookieName: i, headers: u, auth: a } = n;
    if (n.headers = u = kt.from(u),
        n.url = ft(qt(n.baseURL, n.url, n.allowAbsoluteUrls), t.params, t.paramsSerializer),
        a && u.set("Authorization", "Basic " + btoa((a.username || "") + ":" + (a.password ? unescape(encodeURIComponent(a.password)) : ""))),
        V.isFormData(e))
        if (_t.hasStandardBrowserEnv || _t.hasStandardBrowserWebWorkerEnv)
            u.setContentType(void 0);
        else if (V.isFunction(e.getHeaders)) {
            const t = e.getHeaders()
                , n = ["content-type", "content-length"];
            Object.entries(t).forEach(([t, e]) => {
                n.includes(t.toLowerCase()) && u.set(t, e)
            }
            )
        }
    if (_t.hasStandardBrowserEnv && (r && V.isFunction(r) && (r = r(n)),
        r || !1 !== r && zt(n.url))) {
        const t = o && i && Mt.read(i);
        t && u.set(o, t)
    }
    return n
}
// Bật tắt password
document.addEventListener('DOMContentLoaded', function () {
    // Tìm tất cả các phần tử có class 'input-password-toggle' (biểu tượng con mắt)
    const toggleElements = document.querySelectorAll('.input-password-toggle');

    toggleElements.forEach(toggleEl => {
        toggleEl.addEventListener('click', function () {
            // Tìm input mật khẩu nằm ngay trước phần tử toggle này
            const input = this.previousElementSibling;

            if (input && input.type === "password") {
                input.type = "text";
                // Tùy chọn: Đổi icon (nếu bạn muốn dùng 2 icon mắt mở/mắt đóng)
                // this.querySelector('svg').classList.remove('svg-icon-ti-ti-eye');
                // this.querySelector('svg').classList.add('svg-icon-ti-ti-eye-off');
            } else if (input && input.type === "text") {
                input.type = "password";
                // Tùy chọn: Đổi icon
                // this.querySelector('svg').classList.add('svg-icon-ti-ti-eye');
                // this.querySelector('svg').classList.remove('svg-icon-ti-ti-eye-off');
            }
        });
    });
});

//
function filter_categories_1846843450(inputSearchId) {
    const searchInput = document.getElementById('search-category-input-' + inputSearchId).value.toLowerCase();
    const categories = document.querySelectorAll('.tree-categories-list-' + inputSearchId + ' label');

    categories.forEach(category => {
        const text = category.textContent.toLowerCase();
        category.style.display = text.includes(searchInput) ? '' : 'none';
    });
}


// word mini
document.addEventListener('DOMContentLoaded', function () {
    // Khởi tạo CKEditor trên textarea có id="editor"
    if (document.getElementById('editor')) {
        ClassicEditor
            .create(document.querySelector('#editor'), {
                // Cấu hình editor nếu cần (ví dụ: upload ảnh, toolbar)
                toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote'],
            })
            .catch(error => {
                console.error(error);
            });
    }
});
// // {{-- 1. Script CKEditor (Tạo trình soạn thảo văn bản) --}}


// let editorInstance; // Biến toàn cục để lưu trữ instance của editor

// // Kích hoạt CKEditor cho thẻ textarea có id="editor"
// if (document.querySelector('#editor')) {
//     ClassicEditor
//         .create(document.querySelector('#editor'), {
//             // Cấu hình (tùy chọn)
//         })
//         .then(editor => {
//             editorInstance = editor; // Lưu instance vào biến toàn cục
//             console.log('CKEditor 5 đã được khởi tạo thành công.');
//         })
//         .catch(error => {
//             console.error('Lỗi khởi tạo CKEditor:', error);
//         });
// }

// // Thêm hàm xử lý thủ công để đảm bảo dữ liệu được đồng bộ vào textarea trước khi submit
// document.querySelector('form').addEventListener('submit', function (event) {
//     // Kiểm tra editorInstance đã được khởi tạo chưa
//     if (editorInstance) {
//         const contentTextarea = document.getElementById('editor');
//         // Lấy dữ liệu từ editor và gán vào thẻ textarea ẩn
//         contentTextarea.value = editorInstance.getData();
//     }
// });


// // Hàm tạo Slug tự động từ Tiêu đề
// function ChangeToSlug() {
//     var title, slug;
//     title = document.getElementById("title").value;
//     slug = title.toLowerCase();
//     slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
//     slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
//     slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
//     slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
//     slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
//     slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
//     slug = slug.replace(/đ/gi, 'd');
//     slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
//     slug = slug.replace(/ /gi, "-");
//     slug = slug.replace(/\-\-\-\-\-/gi, '-');
//     slug = slug.replace(/\-\-\-\-/gi, '-');
//     slug = slug.replace(/\-\-\-/gi, '-');
//     slug = slug.replace(/\-\-/gi, '-');
//     slug = '@' + slug + '@';
//     slug = slug.replace(/\@\-|\-\@|\@/gi, '');
//     document.getElementById('slug').value = slug;
// }
// {{-- 2. Script Toastr (Thông báo) --}}

// toastr.options = {
//     "closeButton": true,
//     "progressBar": true,
//     "positionClass": "toast-top-right",
//     "timeOut": "5000"
// };

// $(document).ready(function() {
//     @if (Session::has('success'))
//         toastr.success('{!! Session::get("success") !!}');
//     @endif
//     @if (Session::has('error'))
//         toastr.error('{!! Session::get("error") !!}');
//     @endif
// });




//Chuyển form
function togglePassword(id) {
    const input = document.getElementById(id);
    const icon = input.nextElementSibling.querySelector('i');
    if (input.type === 'password') {
        input.type = 'text';
        icon.classList.remove('bi-eye');
        icon.classList.add('bi-eye-slash');
    } else {
        input.type = 'password';
        icon.classList.remove('bi-eye-slash');
        icon.classList.add('bi-eye');
    }
}

// Login Admin
const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
const Default = {
    scrollbarTheme: 'os-theme-light',
    scrollbarAutoHide: 'leave',
    scrollbarClickScroll: true,
};
document.addEventListener('DOMContentLoaded', function () {
    const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);

    // Disable OverlayScrollbars on mobile devices to prevent touch interference
    const isMobile = window.innerWidth <= 992;

    if (
        sidebarWrapper &&
        OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined &&
        !isMobile
    ) {
        OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
            scrollbars: {
                theme: Default.scrollbarTheme,
                autoHide: Default.scrollbarAutoHide,
                clickScroll: Default.scrollbarClickScroll,
            },
        });
    }
});
// <!--end::OverlayScrollbars Configure-->
// <!--end::Script-->
// <!-- Code injected by live-server -->
// <![CDATA[  <-- For SVG support
if ('WebSocket' in window) {
    (function () {
        function refreshCSS() {
            var sheets = [].slice.call(document.getElementsByTagName("link"));
            var head = document.getElementsByTagName("head")[0];
            for (var i = 0; i < sheets.length; ++i) {
                var elem = sheets[i];
                var parent = elem.parentElement || head;
                parent.removeChild(elem);
                var rel = elem.rel;
                if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() ==
                    "stylesheet") {
                    var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                    elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date()
                        .valueOf());
                }
                parent.appendChild(elem);
            }
        }
        var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
        var address = protocol + window.location.host + window.location.pathname + '/ws';
        var socket = new WebSocket(address);
        socket.onmessage = function (msg) {
            if (msg.data == 'reload') window.location.reload();
            else if (msg.data == 'refreshcss') refreshCSS();
        };
        if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
            console.log('Live reload enabled.');
            sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
        }
    })();
} else {
    console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
}
// ]]>

//ckfinder
CKEDITOR.replace('content', {
    filebrowserBrowseUrl: '/ckfinder/browser',
    filebrowserUploadUrl: '/ckfinder/connector?command=QuickUpload&type=Files'
});
