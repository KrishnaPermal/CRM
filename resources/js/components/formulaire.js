import axios from 'axios';

export default {

//ici ont exporte les données
    data() {
        return {
        nom: null,
        prenom: null,
        tel: null,
        email: null,
        poste: null,
        adresse: null,
        code_postal: null,
        villes: null,
        nom_entreprise: null
        }
    },
    props: ["title"],
    methods: {
        addClient: function(e) {
            e.preventDefault();
            axios.post('/api/clients', {
                nom: this.nom,
                prenom: this.prenom,
                tel: this.tel,
                email: this.email,
                poste: this.poste,
                adresse: this.adresse,
                code_postal: this.code_postal,
                villes: this.villes,
                nom_entreprise: this.nom_entreprise
            })
            .then(({data}) => {
                console.log('reception data');
                this.$emit('addClientAlert', data.data);
            })
            .catch(error=> {
                console.log(error);
            });
        }

    },
    
}