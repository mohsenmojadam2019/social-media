<template>
    <div>
     <router-link v-for="friend in friends" :key="friend.id" :to="messages" class="flex">
      <img :src="`/storage/users/${friend.avatar}`" alt="" class="w-5 h-5 rounded-full">
      <p class="text-xl">{{friend.name}}</p>
     </router-link>
    </div>
</template>
<script>
export default {
  props:{
   user:{
     type:Object,
     required:true
   }
  },
  data(){
   return{
    friends:[]
   }   
  },
  mounted(){
    axios.get('/chat/friends',{params:{userId:this.user.id}})
    .then(res=>{
      this.friends=res.data.friends;
    });
  },
  methods:{
      
  }
}
</script>