<!-- included header -->
<?php include '../home/header.php'?>

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
    }

    .grievance-cell img {
        width: 90%;
        height: 80%;
        /* border: 1px solid #000; */
        border-radius: 5px;
    }

    .grievance-cell a {
        color: #1cc3b2;
    }

    .top-recruiters {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
    }

    .top-recruiters img {
        width: 20%;
        height: 10%;
    }

    .card-custom {
        margin: 10px 0px;
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    .card-custom img {
        margin-left: 10px;
        max-width: 100%;
        height: auto;
        object-fit: cover;
    }

    .card-custom .card-body {
        flex: 1;
    }
</style>

<div class="container my-3">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="grievance-redressal-tab" data-toggle="tab" href="#grievance-redressal" role="tab" aria-controls="grievance-redressal" aria-selected="true">Placement Overview</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="anti-ragging-tab" data-toggle="tab" href="#anti-ragging" role="tab" aria-controls="anti-ragging" aria-selected="false">Top Recruiters</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="anti-sexual-harassment-tab" data-toggle="tab" href="#anti-sexual-harassment" role="tab" aria-controls="anti-sexual-harassment" aria-selected="false">Placement Records</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="prevention-caste-discrimination-tab" data-toggle="tab" href="#prevention-caste-discrimination" role="tab" aria-controls="prevention-caste-discrimination" aria-selected="false">Placement Contact Details</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="other-grievance-tab" data-toggle="tab" href="#other-grievance" role="tab" aria-controls="other-grievance" aria-selected="false">Gallery</a>
        </li>
    </ul>
    <div class="tab-content mt-4" id="myTabContent">
        <div class="tab-pane fade show active" id="grievance-redressal" role="tabpanel" aria-labelledby="grievance-redressal-tab">
            <section class="grievance-cell">
                <img src="../img/placement/placement.jpg" alt="" class="d-block mx-auto">

                <h5 class="mt-4">Placement Desk</h5>
                <p>The Training & Placement Cell at SECAB Institute of Engineering and Technology, Vijayapur facilitates the process of placement of students passing out from the Institute besides collaborating with leading organizations and institutes in setting up of internship and training program for the students. The Training & Placement Cell liaises with various industrial establishments, corporate houses etc. which conduct campus interviews and select graduating engineering students from all disciplines.</p>

                <h5 class="mt-4">Placement Overview</h5>
                <p>The Training & Placement Cell provides the infra-structural facilities to conduct group discussions, written tests, and personal interviews besides catering to other logistics requirements. The placement season runs through the course of the year commencing the last week of July through to March. Pre-Placement Talks are also conducted in this regard as per mutual convenience. Job offers, dates of interviews, selection of candidates etc. are announced through the Training & Placement Cell. Pre-placement trainings are conducted by different organizations like, Rubicon, Hyderabad, ExcelR Solutions etc., During pre-placement training students are trained on Aptitude, Logical Reasoning, Data Interpretation, coding and problem solving skills . Along with this, students are also trained on Soft skills such as Communication Skills, Group Discussion, Presentation Skills, and Mock interviews are conducted to make students ready to face the interviews. During the Academic Year 2022-23, more than 20+ companies conducted campus hiring process for all the streams of engineering students. Companies like Third Eye Technologies, Technologics Global, Aloha Technology. Acmegrade, Global Logic, First Rate Wealth Tech, Merchant Navy have hired students from our Institute and offered Package up to 6LPA.</p>
                <p>Campus hiring is also done under CSR program, that is under Hire- Train- and Deploy model, where students are hired by organization, where students are trained on latest technologies and deployed to their clients. CSR drives are conducted by organizations like Vtech Integrated Solutions, Palle Technologies, TAP Academy, Kodnest, Ethnus CodeMithra, Q-Spiders, X Workz ODC, Pentagon Space etc. During the academic year 2022-23 a total of 165+ offers are being offered the students of SECAB Institute of Engineering and Technology, Vijayapur.</p>
                <p>SIET provides students with an industry-aligned approach like Summer Internships & In-House Training programs on latest Technical Skills. These opportunities help students to learn analytical and logical skills and provide a platform to showcase their creativity and out-of-box ideas.</p>

                <h5 class="mt-4">Invitation for Recruiters</h5>
                <p>Dear Recruiter, It gives us immense pleasure to extend a cordial invitation to your esteemed organisation to participate in our Campus Placement Programme. Our Institute is located in Vijayapura, a well known place of learning. Our college is affiliated to Visvesvaraya Technological University, Belagavi (Karnataka), recognized by AICTE, New Delhi, & by Government of Karnataka. Within a short span of 15 years we have made our presence felt strongly in the competitive educational sector. Our credentials are well appreciated by many industries, engineering institutes, professional bodies, government organizations etc.</p>

            </section>
        </div>
        <div class="tab-pane fade" id="anti-ragging" role="tabpanel" aria-labelledby="anti-ragging-tab">
            <section class="grievance-cell">
                <h4>Our Top Recruiters</h4>
                <div class="top-recruiters mt-3">
                    <img src="../img/placement/7sense.png" alt="Company 1">
                    <img src="../img/placement/techfortune.png" alt="Company 2">
                    <img src="../img/placement/ecorise.png" alt="Company 3">
                    <img src="../img/placement/sunquest.jpg" alt="Company 4">
                    <img src="../img/placement/inficloud.png" alt="Company 5">
                    <img src="../img/placement/pompeh.png" alt="Company 6">
                    <img src="../img/placement/cms.jpeg" alt="Company 7">
                    <img src="../img/placement/QSpiders.jpg" alt="Company 8">
                    <img src="../img/placement/holidys.png" alt="Company 9">
                    <img src="../img/placement/ecs.jpg" alt="Company 10">
                    <img src="../img/placement/asap.jpg" alt="Company 11">
                    <img src="../img/placement/peol.jpg" alt="Company 12">
                    <img src="../img/placement/kcs-logo.png" alt="Company 13">
                    <img src="../img/placement/vishal.png" alt="Company 14">
                    <img src="../img/placement/pams.png" alt="Company 15">
                    <img src="../img/placement/codilar.png" alt="Company 16">
                    <img src="../img/placement/data.png" alt="Company 17">
                    <img src="../img/placement/vee.png" alt="Company 18">
                    <img src="../img/placement/vit.png" alt="Company 19">
                    <img src="../img/placement/seleation.png" alt="Company 20">
                </div>
            </section>
        </div>
        <div class="tab-pane fade" id="anti-sexual-harassment" role="tabpanel" aria-labelledby="anti-sexual-harassment-tab">
            <section class="grievance-cell">
                <p>Placement Record for the year <a href="../pdf/placement/place23-24.pdf">2023-2024</a></p>
                <p>Placement Record for the year <a href="../pdf/placement/place22-23.pdf">2022-2023</a></p>
                <p>Placement Record for the year <a href="../pdf/placement/place19-20.pdf">2019-2020</a></p>
                <p>Placement Record for the year <a href="../pdf/placement/place18-19.pdf">2018-2019</a></p>
                <p>Placement Record for the year <a href="../pdf/placement/place17-18.pdf">2017-2018</a></p>
                <p>Placement Record for the year <a href="../pdf/placement/place16-17.pdf">2016-2017</a></p>
                <p>Placement Record for the year <a href="../pdf/placement/place15-16.pdf">2015-2016</a></p>
                <p>Students are provided with Technical & Non-Technical Training Programmes to enrich their analytical and logical skills.</p>
                <p>In-House Training Programmes are conducted regularly on latest trends & technologies.</p>
                <h5>On-Line Test Partners</h5>
                <div class="top-recruiters">
                    <img src="../img/placement/hiremee.png" alt="Company 1">
                    <img src="../img/placement/bejobbed.png" alt="Company 2">
                </div>
                <h5>On-Line Test Partners</h5>
                <div class="top-recruiters">
                    <img src="../img/placement/career.jpg" alt="Company 1">
                    <img src="../img/placement/7sense.png" alt="Company 2">
                </div>
            </section>
        </div>
        <div class="tab-pane fade" id="prevention-caste-discrimination" role="tabpanel" aria-labelledby="prevention-caste-discrimination-tab">
            <section class="grievance-cell">
                <div class="card card-custom">
                    <img src="../img/placement/nyamat.jpg" class="card-img-left" alt="Candidate Photo" style="width: 150px; height: 150px;">
                    <div class="card-body">
                        <p class="card-text"><strong>Name:</strong> Nyamatulla M Patel</p>
                        <p class="card-text"><strong>Designation:</strong> DEAN</p>
                        <p class="card-text"><strong>Qualification:</strong> B.E, M.Tech</p>
                        <p class="card-text"><strong>Email-ID:</strong> placement_siet@secab.org</p>
                        <p class="card-text"><strong>Phone:</strong> +91-9739619661</p>
                    </div>
                </div>
                <div class="card card-custom">
                    <img src="../img/placement/zia.jpg" class="card-img-left" alt="Candidate Photo" style="width: 150px; height: 150px;">
                    <div class="card-body">
                        <p class="card-text"><strong>Name:</strong> Mr. Mohammad Ziaullah</p>
                        <p class="card-text"><strong>Designation:</strong> Internship Co-ordinator</p>
                        <p class="card-text"><strong>Qualification:</strong> B.E(ECE), M.Tech (DCN),Ph.D</p>
                        <p class="card-text"><strong>Email-ID:</strong> mohammad_ec@secab.org</p>
                        <p class="card-text"><strong>Phone:</strong> +91-9611789200</p>
                    </div>
                </div>
                <div class="card card-custom">
                    <img src="../img/placement/wasim.jpg" class="card-img-left" alt="Candidate Photo" style="width: 150px; height: 150px;">
                    <div class="card-body">
                        <p class="card-text"><strong>Name:</strong> Wasim N</p>
                        <p class="card-text"><strong>Designation:</strong> Placement Co-ordinator</p>
                        <p class="card-text"><strong>Qualification:</strong> B.E, M.Tech</p>
                        <p class="card-text"><strong>Department:</strong> Electrical and Electronics</p>
                        <p class="card-text"><strong>Email-ID:</strong> wasim_ee@secab.org</p>
                        <p class="card-text"><strong>Phone:</strong> +91-7975358321</p>
                    </div>
                </div>
                <div class="card card-custom">
                    <img src="../img/placement/arif.jpg" class="card-img-left" alt="Candidate Photo" style="width: 150px; height: 150px;">
                    <div class="card-body">
                        <p class="card-text"><strong>Name:</strong> Mr. Arif Makandar</p>
                        <p class="card-text"><strong>Designation:</strong> Placement Co-ordinator</p>
                        <p class="card-text"><strong>Qualification:</strong> B.E(ECE), M.Tech (DEC)</p>
                        <p class="card-text"><strong>Department:</strong> Electrical and Electronics Engineering</p>
                        <p class="card-text"><strong>Email-ID:</strong> arif.afr@gmail.com</p>
                        <p class="card-text"><strong>Phone:</strong> +91-9845872001</p>
                    </div>
                </div>
                <div class="card card-custom">
                    <img src="../img/placement/sunil.png" class="card-img-left" alt="Candidate Photo" style="width: 150px; height: 150px;">
                    <div class="card-body">
                        <p class="card-text"><strong>Name:</strong> Mr. Sunil Thaned</p>
                        <p class="card-text"><strong>Designation:</strong> Placement Co-ordinator</p>
                        <p class="card-text"><strong>Qualification:</strong> B.E,M.Tech</p>
                        <p class="card-text"><strong>Department:</strong> Mechanical</p>
                        <p class="card-text"><strong>Email-ID:</strong> sunil_me@secab.org</p>
                        <p class="card-text"><strong>Phone:</strong> +91 9766031637</p>
                    </div>
                </div>
                <div class="card card-custom">
                    <img src="../img/placement/benazir.jpg" class="card-img-left" alt="Candidate Photo" style="width: 150px; height: 150px;">
                    <div class="card-body">
                        <p class="card-text"><strong>Name:</strong> Benazir Muntasher</p>
                        <p class="card-text"><strong>Designation:</strong> Placement Co-ordinator</p>
                        <p class="card-text"><strong>Qualification:</strong> B.E,M.Tech</p>
                        <p class="card-text"><strong>Department:</strong> Computer Science Engineering</p>
                        <p class="card-text"><strong>Email-ID:</strong> benazirmuntasher@gmail.com</p>
                        <p class="card-text"><strong>Phone:</strong> +91 8088378221</p>
                    </div>
                </div>
                <div class="card card-custom">
                    <img src="../img/placement/saddam.jpg" class="card-img-left" alt="Candidate Photo" style="width: 150px; height: 150px;">
                    <div class="card-body">
                        <p class="card-text"><strong>Name:</strong> Mr. Saddam Hussain Masali</p>
                        <p class="card-text"><strong>Designation:</strong> Placement Co-ordinator</p>
                        <p class="card-text"><strong>Qualification:</strong> B.E,M.Tech</p>
                        <p class="card-text"><strong>Department:</strong> Civil Engineering</p>
                        <p class="card-text"><strong>Email-ID:</strong> saddamhussain_cv@secab.org</p>
                        <p class="card-text"><strong>Phone:</strong> +91 8147517218</p>
                    </div>
                </div>
            </section>
        </div>
        <div class="tab-pane fade" id="other-grievance" role="tabpanel" aria-labelledby="other-grievance-tab">
            <section class="grievance-cell">

            </section>
        </div>
    </div>
</div>

<!-- included footer -->
<?php include '../home/footer.php'?>