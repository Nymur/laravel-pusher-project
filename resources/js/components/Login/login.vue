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
			color="red"
			type="submit"
          >
          	Login
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
    methods:{
    	login(){
    		axios.post('/api/auth/login',this.form)
    		.then(res   => console.log(res.data))
    		.catch(error=> console.log(error.response.data))
    		
    		

    	}
    }

  }
</script>