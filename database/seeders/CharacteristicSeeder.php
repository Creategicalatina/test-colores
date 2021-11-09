<?php

namespace Database\Seeders;

use App\Models\Characteristic;
use App\Models\Group;
use Illuminate\Database\Seeder;

class CharacteristicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $sanguineos = collect([
            ['type' => Characteristic::SANGUINEO, 'name' => 'Animado', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Juguetón', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Sociable', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Convincente', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Entusiasta', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Enérgico', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Activista', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Espontaneo', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Optimista', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Chistoso', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Encantador', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Alegre', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Inspirador', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Calido', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Cordial', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Hablador', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Vivaz', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Listo', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Popular', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Jovial', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Estridente', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Indisciplinado', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Repetidor', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Olvidadizo', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Interrumpe', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Imprevisible', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Descuidado', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Tolerante', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Iracundo', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Ingenuo', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Egocentrico', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Hablador', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Desorganizado', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Inconsistente', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Desordenado', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Ostentoso', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Emocional', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Atolondrado', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Inquieto', 'description'=>null],
            ['type' => Characteristic::SANGUINEO, 'name' => 'Variable', 'description'=>null],
        ]);

        $colericos = collect([
            ['type' => Characteristic::COLERICO, 'name' => 'Aventurero', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Persuasivo', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Decidido', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Competitivo', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Inventivo', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Autosuficiente', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Positivo', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Seguro', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Abierto', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Dominante', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Osado', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Confiado', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Independiente', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Decisivo', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Instigador', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Tenaz', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Lider', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Jefe', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Productivo', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Atrevido', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Mandón', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Antipático', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Resistente', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Franco', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Impaciente', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Frío', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Terco', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Orgulloso', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Argumentador', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Nervioso', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Adicto al trabajo', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Indiscreto', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Dominante', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Intolerante', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Manipulador', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Testarudo', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Prepotente', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Malgeniado', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Precipitado', 'description'=>null],
            ['type' => Characteristic::COLERICO, 'name' => 'Astuto', 'description'=>null],
        ]);

        $melancolicos = collect([
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Analítico', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Persistente', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Abnegado', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Considerado', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Respetuoso', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Sensible', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Planificador', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Puntual', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Ordenado', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Fiel', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Detallista', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Culto', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Idealista', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Introspectivo', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Músico', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Considerado', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Leal', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Organizado', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Perfeccionista', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Se comporta bien', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Apocado', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Sin entusiasmo', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Resentido', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Exigente', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Inseguro', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'No comprometido', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Dificil contentar', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Pesimista', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Sin motivación', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Negativo', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Abstraído', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Susceptible', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Deprimido', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Introvertido', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Moroso', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Esceptico', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Solitario', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Suspicaz', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Vengativo', 'description'=>null],
            ['type' => Characteristic::MELANCOLICO, 'name' => 'Comprometido', 'description'=>null],
        ]);

        $flematicos = collect([
            ['type' => Characteristic::FLEMATICO, 'name' => 'Adaptable', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Plácido', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Sumiso', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Controlado', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Reservado', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Contento', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Paciente', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Timido', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Atento', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Amigable', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Diplomático', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Constante', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Inofensivo', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Humor seco', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Conciliador', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Tolerante', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Escucha', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Contento', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Tolerante', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Equilibrado', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Soso', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Implacable', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Reticente', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Temeroso', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Indeciso', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Impopular', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Vacilante', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Insípido', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Taciturno', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Desprendido', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Ansioso', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Tímido', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Dudoso', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Indiferente', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Quejumbroso', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Lento', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Perezoso', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Sin ambición', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Poca Voluntad', 'description'=>null],
            ['type' => Characteristic::FLEMATICO, 'name' => 'Crítico', 'description'=>null]
        ]);


        $sanguineos = $sanguineos->map(function ($characteristic){
            return Characteristic::factory()->create($characteristic)->id;
        });

        $colericos = $colericos->map(function ($characteristic){
            return Characteristic::factory()->create($characteristic)->id;
        });

        $melancolicos = $melancolicos->map(function ($characteristic){
            return Characteristic::factory()->create($characteristic)->id;
        });

        $flematicos = $flematicos->map(function ($characteristic){
            return Characteristic::factory()->create($characteristic)->id;
        });

        for ($i=0; $i < 40; $i++) {
            $group = new Group();
            $group->order = $i+1;
            $group->save();
            $group->characteristics()->sync(array(
                $sanguineos[$i],
                $colericos[$i],
                $melancolicos[$i],
                $flematicos[$i]
            ));
        }
    }
}
