<template>
    <jet-action-message :on="form.recentlySuccessful" class="mr-3">
        Saved.
    </jet-action-message>

    <jet-button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
        Save
    </jet-button>
</template>

<script>
import JetActionMessage from "@/Jetstream/ActionMessage";
import JetButton from "@/Jetstream/Button";

export default {
    name: "JetBarAction",
    components: {
        JetActionMessage,
        JetButton
    },
    props: {
        form: Object,
        submitText: {
            type: String,
            default: 'Save'
        },
        submittedText: {
            type: String,
            default: 'Saved'
        }
    }
}
</script>

<style scoped>

</style>
