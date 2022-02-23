<template>
  <div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <v-table :data="users" class="table table-striped table-hover">
              <thead slot="head">
              <th>Nombres</th>
              <th>Correo electrónico</th>
              <th>Fecha realizó el test</th>
              <th>Acciones</th>
              </thead>
              <tbody slot="body" slot-scope="{displayData}">
              <tr v-for="row in displayData" :key="row.id">
                <td>{{ row.name }}</td>
                <td>{{ row.email }}</td>
                <td>{{ moment(row.created_at).locale('es').format("MMMM Do YYYY hh:mma")}}</td>
                <td>
                  <a @click="showInfo(row)" type="button" class="btn btn-primary">Ver test</a>
                </td>
              </tr>
              </tbody>
            </v-table>
          </div>
        </div>
      </div>
    </div>

    <vs-popup class="showModalResults" fullscreen :title="user.name" :active.sync="popupActivo">
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
                <td>{{ user.result.red }}%</td>
                <td>{{ user.result.yellow }}%</td>
                <td>{{ user.result.green }}%</td>
                <td>{{ user.result.blue }}%</td>
              </tr>
              </tbody>
            </table>
          </div>
          <div class="container_graphic col-md-6">
            <img :src="user.path_img" alt="" style="width: 100%">
          </div>
        </div>
      </div>
    </vs-popup>
  </div>

</template>

<script>
import axios from "axios";
require("moment/min/locales.min");
import moment from 'moment';
export default {
  name: "Dashboard",
  data(){
    return {
      popupActivo:false,
      users: [],
      user: {
        name: '',
        email: '',
        path_img: '',
        result:{
          red: null,
          blue: null,
          yellow: null,
          green: null
        }
      },
      moment
    }
  },

  methods:{
    getUsers(){
      axios.get('/api/get-users').then(resp =>{
        this.users = resp.data
      }).catch(err =>{
        console.log(err)
      })
    },

    showInfo(data){
      this.popupActivo = true
      setTimeout(() =>{
        axios.get('/api/get-user/'+data.id).then(resp =>{

          this.user.name = resp.data.user.name
          this.user.email = resp.data.user.email
          this.user.path_img = resp.data.user.test.path_img
          this.user.result.red = resp.data.result.red.toFixed(1)
          this.user.result.blue = resp.data.result.blue.toFixed(1)
          this.user.result.yellow = resp.data.result.yellow.toFixed(1)
          this.user.result.green = resp.data.result.green.toFixed(1)

        }).catch(err =>{
          console.log(err)
        })
      }, 100)

    }
  },

  mounted() {
    this.getUsers()
  }
}
</script>

<style scoped>
.showModalResults >>> .vs-popup {
  max-width: 1040px !important;
  height: auto;
}
</style>
