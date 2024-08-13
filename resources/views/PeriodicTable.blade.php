@extends('layout.headerfooter')

<link href="/assets/css/PeriodicTable.css" rel="stylesheet">

@section('content')
<style>
    .hero {
  width: 100%;
  min-height: 30vh;
  background: url('/assets/img/virtuallabbackground.png') no-repeat center center;
  background-size: cover;
  position: relative;
  padding: 140px 0 60px 0;
}
</style>
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade" data-aos-delay="1500">
    <div class="container">
      <div class="row justify-content-center">
        <div class="text-center">
          <h2>Periodic Table</h2>
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <div class="mt-4">
  <table border="1px" class="bg-white">
                    
      
                <tr>
                    <th colspan="18">
                    <div class="legend-box">
                        <h2>Category Key:</h2>
                        <ul class="legend-list">
                            <li class="text-dark"><span class="diatomic-nonmetal"></span> Diatomic Nonmetal</li>
                            <li class="text-dark"><span class="alkali-metal"></span> Alkali Metal</li>
                            <li class="text-dark"><span class="metalloid"></span> Metalloid</li>
                            <li class="text-dark"><span class="post-transition-metal"></span> Post-Transition Metal</li>
                            <li class="text-dark"><span class="lanthanide"></span> Lanthanide</li>
                            <li class="text-dark"><span class="noble-gas"></span> Noble Gas</li>
                            <li class="text-dark"><span class="alkaline-earth-metal"></span> Alkaline Earth Metal</li>
                            <li class="text-dark"><span class="polyatomic-nonmetal"></span> Polyatomic Nonmetal</li>
                            <li class="text-dark"><span class="transition-metal"></span> Transition Metal</li>
                            <li class="text-dark"><span class="actinide"></span> Actinide</li>
                        </ul>
                    </div>
                    </th>
                </tr>
                    <tr style="font-size: large;">
                        <td class="element" bgcolor="#eddda8" data-element="H" data-number="1">1<br><abbr title="Hydrogen"> H</abbr></td>
                        <th colspan="16" style="empty-cells: hide;"></th>
                        <td class="element" bgcolor="#e8e3ff" data-element="He">2<br><abbr title="Helium">He</abbr></td>
                    </tr>
                    <tr style="font-size: large;">
                        <td class="element" bgcolor="#df9fe1" data-element="Li">3<br><abbr title="Lithium"> Li</abbr></td>
                        <td class="element" bgcolor="#99d3ee" data-element="Be">4<br><abbr title="Berylium">Be</abbr></td>
                        <td colspan="10" style="empty-cells: hide;"></td>
                        <td class="element" bgcolor="#c6980e" data-element="B">5<br><abbr title="Boron">B</abbr></td>
                        <td class="element" bgcolor="orange" data-element="C">6<br><abbr title="Carbon">C</abbr></td>
                        <td class="element" bgcolor="#eddda8" data-element="N" style="color: green;">7<br><abbr title="Nitrogen">N</abbr></td>
                        <td class="element" bgcolor="#eddda8" data-element="O" style="color: green;">8<br><abbr title="Oxygen">O</abbr></td>
                        <td class="element" bgcolor="#eddda8" data-element="F" style="color: green;">9<br><abbr title="Florine">F</abbr></td>
                        <td class="element" bgcolor="#e8e3ff" data-element="Ne" style="color: green;">10<br><abbr title="Neon">Ne</abbr></td>
                    </tr>
                    <tr style="font-size: large;">
                        <td class="element" bgcolor="#df9fe1" data-element="Na">11<br><abbr title="Sodium">Na</abbr></td>
                        <td class="element" bgcolor="#99d3ee" data-element="Mg">12<br><abbr title="Magnesium">Mg</abbr></td>
                        <td colspan="10" style="empty-cells: hide;"></td>
                        <td class="element" bgcolor="#cfeb88" data-element="Al">13<br><abbr title="Auminium">Al</abbr></td>
                        <td class="element" bgcolor="#c6980e" data-element="Si">14<br><abbr title="Silicon">Si</abbr></td>
                        <td class="element" bgcolor="orange" data-element="P">15<br><abbr title="Phosphorus">P</abbr></td>
                        <td class="element" bgcolor="orange" data-element="S">16<br><abbr title="Sulphur">S</abbr></td>
                        <td class="element" bgcolor="#eddda8" style="color: green;" data-element="Cl">17<br><abbr title="Chlorine">Cl</abbr></td>
                        <td class="element" bgcolor="#e8e3ff" style="color: green;" data-element="Ar">18<br><abbr title="Argon">Ar</abbr></td>
                    </tr>
                    <tr style="font-size: large;">
                        <td class="element" bgcolor="#df9fe1" data-element="K">19<br><abbr title="Potassium">K</abbr></td>
                        <td class="element" bgcolor="#99d3ee" data-element="Ca">20<br><abbr title="Calcium">Ca</abbr></td>
                        <td class="element" bgcolor="#fcf389" data-element="Sc">21<br><abbr title="Scandium">Sc</abbr></td>
                        <td class="element" bgcolor="#fcf389" data-element="Ti">22<br><abbr title="Titanium">Ti</abbr></td>
                        <td class="element" bgcolor="#fcf389" data-element="V">23<br><abbr title="Vanadium">V</abbr></td>
                        <td class="element" bgcolor="#fcf389" data-element="Cr">24<br><abbr title="Cromium">Cr</abbr></td>
                        <td class="element" bgcolor="#fcf389" data-element="Mn">25<br><abbr title="Manganese">Mn</abbr></td>
                        <td class="element" bgcolor="#fcf389" data-element="Fe">26<br><abbr title="Iron">Fe</abbr></td>
                        <td class="element" bgcolor="#fcf389" data-element="Co">27<br><abbr title="Cobalt">Co</abbr></td>
                        <td class="element" bgcolor="#fcf389" data-element="Ni">28<br><abbr title="Nickel">Ni</abbr></td>
                        <td class="element" bgcolor="#fcf389" data-element="Cu">29<br><abbr title="Copper">Cu</abbr></td>
                        <td class="element" bgcolor="#fcf389" data-element="Zn">30<br><abbr title="Zinc">Zn</abbr></td>
                        <td class="element" bgcolor="#cfeb88" style="color: blue;"data-element="Ga">31<br><abbr title="Gallium">Ga</abbr></td>
                        <td class="element" bgcolor="#c6980e" data-element="Ge">32<br><abbr title="Germanium">Ge</abbr></td>
                        <td class="element" bgcolor="#c6980e" data-element="As">33<br><abbr title="Arsenic">As</abbr></td>
                        <td class="element" bgcolor="orange" data-element="Se">34<br><abbr title="Selenium">Se</abbr></td>
                        <td class="element"bgcolor="#eddda8" style="color: blue;" data-element="Br">35<br><abbr title="Bromine">Br</abbr></td>
                        <td class="element" bgcolor="#e8e3ff" style="color: green;" data-element="Kr">36<br><abbr title="Krypton">Kr</abbr></td>
                    </tr>
                    <tr style="font-size: large;">
                        <td class="element" bgcolor="#df9fe1" data-element="Rb">37<br><abbr title="Rubidium" >Rb</abbr></td>
                        <td class="element" bgcolor="#99d3ee" data-element="Sr">38<br><abbr title="Strontium" >Sr</abbr></td>
                        <td class="element" bgcolor="#fcf389" data-element="Y">39<br><abbr title="Yttrium" >Y</abbr></td>
                        <td class="element" bgcolor="#fcf389" data-element="Zr">40<br><abbr title="Zirconium">Zr</abbr></td>
                        <td class="element" bgcolor="#fcf389" data-element="Nb">41<br><abbr title="Niobium" >Nb</abbr></td>
                        <td class="element" bgcolor="#fcf389" data-element="Mo">42<br><abbr title="Molybdenum" >Mo</abbr></td>
                        <td class="element" bgcolor="#fcf389" data-element="Tc">43<br><abbr title="Technetium" >Tc</abbr></td>
                        <td class="element" bgcolor="#fcf389" data-element="Ru">44<br><abbr title="Ruthenium" >Ru</abbr></td>
                        <td class="element"bgcolor="#fcf389" data-element="Rh">45<br><abbr title="Rhodium" >Rh</abbr></td>
                        <td class="element" bgcolor="#fcf389" data-element="Pd">46<br><abbr title="Palladium" >Pd</abbr></td>
                        <td class="element" bgcolor="#fcf389" data-element="Ag">47<br><abbr title="Silver" >Ag</abbr></td>
                        <td class="element" bgcolor="#fcf389" data-element="Cd">48<br><abbr title="Cadmium" >Cd</abbr></td>
                        <td class="element" bgcolor="#cfeb88" data-element="In">49<br><abbr title="Indium" >In</abbr></td>
                        <td class="element" bgcolor="#cfeb88" data-element="Sn">50<br><abbr title="Tin" >Sn</abbr></td>
                        <td class="element" bgcolor="#c6980e" data-element="Sb">51<br><abbr title="Antimony" data-element="Sb">Sb</abbr></td>
                        <td class="element" bgcolor="#c6980e" data-element="Te">52<br><abbr title="Tellurium" >Te</abbr></td>
                        <td class="element" bgcolor="#eddda8" data-element="I">53<br><abbr title="Iodine">I</abbr></td>
                        <td class="element" bgcolor="#e8e3ff" style="color: green;" data-element="Xe">54<br><abbr title="Xenon">Xe</abbr></td>
                    </tr>
                    <tr style="font-size: large;">
                        <td class="element" bgcolor="#df9fe1" style="color: blue;"data-element="Cs">55<br><abbr title="Ceasium">Cs</abbr></td>
                        <td class="element" bgcolor="#99d3ee" data-element="Ba">56<br><abbr title="Barium" >Ba</abbr></td>
                        <td style="color:black; border:1px solid black;">57-71</td>
                        <td class="element" bgcolor="#fcf389" data-element="Hf">72<br><abbr title="Hafnium" >Hf</abbr></td>
                        <td class="element" bgcolor="#fcf389" data-element="Ta">73<br><abbr title="Tantalum" >Ta</abbr></td>
                        <td class="element" bgcolor="#fcf389" data-element="W">74<br><abbr title="Tungsten" >W</abbr></td>
                        <td class="element" bgcolor="#fcf389" data-element="Re">75<br><abbr title="Rhenium" >Re</abbr></td>
                        <td class="element" bgcolor="#fcf389" data-element="Os">76<br><abbr title="Osmium" >Os</abbr></td>
                        <td class="element" bgcolor="#fcf389" data-element="Ir">77<br><abbr title="Iridium" >Ir</abbr></td>
                        <td class="element" bgcolor="#fcf389" data-element="Pt">78<br><abbr title="Platium" >Pt</abbr></td>
                        <td class="element" bgcolor="#fcf389" data-element="Au">79<br><abbr title="Gold" >Au</abbr></td>
                        <td class="element" bgcolor="#fcf389" style="color: blue;" data-element="Hg">80<br><abbr title="Mercury">Hg</abbr></td>
                        <td class="element" bgcolor="#cfeb88" data-element="Tl">81<br><abbr title="Thallium" >Tl</abbr></td>
                        <td class="element" bgcolor="#cfeb88" data-element="Pb">82<br><abbr title="Lead" >Pb</abbr></td>
                        <td class="element" bgcolor="#cfeb88" data-element="Bi">83<br><abbr title="Bismuth" >Bi</abbr></td>
                        <td class="element" bgcolor="#cfeb88" data-element="Po">84<br><abbr title="Polonium" >Po</abbr></td>
                        <td class="element" bgcolor="#c6980e" data-element="At">85<br><abbr title="Astatine" >At</abbr></td>
                        <td class="element" bgcolor="#e8e3ff" style="color: green;" data-element="Rn">86<br><abbr title="Radon">Rn</abbr></td>
                    </tr>
                    <tr style="font-size: large;">
                        <td class="element" bgcolor="#df9fe1" style="color: blue;" data-element="Fr">87<br><abbr title="Francium">Fr</abbr></td>
                        <td class="element" bgcolor="#99d3ee" data-element="Ra">88<br><abbr title="Radium" >Ra</abbr></td>
                        <td style="color:black; border:1px solid black;">89-103</td>
                        <td class="element" bgcolor="#fcf389" data-element="Rf">104<br><abbr title="Rutherfordium" >Rf</abbr></td>
                        <td class="element" bgcolor="#fcf389" data-element="Db">105<br><abbr title="Dubnium" >Db</abbr></td>
                        <td class="element" bgcolor="#fcf389" data-element="Sg">106<br><abbr title="Seaborgium" >Sg</abbr></td>
                        <td class="element" bgcolor="#fcf389" data-element="Bh">107<br><abbr title="Bohrium" >Bh</abbr></td>
                        <td class="element" bgcolor="#fcf389" data-element="Hs">108<br><abbr title="Hassium" >Hs</abbr></td>
                        <td class="element"  style="color: rgb(98, 95, 95);" data-element="Mt">109<br><abbr title="Meitnerium" >Mt</abbr></td>
                        <td class="element"  style="color: rgb(98, 95, 95);" data-element="Ds">110<br><abbr title="Darmstadtium" >Ds</abbr></td>
                        <td class="element"  style="color: rgb(98, 95, 95);" data-element="Rg">111<br><abbr title="Roentgenium" >Rg</abbr></td>
                        <td class="element" bgcolor="#fcf389" data-element="Cn">112<br><abbr title="Copernicium">Cn</abbr></td>
                        <td class="element" style="color: rgb(98, 95, 95);" data-element="Nh">113<br><abbr title="Nihonium" >Nh</abbr></td>
                        <td class="element" bgcolor="#cfeb88"  data-element="Fl">114<br><abbr title="Flerovium" >Fl</abbr></td>
                        <td class="element" style="color: rgb(98, 95, 95);" data-element="Mc">115<br><abbr title="Moscovium" >Mc</abbr></td>
                        <td class="element" style="color: rgb(98, 95, 95);" data-element="Lv">116<br><abbr title="Livermorium" >Lv</abbr></td>
                        <td class="element" style="color: rgb(98, 95, 95);" data-element="Ts">117<br><abbr title="Tennessine" >Ts</abbr></td>
                        <td class="element" style="color: rgb(98, 95, 95);" data-element="Og">118<br><abbr title="Oganesson" >Og</abbr></td>
                    </tr>
                    <tr style="font-size: large;">
                        <td rowspan="2" colspan="2" style="empty-cells: hide;"></td>
                        <td class="element" bgcolor="#feeff2" data-element="La">57<br><abbr title="Lanthanum" >La</abbr></td>
                        <td class="element" bgcolor="#feeff2" data-element="Ce">58<br><abbr title="Cerium" >Ce</abbr></td>
                        <td class="element" bgcolor="#feeff2" data-element="Pr">59<br><abbr title="Praseodymium" >Pr</abbr></td>
                        <td class="element" bgcolor="#feeff2" data-element="Nd">60<br><abbr title="Neodymium" >Nd</abbr></td>
                        <td class="element" bgcolor="#feeff2" data-element="Pm">61<br><abbr title="Promethium" >Pm</abbr></td>
                        <td class="element" bgcolor="#feeff2" data-element="Sm">62<br><abbr title="Samarium" >Sm</abbr></td>
                        <td class="element" bgcolor="#feeff2" data-element="Eu">63<br><abbr title="Europium" >Eu</abbr></td>
                        <td class="element" bgcolor="#feeff2" data-element="Gd">64<br><abbr title="Gadolinium" >Gd</abbr></td>
                        <td class="element" bgcolor="#feeff2" data-element="Tb">65<br><abbr title="Terbium" >Tb</abbr></td>
                        <td class="element" bgcolor="#feeff2" data-element="Dy">66<br><abbr title="Dysprosium" >Dy</abbr></td>
                        <td class="element" bgcolor="#feeff2" data-element="Ho">67<br><abbr title="Holmium" >Ho</abbr></td>
                        <td class="element" bgcolor="#feeff2" data-element="Er">68<br><abbr title="Erbium" >Er</abbr></td>
                        <td class="element" bgcolor="#feeff2" data-element="Tm">69 <br><abbr title="Thulium" >Tm</abbr></td>
                        <td class="element" bgcolor="#feeff2" data-element="Yb">70<br><abbr title="Yttterbium" >Yb</abbr></td>
                        <td class="element" bgcolor="#feeff2" data-element="Lu">71<br><abbr title="Lutetium" >Lu</abbr></td>
                    </tr>
                    <tr style="font-size: large;">
                        <td class="element" bgcolor="#ffbec2" data-element="Ac">89<br><abbr title="Actinium" >Ac</abbr></td>
                        <td class="element" bgcolor="#ffbec2" data-element="Th">90<br><abbr title="Thorium" >Th</abbr></td>
                        <td class="element" bgcolor="#ffbec2" data-element="Pa">91<br><abbr title="Protactinium" >Pa</abbr></td>
                        <td class="element" bgcolor="#ffbec2" data-element="U">92<br><abbr title="Uranium" >U</abbr></td>
                        <td class="element" bgcolor="#ffbec2" data-element="Np">93<br><abbr title="Neptunium" >Np</abbr></td>
                        <td class="element" bgcolor="#ffbec2" data-element="Pu">94<br><abbr title="Plutonium" >Pu</abbr></td>
                        <td class="element" bgcolor="#ffbec2" data-element="Am">95<br><abbr title="Americium" >Am</abbr></td>
                        <td class="element" bgcolor="#ffbec2" data-element="Cm">96<br><abbr title="Curium" >Cm</abbr></td>
                        <td class="element" bgcolor="#ffbec2" data-element="Bk">97<br><abbr title="Berkelium" >Bk</abbr></td>
                        <td class="element" bgcolor="#ffbec2" data-element="Cf">98<br><abbr title="Californium" >Cf</abbr></td>
                        <td class="element" bgcolor="#ffbec2" data-element="Es">99<br><abbr title="Einsteinium" >Es</abbr></td>
                        <td class="element" bgcolor="#ffbec2" data-element="Fm">100<br><abbr title="Fermium" >Fm</abbr></td>
                        <td class="element" bgcolor="#ffbec2" data-element="Md">101<br><abbr title="Mendelevium" >Md</abbr></td>
                        <td class="element" bgcolor="#ffbec2" data-element="No">102 <br><abbr title="Nobelium" >No</abbr></td>
                        <td class="element" bgcolor="#ffbec2" data-element="Lr">103<br><abbr title="Lawrencium" >Lr</abbr></td>
                    </tr>
                </table>

            <div id="popup" class="popup">
                <div class="popup-content">
                    <span class="close" onclick="closePopup()">&times;</span>
                    <h2 id="element-name"></h2>
                    <p id="element-description" class="text-dark"></p>
                    <table id="element-details" class="details-table" width="85%" border="1px">
                    </table>
                </div>
            </div>

</div>
    </div>
@endsection
<script src="assets/js/PeriodicTable.js"></script>