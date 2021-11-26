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
    props:['postId','userId'],
    data(){
     return{

     }      
    },
    mounted(){

    },
    methods:{
       like(){

       },
       dislike(){
              
       }    
    }   
}
</script>