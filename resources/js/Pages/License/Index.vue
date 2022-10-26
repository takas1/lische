<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    licenses: Object,
    genres: Object,
    grades: Object,
    statuses: Object
})
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
                            <table class="table-auto w-full text-left whitespace-no-wrap">
                                <thead>
                                <tr>
                                    <th class="px-2 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">ジャンル</th>
                                    <th class="px-2 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">資格名</th>
                                    <th class="px-2 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">級</th>
                                    <th class="px-2 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">試験日</th>
                                    <th class="px-2 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">料金</th>
                                    <th class="px-2 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">受験予定</th>
                                    <!-- <th class="w-10 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br">受験予定</th> -->
                                </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="license in licenses" :key="license.id">
                                        <!-- <td class="px-2 py-3">{{ genres[1]['name'] }}</td> -->
                                        <td class="px-2 py-3">{{ genres[license.genre_id-1]['name'] }}</td>
                                        <!-- <td class="px-2 py-3">{{ license.genre_id }}</td> -->
                                        <td class="px-2 py-3"><Link :href="route('licenses.show', {license: license.id})" class="text-blue-600">{{ license.name }}</Link></td>
                                        <!-- <td class="px-2 py-3">{{ license.grade_id }}</td> -->
                                        <td class="px-2 py-3">{{ grades[license.grade_id-1]['level'] }}</td>
                                        <!-- <td class="px-2 py-3">{{ grades[1]['level'] }}</td> -->
                                        <td class="px-2 py-3">{{ license.exam_date }}</td>
                                        <td class="px-2 py-3">{{ license.fee }}</td>
                                        <!-- <td class="px-2 py-3">{{ license.status_id }}</td> -->
                                        <!-- <td class="px-2 py-3">{{ statuses[1-1]['plan'] }}</td> -->
                                        <td class="px-2 py-3">{{ statuses[license.status_id-1]['plan'] }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                            <div class="flex pl-4 mt-4 lg:w-2/3 w-full mx-auto">
                                <Link as="button" :href="route('licenses.create')" class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">資格を追加</Link>
                            </div>
                        </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<!-- <template>
  <main>
    <header>
      <Link href="/">Home</Link>
      <Link href="/about">About</Link>
      <Link href="/contact">Contact</Link>
      aaa
    </header>
    <article>
      <slot />
    </article>
  </main>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'

export default {
  components: {
    Link,
  }
}
</script> -->
