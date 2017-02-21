<template>
	<div class="col-md-12" >
       <section id="contact">
		
		<h3 class="headline centered margin-bottom-45">Contact Us</h3>
	
		<div class="alert alert-danger" v-show="hasError">
		     <div >
		          <strong>Oops, something went wrong.</strong>
		     </div> 
		     <ul>
		     	<li v-for="error in errors">
		     		{{error[0]}}
		     	</li>
		     </ul>

		</div> <!-- alert alert-danger -->
			<form id="contactForm" @submit.prevent>
			
			<div class="col-md-4">
				<div>
					<input name="name" type="text" id="name" placeholder="Your Name"  v-model="formData.name" />
				</div>
			</div>

			<div class="col-md-4">
				<div>
					<input name="email" type="email" id="email" placeholder="Email Address"  v-model="formData.email" />
				</div>
			</div>

			<div class="col-md-4">
			     <div>
			         <input name="phone" type="text" id="phone" placeholder="Phone Number" v-model="formData.phone" />
			     </div>
			</div> <!-- col-md-6" -->

			<div class="col-md-6">
				<div>
					<input name="company" type="text" id="company" placeholder="Company Name"  v-model="formData.company" />
				</div>
			</div>

			<div class="col-md-6">
				<div>
					<input name="website" type="text" id="website" placeholder="Your Website"  v-model="formData.website" />
				</div>
			</div>

			<div class="col-md-4" >
			     <div class="" >
			          <select name="type" v-model="formData.type">
			          	<option value="0" >Select Project Type</option>
			          	<option value="1">Web Development</option>
			          	<option value="2">IT Consulting</option>
			          </select>
			     </div> <!--  -->
			</div> <!-- col-md-4 -->

			<div class="col-md-4" >
			     <div class="" >
			          <select name="timeframe" v-model="formData.timeframe">
			          	<option value="0" >Select Project Timeframe</option>
			          	<option value="1">Immediately</option>
			          </select>
			     </div> <!--  -->
			</div> <!-- col-md-4 -->

			<div class="col-md-4" >
			     <div class="" >
			          <select name="budget" v-model="formData.budget">
			          	<option value="0" >Project Budget</option>
			          	<option value="1">Under $1000.00 USD</option>
			          </select>
			     </div> <!--  -->
			</div> <!-- col-md-4 -->
			
			<div class="col-md-12" id="">
			     <div>
					<textarea name="description" cols="40" rows="3" id="description" placeholder="Project Description" spellcheck="true"  v-model="formData.description"></textarea>
				</div>
			</div> <!-- col-md-12 -->
			
			<div v-show="formData.type == 1">
			<div class="col-md-12" >
			     <textarea name="clones" cols="40" rows="3" id="clones" placeholder="Please list a few other websites that you like which would help us determine an overall design for your site" v-model="formData.clones"></textarea>
			</div> <!-- col-md-12 -->

			<div class="col-md-12" >
			     <textarea name="like" cols="40" rows="3" id="like" placeholder="Please list any aspects of your current website you would like to keep (if applicable)" v-model="formData.like"></textarea>
			</div> <!-- col-md-12 -->

			<div class="col-md-12" >
			     <textarea name="dontlike" cols="40" rows="3" id="dontlike" placeholder="Please list any aspects of your current website you do not like (if applicable)" v-model="formData.dontlike"></textarea>
			</div> <!-- col-md-12 -->

			<div class="col-md-12" >
			     <h4>Select all that apply from the list below:</h4>
			</div> <!-- col-md-12 -->
			<div class="col-md-12" id="">
			   <div class="checkboxes" >
					<input type="checkbox" name="redesign" id="redesign" v-model="formData.redesign"> 
					<label for="redesign">Intestered in website redesign> </label> 
				</div>  

				<div class="checkboxes" >
					<input type="checkbox" name="components" id="components" v-model="formData.components"> 
					<label for="components">Interested in custom website components (Ex: Blog, Shopping Cart, Admin Panel, User Accounts>) </label> 
				</div>

				<div class="checkboxes" >
					<input type="checkbox" name="hosting" id="hosting" v-model="formData.hosting"> 
					<label for="hosting">Interested in having 131 Studios host and manage your website?</label> 
				</div>
			</div> <!-- col-md-12 -->
			</div>

			<div v-show="formData.type == 2">
			     <div class="col-md-3" >
			          <select name="servers" v-model="formData.servers">
			          	<option value="0">Number of Onsite Servers</option>
			          	<option value="1">&lt; 10</option>
			          	<option value="2">Between 10 &amp; 25</option>
			          	<option value="3">&gt; 25</option>
			          </select>
			     </div> <!-- col-md-3 -->

			     <div class="col-md-3" >
			          <select name="os" v-model="formData.os">
			          	<option value="0">Server Operating Systems</option>
			          	<option value="1">N/A</option>
			          	<option value="2">Windows</option>
			          	<option value="3">Linux/Unix</option>
			          	<option value="4">Mix</option>
			          </select>
			     </div> <!-- col-md-3 -->

			     <div class="col-md-3" >
			          <select name="workstations" v-model="formData.workstations">
			          	<option value="0">Number of Laptops / Desktops</option>
			          	<option value="1">&lt; 50</option>
			          	<option value="2">Between 50 &amp; 100</option>
			          	<option value="3">&gt; 100</option>
			          </select>
			     </div> <!-- col-md-3 -->

			     <div class="col-md-3" >
			          <select name="leaseorbuy" v-model="formData.leaseorbuy">
			          	<option value="0">Hardware Ownership</option>
			          	<option value="1">Leased</option>
			          	<option value="2">Buy</option>
			          	<option value="3">Both</option>
			          </select>
			     </div> <!-- col-md-3 -->
			</div> <!--  -->
			
			<div class="clearfix" >
			     &nbsp;
			</div> <!-- clearfix -->
			<input v-if="! sending" type="submit" class="submit button border center margin-top-10" value="Send Message" id="submit" :disabled="sending" @click="submitMessage()" />

			<input v-else type="submit" class="submit disabled border center margin-top-10" value="Sending..." />
			</form>
		</section>
  	</div> <!-- col-md-6 -->
</template>

<script>
    export default {
    	data() {
    		return {
    			formData:  {
	    			name: '',
	    			email: '',
	    			phone:'',
	    			website: '',
	    			company:'',
	    			newsletter: true,
	    			type:0,
	    			timeframe:0,
	    			budget:0,
	    			leaseorbuy:0,
	    			workstations:0,
	    			servers:0,
	    			os:0,
	    			like:'',
	    			dontlike:'',
    			},
    			errors: [],
    			hasError: false,
    			sending: false,
    			
    		}
    	},

    	methods: {
    		submitMessage() {
    			var elm = this;
    			elm.sending = true;
    			$.ajax({
    				type: 'POST',
    				url: '/longform',
    				data: elm.formData,
    				success: function(data) {
    					elm.hasError = false;
    					
    					swal({
						  title: data.title,
						  text: data.message,
						  type: data.type,
						  confirmButtonText: "Ok"
						});
						elm.sending = false;
    				},
    				error: function (xhr, ajaxOptions, thrownError) {
    					elm.errors = JSON.parse(xhr.responseText);
    					elm.hasError = true;
    					elm.sending = false;
    				}
    			});
    		}
    	}
    }
</script>