<template>
    <div class="dropdown relative inline-block text-left">
        <div>
            <span>
                <button @click="isOpen = !isOpen" type="button" class="inline-flex justify-center w-full px-4 py-2 text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition duration-150 ease-in-out">
                    <slot name="trigger"></slot>
                    <svg class="-mr-1 ml-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                    </svg>
                </button>
            </span>
        </div>

        <div v-if="isOpen" class="origin-top-right absolute right-0 mt-2 w-56 rounded-md shadow-lg"
             :class="{'transition ease-in duration-75 transform opacity-0 scale-95' : !isOpen, 'transition ease-out duration-100 tranform opacity-100 scale-100' : isOpen }">
            <div class="rounded-md bg-white shadow-xs">
                <slot/>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            width: {default: 'auto'},
            align: {default: 'left'}
        },
        data() {
            return {isOpen: false}
        },
        watch: {
            isOpen(isOpen) {
                if (isOpen) {
                    document.addEventListener('click', this.closeIfClickedOutside);
                }
            }
        },
        methods: {
            closeIfClickedOutside(event) {
                if (!event.target.closest('.dropdown')) {
                    this.isOpen = false;
                    document.removeEventListener('click', this.closeIfClickedOutside);
                }
            }
        }
    }
</script>
