(function(ns,$) {
  var loadingSite = function () {}
  loadingSite.init = function () {
    this.defineProps();
    this.fillTimeline();
  }

  loadingSite.defineProps = function () {
    this.el = 'loading-page';
    this.$el = $('.'+this.el);
    this.$nameItems = $('.name__item',this.$el);
    this.$loadingFill = $('.loading-bar__fill span',this.$el);
    this.tl = new TimelineLite();
    this.$window = $(window);
    this.$windowWidth = this.$window.width();
    this.$windowHeight = this.$window.height();
  }

    loadingSite.removeLoadingAnimation = function () {
        this.$el.remove();
    }

  loadingSite.fillTimeline = function () {
    var ratioX = this.$windowWidth / this.$loadingFill.parent().width();
    var ratioY = (this.$windowHeight / this.$loadingFill.parent().height())*1.2;
    this.tl.add(TweenLite.to(this.$nameItems,0.85,{x:0,delay:0.7,ease:Expo.easeOut}));
    this.tl.add(TweenLite.to(this.$loadingFill,0.65,{scale:1, transformOrigin:"0px 0px",ease:Expo.easeInOut}));
    this.tl.add(TweenLite.to(this.$nameItems,1.5,{x:70,delay:0.2, ease:Expo.easeOut}));
    this.tl.add(TweenLite.to(this.$loadingFill,0.65,{scaleX: ratioX,transformOrigin:"50%",ease:Expo.easeInOut}));
    this.tl.add(TweenLite.to(this.$loadingFill,0.5,{scaleY: ratioY,ease:Expo.easeInOut, onComplete: this.removeLoadingAnimation.bind(this)}));
  }

  loadingSite.init();
  ns.app = ns.app || {};
  ns.app.loading = loadingSite;
  ns.app.loading.init();
}(window, window.Zepto))
