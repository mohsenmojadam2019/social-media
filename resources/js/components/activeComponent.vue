<template>
    <div>
     <ul>
      <li v-for="active in actives " :key="active.id">{{active.name}}</li>
     </ul>
    </div>
</template>
<script>
export default {
    data()
    {
      return{
          
      }  
    }
}
</script>