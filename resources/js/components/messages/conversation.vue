<template>
    <div class="content">
        <div class="contact-profile">
            <img id="profile-img" :src="selectContact.avatar_original ? selectContact.avatar_original : 'storage/UsersAvatars/'+ selectContact.avatar" class="online" alt="" />
            <p>{{ selectContact.name ? selectContact.name : 'Aucun contact selectionne' }}</p>
            <div class="social-media" v-show="selectContact">
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <i class="fa fa-twitter" aria-hidden="true"></i>
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </div>
        </div>
        <MessagesFeed :contact="contact" :messages="messages"/>
        <MessageComposer @send="sendMessage"/>
    </div>
</template>

<script>
    import MessagesFeed from './MessagesFeed';
    import MessageComposer from './MessageComposer';

    export default {
        props: {
            contact: {
                type: Object,
                default: null
            },
            messages: {
                type: Array,
                default: []
            }
        },
        methods: {
            sendMessage(text) {
                if (!this.contact) {
                    return;
                }
                axios.post('/conversation/send', {
                    contact_id: this.contact.id,
                    text: text
                }).then((response) => {
                    this.$emit('new', response.data);
                })
            }
        },
        computed: {
            selectContact: function() {
            return Store.getters.selectContact;
        }
    },
        components: {MessagesFeed, MessageComposer}
    }
</script>

<style>

</style>
