<template>
	<input v-model="message" @keyup.enter="storeMessage">
</template>

<script>
	export default {
		data: function(){
			return { message: ''};
		},

		methods: {
			storeMessage: function() {
				//console.log('Storing ' + this.message);
				//$dispatch exclusively go up to every component, up the chain
				//$broadcast the upper person goes down the chain

				this.$dispatch('new-message', this.message);
				this.message = '';
			}
		}
	};
	
</script>
