<template>
    <div>
        <div class="banner bg-blue-darker text-center xs:px-2 xs:py-2 lg:py-12">
            <h1 class="text-white text-5xl mt-6 mb-1 font-light">Contact Us</h1>
        </div>

        <section class="py-8 px-2">
            <div class="container mx-auto">
                <div class="text-center">
                    <div class="p-2 bg-indigo-darker items-center text-indigo-lightest leading-none lg:rounded-full flex lg:inline-flex"
                         role="alert">
                        <span class="flex rounded-full bg-indigo uppercase px-2 py-1 text-xs font-bold mr-3">New</span>
                        <span class="font-semibold mr-2 text-left flex-auto">If you would like a quote for specific design/development work, fill out our <router-link to="/quote" class="text-white">quote form</router-link></span>
                        <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/>
                        </svg>
                    </div>
                </div>



                <form @submit.prevent>
                    <label for="name" class="block text-grey-darker text-sm font-bold mb-1">Your Name</label>
                    <input name="name" type="text" id="name"
                           class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight"
                           :class="form.errors.has('name') ? 'border-red' : ''" placeholder="Your Name"
                           v-model="form.name"/>
                    <div class="font-xs italic text-red mt-2" v-show="form.errors.has('name')">
                        {{form.errors.get('name')}}
                    </div>
                    <label for="email" class="block text-grey-darker text-sm font-bold mb-1 mt-4">Your Email</label>
                    <input name="email" type="text" id="email"
                           class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight"
                           :class="form.errors.has('email') ? 'border-red' : ''" placeholder="Your Email"
                           v-model="form.email"/>
                    <div class="font-xs italic text-red mt-2" v-show="form.errors.has('email')">
                        {{form.errors.get('email')}}
                    </div>

                    <label for="message" class="block text-grey-darker text-sm font-bold mb-1 mt-4">Message</label>
                    <textarea name="message" id="message" rows="5"
                              class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight"
                              :class="form.errors.has('message') ? 'border-red' : ''" placeholder=""
                              v-model="form.message"/>
                    <div class="font-xs italic text-red mt-2" v-show="form.errors.has('message')">
                        {{form.errors.get('message')}}
                    </div>

                    <button @click="submitMessage"
                            class="mt-8 rounded-full border border-blue-darker text-blue-darker px-4 py-3 hover:bg-blue-darker hover:text-white">
                        Send Message
                    </button>
                </form>
            </div>
        </section>

        <section>
            <iframe frameborder="0" class="w-full border-t" src="https://www.google.com/maps/embed/v1/place?q=Greencastle%20PA&key=AIzaSyDMdkeuPSK3DbuZvCTK4W6WBnPnho_K54k" allowfullscreen></iframe> </section>
    </div>
</template>

<script>
    import swal from 'sweetalert2';

    export default {
        data() {
            return {
                form: new Form({
                    name: '',
                    email: '',
                    message: '',
                    newsletter: true,
                }),
            }
        },
        methods: {
            submitMessage() {
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