new Vue({
  el:'#root',
  data: {
    listAlbum:[],
    userGenre:''
  },
  // mounted() {
  //   const self = this;
  //   axios.get("http://localhost/php-ajax-dischi/app/server.php")
  //   .then(function(response) {
  //     self.listAlbum = response.data;
  //   });
  // },
  method:{
    search:function(){
      const self = this;
      axios.get("http://localhost/php-ajax-dischi/app/server.php?genre" + self.userGenre)
      .then(function(response) {
        self.listAlbum = response.data;
      });
    }
  },
})
Vue.config.devtools = true
