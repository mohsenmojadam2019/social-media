<template>
  <div class="">
   <div class="flex flex-col items-between h-1/2" v-if="friend">
     <div v-if="messages.length" class="bg-gren-500">
      <ul class="list-style-none">
       <li v-for="message in messages" :key="message">
        <p class="text-lg rounded bg-blue-100 p-2 m-2">{{message}}</p>
       </li>
      </ul>   
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
export default {
  props:{
    user:{
     type:Object,
     required:true
    },
    friend:{
     type:Object,
     required:false
    }
  },
    data(){
     return{
      message:'',
      messages:[],
     }
    },
    mounted()
    {
      this.getMessages();
      this.listen();
    },
    created(){
      // bus.$on('friend-selected',(friend)=>{
      //   this.friend=friend;
      //   axios.get('/chat/messages',{params:{userId:this.user.id,friendId:this.friend.id}})
      //  .then(res=>{
      //    this.messages=res.data.messages;
      //  });
      // });
    },
    methods:{
      getMessages(){
       axios.get('/chat/messages',{params:{userId:this.user.id,friendId:this.friendId}})
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