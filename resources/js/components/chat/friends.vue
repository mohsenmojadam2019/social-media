<template>
    <div>
      <div>
        <input type="text" @input="filterFriends" placeholder="search" class="text-gray-700 text-lg w-full bg-gray-200 focus:bg-white py-2 px-3">
      </div>
      <div v-for="x in 7" :key="x">
        <div @click="setSelectedFriend()" class="flex justify-between py-0.5 hover:bg-gray-200 cursor-pointer px-2">
         <img src="https://www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png" class="w-14 h-14 rounded-full mx-1">
         <div class="my-auto mx-2 space-y-2">
           <p class="text-lg font-medium my-auto">getachew fikadu</p>
           <p class="text-gray-600 text-base">last message</p>
         </div>
         <div>
           <p class="tetx-gray-500 m-2">12:45</p>
         </div>
        </div>
      </div>
    </div>
</template>
<script>
export default {
  props:{
   user:{
     type:Object,
     required:true
   }
  },
  data(){
   return{
    friends:[]
   }   
  },
  mounted(){
    axios.get('/chat/friends',{params:{userId:this.user.id}})
    .then(res=>{
      this.friends=res.data.friends;
    });
  },
  methods:{
    setSelectedFriend(friend){
     
    },
    filterFriends(){

    }
  }
}
</script>