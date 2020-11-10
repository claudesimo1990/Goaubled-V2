<template>
    <div class="contact-list">
        <div class="contact" v-for="contact in sortedContacts" :key="contact.id" @click="selectContact(contact)" :class="{ 'active-contact': contact == selected }">
            <img v-if="contact.avatar_original" :src="contact.avatar_original" :alt="contact.name">
            <img v-else :src="'storage/UsersAvatars/'+ contact.avatar" :alt="contact.name">                        <div class="contact-preview">
                <div class="contact-text">
                    <h1 class="font-name">{{ contact.name }}</h1>
                    <p class="font-preview">
                        Mmh, lecker :) Freu mich!
                    </p>
                </div>
            </div>
            <div class="contact-time"><p>17:54</p></div>
        </div>
    </div>
</template>

<script>
export default {
        props: {
            contacts: {
                type: Array,
                default: []
            }
        },
        data() {
            return {
                selected: this.contacts.length ? this.contacts[0] : null
            };
        },
        methods: {
            selectContact(contact) {
                this.selected = contact;
                Store.dispatch('selectContact', contact);
                this.$emit('selected', contact);
            }
        },
        computed: {
            sortedContacts() {
                return _.sortBy(this.contacts, [(contact) => {
                    if (contact == this.selected) {
                        return Infinity;
                    }
                    return contact.unread;
                }]).reverse();
            }
        }
    }
</script>

<style>

</style>
