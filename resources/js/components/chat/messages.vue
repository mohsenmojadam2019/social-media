<template>
  <div class="">
   <div class="flex flex-col items-between" v-if="friend">
     <div class="h-full">
      <div v-if="messages.length" class="bg-gren-500">
      <ul class="list-style-none">
       <li v-for="message in messages" :key="message.id">
        <p class="text-base rounded p-2 m-2" :class="[message.from==user.id ? 'bg-green-chat':'bg-blue-chat text-right']">{{message.body}}</p>
       </li>
      </ul>
     </div>
     <div v-else>
       <p class="text-2xl text-center my-5">say hello to {{friend.name}}</p>
     </div>
     </div>
      <div class="w-full">
        <form @submit.prevent="sendMessage" class="flex w-11/12 mx-auto my-1">
          <input type="text" v-model="message" required placeholder="write a message..." class="outline-none border-b-2 border-gray-300 focus:border-blue-500 text-xl p-2.5 w-5/6">
          <input type="submit" value="send" class="text-white bg-first rounded-r-3xl py-2 px-4 text-xl">
        </form>
      </div>
   </div>   
   <div v-else class="my-auto">
      <p class="text-2xl text-gray-600 text-center my-10">please select a chat to start messaging</p>
   </div> 
  </div>  
</template>
<script>
import bus from '../../app';
export default {
  props:{
    user:{
     type:Object,
     required:true
    }
  },
    data(){
     return{
      message:'',
      messages:[],
      friend:null
     }
    },
    mounted()
    {
      this.listen();
    },
    created(){
      bus.$on('friend-selected',(friend)=>{
        this.friend=friend;
        this.getMessages();
      });
    },
    methods:{
      getMessages(){
       axios.get('/chat/messages',{params:{friendId:this.friend.id}})
       .then(res=>{
         this.messages=res.data.messages;
       });
      },
      listen(){
        Echo.private('chat')
        .listen('.NewMessage',(message)=>{
          this.messages.push(message);
        });
      },
      sendMessage(){
        axios.post('/chat/message/send',{message:this.message,friendId:this.friend.id})
        .then(res=>{
          let message=res.data.message;
          this.messages.push(message);
          this.message="";
        });
      }
    }
}
</script>