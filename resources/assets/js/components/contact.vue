<template>
    <div class="col-md-6">
        <section id="contact" v-show="! form.busy">

            <h3 class="headline centered margin-bottom-45">Contact Us</h3>
            <div class="alert alert-info" v-show="! form.errors.any()">Please consider using our <a
                    href="/contact/project">expanded
                contact form</a> to provide additional details about your project needs.
            </div>

            <div class="notification error " v-show="form.errors.any()">
                <p><span><strong>Oops, something went wrong.</strong></span></p>
                <ul>
                    <li v-html="form.errors.get('name')"></li>
                    <li v-html="form.errors.get('email')"></li>
                    <li v-html="form.errors.get('subject')"></li>
                    <li v-html="form.errors.get('message')"></li>
                </ul>

            </div> <!-- alert alert-danger -->
            <form id="contactForm" @submit.prevent >

                <div class="row">
                    <div class="col-md-6">
                        <input name="name" type="text" id="name" placeholder="Your Name" v-model="form.name"/>
                    </div>

                    <div class="col-md-6">
                        <input name="email" type="email" id="email" placeholder="Email Address"
                               v-model="form.email"/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <input name="subject" type="text" id="subject" placeholder="Subject" v-model="form.subject"/>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                         <textarea name="comments" cols="40" rows="3" id="comments" placeholder="Message" spellcheck="true"
                                   v-model="form.message"></textarea>
                    </div>
                </div>

                <div class="checkboxes">
                    <input type="checkbox" name="newsletter" id="newsletter" v-model="form.newsletter">
                    <label for="newsletter">Occasionally receive email updates from us </label>
                </div>
                <div class="clearfix">
                    &nbsp;
                </div> <!-- clearfix -->
                <input type="submit" class="submit button border center margin-top-10" @click="submitMessage"
                       value="Send Message"/>
            </form>
        </section>
        <div v-show="form.busy" class="text-center"><i class="fa fa-spin fa-spinner"></i></div>
    </div> <!-- col-md-6 -->
</template>

<script>
    import swal from 'sweetalert2';

    export default {
        data() {
            return {
                form: new Form({
                    name: '',
                    email: '',
                    subject: '',
                    message: '',
                    newsletter: true,
                }),
            }
        },
        methods: {
            submitMessage() {
                this.form.post('/contact').then(data => {
                    swal({
                        title: 'Thank you!',
                        text: 'Your message has been sent.',
                        type: 'success',
                        confirmButtonText: 'Ok'
                    })
                }).catch(errors => {
                });
            }
        }
    }
</script>