import axios from 'axios';

export default {
    data: {
        adresse: null,
        code_postal: null,
        ville: null,
        client: null,
        nom: null,
        prenom: null,
        tel: null,
        email: null,
        poste:null

    },
    props:['title'],
    methods: {
        addUser: function(e) {
            e.preventDefault();
            
            axios.post('/api/clients',{
                adresse: this.adresse,
                code_postal: this.code_postal,
                ville: this.ville,
                nomClient: this.client,
                nom: this.nom,
                prenom: this.prenom,
                tel: this.tel,
                email: this.email,
                poste:this.poste
        
            })
            .then(({ data }) => {

                this.$emit('addClient', data.data);
            });
        }
    }
}