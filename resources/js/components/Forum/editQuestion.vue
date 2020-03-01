<template>
      <v-container fluid>
      <v-card>
       <form @submit.prevent="update">
        <v-text-field
         v-model="form.title"
         type="text"
         label="Title"
         required
        ></v-text-field>

        <v-select
          :items="categories"
          v-model="form.category_id"
          item-text="name"
          item-value="id"
          label="Category"
          autocomplete
        ></v-select>
        <vue-simplemde v-model="form.body" />

        <v-card-actions>
            <v-btn icon type="submit">
              <v-icon color="green">save</v-icon>
            </v-btn>
            <v-btn icon @click="cancel">
              <v-icon color="red">cancel</v-icon>
            </v-btn>
        </v-card-actions>

        
       </form>
      </v-card>



    </v-container>
</template>

<script>
export default {
    props:['qData'],
    data(){
        return {
            categories:[]
        }
    },
    created(){
        this.getCategory(),
        this.form = this.qData
    },
    methods:{
        update(){
            axios.patch(`/api/questions/${this.qData.slug}`,this.form)
            .then(res=>this.cancel())
            .catch(error=>console.log(error.response.data))
        },
        getCategory(){
          axios.get('/api/categories')
        .then(res=> this.categories=res.data.data)  
        },
        cancel(){
            EventBus.$emit('cancel')
        }
    }
}
</script>

<style>

</style>