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
<script>
export default {
 data(){
  return{
   posts:[]
  }
 },
 mounted(){
  this.getPosts();
 },
 methods:{
  getPosts(){
    axios.get('/post/all',{params:{userId:this.user.id}})
    .then(res=>{
      this.posts=res.data.posts;
    });
  }
 }
}
</script>