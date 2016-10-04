(function(ns,$) {
  var loadingSite = function () {}
  loadingSite.init = function () {
    this.el = 'loading-page';
    this.$el = $(.+this.el);
    this.name = this.$el.find();
    TweenMax.to($('.name__item'),0.85,{x:0,delay:0.7,ease:Expo.easeOut});
  }
  loadingSite.init()
  console.log('hello');
}(window, jQuery))
