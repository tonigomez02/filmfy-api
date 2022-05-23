<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comments = [
            [
                'movies_id' => 2,
                'users_id' => 1,
                'title' => 'Una película increíble',
                'body' => 'El suspense de esta historía te pone la piel de gallina. El reparto es inmejorable',
                'argument' => 9,
                'actors' => 10,
                'image' => 7,
                'sound' => 8,
                'montage' => 8,
                'effects' => 8,
                'likes' => 51
            ],
            [
                'movies_id' => 101,
                'users_id' => 3,
                'title' => 'Una película guapísima',
                'body' => 'Me lo paso muy bien cada vez que la veo. De mis preferidas',
                'argument' => 10,
                'actors' => 10,
                'image' => 10,
                'sound' => 10,
                'montage' => 10,
                'effects' => 10,
                'likes' => 2222
            ],
            [
                'movies_id' => 203,
                'users_id' => 1,
                'title' => 'No me canso de verla',
                'body' => '¡Volver al futuro a ver esta película una y otra vez! La película lo inicio todo y envejece perfectamente como un clásico de la comedia y la ciencia ficción, todo gracias a unos efectos especiales chispeantes, un puñado de lineás y diálogos fenomenales',
                'argument' => 9,
                'actors' => 10,
                'image' => 9,
                'sound' => 8,
                'montage' => 8,
                'effects' => 9,
                'likes' => 29
            ],
            [
                'movies_id' => 71,
                'users_id' => 2,
                'title' => 'Esperaba más',
                'body' => 'La fórmula de Disney repetida una vez más sin aportar frescura o novedades a un producto que tienen muy explotado',
                'argument' => 4,
                'actors' => 3,
                'image' => 6,
                'sound' => 5,
                'montage' => 7,
                'effects' => 5,
                'likes' => 3
            ],
            [
                'movies_id' => 111,
                'users_id' => 1,
                'title' => 'Es que no puedo...',
                'body' => 'Desde que vi el deporte ese de la peña persiguiendo una pelota en escoba... es que no puedo con ello más. Horrible como siempre el Harry',
                'argument' => 1,
                'actors' => 1,
                'image' => 1,
                'sound' => 1,
                'montage' => 1,
                'effects' => 2,
                'likes' => 0
            ]
        ];
    }
}
