var Vue = require('vue');

import message from './components/Events.vue';

new Vue({
	el: 'body',

	components: { message },

	data: {
		messages: []
	},

	methods: {
		handleNewMessage: function(message){
			this.messages.push(message);
		}
	}
});
