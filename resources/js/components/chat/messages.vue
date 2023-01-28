<template>
  <div class="">
   <div class="h-full flex flex-col justify-between" v-if="friend">
     <div v-if="loading">
       <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-circle-half animate-spin w-20 h-20 mx-auto my-5 text-first" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
       </svg>
     </div>
     <div v-else class="">
      <div v-if="messages.length" class="">
        <ul class="list-style-none">
        <li v-for="message in messages" :key="message.id">
          <div class="flex items-center rounded p-2 m-2" :class="[message.from==user.id ? 'bg-chat-green':'bg-chat-blue text-right']">
           <p class="text-base w-max px-2" :class="[message.from==user.id ? 'text-left':'text-right']">
             <span>{{message.body}}</span>
             <span class="text-sm mx-2">{{message.hour}}</span>
           </p>
          </div>
        </li>
        </ul>
      </div>
      <div v-else class="my-10 flex justify-center text-gray-400">
       <p v-if="friend.id!=user.id" class="text-3xl">say hello to {{friend.name}}</p>
       <p v-else class="text-3xl">chat with yourself</p>
      </div>
     </div>
      <div class="w-full">
        <form @submit.prevent="sendMessage" class="flex w-11/12 mx-auto my-1">
          <input type="text" v-model="message" required placeholder="write a message..." class="outline-none border-b-2 border-gray-300 focus:border-blue-500 text-xl p-2.5 w-5/6">
          <input type="submit" value="send" class="text-white bg-first rounded-r-3xl py-2 px-4 text-xl">
        </form>
      </div>
   </div>
   <div v-else class="my-10">
      <p class="text-2xl text-gray-400 text-center my-5">please select a chat to start messaging</p>
   </div>
  </div>
</template>
<script setup>
import bus from '../../app'

defineProps({
    user:{
     type:Object,
     required:true
    }
})

let message=$ref('')
let messages=$ref([])
let friend=$ref(null)
let chatroom=$ref('')
let loading=$ref(true)

onCreated(()=>{
    bus.$on('friend-selected',(friend)=>{
    friend=friend
    setChatroom()
    getMessages()
    })
})

const setChatroom=()=>{
    if(friend){
    let userId=parseInt(user.id)
    let friendId=parseInt(friend.id)
    if(userId<friendId){
        chatroom=user.id+''+friend.id
    }
    else{
    chatroom=friend.id+''+user.id
    }
    }
}

const getMessages=()=>{
    axios.get('/chat/messages',{params:{chatroom:chatroom}})
    .then(res=>{
        messages=res.data.messages
        messages.forEach((message)=>{
        message.date=message.created_at.substr(0,9)
        message.hour=message.created_at.substr(11,5)
        message.hour=(parseInt(message.hour>12))? (message.hour-12)+'PM' : message.hour+'AM'
        })
        loading=false
    })
}

const listen=()=>{
    Echo.private(chatroom)
    .listen('.NewMessage',(message)=>{
        message.date=message.created_at.substr(0,9)
        message.hour=message.created_at.substr(11,5)
        message.hour=(message.hour>12) ? (message.hour-6)+'PM' : message.hour+'AM'
        messages.push(message)
    })
}

const sendMessage=()=>{
    axios.post('/chat/message/send',{message:message,chatroom:chatroom,friendId:friend.id})
    .then(res=>{
        let message=res.data.message
        message.date=message.created_at.substr(0,9)
        messages.push(message)
        message=""
    })
}

</script>
