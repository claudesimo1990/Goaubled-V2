<template>
    <div class="composer">
        <textarea v-model="message" @keydown.enter="send" placeholder="Message..."></textarea>
    </div>
</template>

<script>
export default {
        data() {
            return {
                message: ''
            };
        },
        methods: {
            send(e) {
                e.preventDefault();
                
                if (this.message == '') {
                    return;
                }
                this.$emit('send', this.message);
                this.message = '';
            }
        },
        selectContact: function() {
            return Store.getters.selectContact;
        }
    }
</script>

<style>
.composer textarea {
    width: 100%;
    margin: 0px;
    resize: none;
    padding: 12px;
    position: absolute;
    bottom: 0;
}
</style>
