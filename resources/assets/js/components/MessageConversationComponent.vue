<template>
    <div>
        <b-media :right-align="writtenByMe" vertical-align="center" class="mb-2">
            <b-img slot="aside" rounded="circle" blank blank-color="#ccc" width="60" alt="placeholder" />
            <b-card>
               <slot></slot>
            </b-card>
        </b-media>
    </div>
</template>


<script>
export default {
  props: {
    writtenByMe: Boolean
  }
};
</script>

