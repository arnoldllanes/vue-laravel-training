<html>
<head>
	<title>Component Excercise</title>
	<style>
		.Alert {
			position: relative;
			background: #ddd;
			padding: 1em;
		}

		.Alert--Success	 {
			background: lightgreen;
		}

		.Alert--Error {
			background: red;
		}

		.Alert__close {
			position: absolute;
			top: 1em;
			right: 1em;
			font-weight:bold;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<!-- When stating a type property you must explicitly declare them in the component-->
	<alert type="error">
		<strong>Success!</strong> Your account has been updated.
	</alert>

	<template id="alert-template">
		<!-- Putting a conditional in class type >>> use the class alert and if the class type is success, use AlertSuccess class, otherwise do nothing -->
		<div :class="alertClasses" v-show="show">
			<!-- What does this do?-->
			<slot></slot>
			<span class="Alert__close" @click="show = false">x</span>
		</div>
	</template>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.21/vue.js"></script>
    <script>
    Vue.component('alert',{
    	template: '#alert-template',
    	
    	props: ['type'],

    	data: function(){
    		return {
    			show: true
    		};
    	},

    	computed: {
    		alertClasses: function(){
    			var type = this.type;

    			return {
    				'Alert': true,
    				'Alert--Success': type == 'success',
    				'Alert--Error': type == 'error'
    			}
    		}
    	}
    });
    new Vue({
    	el: 'body'
    });
    </script>


</body>
</html>