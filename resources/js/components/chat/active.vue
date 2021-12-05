<template>
  <div class="">
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