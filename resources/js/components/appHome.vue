<template>
 <div>
	<toolbar />
 	<router-view></router-view>
	<Footer />
 </div>
</template>
<script>
import toolbar from './toolbar'
import Footer from './footer'
import login from './Login/login'
    export default {
        components:{
        	toolbar,Footer,login
        }
    }
</script>
