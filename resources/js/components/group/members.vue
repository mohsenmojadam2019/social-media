<template>
  <div>

  </div>
</template>
<script setup>
defineProps({
   group:{
    type:Object,
    required:true
   }
})

let members=$ref([])

onMounted(() => {
    axios.get('/group/member/all',{params:{groupId:group.id}})
    .then(res=>{
      members=res.data.members
    });
})

</script>
