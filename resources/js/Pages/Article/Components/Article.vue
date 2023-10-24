<template>
    <article class="group relative flex flex-col items-start">
        <h2 class="text-base font-semibold tracking-tight text-zinc-800">
            <span class="absolute -inset-x-4 -inset-y-6 z-20 sm:-inset-x-6 sm:rounded-2xl"></span>
            <span class="relative z-10">{{ article.title }}</span>
        </h2>
        <p class="relative z-10 mt-2 text-sm text-zinc-600 dark:text-zinc-400">{{ article.body }}</p>
        <div class="flex space-x-2 mt-2">
            <Tag v-for="tag in article.tags" :key="tag.id" :tag="tag" />
        </div>
    </article>
</template>

<script setup>
import Tag from "./Tag.vue";

defineProps({
    article: Object
})
</script>
