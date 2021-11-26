<template>
    <div>
     <ul>
      <li v-for="active in activeUsers " :key="active.id">
        <p>{{active.name}}</p>
      </li>
     </ul>
    </div>
</template>
<script>
export default {
  data()
   {
   return{
    activeusers:[]  
   }  
  },
  mounted(){
    Eco.join('chat')
   .here(users=>{
     
   })
   .joining(user=>{
    
   })
   .leaving(user=>{
     
   });
  }
}
</script>