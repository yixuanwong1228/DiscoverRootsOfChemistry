<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiographiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('biographies')->insert([
            [
                'title' => 'Early Life and Education',
                'timeline' => '1867–1891',
                'description' => 'She excelled in her studies despite facing numerous challenges, including limited access to higher education for women. In 1891, she moved to Paris to study at the University of Paris (Sorbonne), where she pursued physics and mathematics.',
                'imageURL' => '/assets/img/Chemist/MarieCurie.png',
                'chemistID' => 1, // Make sure this ID exists in the `chemists` table
            ],
            [
                'title' => 'Scientific Discoveries and Nobel Prizes',
                'timeline' => '1892–1906',
                'description' => 'In 1895, Marie married fellow physicist Pierre Curie. Together, they discovered the elements polonium and radium in 1898. In 1903, they shared the Nobel Prize in Physics with Henri Becquerel for their work on radioactivity. Marie Curie became the first woman to receive a Nobel Prize.',
                'imageURL' => '/assets/img/Chemist/MarieCurie1.jpg',
                'chemistID' => 1, // Make sure this ID exists in the `chemists` table
            ],
            [
                'title' => 'Advancements in Radioactivity Research',
                'timeline' => '1907–1914',
                'description' => 'After Pierre Curie\'s tragic death in 1906, Marie continued her groundbreaking research. She became the first woman to teach at the Sorbonne. In 1911, she won her second Nobel Prize, this time in Chemistry, for her contributions to the discovery of radium and polonium, making her the first person to win Nobel Prizes in two different scientific fields.',
                'imageURL' => '/assets/img/Chemist/MarieCurie2.jpg',
                'chemistID' => 1, // Make sure this ID exists in the `chemists` table
            ],
            [
                'title' => 'World War I and Mobile X-Ray Units',
                'timeline' => '1914–1919',
                'description' => 'During World War I, Marie Curie developed mobile X-ray units, known as "Little Curies," which provided essential medical imaging services on the battlefield. She trained medical personnel in radiology, significantly contributing to the war effort and medical science.',
                'imageURL' => '/assets/img/Chemist/MarieCurie3.jpg',
                'chemistID' => 1, // Make sure this ID exists in the `chemists` table
            ],
            [
                'title' => 'Later Years and Legacy',
                'timeline' => '1920–1934',
                'description' => 'In her later years, Marie Curie continued her research and advocacy for scientific education. She established the Radium Institute in Paris and Warsaw, fostering further advancements in radiology and nuclear physics. She passed away on July 4, 1934, at the age of 66, due to aplastic anemia, likely caused by prolonged exposure to radiation. Her legacy lives on, with significant contributions to science and medicine.',
                'imageURL' => '/assets/img/Chemist/MarieCurie4.jpg',
                'chemistID' => 1, // Make sure this ID exists in the `chemists` table
            ],
             // Isaac Newton's Biographies
             [
                'title' => 'Early Life and Education',
                'timeline' => '1643–1665',
                'description' => 'Isaac Newton was born on January 4, 1643, in Woolsthorpe, Lincolnshire, England. He was a premature baby and his father died three months before he was born. Newton attended the King\'s School in Grantham and later went to Trinity College, Cambridge in 1661. There, he began his groundbreaking work in mathematics, physics, and astronomy.',
                'imageURL' => '/assets/img/Chemist/IsaacNewton.jpg',
                'chemistID' => 2, // Replace with actual ID for Isaac Newton
            ],
            [
                'title' => 'Principia Mathematica',
                'timeline' => '1666–1687',
                'description' => 'In 1687, Isaac Newton published his seminal work, "Philosophiæ Naturalis Principia Mathematica" ("Mathematical Principles of Natural Philosophy"). This work laid the foundations for classical mechanics and introduced his laws of motion and universal gravitation. It is considered one of the most important scientific books ever written.',
                'imageURL' => '/assets/img/Chemist/IsaacNewton1.jpg',
                'chemistID' => 2, // Replace with actual ID for Isaac Newton
            ],
            [
                'title' => 'Work in Optics',
                'timeline' => '1672–1704',
                'description' => 'Newton made significant contributions to the field of optics, including his work on the nature of light and color. His book "Opticks," published in 1704, detailed his experiments with prisms and the theory of color. He proposed that white light is composed of a spectrum of colors, which can be separated and recombined.',
                'imageURL' => '/assets/img/Chemist/IsaacNewton2.jpg',
                'chemistID' => 2, // Replace with actual ID for Isaac Newton
            ],
            [
                'title' => 'Later Years and Legacy',
                'timeline' => '1705–1727',
                'description' => 'Newton was elected President of the Royal Society in 1703 and was knighted by Queen Anne in 1705. His later years were marked by his work on alchemy and theology. Newton died on March 31, 1727, in Kensington, London. His work laid the groundwork for many scientific fields, and he is widely regarded as one of the greatest scientists in history.',
                'imageURL' => '/assets/img/Chemist/IsaacNewton3.jpg',
                'chemistID' => 2, // Replace with actual ID for Isaac Newton
            ],

            // Amedeo Avogadro's Biographies
            [
                'title' => 'Early Life and Education',
                'timeline' => '1776–1800',
                'description' => 'Amedeo Avogadro was born on August 9, 1776, in Turin, Italy. He was the son of a lawyer and began his studies at the University of Turin, where he initially studied law before shifting to science. In 1800, he graduated with a degree in medicine but was drawn to the field of physics.',
                'imageURL' => '/assets/img/Chemist/AmedeoAvogadro.jpg',
                'chemistID' => 3, // Replace with actual ID for Amedeo Avogadro
            ],
            [
                'title' => 'Avogadro\'s Hypothesis',
                'timeline' => '1811',
                'description' => 'In 1811, Avogadro published his most famous work, "Essay on the Determination of the Relative Masses of the Elementary Parts of Chemical Bodies." In this work, he proposed Avogadro\'s Hypothesis, which states that equal volumes of gases, at the same temperature and pressure, contain an equal number of molecules.',
                'imageURL' => '/assets/img/Chemist/AmedeoAvogadro1.png',
                'chemistID' => 3, // Replace with actual ID for Amedeo Avogadro
            ],
            [
                'title' => 'Contributions to Chemistry',
                'timeline' => '1820s',
                'description' => 'Avogadro continued his work on gas laws and molecular theory throughout the 1820s. He made significant contributions to the understanding of molecular structure and the concept of the mole. His work was instrumental in advancing the field of physical chemistry.',
                'imageURL' => '/assets/img/Chemist/AmedeoAvogadro2.png',
                'chemistID' => 3, // Replace with actual ID for Amedeo Avogadro
            ],
            [
                'title' => 'Later Years and Legacy',
                'timeline' => '1830–1856',
                'description' => 'Avogadro was appointed professor of mathematical physics at the University of Turin in 1833. He continued to work on various scientific problems until his death on July 9, 1856. Avogadro\'s work was recognized posthumously, and his number, Avogadro\'s number, became a fundamental constant in chemistry.',
                'imageURL' => '/assets/img/Chemist/AmedeoAvogadro3.png',
                'chemistID' => 3, // Replace with actual ID for Amedeo Avogadro
            ],
        ]);
    }
}
