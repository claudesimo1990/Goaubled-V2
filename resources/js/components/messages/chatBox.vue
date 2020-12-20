<template>
    <div class="wrap-chat">
        <div class="chat">
            <div class="chat-bubble me">
                <div class="my-mouth"></div>
                <div class="content">Hallo!</div>
                <div class="time">17:30</div>
            </div>
            <div class="chat-bubble you">
                <div class="your-mouth"></div>
                <h4>Mama</h4>
                <div class="content">
                    Hallo! Alles gut bei euch?
                </div>
                <div class="time">17:32</div>
            </div>
        </div>
        <div class="information" v-bind:style="{ display: show }">
            <img
                src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1089577/contact7.JPG"
            />
            <div>
                <h1>Name:</h1>
                <p>Cool Kids</p>
            </div>
            <div id="listGroups">
                <h1>Mitglieder:</h1>
                <div class="listGroups">
                    <img
                        src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1089577/contact4.jpg"
                    />
                    <p>Marina Pühringer</p>
                </div>
                <div class="listGroups">
                    <img
                        src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1089577/contact5.jpg"
                    />
                    <p>Nicole Rammelmüller</p>
                </div>
                <div class="listGroups">
                    <img
                        src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1089577/contact1.jpg"
                    />
                    <p>Linda Gahleitner</p>
                </div>
            </div>
        </div>
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
