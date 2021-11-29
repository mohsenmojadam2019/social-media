<template>
 <div class="flex border-2 border-blue-500 max-h-screen bg-white">
  <friends-component :user="user" class="overflow-auto w-1/4 border-2 border-blue-500" />
  <messages-component :user="user" :friend="friend" class="w-1/2 overflow-auto" />
  <active-component class="w-1/4 border-2 border-blue-500 overflow-auto"/>
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
  props:{
    user:{
      type:Object,
      required:true
    }
  },
  data(){
   return{
    text:'',
    friend:{},
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