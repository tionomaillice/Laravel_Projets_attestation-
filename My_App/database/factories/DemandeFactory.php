<?php

namespace Database\Factories;

use App\Models\Demande;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;


class DemandeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Demande::class;

    public function definition()
    {
        $acteDeNaissancePath = Storage::putFile('demandes', $this->faker->file('/path/to/pdf/directory', storage_path('app/public/demandes'), false));
        $recueQuittancePath = Storage::putFile('demandes', $this->faker->file('/path/to/pdf/directory', storage_path('app/public/demandes'), false));
        $lettreDemandePath = Storage::putFile('demandes', $this->faker->file('/path/to/pdf/directory', storage_path('app/public/demandes'), false));
        $quitusPath = Storage::putFile('demandes', $this->faker->file('/path/to/pdf/directory', storage_path('app/public/demandes'), false));
        $quittancePath = Storage::putFile('demandes', $this->faker->file('/path/to/pdf/directory', storage_path('app/public/demandes'), false));

        return [
            'statu' => $this->faker->randomElement(['En attente', 'Approuvée', 'Rejetée']),
            'acte_de_naissance' => $acteDeNaissancePath,
            'recue_quittance' => $recueQuittancePath,
            'lettre_de_demande' => $lettreDemandePath,
            'quitus' => $quitusPath,
            'quittance' => $quittancePath,
            'created_at'=> now()

            //
        ];
    }
}
