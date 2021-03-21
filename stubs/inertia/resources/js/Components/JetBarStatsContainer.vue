<template>
    <!-- Cards Statics -->
    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">

        <slot />

    </div>

</template>

<script>
import JetBarStatCard from "@/Components/JetBarStatCard";
import JetBarIcon from "@/Components/JetBarIcon";

export default {
    name: "StatsCardsComponent",
    components: {
        JetBarStatCard,
        JetBarIcon
    }
}
</script>

