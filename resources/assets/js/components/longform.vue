<template>
    <div class="col-md-12">
        <section id="contact">

            <h3 class="headline centered margin-bottom-45">Contact Us</h3>

            <div class="notification error " v-show="form.errors.any()">
                <p><span><strong>Oops, something went wrong.</strong></span></p>
                <ul>
                    <li v-html="form.errors.get('name')"></li>
                    <li v-html="form.errors.get('email')"></li>
                    <li v-html="form.errors.get('phone')"></li>
                    <li v-html="form.errors.get('contact_method')"></li>
                    <li v-html="form.errors.get('project_type')"></li>
                    <li v-html="form.errors.get('project_timeframe')"></li>
                    <li v-html="form.errors.get('project_budget')"></li>
                    <li v-html="form.errors.get('project_description')"></li>
                </ul>

            </div> <!-- alert alert-danger -->
            <form id="contactForm" @submit.prevent>

                <div class="col-md-4">
                    <div>
                        <input name="name" type="text" id="name" placeholder="Your Name" v-model="form.name"/>
                    </div>
                </div>

                <div class="col-md-4">
                    <div>
                        <input name="email" type="email" id="email" placeholder="Email Address" v-model="form.email"/>
                    </div>
                </div>

                <div class="col-md-4">
                    <div>
                        <input name="phone" type="text" id="phone" placeholder="Phone Number" v-model="form.phone"/>
                    </div>
                </div> <!-- col-md-6" -->

                <div class="col-md-4">
                    <div>
                        <select name="contact_method" v-model="form.contact_method">
                            <option value=''>Best Contact Method</option>
                            <option value='email'>Email</option>
                            <option value='phone'>Phone</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div>
                        <input name="company" type="text" id="company" placeholder="Company Name"
                               v-model="form.company"/>
                    </div>
                </div>

                <div class="col-md-4">
                    <div>
                        <input name="website" type="text" id="website" placeholder="Your Website"
                               v-model="form.website"/>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="">
                        <select name="type" v-model="form.project_type">
                            <option value="">Select Project Type</option>
                            <option value="web development">Web Development</option>
                            <option value="consulting">IT Consulting</option>
                        </select>
                    </div> <!--  -->
                </div> <!-- col-md-4 -->

                <div class="col-md-4">
                    <div class="">
                        <select name="timeframe" v-model="form.project_timeframe">
                            <option value="">Select Project Timeframe</option>
                            <option value="immediately">Immediately</option>
                            <option value="3 to 6 months">3 to 6 Months</option>
                            <option value="> 6 months">More than 6 Months</option>
                        </select>
                    </div> <!--  -->
                </div> <!-- col-md-4 -->

                <div class="col-md-4">
                    <div class="">
                        <select name="budget" v-model="form.project_budget">
                            <option value="">Project Budget</option>
                            <option value="< 1000">Under $1000.00 USD</option>
                            <option value="1000 to 2000">$1000.00 to $2000.00 USD</option>
                            <option value="> 2000">Over $2000.00 USD</option>
                        </select>
                    </div> <!--  -->
                </div> <!-- col-md-4 -->

                <div class="col-md-12">
                    <div>
                        <textarea name="description" cols="40" rows="3" id="description"
                                  placeholder="Project Description" spellcheck="true"
                                  v-model="form.project_description"></textarea>
                    </div>
                </div> <!-- col-md-12 -->

                <div v-show="form.project_type == 'web development'">
                    <div class="col-md-12">
                        <textarea name="clones" cols="40" rows="3" id="clones"
                                  placeholder="Please list a few other websites that you like which would help us determine an overall design for your site"
                                  v-model="form.clones"></textarea>
                    </div> <!-- col-md-12 -->

                    <div class="col-md-12">
                        <textarea name="likes" cols="40" rows="3" id="like"
                                  placeholder="Please list any aspects of your current website you would like to keep (if applicable)"
                                  v-model="form.likes"></textarea>
                    </div> <!-- col-md-12 -->

                    <div class="col-md-12">
                        <textarea name="dontlike" cols="40" rows="3" id="dontlike"
                                  placeholder="Please list any aspects of your current website you do not like (if applicable)"
                                  v-model="form.dont_like"></textarea>
                    </div> <!-- col-md-12 -->

                    <div class="col-md-12">
                        <h4>Select all that apply from the list below:</h4>
                    </div> <!-- col-md-12 -->
                    <div class="col-md-12">
                        <div class="checkboxes">
                            <input type="checkbox" name="redesign" id="redesign" v-model="form.redesign">
                            <label for="redesign">Interested in website redesign </label>
                        </div>

                        <div class="checkboxes">
                            <input type="checkbox" name="components" id="components" v-model="form.components">
                            <label for="components">Interested in custom website components (Ex: Blog, Shopping Cart,
                                Admin Panel, User Accounts) </label>
                        </div>

                        <div class="checkboxes">
                            <input type="checkbox" name="hosting" id="hosting" v-model="form.host">
                            <label for="hosting">Interested in having 131 Studios host and manage your website?</label>
                        </div>
                    </div> <!-- col-md-12 -->
                </div>

                <div v-show="form.project_type == 'consulting'">
                    <div class="col-md-3">
                        <select name="servers" v-model="form.servers">
                            <option value="">Number of Servers</option>
                            <option value="< 10">&lt; 10</option>
                            <option value="10 to 25">Between 10 &amp; 25</option>
                            <option value="> 25">&gt; 25</option>
                        </select>
                    </div> <!-- col-md-3 -->

                    <div class="col-md-3">
                        <select name="os" v-model="form.server_os">
                            <option value="">Server Operating Systems</option>
                            <option value="N/A">N/A</option>
                            <option value="windows">Windows</option>
                            <option value="Linux/Uinx">Linux/Unix</option>
                            <option value="Mix">Mix</option>
                        </select>
                    </div> <!-- col-md-3 -->

                    <div class="col-md-3">
                        <select name="workstations" v-model="form.workstations">
                            <option value="">Number of Laptops / Desktops</option>
                            <option value="< 50">&lt; 50</option>
                            <option value="50 to 100">Between 50 &amp; 100</option>
                            <option value="> 100">&gt; 100</option>
                        </select>
                    </div> <!-- col-md-3 -->

                    <div class="col-md-3">
                        <select name="leaseorbuy" v-model="form.ownership">
                            <option value="">Hardware Ownership</option>
                            <option value="leased">Leased</option>
                            <option value="buy">Buy</option>
                            <option value="both">Both</option>
                        </select>
                    </div> <!-- col-md-3 -->
                </div> <!--  -->

                <div class="clearfix">
                    &nbsp;
                </div> <!-- clearfix -->
                <input v-if="! form.busy" type="submit" class="submit button border center margin-top-10" value="Submit"
                       id="submit" :disabled="form.busy" @click="submitForm()"/>

                <input v-else type="submit" class="submit disabled border center margin-top-10" value="Submitting..."/>
            </form>
        </section>
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
                    swal('Thank you for contacting us.  We will get back to you shortly.')
                }).catch(error => {
                });
            }
        }
    }
</script>