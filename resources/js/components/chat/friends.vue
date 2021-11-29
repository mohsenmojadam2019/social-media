<template>
    <div>
      <div v-for="x in 10" :key="x">
        <div class="flex p-2">
         <img src="https://www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png" class="w-10 h-10 rounded-full m-1">
         <div>
           <p class="text-lg font-bold my-auto">getachew fikadu</p>
           <p class="text-gray-600 text-lg">last message</p>
         </div>
        </div>
      </div>
     <!-- <router-link v-for="friend in friends" :key="friend.id" :to="messages" class="flex">
      <img :src="`/storage/users/${friend.avatar}`" alt="" class="w-5 h-5 rounded-full">
      <p class="text-xl">{{friend.name}}</p>
     </router-link> -->
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