<template>
  <label @click="click" class="btn btn-outline-secondary rounded my-2 mx-3 p-1" :class="{active: isActive}">
    <span>{{ characteristic.name }}</span>
  </label>
</template>


<script>
export default {
  props: {
    characteristic: {
      type: Object,
      required: true,
    },
    selected: {
      type: Number,
      require: true,
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
.main-content {
  display: flex;
  border: 1px solid #0404047a;
  padding: 5px 0 0;
}
.second-content {
  width: 80%;
  margin-bottom: 5px;
}
.col-info {
  width: 10%;
  text-align: center;
  padding-top: 16px;
  margin-top: -5px;
  font-size: 1rem;
}
.col-red {
  background: #f500007a;
}
.col-green {
  background: #38c1729c;
}
.col-item {
  width: 25%;
  border-top: 0;
  border-bottom: 0;
  border-left: 1px solid #0404047a;
  border-right: 1px solid #0404047a;
  padding: 10px 0 0 10px;
  margin-top: -10px;
}
.red {
  background: red;
}
.yellow {
  background: yellow;
}
.green {
  background: green;
}
.blue {
  background: blue;
}
.style-text {
  font-size: 1rem;
  font-weight: bold;
  padding: 2px 0;
}
</style>
