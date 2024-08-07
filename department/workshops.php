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

<div class="workshop">
    <h3 class="text-center mt-3">Colloquium</h3>

    <!-- bs dept -->
    <?php if ($department == "Applied Science") : ?>
        <div class="container mt-3">
            <div class="edp-links">
                <a href="#" class="edp-link" data-target="edp2016">Safe Drinking Water- Need of the time</a>
                <a href="#" class="edp-link" data-target="edp2017">MATHEMATICS COLLOQUIUM</a>
            </div>
            <div id="edp2016" class="edp-content">
                <h6>Safe Drinking Water- Need of the time</h6>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/colloquium/water.jpg" alt="Drinking Water">
                        </div>
                    </div>
                </div>
                <p>Prof C.H.Bhosale, Professor emeritus, Shivaji University, Kolhapur addressed the students and faculty of SECAB Institute and Engineering and Technology, Vijayapur on Saturday. Prof Bhosle emphasising the need of safe drinking water told that as per the reports of EPA (USA), WHO, ICMR(India) and NEERI(India) that two million human deaths per year occur due to polluted water. He explained the various source of water pollution like industrial waste, garbage, dyes, etc., and issues related to the water purification.</p>
                <p>Prof Bhosale has been conducting research to address the issues related to water purification and has developed a technique – Solar energy assisted purification of water using stratified nanocrystalline oxide semiconductor thin films. He explained the process in detail. He pointed out the issues related to water purification and tried to motivate the faculty and students to take up research to address the issues related to water purification. The program was inaugurated by the Principal. It was attended by all staff members and students of Basic Science Department.</p>
            </div>
            <div id="edp2017" class="edp-content">
                <h6>MATHEMATICS COLLOQUIUM</h6>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/colloquium/math.jpg" alt="Mathemetics">
                        </div>
                    </div>
                </div>
                <p>The Mathematics Department of Secab Institute of Engineering and Technology, organized a research colloquium on “Fuzzy Sets, Fuzzy Logic and its Applications”. The talk was a part of Frontier Development Program delivered by Dr. N. B. Naduvinamani, Professor & Chairman, Department of PG Studies and Research in Mathematics, Gulbarga University, Kalburgi. The talk focused on forefront areas of Fuzzy sets and Fuzzy logic which are powerful Mathematical tools for modelling and controlling uncertain systems in industry, humanity and nature. He also discussed about the applications in Engineering field like designing Washing Machine, Robot etc. Further he motivated the students and the faculties to take up research in the field of Fuzzy sets. The program was inaugurated by the Principal. Mathematics Colloquium Co-ordinator and other staff members were present with first year students.</p>
            </div>
        </div>

    <!-- cv dept -->
    <?php elseif ($department == "Civil") : ?>
        <div class="container mt-3">
            <div class="edp-links">
                <a href="#" class="edp-link" data-target="edp2016">Waste & Wealth: Challenges on resource recovery and recycling options</a>
                <a href="#" class="edp-link" data-target="edp2017">Remote Sensing & GIS</a>
                <a href="#" class="edp-link" data-target="edp2018">One week Workshop "Advances in Soil Dynamics and Earthquake Engineering"</a>
                <a href="#" class="edp-link" data-target="edp2019">Colloquium on "Survey and Research Methods"</a>
                <a href="#" class="edp-link" data-target="edp2020">Colloquium on "Intelligent Transport System"</a>
                <a href="#" class="edp-link" data-target="edp2021">Technical Talk by "Tech Mantra Vijayapur" on "Use of Softwares in Civil Engineering"</a>
                <a href="#" class="edp-link" data-target="edp2022">Technical Talk by "Mr.Ashok Reddy (Regional Head) Ultratech Cements Limited"</a>
                <a href="#" class="edp-link" data-target="edp2023">Colloquium on "Influence of Imperfection Sensitivity on Functionally Graded Sandwich Structure"</a>
                <a href="#" class="edp-link" data-target="edp2024">Colloquium on "Remote Sensing And GIS"</a>
                <a href="#" class="edp-link" data-target="edp2025">Colloquium on "Earthquake Engineering"</a>
            </div>
            <div id="edp2016" class="edp-content">
                <h6>Waste & Wealth: Challenges on resource recovery and recycling options</h6>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/colloquium/waste.jpg" alt="Drinking Water">
                        </div>
                    </div>
                </div>
                <p>Department of civil engineering organised a colloquium on 6th may 2019 entitled "Waste & Wealth: Challenges on resource recovery and recycling options". The talk was delivered by Dr. Senophiya Mary, technical advisor for Green Era Recycling Pvt. Ltd. She elaborated waste management topics like Importance of 3R's, Challenges on resource recovery & recycling, E-waste, Wealth from the Waste, Treatment techniques of E-waste etc. The department was hugely benefited by the valuable talk given by Dr. Senophiyah.</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/cv_q1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/cv_q2.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/cv_q5.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/cv_q4.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/cv_q3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2017" class="edp-content">
                <h6>Remote Sensing & GIS</h6>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/colloquium/remote.jpg" alt="Mathemetics">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2018" class="edp-content">
                <h6>One week Workshop "Advances in Soil Dynamics and Earthquake Engineering"</h6>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Name of Resource Person</th>
                            <th>Organisation/Company/University</th>
                            <th>Date</th>
                            <th>Area of Interest</th>
                            <th>Topics Covered</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Dr. S. Raghunath</td>
                            <td>BMS College of Engineering</td>
                            <td>21/02/2019 10:15am to 11:30am</td>
                            <td>Earthquake Engineering</td>
                            <td>Introduction to Indian Standard Codes: Earthquake Resistance Codes, Seismic Evaluation Masonry Structures</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Dr. S. Raghunath</td>
                            <td>BMS College of Engineering</td>
                            <td>21/02/2019 11:45am to 01:00pm</td>
                            <td>Earthquake Engineering</td>
                            <td>Introduction to Indian Standard Codes: Earthquake Resistance Codes, Seismic Evaluation Masonry Structures</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Dr. K. V. Vijayendra</td>
                            <td>Bangalore Institute of Technology (BIT), Bangalore</td>
                            <td>21/02/2019 2:00pm to 3:15pm</td>
                            <td>Geotechnical Engineering</td>
                            <td>Geotechnical Aspects of Codal Provision under Seismic Loading</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Dr. K. V. Vijayendra</td>
                            <td>Bangalore Institute of Technology (BIT), Bangalore</td>
                            <td>21/02/2019 03:45pm to 05:00pm</td>
                            <td>Geotechnical Engineering</td>
                            <td>Geotechnical Aspects of Codal Provision under Seismic Loading</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Dr. Kalyan Kumar</td>
                            <td>National Institute of Technology (NIT) Warangal</td>
                            <td>22/02/2019 09:00am to 11:30am</td>
                            <td>Seismic Hazard Analysis</td>
                            <td>Seismic Hazard Analysis and Ground Motion Studies</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Dr. Kalyan Kumar</td>
                            <td>National Institute of Technology (NIT) Warangal</td>
                            <td>22/02/2019 11:30am to 01:00pm</td>
                            <td>Seismic Hazard Analysis</td>
                            <td>Seismic Hazard Analysis and Ground Motion Studies</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Dr. Shivakumar G. Patil</td>
                            <td>Dr PGH College of Engineering Technology</td>
                            <td>02:00pm to 03:15pm</td>
                            <td>Soil Structure Interaction</td>
                            <td>Deterministic Seismic Hazard Assessment</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Dr. Shivakumar G. Patil</td>
                            <td>Dr PGH College of Engineering Technology</td>
                            <td>03:45pm to 05:00pm</td>
                            <td>Soil Structure Interaction</td>
                            <td>Deterministic Seismic Hazard Assessment</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Dr. G. R. Dodagoudar</td>
                            <td>Indian Institute of Technology (IIT) Madras</td>
                            <td>23/02/2019 09:00am to 11:30am</td>
                            <td>Geotechnical Engineering</td>
                            <td>Soil-Pile structure interaction</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Dr. G. R. Dodagoudar</td>
                            <td>Indian Institute of Technology (IIT) Madras</td>
                            <td>23/02/2019 11:45am to 01:00pm</td>
                            <td>Geotechnical Engineering</td>
                            <td>Soil-Pile structure interaction</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Dr. Sreevalsa K</td>
                            <td>Vellore Institute of Technology</td>
                            <td>23/02/2019 02:00pm to 03:15pm</td>
                            <td>Ground Motion Attenuation & Seismic Hazard Assessment</td>
                            <td>Seismic hazard assessment: Indian experiences in global context</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Dr. Sreevalsa K</td>
                            <td>Vellore Institute of Technology</td>
                            <td>23/02/2019 03:45pm to 05:00pm</td>
                            <td>Ground Motion Attenuation & Seismic Hazard Assessment</td>
                            <td>Seismic hazard assessment: Indian experiences in global context</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>Prof. P Shabasha</td>
                            <td>SIET, Vijaypura</td>
                            <td>24/02/2019 09:00am to 11:30am</td>
                            <td>Geology</td>
                            <td>Earthquake & seismology</td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>Prof. P Shabasha</td>
                            <td>SIET, Vijaypura</td>
                            <td>24/02/2019 11:45am to 01:00pm</td>
                            <td>Geology</td>
                            <td>Earthquake & seismology</td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>Dr. Sathish Annigeri</td>
                            <td>Visvesvaraya Technological University</td>
                            <td>24/02/2019 02:00pm to 03:15pm</td>
                            <td>Earthquake Resistant Design of Buildings</td>
                            <td>Earthquake resistant design of buildings, nonlinear building dynamics</td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>Dr. Sathish Annigeri</td>
                            <td>Visvesvaraya Technological University</td>
                            <td>24/02/2019 03:45pm to 05:00pm</td>
                            <td>Earthquake Resistant Design of Buildings</td>
                            <td>Earthquake resistant design of buildings, nonlinear building dynamics</td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>Dr. Neelima Satyam</td>
                            <td>Indian Institute of Technology (IIT), Indore</td>
                            <td>25/02/2019 09:00am to 11:30am</td>
                            <td>Geotechnical Earthquake Engineering</td>
                            <td>Dynamic Soil Structure Interaction Analysis</td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>Dr. Neelima Satyam</td>
                            <td>Indian Institute of Technology (IIT), Indore</td>
                            <td>25/02/2019 11:45am to 01:00pm</td>
                            <td>Geotechnical Earthquake Engineering</td>
                            <td>Dynamic Soil Structure Interaction Analysis</td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>Dr. Santosh K. Patil</td>
                            <td>K J College of Engineering, Management & Research</td>
                            <td>25/02/2019 02:00pm to 03:15pm</td>
                            <td>Earthquake Engineering</td>
                            <td>Seismic Retrofitting of Buildings</td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>Dr. Santosh K. Patil</td>
                            <td>K J College of Engineering, Management & Research</td>
                            <td>25/02/2019 03:45pm to 05:00pm</td>
                            <td>Earthquake Engineering</td>
                            <td>Seismic Retrofitting of Buildings</td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>Dr. S. J. Arwikar</td>
                            <td>SIET, Vijaypura</td>
                            <td>26/02/2019 09:00am to 11:30am</td>
                            <td>Structural Engineering</td>
                            <td>Behaviour of composites in retrofitting in tropical area</td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td>Dr. S. J. Arwikar</td>
                            <td>SIET, Vijaypura</td>
                            <td>26/02/2019 11:45am to 01:00pm</td>
                            <td>Structural Engineering</td>
                            <td>Behaviour of composites in retrofitting in tropical area</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="edp2019" class="edp-content">
                <h6>Colloquium on "Survey and Research Methods"</h6>
                <p>Civil Engieering Department organized a colloquium on 03 Nov. 2018 titled "Survey and Research Methods" by Prof. K Srinivas Assistant Professor NICMAR Hyderabad. He delivered a discourse on 'Research Methodoligies' to be adopted in the research areas.</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/img229.jpg" alt="Mathemetics">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/qoll_reseach2.jpg" alt="Mathemetics">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2020" class="edp-content">
                <h6>Colloquium on "Intelligent Transport System"</h6>
                <p>Civil Engieering Department conducted a colloquium on 03 Nov. 2018 titled "Intelligent Transport System" by Prof. Digvijay S. Pawar Assistant Professor IIT Hyderabad. He elaborated on the 'Goals of Intelligent transport system, Traffic Management, Active Traffic Management, System Engineering process and Intelligent Transportation System. Students and faculties were greatly benifited from his lecture.</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/img232.jpg" alt="Mathemetics">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/qoll_reseach1.jpg" alt="Mathemetics">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2021" class="edp-content">
                <h6>Technical Talk by "Tech Mantra Vijayapur" on "Use of Softwares in Civil Engineering"</h6>
                <p>Department of Civil Engineering organized a Technical Talk on 'Software Usage' by Director Vijay Kumar Revenkar, Speaker J Atish Rao Techmantra gave a brief talk on Software :- AutoCAD, 3DS-MAX, STADD.Pro, ETABS, REVIT and BIM360. Students and faculties were immensely benifited from this talk which will be used intrending fields.</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/stwincv2.jpg" alt="Mathemetics">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/img205.jpg" alt="Mathemetics">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2022" class="edp-content">
                <h6>Technical Talk by "Mr.Ashok Reddy (Regional Head) Ultratech Cements Limited"</h6>
                <p>A Technical talk "Recent Trends in Cement Concrete" was organize by Ultratech Cements LTD for pre-final year & final year students of Civil Engineering Department. The talk was given by Mr. Ashok Reddy Regional Head, Ultratech Cements.</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/technical2.jpg" alt="Mathemetics">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/img203.jpg" alt="Mathemetics">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2023" class="edp-content">
                <h6>Colloquium on "Influence of Imperfection Sensitivity on Functionally Graded Sandwich Structure"</h6>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/colloquium/cvc04.jpg" alt="">
                        </div>
                    </div>
                </div>
                <p>A One day Colloquium has been organized by department of civil & mechanical engineering. Speaker Dr. Mohammad Talha Asst.Professor IIT. Mandi delivered the topic on Influence of Imperfection Sensitivity on Functionally Graded Sandwich Structures & its applications in various fields of engineering. The one day colloquium provided basic idea and innovation in the field of composite structures. Faculties and students of civil and mechanical department showed interest towards the topic and obtained beneficial knowledge which can be further utilized for their Research work.</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/cvc2.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/cvc3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2024" class="edp-content">
                <h6>Colloquium on "Remote Sensing And GIS"</h6>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/colloquium/img107.jpg" alt="Mathemetics">
                        </div>
                    </div>
                </div>
                <h5>Introduction of speaker</h5>
                <p>Dr. K.B.V.N.Phanindra , Assistant professor I.I.T-Hyderabad is a well known resource person in the field Ground water flow & transport modeling, GIS applications in ground water engineering, Hydrology, surface water-ground water interactions & soft computing in hydrology. He has even worked as GIS and water Resource specialist in New Mexico water Resources Research Institute, New Mexico USA. He has published many papers in national and international journals.</p>
                <h5>Summary:</h5>
                <p>A One day colloquium has been organized by department of civil engineering. Speaker Dr. K.B.V.N.Phanindra, Assistant professor delivered his talk on REMOTE SENSING AND GIS & its applications in various fields of civil engineering. The one day colloquium provided basic idea and innovation in the field of GIS and RS. Students and staff showed interest towards the topic and obtained beneficial knowledge.</p>
                <h5>Outcomes</h5>
                <p>REMOTE SENSING AND GIS , an emerging topic in today’s civil engineering field. This one day colloquium has been beneficial to students and staff of civil engineering department. The topic can be utilized by staff members for their research work. Students (UG & PG) can work on GIS. This colloquium provided necessary and basic information of REMOTE SENSING AND GIS. The work can be conducted in our college research centre by establishing a new lab with Q-GIS software.</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/cvq2.jpeg" alt="Mathemetics">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/cvq3.jpeg" alt="Mathemetics">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/cvq4.jpeg" alt="Mathemetics">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/cvq5.jpeg" alt="Mathemetics">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2025" class="edp-content">
                <h6>Colloquium on "Earthquake Engineering"</h6>
                <p>One Day colloquium was organized by civil Engineering Department for final year students on Earthquake Engineering Resource person was Dr.C.S.Manohar from IISc- Bangalore.</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/colloquium/img84.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- cs dept -->
    <?php elseif ($department == "Computer Science") : ?>
        <div class="container mt-3">
            <div class="edp-links">
                <a href="#" class="edp-link" data-target="edp2016">Colloquium on Trends in The Software Domain and Career Opportunities in the academic year 2022-23</a>
                <a href="#" class="edp-link" data-target="edp2017">A Webinar on "Blockchain Technology" in association with Computer Society of India (CSI) Chapter</a>
                <a href="#" class="edp-link" data-target="edp2018">Online Workshop: Hands on "Apache Kafka in action"</a>
                <a href="#" class="edp-link" data-target="edp2019">A Webinar on "Cyber Hygiene" in association with Computer Society of India (CSI) Chapter, C-DAC, Bangalore</a>
                <a href="#" class="edp-link" data-target="edp2020">External Colloquium on "Markov Chain Modelling in Engineering"</a>
                <a href="#" class="edp-link" data-target="edp2021">External Colloquium on Machine Learning & Artificial Intelligence held on 17 September 2018</a>
                <a href="#" class="edp-link" data-target="edp2022">External Colloquium on Cloud Computing and Storage Area Networks held on 27 April 2018</a>
                <a href="#" class="edp-link" data-target="edp2023">Internal Colloquium on Top Trends On IT 2018 held on 26 March 2018</a>
                <a href="#" class="edp-link" data-target="edp2024">External Colloquium on Datamining & Wireless Sensor Networks held on 30 October 2017</a>
            </div>
            <div id="edp2016" class="edp-content">
                <h6>Colloquium on Trends in The Software Domain and Career Opportunities in the academic year 2022-23</h6>
            </div>
            <div id="edp2017" class="edp-content">
                <h6>A Webinar on "Blockchain Technology" in association with Computer Society of India (CSI) Chapter</h6>
                <a href="../pdf/colloquium/blockchain2020.pdf">Blockchain Technology</a>
            </div>
            <div id="edp2018" class="edp-content">
                <h6>Online Workshop: Hands on "Apache Kafka in action"</h6>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/csfdp201.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/csfdp202.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2019" class="edp-content">
                <h6>A Webinar on "Cyber Hygiene" in association with Computer Society of India (CSI) Chapter, C-DAC, Bangalore</h6>
                <a href="../pdf/colloquium/Webinar29.pdf">Cyber Hygiene</a>
            </div>
            <div id="edp2020" class="edp-content">
                <h6>External Colloquium on "Markov Chain Modelling in Engineering"</h6>
                <p>The Department of Computer Science and Engineering had organized research colloquium on Markov Chain Modelling in Engineering on 7th September 2019. The event started with formal inaugural function graced by the presence dignitary Dr. P.S.Hiremath ,Professor Department of Computer Science (MCA) ,K L E technological University B V B CET Campus,Hubli. Dr.P.S.Hiremath delivered a talk on importance of Markov Chain Modelling Engineering in real life problems like health care,business modelling,Video streaming ,Strategy making etc.</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/img305.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/cs_q19_1.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2021" class="edp-content">
                <h6>External Colloquium on Machine Learning & Artificial Intelligence held on 17 September 2018</h6>
                <p>The department of CSE organized research colloquium “Machine Learning & Artificial Intelligence” on 17th September 2018. The event started with formal inaugural function graced by the presence of dignitaries Dr. Narasimha Murty Musti Professor, Indian Institute of Science Bangalore, Principal SECAB I. E. T, and HOD CSE, SECAB I. E. T.</p>
                <p>The speaker Dr. Narasimha Murty Musti started the session-1 with Machine Learning: Basic terminologies, algorithms and tools. The session-2 was followed by Artificial Intelligence: Future scope. Session-3 was carried out with faculties regarding Institute Improvement and Faculty Research Oriented Program.</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/colloquium/img171.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2022" class="edp-content">
                <h6>External Colloquium on Cloud Computing and Storage Area Networks held on 27 April 2018</h6>
                <p>The department of CSE organized research colloquium “Cloud computing & Storage Area Network” on 27th April 2018. The event started with formal inaugural function graced by the presence of dignitaries Mr. H L Phalachandra Associate Professor, PES University Bangalore, Principal SECAB I. E. T, and HOD CSE, SECAB I. E. T.</p>
                <p>The speaker Mr. H L Phalachandra started the session-1 with discussion on Cloud computing: Past, Present and Future, the session-2 with Storage Area Network and session-3 Discussion on Regarding Institute Improvement and Faculty Research Oriented Program.</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/colloquium/img145.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2023" class="edp-content">
                <h6>Internal Colloquium on Top Trends On IT 2018 held on 26 March 2018</h6>
                <p>The department of CSE organized research colloquium <b>“Top Trends On IT 2018”</b> on 26th March 2018. The event started with formal inaugural function graced by the presence of dignitaries <b>Dr. Noorullah Shariff</b> Professor, SECAB I. E. T.</p>
                <p>The speaker <b>Dr. Noorullah Shariff</b> started the session with Top Trends On IT: Google Search Technologies, online free course.</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/colloquium/img210.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2024" class="edp-content">
                <h6>External Colloquium on Datamining & Wireless Sensor Networks held on 30 October 2017</h6>
                <p>The department of CSE organized research colloquium "Data Mining & Wireless Sensor Networks" on 30th October 2017. The event started with formal inaugural function graced by the presence of dignitaries Dr. Damodar Reddy Edla Assistant Professor & HOD, NIT Goa, Principal SECAB I. E. T, and HOD CSE, SECAB I. E. T.</p>
                <p>The speaker Dr. Damodar Reddy Edla started the session-1 with Data Mining: Past, Present and Future. The session-2 was carried on Wireless Sensor Networks. Session-3 was carried out with faculties regarding Institute Improvement and Faculty Research Oriented Program.</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/colloquium/img111.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- ee dept -->
    <?php elseif ($department == "Electrical and Electronics") : ?>
        <div class="container mt-3">
            <div class="edp-links">
                <a href="#" class="edp-link" data-target="edp2016">Frontier developments in SMART GRID Technologies</a>
                <a href="#" class="edp-link" data-target="edp2017">One day colliquium on "Solar PV System Design"</a>
            </div>
            <div id="edp2016" class="edp-content">
                <h6>Frontier developments in SMART GRID Technologies</h6>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/colloquium/ee_q_21_1.png" alt="">
                        </div>
                    </div>
                </div>
                <h5>About colloquium:</h5>
                <p>The department of Electrical and Electronics Engineering SECAB I.E.T organized an academic research Colloquia on " Frontier Developments in SMART GRID Technologies" on 26th September 2019 .The guest speaker was Dr.R.L.Chakrasali ,who is presently working as a professor,Dept of EEE SDM college of Engineering &Technology ,Dharawad.</p>
                <h5>Objectives:</h5>
                <p>The major benefits of a smart grid network include the following.</p>
                <ul>
                    <li>Improved grid reliability</li>
                    <li>To provide improved power quality to the users. To provide real time information, lower operation cost and electricity available to everyone.</li>
                    <li>To use information technology for monitoring and control to optimize its capital and operational cost.</li>
                    <li>To predict and instantly respond to system problems in order to avoid power outages and power quality problems.</li>
                    <li>To make the nation energy independent.</li>
                    <li>To provide employment.</li>
                </ul>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/ee_tech_img1.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/ee_tech_img2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2017" class="edp-content">
                <h6>One day colliquium on "Solar PV System Design"</h6>
                <p>One day external colloquium conducted in EEED on 17th February 2018, titled “Solar PV System Design” by Dr.Suresh .H. Jangamshetti, BEC Bagalkot.</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/colloquium/img168.jpg" alt="Mathemetics">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- ece dept -->
    <?php elseif ($department == "Electronics and Communication Engineering") : ?>
        <div class="container mt-3">
            <div class="edp-links">
                <a href="#" class="edp-link" data-target="edp2016">Procedural Writing and Publishing with Advanced Computer Tools: Hands-On Training</a>
                <a href="#" class="edp-link" data-target="edp2017">Two days workshop on "Programming of 8051 Using KEIL u vision" on 12th & 13th November 2019</a>
                <a href="#" class="edp-link" data-target="edp2018">One day technical talk on "Ethical Hacking" for final year students on 06.11.2019</a>
                <a href="#" class="edp-link" data-target="edp2019">Academic Colloquium on "Recent Advances in Nanoscale Device Design and Its Applications"</a>
                <a href="#" class="edp-link" data-target="edp2020">Workshop on "Introduction to Research & Searching Techniques"</a>
                <a href="#" class="edp-link" data-target="edp2021">One Day Industry Institute Interaction On "Digital Signal Processing Using Scilab On OMAP - L138”</a>
                <a href="#" class="edp-link" data-target="edp2022">One day technical Talk on "how to use Texas Instruments IoT kits for final year projects 5th October, 2019</a>
                <a href="#" class="edp-link" data-target="edp2023">One day talk on Economy situation of India and stock market</a>
                <a href="#" class="edp-link" data-target="edp2024">One week workshop on "PCB Schematic & Layout Design"</a>
                <a href="#" class="edp-link" data-target="edp2025">One Week Online Faculty Development Program on "Innovative Pedagogy in Teaching Learning" from 21st January to 26th January 2019</a>
                <a href="#" class="edp-link" data-target="edp2026">Recent Advances in Antenna and Its Applications</a>
                <a href="#" class="edp-link" data-target="edp2027">Three week Internship program on "Application Development using Python and MATLAB" and "Internet of Things using Python" from 20th July 2018</a>
                <a href="#" class="edp-link" data-target="edp2028">Workshop on "IOT using Raspberry Pi and Arduino"</a>
                <a href="#" class="edp-link" data-target="edp2029">Academic Colloquium on "Recent Technologies in Power Electronics Application"</a>
                <a href="#" class="edp-link" data-target="edp2030">Colloquium on Trending Technologies and Cyber Security</a>
                <a href="#" class="edp-link" data-target="edp2031">Hands- on Learning: Building Cloud</a>
            </div>
            <div id="edp2016" class="edp-content">
                <h6>Procedural Writing and Publishing with Advanced Computer Tools: Hands-On Training</h6>
                <a href="../pdf/colloquium/Procedural_Workshop.pdf">Procedural Workshop</a>
            </div>
            <div id="edp2017" class="edp-content">
                <h6>Two days workshop on "Programming of 8051 Using KEIL u vision" on 12th & 13th November 2019</h6>
                <p>Prof. Veeresh K.H, Dept. of ECE, SECAB.I.E.T, has conducted a Two days workshop on "Programming of 8051 Using KEIL u vision" on 12th & 13th November 2019.</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/ec_collo_img25.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/ec_collo_img26.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2018" class="edp-content">
                <h6>One day technical talk on "Ethical Hacking" for final year students on 06.11.2019</h6>
                <p>The department of Electronics & Communication Engineering conducted one day technical talk on "Ethical Hacking" for final year students on 6th November,2019. The event was hosted by Prof. Arif Makandar along with faculty members and HOD. The Resource person was Prof. Altaf Hussain Balsing, Asst. Professor, Anjuman-E- Islam's Kalsekar Technical Campus, New Panvel, Navi Mumbai.</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/ec_collo_img23.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/ec_collo_img24.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2019" class="edp-content">
                <h6>Academic Colloquium on "Recent Advances in Nanoscale Device Design and Its Applications"</h6>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/colloquium/img315.jpg" alt="">
                        </div>
                    </div>
                </div>
                <p>The Department of Electronics and Communication Engineering had organized research colloquium on "Recent Advances in Nanoscale Device Design and Its Applications" on 19th October 2019.The event started with formal inaugural function graced by the presence of dignitary Dr. Vadthiya Narendar from Department of Electronics & communication Engineering National Institute of Technology, Warangal.Dr. Vadthiya Narendar delivered a talk on importance of Nanoscale Device Design in engineering application to meet real time requirements of the electronic devices.Towards end of colloquium, interaction between faculty members and Dr. Vadthiya Narendar was arranged to discuss more on research trends.</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/ec_q19.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/ec_collo_img20.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/ec_collo_img21.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/ec_collo_img22.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2020" class="edp-content">
                <h6>Workshop on "Introduction to Research & Searching Techniques"</h6>
                <p>Prof. Mohammad Ziaullah C has conducted a workshop on "Introduction to Research & Searching Techniques " on 14th and 15th October 2019 at Dept. of ECE, Malik Sandal Polytechnic, Vijayapur.</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/colloquium/ec_fac_img10.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2021" class="edp-content">
                <h6>One Day Industry Institute Interaction On "Digital Signal Processing Using Scilab On OMAP - L138”</h6>
                <p>As an Industry institute Interaction, Department of Electronics & Communication Engineering has organized a Technical talk & Hands-on session on "DSP using Scilab on OMAP-L138" on 11/10/2019. The resource person was Mr. Balaji T.S, Senior Application Engineer, EDGATE Technologies Pvt. Ltd, Bengaluru.</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/colloquium/ec_DSP.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2022" class="edp-content">
                <h6>One day technical Talk on "how to use Texas Instruments IoT kits for final year projects 5th October, 2019</h6>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/colloquium/ec_collo_img18.png" alt="">
                        </div>
                    </div>
                </div>
                <p>The department of Electronics & Communication Engineering conducted one day technical talk on how to use Texas Instruments IoT kits for their final year projects on 5th October, 2019. The students were given hands-on session on kits so that they can do their projects.The Resource person was Mr. Shivraj Kumar H. C. Senior Application Engineer at Digital Shark Technologies, Bengaluru.</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/colloquium/ec_collo_img19.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2023" class="edp-content">
                <h6>One day talk on Economy situation of India and stock market</h6>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/colloquium/ec_collo_img15.png" alt="">
                        </div>
                    </div>
                </div>
                <p>The department of MBA & department of ECE have organized one day talk on Economy situation of India and stock market value on 27th September, 2019. The talk was regarding stock market Information & was beneficial for students in understanding Details of how stock market operates and the major player like National stock exchange and Bombay Stock Exchange. The session was conducted by Mr. Rishab Lunia from Knowise Learning Academy, Bengaluru.</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/ec_collo_img16.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/ec_collo_img17.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2024" class="edp-content">
                <h6>One week workshop on "PCB Schematic & Layout Design"</h6>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/colloquium/ec_collo_img13.png" alt="">
                        </div>
                    </div>
                </div>
                <p>Prof. Veeresh K.H. Dept. of ECE, SECAB.I.E.T has conducted one week workshop on "PCB Schematic & Layout Design" from 19/08/2019 to 24/08/2019 under ISTE Student chapter.</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/colloquium/ec_collo_img14.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2025" class="edp-content">
                <h6>One Week Online Faculty Development Program on "Innovative Pedagogy in Teaching Learning" from 21st January to 26th January 2019</h6>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/colloquium/ec_collo_img9.png" alt="">
                        </div>
                    </div>
                </div>
                <p>The department of Electronics & Communication Engineering and the department of Computer Science & Engineering organized Faculty Development Program under the Banner of ISTE Chapter in Association with AICTE on "Innovative Pedagogy in Teaching Learning" from 21st January to 26th January 2019. The faculty development program aims to provide opportunities to faculty members to enrich their teaching skills and utilize innovative teaching learning methodology to enhance teaching learning process.</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/ec_collo_img10.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/ec_collo_img11.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/ec_collo_img12.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2026" class="edp-content">
                <h6>Recent Advances in Antenna and Its Applications</h6>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/colloquium/img216.jpg" alt="">
                        </div>
                    </div>
                </div>
                <p>The department of Electronics & Communication Engineering has organized an academic Colloquium on "Recent Advances in Antennas & its Applications" on 28th September 2018. The Speaker was Dr. Halappa Gajera, Professor, Dept. of Electronics, University of Mysore, Hassan. The sessions were more interactive and students were encouraged to take up projects in the field of Antennas.</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/ec_collo_img7.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/ecColl.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/ec_collo_img8.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2027" class="edp-content">
                <h6>Three week Internship program on "Application Development using Python and MATLAB" and "Internet of Things using Python" from 20th July 2018</h6>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/colloquium/ec_collo_img1.png" alt="">
                        </div>
                    </div>
                </div>
                <p>The department of Electronics & Communication Engineering has organized Three week Internship program in association with Right Brain Mapping, IIT Kharagpur from 20th July 2018 to 4th August 2018 on "Application Development using Python and MATLAB" and "Internet of Things using Python". The Resource Person was Mr. Rajeev Ranjan, Project Lead, RBM, IIT Kharagpur.</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/ec_collo_img2.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/ec_collo_img3.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/ec_collo_img4.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/ec_collo_img5.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/ec_collo_img6.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2028" class="edp-content">
                <h6>Workshop on "IOT using Raspberry Pi and Arduino"</h6>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/colloquium/img132.jpg" alt="">
                        </div>
                    </div>
                </div>
                <p>Department of ECE, S.I.E.T has conducted a workshop for one week from 26th to 28th March 2018 on “IOT using Raspberry Pi and Arduino” in association with Right Brain Mapping and IIT Kharagpur.</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/colloquium/iot.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2029" class="edp-content">
                <h6>Academic Colloquium on "Recent Technologies in Power Electronics Application"</h6>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/colloquium/img104.jpg" alt="">
                        </div>
                    </div>
                </div>
                <p>The department of ECE organized research colloquium under AVISHKAR Club on 17th October 2017. The event started with formal inaugural function graced by the presence of dignitaries and Speaker Dr. Vuddanti Sandeep, Asst. Professor in School of Engineering, Central University Karnataka, Kalburgi, KARNATAKA, India . Dr. Vuddanti Sandeep gave a talk on Recent Technologies in Power Electronics Application”</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/colloquium/ecapp.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2030" class="edp-content">
                <h6>Colloquium on Trending Technologies and Cyber Security</h6>
                <p>The department of ECE organized research colloquium under AVISHKAR Club on 17th October 2017. The event started with formal inaugural function graced by the presence of dignitaries and Speaker Dr. Vuddanti Sandeep, Asst. Professor in School of Engineering, Central University Karnataka, Kalburgi, KARNATAKA, India . Dr. Vuddanti Sandeep gave a talk on Recent Technologies in Power Electronics Application”</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/colloquium/ecapp.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2031" class="edp-content">
                <h6>Hands- on Learning: Building Cloud</h6>
                <p>The department of ECE organized research colloquium under AVISHKAR Club on 17th October 2017. The event started with formal inaugural function graced by the presence of dignitaries and Speaker Dr. Vuddanti Sandeep, Asst. Professor in School of Engineering, Central University Karnataka, Kalburgi, KARNATAKA, India . Dr. Vuddanti Sandeep gave a talk on Recent Technologies in Power Electronics Application”</p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/colloquium/ecapp.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- mech dept -->
    <?php elseif ($department == "Mechanical") : ?>
        <div class="container mt-3">
            <div class="edp-links">
                <a href="#" class="edp-link" data-target="edp2016">STUDENTS WORKSHOPS ORGANISED</a>
                <a href="#" class="edp-link" data-target="edp2017">TECHNICAL TALK / SEMINARS</a>
                <a href="#" class="edp-link" data-target="edp2018">Webinar On Human Vibrations: Computational and Experimental Techniques</a>
                <a href="#" class="edp-link" data-target="edp2019">Webinar On Application of 3D Printing In Medical Field</a>
                <a href="#" class="edp-link" data-target="edp2020">A Walk Through The Dynamics Of Energey Harvesters</a>
                <a href="#" class="edp-link" data-target="edp2021">Composites And Material Joining - Introduction</a>
                <a href="#" class="edp-link" data-target="edp2022">Using Genetic Algorithm: An Engineering Student Appraoch</a>
                <a href="#" class="edp-link" data-target="edp2023">Colloquium on Human Problem, Innovations, Entrepreneurship And Mechanical Engineers</a>
                <a href="#" class="edp-link" data-target="edp2024">Entrepreneurship Development Programme: Introduction and Government Support</a>
                <a href="#" class="edp-link" data-target="edp2025">Colloquium On Scope of Research On IC Engines</a>
                <a href="#" class="edp-link" data-target="edp2026">Role of Composite Materials in Modern Orthopedic Medicine</a>
                <a href="#" class="edp-link" data-target="edp2027">IC Engine Testing and Emission Control Technologies</a>
            </div>
            <div id="edp2016" class="edp-content">
                <h6>STUDENTS WORKSHOPS ORGANISED</h6>
                <a href="../pdf/colloquium/workshop_student.pdf">Student Workshop</a>
            </div>
            <div id="edp2017" class="edp-content">
                <h6>TECHNICAL TALK / SEMINARS</h6>
                <a href="../pdf/colloquium/Technical talk.pdf">Technical Seminar</a>
            </div>
            <div id="edp2018" class="edp-content">
                <h6>Webinar On Human Vibrations: Computational and Experimental Techniques</h6>
                <a href="../pdf/colloquium/Report_Human_Vibration.pdf">Webinar</a>
            </div>
            <div id="edp2019" class="edp-content">
                <h6>Webinar On Application of 3D Printing In Medical Field</h6>
                <a href="../pdf/colloquium/3DPrintingInMedicalField.pdf">3D Printing Webinar</a>
            </div>
            <div id="edp2020" class="edp-content">
                <h6>A Walk Through The Dynamics Of Energey Harvesters</h6>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/colloquium/img311.jpg" alt="">
                        </div>
                    </div>
                </div>
                <p>The Department of Mechanical Engineering organized a colloquium on "A walk through the Dynamics of Energy Harvesters" on 18/10/2019 in order to encourage the students towards research and development in the field of Applied Mechanics and Dynamics of Machines.</p>
                <p>The session was carried by eminent speaker Dr. Shaikh Faruque Ali, Associate Professor, Department of Applied Mechanics, Indian Institute of Technology (IIT) Madras.</p>
                <h6>Key notes of the session:</h6>
                <ul>
                    <li>Motivational speech to the students towards research and development.</li>
                    <li>An overview on ongoing projects at IIT Madras.</li>
                    <li>Introduction to Applied Mechanics and Dynamics of Machines.</li>
                    <li>Application of Dynamics of Machines in Automobile industry and Aircraft industry.</li>
                    <li>Detailed discussion on Single degree of freedom and multiple degree of freedom and Resonance and its effect.</li>
                    <li>Discussion regarding improvised research topics like retrofitting by advanced composite materials.</li>
                </ul>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/mech_q19_1.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/mech_q19_2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/mech_q19_3.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/mech_q19_4.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/mech_q19_5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2021" class="edp-content">
                <h6>Composites And Material Joining - Introduction</h6>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/colloquium/img275.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2022" class="edp-content">
                <h6>Using Genetic Algorithm: An Engineering Student Appraoch</h6>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/mech_coll6.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/mech_coll7.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2023" class="edp-content">
                <h6>Colloquium on Human Problem, Innovations, Entrepreneurship And Mechanical Engineers</h6>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/img245.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/mech_coll2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2024" class="edp-content">
                <h6>Entrepreneurship Development Programme: Introduction and Government Support</h6>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/colloquium/mech_coll5.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2025" class="edp-content">
                <h6>Colloquium On Scope of Research On IC Engines</h6>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/img248.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/colloquium/mech_coll-1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2026" class="edp-content">
                <h6>Role of Composite Materials in Modern Orthopedic Medicine</h6>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/colloquium/mech_coll4.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2027" class="edp-content">
                <h6>IC Engine Testing and Emission Control Technologies</h6>
                <div class="row">
                    <div class="col-md-12">
                        <div class="image-container">
                            <img src="../img/colloquium/mech_coll3.jpg" alt="">
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