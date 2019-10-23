<contact inline-template>
    <form @submit.prevent>
        <label for="name" class="block text-blue-800 mb-1">Your Name</label>
        <input name="name" type="text" id="name"
               class="border rounded w-full py-3 px-4 text-gray-600 leading-tight"
               :class="{'border-red' : form.errors.has('name')}" placeholder=""
               v-model="form.name"/>
        <div class="text-xs italic text-red-500 mt-2" v-show="form.errors.has('name')">
            @{{form.errors.get('name')}}
        </div>

        <label for="email" class="block text-blue-800 mt-3 mb-1 mt-4">Your Email</label>
        <input name="email" type="text" id="email"
               class="border rounded w-full py-3 px-4 text-gray-600 leading-tight"
               :class="{'border-red' : form.errors.has('email')}" placeholder=""
               v-model="form.email"/>
        <div class="text-xs italic text-red-500 mt-2" v-show="form.errors.has('email')">
            @{{form.errors.get('email')}}
        </div>

        <label for="message" class="block text-blue-800 mt-3 mb-1">Message</label>
        <textarea name="message" id="message" rows="5"
                  class="border rounded w-full py-3 px-4 text-gray-600 leading-tight"
                  :class="{'border-red' : form.errors.has('message')}" placeholder=""
                  v-model="form.message"></textarea>
        <div class="text-xs italic text-red-500 mt-2" v-show="form.errors.has('message')">
            @{{form.errors.get('message')}}
        </div>

        <button type="submit" @click="send"
                class="mt-8 rounded border border-blue-800 text-blue-800 px-4 py-3 hover:bg-blue-800 hover:text-white">
               <span v-if="form.busy">
                   <fa :icon="['fal','spinner']" spin></fa>
               </span>
            <span v-else>
                     Send Message
                </span>
        </button>
    </form>
</contact>
