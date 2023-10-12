const { createApp } = Vue
createApp({
  data() {
    return {
      todos: null,
      currentDisk: '',
      modalAlbum: {
        "title": "",
        "author": "",
        "year": "",
        "poster": "",
        "genre": ""
    },
    }
  },
  methods: {
    /**
     * al click della card assegno i dati della card alla modale 
     * @param {*} cardInfo dati della card cliccata
     */
    selectedCard(cardInfo) {
      
      this.modalAlbum = cardInfo
      console.log(this.modalAlbum);
    }
  },

  mounted() {

    axios

    //faccio la chiamata al server con get

      .get('server.php')

      //ottengo il mio array creato in json e lo pusho in una variabile

      .then(response => {
        console.log(response);
        this.todos = response.data
        console.log(response.data);
      })
  }
}).mount('#app')