const app = new Vue({

    el: '#app',
    data: {

       dischi:[],
       loading:true
      
    },
    created(){

        axios.get('http://localhost/php-ajax-dischi/api.php')
        .then( resp =>{
            console.log(resp);
            this.dischi = resp.data;
            this.loading = false;
        })
        .catch( err => {
            console.log(err);
        })

    }

})