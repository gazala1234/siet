<style>
    .edp-links {
        margin-bottom: 20px;
    }
    .edp-link {
        display: block;
        padding: 10px;
        margin-bottom: 5px;
        background-color: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .edp-link:hover {
        background-color: #e2e6ea;
    }

    .edp-content {
        display: none;
        margin-top: 15px;
        padding: 15px;
        border: 1px solid #dee2e6;
        border-radius: 5px;
        background-color: #f8f9fa;
    }

    .edp-content h6 {
        text-align: center;
        margin-bottom: 15px;
    }

    .edp-content.active {
        display: block;
    }

    .image-container img {
        width: 100%;
        height: auto;
        border: 1px solid;
        border-radius: 5px;
        margin-bottom: 10px;
    }
</style>

<!-- Get the Department Name -->
<?php
$department = isset($_GET['dept']) ? $_GET['dept'] : 'No Dept';
?>

<div class="iv">
    <h3 class="text-center mt-3">Industrial Visit</h3>

    <!-- bs dept -->
    <?php if ($department == "Applied Science") : ?>


        <!-- cv dept -->
    <?php elseif ($department == "Civil") : ?>
        <div class="container mt-3">
            <div class="edp-links">
                <a href="#" class="edp-link" data-target="edp2016">Interaction between Industries and Institution</a>
                <a href="#" class="edp-link" data-target="edp2017">Raj Group, NH-218, Construction Site and Plants.</a>
                <a href="#" class="edp-link" data-target="edp2018">Supa Dam, Dandeli</a>
                <a href="#" class="edp-link" data-target="edp2019">Paper & Pulp Industry, Dandeli</a>
                <a href="#" class="edp-link" data-target="edp2020">Water Treatment Plant, Kolhar</a>
                <a href="#" class="edp-link" data-target="edp2021">Railway Bridge Across Don River</a>
                <a href="#" class="edp-link" data-target="edp2022">Lal Bahadur Shastri Dam, Alamatti</a>
            </div>
            <div id="edp2016" class="edp-content">
                <h6>Interaction between Industries and Institution</h6>
                <p>Faculties of Civil engineering Department interacting with NTPC staff to build a relationship of Interaction between Industries and Institution</p>
                <ul>
                    <li>Prof. M. H. Kolhar</li>
                    <li>Prof. Niayz Dafedar</li>
                    <li>Prof. Nooruddin Jungi Khadri S. M.</li>
                </ul>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/intra1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/intra2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/intra3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2017" class="edp-content">
                <h6>Raj Group, NH-218, Construction Site and Plants.</h6>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/iv/img243.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/indsvtcv10.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/indsvtcv11.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2018" class="edp-content">
                <h6>Supa Dam, Dandeli</h6>
                <p>8th Semester Students along with faculty members Prof. S.S.Kulkarni, Prof.Nooruddin Jungi Khadri Prof.Chethankumar.Marol, Prof.Shameena.K, Prof. Sushaib visited the Supa Dam in Dandeli to know the Hydraulic Components of Dam & its details.</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/iv/img241.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2019" class="edp-content">
                <h6>Paper & Pulp Industry, Dandeli</h6>
                <p>8th Semester Students along with faculty members Prof. S.S.Kulkarni, Prof.Nooruddin Jungi Khadri Prof.Chethankumar.Marol, Prof.Shameena.K, Prof. Sushaib visited the Paper & Pulp Industry in Dandeli to know Recycling & Manufacturing Process of Paper (Paper & Pulp Industry).</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/indsvtcv7.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/indsvtcv8.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2020" class="edp-content">
                <h6>Water Treatment Plant, Kolhar</h6>
                <p>6th Semester Students along with faculty members Prof. S.S.Kulkarni, Prof.P.Shabesha, Prof. Sadiq.Mujawar, Prof.Shameena.K. visited the water Treatment Plant in Kolhar to know the components of water treatment plant such as Aeration, Sedimentation Tank, Coagulation, Filtration Unit and also the process of collecting the water from jackwell, treating process and distribution system.</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/indsvtcv2.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/indsvtcv3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2021" class="edp-content">
                <h6>Railway Bridge Across Don River</h6>
                <p>6th Semester Students along with faculty members Prof. S.S.Kulkarni, Prof.P.Shabesha, Prof. Sadiq.Mujawar, Prof.Shameena.K. visited the Railway Bridge Across Don River to know the components of bridge and type of foundation, materials used for construction and methods of construction of components of bridge such as foundation ( Pile), Substructure ( Pier & Pier Cap) and Superstructure (Girder & Slab).</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/iv/img239.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2022" class="edp-content">
                <h6>Lal Bahadur Shastri Dam, Alamatti</h6>
                <p>6th Semester Students along with faculty members Prof. S.S.Kulkarni, Prof.P.Shabesha, Prof. Sadiq.Mujawar, Prof.Shameena.K. visited the Lal Bahadur Shastri Dam in Alamatti to know the Hydraulic Components of Dam & its details.</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/iv/img240.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- cs dept -->
    <?php elseif ($department == "Computer Science") : ?>
        <div class="container mt-3">
            <div class="edp-links">
                <a href="#" class="edp-link" data-target="edp2016">C-DAC Electronics City 68, Electronics City Bengaluru – 561229</a>
                <a href="#" class="edp-link" data-target="edp2017">MINDS NXT TECHNO VISION PVT LTD KALBURGI</a>
            </div>
            <div id="edp2016" class="edp-content">
                <h6>C-DAC Electronics City 68, Electronics City Bengaluru – 561229</h6>
                <p>The Department of Computer Science & Engineering organized an industrial visit to C-DAC Electronics City 68, Electronics City Bengaluru – 561229 Karnataka (India) on 20th of September 2019. The visit was co-ordinated by Prof.Shruti Jalapur, Prof.Sayyed Abrar and Mr.Aslam Darga.</p>
                <p>Company scheduled session on Information Security which was co-ordinated by Shubham Parikh C-DAC Bangalore</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/cs_iv1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/cs_iv2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/cs_iv3.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/cs_iv4.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/cs_iv5.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/cs_iv6.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/cs_iv7.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/cs_iv8.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2017" class="edp-content">
                <h6>MINDS NXT TECHNO VISION PVT LTD KALBURGI</h6>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/iv/img268.jpg" alt="">
                        </div>
                    </div>
                </div>
                <p>The Department of Computer Science & Engineering and Department of Electronics and Communication Engineering organized an industrial visit to MINDS NXT TECHNO VISION PVT LTD, Kalburgi on 11th of March 2019. The visit was co-ordinated by Prof.Shruti Jalapur, Department of Computer Science & Engineering and Prof.Rafeeq Alas, Department of Electronics and Communication Engineering.</p>
                <p>Company scheduled three sessions of thirty minutes each by industry experts. The sessions were based on Software Development, Software Q.A and College to Corporate world.</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/cse_iv2.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/cse_iv3.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/cse_iv4.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ee dept -->
    <?php elseif ($department == "Electrical and Electronics") : ?>
        <div class="container mt-3">
            <div class="edp-links">
                <a href="#" class="edp-link" data-target="edp2016">Industrial Visit (2021)</a>
                <a href="#" class="edp-link" data-target="edp2017">Industrial Visit 2018-19</a>
                <a href="#" class="edp-link" data-target="edp2018">Industrial Visit to 220kv Substation</a>
            </div>
            <div id="edp2016" class="edp-content">
                <h6>Industrial Visit (2021)</h6>
                <p>An Industrial visit was organized for the students of EEE Department. The place of visit was "Manglore Tiles manufacturing Industry" Udupi district, Karantake state, India.</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/ee_iv_21I.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/ee_iv_21II.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2017" class="edp-content">
                <h6>Industrial Visit 2018-19</h6>
                <p>An industrial visit was organized for the students of EEE Department. The places of visit were SUPA Dam which is built across Kali River in the state of Karnataka and Shreyas Papers Private Limited located in Kerwad village Dandeli, Karnataka, India on March 1, 2019.</p>
                <p>A visit was also made to VTU-N.S.A.D (National Academy for Skill Development) Dandeli, Karnataka on March 2, 2019 as a noble initiative of Visvesveraya Technological University, Belgaum to cater the present need of skill requirement in India.</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/eee_iv_19_4.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/eee_iv_19_5.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/eee_iv_19_3.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/eee_iv_19_1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/eee_iv_19_2.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/eee_iv_19_6.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2018" class="edp-content">
                <h6>Industrial Visit to 220kv Substation</h6>
                <p>One day industrial visit has been organized on 5th February 2018 to 220kv substation near vijayapura, for the effective pedagogy. All the faculty members and students were visited and interacted with the Assistant Engineer in the substation. The visit was provided the platform to enhance their knowledge regarding substation.</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/eev17182.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/eev17181.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ece dept -->
    <?php elseif ($department == "Electronics and Communication Engineering") : ?>
        <div class="container mt-3">
            <div class="edp-links">
                <a href="#" class="edp-link" data-target="edp2016">Visit To Science & Technology Entrepreneurs Park (Incubation Center) At Basaveshwar Engineering College, Bagalkot</a>
                <a href="#" class="edp-link" data-target="edp2017">INDUSTRIAL VISIT TO HYDAL POWER PLANT AND SUPA DAM, DANDELI 2022</a>
                <a href="#" class="edp-link" data-target="edp2018">An Industrial visit to M I Tech Business Systems, Kundapura, Udupi District, Karnataka</a>
                <a href="#" class="edp-link" data-target="edp2019">Hydro power plant, Supadam, Dandeli 2019</a>
                <a href="#" class="edp-link" data-target="edp2020">Karnataka Power Corporation Limited, Ambika Nagar, Dandeli</a>
                <a href="#" class="edp-link" data-target="edp2021">VTU- National Academy for Skill Development (NASD), Dandeli</a>
                <a href="#" class="edp-link" data-target="edp2022">Industrial visit to KAIGA Generating Station (KGS)</a>
            </div>
            <div id="edp2016" class="edp-content">
                <h6>Visit To Science & Technology Entrepreneurs Park (Incubation Center) At Basaveshwar Engineering College, Bagalkot</h6>

            </div>
            <div id="edp2017" class="edp-content">
                <h6>INDUSTRIAL VISIT TO HYDAL POWER PLANT AND SUPA DAM, DANDELI 2022</h6>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/iv/dandeli.jpeg" alt="">
                        </div>
                    </div>
                </div>
                <p>The department of Electronics & Communication Engineering conducted an Industrial visit to Hydro power plant, Supadam, Dandeli as a part of the curriculum on 4th December 2022. Objectives of the visit are to acquire the practical knowledge about the hydropower project and to explore & understand actual working of hydro power plant.</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/dimg1.jpeg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/dimg.jpeg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2018" class="edp-content">
                <h6>An Industrial visit to M I Tech Business Systems, Kundapura, Udupi District, Karnataka</h6>
                <p>The department of Electronics & Communication Engineering together with Department of Electrical & Electronics Conducted an Industrial Visit to Mangalore Tiles Ltd. On 8th April 2021.</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/iv/ec_in_img4.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2019" class="edp-content">
                <h6>Hydro power plant, Supadam, Dandeli 2019</h6>
                <p>The department of Electronics & Communication Engineering conducted an Industrial visit to Hydro power plant, Supadam, Dandeli as a part of the curriculum on 15th April 2019. Objectives of the visit are to acquire the practical knowledge about the hydropower project and to explore & understand actual working of hydro power plant.</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/iv/ec_in_img1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2020" class="edp-content">
                <h6>Karnataka Power Corporation Limited, Ambika Nagar, Dandeli</h6>
                <p>The department of Electronics & Communication Engineering conducted an industrial visit to Karnataka Power Corporation Limited, Ambika Nagar, Dandeli on 15th April 2019.</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/iv/ec_in_img2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2021" class="edp-content">
                <h6>VTU- National Academy for Skill Development (NASD), Dandeli</h6>
                <p>The department of Electronics & Communication Engineering conducted an industrial visit to VTU- National Academy for Skill Development (NASD), Dandeli on 15th April 2019.</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/iv/ec_in_img3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2022" class="edp-content">
                <h6>Industrial visit to KAIGA Generating Station (KGS)</h6>
                <p>The Industrial visit is carried out every year at the department as a part of curricular activity, where the students visit the industries to see the practical working environment and the different technologies in use. In 2018 we visited the KAIGA Generating Station (KGS) Karnataka.</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/iv/img217.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- mech dept -->
    <?php elseif ($department == "Mechanical") : ?>
        <div class="container mt-3">
            <div class="edp-links">
                <a href="#" class="edp-link" data-target="edp2016">Industry & Institute</a>
                <a href="#" class="edp-link" data-target="edp2017">Supa Dam, Joida Taluk, Dandeli, Karnataka</a>
                <a href="#" class="edp-link" data-target="edp2018">VTU, National Academy for Skill Development, Dandeli, Karnataka</a>
                <a href="#" class="edp-link" data-target="edp2019">Centres-of-Excellence (COEs) GTTC, Dandeli, Karnataka</a>
                <a href="#" class="edp-link" data-target="edp2020">Upper Krishna-I, KPCL, Almatti Dam Power House, Almatti, Bagalkot District, Karnataka</a>
                <a href="#" class="edp-link" data-target="edp2021">Diesel Loco Shed, South Western Railway, Hubballi, Karnataka</a>
            </div>
            <div id="edp2016" class="edp-content">
                <h6>Industry & Institute</h6>
                <a href="../pdf/iv/Industrial.pdf">Industry & Institute</a>
            </div>
            <div id="edp2017" class="edp-content">
                <h6>Supa Dam, Joida Taluk, Dandeli, Karnataka</h6>
                <p>Industrial visit was carried out at Supa Dam, Joida Taluk, Dandeli, Karnataka on 27th April, 2019 for 6th and 8th semester students of Mechanical Engineering Department. The main objective behind the visit was to make students aware about the working of Vertical Kaplan Turbine, hydel power generation and maintenance of Vertical Kaplan Turbines. Supa Dam is built across Kalinadi (Kannada) or Kali river in state of Karnataka in India. The dam is situated at GaneshaGudi, which is in Joida taluk of Uttara Kannada district. The power house at the foot of the dam has two electricity generators of fifty megawatt each. The electricity generated is supplied to different parts of Karnataka.</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/mech_ia1_19.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/mech_ia2_19.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2018" class="edp-content">
                <h6>VTU, National Academy for Skill Development, Dandeli, Karnataka</h6>
                <p>Industrial visit was carried out at VTU,National Academy for Skill Development, Dandeli, Karnataka on 26th April, 2019 especially for 6th and 8th semester students. There the session was addressed by VTU- National Academy for Skill Development is a noble initiative of Visvesveraya Technological University to cater the present need of skill requirement in India.VTU-NASD has been supported by the Government of Karnataka. The course and curriculum has been designed with the consultation of industry experts. The support driven from industry is unparalleled. The centre has a team of well qualified and dedicated trainer.</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/mech_ia5_19.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/mech_ia6_19.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/mech_ia7_19.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/mech_ia8_19.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/mech_ia9_19.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/mech_ia10_19.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2019" class="edp-content">
                <h6>Centres-of-Excellence (COEs) GTTC, Dandeli, Karnataka</h6>
                <p>Industrial visit was carried out at Centres-of-Excellence (COEs) GTTC,Dandeli, Karnataka on 26th April, 2019 especially for 6th and 8th semester students. The students of B.E pre-final and final year along with faculty visited the Centres-of-Excellence (COEs) GTTC,Dandeli, Karnataka. At these centres, the students will be introduced to the latest and most advanced technologies and equipment in the field of Mechanical, Electronics & Electrical, IT, Robotics and Mechatronics, and Electro-mechanical domains. The idea is to equip students with the knowledge of concurrent technologies being applied and used in the industry today to make them employable and job ready.</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/mech_ia12_19.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/mech_ia13_19.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/mech_ia14_19.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/mech_ia15_19.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2020" class="edp-content">
                <h6>Upper Krishna-I, KPCL, Almatti Dam Power House, Almatti, Bagalkot District, Karnataka</h6>
                <p>A team comprising of 4 faculties and 50 students of B.E pre-final year visited Upper Krishna-I, KPCL, Almatti, Bagalkot District, Karnataka on 7th September 2018.</p>
                <p>The main objective behind the visit was to make students aware about working of Vertical Kaplan Turbine, hydel power generation and maintenance of Vertical Kaplan Turbines. There the session was addressed by Mr. Govind Jarali, Assistant Executive Engineering, KPCL Alamatti & Mr. Anandkumar Walikar, Assistant Engineering, Turbine Maintenance Section, KPCL Alamatti.</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/p2.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/p7.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2021" class="edp-content">
                <h6>Diesel Loco Shed, South Western Railway, Hubballi, Karnataka</h6>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/iv/img61.jpg" alt="">
                        </div>
                    </div>
                </div>
                <p>A team comprising of 4 faculties and 45 students of B.E pre-final year visited to Diesel Loco Shed SWR Hubballi on 07th October 2017.</p>
                <p>The main objective behind the visit wasto make student aware about how working of IC Engine, Simulation and maintenance of Diesel Locomotive Engines.There the session was addressed by Girish V. Ingalahalli, Senior Section Engineer, Mechanical Light Section, & B V Bhaskar, Diesel Loco Shed SWR Hubballi.</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/mech_iv1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/iv/mech_iv2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endif; ?>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.edp-link').click(function(event) {
            event.preventDefault();
            var target = $(this).data('target');

            $('.edp-content').removeClass('active');
            $('#' + target).addClass('active');
        });
    });
</script>