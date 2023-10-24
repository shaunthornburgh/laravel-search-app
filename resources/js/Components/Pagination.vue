<template>
    <nav class="flex items-center justify-between px-4 sm:px-0">
        <div class="-mt-px flex w-0 flex-1">
            <div
                @click="articleStore.fetchAllArticles(articleStore.allLinks.prev)"
                class="inline-flex items-center border-t-2 border-transparent pr-1 pt-4 text-sm font-medium text-gray-500"
                :class="articleStore.allLinks.prev ? 'hover:border-gray-300 hover:text-gray-700 cursor-pointer' : ''"
            >
                <svg class="mr-3 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M18 10a.75.75 0 01-.75.75H4.66l2.1 1.95a.75.75 0 11-1.02 1.1l-3.5-3.25a.75.75 0 010-1.1l3.5-3.25a.75.75 0 111.02 1.1l-2.1 1.95h12.59A.75.75 0 0118 10z" clip-rule="evenodd" />
                </svg>
                Previous
            </div>
        </div>
        <div class="hidden md:-mt-px md:flex">
            <div
                v-for="link in articleStore.allMeta.links"
                class="inline-flex items-center border-t-2  px-4 pt-4 text-sm font-medium text-gray-500  hover:text-gray-700"
                :class="link.active ? 'border-indigo-500 text-indigo-600' :  'cursor-pointer border-transparent hover:border-gray-300'"
                v-html="link.label"
                v-show="Number.isInteger(parseInt(link.label))"
                @click="articleStore.fetchAllArticles(link.url)"
            />
        </div>
        <div class="-mt-px flex w-0 flex-1 justify-end">
            <div
                @click="articleStore.fetchAllArticles(articleStore.allLinks.next)"
                class="inline-flex items-center border-t-2 border-transparent pl-1 pt-4 text-sm font-medium text-gray-500"
                :class="articleStore.allLinks.next ? 'hover:border-gray-300 hover:text-gray-700 cursor-pointer' : ''"
            >
                Next
                <svg class="ml-3 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M2 10a.75.75 0 01.75-.75h12.59l-2.1-1.95a.75.75 0 111.02-1.1l3.5 3.25a.75.75 0 010 1.1l-3.5 3.25a.75.75 0 11-1.02-1.1l2.1-1.95H2.75A.75.75 0 012 10z" clip-rule="evenodd" />
                </svg>
            </div>
        </div>
    </nav>
</template>

<script setup>
import { useArticleStore } from '../Store/article';

const articleStore = useArticleStore();
</script>
