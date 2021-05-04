<template>
    <div class="">
     <ul class="list-style-none" v-chat-scroll>
       <li v-for="message in messages" :key="message.id">{{message.body}}</li>
     </ul>
    </div>
</template>
<script>
export default {
    data()
    {
     return{
         messages:[]
     }
    },
    mounted()
    {
      axios.get('')
      .then()
    }
}
</script>