<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <table class="w-100">
              <tbody>
                <tr
                  v-for="(item, index) in matriz"
                  :key="item.id"
                  class="main-content"
                >
                  <td class="col-info" style="background: #3490dc3d">
                    {{ index + 1 }}
                  </td>
                  <td
                    v-for="characteristic in item.characteristics"
                    :key="characteristic.id"
                    class="characteristic"
                  >
                    <item-test
                      :characteristic="characteristic"
                      :selected="item.selected"
                      @click="changeSelected(index, characteristic.id)"
                    ></item-test>
                  </td>
                  <td
                    :class="item.selected ? 'col-green' : 'col-red'"
                    class="col-info"
                  >
                    {{ item.selected ? 1 : 0 }}
                  </td>
                </tr>
              </tbody>
            </table>
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
    });
  },
};
</script>

<style scoped>
.main-content {
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
  font-size: 1rem;
}

.col-red {
  background: #f500007a;
}

.col-green {
  background: #38c1729c;
}

.style-text {
  font-size: 1rem;
  font-weight: bold;
  padding: 2px 0;
}

.characteristic{
  text-align: center;
}

</style>
