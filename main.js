const { createApp } = Vue
createApp({
  data() {
    return {
      title: 'Hello Vue',
      todos: null,
      newTask: '',
      error: ''
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
      })
  }
}).mount('#app')