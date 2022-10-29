<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
import Pagination from '@/Components/Pagination.vue'
import { onMounted } from 'vue'
defineProps({
licenses : Object
})
// onMounted(() => { //ページが表示されたタイミングで実行
// console.log(props.licenses)
// console.log(props.licenses.last_page)
// })

// defineProps({
//     licenses: Object,
//     genres: Object,
//     grades: Object,
//     statuses: Object
// })
</script>

<template>
<ul v-for="license in licenses.data" :key="license.id">
<li>{{ license.id }}</li>
<li>{{ license.name }}</li>
</ul>
<!-- <Pagination class="mt-6" :links="licenses.links"></Pagination> -->
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
