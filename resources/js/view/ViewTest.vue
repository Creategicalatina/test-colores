<template>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10">
        <rules-test class="rules mb-3"></rules-test>

        <div class="card mb-3 formulario">
          <div class="card-body">
            <frm-persona @changeUser="initTest"></frm-persona>
          </div>
        </div>

        <div class="card" v-if="showTest">
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
            <div class="text-center p-2">
              <button class="btn btn-primary" @click="storeData">
                Mostrar Resultados
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>


<script>
import FrmPersona from "../components/FrmPersona.vue";
import ItemTest from "../components/ItemTest.vue";
import RulesTest from "../components/RulesTest.vue";

export default {
  name: "ViewTest",
  data() {
    return {
      matriz: [],
      showTest: false,
      user: {},
    };
  },
  components: {
    ItemTest,
    FrmPersona,
    RulesTest,
  },
  computed: {
    hasErrorsTest() {
      if (this.matriz && !this.matriz[this.matriz.length - 1].selected) {
        return true;
      }
      return this.matriz.find((element) => !element.selected) ? true : false;
    },
  },
  methods: {
    changeSelected(index, value) {
      this.matriz[index].selected = value;
    },
    initTest(user) {
      this.showTest = true;
      Object.assign(this.user, user);
      setTimeout(() => {
        this.scroll();
      }, 500);
    },
    scroll() {
      document
        .querySelector(".col-info.col-red")
        .scrollIntoView({ block: "center", behavior: "smooth" });
    },
    storeData() {
      if (this.hasErrorsTest) {
        this.$toast.error({
          message: "Aún faltan preguntas por responder",
          showDuration: 1000,
          hideDuration: 8000,
        });
        this.scroll();
      } else {
        const data = {
          email: this.user.email,
          name: this.user.name,
          respuestas: [],
        };
        window.localStorage.setItem("email", data.email);
        data.respuestas = this.matriz.map((item) => {
          return item.selected;
        });

        this.axios
          .post("/api/store-questions", data)
          .then((response) => {
            if (response.data.url) {
              window.location.href = response.data.url;
            } else {
              this.$toast.error({
                message: "Error al procesar las respuestas",
                showDuration: 1000,
                hideDuration: 8000,
              });
            }
          })
          .catch((err) => {
            this.$toast.error({
              message: "Error al procesar las respuestas",
              showDuration: 1000,
              hideDuration: 8000,
            });
            console.log(err);
          });
      }
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

.characteristic {
  text-align: center;
}

.formulario,
.rules {
  margin: auto;
  max-width: 50rem;
}
</style>
