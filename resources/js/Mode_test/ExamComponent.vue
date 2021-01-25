<template>
  <div>
    <form class="questions-box mx-3">
      <div
        id="question"
        class="questions"
        v-for="(item, index) in questions"
        :key="index"
      >
        <div class="card">
          <div class="card-header" :id="`heading${item.id}`">
            <h5 class="mb-0 btn-link" data-toggle="collapse">question {{ index + 1 }}</h5>
          </div>

          <div
            :id="`question${item.id}`"
            class="collapse"
            :aria-labelledby="`heading${item.id}`"
            data-parent="#question"
          >
            <div class="card-body">
              <div class="question-field">
                <h6>{{ item.question }}</h6>

                <div class="form-group">
                  <div
                    class="form-check"
                    v-for="(option, key) in item.options"
                    :key="key"
                  >
                    <input
                      class="form-check-input"
                      type="radio"
                      :name="`question${item.id}`"
                      :id="`option${item.id}`"
                      :value="`${option}`"
                      :v-model="responses['question' + item.id]"
                    />
                    <label class="form-check-label" for="option[item.id]">
                      {{ option }}
                    </label>
                    <div class="reponse"></div>
                  </div>
                  <div class="action">
                    <button class="btn clear">
                      <i class="mr-2 fa fa-eraser"></i>
                      clear answer
                    </button>
                    <button
                      class="btn save"
                      @click.prevent="save(responses['question' + item.id])"
                    >
                      <i class="mr-2 fa fa-print"></i>
                      save answer
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</template>

<script>
import ExamModal from "./";
export default {
  data() {
    return {
      responses: {},
      questions: [
        {
          id: 1,
          question: "If you could only speak one word today, what would you say?",
          response: "response 1",
          options: ["your options 1", "your option 2", "your option 3", "your option 4"],
          pending: false,
          answered: false,
        },
        {
          id: 2,
          question:
            "What is the stupidest thing you've done because someone dared you to?",
          response: "response 2",
          options: ["your options 1", "your option 2", "your option 3", "your option 4"],
          pending: false,
          answered: false,
        },
        {
          id: 3,
          question: "What is the stupidest thing you've done on your own free will?",
          response: "response 3",
          options: ["your options 1", "your option 2", "your option 3", "your option 4"],
          pending: false,
          answered: false,
        },
        {
          id: 4,
          question: "What are some random questions?",
          response: "response 4",
          options: ["your options 1", "your option 2", "your option 3", "your option 4"],
          pending: false,
          answered: false,
        },
        {
          id: 5,
          question: "What Was Your Fondest Memory Of High School?",
          response: "response 5",
          options: ["your options 1", "your option 2", "your option 3", "your option 4"],
          pending: false,
          answered: false,
        },
      ],
    };
  },
  methods: {
    save(questionId) {
      alert("you choise :" + questionId);
    },
  },
  components: {},
};
</script>

<style>
.questions {
  margin-top: 10px;
}
.btn-link {
  padding: 5px;
  font-size: 20px;
  cursor: pointer;
  text-decoration: none !important;
}
.form-check-label {
  font-weight: normal;
}
.question-field h6::first-letter {
  text-transform: uppercase;
}
.form-group .btn {
  text-transform: capitalize;

  text-align: center;
  font-size: 14px;
}
.form-group .form-check-label {
  font-size: 14px;
}
button.clear,
button.save {
  background: #357ca5;
  margin: 10px 2px;
  color: #fff;
  padding: 2px 7px;
  outline: none;
  border: none;
  text-transform: capitalize;
}
button.clear:hover,
button.save:hover {
  color: aliceblue;
  opacity: 0.88;
}
</style>
