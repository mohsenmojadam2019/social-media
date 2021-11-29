<template>
 <div>
  <friends-component />
  <messages-component/>
  <active-component />
 </div>
</template>
<script>
import messages from "./messages.vue";
import friends from "./friends.vue";
import active from "./active.vue"
export default {
  components: {
    messages,
    friends,
    active
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