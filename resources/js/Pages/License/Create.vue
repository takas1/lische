<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                資格を追加
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <section class="text-gray-600 body-font relative">
                        <div class="container px-5 py-4 mx-auto">
                            <div class="md:w-2/3 mx-auto">
                            <!-- <div class="lg:w-1/2 md:w-2/3 mx-auto"> -->
                            <div class="flex flex-wrap -m-2">
                                <div class="p-2 md:w-1/3 w-full">
                                <div class="relative">
                                    <label for="genre" class="leading-7 text-sm text-gray-600">ジャンル</label>
                                    <select type="text" id="genre" name="genre" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    </select>
                                </div>
                                </div>
                                <div class="p-2 w-full">
                                <div class="relative">
                                    <label for="name" class="leading-7 text-sm text-gray-600">資格名</label>
                                    <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                </div>
                                <div class="p-2 md:w-1/3 w-full">
                                <div class="relative">
                                    <label for="grade" class="leading-7 text-sm text-gray-600">級</label>
                                    <select type="text" id="grade" name="grade" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    </select>
                                </div>
                                </div>
                                <div class="p-2 md:w-1/3 w-full">
                                <div class="relative">
                                    <label for="exam_date" class="leading-7 text-sm text-gray-600">試験日</label>
                                    <input type="date" id="exam_date" name="exam_date" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                </div>
                                <div class="p-2  md:w-1/3 w-full">
                                <div class="relative">
                                    <label for="fee" class="leading-7 text-sm text-gray-600">料金</label>
                                    <input type="text" id="fee" name="fee" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                </div>
                                <div class="p-2  md:w-1/4 w-full">
                                <div class="relative">
                                    <label for="status" class="leading-7 text-sm text-gray-600">受験予定</label>
                                    <input type="text" id="status" name="status" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                                </div>
                                <div class="p-2 w-full">
                                <Link as="button" :href="route('licenses.index')" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                    登録
                                </Link>
                                </div>
                            </div>
                            </div>
                        </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
