<!-- included header -->
<?php include '../home/header.php' ?>
<style>
    .grievance-cell ul {
        list-style-type: none;
        padding-left: 0;
    }

    .grievance-cell ul li {
        position: relative;
        padding-left: 25px;
        margin-bottom: 10px;
        color: #666;
    }

    .grievance-cell ul li::before {
        content: "•";
        position: absolute;
        left: 0;
        color: #1cc3b2;
        font-size: 25px;
        top: 50%;
        transform: translateY(-50%);
    }

    .grievance-cell img {
        width: 50%;
        height: 50%;
        border: 2px solid #000;
        border-radius: 5px;
        transition: transform 0.3s ease, border-color 0.3s ease;
    }

    .grievance-cell img:hover {
        transform: scale(1.02);
        border-color: #000;
    }

    .grievance-cell .row {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .grievance-cell .row div {
        text-align: center;
        flex: 1 1 200px;
        margin-bottom: 10px;
    }

    .grievance-cell .row img {
        width: 100%;
        height: 70%;
        object-fit: cover;
    }

    .grievance-cell .sports img {
        width: 25rem;
        height: 15rem;
        object-fit: cover;
    }

    .grievance-cell .row div p {
        text-align: center;
        font-weight: bold;
        margin-top: 15px;
        color: #000;
        font-size: 14px;
    }

    .grievance-cell p {
        margin-top: 20px;
    }
</style>
<div class="container my-3">
    <h3>DEPARTMENT OF SPORTS</h3>
    <p>SECAB. I. E. T emphasises and flags healthy sports under the guidance of Sports Coordinator and Physical Education Director. Sports is considered to help students rather than distract them. The outdoor and indoor games are given equal relevance. The students are encouraged to participate in inter-college competitions/tournaments, District, State, National and International level competitions and events.

        The extra spacious ground is an enticing component which the Institute possesses. The students utilise it for outdoor sports. The equipment required for sports and games are collected for the students and to never have any shortage of necessary sports items is tracked. The Institute has assigned a sports coordinator to have complete sight on sports activities. He initiates sports competitions and records all the events and activities. He boosts the students to take part in sports.</p>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="grievance-redressal-tab" data-toggle="tab" href="#grievance-redressal" role="tab" aria-controls="grievance-redressal" aria-selected="true">Committee Members</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="anti-ragging-tab" data-toggle="tab" href="#anti-ragging" role="tab" aria-controls="anti-ragging" aria-selected="false">Activities/ Student Achievements</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="anti-sexual-harassment-tab" data-toggle="tab" href="#anti-sexual-harassment" role="tab" aria-controls="anti-sexual-harassment" aria-selected="false">Indoor Facilities</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="prevention-caste-discrimination-tab" data-toggle="tab" href="#prevention-caste-discrimination" role="tab" aria-controls="prevention-caste-discrimination" aria-selected="false">Outdoor Facilities</a>
        </li>
    </ul>
    <div class="tab-content mt-4" id="myTabContent">
        <div class="tab-pane fade show active" id="grievance-redressal" role="tabpanel" aria-labelledby="grievance-redressal-tab">
            <section class="grievance-cell">
                <table>
                    <tr>
                        <th>Sl. No.</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Position</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Dr. Sayed Zakir Ali</td>
                        <td>Principal</td>
                        <td>Chairman</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Mr. Gourishankar</td>
                        <td>Asst. professor</td>
                        <td>Convener</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Mr. Altaf Hussain Bagawan</td>
                        <td>Asst. professor</td>
                        <td>Coordinator</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Mr. Chetan Marol</td>
                        <td>Asst. professor</td>
                        <td>Member</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Ms. Zareena</td>
                        <td>Asst. professor</td>
                        <td>Member</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Mr. S. S. Jagirdar</td>
                        <td>Phy. Edu. Director</td>
                        <td>Member</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Mr. J. T. Devareddy</td>
                        <td>Phy. Edu. Director</td>
                        <td>Member</td>
                    </tr>
                </table>
            </section>
        </div>
        <div class="tab-pane fade" id="anti-ragging" role="tabpanel" aria-labelledby="anti-ragging-tab">
            <section class="grievance-cell">
                <h5>1. Following students participated/won the prizes at National/International level games</h5>
                <p>i) <b>Mohammed Yaseen. M. Mulla</b> student of 7th semester, Department of Mechanical Engineering has participated in ‘INDO-SRILANKA THROW BALL SERIES’ held at Colombo-SRILANKA from 9th to 13th November, 2017 where Team India has won the series.</p>
                <img src="../img/activities/s1.jpg" alt="" class="d-block mx-auto">

                <p>ii) <b>Mohammad Ismail Inamdar</b> student of Department of Basic Science Engineering has participated in ‘INDO-NEPAL TENNIS BALL CRICKET SERIES’ held at Phokra-NEPAL from 27th to 31st August, 2017 where team India has won the series with 3-0. He also participated in ‘25TH JUNIOR NATIONAL TENNIS BALL CRICKET CHAMPIONSHIP’ held at Bareilly, UP- INDIA from 3rd January to 6th January 2018.</p>
                <img src="../img/activities/s2.jpg" alt="" class="d-block mx-auto">

                <p>ii) <b>Santosh Naik</b> student of 8th semester, Department of Mechanical Engineering has participated in ‘2nd SENIOR ROCBALL NATIONAL CHAMPIONSHIP 2017-18’ held at Delhi-INDIA from 29th September to 1st October, 2017 where team has won the 2nd prize.</p>
                <img src="../img/activities/s3.jpg" alt="" class="d-block mx-auto">

                <h5 class="mt-4">2. Following students selected in VTU Gulbarga Zone Cricket team</h5>
                <p>i) <b>Vinayak Karande</b> student of 8th semester, Department of Civil Engineering had selected in ‘VTU Kalburgi zone Cricket team’ for the year 2017-18 held at SECAB. I. E. T, Vijayapura on 24th & 25th October, 2017</p>
                <img src="../img/activities/s4.jpg" alt="" class="d-block mx-auto">

                <p>ii) <b>Md. Rasool.Y</b> student of 8th semester, Department of Mechanical Engineering had selected in ‘VTU Kalburgi zone Cricket team’ for the year 2017-18 held at SECAB. I. E. T, Vijayapura on 24th & 25th October, 2017</p>
                <img src="../img/activities/s5.jpg" alt="" class="d-block mx-auto">

                <p>iii) <b>Mohammad Ismail Inamdar</b> student of Basic Science Engineering had selected in ‘VTU Kalburgi zone Cricket team’ for the year 2017-18 held at SECAB. I. E. T, Vijayapura on 24th & 25th October, 2017</p>
                <img src="../img/activities/s6.jpg" alt="" class="d-block mx-auto">

                <p>iv) <b>Dyanendrakumar</b> student of 8th semester Department of Mechanical Engineering had selected in VTU Kalburgi zone Cricket team for the year 2017-18 held at SECAB. I. E. T, Vijayapura on 24th & 25th October, 2017</p>
                <img src="../img/activities/s7.jpg" alt="" class="d-block mx-auto">

                <h5 class="mt-4">3. College teams won prizes in University college competitions during the year 2017-18</h5>
                <p>i) College Kabaddi team (Men) won 1st prize in <b>‘VTU Kalaburgi zone Kabaddi tournament’</b> held at SECAB. I. E. T, Vijaypur on 21st April, 2018</p>
                <img src="../img/activities/s8.jpg" alt="" class="d-block mx-auto">

                <p>ii) College Women’s Throw Ball team won 3rd prize in <b>‘VTU Kalaburgi zone Throw Ball tournament’</b> held at GNDCE, Bidar on 6th October, 2017</p>
                <img src="../img/activities/s9.jpg" alt="" class="d-block mx-auto">

                <p>iii) College Volleyball team won 3rd prize in <b>‘VTU Kalaburgi zone Volleyball tournament’</b> held at PDIT, Hospet 1st & 2nd March, 2018</p>
                <img src="../img/activities/s10.jpg" alt="" class="d-block mx-auto">

                <h5 class="mt-4">4. College teams participated in University college competitions during the year 2017-18</h5>
                <p>i) College students participated in <b>‘VTU Athletic Meet 2017-18’</b> held at VTU, Belagavi from 3rd to 6th November, 2017</p>
                <img src="../img/activities/s11.jpg" alt="" class="d-block mx-auto">

                <p>ii) College Shuttle Badminton team (Men) participated in <b>‘VTU Shuttle Badminton tournament’</b> held at BITM, Bellari on 4th & 5th September, 2017</p>
                <img src="../img/activities/s12.jpg" alt="" class="d-block mx-auto">

                <p>iii) College Cricket team participated in <b>‘VTU Cricket tournament’</b> held at RYMEC, Bellari from 7th to 11th March, 2018</p>
                <img src="../img/activities/s13.jpg" alt="" class="d-block mx-auto">

                <h5 class="mt-4">5. Following students participated in ‘VIJAYAPUR-BAGALKOT PREMIER LEAGUE (VBPL) 2018’ held at Vijayapura jointly organized by KSCA & Karnataka Sports Club, Vijayapura from 25th December, 2017 to 5th January, 2018</h5>
                <div class="row">
                    <div>
                        <img src="../img/activities/s14.jpg" alt="">
                        <p>Mohammad Ismail Inamdar (Basic Science)</p>
                    </div>
                    <div>
                        <img src="../img/activities/s15.jpg" alt="">
                        <p>Md. Rasool. Y (Mechanical)</p>
                    </div>
                    <div>
                        <img src="../img/activities/s16.jpg" alt="">
                        <p>Md. Shoaib (Civil)</p>
                    </div>
                    <div>
                        <img src="../img/activities/s17.jpg" alt="">
                        <p>Vinayak Hundekar (Civil)</p>
                    </div>
                </div>

                <h5>6. SECAB. I. E. T, Vijayapura successfully organized ‘VTU Kalburgi zone Cricket team selection trials’ on 24th & 25th October, 2017</h5>
                <div class="row sports">
                    <div>
                        <img src="../img/activities/s18.jpg" alt="">
                    </div>
                    <div>
                        <img src="../img/activities/s19.jpg" alt="">
                    </div>
                </div>

                <h5 class="mt-4">7. SECAB. I. E. T, Vijayapura successfully organized ‘VTU Kalburgi zone Kabaddi Tournamnet’ on 21st April, 2018</h5>
                <div class="row sports">
                    <div>
                        <img src="../img/activities/s20.jpg" alt="">
                    </div>
                    <div>
                        <img src="../img/activities/s21.jpg" alt="">
                    </div>
                </div>
            </section>
        </div>
        <div class="tab-pane fade" id="anti-sexual-harassment" role="tabpanel" aria-labelledby="anti-sexual-harassment-tab">
            <section class="grievance-cell">
                <ul>
                    <li>Athletics</li>
                    <li>Cricket</li>
                    <li>Volley Ball</li>
                    <li>Foot Ball</li>
                    <li>Basket Ball</li>
                    <li>Throw Ball</li>
                </ul>
            </section>
        </div>
        <div class="tab-pane fade" id="prevention-caste-discrimination" role="tabpanel" aria-labelledby="prevention-caste-discrimination-tab">
            <section class="grievance-cell">
                <ul>
                    <li>Badminton</li>
                    <li>Table tennis</li>
                    <li>Chess</li>
                    <li>Carrom</li>
                </ul>
            </section>
        </div>
    </div>
</div>

<!-- included footer -->
<?php include '../home/footer.php' ?>