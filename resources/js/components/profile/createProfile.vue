<template>
 <div>
  <form @submit.prevent="createProfile">
   
  </form>
 </div>
</template>
<script>
export default {
 props:{
  user:{
   type:Object,
   required:true
  }
 },
 data(){
  return{

  }
 },
 methods:{
  createProfile(){

  }
 }
}
</script>