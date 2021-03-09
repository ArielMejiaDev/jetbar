<template>
    <transition name="fade">
        <div v-if="text && show" class="alert mb-8 flex items-center justify-between rounded w-full" :class="alertColor">
            <div class="flex items-center">
                <svg viewBox="0 0 20 20" fill="currentColor" class="check w-6 h-6 fill-current ml-4 mr-2 flex-shrink"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                <div class="py-4 text-sm font-bold">{{ text }}</div>
            </div>
            <button type="button" class="group mr-2 p-2 focus:outline-none" @click="show = false">
                <svg class="block w-2 h-2 fill-green-700 fill-current" xmlns="http://www.w3.org/2000/svg" width="235.908" height="235.908" viewBox="278.046 126.846 235.908 235.908"><path d="M506.784 134.017c-9.56-9.56-25.06-9.56-34.62 0L396 210.18l-76.164-76.164c-9.56-9.56-25.06-9.56-34.62 0-9.56 9.56-9.56 25.06 0 34.62L361.38 244.8l-76.164 76.165c-9.56 9.56-9.56 25.06 0 34.62 9.56 9.56 25.06 9.56 34.62 0L396 279.42l76.164 76.165c9.56 9.56 25.06 9.56 34.62 0 9.56-9.56 9.56-25.06 0-34.62L430.62 244.8l76.164-76.163c9.56-9.56 9.56-25.06 0-34.62z" /></svg>
            </button>
        </div>
    </transition>
</template>

<script>
export default {
    name: 'JetBarAlert',
    props: {
        text: {
            type: String,
            required: true,
        },
        type: {
            type: String,
            validator: (value) => {
                return ['info', 'success', 'warning', 'danger'].includes(value);
            }
        }
    },
    data() {
        return {
            show: true,
        }
    },
    computed: {
        alertColor() {
            const colors = {
                "info":"bg-blue-200 text-blue-700",
                "success":"bg-green-200 text-green-700",
                "warning":"bg-yellow-200 text-yellow-700",
                "danger":"bg-red-200 text-red-700"
            }
            return colors[this.type ?? 'info'];
        }
    }
}
</script>

<style scoped>
/* Fade transition for components */
.alert {
    bottom: 0;
    right: 0;
    left: 0;
    z-index: 999;
}
@media (min-width: 768px) {
    .alert {
        bottom: 50px;
        right: 25px;
        left: initial;
    }
}

.fade-enter-active,
.fade-leave-active {
    transition: all 0.4s linear;
}
.fade-enter,
.fade-leave-to {
    opacity: 0;
}/* End of Fade transition for components */

</style>
