import { defineStore } from 'pinia'

export const useUserStore = defineStore('user', {
    state: () => ({
        user: {},
        isLoggedIn: false,
        token: null,
    }),
    actions: {
        login(userData) {
            this.user = userData.name
            this.isLoggedIn = userData.token
            this.token = true
        },
        logout() {
            this.user = {}
            this.isLoggedIn = false
            this.token = null
        },
    },
})
