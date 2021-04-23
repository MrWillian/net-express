<?php

use Illuminate\Database\Seeder;
use Domain\Company\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Company::class)->create([
            'id' => 1,
            'company_name' => 'Mr. Code',
            'fantasy' => 'Mr. Code Corporation LTDA',
            'email' => 'rh.mrcode@mrcode.com',
            'site' => 'mrcode.com',
            'document' => '89602202000117',
            'phone_number' => '7736491041',
            'state_registration' => '598992-44',
            'responsible_name' => 'Willian Marciel Soares dos Santos',
            'responsible_office' => 'Founder',
        ]);

        factory(Company::class)->create([
            'id' => 2,
            'company_name' => 'Casa do Produtor Rural',
            'fantasy' => 'Casa do Produtor Rural LTDA',
            'email' => 'administrator@casadoprodutor.com.br',
            'site' => 'casadoprodutor.com.br',
            'document' => '76752249000115',
            'phone_number' => '7736491041',
            'state_registration' => '922960-14',
            'responsible_name' => 'Willian Marciel Soares dos Santos',
            'responsible_office' => 'CEO',
        ]);
    }
}
