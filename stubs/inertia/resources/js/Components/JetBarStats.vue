<template>
    <!-- Cards Statics -->
    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">

        <jet-bar-stat-card title="Total clients" number="6389" type="warning">
            <template v-slot:icon>
                <jet-bar-icon type="users" fill />
            </template>
        </jet-bar-stat-card>

        <jet-bar-stat-card title="Account balance" number="$ 46,760.89" type="success">
            <template v-slot:icon>
                <jet-bar-icon type="money" fill />
            </template>
        </jet-bar-stat-card>


        <jet-bar-stat-card title="New sales" number="376" type="info">
            <template v-slot:icon>
                <jet-bar-icon type="cart" fill />
            </template>
        </jet-bar-stat-card>

        <jet-bar-stat-card title="Pending contacts" number="35" type="danger">
            <template v-slot:icon>
                <jet-bar-icon type="message" fill />
            </template>
        </jet-bar-stat-card>

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

