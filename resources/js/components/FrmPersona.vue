<template>
  <form
    class="row g-3 needs-validation"
    @submit.prevent="updateData"
    novalidate
  >
    <div class="col-md-6">
      <label for="name" class="form-label">Nombre</label>
      <input
        type="text"
        class="form-control"
        :class="{ 'is-invalid': isInvalidName }"
        v-model.trim="user.name"
        id="name"
      />
      <div class="invalid-feedback">{{ errorName }}</div>
    </div>
    <div class="col-md-6">
      <label for="email" class="form-label">Correo electrónico</label>
      <input
        type="text"
        class="form-control"
        id="email"
        :class="{ 'is-invalid': isInvalidEmail }"
        v-model.trim="user.email"
      />
      <div class="invalid-feedback">{{ errorEmail }}</div>
    </div>
    <div class="col-12 text-center p-2">
      <button class="btn btn-primary" type="submit">Comenzar</button>
    </div>
  </form>
</template>

<script>
export default {
  name: "FrmPersona",
  data() {
    return {
      showErrors: false,
      user: {
        name: "",
        email: "",
      },
    };
  },
  methods: {
    updateData() {
      this.showErrors = true;
      if (!this.isInvalidName && !this.isInvalidEmail){
        this.$emit('changeUser', this.user);
      }
    },
  },
  created(){
    this.checkEmail = /(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9]))\.){3}(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9])|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/;
  },
  computed: {
    isInvalidName() {
      return this.showErrors && this.user.name.length < 2;
    },
    errorName() {
      return this.user.name.length == 0
        ? "El nombre es requerido"
        : "Ingrese un nombre valido";
    },
    isInvalidEmail() {
      return this.showErrors && !this.checkEmail.test(this.user.email);
    },
    errorEmail() {
      return this.user.email.length == 0
        ? "El correo es requerido"
        : "Ingrese un correo electronico valido";
    },
  },
};
</script>

<style>
.is-invalid + .invalid-feedback {
  display: block;
}
</style>
