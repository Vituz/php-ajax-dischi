const app = new Vue({

    el: '#app',

    data:{
        albums: null,

        dati:[
            'prova',
            'prova2'
        ]
    },

    mounted(){

        axios.get('./api/albums.php')
        .then(resp =>{
            this.albums = resp.data;
        }).catch(e =>{

        });
    }
})