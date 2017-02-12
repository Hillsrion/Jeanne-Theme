import $ from "jquery";
import {TweenLite, TimelineLite,Expo, Power3,Power4} from 'gsap';
//
const Loading = (function () {
    class Loading {
        constructor() {
			this.enabled = true;
        }
        init() {
			this.defineProps();
            if(!this.enabled) {
              this.$el.remove();
              console.log("Entry animation disabled.");
            }
            this.animate();
        }
        defineProps() {
            this.el = 'loading-page';
            this.$el = $('.'+this.el);
            this.$nameItems = $('.name__item',this.$el);
            this.intro = $('.landing__intro');
            this.$nameItemsCover = $('.name__item',this.intro);
            this.$jobName = $('h2',this.intro);
            this.$loadingFill = $('.loading-bar__fill span',this.$el);
            this.enabled = true;
            this.tl = new TimelineLite({paused: true});
            this.$window = $(window);
            this.$windowWidth = this.$window.width();
            this.$windowHeight = this.$window.height();
        }
        removeLoadingAnimation() {
            this.$el.addClass(this.el+'--loaded').remove();
        }
        animate() {
			const fillContainer = this.$loadingFill.parent();
			const ratioX = this.$windowWidth / fillContainer.width();
			const ratioY = (this.$windowHeight / fillContainer.height())*1.2;
			const cover = $('.landing__cover');
			const coverMask = $('.mask',cover);
			if(this.enabled) {
				this.tl.play();
				this.tl.add(TweenLite.to(this.$nameItems,0.85,{x:0,delay:0.7,ease:Expo.easeOut,force3D:true}));
				this.tl.add(TweenLite.to(this.$loadingFill,0.65,{scale:1, transformOrigin:"0px 0px",ease:Expo.easeInOut, delay: -0.3,force3D:true}));
				this.tl.add(TweenLite.to(this.$nameItems,1.3,{x:50, ease:Expo.easeOut,force3D:true}));
				this.tl.add(TweenLite.to(this.$loadingFill,0.65,{scaleX: ratioX,transformOrigin:"50%",ease:Expo.easeInOut, delay:-0.85,force3D:true}));
				this.tl.add(TweenLite.to(this.$loadingFill,0.4,{scaleY: ratioY,ease: Power3.easeInOut, delay: -0.3,force3D:true, onComplete: this.removeLoadingAnimation.bind(this)}));
				// Animating the image revealing here, using a onStart to make 2 tweens of differents elements on the same time.
				this.tl.add(TweenLite.to(coverMask,.75,{y: -coverMask.height(),ease: Power4.easeInOut,force3D:true,delay:0.15, onStart: function () {
					TweenLite.to(cover,1,{y:0,ease:Power3.easeInOut,force3D:true})
				}}));
				this.tl.add(TweenLite.to(this.$nameItemsCover,0.75,{x:0,ease:Expo.easeOut,force3D:true,onComplete: this.finishEntry.bind(this)}));
			} else {
				this.tl.add(TweenLite.to(coverMask,1,{y: -coverMask.height(),ease: Power4.easeInOut,force3D:true, delay:0.3}));
				this.tl.add(TweenLite.to(coverMask,.75,{y: -coverMask.height(),ease: Power4.easeInOut,force3D:true,delay:0.15, onStart: function () {
					TweenLite.to(cover,1,{y:0,ease:Power3.easeInOut,force3D:true})
				}}));
				this.tl.add(TweenLite.to(this.$nameItemsCover,0.75,{x:0,ease:Expo.easeOut,force3D:true,onComplete: this.finishEntry.bind(this)}));
			}
        }
		finishEntry() {
            this.$jobName.addClass('reveal');
            $('.menu-toggler, .landing__scroll-picto').addClass('reveal');
        }
    }
    let loading = new Loading();
    return loading;
}());

export default Loading;