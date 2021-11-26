<template>
    <div>
     <router-link v-for="friend in friends" :to="messages" class="flex">
      <img :src="" alt="" class="w-5 h-5 rounded-full">
      <p class="text-xl">{{friend.name}}</p>
     </router-link>
    </div>
</template>
<script>
export default {
    
}
</script>