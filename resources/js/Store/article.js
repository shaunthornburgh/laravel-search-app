import { defineStore } from 'pinia'

export const useArticleStore = defineStore({
    id: 'articles',

    state: () => ({
        articles: [],
        links: {},
        meta: {},
        isLoading: false,
        error: null,
    }),

    getters: {
        allArticles() {
            return this.articles;
        },
        allMeta() {
            return this.meta;
        },
        allLinks() {
            return this.links;
        },
    },

    actions: {
        async fetchAllArticles(url) {
            this.isLoading = true;
            this.error = null;

            try {
                let response
                if (url !== null) {
                    response = await axios.get(url)
                } else {
                    response = await axios.get("/api/article")
                }

                this.articles = response.data.data;
                this.links = response.data.links;
                this.meta = response.data.meta;
            } catch (error) {
                this.error = error.message;
            } finally {
                this.isLoading = false;
            }
        },

        async searchForArticles(searchTerm) {
            this.isLoading = true;
            this.error = null;

            try {
                const response = await axios.get(`/api/article/search?query=${searchTerm}`)

                this.articles = response.data.data;
                this.links = response.data.links;
                this.meta = response.data.meta;
            } catch (error) {
                this.error = error.message;
            } finally {
                this.isLoading = false;
            }
        },
    },
});
