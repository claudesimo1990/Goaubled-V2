<template>
    <div id="contacts" class="mt-3">
        <ul>
            <li v-for="contact in sortedContacts" :key="contact.id" @click="selectContact(contact)" :class="{ 'active': contact == selected }" class="contact">
                <div class="wrap">
                    <span class="contact-status busy"></span>
                    <span class="contact-status busy"></span>
                    <img v-if="contact.avatar_original" :src="contact.avatar_original" :alt="contact.name">
                    <img v-else :src="'storage/UsersAvatars/'+ contact.avatar" :alt="contact.name">
                    <div class="meta">
                        <p class="name">{{ contact.name }}</p>
                        <p class="preview"><span v-if="contact.unread">{{ contact.unread }}</span></p>
                    </div>
                </div>
            </li>
        </ul>
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
                console.log(contact);
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
