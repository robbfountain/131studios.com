<template>
    <div>
        <slot />
    </div>
</template>

<script>
    import { throttle } from 'lodash';
    export default {
        mounted() {
            let el = this.$el;
            let originalOffsetTop = this.$el.offsetTop;

            window.addEventListener(
                'scroll',
                throttle(function() {
                    el.classList[
                        window.scrollY > originalOffsetTop ? 'add' : 'remove'
                        ]('lg:pin-t', 'lg:fixed', 'lg:w-full','lg:z-10', 'bg-white');
                }, 300)
            );
        }
    }
</script>