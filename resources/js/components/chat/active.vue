<template>
  <div>
    <div v-if="activeUsers.length">

    </div>
    <div v-else>
      <p class="text-2xl text-center my-10 text-gray-600">no active friend is found</p>
    </div>
    <ul>
    <li v-for="active in activeUsers " :key="active.id" class="flex justify-between py-0.5 hover:bg-gray-200 cursor-pointer px-2">
      <img src="https://www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png" class="w-14 h-14 rounded-full mx-1">
      <div class="my-auto mx-2 space-y-2">
        <p class="text-lg font-medium my-auto">getachew fikadu</p>
      </div>
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