var Vue = require('vue');

Vue.transition('fade', {
	enterClass: 'flipInX',
	leaveClass: 'fadeOut'
});
new Vue({
	el: 'body',
	data: {
		show: true
	}
});