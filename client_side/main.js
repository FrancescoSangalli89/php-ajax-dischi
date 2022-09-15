var app = new Vue({
    el: '#app',
    data: {
        albumList: [],
        endpoint: 'http://localhost/php-ajax-dischi/client_side/server.php/',
    },
    created() {
        axios.get(this.endpoint)
            .then(response => {
                this.albumList = response.data;
                console.log(this.albumList);
            })
    }
})