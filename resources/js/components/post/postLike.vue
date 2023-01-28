<template>
 <div>
  <button @click="like">like</button>
  <span>{{totalLikes}}</span>
  <button @click="dislike">dislike</button>
  <span>{{totalDislikes}}</span>
 </div>
</template>
<script setup>
defineProps({
    post:{
      type:Object,
      required:true
    },
    user:{
     type:Object,
     required:true
    }
})

let totalLikes=$ref(null)
let totalDislikes=$ref(null)

onMounted(() => {
    axios.get('/post/likes',{params:{postId:post.id,userId:user.id}})
    .then(res=>{
        totalLikes=res.data.totalLikes
        totalDislikes=res.data.totalDislikes
    })
})

const like=()=>{
    axios.post('/post/like',{postId:post.id,userId:user.id})
    .then(res=>{

    })
}
const dislike=()=>{
    axios.post('/post/dislike',{postId:post.id,userId:user.id})
    .then(res=>{

    })
}

</script>
