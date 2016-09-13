/**
 * Created by ismael on 13/09/2016.
 */

(function ($,ns) {
    var menu = function () {
        this.el = 'nav-menu';
        this.toggler = 'menu-toggler';
        this.$el = $('.'+this.el);
        this.$toggler = $('.'+this.toggler);
        this.isOpen = false;
        this.init();
    };
    menu.prototype.init = function () {
        this.hoverListener();
        this.clickListener();
    };
    menu.prototype.hoverListener = function () {
        var hamburger = this.$toggler.find('.hamburger');
        hamburger.on('mouseenter',this.preview.bind(this));
        hamburger.on('mouseleave',this.previewOff.bind(this));
    };
    menu.prototype.clickListener = function () {
        this.$toggler.click(this.onClick.bind(this));
    }
    menu.prototype.onClick = function () {
        if(this.isOpen==false) {
            this.open()
        } else {
            this.close();
        }
    };
    menu.prototype.open = function () {
        this.$el.addClass(this.el+'--is-open');
        this.isOpen = !this.isOpen;
    };
    menu.prototype.close = function () {
        this.$el.removeClass(this.el+'--is-open');
        this.isOpen = !this.isOpen;
    };
    menu.prototype.preview = function () {
        this.$el.addClass(this.el+'--preview');
    };
    menu.prototype.previewOff = function () {
        this.$el.removeClass(this.el+'--preview');
    };
    var menuObj = new menu();
})(window.jQuery,window);
