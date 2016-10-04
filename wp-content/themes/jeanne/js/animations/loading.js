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
    this.tl = new TimelineMax();
  }

  loadingSite.fillTimeline = function () {
    this.tl.add(TweenMax.to(this.$nameItems,0.85,{x:0,delay:0.7,ease:Expo.easeOut}));
  }

  loadingSite.init();
  ns.app = ns.app || {};
  ns.app.loading = loadingSite;
  ns.app.loading.init();
}(window, window.Zepto))
