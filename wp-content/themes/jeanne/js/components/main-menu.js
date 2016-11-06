
(function ($,ns) {
    var menu = {};
    menu.init = function () {
        this.defineProps();
        this.clickListener();
    };
    menu.defineProps = function () {
        // Markup
        this.el = 'nav-menu';
        this.toggler = 'menu-toggler';
        this.label = this.toggler+'__label';
        this.globalContainer = 'global-container';
        this.hamburger = 'hamburger';
        this.$el = $('.'+this.el);
        this.items = this.el+'__item';
        this.$items = this.$el.find('.'+this.items);
        this.$toggler = $('.'+this.toggler);
        this.$hamburger = this.$toggler.find('.'+this.hamburger);
        this.$label = this.$toggler.find('.'+this.label);
        this.$globalContainer = $('.'+this.globalContainer);
        // Boolean
        this.isOpen = false;
        this.isOpening = false;
        this.isClosing = false;
    }
    menu.clickListener = function () {
        this.$toggler.on('click',this.onClick.bind(this));
    }
    menu.onClick = function () {
        if(!this.isOpen) {
            this.open()
        } else {
            this.close();
        }
    };
    menu.open = function () {
        this.isOpening = true;
        this.$el.addClass(this.el+'--is-open');
        // Opening hamburger menu.
        this.$hamburger.addClass('hamburger--opened-menu');
        this.$hamburger.find('.hamburger__item').addClass('hamburger__item--cross');
        this.$label.addClass(this.label+"--opened");
        // Adding classes on main elements to put them aside while menu is open.
        this.$globalContainer.find('.'+this.globalContainer+'__wrapper').addClass(this.globalContainer+'__wrapper--opened-menu');
        this.$globalContainer.find('.'+this.globalContainer+'__overlay').addClass(this.globalContainer+'__overlay--opened-menu');
        this.$items.find('.link').addClass('link--is-visible');
        this.changeLabelContent();
        this.isOpening = !this.isOpening;
        this.isOpen = !this.isOpen;
    };
    menu.close = function () {
        this.isClosing = true;
        this.$el.removeClass(this.el+'--is-open');
        this.$hamburger.removeClass('hamburger--opened-menu');
        this.$hamburger.find('.hamburger__item').removeClass('hamburger__item--cross');
        this.$label.removeClass(this.label+"--opened");
        this.$globalContainer.find('.'+this.globalContainer+'__wrapper').removeClass(this.globalContainer+'__wrapper--opened-menu');
        this.$globalContainer.find('.'+this.globalContainer+'__overlay').removeClass(this.globalContainer+'__overlay--opened-menu');
        this.$items.find('.link').removeClass('link--is-visible');
        this.changeLabelContent();
        this.isClosing = !this.isClosing;
        this.isOpen = !this.isOpen;
    };
    menu.changeLabelContent = function () {
        if(this.isOpening) {
            this.$label.addClass(this.label+'--opened-menu');
        } else if (this.isClosing) {
            this.$label.removeClass(this.label+'--opened-menu');
        }
    };
    ns.app = ns.app || {};
    ns.app.menu = menu;
    ns.app.menu.init();
})(window.Zepto,window);
