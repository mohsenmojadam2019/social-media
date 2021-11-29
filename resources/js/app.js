/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('navigation-component', require('./components/navigation.vue').default);
Vue.component('notification-component', require('./components/notification.vue').default);
//Vue.component('search-component', require('./components/search.vue').default);

Vue.component('active-component', require('./components/chat/active.vue').default);
Vue.component('chat-component', require('./components/chat/chat.vue').default);
Vue.component('friends-component', require('./components/chat/friends.vue').default);
Vue.component('messages-component', require('./components/chat/messages.vue').default);

// Vue.component('addfriend-component', require('./components/friend/addFriend.vue').default);
// Vue.component('cancelfriend-component', require('./components/friend/cancelFriend.vue').default);
// Vue.component('removerequest-component', require('./components/friend/removeRequest.vue').default);
// Vue.component('sendrequest-component', require('./components/sendRequest.vue').default);

// Vue.component('joingroup-component', require('./components/group/joinGroup.vue').default);
// Vue.component('leavegroup-component', require('./components/roup/leaveGroup.vue').default);

// Vue.component('joinchannel-component', require('./components/channel/joinChannel.vue').default);
// Vue.component('leavechannel-component', require('./components/channel/leaveChannel.vue').default);

// Vue.component('comment-component', require('./components/post/comment.vue').default);
// Vue.component('like-component', require('./components/comment/like.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
