<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChemistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('chemists')->insert([
            [
            'name' => 'Marie Curie',
            'intro' => 'Marie Curie was a pioneering physicist and chemist who made groundbreaking contributions to the fields of radioactivity and atomic science. Born in Warsaw, Poland, in 1867, Curie became the first woman to win a Nobel Prize and remains the only person to win Nobel Prizes in two different scientific fields: Physics and Chemistry.
                        Her discoveries of the radioactive elements polonium and radium, along with her development of techniques for isolating radioactive isotopes, fundamentally transformed our understanding of radioactivity and its potential applications.
                         Curie\'s research laid the groundwork for the development of X-ray machines and radiation therapy for cancer treatment, making her one of the most influential scientists in history.',
            'birthdate' => '1867-11-07',
            'deathdate' => '1934-07-04',
            'nationality' => 'Polish-French',
            'institution' => 'University of Paris',
            'birthPlace' => 'Warsaw, Poland',
            'deathPlace' => 'Passy, France',
            'deathAge' => 66,
            'profilePicture' => '/assets/img/Chemist/MarieCurie.png', // Add the path if you have an image
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
                'name' => 'Isaac Newton',
                'intro' => 'Isaac Newton was a mathematician and physicist who is widely recognized for his work in mathematics, optics, and gravitation. Born in 1643 in Woolsthorpe, Lincolnshire, England, Newton formulated the laws of motion and universal gravitation, which laid the groundwork for classical mechanics. His work, "Philosophiæ Naturalis Principia Mathematica," published in 1687, is considered one of the most influential books in the history of science. Newton also made significant contributions to the study of light and color, and he invented the reflecting telescope.',
                'birthdate' => '1643-01-04',
                'deathdate' => '1727-03-31',
                'nationality' => 'English',
                'institution' => 'University of Cambridge',
                'birthPlace' => 'Woolsthorpe, England',
                'deathPlace' => 'Kensington, England',
                'deathAge' => 84,
                'profilePicture' => 'assets/img/Chemist/IsaacNewton.jpg', // Corrected path
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Amedeo Avogadro',
                'intro' => 'Amedeo Avogadro was an Italian scientist known for his contributions to molecular theory. Born in 1776 in Turin, Italy, Avogadro is best known for Avogadro\'s law, which states that equal volumes of gases, at the same temperature and pressure, contain an equal number of molecules. This principle is fundamental in the field of chemistry and has led to the concept of the Avogadro constant. His work laid the foundation for the development of the molecular theory of gases and helped define the concept of the mole.',
                'birthdate' => '1776-08-09',
                'deathdate' => '1856-07-09',
                'nationality' => 'Italian',
                'institution' => 'University of Turin',
                'birthPlace' => 'Turin, Italy',
                'deathPlace' => 'Turin, Italy',
                'deathAge' => 79,
                'profilePicture' => 'assets/img/Chemist/AmedeoAvogadro.jpg', // Ensure the image is in the directory
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
