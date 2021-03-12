<template>
    <jet-label :for="name" :value="name" />

    <jet-input ref="input" v-bind="$attrs" class="w-full mt-1 block" :id="name" :type="type" :ref="name" @input="$emit('input', $event.target.value)" />

    <jet-input-error class="mt-2" :message="form.errors[name]" />
</template>

<script>
import JetLabel from "@/Jetstream/Label";
import JetInput from "@/Jetstream/Input";
import JetInputError from "@/Jetstream/InputError";

export default {
    name: "JetBarInput",
    components: {
        JetLabel,
        JetInput,
        JetInputError,
    },
    props: {
        name: String,
        type: {
            type: String,
            default: 'text',
        },
        form: Object,
    },
    methods: {
        focus() {
            this.$refs.input.focus()
        },
        select() {
            this.$refs.input.select()
        },
        setSelectionRange(start, end) {
            this.$refs.input.setSelectionRange(start, end)
        },
    },
}
</script>
