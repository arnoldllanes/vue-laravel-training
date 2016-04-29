<template>
	<!-- Putting a conditional in class type >>> use the class alert and if the class type is success, use AlertSuccess class, otherwise do nothing -->
		<div :class="alertClasses" v-show="show">
			<!-- What does this do?-->
			<slot></slot>
			<span class="Alert__close" @click="show = false">x</span>
		</div>
</template>

<script>
    export default {

    	props: ['type'],

    	data(){
    		return {
    			show: true
    		};
    	},

    	computed: {
    		alertClasses(){
    			var type = this.type;

    			return {
    				'Alert': true,
    				'Alert--Success': type == 'success',
    				'Alert--Error': type == 'error'
    			};
    		}
    	}
    };
</script>