let app = new Vue({
  el: '#root',
  data: {
    postcards:[]
  },
  created() {

    axios.get('http://localhost:8000/api/postcards').then((response) => {
        this.postcards = response.data.data;
    })
  }
});
