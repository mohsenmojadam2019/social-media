<template>
  <div>
    <div v-if="activeUsers.length">

    </div>
    <div v-else>
      <p class="text-2xl text-center my-10 text-gray-400">no active friend is found</p>
    </div>
    <ul>
      <p class="text-xl font-semibold">active(<span class="text-first">{{activeUsers.length}}</span>)</p>
    <li v-for="active in activeUsers " :key="active.id" class="flex">
      <img src="https://www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png" class="w-5 h-5 rounded-full m-1">
      <p class="text-xl mx-1 my-auto">{{active.name}}</p>
    </li>
    </ul>
  </div>
</template>
<script>
export default {
  data(){
   return{
    activeUsers:[]  
   }  
  },
  mounted(){
    Echo.join('chat')
    .here(users=>{
      this.activeUsers=users; 
    })
    .joining(user=>{
     this.activeUsers.unshfit(user);
    })
    .leaving(user=>{
      this.activeUsers.pop(user);
    });
  },
  methods:{
    
  }
}
</script>