<template>
	<div class="Alerts Alerts--{{ type | capitalize}}"
	 	v-show="show"
	 	transition="fade">

		<!--slot refers to <alerts></alerts>-->
		<slot>&times</slot>

		<span class="Alerts__close" 
			v-show="important" 
			@click="show = false"
		>
			&times
		</span>
	</div>
</template>

<script>
	export default{
		props: { 
			type: { default: 'info'},
			timeout: { default: 3000 },
			important: {
				type: Boolean,
				default: false
			}
		},

		data() {
			return { show: true };
		},

		ready() {
			if (!this.important) {
				setTimeout(
					() => this.show = false, 
					this.timeout
				)
			}
		}
	}
</script>

<style>
	.Alerts {
		padding: 10px;
		position: relative;
	}

	.Alerts--Info {
		background: #e3e3e3;
	}

	.Alerts--Success {
		background: green;
		color: white;
	}

	.Alerts__close {
		position: absolute;
		top: 10px;
		right: 10px;
		cursor: pointer;
	}

	.fade-transition {
		transition: opacity .4s ease;
	}

	.fade-leave {
		opacity: 0;
	}
</style>