import axios from 'axios';
import Formulaire from './Formulaire.vue';

export default {

components: {
Formulaire
},
    data() {
        return {
            clients: [],
            formTitle:'Client Formulaire Mother f****r'
            
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
                    console.log(data);
                    this.clients = data.data;
                    // data.data.forEach(_data => {
                    //     this.clients.push(_data);
                    // })
                })
                .catch(error => {
                    console.log(error);
                });
        },
        addClient(client) {
            console.log(client);
            this.clients.push(client);
        }
    },
    created() {
        this.getDatas();
    },



};