<template>
  <div>
    <button  @click="joinGroup" class="bg-first text-white text-xl py-2 px-4 rounded-xl" >{{joinText}}</button>
  </div>
</template>
<script setup>
let joined=$ref(false)
let joinText=$ref("join")

onMounted(()=>{
  axios.get('/group/user/status',{params:{groupId:groupId,userId:userId}})
  .then(res=>{
   joined=res.data
  })
})

joinGroup=()=>{
    axios.post('/group/joingroup',{groupId:groupId,userId:userId})
    .then(res=>{
       joined=true
       joinText="joined"
    })
}

</script>
