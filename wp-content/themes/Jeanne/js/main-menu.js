
(function ($,ns) {
    var menu = function () {
        // Markup
        this.el = 'nav-menu';
        this.toggler = 'menu-toggler';
        this.label = this.toggler+'__label';
        this.globalContainer = 'global-container';
        this.hamburger = 'hamburger';
        this.$el = $('.'+this.el);
        this.$toggler = $('.'+this.toggler);
        this.$hamburger = this.$toggler.find('.'+this.hamburger);
        this.$label = this.$toggler.find('.'+this.label);
        this.$globalContainer = $('.'+this.globalContainer);
        // Boolean
        this.isOpen = false;
        this.isOpening = false;
        this.isClosing = false;
        // Helpers
        this.helpers = {};
        // Init
        this.init();
    };
    menu.prototype.init = function () {
        this.clickListener();
    };
    menu.prototype.clickListener = function () {
        this.$toggler.on('click',this.onClick.bind(this));
    }
    menu.prototype.onClick = function () {
        if(this.isOpen==false) {
            this.open()
        } else {
            this.close();
        }
    };
    menu.prototype.open = function () {
        this.isOpening = true;
        this.$el.addClass(this.el+'--is-open');
        this.$hamburger.addClass('hamburger--opened-menu');
        this.$hamburger.find('.hamburger__item').addClass('hamburger__item--cross');
        // Adding classes on main elements to put them aside while menu is open.
        this.$globalContainer.find('.'+this.globalContainer+'__wrapper').addClass(this.globalContainer+'__wrapper--opened-menu');
        this.$globalContainer.find('.'+this.globalContainer+'__overlay').addClass(this.globalContainer+'__overlay--opened-menu');
        this.changeLabelContent();
        this.isOpening = !this.isOpening;
        this.isOpen = !this.isOpen;
    };
    menu.prototype.close = function () {
        this.isClosing = true;
        this.$el.removeClass(this.el+'--is-open');
        this.$hamburger.removeClass('hamburger--opened-menu');
        this.$hamburger.find('.hamburger__item').removeClass('hamburger__item--cross');
        this.$globalContainer.find('.'+this.globalContainer+'__wrapper').removeClass(this.globalContainer+'__wrapper--opened-menu');
        this.$globalContainer.find('.'+this.globalContainer+'__overlay').removeClass(this.globalContainer+'__overlay--opened-menu');
        this.changeLabelContent();
        this.isClosing = !this.isClosing;
        this.isOpen = !this.isOpen;
    };
    menu.prototype.preview = function () {
        if(this.isOpen==false) {
            this.$el.addClass(this.el+'--preview');
            this.$label.addClass(this.label+'--preview');
        }
    };
    menu.prototype.changeLabelContent = function () {
        if(this.isOpening) {
            this.$label.addClass(this.label+'--opened-menu');
        } else if (this.isClosing) {
            this.$label.removeClass(this.label+'--opened-menu');
        }
    };
    menu.prototype.previewOff = function () {
        this.$el.removeClass(this.el+'--preview');
        this.$label.removeClass(this.label+'--preview');
    };
    var menuObj = new menu();
    ns.app = menuObj
})(window.jQuery,window);
