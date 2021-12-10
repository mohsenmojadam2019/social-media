<template>
 <div class="flex justify-between items-center bg-first w-full shadow-xl py-2">
  <div class="flex items-center"> 
    <div class="rounded-4xl mx-3">
      <form @submit.prevent="search" class="flex">
       <input type="text" v-model="searchQuery" required class="w-96 py-2.5 px-3 text-lg lg:text-xl xl:text-xl 2xl:text-xl outline-none focus:border-b-2 border-tiruhakim rounded-l-3xl" placeholder="search...">
       <button type="submit" class="capitalize bg-blue-700 rounded-r-3xl lg:rounded-r-3xl xl:rounded-r-3xl 2xl:rounded-r-3xl text-xl lg:text-3xl xl:text-2xl 2xl:text-2xl py-2.5 px-4 my-auto" >
         <svg xmlns="http://www.w3.org/2000/svg" class="text-white h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
       </button>
      </form>
    </div>
    <div class="font-medium text-white text-xl mx-5 hidden lg:inline xl:inline 2xl:inline">
     <ul class="flex items-center list-style-none">
       <li class="mx-4">
        <a href="/">
          <svg xmlns="http://www.w3.org/2000/svg" class="font-semibold my-auto text-white w-10 hover:text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
        </svg>
        </a>
       </li>
      <li class="mx-4">
        <a href="/friend">
         <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-people text-white w-10" viewBox="0 0 16 16">
          <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
        </svg>
        </a>
      </li>
      <li class="mx-4">
        <a href="/chat">
         <svg xmlns="http://www.w3.org/2000/svg" class="w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
        </svg>
        </a>
      </li>
      <li class="mx-4">
        <a href="/video">
         <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-play-btn text-white w-10" viewBox="0 0 16 16">
          <path d="M6.79 5.093A.5.5 0 0 0 6 5.5v5a.5.5 0 0 0 .79.407l3.5-2.5a.5.5 0 0 0 0-.814l-3.5-2.5z"/>
          <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm15 0a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4z"/>
        </svg>
        </a>
      </li>   
      <li class="mx-4">
        <notification-component :userId="user.id"/>   
      </li>
     </ul>   
    </div>
    <div class="block right-0 lg:hidden xl:hidden 2xl:hidden">
      <button @click="userDropdownMenu=true">
       <svg xmlns="http://www.w3.org/2000/svg" class="text-white h-10 w-14" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
       </svg>
      </button>
    </div>
   </div>
   <div class="flex items-center"> 
     <div v-if="user" class="items-center hidden lg:flex">
       <button class="flex items-center mx-2">
        <img src="https://www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png" class="w-12 h-12 rounded-full mr-2">
        <span class="text-xl font-semibold capitalize text-white text-semibold">{{user.name}}</span>
       </button>   
       <button class="mx-3">
         <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-list w-12 text-white" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
         </svg>
       </button>
       <button @click="userDropdownMenu=true">
         <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-caret-down-fill w-12 text-white" viewBox="0 0 16 16">
          <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
        </svg>
       </button>
     </div>
     <div v-else class="my-auto flex text-white text-xl text-xl">
      <a href="/login" class="text-2xl text-white mx-2 my-auto px-4 py-2">sign in</a>
      <a href="/register" class="my-auto text-2xl my-auto text-white bg-second mx-2 my-2 rounded-3xl px-4 py-2">sign up</a>  
     </div>
     <div v-if="userDropdownMenu" class="rounded-lg fixed z-20 text-xl bg-gray-100 top-0 right-0">
      <ul>
       <li class="hover:bg-blue-200 px-5 py-1"><a href="/">Home</a></li>
       <li class="hover:bg-blue-200 px-5 py-1"><a href="/channel/creat">create channel</a></li>
       <li class="hover:bg-blue-200 px-5 py-1"><a href="/video/create">upload videos</a></li>
       <li class="hover:bg-blue-200 px-5 py-1"><a href="/profile">my profile</a></li>
       <li class="hover:bg-blue-200 px-5 py-1"><a href="/chat">chat</a></li>
       <li class="hover:bg-blue-200 px-5 py-1"><a href="/about">contact us</a></li>
       <li class="hover:bg-blue-200 px-5 py-1">
        <button @click="logout">logout</button>  
       </li>  
      </ul>
     </div>
     <div v-if="userDropdownMenu" @click="userDropdownMenu=false" class="absolute z-10 -inset-y-0 -inset-x-0 bg-black opacity-50"></div>
    </div> 
 </div>
</template>
<script>
import notification from'./notification.vue';
export default {
   props:{
    user:{
     type:Object,
     required:true
    }
   },
   components:{
    notification
   },
   data(){
    return{
      searchQuery:'',
      userDropdownMenu:false,
    }
   },
   mounted(){
    
   },
   methods:{
    search(){
      if(this.searchQuery){
      document.getElementById('searchQuery').value=this.searchQuery;
      document.getElementById('category').value=this.categoryId;
      document.getElementById('search-form').submit();
      }
    },
    logout(){
      document.getElementById('logout-form').submit(); 
    }
   }
}
</script>