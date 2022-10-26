<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import { reactive } from 'vue';
import { Inertia } from '@inertiajs/inertia';
import InputError from '@/Components/InputError.vue';
import BreezeValidationErrors from '@/Components/ValidationErrors.vue';

defineProps({
    errors: Object,
    genre: Object,
    grade: Object,
    status: Object,
    license: Object
})

const deleteLicense = id => {
Inertia.delete(route('licenses.destroy', {license: id}), {
    onBefore: () => confirm('本当に削除しますか?')
    })
}

const form = reactive({
    // genre: null,
    // name: null,
    // grade: null,
    // exam_date: null,
    // fee: null,
    // status: null
})

// const storeLicense = () => {
//     Inertia.post('/licenses', form)
// }

</script>

<template>
    <Head title="資格の詳細" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                資格の詳細
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
                                    <div class="md:w-2/3 mx-auto">
                                        <div class="flex flex-wrap -m-2">
                                            <div class="p-2 md:w-1/3 w-full">
                                                <div class="relative">
                                                    <label for="genre" class="leading-7 text-sm text-gray-600">ジャンル</label>
                                                    <div name="genre" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                            {{ genre.name }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-2 w-full">
                                                <div class="relative">
                                                    <label for="name" class="leading-7 text-sm text-gray-600">資格名</label>
                                                    <div type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                        {{ license.name }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-2 md:w-1/3 w-full">
                                                <div class="relative">
                                                    <label for="grade" class="leading-7 text-sm text-gray-600">級</label>
                                                    <div name="grade" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                        {{ grade.level }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-2 md:w-1/3 w-full">
                                                <div class="relative">
                                                    <label for="exam_date" class="leading-7 text-sm text-gray-600">試験日</label>
                                                    <div type="date" id="exam_date" name="exam_date" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                        <div v-if="license.exam_date === null">未設定</div>
                                                        <div v-if="license.exam_date !== null">{{ license.exam_date }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-2  md:w-1/3 w-full">
                                                <div class="relative">
                                                    <label for="fee" class="leading-7 text-sm text-gray-600">受験料（円）</label>
                                                    <div type="text" id="fee" name="fee" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                        <div v-if="license.fee === null">未設定</div>
                                                        <div v-if="license.fee !== null">{{ license.fee }}</div>
                                                        <!-- <div v-else>{{ license.fee }}</div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-2  md:w-1/3 w-full">
                                                <div class="relative">
                                                    <label for="status" class="leading-7 text-sm text-gray-600">受験予定</label>
                                                    <div name="status" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                                            {{ status.plan }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="p-2 w-full">
                                            <!-- <Link as="button" :href="route('licenses.index')" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                                登録
                                            </Link> -->
                                                <!-- <button type="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                                    登録
                                                </button> -->
                                                <Link as="button" :href="route('licenses.edit', { license: license.id })" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">
                                                    編集する
                                                </Link>
                                                <Link as="button" @click="deleteLicense(license.id)" class="flex mx-auto text-white mt-10 bg-red-500 border-0 py-2 px-6 focus:outline-none hover:bg-red-600 rounded text-lg">
                                                    削除する
                                                </Link>
                                                <!-- <div class="mt-20 bg-red-500">
                                                    <button @click="deleteLicense(license.id)" >削除する</button>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                <!-- </form> -->
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
