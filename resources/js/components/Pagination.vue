<template>
  <v-col>
    <v-pagination v-model="page" :length="totalPage" :total-visible="7" @input="movePage"></v-pagination>
  </v-col>
</template>

<script>
export default {
  props: {
    totalPage: Number,
  },
  data() {
    return {
      page: 1,
    };
  },
  methods: {
    movePage(page) {
      if (page !== this.currentPage) {
        this.$emit("move-page", page);
      }
    },
  },
};
</script>