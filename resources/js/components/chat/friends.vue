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

  },
  data(){
   return{

   }   
  },
  methods:{
      
  }
}
</script>