<template>
    <b-row class="h-100">
        <b-col cols="8" class="h-100">
            <b-card 
                    footer-bg-variant="default"
                    footer-border-variant="dark"
                    title="Conversación Activa "
                    class="h-100">

                    <message-conversation-component 
                       v-for="(message) in messages" 
                        :key="message.id" 
                        :written-by-me="message.written_by_me"
                       > 
                       {{ message.content }}
                    </message-conversation-component>
                    
                <div slot="footer">
                    <b-form class="mb-0" inline @submit.prevent="sendMessages()" autocomplete="off">
                        <b-input-group style="width:100%">
                            <b-form-input class="text-center" v-model="newMessage"  type="text" placeholder="Escribe un mensaje..."></b-form-input>
                            <b-input-group-append>
                                <b-button type="submit" variant="primary">Enviar</b-button>
                            </b-input-group-append>
                        </b-input-group>
                    </b-form>
                </div>
            </b-card>
        </b-col>
        <b-col cols="4">
            <b-img rounded="circle" blank width="80" height="80" blank-color="#777" alt="img" class="m-1 p-0" />
            <p>{{ contactName }} </p>
            <hr>
            <b-form-checkbox>
                Desactivar notificaciones
            </b-form-checkbox>
        </b-col>
    </b-row>
</template>

<script>
export default {
  data() {
    return {
      newMessage: ""
    };
  },
  props: {
    contactId: Number,
    contactName: String,
    messages: Array
  },

  methods: {
    sendMessages() {
      axios
        .post("/api/messages", {
          to_id: this.contactId,
          content: this.newMessage
        })
        .then(response => {
          this.newMessage = "";
        });
    }
  }
};
</script>

