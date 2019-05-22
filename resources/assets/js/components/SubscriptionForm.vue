<script>
    export default {
        name: "SubscriptionForm",
        data() {
            return {
                form: new Form({
                    email: '',
                    name: '',
                }),
            }
        },
        methods: {
            submitForm() {
                this.form.post('/subscribe')
                    .then(() => {
                        //
                    })
                    .catch(errors => {
                        //
                    });
            }
        }
    }
</script>