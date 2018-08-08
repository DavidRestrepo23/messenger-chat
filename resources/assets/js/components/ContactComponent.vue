<template>
    <b-list-group-item :variant="variant">
        <b-row class="p-2" align-h="center">
            <b-col cols="12" md="3" class="text-center">
                <b-img rounded="circle" blank width="80" height="80" blank-color="#777" alt="img" class="m-1 p-0" />
            </b-col>
            <b-col cols="6" class="text-left p-0 m-0 d-none d-md-block" align-self="center">
                <p class="mb-1">{{ conversation.contact_name }}</p>
                <small class="text-muted mb-1">{{ conversation.last_message }}</small>
            </b-col>
            <b-col cols="3" class="p-0 m-0 d-none d-md-block" align-self="center">
                <small class="text-muted">{{ conversation.last_time }}</small>
            </b-col>
        </b-row>
    </b-list-group-item>
</template>

<script>
export default {
  data() {
    return {};
  },
  props: {
    variant: String,
    conversation: Object
  }
};
</script>
