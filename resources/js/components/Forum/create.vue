<template>
  <v-form @submit.prevent="create">
    <v-container>

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

      <v-btn
       color="green"
       type="submit"
      >Create
      </v-btn>


    </v-container>
  </v-form>
</template>

<script>

export default {
  components: {
      
    },
    data(){
        return {
            form:{
                title      :null,
                category_id:null,
                body       :null
            },
            err:{},
            categories:[],
        }
    },
    created(){
        axios.get('/api/categories')
        .then(res=> this.categories=res.data.data)
    },
    methods:{
        create(){
          axios.post('/api/questions',this.form)
          .then(res=> this.$router.push(res.data.path))
          .catch(error=> this.err = error.response.data.error)
        }
    }
}
</script>

<style>
  
</style>
