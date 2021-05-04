<template>
    <div>
     <ul>
      <li v-for="friend in friends" :key="friend.id">{{friend}}</li>
     </ul>
    </div>
</template>
<script>
export default {
    
}
</script>