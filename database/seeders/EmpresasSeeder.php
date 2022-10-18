<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Empresa;

class EmpresasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Empresa::create(["razao_social" => "Clinica Veterinaria Fernanda Witzgall", "nome_fantasia" => "Pronto Pet", "cnpj" => "12312312312312", "telefone" => "54984117424", "endereco" => "Rua Torres Gonçalves, 156 - Erechim", "atividade" => "CV"]);
        Empresa::create(["razao_social" => "Lavore PetShop LTDA", "nome_fantasia" => "Faro PetShop", "cnpj" => "32132132132132", "telefone" => "5433215540", "endereco" => "Rua Torres Gonçalves, 156 - Erechim", "atividade" => "PS"]);
    }
}
