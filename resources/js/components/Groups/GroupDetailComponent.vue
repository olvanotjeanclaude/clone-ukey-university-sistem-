<template>
  <div>
    <group-detail></group-detail>
    <group-member></group-member>
  </div>
</template>

<script>
import GroupMember from "./GroupMember";
import GroupDetail from "./GroupDetail";

export default {
  components: {
    GroupMember,
    GroupDetail,
  },
};
</script>
