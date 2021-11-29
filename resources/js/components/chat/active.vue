<template>
    <div>
     <ul>
      <li v-for="active in activeUsers " :key="active.id" class="flex">
        <img :src="`/storage/users/${active.id}`" class="w-5 h-5 rounded-full m-1">
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