<template>
  <div>
    <lesson-detail></lesson-detail>
    <weekly-ressource></weekly-ressource>
    <weekly-exercice></weekly-exercice>
  </div>
</template>

<script>
import LessonInfoDetail from "../Lessons/LessonInfoDetail.vue";
import WeeklyRessource from "./WeeklyRessource.vue";
import WeeklyExercice from "./WeeklyExercice.vue";

export default {
  components: {
    "lesson-detail": LessonInfoDetail,
    "weekly-exercice": WeeklyExercice,
    "weekly-ressource": WeeklyRessource,
  },
};
</script>
