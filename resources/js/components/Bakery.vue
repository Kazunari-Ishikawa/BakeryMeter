<template>
  <v-col cols="12" sm="6" md="4">
    <v-card min-height="380px">
      <v-img height="180px" :src="bakery.image_url.shop_image1"></v-img>
      <v-card-title class="text-subtitle-1">{{ bakery.name }}</v-card-title>
      <v-card-text
        class="pb-2"
      >{{ bakery.access.line }} {{bakery.access.station}} 徒歩{{bakery.access.walk}}分</v-card-text>
      <v-spacer></v-spacer>
      <v-card-actions>
        <v-btn text color="deep-purple accent-4">More</v-btn>
      </v-card-actions>
    </v-card>
  </v-col>
</template>

<script>
export default {
  props: {
    bakery: Object,
  },
};
</script>
