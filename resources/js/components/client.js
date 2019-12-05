import axios from 'axios';
import Formulaire from './Formulaire.vue';

export default {

    components: {
        Formulaire
    },
    data() {
        return {

            headers: [
                
                {text:'nomClient', value:'nomClient'},
                {text:'adresse', value:'adresse'},
                {text:'code_postal', value:'code_postal'},
                {text:'ville', value:'ville'},
                {text:'nom', value:'nom'},
                {text:'prenom', value:'prenom'},
                {text:'nom', value:'nom'},
                {text:'tel', value:'tel'},
                {text:'email', value:'email'},
                {text:'poste', value:'poste'}
                
            ],
            clients: [],
            formTitle: 'Client Formulaire Mother f****r'

        }
    },
    methods: {
        getDatas() {
            this.error = this.users = null;
            this.loading = true;
            this.clients = [];
            this.toto = 'tata';
            axios.get('/api/clients/')
                .then(({ data }) => {
                    console.log(data.data);
                    data.data.forEach(_data => {
                        this.clients.push(this.formData(_data));
                    })
                })
                .catch(error => {
                    console.log(error);
                });
        },
        addClient(client) {
            console.log(client);
            this.clients.push(this.formData(client));
        },
        formData(data) {
            console.log(data.contacts);
            return {
                        nomClient: data.nomClient,
                        adresse: data.adresse.adresse,
                        code_postal: data.adresse.code_postal,
                        ville: data.adresse.ville,
                        nom: data.contacts[0].nom,
                        prenom: data.contacts[0].prenom,
                        tel: data.contacts[0].tel,
                        email: data.contacts[0].email,
                        poste: data.contacts[0].poste
            }
        },
    },


    created() {
        this.getDatas();
    },





};