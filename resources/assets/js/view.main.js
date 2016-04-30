import Vue from 'vue';
import HomeView from './components/HomeView.vue';
import AboutView from './components/AboutView.vue';

new  Vue({
	el: 'body',

	components: {
		HomeView, AboutView
	}// anywhere within the body tag we can use <homeview> or <component is="home-view">
});