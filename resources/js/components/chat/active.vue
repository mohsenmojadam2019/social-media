<template>
  <div class="">
  <div v-if="loading" class="">
    <svg class="animate-spin h-20 w-20 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
      <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
      <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
    </svg>
  </div>
  <div v-else>
    <div v-if="activeUsers.length">
    <ul>
    <p class="text-xl font-semibold text-center border-b-2 border-gray-300 p-2">Active(<span class="text-first">{{activeUsers.length}}</span>)</p>
    <li v-for="active in activeUsers " :key="active.id" class="flex justify-center items-center p-1">
      <img src="https://www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png" class="w-14 h-14 rounded-full mx-1">
      <p class="text-xl mx-1 my-auto">{{active.name}}</p>
    </li>
    </ul>
  </div>
  <div v-else>
    <p class="text-2xl text-center my-10 text-gray-400">no active friend is found</p>
  </div>
  </div>
  </div>
</template>
<script>
export default {
  data(){
   return{
    activeUsers:[],
    loading:true,  
   }  
  },
  mounted(){
    this.listen();
  },
  methods:{
    listen(){
      Echo.join('chat')
      .here(users=>{
        this.activeUsers=users;
        this.loading=false;
      })
      .joining(user=>{
      this.activeUsers.unshfit(user);
      })
      .leaving(user=>{
        this.activeUsers.pop(user);
      });
    }    
  }
}
</script>