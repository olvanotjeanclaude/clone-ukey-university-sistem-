const state = {
    users: []
}

const mutations = {
    addUser(state, user) {
        state.push(user);
    }
}

const getters = {
    getUser(state, userId) {
        return state.users.find(userId);
    }
}

const actions = {
    deleteUser(state, user) {
        return "deleted";
    }
}

export default {
    namespaced: true,
    state: state,
    getters: getters,
    mutations: mutations,
    actions: actions
}