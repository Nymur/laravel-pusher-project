<template>
  <v-card class="mb-0">
    <v-card-title primary-title>
      
      <router-link :to="theQuestion.path">
      <v-list-item-title class="headline mb-0">{{theQuestion.title}}</v-list-item-title>
      </router-link>
      <v-list-item-subtitle class="grey--text ">
        {{theQuestion.user}}
        <span class="black--text">said</span> 
        {{theQuestion.created_at}}
      </v-list-item-subtitle>
    
    </v-card-title>
    <v-card-text ><!-- v-html="body" -->
        {{theQuestion.body}}
    </v-card-text>
  </v-card>
</template>

<script>
export default {
  props:["theQuestion"],
  computed:{
    // body(){
    //   return md.parse(this.theQuestion.body)
    // }
  }
}
</script>

<style>

</style>