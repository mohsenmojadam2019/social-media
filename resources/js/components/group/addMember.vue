<template>
  <div>
    <form @submit.prevent="addMember">
      <input type="submit" :value="[added ? 'added' : 'add']" class="bg-first text-white rounded-xl py-2 px-4">
    </form>
  </div>
</template>
<script setup>
defineProps({
  group:{
   type:Object,
   required:true
  },
  user:{
   type:Object,
   required:true
  }
})

let added=$ref(false)

const addMember=()=>{
   axios.post('/group/member/add',{groupId:group.id,userId:user.id})
   .then(res=>{
     added=true
   })
}
</script>
