<template>
    <div v-if="isLoading">Loading...</div>
    <div v-if="error">{{ error }}</div>
    <div v-else>
        <div class="flex flex-col gap-8">
            <Article v-for="article in articleStore.allArticles" :key="article.id" :article="article"  />
        </div>
        <div v-if="articleStore.allPageLinks" class="w-full border-t border-gray-200 mt-8">
            <Pagination
            />
        </div>
    </div>
</template>

<script setup>
import Article from "./Components/Article.vue";
import Pagination from "../../Components/Pagination.vue";
import { useArticleStore } from '../../store/article';

const articleStore = useArticleStore();
const { isLoading, error } = articleStore;
</script>
