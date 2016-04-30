import store from duplicate.main.js

<template>
	<h2>{{ username }}: <slot></slot></h2>
</template>

<script>
	export default {
		data(){
			return store
		}
	};
</script>