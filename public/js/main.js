Vue.component('tasks', {
	template: '#tasks-template',

	data: function(){
		return {
			list: []
		};
	},
	/**For Json
	//props: ['list'],**/

	created: function() {
		/**JSON.parse is used to convert a json text into a javascript object
		//for this list convert list into a javascript object
		**this.list = JSON.parse(this.list);*/

		//For AJAX
		//making a request to routes api/tasks accepting the returned data to test in console log
		// $.getJSON('api/tasks', function(tasks) {
		// 	this.list = tasks;
		// }.bind(this));

		/** Cleaner Approach*/
		this.fetchTaskList();
	},

	methods: {
		fetchTaskList: function() {
			$.getJSON('api/tasks', function(tasks) {
		 		this.list = tasks;
			}.bind(this));
		},
		delete: function(task) {
			this.list.$remove(task);
		}
	}
});

new Vue({
	el: 'body'
});