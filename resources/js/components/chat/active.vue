<template>
  <div class="">
  <div v-if="loading" class="">
    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-circle-half animate-spin w-20 h-20 mx-auto my-5 text-first" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
    </svg>
  </div>
  <div v-else>
    <div v-if="activeUsers.length">
    <ul>
    <p class="text-xl font-semibold text-center border-b-2 border-gray-300 p-2">Active(<span class="text-first">{{activeUsers.length}}</span>)</p>
    <li v-for="active in activeUsers " :key="active.id" class="flex items-center p-1">
      <div class="flex">
       <img src="https://www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png" class="w-12 h-12 rounded-full mx-1">
       <p class="text-xl mx-1 my-auto">{{active.name}}</p>
      </div>
    </li>
    </ul>
  </div>
  <div v-else>
    <p class="text-2xl text-center my-10 text-gray-400">no active friend is found</p>
  </div>
  </div>
  </div>
</template>
<script setup>
defineProps({
    user:{
     type:Object,
     required:true
   }
})

let activeUsers=$ref([])
let loading=$ref(true)

let listen=()=>{
    Echo.join('chat')
    .here(users=>{
    users.forEach(user => {
        if(user.id!=user.id){
        activeUsers.push(user)
        }
    })
    loading=false
    })
    .joining(user=>{
    activeUsers.unshfit(user)
    })
    .leaving(user=>{
    activeUsers.pop(use)
    })
}
</script>
