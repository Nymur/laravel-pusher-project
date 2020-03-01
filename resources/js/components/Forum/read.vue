<template>
  <div>
    <edit-question 
     v-if="editq"
     :qData=question
    ></edit-question>
    <div v-else>
      <show-question 
        :qData=question
        v-if="question"
      ></show-question>
    </div>
    
  </div>
  

</template>

<script>
import editQuestion from './editQuestion'
import showQuestion from './showQuestion'
export default {
    components:{
        showQuestion,editQuestion
    },
    data(){
        return {
            question:null,
            editq:false
        }
    },
    created(){
        this.getQuestion(),
        this.listenBus()    
    },
    methods:{
        getQuestion(){
          axios.get(`/api/questions/${this.$route.params.slugg}`)
          .then(res => this.question=res.data.data)
        },
        listenBus(){
          EventBus.$on('startEditing',()=>{
            this.editq = true;
          }),
          EventBus.$on('cancel',()=>{
              this.editq = false;
          })   
        }
    }

 }
</script>

<style>

</style>
