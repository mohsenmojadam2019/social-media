<template>
  <div>
   <div class="">
     <ul class="list-style-none" v-chat-scroll>
       <li v-for="message in messages" :key="message.id">
         <img :src="message.user.imgSource" alt="" class="w-5 h-5 rounded-full">
        <p class="text-xl rounded" :class="[message.user.id==userId ? 'right-0 bg-green-100':'bg-blue-100']">
          {{message.body}}
        </p>
       </li>
     </ul>
    </div>  
  <div>
    <form @submit.prevent="sendMessage">
      <input type="text" v-model="text" required>
      <input type="submit" value="send" class="">
    </form>
  </div>  
  </div>  
</template>
<script>
export default {
  props:['userId','friendId'],
    data(){
     return{
      text:'',
      messages:[],
     }
    },
    mounted()
    {
      axios.get('/chat/messages',{params:{userId:this.userId,friendId:this.friendId}})
      .then(res=>{
         this.messages=res.data.messages;
      })
      .catch(err=>{
        console.log('error in fetching messages');
      });
    },
    methoids:{
      sendMessage(){
        axios.post('chat/sendMessage',{text:this.text,from:this.userId})
        .then(res=>{

        });
      }
    }
}
</script>