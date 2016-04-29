var Vue = require('vue');
var Resource = require('vue-resource');

Vue.use(Resource);
Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('input[name="_token"]').value;

Vue.directive('ajax', {
	params: ['complete'],

	bind: function () {
		this.el.addEventListener('submit', this.onSubmit.bind(this)) //form element <form v-ajax>
	},

	update: function (value) {
		
	},

	//this refers to the bind function
	onSubmit: function (e) {
		e.preventDefault();

		//Use vue resource to submit a delete request to post/1
		this.vm
			.$http[this.getRequestType()](this.el.action)
			.then(this.onComplete.bind(this))
			.catch(this.onError.bind(this));
	},

	onComplete: function() {
		if (this.params.complete) {
			alert(this.params.complete);
		}
	},

	getRequestType: function() {
		var method = this.el.querySelector('input[name="_method"]');

		return (method ? method.value : this.el.method).toLowerCase();
	},

	onError: function (response) {
		alert(response.data.message); // flash message
	}
});

new Vue({
	el: 'body'
});