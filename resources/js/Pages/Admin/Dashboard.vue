<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';

const props = defineProps({
    outlets : Object
})

</script>

<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                List Outlet
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">    
                        <div class="overflow-x-auto relative">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="py-3 px-6">
                                            Nama Outlet
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Alamat
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Owner
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Email
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="outlet in outlets" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            {{outlet.name}}
                                        </th>
                                        <td class="py-4 px-6">
                                            {{outlet.address}}
                                        </td>
                                        <td class="py-4 px-6">
                                            {{outlet.owner.name}}
                                        </td>
                                        <td class="py-4 px-6">
                                            {{outlet.owner.email}}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>
