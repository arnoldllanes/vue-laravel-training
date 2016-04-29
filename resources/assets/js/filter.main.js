var Vue = require('vue');

Vue.filter('role', function(value, role) {
	//filter in array accepting the item
	return value.filter(function(item){
	//return role if the item role = role
		return item.role == role;
	});
});// people | role 'admin'
new Vue({
	el: 'body',

	data: {
		people: [
			{ name: 'Joe', role:'admin' },
			{ name: 'Susan', role: 'admin' },
			{ name: 'Frank', role: 'student' },
			{ name: 'Jeffrey', role: 'admin' }
			
		]
	}
});