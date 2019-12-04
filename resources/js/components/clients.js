import axios from 'axios';

export default {
  data () {
      return {
          clients: []
      }
  },
  methods: {
      getDatas(){
          this.clients = [];

          this.toto = 'KIKI master';
          axios.get('/api/clients')
              .then(({data}) => {
                console.log(data)
                  data.data.forEach(_data => {
                      this.clients.push(_data);
                  })
              })
              .catch(error=> {
                  console.log(error);
              });
      }
  },
  created(){
      this.getDatas();
  },
}
