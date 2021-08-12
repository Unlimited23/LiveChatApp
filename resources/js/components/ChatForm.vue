<template>
    <div class="input-group">
        <input
            type="text"
            id="chat-form-input"
            name="chat-form-input"
            class="form-control input-sm"
            placeholder="Type your message here..."
            v-model="newMessage"
            @keyup.enter="sendMessage"
        >

        <span>
            <button
                class="btn btn-primary btn-sm"
                id="chat-form-btn"
                @click="sendMessage"
            >
                Send
            </button>
        </span>
    </div>
</template>

<script>
    export default {
        props: ['user'],
        data() {
            return {
                newMessage: ''
            };
        },
        methods: {
            sendMessage() {
                this.$emit('messagesent', {
                    user: this.user,
                    message: this.newMessage,
                });

                this.newMessage = '';
            }
        }
    }
</script>
