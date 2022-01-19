<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-12 respuestas__container">
        <table class="table table--results">
          <thead>
            <tr>
              <th class="bg-danger">Rojo</th>
              <th class="bg-warning">Amarillo</th>
              <th class="bg-success">Verde</th>
              <th class="bg-primary">Azul</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>{{ red }}%</td>
              <td>{{ yellow }}%</td>
              <td>{{ green }}%</td>
              <td>{{ blue }}%</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="container_graphic col-md-6">
        <chart-js :config="getConfigChart"></chart-js>
      </div>
    </div>
    <div :class="{ 'd-none': img !== false }" class="block"></div>
  </div>
</template>


<script>
export default {
  name: "ResultadosTest",
  props: {
    send_email: {
      require: true,
    },
    id: {
      type: Number,
      require: true,
    },
    red: {
      type: Number,
      require: true,
    },
    blue: {
      type: Number,
      require: true,
    },
    yellow: {
      type: Number,
      require: true,
    },
    green: {
      type: Number,
      require: true,
    },
  },
  computed: {
    getDataChart() {
      return {
        labels: ["Rojo", "Amarillo", "Verde", "Azul"],
        datasets: [
          {
            label: "Test de personalidad",
            data: [this.red, this.yellow, this.green, this.blue],
            backgroundColor: ["#e3342f", "#ffed4a", "#38c172", "#3490dc"],
          },
        ],
      };
    },
    getConfigChart() {
      return {
        type: "pie",
        data: this.getDataChart,
        options: {
          responsive: true,
          plugins: {
            datalabels: {
              color: "#FFFFFF",
              font: {
                size: 20,
              },
              formatter: function (value) {
                return value + "%";
              },
            },
            legend: {
              position: "bottom",
            },
            title: {
              display: false,
              text: "Chart.js Pie Chart",
            },
          },
        },
      };
    },
  },
  data() {
    return {
      img: false,
    };
  },
  mounted() {
    this.img = Boolean(this.send_email);
    if (!this.img) {
      this.getImg();
    }
  },
  methods: {
    getImg(previo = null) {
      const canvas = document.querySelector("canvas");
      const img = canvas.toDataURL();
      if (previo !== img) {
        setTimeout(() => {
          this.getImg(img);
        }, 500);
      } else {
        this.img = img;
        this.sendEmail();
      }
    },
    sendEmail() {
      const data = {
        id: this.id,
        red: this.red,
        blue: this.blue,
        yellow: this.yellow,
        green: this.green,
        img: this.img,
      };
      this.axios
        .post("/api/send-email", data)
        .then(() => {})
        .catch((err) => {
          this.$toast.error({
            message: "No se ha podido enviar el correo",
            showDuration: 1000,
            hideDuration: 8000,
          });
          console.log(err);
        });
    },
  },
};
</script>

<style scoped>
.table--results {
  background-color: white;
}

.table--results td,
.table--results th {
  text-align: center;
  border-top-color: transparent;
  border-bottom-color: transparent;
}

.table--results th {
  font-weight: 600;
}

.table--results td {
  border-left: 2px solid #dee2e6;
  border-right: 2px solid #dee2e6;
  border-bottom: 2px solid #dee2e6;
}

.block {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100vh;
}
</style>
