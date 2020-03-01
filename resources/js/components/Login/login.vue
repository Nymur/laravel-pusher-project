<template>
  <v-form @submit.prevent="login">
    <v-container>
 

          <v-text-field
            v-model="form.email"       
            type="email"
            label="E-mail"
            required
          ></v-text-field>

          <v-text-field
            v-model="form.password"
            type="password"
            label="password"
            required
          ></v-text-field>

          <v-btn
			class="purple white--text"
			type="submit"
          >
          	Login
          </v-btn>

       <v-btn to='/signup'
        color='red'
        text>
         Sign up
       </v-btn>
       

    </v-container>
  </v-form>
</template>


<script>
  export default {
    // data(){
    //   return {
    // 	  form:{
    // 		email: '',
    //         password: '',	
    // 	  }
    //   }     
    // },

  	data:()=>({
  		form:{
  			email   :"",
  			password:""
  		}
    }),
    created(){
      if(User.logedIn()){
        this.$router.push({name:'forum'})
      }
    },
    methods:{
    	login(){
        User.login(this.form)
        
    	}
    }

  }
</script>