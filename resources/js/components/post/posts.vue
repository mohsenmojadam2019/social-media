<template>
  <div>
    <div v-for="post in posts" :key="post.id">
     <img v-if="post.image" :src="`/storage/posts/${post.picture}`" class="">
     <h1 class="">{{post.title}}</h1>
     <p>{{post.body}}</p>
     <postlike-component :post="post" :user="user"/>
     <postcomment-component :post="post" :user="user"/>
    </div>
  </div>
</template>
<script setup>
let posts=$ref([])

onMounted(() => {
    axios.get('/post/all',{params:{userId:user.id}})
    .then(res=>{
      posts=res.data.posts
    })
})
</script>
