<?php

namespace Database\Factories;

use App\Enums\EstadoCivil;
use App\Enums\Sexo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pessoa>
 */
class PessoaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome' => $this->faker->name,
            'data_nascimento' => $this->faker->date(),
            'sexo' => $this->faker->randomElement([Sexo::MASCULINO->value, Sexo::FEMININO->value, Sexo::OUTRO->value]),
            'estado_civil' => $this->faker->randomElement([EstadoCivil::SOLTEIRO->value, EstadoCivil::CASADO->value, EstadoCivil::DIVORCIADO->value, EstadoCivil::VIUVO->value, EstadoCivil::SEPARADO->value]),
            'nome_pai' => $this->faker->name('male'),
            'nome_mae' => $this->faker->name('female'),
            'cpf' => $this->faker->unique()->cpf,
        ];
    }
}
