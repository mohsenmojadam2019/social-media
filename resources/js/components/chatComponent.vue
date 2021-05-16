<template>
 <div>
  <friends-component />
  <messages-component/>
  <input type="text" v-model="text" @keyup.enter="sendMessage"/>
  <button @click="sendMessage" class="">send</button>
 </div>
</template>
<script>
import { messages } from "./messagesComponent.vue";
import { friends } from "./friendsComponent.vue";
export default {
  components: {
    messages,
    friends
  },
  props:['userId],
  data(){
   return{
    text:'',
    message:{}
    messages:[]
   }
  },
  methods:{
   sendMessage(){
     
   }
  }
};
</script>