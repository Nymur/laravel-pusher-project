// child of read
<template>
  <v-card>
    <v-card-title>
      <div>
        <v-list-item-title class="headline">{{qData.title}}</v-list-item-title>
        <v-list-item-subtitle class="grey--text ">
          {{qData.user}}
           <span class="black--text">said</span>
          {{qData.created_at}}
        </v-list-item-subtitle>
      </div>
      <v-spacer></v-spacer>
      <v-btn color="teal">5 replies</v-btn>
    </v-card-title>

    <v-card-text
     v-html="body"
     class="black--text"
     ></v-card-text>

    <v-card-actions
     v-if="own"
    >
      <v-btn @click="edit" icon>
        <v-icon color="orange">edit</v-icon>
      </v-btn>
      <v-btn icon @click="destroy">
        <v-icon color="red">delete</v-icon>
      </v-btn>
    </v-card-actions>


  </v-card>
</template>

<script>
export default {
    props:['qData'],
    data(){
      return {
        own:User.own(this.qData.user_id)
      }
    },
    computed:{
      body(){
        return md.parse(this.qData.body)
      }
    },
    methods:{
      destroy(){
        axios.delete(`/api/questions/${this.qData.slug}`)
        .then(res=>this.$router.push({name:'forum'}))
        .catch(error=>console.log(error.response.data))
      },
      edit(){
        EventBus.$emit('startEditing');
      }
    }
}
</script>

<style>

</style>
