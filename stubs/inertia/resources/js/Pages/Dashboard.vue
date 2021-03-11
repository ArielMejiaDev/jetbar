<template>
    <app-layout>
        <template #header>
            Dashboard
        </template>

        <jet-bar-container>

            <jet-bar-alert text="This is an alert message" />

            <jet-bar-stats />

            <jet-bar-table :headers="['name', 'title', 'status', 'role', '', '']" >
                <tr class="hover:bg-gray-50" v-for="index in 3" :key="index">
                    <jet-bar-table-data>Jane Cooper</jet-bar-table-data>
                    <jet-bar-table-data>
                        <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                        <div class="text-sm text-gray-500">Optimization</div>
                    </jet-bar-table-data>
                    <jet-bar-table-data>
                        <jet-bar-badge text="Active" type="success" />
                    </jet-bar-table-data>
                    <jet-bar-table-data>Admin</jet-bar-table-data>
                    <jet-bar-table-data>
                        <inertia-link href="#" class="text-indigo-600 hover:text-indigo-900">Edit</inertia-link>
                    </jet-bar-table-data>
                    <jet-bar-table-data>
                        <inertia-link href="#" class="text-gray-400 hover:text-gray-500">
                            <jet-bar-icon type="trash" fill />
                        </inertia-link>
                    </jet-bar-table-data>
                </tr>
            </jet-bar-table>

        </jet-bar-container>

    </app-layout>
</template>

<script>
import AppLayout from '@/Layouts/AppLayout'
import Welcome from '@/Jetstream/Welcome'
import JetBarTable from "@/Components/JetBarTable";
import JetBarStats from "@/Components/JetBarStats";
import JetBarAlert from "@/Components/JetBarAlert";
import JetBarBadge from "@/Components/JetBarBadge";
import JetBarTableData from "@/Components/JetBarTableData";
import JetBarContainer from "@/Components/JetBarContainer";
import JetBarIcon from "@/Components/JetBarIcon";

export default {
    components: {
        JetBarIcon,
        JetBarContainer,
        JetBarAlert,
        JetBarStats,
        AppLayout,
        Welcome,
        JetBarTable,
        JetBarBadge,
        JetBarTableData
    },
}
</script>
