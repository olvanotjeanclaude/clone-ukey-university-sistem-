<template>
  <div id="question" class="mx-3">
    <div class="text-center text-danger py-1 display-4">
      <span id="date"></span>
    </div>

    <div class="card mt-1" v-for="(question, index) in questions" :key="index">
      <div class="card-header" :id="`heading${index + 1}`">
        <h5 class="mb-0">
          <span
            class="btn btn-link d-block text-left"
            data-toggle="collapse"
            :data-target="`#question${index + 1}`"
            aria-expanded="true"
            :aria-controls="`collapse${index + 1}`"
          >
            question {{ index + 1 }}
          </span>
        </h5>
      </div>

      <div
        :id="`question${index + 1}`"
        class="collapse"
        :aria-labelledby="`heading${index + 1}`"
        data-parent="#question"
      >
        <div class="card-body">
          <h6>{{ question.question }}</h6>
          <div class="radio" v-for="(option, key) in question.option" :key="key">
            <input type="radio" :name="`question${index + 1}`" />
            <label>{{ option }}</label>
          </div>
          <div class="action">
            <button class="btn btn-clear px-3">clear</button>
            <button class="btn btn-save px-3">save</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      examDuration: 100,
      questions: [
        {
          id: 1,
          question: "If you could only speak one word today, what would you say?",
          option: ["option 1", "option 2", "option 3", "option 4"],
          answer: "option 3",
          pending: false,
          answered: false,
        },
        {
          id: 2,
          question:
            "What is the stupidest thing you've done because someone dared you to?",
          option: ["option 1", "option 2", "option 3", "option 4"],
          answer: "option 3",
          pending: false,
          answered: false,
        },
        {
          id: 3,
          question: "What is the stupidest thing you've done on your own free will?",
          option: ["option 1", "option 2", "option 3", "option 4"],
          answer: "option 3",
          pending: false,
          answered: false,
        },
        {
          id: 4,
          question:
            "If you could lock up one person in a mental institution, who would it be?",
          option: ["option 1", "option 2", "option 3", "option 4"],
          answer: "option 3",
          pending: false,
          answered: false,
        },
        {
          id: 5,
          question: "Is There An App That You Hate But Use Anyways?",
          option: ["option 1", "option 2", "option 3", "option 4"],
          answer: "option 3",
          pending: false,
          answered: false,
        },
      ],
    };
  },
  methods: {
    countDown(examDuration) {
      let time = examDuration * 60;
      let lastEntry = 2 * 60; //2mn
      let countUp = 0;

      let x = setInterval(() => {
        let minutes = Math.floor(time / 60);
        let second = Math.floor(time % 60);
        let currentTime = minutes + ":" + second;

        if (second < 10) {
          currentTime = minutes + ":0" + second;
        }

        if (countUp == lastEntry) {
          console.log("you cant enter");
        }

        if (currentTime == "0:00") {
          clearInterval(x);
        }

        $("#date").html(currentTime);

        time--;
        countUp++;
      }, 1000);
    },
  },
  mounted() {
    this.countDown(this.examDuration);
  },
};
</script>

<style scoped>
label {
  font-weight: normal;
  font-size: 16px;
}
input[type="radio"] {
  cursor: pointer;
  height: 13px;
  width: 13px;
}
.btn-link {
  text-decoration: none;
}
button.btn {
  padding: 2px;
  text-align: center;
}
.btn-clear,
.btn-save {
  background-color: #357ca5;
  color: white;
  text-transform: capitalize;
}
</style>
