<template>
  <div class="card">
    <div class="card-body">
      <h2>INSTRUCCIONES</h2>
      <p>
        El test cuenta con 40 filas, y en cada una de ellas 4 Características,
        de las cuales debes escoger <strong>SOLO UNA</strong>, con la que más te
        sientas identificado(a).
      </p>

      <h3 class="subtitle">TEN PRESENTE</h3>

      <ul class="tips">
        <li>
          No existen respuestas correctas e incorrectas, solo indica lo que
          inicialmente consideres lo más relevante para ti.
        </li>
        <!-- <li>Para algunas opciones hay una explicación de la palabra. Localiza el cursor donde hay un triangulito rojo y encontrarás la explicación.</li> -->
      </ul>
      <p>
        <strong>Objetivo:</strong> El test esta basado en la Teoria de los
        Cuatro Temperamentos.
      </p>
      <p>
        <strong>Tomado del libro:</strong> Enriquezca Su Personalidad.<br/>
         <strong>Autor:</strong> <em>Florence Littauer. Editorial UNILIT</em>
      </p>
    </div>
  </div>
</template>


<script>
export default {
  name: "ItemTest",
  methods: {
    click() {
      this.$emit("click");
    },
  },
};
</script>

<style scoped>
.btn {
  width: 80%;
}
.subtitle {
  font-size: 1.1rem;
}
.tips {
  padding-left: 1.3rem;
}
</style>
