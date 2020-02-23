import Vue from 'vue'
import VueRouter from 'vue-router'
import login from './components/Login/login'
import signup from'./components/Login/signup'
import forum from './components/Forum/forum'
import logout from './components/Login/logout'

Vue.use(VueRouter)
const routes = [
	{
	  path     : '/login',
	  component: login,
	  name     : 'login'
	},
	{
	  path     : '/signup',
	  component: signup,
	  name     : 'signup'
	},
	{
	  path     : '/forum',
	  component: forum,
	  name     : 'forum'
	},
	{
		path     : '/logout',
		component: logout,
		name     : 'logout'
	  }

]

export default new VueRouter({
	routes,
	// hashbang: false,
	mode:'history'
})