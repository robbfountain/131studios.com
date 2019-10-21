`
<template>
    <div>
        <section class="px-6 py-8">
            <div class="container mx-auto">
                <div class="border-l-4 border-blue text-blue-darker bg-blue-lightest p-3">
                    <h2 class="font-md font-semibold tracking-tight mb-1">Get a Quote</h2>
                    <p class="font-sm">We would love the opportunity to work with you. Please fill out the form below being sure to
                        provide as much information as possible. We will get back to you soon with a quote for our
                        services.</p>
                </div>
                <form id="contactForm" @submit.prevent>
                    <div class="flex flex-col flex-wrap">
                        <div class="mr-3 my-3">
                            <label class="mt-4 text-xs uppercase font-bold"
                                   :class="form.errors.has('name') ? 'text-red' : 'text-gray-600er'" for="name">Your
                                Name</label>
                            <input class="appearance-none block w-full bg-gray-300er text-gray-600er border rounded py-3 px-4 leading-tight hover:border-blue-darkest"
                                   :class="form.errors.has('name') ? 'border-red' : 'border-gray-500'"
                                   name="name" type="text" id="name" placeholder="Your Name" v-model="form.name"/>
                            <span class="text-xs text-red italic font-semibold" v-show="form.errors.has('name')">
                                {{form.errors.get('name')}}
                            </span>
                        </div>

                        <div class="mr-3 my-3">
                            <label class="mt-4 text-xs uppercase font-bold"
                                   :class="form.errors.has('email') ? 'text-red' : 'text-gray-600er'" for="email">Your
                                Email</label>
                            <input class="appearance-none block w-full bg-gray-300er text-gray-600er border rounded py-3 px-4 leading-tight hover:border-blue-darkest"
                                   :class="form.errors.has('email') ? 'border-red' : 'border-gray-500'"
                                   name="email" type="email" id="email" placeholder="Email Address"
                                   v-model="form.email"/>
                            <span class="text-xs text-red italic font-semibold" v-show="form.errors.has('email')">
                                {{form.errors.get('email')}}
                            </span>
                        </div>

                        <div class="mr-3 my-3">
                            <label class="mt-4 text-xs uppercase font-bold"
                                   :class="form.errors.has('phone') ? 'text-red' : 'text-gray-600er'" for="phone">Phone
                                Number</label>
                            <masked-input mask="(111) 111-1111"
                                          class="appearance-none block w-full bg-gray-300er text-gray-600er border rounded py-3 px-4 leading-tight hover:border-blue-darkest"
                                          :class="form.errors.has('phone') ? 'border-red' : 'border-gray-500'"
                                          name="phone" type="text" id="phone" placeholder="Phone Number"
                                          v-model="form.phone"/>
                            <span class="text-xs text-red italic font-semibold" v-show="form.errors.has('phone')">
                                {{form.errors.get('phone')}}
                            </span>
                        </div>

                        <div class="mr-3 my-3">
                            <label class="mt-4 text-xs text-gray-600er uppercase font-bold"
                                   for="company">Company</label>
                            <input class="appearance-none block w-full bg-gray-300er text-gray-600er border border-gray-500 rounded py-3 px-4 leading-tight hover:border-blue-darkest"
                                   name="company" type="text" id="company" placeholder="Company Name"
                                   v-model="form.company"/>
                        </div>

                        <div class="mr-3 my-3">
                            <label class="mt-4 text-xs text-gray-600er uppercase font-bold" for="website">Your
                                Website</label>
                            <input class="appearance-none block w-full bg-gray-300er text-gray-600er border border-gray-500 rounded py-3 px-4 leading-tight hover:border-blue-darkest"
                                   name="website" type="text" id="website" placeholder="Your Website"
                                   v-model="form.website"/>
                        </div>

                        <div class="mr-3 my-3 inline-block relative">
                            <label class="mt-4 text-xs text-gray-600er uppercase font-bold"
                                   :class="form.errors.has('contact_method') ? 'text-red' : 'text-gray-600er'"
                                   for="contact_method">Best Contact Method</label>
                            <select class="block appearance-none w-full bg-gray-300er border border-gray-500 hover:border-gray-500 px-4 py-3 pr-8 rounded shadow leading-tight hover:border-blue-darkest"
                                    :class="form.errors.has('contact_method') ? 'border-red' : 'border-gray-500'"
                                    name="contact_method" v-model="form.contact_method">
                                <option value=''>Best Contact Method</option>
                                <option value='email'>Email</option>
                                <option value='phone'>Phone</option>
                            </select>
                            <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-gray-600er">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                </svg>
                            </div>
                        </div>
                        <span class="text-xs text-red italic font-semibold" v-show="form.errors.has('contact_method')">
                                {{form.errors.get('contact_method')}}
                            </span>

                        <!--<div class="mr-3 my-3">-->
                        <!--<label class="mt-4 text-xs text-gray-600er uppercase font-bold" for="project_type">Project Type</label>-->
                        <!--<select class="block appearance-none w-full bg-gray-300er border border-gray-500 hover:border-gray-500 px-4 py-3 pr-8 rounded shadow leading-tight hover:border-blue-darkest"-->
                        <!--name="type" v-model="form.project_type">-->
                        <!--<option value="">Select Project Type</option>-->
                        <!--<option value="web development">Web Development</option>-->
                        <!--<option value="consulting">IT Consulting</option>-->
                        <!--</select>-->
                        <!--</div>-->

                        <div class="mr-3 my-3 inline-block relative">
                            <label class="mt-4 text-xs uppercase font-bold"
                                   :class="form.errors.has('project_timeframe') ? 'text-red' : 'text-gray-600er'"
                                   for="timeframe">Time Frame</label>
                            <select class="block appearance-none w-full bg-gray-300er border hover:border-gray-500 px-4 py-3 pr-8 rounded shadow leading-tight hover:border-blue-darkest"
                                    :class="form.errors.has('project_timeframe') ? 'border-red' : 'border-gray-500'"
                                    name="timeframe" v-model="form.project_timeframe">
                                <option value="">Select Project Timeframe</option>
                                <option value="immediately">Immediately</option>
                                <option value="3 to 6 months">3 to 6 Months</option>
                                <option value="> 6 months">More than 6 Months</option>
                            </select>
                            <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-gray-600er">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                </svg>
                            </div>
                        </div>
                        <span class="text-xs text-red italic font-semibold"
                              v-show="form.errors.has('project_timeframe')">
                                {{form.errors.get('project_timeframe')}}
                            </span>

                        <div class="mr-3 my-3 inline-block relative">
                            <label class="mt-4 text-xs uppercase font-bold"
                                   :class="form.errors.has('project_timeframe') ? 'text-red' : 'text-gray-600er'"
                                   for="budget">Your Budget</label>
                            <select class="block appearance-none w-full bg-gray-300er border hover:border-gray-500 px-4 py-3 pr-8 rounded shadow leading-tight hover:border-blue-darkest"
                                    :class="form.errors.has('project_timeframe') ? 'border-red' : 'border-gray-500'"
                                    name="budget" v-model="form.project_budget">
                                <option value="">Project Budget</option>
                                <option value="< 1000">Under $1000.00 USD</option>
                                <option value="1000 to 2000">$1000.00 to $2000.00 USD</option>
                                <option value="> 2000">Over $2000.00 USD</option>
                            </select>
                            <div class="pointer-events-none absolute pin-y pin-r flex items-center px-2 text-gray-600er">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                </svg>
                            </div>
                        </div>
                        <span class="text-xs text-red italic font-semibold" v-show="form.errors.has('project_budget')">
                                {{form.errors.get('project_budget')}}
                            </span>


                        <label class="mt-4 text-xs text-gray-600er uppercase font-bold"
                               :class="form.errors.has('project_description') ? 'text-red' : 'text-gray-600er'"
                               for="description">Project Description</label>
                        <textarea
                                class="appearance-none block w-full bg-gray-300er text-gray-600er border rounded py-3 px-4 leading-tight hover:border-blue-darkest"
                                name="description" cols="40" rows="3" id="description"
                                :class="form.errors.has('project_description') ? 'border-red' : 'border-gray-500'"
                                placeholder="Project Description" spellcheck="true"
                                v-model="form.project_description"></textarea>
                        <span class="text-xs text-red italic font-semibold"
                              v-show="form.errors.has('project_description')">
                                {{form.errors.get('project_description')}}
                            </span>


                        <label class="mt-4 text-xs text-gray-600er uppercase font-bold" for="clones">Websites you
                            Like</label>
                        <textarea
                                class="appearance-none block w-full bg-gray-300er text-gray-600er border border-gray-500 rounded py-3 px-4 leading-tight hover:border-blue-darkest"
                                name="clones" cols="40" rows="3" id="clones"
                                placeholder="Please list a few other websites that you like which would help us determine an overall design for your site"
                                v-model="form.clones"
                        ></textarea>


                        <label class="mt-4 text-xs text-gray-600er uppercase font-bold" for="likes">What do you like
                            about your current website?</label>
                        <textarea
                                class="appearance-none block w-full bg-gray-300er text-gray-600er border border-gray-500 rounded py-3 px-4 leading-tight hover:border-blue-darkest"
                                name="likes" cols="40" rows="3" id="like"
                                placeholder="Please list any aspects of your current website you would like to keep (if applicable)"
                                v-model="form.likes"></textarea>


                        <label class="mt-4 text-xs text-gray-600er uppercase font-bold" for="dontlike">What do you NOT
                            like about your current website?</label>
                        <textarea
                                class="appearance-none block w-full bg-gray-300er text-gray-600er border border-gray-500 rounded py-3 px-4 leading-tight hover:border-blue-darkest"
                                name="dontlike" cols="40" rows="3" id="dontlike"
                                placeholder="Please list any aspects of your current website you do not like (if applicable)"
                                v-model="form.dont_like"></textarea>


                        <h4 class="my-4 text-xs text-gray-600er uppercase font-bold">Select all that apply from the
                            list below:</h4>

                        <label for="redesign" class="block text-gray-600er font-sm tracking-tight mb-2">
                            <input type="checkbox" class="mr-2 leading-tight hover:border-blue-darkest" name="redesign"
                                   id="redesign"
                                   v-model="form.redesign">
                            Interested in website redesign
                        </label>

                        <label for="components" class="block text-gray-600er font-sm tracking-tight mb-2">
                            <input type="checkbox" class="mr-2 leading-tight hover:border-blue-darkest"
                                   name="components" id="components"
                                   v-model="form.components">
                            Interested in custom components (Ex: Blog, Shopping Cart, Admin Panel, User
                            Accounts)
                        </label>


                        <label for="hosting" class="block text-gray-600er font-sm tracking-tight ">
                            <input type="checkbox" class="mr-2 leading-tight hover:border-blue-darkest" name="hosting"
                                   id="hosting"
                                   v-model="form.host">
                            Interested in having us host and manage your
                            website?
                        </label>

                        <div class="my-6">
                            <button v-if="! form.busy" type="submit"
                                    class="rounded-full border border-gray-500 px-4 py-2 hover:bg-blue-darkest hover:border-transparent hover:text-white"
                                    :disabled="form.busy" @click="submitForm()">
                                <span v-if="form.busy"><fa icon="spinner" spin></fa></span>
                                <span v-else>Submit</span>
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </section>
    </div>
</template>

<script>
    import swal from 'sweetalert2';
    import MaskedInput from 'vue-masked-input';

    export default {
        components: {MaskedInput},
        data() {
            return {
                form: new Form({
                    name: '',
                    email: '',
                    phone: '',
                    website: '',
                    company: '',
                    contact_method: '',
                    project_type: '',
                    project_timeframe: '',
                    project_budget: '',
                    project_description: '',
                    clones: '',
                    ownership: '',
                    workstations: '',
                    servers: '',
                    server_os: '',
                    likes: '',
                    dont_like: '',
                    host: '',
                    redesign: '',
                    components: '',
                    newsletter: true,
                }),
            }
        },

        methods: {
            submitForm() {
                this.form.post('/quote').then(data => {
                    swal({
                        type: 'success',
                        title: 'Thank you',
                        text: 'Thank you for contacting us.  We will get back to you shortly.'
                    });
                }).catch(error => {
                    window.scrollTo(0,0);
                });
            }
        }
    }
</script>