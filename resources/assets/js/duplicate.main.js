var Vue = require('vue');

var store = {
	username: 'Arnold Llanes'
};

export default store {
	return store
};

import notification from './components/Notification.vue';

new Vue({
	el: 'body',

	data: store,

	components: { notification }

});