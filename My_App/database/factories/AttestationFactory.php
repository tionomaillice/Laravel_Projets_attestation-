<?php

namespace Database\Factories;

use App\Models\Attestation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;


class AttestationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Attestation::class;

    public function definition()
    {
        $pdfPath = Storage::putFile('attestations', $this->faker->file('/path/to/pdf/directory', storage_path('app/public/attestations'), false));

        return [
            'mention' => $this->faker->randomElement(['Mention A', 'Mention B', 'Mention C']),
            'fichierpdf' => $pdfPath,
            'annee' => $this->faker->year(),
        ];
    }

    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                // Ajoutez les autres attributs que vous souhaitez définir pour une attestation non vérifiée
            ];
        });
    }

}
