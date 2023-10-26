import { defineStore } from 'pinia'

export const useArticleStore = defineStore({
    id: 'articles',

    state: () => ({
        articles: [],
        links: [],
        isLoading: false,
        error: null,
    }),

    getters: {
        allArticles() {
            return this.articles;
        },
        allPageLinks() {
            return this.links;
        }
    },

    actions: {
        async fetchAllArticles(url, searchTerm) {
            this.isLoading = true;
            this.error = null;
            let endPoint = url == null ? '/api/article' : url

            if (searchTerm ) {
                endPoint = `/api/article?query=${searchTerm}`
            }

            try {
                const response = await axios.get(endPoint)

                this.articles = response.data.data;
                this.links = response.data.links;
            } catch (error) {
                this.error = error.message;
            } finally {
                this.isLoading = false;
            }
        }
    },
});
