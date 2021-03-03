new Vue({
  el:'#root',
  data: {
    listAlbum:[],
  },
  mounted() {
    const self = this;
    axios.get("http://localhost/php-ajax-dischi/app/server.php")
    .then(function(response) {
      self.listAlbum = response.data;
    });
  },
  methods:{

  }
});
Vue.config.devtools = true
