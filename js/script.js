const app = new Vue({

    el: '#app',
    data: {

       dischi:[],
       generi:[],
       loading:true,
       ricercaGenere:"all",
       apiUrl: 'http://localhost/php-ajax-dischi/api.php'
      
    },
    methods:{
        callApi(){
            axios.get(this.apiUrl,{
                params:{
                    genre:this.ricercaGenere
                }
            })
            .then( resp =>{
                console.log(resp);
                this.dischi = resp.data.albums;
                this.generi = resp.data.genres;
                this.loading = false;
            })
            .catch( err => {
                console.log(err);
            })

        }
    },
    created(){

        this.callApi();
        
    }

})