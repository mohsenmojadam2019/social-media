<template>
  <form @submit.prevent="search">
   <input type="text" v-model"text" class="" required>
   <input type="submit" value="search" class="">
  </form>
</template>
<script>
export default {
  data(){
    return{
     text:'',
    }
  },
  methods:{
    search(){

    }
  }
}
</script>