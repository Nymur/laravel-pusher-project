import Vue from 'vue'
import VueRouter from 'vue-router'
import login from './components/Login/login'

Vue.use(VueRouter)
const routes = [
	{
	  path: '/login',
	  component:login,
	  name:'login'
	}

]

export default new VueRouter({
	routes,
	// hashbang: false,
	mode:'history'
})