var app = new Vue({
    el: '#app',
    data: {
        albumList: [],
    },
    created() {
        axios.get('http://localhost/php-ajax-dischi/client_side/server.php/')
            .then(response => {
                this.albumList = response.data;
                console.log(this.albumList);
            })
    }
})