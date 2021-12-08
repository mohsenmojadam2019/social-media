<template>
 <div>
   <div class="bg-first p-2">
     <button>
       <svg xmlns="http://www.w3.org/2000/svg" class="text-white h-10 w-14" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
       </svg>
     </button>
   </div>
   <div class="md:flex h-chat bg-white">
    <friends-component :user="user" class="overflow-auto w-1/4" />
    <messages-component :user="user" :friend="user" class="w-1/2 overflow-auto border-r border-l border-gray-300" />
    <active-component class="w-1/4 overflow-auto"/>
   </div>
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