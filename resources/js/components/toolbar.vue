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
        <v-btn text>
         Forum
       </v-btn>
       <v-btn text>
         Ask Question
       </v-btn>
       <v-btn text>
         Category
       </v-btn>
       <v-btn to='/login' text>
         Login
       </v-btn>
       <v-btn>
        <v-icon>mdi-history</v-icon>
       </v-btn>
     </v-toolbar-items>	


    </v-toolbar>
  </v-card>
</template>

<script>
  export default {
    
  }
</script>