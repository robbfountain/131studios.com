<template>
    <div>
        <section class="px-2 py-8">
            <div class="container mx-auto">
                <form id="contactForm" @submit.prevent>
                    <div class="flex flex-wrap">
                        <div class="w-1/4 mr-3 my-3">
                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3 leading-tight"
                                   name="name" type="text" id="name" placeholder="Your Name" v-model="form.name"/>
                        </div>

                        <div class="w-1/4 mr-3 my-3">
                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3 leading-tight"
                                   name="email" type="email" id="email" placeholder="Email Address"
                                   v-model="form.email"/>
                        </div>

                        <div class="w-1/4 mr-3 my-3">
                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3 leading-tight"
                                   name="phone" type="text" id="phone" placeholder="Phone Number"
                                   v-model="form.phone"/>
                        </div>

                        <div class="w-1/4 mr-3 my-3">
                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3 leading-tight"
                                   name="company" type="text" id="company" placeholder="Company Name"
                                   v-model="form.company"/>
                        </div>

                        <div class="w-1/4 mr-3 my-3">
                            <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3 leading-tight"
                                   name="website" type="text" id="website" placeholder="Your Website"
                                   v-model="form.website"/>
                        </div>

                        <div class="w-1/4 mr-3 my-3">
                            <select class="block appearance-none w-full bg-white border border-grey-light hover:border-grey px-4 py-2 pr-8 rounded shadow leading-tight"
                                    name="contact_method" v-model="form.contact_method">
                                <option value=''>Best Contact Method</option>
                                <option value='email'>Email</option>
                                <option value='phone'>Phone</option>
                            </select>
                        </div>

                        <div class="w-1/4 mr-3 my-3">
                            <select class="block appearance-none w-full bg-white border border-grey-light hover:border-grey px-4 py-2 pr-8 rounded shadow leading-tight"
                                    name="type" v-model="form.project_type">
                                <option value="">Select Project Type</option>
                                <option value="web development">Web Development</option>
                                <option value="consulting">IT Consulting</option>
                            </select>
                        </div>

                        <div class="w-1/4 mr-3 my-3">
                            <select class="block appearance-none w-full bg-white border border-grey-light hover:border-grey px-4 py-2 pr-8 rounded shadow leading-tight"
                                    name="timeframe" v-model="form.project_timeframe">
                                <option value="">Select Project Timeframe</option>
                                <option value="immediately">Immediately</option>
                                <option value="3 to 6 months">3 to 6 Months</option>
                                <option value="> 6 months">More than 6 Months</option>
                            </select>
                        </div>

                        <div class="w-1/4 mr-3 my-3">
                            <select class="block appearance-none w-full bg-white border border-grey-light hover:border-grey px-4 py-2 pr-8 rounded shadow leading-tight"
                                    name="budget" v-model="form.project_budget">
                                <option value="">Project Budget</option>
                                <option value="< 1000">Under $1000.00 USD</option>
                                <option value="1000 to 2000">$1000.00 to $2000.00 USD</option>
                                <option value="> 2000">Over $2000.00 USD</option>
                            </select>
                        </div>


                        <textarea
                                class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 leading-tight"
                                name="description" cols="40" rows="3" id="description"
                                placeholder="Project Description" spellcheck="true"
                                v-model="form.project_description"></textarea>


                        <textarea v-show="form.project_type == 'web development'"
                                  class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 leading-tight"
                                  name="clones" cols="40" rows="3" id="clones"
                                  placeholder="Please list a few other websites that you like which would help us determine an overall design for your site"
                                  v-model="form.clones"
                        ></textarea>


                        <textarea v-show="form.project_type == 'web development'"
                                  class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 leading-tight"
                                  name="likes" cols="40" rows="3" id="like"
                                  placeholder="Please list any aspects of your current website you would like to keep (if applicable)"
                                  v-model="form.likes"></textarea>


                        <textarea v-show="form.project_type == 'web development'"
                                  class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3 leading-tight"
                                  name="dontlike" cols="40" rows="3" id="dontlike"
                                  placeholder="Please list any aspects of your current website you do not like (if applicable)"
                                  v-model="form.dont_like"></textarea>


                        <h4>Select all that apply from the list below:</h4>


                        <label for="redesign" class="block text-grey font-bold">Interested in website redesign
                            <input type="checkbox" class="mr-2 leading-tight" name="redesign" id="redesign" v-model="form.redesign">
                        </label>


                        <label for="components">Interested in custom website components (Ex: Blog, Shopping
                            Cart,
                            Admin Panel, User Accounts)
                            <input type="checkbox" class="mr-2 leading-tight" name="components" id="components" v-model="form.components">
                        </label>


                        <label for="hosting">Interested in having 131 Studios host and manage your
                            website?
                            <input type="checkbox" class="mr-2 leading-tight" name="hosting" id="hosting" v-model="form.host">
                        </label>


                        <div class="w-1/4 mr-3 my-3" v-show="form.project_type == 'consulting'">
                            <select class="block appearance-none w-full bg-white border border-grey-light hover:border-grey px-4 py-2 pr-8 rounded shadow leading-tight"
                                    name="servers" v-model="form.servers">
                                <option value="">Number of Servers</option>
                                <option value="< 10">&lt; 10</option>
                                <option value="10 to 25">Between 10 &amp; 25</option>
                                <option value="> 25">&gt; 25</option>
                            </select>

                        </div>

                        <div class="w-1/4 mr-3 my-3" v-show="form.project_type == 'consulting'">
                            <select class="block appearance-none w-full bg-white border border-grey-light hover:border-grey px-4 py-2 pr-8 rounded shadow leading-tight"
                                    name="os" v-model="form.server_os">
                                <option value="">Server Operating Systems</option>
                                <option value="N/A">N/A</option>
                                <option value="windows">Windows</option>
                                <option value="Linux/Uinx">Linux/Unix</option>
                                <option value="Mix">Mix</option>
                            </select>
                        </div>

                        <div class="w-1/4 mr-3 my-3" v-show="form.project_type == 'consulting'">
                            <select class="block appearance-none w-full bg-white border border-grey-light hover:border-grey px-4 py-2 pr-8 rounded shadow leading-tight"
                                    name="workstations" v-model="form.workstations">
                                <option value="">Number of Laptops / Desktops</option>
                                <option value="< 50">&lt; 50</option>
                                <option value="50 to 100">Between 50 &amp; 100</option>
                                <option value="> 100">&gt; 100</option>
                            </select>
                        </div>

                        <div class="w-1/4 mr-3 my-3" v-show="form.project_type == 'consulting'">
                            <select class="block appearance-none w-full bg-white border border-grey-light hover:border-grey px-4 py-2 pr-8 rounded shadow leading-tight"
                                    name="leaseorbuy" v-model="form.ownership">
                                <option value="">Hardware Ownership</option>
                                <option value="leased">Leased</option>
                                <option value="buy">Buy</option>
                                <option value="both">Both</option>
                            </select>
                        </div>

                        <button v-if="! form.busy" type="submit"
                                class="rounded-full border border-blue-darkest px-4 py-2 hover:bg-blue-darkest hover:border-transparent hover:text-white"
                                :disabled="form.busy" @click="submitForm()">
                            <span v-if="form.busy"><fa icon="spinner" spin></fa></span>
                            <span v-else>Submit</span>
                        </button>
                    </div>
                </form>
            </div>
        </section>
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
                this.form.post('/contact/project').then(data => {
                    swal({
                        type: 'success',
                        title: 'Thank you',
                        message: 'Thank you for contacting us.  We will get back to you shortly.'
                    });
                }).catch(error => {
                });
            }
        }
    }
</script>