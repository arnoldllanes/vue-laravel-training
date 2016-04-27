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
			var resource = this.$resource('api/tasks/:id');
			//Look up on how to grab the payload request from below to update the database in laravel
			resource.update({ id: 5 }, {body: 'Updated Task Body'}, function(tasks) { // api/tasks/5
		 		this.list = tasks;
			}.bind(this));
		},
		deleteTask: function(task) {
			this.list.$remove(task);
		}
	}
});

new Vue({
	el: 'body'
});