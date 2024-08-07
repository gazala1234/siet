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

    .grievance-cell .row {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .grievance-cell .sports img {
        width: 25rem;
        height: 15rem;
        object-fit: cover;
    }

    .grievance-cell p {
        margin-top: 20px;
    }
</style>
<div class="container my-3">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="grievance-redressal-tab" data-toggle="tab" href="#grievance-redressal" role="tab" aria-controls="grievance-redressal" aria-selected="true">Committee Members</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="anti-ragging-tab" data-toggle="tab" href="#anti-ragging" role="tab" aria-controls="anti-ragging" aria-selected="false">Aims and Objectives</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="anti-sexual-harassment-tab" data-toggle="tab" href="#anti-sexual-harassment" role="tab" aria-controls="anti-sexual-harassment" aria-selected="false">Pledge</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="prevention-caste-discrimination-tab" data-toggle="tab" href="#prevention-caste-discrimination" role="tab" aria-controls="prevention-caste-discrimination" aria-selected="false">Activities</a>
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
                <h5>Aims and Objectives</h5>
                <p>The national service scheme is a public service program sponsoredby the ministry of youth affairs & sports, govt of india.This scheme was launched in ghandiji's centenary year 1969. Aimed at developing students personality through community service. NSS is a voluntary association of young people in colleges and universities.</p>
                <p>i. This programme aims to inculcate social welfare in students and to provide service to the society without bias.</p>
                <p>ii. To integrate and develop the sense of participation, service andachievement among the volunteers.</p>
                <p>iii. Providing opportunities to the students for utilizing their knowledge and talent in planning and executing developmental projects which would improve the quality of life in rural areas , slum areas and economically weaker sections of the community.</p>
                <p>iv. Encouraging students and local youths of rural areas to work together for the social and cultural development.</p>
                <p>v. Creating durable community assets in rural areas ,urban slum areas and developing leadership quality among the volunteers and local youth inorder to maintain the assets created during the camp.</p>
                <p>vi. Encouraging youths to participate enthusiastically in the process of national development and promote national integration through corporate living and cooperative action.</p>
                <p>vii. NSS also aims at instilling discipline, building character, promotion of physical fitness and development of culture.</p>
                <p>viii. It aims to develop capacity to meet emergencies and natural disasters and practice national integration and social harmony.</p>
            </section>
        </div>
        <div class="tab-pane fade" id="anti-sexual-harassment" role="tabpanel" aria-labelledby="anti-sexual-harassment-tab">
            <section class="grievance-cell">
                <h5>Volunteers will be required to take the following pledge:</h5>
                <p>"We the student volunteers and proud members of the National Service Scheme do hereby pledge that we shall uphold the pride and prestige of our National Service Scheme and always strive to maintain Tolerance & Sacrifice, Love & Concern, service & sacrifice and follow high standards of ethics in life and academic performance. We also pledge that we will never resort to any sort of violence instead strive to settle all differences and disputes relating to religion, language, region, political and economic grievances by peaceful and constitutional means. We promised to work with dedication to preserve and strengthen the integrity of our nation and committed to selfless service to the society."</p>
            </section>
        </div>
        <div class="tab-pane fade" id="prevention-caste-discrimination" role="tabpanel" aria-labelledby="prevention-caste-discrimination-tab">
            <section class="grievance-cell">
                <h5>Activities:</h5>
                <p>i. Organizing awareness programmes of sanitation and health in rural and slum areas.</p>
                <p>ii. Involvment in cleaning activities in rural areas ,slum areas along with local youths.</p>
                <p>iii. Organizing health camps and blood donation camps.</p>
                <p>iv. Afforestation or reforestation to maintain balance in ecosystem.</p>
                <p>v. Awareness rallies and organising stage shows addressing social , health and educational problems in rural and slum areas.</p>

                <h5 class="mt-4">NSS Activities <br> Academic Year 2018-19:</h5>
                <p>National Service Scheme at SIET, Vijayapur, provides diversified opportunities to students to develop their personality through community services. Community services rendered by students have covered several aspects like blood donation camps, mass tree plantation, Cleanness programs etc</p>
                <img src="../img/activities/s22.jpg" alt="" class="d-block mx-auto">

                <h6 class="mt-4">BLOOD DONATION CAMP:</h6>
                <p>A Blood donation camp was organized on 29th August 2018 in association with HDFC Bank Ltd,Vijaypur. The function was inaugurated by Dr. Saleem Dhundsi, Dean, Al-ameen Medical College, Vijaypur. Students and staff participated actively and 60 units of Blood were donated.</p>
                <div class="row sports">
                    <div>
                        <img src="../img/activities/s23.jpg" alt="">
                    </div>
                    <div>
                        <img src="../img/activities/s24.jpg" alt="">
                    </div>
                </div>

                <h6 class="mt-4">PLANTATION DRIVE:</h6>
                <p>To create awareness and sense of responsibility towards the environment, a Plantation Drive was organized on 4th September 2018. The function was inaugurated by Mr. Sikander Kalburgi, Assistant Engineer, Vijaypur Urban Development Authority (VUDA). Students planted 150 saplings in campus, social places and other educational institutes.</p>
                <div class="row sports">
                    <div>
                        <img src="../img/activities/s25.jpg" alt="">
                    </div>
                    <div>
                        <img src="../img/activities/s26.jpg" alt="">
                    </div>
                </div>

                <h6 class="mt-4">SWACHHA BHARAT ABHIYAN:</h6>
                <p>Swachha Bharat Abhiyan program was conducted on 6th September 2018 in SIET to create awareness of cleanliness among students and staff. Students participated actively in cleaning of college campus, canteen, hostel and play ground.</p>
                <div class="row sports">
                    <div>
                        <img src="../img/activities/s27.jpg" alt="">
                    </div>
                    <div>
                        <img src="../img/activities/s28.jpg" alt="">
                    </div>
                </div>

                <h5 class="mt-4">ACADEMIC YEAR: 2017-18</h5>
                <h6>PLANTATION DRIVE:</h6>
                <p>A plantation drive was organized on 13th Nov 2017 by the NSS unit of our college.The function was inaugurated by Kuldeep Jain, Superintendent of Police, Vijaypura.</p>
                <div class="row sports">
                    <div>
                        <img src="../img/activities/s29.jpg" alt="">
                    </div>
                    <div>
                        <img src="../img/activities/s30.jpg" alt="">
                    </div>
                    <div>
                        <img src="../img/activities/s31.jpg" alt="">
                    </div>
                </div>

                <h6 class="mt-4">SWACHHA BHARAT ABHIYAN:</h6>
                <p>Swachha Bharat Abhiyan program was conducted on 15th Sep2017 in our college to create awareness of cleanliness among students and staff. Students participated actively in cleaning of college campus, canteen, hostel and play ground.</p>
                <div class="row sports">
                    <div>
                        <img src="../img/activities/s32.jpg" alt="">
                    </div>
                    <div>
                        <img src="../img/activities/s33.jpg" alt="">
                    </div>
                </div>

                <h6 class="mt-4">NO VEHICLE DAY:</h6>
                <p>A ‘No Vehicle day’ was observed on 14th Nov 2017 in order to create awareness among students and staff members of SIET.</p>
                <img src="../img/activities/s34.jpg" alt="" class="d-block mx-auto">

                <h6 class="mt-4">PARTICIPATION IN BLOOD DONATION CAMP ORGANISED BY SYNDICATE BANK</h6>
                <p>A blood donation camp was organized by Syndicate bank on 25th October 2017. Staff and students of our institute participated and donated blood.</p>
                <img src="../img/activities/s35.jpg" alt="" class="d-block mx-auto">

            </section>
        </div>
    </div>
</div>

<!-- included footer -->
<?php include '../home/footer.php' ?>