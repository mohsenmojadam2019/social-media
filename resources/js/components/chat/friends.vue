<template>
    <div>
      <div>
        <input type="text" @input="filterFriends" placeholder="search" class="bg-gray-200 border-b border-gray-300 text-lg w-full focus:bg-white py-2 px-3">
      </div>
      <div v-for="friend in friends" :key="friend.id">
        <div @click="selectFriend(friend)" class="flex justify-between py-0.5 cursor-pointer px-2"
          :class="[friend.id==selectedFriend.id ? 'bg-first text-white hover:bg-first' : 'hover:bg-gray-200']">
         <div class="flex mx-2 space-y-2">
           <img src="https://www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png" class="w-14 h-14 rounded-full mx-1">
           <div>
            <p v-if="friend.id==user.id" class="text-lg font-medium my-auto">saved messages</p>
            <p v-else class="text-lg font-medium my-auto" >{{friend.name}}</p>
            <p class="text-base" :class="[friend.id==selectedFriend.id ? 'text-white' : 'text-gray-600']">{{friend.lastMessage.body}}</p>
           </div>
         </div>
         <div>
           <p class="tetx-gray-500 m-2">{{friend.lastMessage.hour}}</p>
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
    friends:[],
    selectedFriend:{}
   }   
  },
  mounted(){
    this.getFriends();
  },
  methods:{
    getFriends(){
      axios.get('/chat/friends',{params:{userId:this.user.id}})
      .then(res=>{
        this.friends=res.data.friends;
        this.friends.sort((friend1,friend2)=>(friend1.lastMessage.created_at>friend2.lastMessage.created_at)? -1 : 1);
        this.friends.forEach(friend=>{
          friend.lastMessage.hour=friend.lastMessage.created_at.substr(11,5);
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