<template>
 <div>
  <button @click="like">like</button>
  <span>{{totalLikes}}</span>
  <button @click="dislike">dislike</button>
  <span>{{totalDislikes}}</span>
 </div>      
</template>
<script>
export default {
    props:{
    post:{
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
      totalLikes:null,
      totalDislikes:null
     }      
    },
    mounted(){
     this.getLikes();
    },
    methods:{
     getLikes(){
       axios.get('/post/likes',{params:{postId:this.post.id,userId:this.user.id}})
       .then(res=>{
         this.totalLikes=res.data.totalLikes;
         this.totalDislikes=res.data.totalDislikes;
       });
     },
     like(){
      axios.post('/post/like',{postId:this.post.id,userId:this.user.id})
      .then(res=>{
        
      });
     },
     dislike(){
      axios.post('/post/dislike',{postId:this.post.id,userId:this.user.id})
      .then(res=>{
        
      });        
     }    
    }   
}
</script>