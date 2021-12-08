<template>
  <div>
    <form @submit.prevent="addMember">
      <input type="submit" :value="[added ? 'added' : 'add']" class="bg-first text-white rounded-xl py-2 px-4">
    </form>
  </div>
</template>
<script>
export default {
 props:{
  group:{
   type:Object,
   required:true
  },
  user:{
   type:Object,
   required:true
  }
 },
 data(){
  return{
   added:false
  }
 },
 methods:{
  addMember(){
   axios.post('/group/member/add',{groupId:this.group.id,userId:this.user.id})
   .then(res=>{
     this.added=true;
   });
  }
 }
}
</script>