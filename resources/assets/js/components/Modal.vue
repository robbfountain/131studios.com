<template>
    <div class="backdrop">
        <div class="min-h-half max-h-most overflow-scroll bg-white flex flex-col rounded-t-lg shadow w-3/4 z-10">
            <div class="py-3 px-2 mb-4 font-semibold rounded-t-lg text-left"
                 :class="headerColor">
                <slot name="header">
                    Default Header
                </slot>
            </div>
            <div class="p-6 mb-4 text-left">
                <slot name="body">
                    Default Body Text. Are you sure you want to do something?
                </slot>
            </div>
            <div class="bg-gray-@300 px-2 py-3 text-right">
                <slot name="footer">
                    <button class="bg-gray-300 hover:bg-gray-500 px-3 py-2 border rounded mr-2"
                            @click="cancel">Cancel
                    </button>
                    <button class="px-3 py-2 border rounded text-white mr-1"
                            :class="buttonColor" @click="confirm" v-text="buttonText"></button>
                </slot>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Modal",
        props: {
            destructive: {
                default: false,
            },
            buttonText: {
                type: String,
                default: 'Yes'
            }
        },
        computed: {
            buttonColor() {
                return this.destructive ? 'bg-red hover:bg-red-dark' : 'bg-green hover:bg-green-dark';
            },
            headerColor() {
                return this.destructive ? 'bg-red text-white' : 'bg-gray-300';
            }
        },
        methods: {
            cancel() {
                this.$emit('cancel-modal');
            },
            confirm(data = null) {
                this.$emit('confirm-modal', data);
            }
        }
    }
</script>

<style scoped>
    .backdrop {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        /*background-color: rgba(0, 0, 0, 0.3);*/
        display: flex;
        justify-content: center;
        align-items: flex-end;
    }
</style>