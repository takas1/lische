<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import Pagination from '@/Components/Pagination.vue';
import dayjs from 'dayjs'


defineProps({
    licenses: Object,
    genres: Object,
    grades: Object,
    statuses: Object
})

</script>

<template>
    <Head title="受験予定一覧" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                受験予定一覧
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <section class="text-gray-600 body-font">
                            <div class="container px-5 py-4 mx-auto">
                                <div class="w-full mx-auto overflow-auto">
                                    <table class="table-auto w-full text-left whitespace-no-wrap">
                                        <thead>
                                            <tr>
                                                <th class="px-2 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">ジャンル</th>
                                                <th class="px-2 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">資格名</th>
                                                <th class="px-2 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">級</th>
                                                <th class="px-2 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">試験日</th>
                                                <th class="px-2 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">受験料</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="license in licenses.data" :key="license.id">
                                                <td class="px-2 py-3">{{ genres[license.genre_id-1]['name'] }}</td>
                                                <td class="px-2 py-3"><Link :href="route('licenses.show', {license: license.id})" class="text-blue-600 hover:underline">{{ license.name }}</Link></td>
                                                <td class="px-2 py-3">{{ grades[license.grade_id-1]['level'] }}</td>
                                                <td class="px-2 py-3">
                                                    {{ dayjs(license.exam_date).format('YYYY/MM/DD') }}
                                                </td>
                                                <td class="px-2 py-3">{{ license.fee }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <Pagination class="mt-6" :links="licenses.links"></Pagination>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
