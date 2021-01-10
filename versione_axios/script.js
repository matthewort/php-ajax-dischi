// function getData() {
//   axios.get("data.php").then((res) => {
//     var data = res.data;
//     console.log(data[0].title);
//   });
// }

function init() {
  var app = new Vue({
    el: "#app",
    data: {
      database: [], //variabile globale
    },
    methods: {
      update() {
        axios.get("data.php").then((risposta) => {
          //   this.database = risposta.data;
          var database = risposta.data; //abbiamo messo i data di axios in una variabile locale, è un'altra variabile rispetto al database nel data
          this.database = []; //svuoto il database, perché?
          for (var x = 0; x < database.length; x++) {
            var albums = database[x];
            this.database.push(albums);
          }
        });
      },
    },
    mounted: function () {
      //   axios.get("data.php").then((risposta) => {
      //     this.database = risposta.data;
      //     console.log(this.database);
      //   });
      this.update();
    },
  });
}
init();
