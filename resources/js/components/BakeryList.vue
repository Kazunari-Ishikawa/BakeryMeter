<template>
  <div class="c-workList">
    <div class="c-workList__header">
      <h2 class="c-workList__title">一覧</h2>
      <p class="c-workList__info">
        {{ totalNum }}件中
        <span>{{ fromNum }}</span> -
        <span>{{ toNum }}</span>件表示
      </p>
    </div>
    <v-btn @click="search">検索</v-btn>
  </div>
</template>

<script>
export default {
  data() {
    return {
      isLoding: false,
      bakery: [],
      hitPerPage: null,
      totalHitCount: null,
      pageNum: 1,
      currentPage: 0,
      lastPage: 0,
      fromNum: 0,
      toNum: 0,
    };
  },
  created() {
    this.search();
  },
  methods: {
    // Bakeryを検索する
    async search() {
      this.isLoading = true;
      const response = await axios.get("/bakery_request").catch((error) => {
        return error.response;
      });
      console.log(response);
      if (response.status !== 200) {
        alert("エラーが発生しました。再度やり直してください。");
        return false;
      }
      if (response.status === 200) {
        this.bakery = response.data.rest;
        this.hitPerPage = response.data.hit_per_page;
        this.totalHitCount = response.data.total_hit_count;
      }
      this.isLoading = false;
    },
    // ページを遷移する
    movePage(page) {
      this.pageNum = page;
      this.searchWorks();
    },
    // Bookmarkへの追加または削除を判定する
    clickBookmark({ id, bookmarked }) {
      if (bookmarked) {
        this.deleteBookmark(id);
      } else {
        this.addBookmark(id);
      }
    },
    // Bookmarkへ追加する
    async addBookmark(id) {
      const response = await axios
        .post(`/api/bookmarks/${id}/add`)
        .catch((error) => {
          return error.response;
        });
      if (response.status === 401) {
        alert("気になる機能を使うにはログインしてください。");
        return false;
      }
      if (response.status === 403) {
        alert("自分が登録した案件には気になる機能は使えません。");
        return false;
      }
      if (response.status === 200) {
        this.works = this.works.map((work) => {
          if (work.id === response.data) {
            work.bookmarked = true;
          }
          return work;
        });
      }
    },
    // Bookmarkから削除する
    async deleteBookmark(id) {
      const response = await axios
        .post(`/api/bookmarks/${id}/delete`)
        .catch((error) => {
          return error.response;
        });
      if (response.status === 401) {
        alert("気になる機能を使うにはログインしてください。");
        return false;
      }
      if (response.status === 200) {
        this.works = this.works.map((work) => {
          if (work.id === response.data) {
            work.bookmarked = false;
          }
          return work;
        });
      }
    },
  },
};
</script>