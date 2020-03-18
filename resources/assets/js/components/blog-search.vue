<script>
    import algoliasearch from 'algoliasearch/lite';

    export default {
        data() {
            return {
                searchClient: algoliasearch(
                    '901ZHOUNDC',
                    '9a331b27a265d10d2a8c1e14af77fc9c'
                ),
            };
        },

        methods: {
            dt(date){
                return moment(data).format('MMM Do YYYY');
            }
        }
    }
</script>
