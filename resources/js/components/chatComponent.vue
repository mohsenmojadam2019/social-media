<template>
 <div>
  <friends-component />
  <messages-component/>
  <active-component />
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
  props:['userId'],
  data(){
   return{
    text:'',
    message:{},
    messages:[]
   }
  },
  mounted(){
   
  },
  methods:{
   
  }
}
</script>