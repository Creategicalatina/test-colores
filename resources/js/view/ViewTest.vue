<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div v-for="(item, index) in matriz" :key="index" class="main-content">
                            <div class="col-info" style="background: #3490dc3d;"> {{index + 1}} </div>

                            <div class="form-group second-content">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons" style="width: 100%">
                                    <label v-for="(subItem, i) in item" :key="i" class="btn btn-outline-secondary rounded my-2 mx-3 p-1">
                                        <input @change="onchange(subItem, index, i)" type="radio" :name="'btnradio' + index" :id="subItem.value" :value="subItem.value" required >
                                        <span>{{subItem.value}}</span>
                                    </label>
                                </div>
                            </div>

                            <div :class="( index === getFila(index) ) ? 'col-green' : 'col-red'" class="col-info">  {{ ( index === getFila(index) ) ? 1 : 0 }} </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>


    export default {
        data() {
            return {
                sanguineo: [],
                matriz: [],
                filas: [],
                matrizResult: [],
                valueSanguineo: 0,
                valueColerico: 0,
                valueMelancolico: 0,
                valueFlematico: 0,
            }
        },
        methods: {
            onchange(itemMatriz, fila, columna) {

                if (this.matrizResult.length == 0) {
                    this.filas.push(fila)
                    this.matrizResult.push({ 'fila': fila, 'data': this.matriz[fila][columna]})
                } else {
                    let itemAdd = true

                    this.matrizResult.map( item => {
                        if ( item.fila === fila ) {
                            item.data = itemMatriz
                            itemAdd = false
                        }
                    })

                    if ( itemAdd ) this.matrizResult.push({ 'fila': fila, 'data': this.matriz[fila][columna]});
                }

                this.setValueTest();
            },
            getFila( index ) {
                if (this.matrizResult.length == 0) return -1;

                let val = -1;

                this.matrizResult.map( item => {
                    if (item.fila === index) val = index;
                });

                return val;
            },
            setValueTest() {
                this.valueSanguineo = 0;
                this.valueColerico = 0;
                this.valueMelancolico = 0;
                this.valueFlematico = 0;

                this.matrizResult.map(item => {
                    switch( item.data.type ) {
                        case 'sanguineo':
                            this.valueSanguineo++;
                            break;
                        case 'colerico':
                            this.valueColerico++;
                            break;
                        case 'melancolico':
                            this.valueMelancolico++;
                            break;
                        case 'flematico':
                            this.valueFlematico++;
                            break;
                    }
                });

                console.log('san: ', this.valueSanguineo, ' col: ', this.valueColerico, ' mel: ', this.valueMelancolico, ' flem: ', this.valueFlematico)
            },
            getValueSanguineo() {
                if ( this.valueSanguineo === 0 ) return this.valueSanguineo + '%';
                console.log('toal: ', Math.ceil( (this.valueSanguineo / 40) ))
                console.log('toal: ', Math.ceil( (this.valueSanguineo / 40) * 100 ))

                return  Math.ceil( (this.valueSanguineo / 40) * 100) + '%';
            },
            getValueColerico() {
                if ( this.valueColerico === 0 ) return this.valueColerico + '%';

                return  Math.ceil( (this.valueColerico / 40) * 100) + '%';
            },
            getValueMelancolico() {
                if ( this.valueMelancolico === 0 ) return this.valueMelancolico + '%';

                return  Math.ceil( (this.valueMelancolico / 40) * 100) + '%';
            },
            getValueFlematico() {
                if ( this.valueFlematico === 0 ) return this.valueFlematico + '%';

                return  Math.ceil( (this.valueFlematico / 40) * 100) + '%';
            },
        },
        mounted() {
            console.log('matriz: ', this.matriz)
        },
        created() {
            this.matriz = [
                [{type: 'sanguineo', value: 'Animado'}, {type: 'colerico', value: 'Aventurero'}, {type: 'melancolico', value: 'Analítico'}, {type: 'flematico', value: 'Adaptable'}],
                [{type: 'melancolico', value: 'Persistente'}, {type: 'sanguineo', value: 'Juguetón'}, {type: 'colerico', value: 'Persuasivo'}, {type: 'flematico', value: 'Plácido'}],
                [{type: 'flematico', value: 'Sumiso'}, {type: 'melancolico', value: 'Abnegado'}, {type: 'sanguineo', value: 'Sociable'}, {type: 'colerico', value: 'Decidido'}],
                [{type: 'melancolico', value: 'Considerado'}, {type: 'flematico', value: 'Controlado'}, {type: 'colerico', value: 'Competitivo'}, {type: 'sanguineo', value: 'Convincente'}],
                [{type: 'sanguineo', value: 'Entusiasta'}, {type: 'melancolico', value: 'Respetuoso'}, {type: 'flematico', value: 'Reservado'}, {type: 'colerico', value: 'Inventivo'}],
                [{type: 'flematico', value: 'Contento'}, {type: 'melancolico', value: 'Sensible'}, {type: 'colerico', value: 'Autosuficiente'}, {type: 'sanguineo', value: 'Enérgico'}],
                [{type: 'melancolico', value: 'Planificador'}, {type: 'flematico', value: 'Paciente'}, {type: 'colerico', value: 'Positivo'}, {type: 'sanguineo', value: 'Activista'}],
                [{type: 'colerico', value: 'Seguro'}, {type: 'sanguineo', value: 'Espontaneo'}, {type: 'melancolico', value: 'Puntual'}, {type: 'flematico', value: 'Timido'}],
                [{type: 'melancolico', value: 'Ordenado'}, {type: 'flematico', value: 'Atento'}, {type: 'colerico', value: 'Abierto'}, {type: 'sanguineo', value: 'Optimista'}],
                [{type: 'flematico', value: 'Amigable'}, {type: 'melancolico', value: 'Fiel'}, {type: 'sanguineo', value: 'Chistoso'}, {type: 'colerico', value: 'Dominante'}],
                [{type: 'colerico', value: 'Osado'}, {type: 'sanguineo', value: 'Encantador'}, {type: 'flematico', value: 'Diplomático'}, {type: 'melancolico', value: 'Detallista'}],
                [{type: 'sanguineo', value: 'Alegre'}, {type: 'flematico', value: 'Constante'}, {type: 'melancolico', value: 'Culto'}, {type: 'colerico', value: 'Confiado'}],
            ];
        }
    }
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
        border-right: 1px    solid #0404047a;
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
