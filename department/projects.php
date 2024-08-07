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
    <h3 class="text-center mt-3">Projects</h3>

    <!-- bs dept -->
    <?php if ($department == "Applied Science") : ?>


        <!-- cv dept -->
    <?php elseif ($department == "Civil") : ?>
        <div class="container mt-3">
            <a href="../pdf/project/cv_project.pdf">Sponsered Projects List</a>
            <div class="edp-links mt-3">
                <a href="#" class="edp-link" data-target="edp2016">ADSORPTION STUDIES FOR THE TREATMENT OF DAIRY INDUSTRY WASTEWATER BY USING LOW COST ADSORBENTS LIKE FLY ASH AND SUGAR BAGASSE</a>
                <a href="#" class="edp-link" data-target="edp2017">TREATMENT OF SUGAR INDUSTRY WASTEWATER USING ELECTROCOAGULATION TECHNIQUE IN MONOPOLAR AND BIPOLAR ELECTRODE SYSTEMS</a>
                <a href="#" class="edp-link" data-target="edp2018">WASTE WATER TREATMENT BY USING NATURAL COAGULANTS</a>
            </div>
            <div id="edp2016" class="edp-content">
                <h6>ADSORPTION STUDIES FOR THE TREATMENT OF DAIRY INDUSTRY WASTEWATER BY USING LOW COST ADSORBENTS LIKE FLY ASH AND SUGAR BAGASSE</h6>
                <h5>Fly Ash</h5>
                <p>The low cost adsorbent will be collected from kudagi thermal power plant and utilized for the treatment of dairy wastewater.</p>
                <h5>Sugar Bagasse</h5>
                <p>Sugar Bagasse collected from shreedyanyogi Shivkumar Shivayogi sugars limited at Hirebenur is used as adsorbent.</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/projects/cvp12.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/projects/cv13.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2017" class="edp-content">
                <h6>TREATMENT OF SUGAR INDUSTRY WASTEWATER USING ELECTROCOAGULATION TECHNIQUE IN MONOPOLAR AND BIPOLAR ELECTRODE SYSTEMS</h6>
                <p>The space between all the electrodes was maintained 2cm in all the experiments. In each run the voltage was varied to a desired value of 10, 15, 20 and 25V. The volume of solution in each batch experiment is 1.00 L. Magnetic stirrer is used in all tests to ensure a homogenous solution in the batch reactor containing wastewater. About 2g/L of boric acid is added as electrolyte to the wastewater for each batch. The wastewater concentration is reduced to half the strength throughout the study to reduce the time.</p>
                <p>And current consumption and to obtain better efficiency. Electrodes were washed with 15-20% HC1 followed by a detergent wash before experiment. The EC experiments were performed for 75mins and in each run samples were collected at every 15mins interval for necessary analysis. All the samples were allowed to settle for one hour before analysis.</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/projects/cvp22.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/projects/cvp23.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2018" class="edp-content">
                <h6>WASTE WATER TREATMENT BY USING NATURAL COAGULANTS</h6>
                <h5>Milk</h5>
                <p>The milk is one of the most important commodity entering trades and it is required in everyday life as an article of food. Since the milk is highly perishable, basic public health and economic consideration is required that consumer should be provide with the product which of good quality, pure, free from pathogenic bacteria. To maintain quality standard, quality control operation have to be performed at all the stage of production of milk which includes maintenances of sanitary conditions at milking place, storage transportation and handling the milk at reception docks, processing and packing etc.till the milk is delivered to consumer.</p>
                <h5>Method</h5>
                <p>The study was carried out by the Jar test standard method using a 1-liter wastewater and then its pH measured and adjusted to be around 7.5. Conditioning time for coagulants was 3 min and 30 seconds for flocculants at 350 rpm, and then 9 min for flocculation at 50 rpm and settling time - 3 min. To evaluate the results, we measured water clarity by using the standard Colorimeter method, COD by using Titration method, pH by pH-meter Jar test by using coagulation and flocculation method. The results and discussion are shown below.</p>
                <h5>Aloevera</h5>
                <p>Aloevera is a stemless or very short Stemmed plant. Aloevera is used in herbal Medicines and cosmetics .Aloevera has been widely Grown as an ornamental plant</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/projects/cvp31.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/projects/cvp32.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- cs dept -->
    <?php elseif ($department == "Computer Science") : ?>
        <div class="container mt-3">
            <a href="../pdf/project/CS_projects1819.pdf">Sponsered Projects List 2018-19</a><br>
            <a href="../pdf/project/CS_projects1920.pdf">Sponsered Projects List 2019-20</a><br>
            <a href="../pdf/project/CS_projects2021.pdf">Sponsered Projects List 2020-21</a><br>
            <a href="../pdf/project/cs_pROJECT_sPONSERED21-22 .pdf">Sponsered Projects List 2021-22</a><br>
            <div class="edp-links mt-3">
                <a href="#" class="edp-link" data-target="edp2016">A PROTOTYPE FOR A BLIND NAVIGATION SYSTEM BASED ON GPS VOICE ALERT SYSTEM</a>
                <a href="#" class="edp-link" data-target="edp2017">E-MAGAZINE</a>
                <a href="#" class="edp-link" data-target="edp2018">SMART IRRIGATION USING IOT</a>
            </div>
            <div id="edp2016" class="edp-content">
                <h6>A PROTOTYPE FOR A BLIND NAVIGATION SYSTEM BASED ON GPS VOICE ALERT SYSTEM</h6>
                <p>Blind Stick Navigator is blind assist tool that are basically came out from traditional white cane and upgraded into current technology. This new method of implementing current technology component likes 1Sheeld will helps least the difficulties of the blind people community in achieving better response feedback of their surrounding. The project provides alert system through vibration and speech system by using cane, 1Sheeld, Arduino Programming, ultrasonic sensor and vibration motor. The system also provides alternative ways every time an obstacles is detected.</p>
            </div>
            <div id="edp2017" class="edp-content">
                <h6>E-MAGAZINE</h6>
                <p>The project aims at design and development of an online e-magazine. We appreciate the power of social media in this digital era. E-magazine is a boon to students and teachers as hard copies leads to wastage of paper and are cumbersome to carry. Its the era where people prefer writing blogs and staying in touch through the internet. Though there are e-magazines already existing, they do not provide multimedia support, this E-magazine supports various media including text, images and videos. As every student has access to the internet. Hence, it becomes imperative to create an online college magazine for students to share their own articles, read various articles, thus promoting literary insight. Presently there is no common platform for students and teachers to connect and this project is an initiative in proving the same.</p>
            </div>
            <div id="edp2018" class="edp-content">
                <h6>SMART IRRIGATION USING IOT</h6>
                <p>In India with the water requirements in irrigation being large, there is a need for a smart irrigation system that can save about 80% of the water. This prototype aims at saving time and avoiding problems like constant vigilance. It also helps in water conservation by automatically providing water to the plants/gardens depending on their water requirements. This prototype has many advantages which make it a good alternative to the current approaches since it facilitates the farmers to assist them in daily needs of the monitoring and controlling the field environmental parameters with minimum cost and user friendliness.</p>
            </div>
        </div>

        <!-- ee dept -->
    <?php elseif ($department == "Electrical and Electronics") : ?>
        <div class="container mt-3">
            <div class="edp-links">
                <a href="#" class="edp-link" data-target="edp2016">Design and Development of Building Integrated Wind Turbine for Classroom Electrification at College Campus(KSCST, Bangalore)</a>
                <a href="#" class="edp-link" data-target="edp2017">Design and Development of H-Rotor Vertical Axis Wind Turbine for Classroom/Street Light Electrification at College Campus.(KSCST, Bangalore)</a>
                <a href="#" class="edp-link" data-target="edp2018">Design and Development of Building Integrated Wind Turbine for Classroom Electrification at College Campus(VTU, Belagavi)</a>
                <a href="#" class="edp-link" data-target="edp2019">A smart IOT based system for monitoring and controlling of distribution transformer(VTU, Belagavi)</a>
                <a href="#" class="edp-link" data-target="edp2020">Hybrid Electric Vehicle</a>
                <a href="#" class="edp-link" data-target="edp2021">Design and Implementation of An Improved Version Of Solar Inverter (Funded By KSCST,Govt.of Karnataka )</a>
                <a href="#" class="edp-link" data-target="edp2022">Design and implementation of ATM Security using GSM modem and Vibration Sensor</a>
            </div>
            <div id="edp2016" class="edp-content">
                <h6>Design and Development of Building Integrated Wind Turbine for Classroom Electrification at College Campus(KSCST, Bangalore)</h6>
                <p>The integration of renewable energy resources in buildings is a fundamental aspect of the 21st century architecture in order to achieve zero energy buildings (ZEB), reduce the consumption of fossil energy and cut carbon emissions in urban areas. Besides photovoltaic systems, now a days small wind turbines (SWTs) are becoming particularly interesting due to their potential to produce energy at moderate wind speeds. These small wind generators (200 W - 10kW) can be integrated into urban buildings for supplying power to individual premises. However, the development of small scale power such as SWTs are focused on private consumers, Therefore, the mass scale dissemination of this technology demands increase in efficiency and reduction in cost.</p>
            </div>
            <div id="edp2017" class="edp-content">
                <h6>Design and Development of H-Rotor Vertical Axis Wind Turbine for Classroom/Street Light Electrification at College Campus.(KSCST, Bangalore)</h6>
                <p>In developing countries like India, there are about hundred millions of small farmers and around eighty thousand villages that are yet to be electrified. Even though India has surplus of power generation, the shortage of electricity prevails due to inadequate grid connectivity. Also there are thousands of small scale industries consuming less than 10 kW of power. Currently Solar photo-voltaic (PV) generation has become a viable option for such applications. However, high cost, usage of large space, weather dependency, dust accumulation and unavailability of solar energy during night times are major barriers to the dissemination of PV generation. The poor efficiency encountered due to these issues can be greatly compensated by hybridization of small wind turbine with PV technology. The small wind turbines can also be mounted on roof tops of any commercial or domestic building to electrify the entire premises. So the proposed technology can have vital contribution if made cost-effective and efficient.</p>
            </div>
            <div id="edp2018" class="edp-content">
                <h6>Design and Development of Building Integrated Wind Turbine for Classroom Electrification at College Campus(VTU, Belagavi)</h6>
                <p>In developing countries like India, there are about hundred millions of small farmers and around eighty thousand villages that are yet to be electrified. Even though India has surplus of power generation, the shortage of electricity prevails due to inadequate grid connectivity. Also there are thousands of small scale industries consuming less than 10 kW of power. Currently Solar photo-voltaic (PV) generation has become a viable option for such applications. However, high cost, usage of large space, weather dependency, dust accumulation and unavailability of solar energy during night times are major barriers to the dissemination of PV generation. The poor efficiency encountered due to these issues can be greatly compensated by hybridization of small wind turbine with PV technology. The small wind turbines can also be mounted on roof tops of any commercial or domestic building to electrify the entire premises. So the proposed technology can have vital contribution if made cost-effective and efficient. Recently, vertical axis wind turbines (VAWT) are becoming economically viable option for small power capacity deployments due to their ability to collect wind from all the directions. This unique feature enables VAWT to operate efficiently under low speed and skewed wind conditions. Also VAWT requires small space for its operation, produces less noise and offers more efficiency as compared to traditional Horizontal Axis Wind Turbines (HAWT). Further, placement of generator on ground and small tower sway makes the installation and maintenance much easier. The most popular are H-Rotor VAWT due to their simple blade profile as compared to other VAWT systems. Further, fabrication of H-Rotor blade is simple and low cost due to symmetrical aerofoil section throughout the blade span.</p>
            </div>
            <div id="edp2019" class="edp-content">
                <h6>A smart IOT based system for monitoring and controlling of distribution transformer(VTU, Belagavi)</h6>
                <p>To maintain the reliability in grid operation it is important to monitor real time transformer health. We know the importance of transformers in electricity distribution and transmission. They are the main components and constitute the large portion of capital investment of the distribution grid. Real time transformer health monitoring systems help to replace the equipment before failure and continuity of the power will not be disturbed.</p>
                <h5>Why its important to develop IoT Based Transformer Monitoring System?</h5>
                <p>To understand this we need to find the drawbacks of the conventional transformer monitoring system and the biggest problem in the electricity distribution grid.</p>
                <ul>
                    <li>Most of the distribution transformer are remotely located in a rural area, where regular monitoring by human observation is difficult to perform due to insufficient manpower.</li>
                    <li>Our existing monitoring systems are not supported for real time operations. There is to many transformer failure cases are detected every day.</li>
                    <li>Not allowed for planning operation downtime.</li>
                    <li>Coventional system Don't have nay internal fault testing [incipient fault monitoring]</li>
                    <li>To overcome the above drawbacks we need a smart and reliable</li>
                </ul>
                <p>solution to monitor the distribution transformer parameter and send it to the IoT platforms in real time. It enables the grid operator to define the performance of the unit. It also provides important information about transformer health. IoT Based Transformer Monitoring System will allow the utilities to optimally run the transformer and keep this equipment in operation for a longer period.</p>
                <h5>The important parameter we needs to monitor:</h5>
                <ul>
                    <li>Transformer Temperature</li>
                    <li>Oil Level </li>
                    <li>Oil Quality</li>
                    <li>Current level</li>
                    <li>Voltage level</li>
                    <li>Humidity</li>
                    <li>KVA and Power Factor</li>
                    <li>Incipient fault monitoring</li>
                </ul>
            </div>
            <div id="edp2020" class="edp-content">
                <h6>Hybrid Electric Vehicle</h6>
                <p>Bicycles have always been a popular mode of transportation due to their low cost, ease of use, health benefits and mobility. An electric bicycle users an electric motor for the purpose of moving. On this bicycle, people do not have to use their muscular force to move. It uses electrical energy for motion. They are also known as e-bikes. There are many varieties of electric bicycles. Some of these bikes have rechargeable battery. This makes it easy to power the bike whenever you want. They make use of stored electrical energy in some or the other form. Due to this form of energy, the bicycles have more power and speed. The electric bicycle uses rechargeable batteries. Batteries used in this vehicle are lithium-ion batteries, nickel-cadmium batteries or any other. The parameters of the battery vary according to the voltage and capacity required for the vehicle. The type of the controllers depends upon the motors used in the vehicle. The motor is activated by a throttle, usually handlebar- mounted just like on most motorcycles or scooters.</p>
            </div>
            <div id="edp2021" class="edp-content">
                <h6>Design and Implementation of An Improved Version Of Solar Inverter (Funded By KSCST,Govt.of Karnataka )</h6>
                <p><b>Funded Agency :</b> 41st Series, SPP, Karnataka State Council for Science & Technology(KSCST), Govt. of Karnataka, India</p>
                <p>The world demand for electrical energy is constantly increasing and conventional energy resources are diminishing and are at the edge of extinction, moreover their prices are rising. For all these reasons, the need for alternative energy sources has become necessary and solar energy in particular has proves to be very promising alternative because of its easy availability and plolution free nature. Due to increasing efficiency, decreasing cost of solar panels and improvement of the switching technology used for the conversion, we are interested in developing an inverter powered by solar panels and could supply stand alone AC loads. Solar panels produce DC and use them in home and industrial appliances, we should have ac output at certain required voltage level and frequency. Thus solar converts the solar energy to useful elecrical energy (DC to AC).</p>
            </div>
            <div id="edp2022" class="edp-content">
                <h6>Design and implementation of ATM Security using GSM modem and Vibration Sensor</h6>
                <p>In the era of digitalization, everyone needs money without interaction with bank at any time. So the ATM (Automotive Teller Machines) are installed everywhere in the localities. As the number of ATMs increased, prevention of theft and security of customer is the prime objective. At present, security systems are not highly secured as they are only provided with alarm system. This project deals with design and implementation of ATM security system using vibration sensor and GSM Modem. The prime objective of this project is, to secure the ATM system using vibration sensor and GSM modem. In this project, when a thief enters and tried to harm the machine, the vibration sensor which is attached to the machine get vibrated and sends the signal to the ARDUINO microcontroller. Once the controller receives signal, it locks the door of ATM room by sending signal to the dc motor and sprinkler sprinkles the chloroform to make the thief unconscious. The buzzer will also be getting activated at the same time to alert the nearby people of ATM system. Simultaneously, the controller will send a message to an authorized person of the bank through GSM modem and The door is made to open only after entering the password by the bank staff. The project is implemented and worked successfully.</p>
            </div>
        </div>

        <!-- ece dept -->
    <?php elseif ($department == "Electronics and Communication Engineering") : ?>
        <div class="container mt-3">
            <a href="../pdf/project/ECE_projects22.pdf">Sponsered Projects List</a><br>
            <div class="edp-links mt-3">
                <a href="#" class="edp-link" data-target="edp2016">Automated Water Billing for Apartments v2.0 (Funded By KSCST, Govt. of Karnataka )</a>
                <a href="#" class="edp-link" data-target="edp2017">Design And Implementation Of Magic Mirror For Home Security Using IoT And Facial Emotion Detection With Alleviation Effects (Funded by Karnataka Science & Technology academy, Dept. of Science & Technology, Govt. of Karnataka)</a>
                <a href="#" class="edp-link" data-target="edp2018">Automated Water Billing for Apartments (Funded By KSCST,Govt.of Karnataka )</a>
                <a href="#" class="edp-link" data-target="edp2019">IoT Based Railway Track Monitoring Smart Robot Using Solar Energy</a>
                <a href="#" class="edp-link" data-target="edp2020">Design And Implementation of Magic Mirror for Social-Emotion Alleviation in the Smart Home using GSM (Funded By KSCST,Govt.of Karnataka )</a>
            </div>
            <div id="edp2016" class="edp-content">
                <h6>Automated Water Billing for Apartments v2.0 (Funded By KSCST, Govt. of Karnataka )</h6>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/projects/ec_p1819_img2.png" alt="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/projects/ec_p1819_img3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2017" class="edp-content">
                <h6>Design And Implementation Of Magic Mirror For Home Security Using IoT And Facial Emotion Detection With Alleviation Effects (Funded by Karnataka Science & Technology academy, Dept. of Science & Technology, Govt. of Karnataka)</h6>
                <div class="row">
                    <div class="col-md-6">
                        <div class="image-container">
                            <img src="../img/projects/ec_p1819_img5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="edp2018" class="edp-content">
                <h6>Automated Water Billing for Apartments (Funded By KSCST,Govt.of Karnataka )</h6>
                <p>The project entitled <b>"Automated Water Billing for Apartments"</b> is successfully designed and implemented water billing system for flats in an apartment, based on the amount of water consumption of each flat using Arduino platform. The previous month bill will be sent to the flat owner through SMS on starting off a fresh month.</p>
                <h4>KSCST Sponsored Project</h4>
                <p>Project entitled <b>Automated Water Billing for Apartmentsunder</b> the guidance of Prof. Vishwanath Shidlingappanavar has been sponsored of Rs.6000/- by KSCST, Govt. of Karnataka.</p>
            </div>
            <div id="edp2019" class="edp-content">
                <h6>IoT Based Railway Track Monitoring Smart Robot Using Solar Energy</h6>
                <p>The project <b>"IoT Based Railway Track Monitoring Smart Robot Using Solar Energy"</b> is successfully designed and Implemented Robust Railway Crack Detection Scheme using Ultrasonic sensor for detecting the cracks on railway tracks and the information is sent to the control station using IoT and also the Detection of the obstacle/human/animal on the track using PIR sensor and blow a horn to make the way clear.</p>
            </div>
            <div id="edp2020" class="edp-content">
                <h6>Design And Implementation of Magic Mirror for Social-Emotion Alleviation in the Smart Home using GSM (Funded By KSCST,Govt.of Karnataka )</h6>
                <p>The project aims to provide facial expression captured via camera and produce alleviation based on facial emotions and also provide positive statements and music therapy</p>
                <h4>KSCST Sponsored Project</h4>
                <p>Project entitled <b>Design and Implementation of Magic Mirror for Socio - Emotion Allumiation in Smart Home using GSMA</b> under the guidance of Prof. Mohammed Ziaullah Choudary has been sponsored of Rs. 5000/- by KSCST, Govt. of Karnataka.</p>
            </div>
        </div>

        <!-- mech dept -->
    <?php elseif ($department == "Mechanical") : ?>
        <div class="container mt-3">
            <a href="../pdf/project/ME_projects2018.pdf">Sponsered Projects List 2018</a><br>
            <a href="../pdf/project/ME_projects2020.pdf">Sponsered Projects List 2020</a><br>
            <div class="edp-links mt-3">
                <a href="#" class="edp-link" data-target="edp2016">DESIGN AND DEVELOPMENT OF AQUASILENCER TO PREVENT GLOBAL WARMING</a>
                <a href="#" class="edp-link" data-target="edp2017">DESIGN AND FABRICATION OF ADJUSTABLE MULTISEASONAL HARVESTING MACHINE</a>
                <a href="#" class="edp-link" data-target="edp2018">SMART IRRIGATION USING IOT</a>
            </div>
            <div id="edp2016" class="edp-content">
                <h6>DESIGN AND DEVELOPMENT OF AQUASILENCER TO PREVENT GLOBAL WARMING</h6>
                <p>Air pollution is most important from the public health of view, because every individual person breaths approximately 22000 times a day, inhaling about 15 to 22 kg of air daily. Polluted air causes physical ill effect decides undesirable aestheticand physiological effects. Air pollution can be defined as addition to our atmosphere of any material, which will have a dexterous effect on life upon our planet. The main pollutants contribute by automobile are carbon monoxide (CO), unburned hydrocarbon (UBHC), oxides of nitrogen (NOx) and Lead. Automobiles are not the only sources of air pollution, other sources such as electric power generating stations, industrial and domestic fuel consumption, refuse burning, industrial processing etc. also contribute heavily to contamination of our environment so it is imperative that serious attempts should be made to conserve of our environment from degradation.</p>
            </div>
            <div id="edp2017" class="edp-content">
                <h6>DESIGN AND FABRICATION OF ADJUSTABLE MULTISEASONAL HARVESTING MACHINE</h6>
                <p>Agriculture plays a vital role in Indian economy. India is a country which is dependent on farming as a main source of income for many families. As far as Indian scenario is concerned, more than 75 percent farmers are belonging to small and marginal land carrying. So any improvement in the productivity related task help to increase Indian farmer's status and economy. Now a day's agriculture equipments have lot of limitation and it required more energy to operate. The purpose of the project is to fabricate and enhance the design specifications of harvesting machine for multipurpose crop which should be helpful for the farmers having less & marginal land. Further, the comparative study of harvesting from manual method, machine method and proposed machine method is discussed. It is observed from the results that, the proposed machine method shows reasonably good result when compared manual method and machine method.</p>
            </div>
            <div id="edp2018" class="edp-content">
                <h6>ENERGY-EXERGY ANALYSIS OF CI ENGINE FUELLED WITH RAPESEED/WASTE COOKING OIL BASED BIODIESEL</h6>
                <p>The present study is carried out in order to do Energy-Exergy analysis of CI engine using waste cooking oil/ rapeseed oil and biodiesel blends. Initially the biodiesel is produced from waste cooking oil and rapeseed oil using transesterification process. Thereafter the properties such as kinematic viscosity, calorific value, flash and fire point of the prepared biodiesel is done. Then performance parameters i.e., brake power, brake specific fuel consumption, brake thermal efficiency are evaluated and compared with mineral diesel. Then the Energy-Exergy analysis is carried out by writing mathematical equations and solved by using MATLAB software. It is observed from the results and discussion that, results obtained in this present work is reasonably accurate.</p>
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