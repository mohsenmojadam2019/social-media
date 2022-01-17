<template>
    <div>
      <div>
        <input type="text" @input="filterFriends" placeholder="search" class="bg-gray-200 border-b border-gray-300 text-lg w-full focus:bg-white py-2 px-3">
      </div>
      <div v-for="chatRoom in chatRooms" :key="chatRoom.id">
        <div @click="selectFriend(chatRoom.friend)" class="flex justify-between py-0.5 cursor-pointer px-2"
          :class="[chatRoom.friend.id==selectedFriend.id ? 'bg-first text-white hover:bg-first' : 'hover:bg-gray-200']">
         <div class="flex mx-2 space-y-2">
            <img v-if="chatRoom.friend.profile.avatar" src="https://www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png" class="w-14 h-14 rounded-full mx-1">
            <div v-else class="w-14 h-14 rounded-full mx-1 text-white uppercase text-center text-2xl text-bold bg-first">{{chatRoom.friend.firstLetter}}</div>
           <div>
            <p v-if="chatRoom.friend.id==user.id" class="text-lg font-medium my-auto">saved messages</p>
            <p v-else class="text-lg font-medium my-auto" >{{chatRoom.friend.name}}</p>
            <p class="text-base" :class="[chatRoom.friend.id==selectedFriend.id ? 'text-white' : 'text-gray-600']">{{chatRoom.lastMessage.body}}</p>
           </div>
         </div>
         <div>
           <p class="tetx-gray-500 m-2">{{chatRoom.lastMessage.hour}}</p>
         </div>
        </div>
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
    chatRooms:[],
    selectedFriend:{}
   }   
  },
  mounted(){
    this.getFriends();
  },
  methods:{
    getFriends(){
      axios.get('/chat/friends')
      .then(res=>{
        this.chatRooms=res.data.chatrooms;
        this.chatRooms.sort((room1,room2)=>(room1.lastMessage.created_at>room2.lastMessage.created_at)? -1 : 1);
        this.chatRooms.forEach(chatRoom=>{
          chatRoom.friend.firstLetter=chatRoom.friend.name.substr(0,1);
          chatRoom.lastMessage.hour=chatRoom.lastMessage.created_at.substr(11,5);
          chatRoom.lastMessage.hour=(chatRoom.lastMessage.hour>12)? (parseInt(chatRoom.lastMessage.hour-12))+'PM' : chatRoom.lastMessage.hour+'AM';
        });
      });
    },
    selectFriend(friend){
     this.selectedFriend=friend;
     bus.$emit('friend-selected',friend);
    },
    filterFriends(){

    }
  }
}
</script>