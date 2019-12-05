import axios from 'axios';
import Formulaire from './Formulaire.vue';

export default {

    components : {
        Formulaire
    },
  data () {
      return {
          clients: [],
          titleForm: "FORMULAIRE",
          headers: [
            { text: 'Nom du client', value: 'client' },
            {
              text: 'Nom du contact',
              value: 'name',
            },
            { text: 'Prenom', value: 'prenom' },
            { text: 'Tel', value: 'tel' },
            { text: 'Email', value: 'email' },
            { text: 'Poste', value: 'poste' },
            { text: 'Adresse', value: 'adresse' },
            { text: 'Code Postal', value: 'code_postal' },
            { text: 'Ville', value: 'ville' },
          ],
      }
  },
  methods: {
      getDatas(){
          this.error = this.users = null;
          this.loading = true;
          this.clients = [];
          this.toto = 'KIKI master';
          axios.get('/api/clients')
              .then(({data}) => {
               // console.log(data)
                  data.data.forEach(_data => {
                      this.clients.push(this.formatClient(_data));
                  })
              })
              .catch(error=> {
                  console.log(error);
              });
      },
      addClient(client) {
          console.log('Data Client');
          console.log(client);
        this.clients.push(this.formatClient(client));
    },
    formatClient(client){
        return {
            client : client.nom_entreprise,

            name:client.contacts[0].nom,
            prenom:client.contacts[0].prenom,
            tel:client.contacts[0].tel,
            email:client.contacts[0].email,
            poste:client.contacts[0].post,

            adresse:client.adresse.adresse,
            code_postal:client.adresse.code_postal,
            ville:client.adresse.villes,
        };
    }
  },

  created(){
      this.getDatas();
  },
}


