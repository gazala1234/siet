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
</style>
<div class="container my-3">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="grievance-redressal-tab" data-toggle="tab" href="#grievance-redressal" role="tab" aria-controls="grievance-redressal" aria-selected="true">Grievance Redressal Cell</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="anti-ragging-tab" data-toggle="tab" href="#anti-ragging" role="tab" aria-controls="anti-ragging" aria-selected="false">Anti Ragging</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="anti-sexual-harassment-tab" data-toggle="tab" href="#anti-sexual-harassment" role="tab" aria-controls="anti-sexual-harassment" aria-selected="false">Anti Sexual Harassment</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="prevention-caste-discrimination-tab" data-toggle="tab" href="#prevention-caste-discrimination" role="tab" aria-controls="prevention-caste-discrimination" aria-selected="false">Prevention of Caste Based Discrimination</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="other-grievance-tab" data-toggle="tab" href="#other-grievance" role="tab" aria-controls="other-grievance" aria-selected="false">Other Grievance</a>
        </li>
    </ul>
    <div class="tab-content mt-4" id="myTabContent">
        <div class="tab-pane fade show active" id="grievance-redressal" role="tabpanel" aria-labelledby="grievance-redressal-tab">
            <section class="grievance-cell">
                <span>“Minimizing disagreements and maximizing academics”</span>
                <p>While imparting professional education, we take utmost care that students and other stakeholders feel comfortable on the campus. We at SIET practice transparency and justice, so that stakeholders do not suffer. The campus observes high moral and ethical practices under the guidance of our honourable founder, Shri. S. A. Punekar. Our Grievance Redressal Cell (GRC) efficiently addresses ragging issues, women issues and issues regarding caste-based discrimination on the campus, as per guidelines of AICTE and Visvesvaraya Technological University, Govt. of Karnataka.</p>

                <h5>Objectives</h5>
                <ul>
                    <li>To uphold the dignity of the Institute by promoting cordial relations between students and staff.</li>
                    <li>To support students who have been deprived of the services for which they are entitled.</li>
                    <li>To encourage students to express their grievances/problems freely and frankly, without any fear of being victimized.</li>
                </ul>

                <h5>Functions</h5>
                <ul>
                    <li>The cases shall be attended promptly on receipt of online grievances from students and staff.</li>
                    <li>All received complaints will be analyzed, compiled, and forwarded to concerned committees for necessary action.</li>
                    <li>The cell will report to the higher authority about the cases attended to and the number of pending cases, if any, which require direction and guidance from the higher authorities.</li>
                </ul>

                <h5>Responsibilities of Grievance Redressal Cell</h5>
                <ul>
                    <li>Ensuring on-the-spot solutions by adopting soft measures, interaction, and casual warning.</li>
                    <li>Keeping the grievant informed about the processing of their grievance.</li>
                    <li>The Grievance Cell aims to create a cordial & friendly atmosphere.</li>
                    <li>The Grievance Cell is also empowered to look into matters of harassment/caste-based discrimination.</li>
                    <li>If anybody is found guilty of any kind of nuisance, they shall be penalized as per norms.</li>
                </ul>
                <a href="#">
                    <h6>GRIEVANCE COMMITTEE MEMBERS LIST</h6>
                </a>
            </section>
        </div>
        <div class="tab-pane fade" id="anti-ragging" role="tabpanel" aria-labelledby="anti-ragging-tab">
            <section class="grievance-cell">
                <a href="#">
                    <p>1. ANTI RAGGING COMMITTEE AND SQUAD MEMBERS LIST</p>
                </a>
                <a href="../grievance/ragging.php">
                    <p>2. Click here for COMPLAINT FORM OF RAGGING</p>
                </a>
                <p>Anti Ragging National Help Line Number : 18001805522</p>
            </section>
        </div>
        <div class="tab-pane fade" id="anti-sexual-harassment" role="tabpanel" aria-labelledby="anti-sexual-harassment-tab">
            <section class="grievance-cell">
                <a href="../pdf/grievance/sexual.pdf">
                    <p>1. ANTI SEXUAL HARRASEMENT COMMITTEE AND SQUAD MEMBERS LIST</p>
                </a>
                <a href="../grievance/sexual.php">
                    <p>2. Click here for COMPLAINT FORM OF SEXUAL HARASSMENT</p>
                </a>
            </section>
        </div>
        <div class="tab-pane fade" id="prevention-caste-discrimination" role="tabpanel" aria-labelledby="prevention-caste-discrimination-tab">
            <section class="grievance-cell">
                <a href="../pdf/grievance/cast.pdf">
                    <p>1. PREVENTION OF CASTE BASED DISCRIMINATION COMMITTEE MEMBERS LIST</p>
                </a>
                <a href="../grievance/cast.php">
                    <p>2. Click here for COMPLAINT FORM OF CASTE BASED DISCRIMINATION</p>
                </a>
            </section>
        </div>
        <div class="tab-pane fade" id="other-grievance" role="tabpanel" aria-labelledby="other-grievance-tab">
            <section class="grievance-cell">
                <a href="../grievance/other.php">
                    <p>1. Click here for COMPLAINT FORM OF GRIEVANCE</p>
                </a>
            </section>
        </div>
    </div>
</div>

<!-- included footer -->
<?php include '../home/footer.php' ?>