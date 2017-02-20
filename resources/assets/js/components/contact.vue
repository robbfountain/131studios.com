<template>
	<div class="col-md-6" >
       <section id="contact">
		
		<h3 class="headline centered margin-bottom-45">Contact Us</h3>
		<div class="alert alert-info" v-show="! hasError">For a more detailed description of your project please use our <a href="/contact/longform">expanded contact form</a></div>

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
						<input name="name" type="text" id="name" placeholder="Your Name" required="required" v-model="formData.name" />
					</div>
				</div>

				<div class="col-md-6">
					<div>
						<input name="email" type="email" id="email" placeholder="Email Address" required="required" v-model="formData.email" />
					</div>
				</div>
			</div>

			<div>
				<input name="subject" type="text" id="subject" placeholder="Subject" required="required" v-model="formData.subject" />
			</div>

			<div>
				<textarea name="comments" cols="40" rows="3" id="comments" placeholder="Message" spellcheck="true" required="required" v-model="formData.message"></textarea>
			</div>

			<div class=" pull-left" >
				<label>
					<input type="checkbox" name="newsletter" v-model="formData.newsletter">Occcassionally receive email updates from us?
				</label>  
			</div> <!-- checkbox -->

			<vue-recaptcha sitekey="6LezJxUUAAAAALqDlLq9g2yb7BjVtpb9TZgEh8qK"></vue-recaptcha>

			<input type="submit" class="submit button border center margin-top-10" id="submit" value="Send Message" @click="submitMessage()" />

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
    			
    		}
    	},

    	components: { VueRecaptcha },

    	methods: {
    		submitMessage() {
    			var elm = this;
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
    				},
    				error: function (xhr, ajaxOptions, thrownError) {
    					elm.errors = JSON.parse(xhr.responseText);
    					elm.hasError = true;
    				}
    			});
    		}
    	}
    }
</script>