<template>
<div>
  <button  @click="leaveGroup" class="bg-first text-white text-xl py-2 px-4 rounded-xl" >{{leaveText}}</button>
</div>
</template>
<script setup>

let leave=$ref(false)
let leaveText=$ref("leave")

onMounted(()=>{
  axios.get('/group/user/status',{params:{groupId:groupId,userId:userId}})
  .then(res=>{
   leave=res.data
  })
})

const joinGroup=()=>{
    axios.post('/group/joingroup',{groupId:groupId,userId:userId})
    .then(res=>{
       leave=res.data
       leaveText="leave"
    })
}

</script>
