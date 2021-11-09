<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <div
              v-for="(item, index) in matriz"
              :key="item.id"
              class="main-content"
            >
              <div class="col-info" style="background: #3490dc3d">
                {{ index + 1 }}
              </div>

              <div class="form-group second-content">
                <div
                  class="btn-group btn-group-toggle"
                  data-toggle="buttons"
                  style="width: 100%"
                >
                  <item-test
                    v-for="characteristic in item.characteristics"
                    :key="characteristic.id"
                    :characteristic="characteristic"
                    :selected="item.selected"
                    @click="changeSelected(index, characteristic.id)"
                  ></item-test>
                </div>
              </div>

              <div
                :class="item.selected ? 'col-green' : 'col-red'"
                class="col-info"
              >
                {{ item.selected ? 1 : 0 }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
import ItemTest from "../components/ItemTest.vue";

export default {
  data() {
    return {
      matriz: [],
      matrizResult: [],
    };
  },
  components: {
    ItemTest,
  },
  methods: {
    changeSelected(index, value) {
      this.matriz[index].selected = value;
    },
  },
  created() {
    this.axios.get("/api/get-questions").then((response) => {
      this.matriz = response.data;
      console.log(this.matriz);
    });
  },
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
