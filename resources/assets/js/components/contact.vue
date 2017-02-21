<template>
	<div class="col-md-6" >
       <section id="contact">
		
		<h3 class="headline centered margin-bottom-45">Contact Us</h3>
		<div class="alert alert-info" v-show="! hasError">Please consider using our <a href="/contact/longform">expanded contact form</a> to provide additional details about your project needs. </div>

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
			
			<div class="row">
				<div class="col-md-6">
					<div>
						<input name="name" type="text" id="name" placeholder="Your Name"  v-model="formData.name" />
					</div>
				</div>

				<div class="col-md-6">
					<div>
						<input name="email" type="email" id="email" placeholder="Email Address"  v-model="formData.email" />
					</div>
				</div>
			</div>

			<div>
				<input name="subject" type="text" id="subject" placeholder="Subject"  v-model="formData.subject" />
			</div>

			<div>
				<textarea name="comments" cols="40" rows="3" id="comments" placeholder="Message" spellcheck="true"  v-model="formData.message"></textarea>
			</div>
			
			<div class="checkboxes" >
				<input type="checkbox" name="newsletter" id="newsletter" v-model="formData.newsletter"> 
				<label for="newsletter">Occassionally receive email updates from us </label> 
			</div>
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
	import VueRecaptcha from 'vue-recaptcha';
    export default {
    	data() {
    		return {
    			formData:  {
	    			name: '',
	    			email: '',
	    			subject: '',
	    			message: '',
	    			newsletter: true,
    			},
    			errors: [],
    			hasError: false,
    			sending: false,
    			
    		}
    	},

    	components: { VueRecaptcha },

    	methods: {
    		submitMessage() {
    			var elm = this;
    			elm.sending = true;
    			$.ajax({
    				type: 'POST',
    				url: '/contact',
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