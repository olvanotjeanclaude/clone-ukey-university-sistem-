const state = {
    exams: [{
            id: 1,
            question: "If you could only speak one word today, what would you say?",
            options: ["option 1", "option 2", "option 3", "option 4"],
            answer: "option 3",
        },
        {
            id: 2,
            question: "What is the stupidest thing you've done because someone dared you to?",
            options: ["option 1", "option 2", "option 3", "option 4"],
            answer: "option 4",
        },
        {
            id: 3,
            question: "What is the stupidest thing you've done on your own free will?",
            options: ["option 1", "option 2", "option 3", "option 4"],
            answer: "option 1",
        },
        {
            id: 4,
            question: "If you could lock up one person in a mental institution, who would it be?",
            options: ["option 1", "option 2", "option 3", "option 4"],
            answer: "option 2",
        },
        {
            id: 5,
            question: "If you could only speak one word today, what would you say?",
            options: ["option 1", "option 2", "option 3", "option 4"],
            answer: "option 3",
        },
        {
            id: 6,
            question: "What is the stupidest thing you've done because someone dared you to?",
            options: ["option 1", "option 2", "option 3", "option 4"],
            answer: "option 4",
        },
        {
            id: 7,
            question: "What is the stupidest thing you've done on your own free will?",
            options: ["option 1", "option 2", "option 3", "option 4"],
            answer: "option 1",
        },
        {
            id: 8,
            question: "If you could lock up one person in a mental institution, who would it be?",
            options: ["option 1", "option 2", "option 3", "option 4"],
            answer: "option 2",
        },
        {
            id: 9,
            question: "What is the stupidest thing you've done on your own free will?",
            options: ["option 1", "option 2", "option 3", "option 4"],
            answer: "option 1",
        },
        {
            id: 10,
            question: "If you could lock up one person in a mental institution, who would it be?",
            options: ["option 1", "option 2", "option 3", "option 4"],
            answer: "option 2",
        },

    ],
}

const getters = {
    getExams(state) {
        return state.exams;
    }
}

const mutations = {
    addExams: (state, exams) => {
        state.exams.push(exams);
    },
}

const actions = {
    addExams: (store, exams) => {
        store.commit("addExams", exams);
    }
}

const exams = {
    namespaced: true,
    state: state,
    getters: getters,
    mutations: mutations,
    actions: actions,
}


export default exams;