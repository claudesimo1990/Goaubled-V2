<template>
    <div class="messages" ref="feed">
            <ul>
                <li v-for="message in messages" :class="`message${message.to == contact.id ? ' sent' : ' replies'}`" :key="message.id">
                    <img :src="message.to !== contact.id ? contact.avatar_original ? contact.avatar_original : 'storage/UsersAvatars/'+ contact.avatar : authUser.avatar_original ? authUser.avatar_original : 'storage/UsersAvatars/'+ authUser.avatar" :alt="message.to !== contact.id ? contact.name : authUser.name" />
                    <p>{{ message.text }}</p>
                </li>
            </ul>
        </div>
</template>

<script>
    export default {
        props: {
            contact: {
                type: Object
            },
            messages: {
                type: Array,
                required: true
            }
        },
        methods: {
            scrollToBottom() {
                setTimeout(() => {
                    this.$refs.feed.scrollTop = this.$refs.feed.scrollHeight - this.$refs.feed.clientHeight;
                }, 50);
            }
        },
        computed: {

            getMessages: function() {
                return Store.getters.messages;
            },
            getContact: function() {
                return Store.getters.contact;
            },
            selectContact: function() {
            return Store.getters.selectContact;
            },
            authUser: function() {
                return Store.getters.authUser;
            }

        },
        watch: {
            contact(contact) {
                this.scrollToBottom();
            },
            messages(messages) {
                this.scrollToBottom();
            }
        }
    }
</script>

<style>

</style>
