<template>
    <b-container fluid class="h-100">
        <b-row class="h-100" no-gutters>
            <b-col cols="3">
                <contact-list-component
                    @conversationSelected="changeActiveConversations($event)">
                 </contact-list-component>
            </b-col>
            <b-col cols="8">
                <active-conversation-component
                    v-if="selectedConversation" 
                      :contact-id="selectedConversation.contact_id"
                      :contact-name="selectedConversation.contact_name"
                      :messages="messages"
                   >
                </active-conversation-component>
                <div v-else class="text-center p-5">
                  <h3>Seleccione una conversación</h3>
                  <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore perferendis quia provident et 
                    quis tempore magni, quidem, repellat numquam sequi non dolorem nam ullam vero architecto similique possimus dolorum nihil.
                  </p>
                </div>
            </b-col>
        </b-row>
    </b-container>
</template>
<script>
export default {
  data() {
    return {
      selectedConversation: null,
      messages: []
    };
  },
  props: {
    userId: Number
  },
  methods: {
    changeActiveConversations(conversation) {
      this.selectedConversation = conversation;
      this.getMessages();
    },
    getMessages() {
      axios
        .get(`/api/messages?contact_id=${this.selectedConversation.contact_id}`)
        .then(response => {
          this.messages = response.data;
        });
    }
  },
  mounted() {
    Echo.channel("example").listen("MessageSent", data => {
      const message = data.message;
      message.written_by_me = this.userId == message.from_id;
      this.messages.push(message);
      this.getMessages();
    });
  }
};
</script>
