<template>
 <div class="md:flex lg:flex xl:flex 2xl:flex min-h-96 max-h-screen bg-white">
  <friends-component :user="user" class="overflow-auto w-1/4" />
  <messages-component :user="user" :friend="activeFriend" class="w-1/2 overflow-auto border-r border-l border-gray-300" />
  <active-component class="w-1/4 overflow-auto"/>
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
   return {
    text:'',
    activeFriend:{},
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