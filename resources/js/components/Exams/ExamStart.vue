<template>
  <div id="question" class="mx-3">
    <div class="text-center text-danger py-1 display-4">
      <span id="date"></span>
    </div>

    <div class="card mt-1" v-for="question in exams" :key="question.id">
      <div class="card-header" :id="`heading${question.id}`">
        <h5 class="mb-0">
          <span
            class="btn btn-link d-block text-left"
            data-toggle="collapse"
            :data-target="`#question${question.id}`"
            aria-expanded="true"
            :aria-controls="`collapse${question.id}`"
          >
            question {{ question.id }}
          </span>
        </h5>
      </div>

      <div :id="`question${question.id}`" class="collapse" data-parent="#question">
        <div class="card-body">
          <h6>{{ question.question }}</h6>
          <div class="radio" v-for="(option, key) in question.options" :key="'key' + key">
            <input
              type="radio"
              :value="`${question.answer}`"
              :name="`question${question.id}`"
              v-model="responses[`question${question.id}`]"
            />
            <label>{{ option }}</label>
          </div>
          <div class="action">
            <button
              :class="`btn btn-clear btn-clear-${question.id} px-3`"
              @click="clear(`${question.id}`)"
            >
              clear
            </button>
            <button
              :class="`btn btn-save btn-save-${question.id} px-3`"
              @click="
                save(
                  {
                    id: question.id,
                    answered: responses[`question${question.id}`] !== undefined,
                    trueAnswer: responses[`question${question.id}`] == question.answer,
                    userAnswer: responses[`question${question.id}`],
                  },
                  `${question.id}`
                )
              "
            >
              save
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-3 mb-5">
      <div class="col-12 d-flex justify-content-center">
        <button class="btn btn-lg btn-danger px-3" @click="stopExam">Finish</button>
      </div>
    </div>
  </div>
</template>

<script>
import { mapGetters } from "vuex";
import { mapState } from "vuex";

export default {
  data() {
    return {
      examDuration: 60, //100 dk
      responses: [],
      isExamStop: false,
    };
  },

  computed: {
    ...mapGetters("exams", ["getExams"]),
    ...mapState("exams", ["exams"]),
  },

  methods: {
    stopExam() {
      var message = "Do you want to terminate your exam";

      if (this.isExamStop) {
        $("#date").html("Exam finished");
        // this.getNotes();
      }

      if (confirm(message)) {
        this.isExamStop = true;
      }

      return this.isExamStop;
    },

    save(data, questionId) {
      if (data.userAnswer) {
        this.responses[questionId] = data;
        console.log(this.responses[questionId]);

        if (this.responses[questionId].userAnswer) {
          $(".btn-save-" + questionId).addClass("disabled");
          $(".btn-save-" + questionId).prop("disabled", true);
          $(".btn-clear-" + questionId).addClass("active");
          $(".btn-clear-" + questionId).prop("disabled", false);
        }
      }

      //this.getNotes();
    },

    getNotes() {
      if (this.responses.length > 0) {
        var notes = this.responses.filter((response) => response.trueAnswer == true)
          .length;
      }

      return notes + "/" + this.exams.length;
    },

    clear(questionId) {
      if (this.responses[questionId] && this.responses[questionId].userAnswer) {
        this.responses[questionId].userAnswer = "";
        $(".btn-save-" + questionId).removeClass("disabled");
        $(".btn-save-" + questionId).prop("disabled", false);
        $(".btn-clear-" + questionId).removeClass("active");
        $(".btn-clear-" + questionId).prop("disabled", true);
      }
    },

    countDown(examDuration, lastEntry) {
      let time = examDuration * 60;
      lastEntry = lastEntry * 60;

      let x = setInterval(() => {
        let minutes = Math.floor(time / 60);
        let second = Math.floor(time % 60);

        let currentTime = minutes + ":" + second;

        if (second < 10) {
          currentTime = minutes + ":0" + second;
        }

        if (currentTime == "0:00" || this.isExamStop == true) {
          clearInterval(x);
          this.isExamStop = true;

          this.$router.push({
            name: "examResult",
            params: { lessonId: this.$route.params.lessonId },
            query: { examStatus: "finished" },
          });
          return this.isExamStop;
        }

        $("#date").html(currentTime);

        time--;
      }, 1000);
    },
  },
  mounted() {
    if (!this.isExamStop) {
      this.countDown(this.examDuration, this.lastEntry);
    }
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
