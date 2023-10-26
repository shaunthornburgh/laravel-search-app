<template>
    <GuestLayout>
        <ArticleIndex />
    </GuestLayout>
</template>

<script setup>
import GuestLayout from "./Layout/GuestLayout.vue";
import ArticleIndex from "./Pages/Article/Index.vue";
import {onMounted} from "vue";
import { useArticleStore } from './Store/article';

const articleStore = useArticleStore();

onMounted(() => {
    articleStore.fetchAllArticles(null, null);
})
</script>
