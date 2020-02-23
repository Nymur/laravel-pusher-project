<template>
  <v-card
    color="grey lighten-4"
    flat
    
    tile
  >
    <v-toolbar dense>
      <v-app-bar-nav-icon></v-app-bar-nav-icon>

      <v-toolbar-title>Bitter</v-toolbar-title>

      <v-spacer></v-spacer>
	
      <v-toolbar-items class="hidden-sm-and-down"> 
      <div
       v-for="item in items"
       :key="item.title"
      >
        <v-btn
         :to="item.to"
         v-if="item.show"
         text
        >
          {{item.title}}
        </v-btn>
      </div>
       
      </v-toolbar-items>



    </v-toolbar>
  </v-card>
</template>

<script>
  export default {
    data(){
      return {
        items:[
          {title:'Forum', to: '/forum', show: true},
          {title:'Ask Question', to: '/ask', show: User.logedIn()},
          {title:'Category', to: '/category', show: User.logedIn()},
          {title:'Login', to: '/login', show: !User.logedIn()},
          {title:'Logout', to: '/logout', show: User.logedIn()},
        ]
      }
    },
    created(){
      EventBus.$on('logout',()=>{
        User.logOut()
      })
    }
  }
</script>