<script>
    import swal from 'sweetalert2';

    export default {
        data() {
            return {
                form: new Form({
                    name: '',
                    email: '',
                    message: '',
                }),
            }
        },
        methods: {
            send() {
                this.form.post('/contact').then(() => {
                    swal({
                        type: 'success',
                        title: 'Thank You',
                        text: 'Your message has been sent.'
                    })

                }).catch(() => {
                });
            }
        }
    }
</script>