<template >
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
                   >
                </active-conversation-component>
            </b-col>
        </b-row>
    </b-container>
</template>


<script>
export default {
  data() {
    return {
      selectedConversation: null,
      contactId: null
    };
  },
  methods: {
    changeActiveConversations(conversation) {
      this.selectedConversation = conversation;
    }
  }
};
</script>
