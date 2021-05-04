<template>
    <input type="text" v-model="message" @click="send" @keyup.enter="send"
    class="w-full text-xl p-1 h-10">
</template>
<script>
export default {
    data(){
        return{
            message:'',
            chat:{
                message:''
            }
        }
    },
    methods:{
        send()
        {
          this.chat.message.push(this.message);
          this.message=''
        }
    }
}
</script>