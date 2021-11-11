<template>
  <label @click="click" class="btn btn-outline-secondary rounded my-2 p-1" :class="{active: isActive}">
    <span>{{ characteristic.name }}</span>
  </label>
</template>


<script>
export default {
  name: 'ItemTest',
  props: {
    characteristic: {
      type: Object,
      required: true,
    },
    selected: {
      type: Number,
      required: true,
    },
  },
  computed: {
    isActive(){
      return this.selected == this.characteristic.id
    }
  },
  methods: {
    click(){
      this.$emit('click');
    }
  }
};
</script>

<style scoped>
.btn {
  width: 80%;
}
</style>
