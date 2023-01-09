document.addEventListener('DOMContentLoaded', function () {
  var slider = tns({
    container: '.tag-feed',
    items: 1,
    slideBy: 'page',
    autoplay: false,
    nav: false,
    loop: false,
    controlsText: ['<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20" fill="currentColor"><path d="M26.667 14.667v2.667h-16l7.333 7.333-1.893 1.893-10.56-10.56 10.56-10.56 1.893 1.893-7.333 7.333h16z"></path></svg>', '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20" fill="currentColor"><path d="M5.333 14.667v2.667h16l-7.333 7.333 1.893 1.893 10.56-10.56-10.56-10.56-1.893 1.893 7.333 7.333h-16z"></path></svg>'],
    responsive: {
    	1020: {
    		items: 2
    	},
    	1920: {
    		items: 3
    	},
    	2500: {
    		items: 4
    	}
    }
  });
}, false);

