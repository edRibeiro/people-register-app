<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Validator::extend('cpf', function ($attribute, $value, $parameters, $validator) {
            // Remove qualquer caractere que não seja número do CPF
            $cpf = preg_replace('/[^0-9]/', '', $value);

            // Verifica se o CPF possui 11 dígitos
            if (strlen($cpf) != 11) {
                return false;
            }

            // Verifica se todos os dígitos são iguais
            if (preg_match('/(\d)\1{10}/', $cpf)) {
                return false;
            }

            // Calcula os dígitos verificadores
            for ($i = 9; $i < 11; $i++) {
                $sum = 0;
                for ($j = 0; $j < $i; $j++) {
                    $sum += $cpf[$j] * (($i + 1) - $j);
                }
                $remainder = $sum % 11;
                $digit = ($remainder < 2) ? 0 : 11 - $remainder;
                if ($cpf[$i] != $digit) {
                    return false;
                }
            }

            return true;
        });

        Validator::extend('cpf_format', function ($attribute, $value, $parameters, $validator) {
            return preg_match('/^\d{3}\.\d{3}\.\d{3}-\d{2}$/', $value);
        });
    }
}
