<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import { reactive } from 'vue';
import { Inertia } from '@inertiajs/inertia';
import InputError from '@/Components/InputError.vue';
import BreezeValidationErrors from '@/Components/ValidationErrors.vue';

const props = defineProps({
                errors: Object,
                license: Object,
                genres: Object,
                grades: Object,
                statuses: Object
})

const form = reactive({
    id: props.license.id,
    genre_id: props.license.genre_id,
    name: props.license.name,
    grade_id: props.license.grade_id,
    exam_date: props.license.exam_date,
    fee: props.license.fee,
    status_id: props.license.status_id,
    memo: props.license.memo
})

const updateLicense = id => {
    Inertia.put(route('licenses.update',{license:id}), form)
}

</script>

<template>
    <Head title="資格を編集" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                資格を編集
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <BreezeValidationErrors class="mb-4" />
                        <section class="text-gray-600 body-font relative">
                            <div class="container px-5 py-4 mx-auto">
                                <!-- <InputError class="mt-2" :message="form.errors.name" /> -->
                                <form @submit.prevent="updateLicense(form.id)">
                                    <div class="md:w-2/3 mx-auto">
                                        <div class="flex flex-wrap -m-2">
                                            <div class="p-2 md:w-1/3 w-full">
                                                <div class="relative">
                                                    <label for="genre" class="leading-7 text-sm text-gray-600">ジャンル</label>
                                                    <select name="genre" v-model="form.genre_id" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                        <!-- <option v-for="option in options" :value="option.value"> -->
                                                        <option v-for="genre in genres" :value="genre.id" :key="genre.id">
                                                            {{ genre.id }} : {{ genre.name }}
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="p-2 w-full">
                                                <div class="relative">
                                                    <label for="name" class="leading-7 text-sm text-gray-600">資格名</label>
                                                    <input type="text" id="name" name="name" v-model="form.name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                </div>
                                            </div>
                                            <div class="p-2 md:w-1/3 w-full">
                                                <div class="relative">
                                                    <label for="grade" class="leading-7 text-sm text-gray-600">級</label>
                                                    <select name="grade" v-model="form.grade_id" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                        <option v-for="grade in grades" :value="grade.id" :key="grade.id">
                                                            {{ grade.id }} : {{ grade.level }}
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="p-2 md:w-1/3 w-full">
                                                <div class="relative">
                                                    <label for="exam_date" class="leading-7 text-sm text-gray-600">試験日</label>
                                                    <input type="date" id="exam_date" name="exam_date" v-model="form.exam_date" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                </div>
                                            </div>
                                            <div class="p-2  md:w-1/3 w-full">
                                                <div class="relative">
                                                    <label for="fee" class="leading-7 text-sm text-gray-600">受験料</label>
                                                    <input type="text" id="fee" name="fee" v-model="form.fee" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                </div>
                                            </div>
                                            <div class="p-2  md:w-1/3 w-full">
                                                <div class="relative">
                                                    <label for="status" class="leading-7 text-sm text-gray-600">受験予定</label>
                                                    <select name="status" v-model="form.status_id" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                        <option v-for="status in statuses" :value="status.id" :key="status.id">
                                                            {{ status.id }} : {{ status.plan }}
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="p-2 w-full">
                                                <div class="relative">
                                                    <label for="memo" class="leading-7 text-sm text-gray-600">メモ</label>
                                                    <textarea name="memo" id="memo" v-model="form.memo" rows="8" class="w-full whitespace-pre-wrap bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{ license.memo }}</textarea>
                                                </div>
                                            </div>
                                            <div class="p-2 w-full">
                                            <!-- <Link as="button" :href="route('licenses.index')" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                                登録
                                            </Link> -->
                                                <!-- <button type="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                                    更新
                                                </button> -->
                                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">更新する</button>
                                                <!-- <Link as="button" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                                    登録
                                                </Link> -->
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
