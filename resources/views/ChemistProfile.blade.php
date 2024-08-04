@extends('layout.headerfooter')
<link href="/assets/css/ChemistProfile.css" rel="stylesheet">
@section('content')
<style>
   #about {
   background-color: #dee2d9;
   color:black;
   }
</style>

<!-- ======= About Section ======= -->
<section id="about" class="about" style="margin-top:150px;">
   <div class="container">
      <div class="row gy-4 justify-content-center">
         <div class="col-lg-3">
            <img src="/assets/img/Chemist/MarieCurie.png" class="img-fluid" alt="">
         </div>
         <div class="col-lg-9 content">
            <h1>Marie Curie</h1>
            <div class="row">
               <div class="col-lg-5">
                  <ul>
                     <li><i class="bi bi-chevron-right"></i> <strong>Born:</strong> <span>7-11-1867
                        </span>
                     </li>
                     <li><i class="bi bi-chevron-right"></i> <strong>Died:</strong> <span>4-7-1934
                        </span>
                     </li>
                     <li><i class="bi bi-chevron-right"></i> <strong>Nationality:</strong> <span>Polish</span></li>
                  </ul>
               </div>
               <div class="col-lg-7">
                  <ul>
                     <li><i class="bi bi-chevron-right"></i> <strong>Institution:</strong> <span>University of Paris</span></li>
                     <li><i class="bi bi-chevron-right"></i> <strong>Born Place:</strong> <span>Warsaw, Poland</span></li>
                     <li><i class="bi bi-chevron-right"></i> <strong>Death Age:</strong> <span>66</span></li>
                  </ul>
               </div>
            </div>
            <p class="py-3">
               Marie Curie was a pioneering physicist and chemist who made groundbreaking contributions to the fields of radioactivity and atomic science. Born in Warsaw, Poland, in 1867, Curie became the first woman to win a Nobel Prize and remains the only person to win Nobel Prizes in two different scientific fields: Physics and Chemistry. Her discoveries of the radioactive elements polonium and radium, along with her development of techniques for isolating radioactive isotopes, fundamentally transformed our understanding of radioactivity and its potential applications. Curie's research laid the groundwork for the development of X-ray machines and radiation therapy for cancer treatment, making her one of the most influential scientists in history.
            </p>
         </div>
      </div>
   </div>
</section>
<!-- End About Section -->
<section class="design-section">
   <div class="timeline">
      <div class="timeline-year">
         <strong>Early Life and Education</strong>
         <p>1867–1891</p>
      </div>
      <div class="timeline-middle">
         <div class="timeline-circle"></div>
      </div>
      <div class="timeline-component timeline-content">
         <div class="row">
            <div class="col-12">
               <img class="img-fluid float-left biography-image" src="/assets/img/Chemist/MarieCurie.png" alt="image" style="max-width:200px; margin-right: 20px;">
               <div class="biography-description">
               She excelled in her studies despite facing numerous challenges, including limited access to higher education for women. In 1891, she moved to Paris to study at the University of Paris (Sorbonne), where she pursued physics and mathematics.
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="timeline">
      <div class="timeline-year">
         <strong>Scientific Discoveries and Nobel Prizes</strong>
         <p>1892–1906</p>
      </div>
      <div class="timeline-middle">
         <div class="timeline-circle"></div>
      </div>
      <div class="timeline-component timeline-content">
         <div class="row">
            <div class="col-12">
               <img class="img-fluid float-left biography-image" src="/assets/img/Chemist/MarieCurie.png" alt="image" style="max-width:200px; margin-right: 20px;">
               <div class="biography-description">
               In 1895, Marie married fellow physicist Pierre Curie. Together, they discovered the elements polonium and radium in 1898. In 1903, they shared the Nobel Prize in Physics with Henri Becquerel for their work on radioactivity. Marie Curie became the first woman to receive a Nobel Prize.
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="timeline">
      <div class="timeline-year">
         <strong>Advancements in Radioactivity Research</strong>
         <p>1907–1914</p>
      </div>
      <div class="timeline-middle">
         <div class="timeline-circle"></div>
      </div>
      <div class="timeline-component timeline-content">
         <div class="row">
            <div class="col-12">
               <img class="img-fluid float-left biography-image" src="/assets/img/Chemist/MarieCurie.png" alt="image" style="max-width:200px; margin-right: 20px;">
               <div class="biography-description">
               After Pierre Curie's tragic death in 1906, Marie continued her groundbreaking research. She became the first woman to teach at the Sorbonne. In 1911, she won her second Nobel Prize, this time in Chemistry, for her contributions to the discovery of radium and polonium, making her the first person to win Nobel Prizes in two different scientific fields.
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="timeline">
      <div class="timeline-year">
         <strong>World War I and Mobile X-Ray Units</strong>
         <p>1914–1919</p>
      </div>
      <div class="timeline-middle">
         <div class="timeline-circle"></div>
      </div>
      <div class="timeline-component timeline-content">
         <div class="row">
            <div class="col-12">
               <img class="img-fluid float-left biography-image" src="/assets/img/Chemist/MarieCurie.png" alt="image" style="max-width:200px; margin-right: 20px;">
               <div class="biography-description">
               During World War I, Marie Curie developed mobile X-ray units, known as "Little Curies," which provided essential medical imaging services on the battlefield. She trained medical personnel in radiology, significantly contributing to the war effort and medical science.
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="timeline">
      <div class="timeline-year">
         <strong> Later Years and Legacy</strong>
         <p>1920–1934</p>
      </div>
      <div class="timeline-middle">
         <div class="timeline-circle"></div>
      </div>
      <div class="timeline-component timeline-content">
         <div class="row">
            <div class="col-12">
               <img class="img-fluid float-left biography-image" src="/assets/img/Chemist/MarieCurie.png" alt="image" style="max-width:200px; margin-right: 20px;">
               <div class="biography-description">
               In her later years, Marie Curie continued her research and advocacy for scientific education. She established the Radium Institute in Paris and Warsaw, fostering further advancements in radiology and nuclear physics. She passed away on July 4, 1934, at the age of 66, due to aplastic anemia, likely caused by prolonged exposure to radiation. Her legacy lives on, with significant contributions to science and medicine.
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

@endsection