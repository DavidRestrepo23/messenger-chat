<template>
    <div>
        <b-form class="my-3 mx-2">
            <b-form-input id="exampleInput1" class="py-3 px-2"
                    type="text"
                    required
                    placeholder="Buscar contacto...">
            </b-form-input>
        </b-form>
        <b-list-group >
            <contact-component 
              class="contact" 
              v-for="conversation in conversations" 
              :key="conversation.id" 
              :conversation="conversation"
              @click.native="selectConversation(conversation)"
            >
           </contact-component>
        </b-list-group>
    </div>
</template>

<script>
export default {
  data() {
    return {
      conversations: []
    };
  },
  mounted() {
    this.getConversations();
  },
  methods: {
    getConversations() {
      axios.get("/api/conversations").then(response => {
        this.conversations = response.data;
      });
    },
    selectConversation(conversation) {
      this.$emit("conversationSelected", conversation);
    }
  }
};
</script>


<style>
.contact {
  cursor: pointer;
}

.contact:hover {
  background-color: #cccccc;
}
</style>
