<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import Pagination from '@/Components/Pagination.vue';
import { ref } from 'vue';
import { Inertia } from '@inertiajs/inertia';
import dayjs from 'dayjs'


defineProps({
    licenses: Object,
    genres: Object,
    grades: Object,
    statuses: Object
})

const search = ref('')

const searchLicenses = () => {
    Inertia.get(route('licenses.index', { search: search.value }))
}

</script>

<template>
    <Head title="資格一覧" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                資格・検定一覧
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <section class="text-gray-600 body-font">
                            <div class="container px-5 py-4 mx-auto">
                                <div class="w-full mx-auto overflow-auto">
                                    <div class="mb-6">
                                        <input type="text" name="search" v-model="search"  placeholder="資格名で検索" class="m-1  rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        <button class="bg-gray-600 hover:bg-gray-500 text-white py-2 px-2"
                                        @click="searchLicenses">検索</button>
                                    </div>
                                    <table class="table-auto w-full text-left whitespace-no-wrap">
                                        <thead>
                                            <tr>
                                                <th class="px-2 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">ジャンル</th>
                                                <th class="px-2 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">資格名</th>
                                                <th class="px-2 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">級</th>
                                                <th class="px-2 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">試験日</th>
                                                <th class="px-2 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">受験料</th>
                                                <th class="px-2 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">受験予定</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="license in licenses.data" :key="license.id">
                                                <td class="px-2 py-3">{{ genres[license.genre_id-1]['name'] }}</td>
                                                <td class="px-2 py-3"><Link :href="route('licenses.show', {license: license.id})" class="text-blue-600 hover:underline">{{ license.name }}</Link></td>
                                                <td class="px-2 py-3">{{ grades[license.grade_id-1]['level'] }}</td>
                                                    <div v-if="license.exam_date === null">{{ license.exam_date }}</div>
                                                    <div v-else="license.exam_date != null">{{ dayjs(license.exam_date).format('YYYY/MM/DD') }}</div>
                                                <td class="px-2 py-3">{{ license.fee }}</td>
                                                <td class="px-2 py-3">{{ statuses[license.status_id-1]['plan'] }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="flex pl-4 mt-4 lg:w-2/3 w-full mx-auto">
                                    <Link as="button" :href="route('licenses.create')" class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">資格を追加</Link>
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
