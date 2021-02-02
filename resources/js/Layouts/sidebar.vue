<template>
  <div class="sidebar bg-light">
    <ul class="list-group list-unstyled text-capitalize">
      <li class="list-group-item">
        <router-link :to="`/lesson/${lessonId}/content`">
          <i class="mr-2 fa fa-folder-open"></i>
          content of the lesson
        </router-link>
      </li>

      <li class="list-group-item">
        <router-link :to="`/lesson/${lessonId}/student/list`">
          <i class="mr-2 fa fa-envelope"></i>
          students
        </router-link>
      </li>

      <li class="list-group-item">
        <router-link :to="`/lesson/${lessonId}/group`">
          <i class="mr-2 fa fa-users"></i>
          groups
        </router-link>
      </li>

      <li class="list-group-item">
        <router-link :to="`/lesson/${lessonId}/exercises`">
          <i class="mr-2 fa fa-edit"></i>
          Homeworks-projects
        </router-link>
      </li>

      <li class="list-group-item">
        <router-link :to="`/lesson/${lessonId}/exams`">
          <i class="mr-2 fa fa-code"></i>
          E-exams
        </router-link>
      </li>

      <li class="list-group-item">
        <router-link :to="`/lesson/${lessonId}/coursesMaterials`">
          <i class="mr-2 fa fa-book"></i>
          course materials
        </router-link>
      </li>
      <!--
      <li class="list-group-item">
        <router-link to="#">
          <i class="mr-2 fa fa-comments"></i>
          forum
        </router-link>
      </li>

      <li class="list-group-item">
        <router-link to="#">
          <i class="mr-2 fa fa-video"></i>virtual meetings
        </router-link>
      </li>

      -->

      <li class="list-group-item">
        <router-link to="/"> <i class="mr-2 fa fa-home"></i>panel </router-link>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  props: ["lessonId"],
};
</script>

<style scoped>
.sidebar {
  width: 25%;
  min-height: 100vh;
  border-right: 1px solid lightgray;
}
.sidebar .list-group .list-group-item a {
  display: block;
  width: 100%;
  padding: 5px 10px;
  background: #f9f9f9;
  transition: 0.1s;
  color: #222;
}

.sidebar .list-group .list-group-item a:hover {
  background: #357ca5;
  color: #fff;
  text-decoration: none !important;
}

.list-group {
  border-radius: 0;
}

.list-group .list-group-item {
  padding: 0;
  border-left: none;
  border-top: none;
  border-right: none;
}
</style>
