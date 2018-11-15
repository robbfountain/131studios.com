<template>
    <div class="bg-white">
        <form @submit.prevent class="border shadow-lg p-4">
            <label for="name" class="block text-grey-darker text-sm font-bold mb-1">Your Name</label>
            <input name="name" type="text" id="name"
                   class="border rounded w-full py-3 px-4 text-grey-darker leading-tight"
                   :class="{'border-red' : form.errors.has('name')}" placeholder="Your Name"
                   v-model="form.name" required/>
            <div class="font-xs italic text-red mt-2" v-show="form.errors.has('name')">
                {{form.errors.get('name')}}
            </div>

            <label for="email" class="block text-grey-darker text-sm font-bold mb-1 mt-4">Your Email</label>
            <input name="email" type="text" id="email"
                   class="border rounded w-full py-3 px-4 text-grey-darker leading-tight"
                   :class="{'border-red' : form.errors.has('email')}" placeholder="Your Email"
                   v-model="form.email" required/>
            <div class="font-xs italic text-red mt-2" v-show="form.errors.has('email')">
                {{form.errors.get('email')}}
            </div>

            <label for="message" class="block text-grey-darker text-sm font-bold mb-1 mt-4">Message</label>
            <textarea name="message" id="message" rows="5"
                      class="border rounded w-full py-3 px-4 text-grey-darker leading-tight"
                      :class="{'border-red' : form.errors.has('message')}" placeholder="Your Message"
                      v-model="form.message" required></textarea>
            <div class="font-xs italic text-red mt-2" v-show="form.errors.has('message')">
                {{form.errors.get('message')}}
            </div>

            <button type="submit" @click="send"
                    class="mt-8 rounded-full border border-blue-darker text-blue-darker px-4 py-3 hover:bg-blue-darker hover:text-white">
               <span v-if="form.busy">
                   <fa :icon="['fal','spinner']" spin ></fa>
               </span>
                <span v-else>
                     Send Message
                </span>

            </button>
        </form>

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