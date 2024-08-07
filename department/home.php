<style>
    /* home carousel slider */
    .carousel .carousel-inner {
        height: 500px;
        object-fit: cover;
    }
    /* end home carousel slider */

    /* home overview content */
    h3 {
        color: #1a988b;
        font-size: 25px;
        font-weight: bold;
    }

    .overview-content .programme-content {
        text-align: justify;
        background: #fff;
        padding: 20px;
        font-size: 18px;
        border-radius: 5px;
        box-shadow: 0 0 10px #1a988b;
        color: #495057;
    }
    /* end home overview content */

    /* Vision & Mission  */
    .vision,
    .mission {
        border: 2px solid #1a988b;
        border-radius: 8px;
        padding: 20px;
        margin: 20px 0;
    }

    p {
        font-size: 16px;
        line-height: 1.6;
    }
</style>
<?php
$department = isset($_GET['dept']) ? $_GET['dept'] : 'No Dept';
?>

<!-- START GALLERY FOR ALL DEPTS -->
<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">

        <!-- bs slider -->
        <?php if ($department == "Applied Science") : ?>
            <div class="carousel-item active">
                <img src="../img/bs/sldr1.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/bs/sldr2.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/bs/sldr3.jpg" class="img-responsive d-block w-100" alt="...">
            </div>

            <!-- cv slider -->
        <?php elseif ($department == "Civil") : ?>
            <div class="carousel-item active">
                <img src="../img/cv/sldr1.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/cv/sldr2.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/cv/sldr3.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/cv/sldr4.jpg" class="img-responsive d-block w-100" alt="...">
            </div>

            <!-- cs slider -->
        <?php elseif ($department == "Computer Science") : ?>
            <div class="carousel-item active">
                <img src="../img/cs/sldr1.jpeg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/cs/sldr2.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/cs/sldr3.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/cs/sldr4.jpeg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/cs/sldr5.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/cs/sldr6.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/cs/sldr7.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/cs/sldr8.jpeg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/cs/sldr9.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/cs/sldr10.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/cs/sldr11.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/cs/sldr12.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/cs/sldr13.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/cs/sldr14.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/cs/sldr15.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/cs/sldr16.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/cs/sldr17.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/cs/sldr18.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/cs/sldr19.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/cs/sldr20.jpg" class="img-responsive d-block w-100" alt="...">
            </div>

            <!-- ee slider -->
        <?php elseif ($department == "Electrical and Electronics") : ?>
            <div class="carousel-item active">
                <img src="../img/ee/sldr1.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/ee/sldr2.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/ee/sldr3.jpg" class="img-responsive d-block w-100" alt="...">
            </div>

            <!-- ec slider -->
        <?php elseif ($department == "Electronics and Communication Engineering") : ?>
            <div class="carousel-item active">
                <img src="../img/ec/sldr1.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/ec/sldr2.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/ec/sldr3.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/ec/sldr4.jpg" class="img-responsive d-block w-100" alt="...">
            </div>

            <!-- mech slider -->
        <?php elseif ($department == "Mechanical") : ?>
            <div class="carousel-item active">
                <img src="../img/me/sldr1.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/me/sldr1.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/me/sldr1.jpg" class="img-responsive d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="../img/me/sldr1.jpg" class="img-responsive d-block w-100" alt="...">
            </div>

            <!-- cn slider -->
        <?php elseif ($department == "Computer Network") : ?>
            <div class="carousel-item active">
                <img src="../img/cn/sldr1.png" class="img-responsive d-block w-100" alt="...">
            </div>

        <?php endif; ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div> <!-- END GALLERY FOR ALL DEPTS -->

<!-- START OVERVIEW FOR ALL DEPTS -->
<div class="overview-content">
    <h3>OVERVIEW</h3>

    <!-- applied science overview -->
    <?php if ($department == 'Applied Science') : ?>
        <div class="programme-content">
            <p>The Basic Science department, which is an integral part of SIET, offers instructions in applied sciences like Mathematics, Physics and Chemistry to students of all core branches for their first year in the college.</p>
            <p>The department is devoted to foster the understanding of applied science principles. The objectives of the department is to inform and motivate students to study the fundamental aspect of science and its applications.</p>
            <p>To enable the students to analyze and apply mathematical and scientific techniques in engineering technology. The department conducts colloquiums to motivate the students to have a scientific temperament. The students are inducted into the engineering college through the basic science department which helpsthem.</p>
        </div>

        <!-- civil overview -->
    <?php elseif ($department == 'Civil') : ?>
        <div class="programme-content">
            <p>Civil Engineering Department has been established in the year 2002 with an intake of 60 students. In the year 2012 intake has been increased from 60 to 120 students. In the year 2015 M.Tech in Structural Engineering has been introduced with an intake of 24 students and has been grown into full fledged, well equiped with specialization in all major areas of Civil Engineering. Faculty have contributed significantly to overall growth of the department and received funds from AICTE-Modrob, KSCST and Engineering related societies. It has produced VTU rank students and supported students to bag awards in national level fests and sport events.</p>
        </div>
        <div class="vision">
            <h3>Vision:</h3>
            <p><i class="bi bi-caret-right-fill"></i> To prepare professionally competent and socially responsible Civil Engineers.</p>
        </div>
        <div class="mission">
            <h3>Mission:</h3>
            <p>We at Department of Civil Engineering are committed to achieve our vision by:</p>
            <ul>
                <li><i class="bi bi-caret-right-fill"></i> Imparting academic excellence through outcome based education.</li>
                <li><i class="bi bi-caret-right-fill"></i> Preparing students through skill oriented courses to excel in their profession with ethical Values.</li>
                <li><i class="bi bi-caret-right-fill"></i> Promoting research and consultancy for industrial and societal needs.</li>
                <li><i class="bi bi-caret-right-fill"></i> Strengthening relationship with stakeholders for continuous development.</li>
            </ul>
        </div>
        <div class="mission">
            <h3>Program Educational Objectives (PEOs):</h3>
            <p>Students of Civil Engineering will be able to</p>
            <ul>
                <li><i class="bi bi-caret-right-fill"></i> <b>PEO 1: Domain Knowledge: </b>Be proficient in the fundamentals of engineering science, analytical, quantitative skills and design in the field of Civil Engineering.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PEO 2: Professional / Core Competency: </b>Develop safe, sustainable, economical and environmentally viable solutions for the overall welfare of the society.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PEO 3: Multidisciplinary approach: </b>Exhibit the multidisciplinary approach to relate Engineering issues to the broader social and human context in ethical manner.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PEO 4: Lifelong Learning: </b>Develop lifelong learning in the field of civil engineering by continuously enhancing the knowledge.</li>
            </ul>
        </div>
        <div class="mission">
            <h3>Program Outcomes (POs):</h3>
            <p>Students in the Civil Engineering programme should, at the time of their graduation, be able to</p>
            <ul>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 1: Engineering Knowledge: </b>Apply the knowledge of mathematics, science, engineering fundamentals, and an engineering specialization to the solution of complex Civil engineering problems.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 2: Problem Analysis: </b>Identify, formulate, review research literature, and analyze complex Civil engineering problems reaching substantiated conclusions using first principles of mathematics, natural sciences, and engineering sciences.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 3: Design/Development of solutions: </b>Design solutions for complex Civil engineering problems and design system components or processes that meet the specified needs with appropriate consideration for the public health and safety, and the cultural, societal, and environmental considerations.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 4: Conduct Investigations of Complex problems: </b>Use research based knowledge and research methods including design of experiments, analysis and interpretation of data, and synthesis of the information to provide valid conclusions in Civil engineering field.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 5: Modern Tool Usage: </b>Create, select, and apply appropriate techniques, resources, and modern engineering and IT tools including prediction and modeling to complex Civil engineering activities with an understanding of the limitations.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 6: The Engineer and Society: </b>Apply reasoning informed by the contextual knowledge to assess societal, health, safety, legal and cultural issues and the consequent responsibilities relevant to the professional Civil engineering practice.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 7: Environment and Sustainability: </b>Understand the impact of the professional Civil engineering solutions in societal and environmental contexts, and demonstrate the knowledge of, and need for sustainable development.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 8: Ethics: </b>Apply ethical principles and commit to professional ethics , responsibilities and norms of the Civil engineering practice.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 9: Individual and Team Work: </b>Function effectively as an individual, and as a member or leader in diverse teams, and in multidisciplinary settings.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 10: Communication: </b>Communicate effectively on complex engineering activities with the engineering community and with society at large, such as, being able to comprehend and write effective reports and design documentation, make effective presentations, and give and receive clear instructions.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 11: Project Management and Finance: </b>Demonstrate knowledge and understanding of the engineering and management principles and apply these to one's own work, as a member and leader in a team, to manage projects and in multidisciplinary environments.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 12: Lifelong Learning: </b>Recognize the need for, and have the preparation and ability to engage in independent and life-long learning in the broadest context of technological change in Civil engineering.</li>
            </ul>
        </div>
        <div class="mission">
            <h3>Program Specific Outcomes (PSOs):</h3>
            <ul>
                <li><i class="bi bi-caret-right-fill"></i> <b>PSO 1: </b>Enhancing the ability to plan, analyze, design, execute and maintain cost effective Civil engineering structures.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PSO 2: </b>Inculcating in students technical competencies to deal with practical aspects of Civil engineering.</li>
            </ul>
        </div>

        <!-- cs overview -->
    <?php elseif ($department == 'Computer Science') : ?>
        <div class="programme-content">
            <p>Welcome to the Department of Computer Science & Engineering. The Department was established in the year 2002 and offers undergraduate program (B.E.) in Computer Science & Engineering with an intake of 60.</p>
            <p>PG programme was introduced to the department in the year 2013-14 in Computer Network Engineering with an intake of 18. Department was also recognized as a Research centre in the year 2013.</p>
            <p>The department is bound to produce not just skilled engineers but citizens who are responsible towards society. We are a team of highly qualified, experienced & dedicated faculties. Department has sufficient number of Well-equipped laboratories, class rooms & library for imparting quality education.</p>
        </div>
        <div class="vision">
            <h3>Vision:</h3>
            <p><i class="bi bi-caret-right-fill"></i> Develop professionally competent Computer Science Engineers to serve the society.</p>
        </div>
        <div class="mission">
            <h3>Mission:</h3>
            <p>We at the Department of Computer Science and Engineering are committed to achieve our vision by:</p>
            <ul>
                <li><i class="bi bi-caret-right-fill"></i> Imparting outcome based education through effective teaching learning process.</li>
                <li><i class="bi bi-caret-right-fill"></i> Providing exposure to latest tools and technologies in the area of Computer Science.</li>
                <li><i class="bi bi-caret-right-fill"></i> Inculcating research and Industry-institute interaction.</li>
                <li><i class="bi bi-caret-right-fill"></i> Involving stakeholders for continuous development.</li>
            </ul>
        </div>
        <div class="mission">
            <h3>Program Educational Objectives (PEOs):</h3>
            <ul>
                <li><i class="bi bi-caret-right-fill"></i> <b>PEO 1:</b> Knowledge of Computer Science to analyze, design and develop solution to computing problems.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PEO 2:</b> Ability to solve societal issues with the help of team work and effective communication.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PEO 3:</b> Ability to develop professional skills and ethics which help in employment, entrepreneurship and lifelong learning.</li>
            </ul>
        </div>
        <div class="mission">
            <h3>Program Outcomes (POs):</h3>
            <ul>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 1: Engineering Knowledge: </b>An ability to apply basic knowledge of science, mathematics and engineering fundamentals in the field of Computer Science Engineering.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 2: Problem Analysis: </b>An ability to identify, formulate, and analyze Computer Science engineering problems using basics principles of science, mathematics and engineering.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 3: Design/Development of solutions: </b>An ability to design for complex Computer Science and engineering problems using basic design concepts, analyze and process to meet the desired needs with in realistic constraints.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 4: Conduct Investigations of Complex problems: </b>An ability to conduct experiments, analyse, interpret the data and results with valid conclusion.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 5: Modern Tool Usage: </b>An ability to apply modern tools to model, design, analyze, verify and to solve complex Computer Science and engineering problems.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 6: The Engineer and Society: </b>An ability to understand the impact of Computer Science and engineering solutions globally, in terms of economic, societal, health, safety, legal and cultural issues and the consequent responsibilities relevant to the professional engineering practice.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 7: Environment and Sustainability: </b>An ability to understand the principles, commitment and practice to improve product sustainable development globally in Computer Science engineering with minimal environmental effect.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 8: Ethics: </b>An ability to understand and apply ethical principles and commitment to address professional ethical responsibilities of an engineer.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 9: Individual and Team Work: </b>An ability to function efficiently as an individual and as a group member in a team in multidisciplinary activities.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 10: Communication: </b>An ability to communicate instructions for preparing effective reports and documents.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 11: Project Management and Finance: </b>An ability to acquire and demonstrate the knowledge of contemporary issues related to finance and managerial skills to bring up entrepreneurs and entrepreneurship.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 12: Lifelong Learning: </b>An ability to recognize and adapt to emerging field of application in engineering and technology by developing self-confidence for continuing education and lifelong learning process.</li>
            </ul>
        </div>
        <div class="mission">
            <h3>Program Specific Outcomes (PSOs):</h3>
            <ul>
                <li><i class="bi bi-caret-right-fill"></i> <b>PSO 1: </b>Demonstrate understanding of the principles and working of software aspects and computer system.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PSO 2: </b>Provide effective real time solutions through design and development of complex problems using acquired knowledge in various domains.</li>
            </ul>
        </div>

        <!-- ee overview -->
    <?php elseif ($department == 'Electrical and Electronics') : ?>
        <div class="programme-content">
            <p>The Department of Electrical & Electronics Engineering (E&E) was established in the year 2009.SECAB Institute of Engineering & Technology, Vijaypur offers a broad education in the field of Electrical & Electronics Engineering. The education offered in Department of Electrical & Electronics Engineering is unique recognized with all associated general disciplines.</p>
            <p>Bachelor of Engineering in Electrical & Electronics is a four years (eight semesters) duration programme affiliated to VTU, approved by AICTE.The students of this branch are placed in electrical & electronics related organization and software companies.</p>
            <p>The department has a well balanced mixture of senior and experienced faculty together with young and dynamic faculty. With the objective of making graduates industry ready, the Department modernized all laboratories using industry standard equipments to the students and arrangement to the staff members and a wide base set-up cabin to the Head of the Department.</p>
        </div>
        <div class="vision">
            <h3>Vision:</h3>
            <p><i class="bi bi-caret-right-fill"></i> To produce professionally competent Engineers in the field of Electrical and Electronics to assist the society at large.</p>
        </div>
        <div class="mission">
            <h3>Mission:</h3>
            <p>We, at Electrical and Electronics Engineering Department are committed to achieve our vision by,</p>
            <ul>
                <li><i class="bi bi-caret-right-fill"></i> Imparting Outcome Based Education through theory and applications.</li>
                <li><i class="bi bi-caret-right-fill"></i> Developing skills and competence by conducting Innovative programs.</li>
                <li><i class="bi bi-caret-right-fill"></i> Nurturing creative thinking in students through Research activities.</li>
                <li><i class="bi bi-caret-right-fill"></i> To engage stakeholders and inculcate best engineering practices for continuous improvement.</li>
            </ul>
        </div>
        <div class="mission">
            <h3>Program Educational Objectives (PEOs):</h3>
            <ul>
                <li><i class="bi bi-caret-right-fill"></i> <b>PEO 1:</b> To become competent and professional Engineer with multi-disciplinary skills and strong knowledge.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PEO 2:</b> Graduates shall get employed in industries, pursue higher studies, research assignments or turn as entrepreneurs.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PEO 3:</b> Prepare graduates to communicate effectively and participate as a leader in economic growth of region, thereby society.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PEO 4:</b> To enhance abilities amongst graduates to address and formulate feasible solutions for real life electrical engineering problems.</li>
            </ul>
        </div>
        <div class="mission">
            <h3>Program Outcomes (POs):</h3>
            <ul>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 1: Engineering Knowledge: </b>Apply knowledge of mathematics and science, with fundamentals of Electrical and Electronics Engineering to be able to solve complex engineering problems related to EEE.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 2: Problem Analysis: </b>Identify, Formulate, review research literature and analyze complex engineering problems related to EEE and reaching substantiated conclusions using first principles of mathematics, natural sciences and engineering sciences.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 3: Design/Development of solutions: </b>Design solutions for complex engineering problems related to EEE and design system components or processes that meet the specified needs with appropriate consideration for the public health and safety and the cultural societal and environmental considerations.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 4: Conduct Investigations of Complex problems: </b>Use research-based knowledge and research methods including design of experiments, analysis and interpretation of data, and synthesis of the information to provide valid conclusions.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 5: Modern Tool Usage: </b>Create, Select and apply appropriate techniques, resources and modern engineering and IT tools including prediction and modelling to EEE related complex engineering activities with an understanding of the limitations.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 6: The Engineer and Society: </b>Apply Reasoning informed by the contextual knowledge to assess societal, health, safety, legal and cultural issues and the consequent responsibilities relevant to the EEE professional engineering practice.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 7: Environment and Sustainability: </b>Understand the impact of the EEE professional engineering solutions in societal and environmental contexts and demonstrate the knowledge of, and need for sustainable development.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 8: Ethics: </b>Apply Ethical Principles and commit to professional ethics and responsibilities and norms of the engineering practice.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 9: Individual and Team Work: </b>Function effectively as an individual and as a member or leader in diverse teams and in multidisciplinary Settings.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 10: Communication: </b>Communicate effectively on complex engineering activities with the engineering community and with society at large such as able to comprehend and with write effective reports and design documentation, make effective presentations and give and receive clear instructions.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 11: Project Management and Finance: </b>Demonstrate knowledge and understanding of the engineering management principles and apply these to one's own work, as a member and leader in a team, to manage projects and in multi disciplinary environments.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 12: Lifelong Learning: </b>Recognize the need for and have the preparation and ability to engage in independent and life-long learning the broadest context of technological change.</li>
            </ul>
        </div>
        <div class="mission">
            <h3>Program Specific Outcomes (PSOs):</h3>
            <ul>
                <li><i class="bi bi-caret-right-fill"></i> <b>PSO 1: </b>To troubleshoot, repair and conduct routine maintenance of electrical system or equipment.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PSO 2: </b>Apply knowledge of power system configuration electrical equipment and protection practices to the design and specification of electrical generation, transmission, and distribution and utilization system.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PSO 2: </b>To design, analyze, test and evaluate the performance of the electrical machines & transformers.</li>
            </ul>
        </div>

        <!-- ec overview -->
    <?php elseif ($department == 'Electronics and Communication Engineering') : ?>
        <div class="programme-content">
            <p>I feel ecstatic to introduce you to the Department of Electronics and Communication Engineering. Department of Electronics & Communication Engineering of S.I.E.T was established in the year 2002 with an intake of 60.</p>
            <p>Department of Electronics and Communication Engineering strives for increasing the knowledge, enhancing the critical thinking, ability to change information into knowledge and power of analyzing the things technically of each and every student in the ever changing society.We also intend to impart knowledge through a closed knit family of highly competent faculty. Our Laboratories have been very well established not only to cover complete syllabus but to motivate students to learn beyond the syllabus which definitely develops complete knowledge of the subject (both the practical and theoretical) and develop skill sets of students to become promising engineers in future.</p>
            <p>The department organizes Seminars, workshops/colloquia, guest lectures on recent trends & Technology. The department also organizes industrial visits for students periodically to provide an opportunity for the students to interact with working professionals from industry. We send students for internship programs which provides an opportunity to the students to have a feel of real on sight situations in the industries and how to handle them. It is firmly believed that the prestigious position of this department will be maintained and upheld by our students along with whole hearted and sincere efforts of all the members of the department.</p>
        </div>
        <div class="vision">
            <h3>Vision:</h3>
            <p><i class="bi bi-caret-right-fill"></i> To develop professionally competent and socially responsible Electronics and Communication Engineers.</p>
        </div>
        <div class="mission">
            <h3>Mission:</h3>
            <p>We, the Department of Electronics and Communication Engineering are committed to achieve our vision by:</p>
            <ul>
                <li><i class="bi bi-caret-right-fill"></i>
                    Strengthening core competencies among the learners through outcome-based education.
                </li>
                <li><i class="bi bi-caret-right-fill"></i>
                    Imparting technical skills by conducting hands-on training programs/workshops on Emerging technologies.
                </li>
                <li><i class="bi bi-caret-right-fill"></i>
                    Producing graduates with societal responsibilities.
                </li>
                <li><i class="bi bi-caret-right-fill"></i>
                    To Involving stakeholders in development of the department.
                </li>
            </ul>
        </div>
        <div class="mission">
            <h3>Program Educational Objectives (PEOs)</h3>
            <ul>
                <li><i class="bi bi-caret-right-fill"></i> <b>PEO 1:</b>
                    Apply the knowledge of Electronics and Communication Engineering to analyze and solve Engineering problems.
                </li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PEO 2:</b>
                    Acquire core competency for successful adaptation to emerging technological developments.
                </li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PEO 3:</b>
                    Inculcate professionalism to solve societal and environmental issues.
                </li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PEO 3:</b>
                    Develop lifelong learning attitude by involving stakeholders.
                </li>
            </ul>
        </div>
        <div class="mission">
            <h3>Program Outcomes (POs):</h3>
            <ul>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 1: Engineering Knowledge: </b>An ability to apply basic knowledge of science, mathematics and engineering fundamentals in the field of Electronics and Communication Engineering.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 2: Problem Analysis: </b>Ability to identify, formulate and analyze Electronics and Communication engineering problems using basics principles of science, mathematics, and engineering.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 3: Design/Development of solutions: </b>An ability to design for complex Electronics and Communication engineering problems using basic design concepts, analyze and process to meet the desired needs within realistic constraints such as manufacturability, durability, and economy with appropriate consideration for the public health, safety, cultural, societal, and environmental considerations.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 4: Conduct Investigations of Complex problems: </b>An ability to conduct experiments, analyze, interpret the data and results with a valid conclusion.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 5: Modern Tool Usage: </b>An ability to apply modern tools to model, design, analyze, verify and to solve complex Electronics and Communication engineering problems.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 6: The Engineer and Society: </b>Ability to understand the impact of Electronics and Communication engineering solutions globally, in terms economic, societal, health, safety, legal and cultural issues and the consequent responsibilities relevant to the professional engineering practice.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 7: Environment and Sustainability: </b>An ability to understand the principles, commitment and practice to improve product sustainable development globally in Electronics and Communication engineering with minimal environmental effect.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 8: Ethics: </b>An ability to understand and apply ethical principles and commitment to address professional and ethical responsibilities of an engineer.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 9: Individual and Team Work: </b>An ability to function efficiently as an individual and as a group member in a team in multidisciplinary activities.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 10: Communication: </b>An ability to communicate instructions for preparing effective reports and documentation.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 11: Project Management and Finance: </b>An ability to acquire and demonstrate the knowledge of contemporary issues related to managing finance and managerial skills in order to become successful entrepreneurs.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 12: Lifelong Learning: </b>Ability to recognize and adapt to emerging field of application in engineering and technology by developing self-confidence for continuing education and lifelong learning process.</li>
            </ul>
        </div>
        <div class="mission">
            <h3>Program Specific Outcomes (PSOs):</h3>
            <ul>
                <li><i class="bi bi-caret-right-fill"></i> <b>PSO 1: </b>Specify, Design, Build and Test analog, digital and embedded system for signal processing.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PSO 2: </b>Understand and architect wired and wireless analog and digital communication systems as per specifications, and determine their performance.</li>
            </ul>
        </div>

    <!-- me overview -->
    <?php elseif ($department == 'Mechanical') : ?>
        <div class="programme-content">
            <p>The department of mechanical engineering has been started in the year 2003 with an intake of 60 and present intake is 120. Further, the M. Tech. program in machine design specialization has been started in the year 2014 with a total intake of 24 students and Ph. D. program in mechanical engineering is expected soon.</p>
            <p>The department is equipped with laboratories for core courses such as Material Testing Laboratory, Machine shop Laboratory, Fluid Mechanics Laboratory, Energy Conversion Laboratory, Heat & Mass Transfer Laboratory, Design Laboratory, Computer Aided Machine Drawing Laboratory and Mechanical Workshop. These laboratories have state of the art experimental setups and machineries for enhancing the practical knowledge of students at par with the cutting edge technology. The department is now expanding its wings towards elective course laboratories such as Non Conventional Energy Sources Laboratory, Automobile Laboratory, CNC Laboratory etc.</p>
            <p>The department organizes Seminars, workshops/colloquia, guest lectures on wide-ranging topics. The department also organizes industrial visits for students periodically to provide an opportunity for the students to interact with working professionals from industry. Further, the department is planning to collaborate with industries and research institutions to setup specialized laboratories and joint research programs. Such initiatives will provide an opportunity to the students to have feel of real on sight situations in the industries and how to handle them. The department is also planning on innovative ideas for the rural development in the district of vijayapur.</p>
            <p>The students excel in academics under the constant guidance of well qualified, dedicated and devoted faculty members. The area of specialization of all faculties has a lot of diversity that covers various aspects of mechanical engineering and is capable to mold young minds into successful professionals. The faculty members of the department have presented and published many research papers in the national & international journals & conference proceedings. A few of the faculty members are pursuing Ph. D. degree.</p>
        </div>
        <div class="vision">
            <h3>Vision:</h3>
            <p><i class="bi bi-caret-right-fill"></i>
                Develop professionally competent Mechanical Engineers to cater the needs of society.
            </p>
        </div>
        <div class="mission">
            <h3>Mission:</h3>
            <p>We, at Mechanical Engineering Department are committed to achieve our vision by</p>
            <ul>
                <li><i class="bi bi-caret-right-fill"></i>
                    Imparting Mechanical Engineering knowledge through outcome based education.
                </li>
                <li><i class="bi bi-caret-right-fill"></i>
                    By inculcating skills to attain excellence.
                </li>
                <li><i class="bi bi-caret-right-fill"></i>
                    Instilling students to become creative and innovative through research activities.
                </li>
                <li><i class="bi bi-caret-right-fill"></i>
                    Involve all stakeholders for development of department.
                </li>
            </ul>
        </div>
        <div class="mission">
            <h3>Program Educational Objectives (PEOs):</h3>
            <p>Graduates of Mechanical Engineering will be able to:</p>
            <ul>
                <li><i class="bi bi-caret-right-fill"></i> <b>PEO 1:</b>
                    Graduates will be able to pursue successful professional career in Mechanical Engineering with sound technical and managerial capabilities.
                </li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PEO 2:</b>
                    Graduates will have skills and knowledge to formulate, analyze and solve problems in mechanical engineering to meet global challenges.
                </li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PEO 3:</b>
                    Graduates will be capable of pursuing mechanical engineering profession with good communication skills, leadership qualities, team spirit and professional ethics to meet the needs of the society.
                </li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PEO 4:</b>
                    Graduates will sustain an appetite for continuous learning by pursuing higher education and research in the allied areas of science and technology.
                </li>
            </ul>
        </div>
        <div class="mission">
            <h3>Program Outcomes (POs):</h3>
            <ul>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 1: Engineering Knowledge: </b>An ability to apply basic knowledge of science, mathematics and engineering fundamentals in the field of Mechanical Engineering.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 2: Problem Analysis: </b></li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 3: Design/Development of solutions: </b>An ability to design for complex mechanical engineering problems using basic design concepts, analyze and process to meet the desired needs with in realistic constraints such as manufacturability, durability, and economy with appropriate consideration for the public health, safety, cultural, societal, and environmental considerations.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 4: Conduct Investigations of Complex problems: </b>An ability to conduct experiments, analyse, interpret the data and results with valid conclusion.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 5: Modern Tool Usage: </b>An ability to apply modern tools to model, design, analyze, verify and to solve complex mechanical engineering problems.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 6: The Engineer and Society: </b>An ability to understand the impact of mechanical engineering solutions globally, in terms economic, societal, health, safety, legal and cultural issues and the consequent responsibilities relevant to the professional engineering practice.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 7: Environment and Sustainability: </b></li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 8: Ethics: </b>An ability to understand and apply ethical principles and commitment to address professional ethical responsibilities of an engineer.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 9: Individual and Team Work: </b></li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 10: Communication: </b>An ability to communicateinstructions for preparing effective reports and documentation.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 11: Project Management and Finance: </b>An ability to acquire and demonstrate the knowledge of contemporary issues related to finance and managerial skills to bring up entrepreneurs and entrepreneurship.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PO 12: Lifelong Learning: </b>An ability to recognize and adapt to emerging field of application in engineering and technology by developing self-confidence for continuing education and lifelong learning process.</li>
            </ul>
        </div>
        <div class="mission">
            <h3>Program Specific Outcomes (PSOs):</h3>
            <ul>
                <li><i class="bi bi-caret-right-fill"></i> <b>PSO 1: </b>Identify, Formulate and Analyze Complex Engineering problems in Thermal Engineering and Design of Machines.</li>
                <li><i class="bi bi-caret-right-fill"></i> <b>PSO 2: </b>Develop and implement new ideas on product design and development with the help of modern CAD/CAM tools, while ensuring best manufacturing practices.</li>
            </ul>
        </div>

    <!-- cn overview -->
    <?php elseif ($department == 'Computer Network') : ?>
        <div class="programme-content">
            <p>Welcome to the Department of Computer Science & Engineering. The Department was established in the year 2002 and offers undergraduate program (B.E.) in Computer Science & Engineering with an intake of 60.</p>
            <p>PG programme was introduced to the department in the year 2013-14 in Computer Network Engineering with an intake of 18. Department was also recognized as a Research centre in the year 2013.</p>
            <p>The department is bound to produce not just skilled engineers but citizens who are responsible towards society. We are a team of highly qualified, experienced & dedicated faculties. Department has sufficient number of Well-equipped laboratories, class rooms & library for imparting quality education.</p>
        </div>
        <div class="vision">
            <h3>Vision:</h3>
            <p><i class="bi bi-caret-right-fill"></i> Develop professionally competent Computer Science Engineers to serve the society.</p>
        </div>
        <div class="mission">
            <h3>Mission:</h3>
            <p>We at the Department of Computer Science and Engineering are committed to achieve our vision by:</p>
            <ul>
                <li><i class="bi bi-caret-right-fill"></i> Imparting outcome based education through effective teaching learning process.</li>
                <li><i class="bi bi-caret-right-fill"></i> Providing exposure to latest tools and technologies in the area of Computer Science.</li>
                <li><i class="bi bi-caret-right-fill"></i> Inculcating research and Industry-institute interaction.</li>
                <li><i class="bi bi-caret-right-fill"></i> Involving stakeholders for continuous development.</li>
            </ul>
        </div>

    <!-- de overview -->
    <?php elseif ($department == 'Digital Electronics') : ?>
        <div class="programme-content">
            <p>A New Beginning!. Digital Electronics course is approved by AICTE-VTU from the academic year 2020-2021.</p>
            <p>M.Tech. Digital Electronics or Master of Technology in Digital Electronics is a postgraduate Electronics programme. The course gives an overview of the usage of hardware languages in design and implementation. It covers topics such as current flow in semiconductor devices, electromagnetism, analogue circuits and linear control theory to enable you to understand the operation of simple electrical machines and electronics coomunications systems. The duration of the course is two years and it is career orienting in nature that opens many fields after its successful completion.</p>
        </div>
        <div class="vision">
            <h3>Vision:</h3>
            <p><i class="bi bi-caret-right-fill"></i> Digital Electronics aims at providing in-depth knowledge of various subjects of present day interest to students with a background in Electronics and Communication.</p>
        </div>
        <div class="mission">
            <h3>Mission:</h3>
            <p>We, the Department of (M.Tech) Digital Electronics are committed to achieve our vision by:</p>
            <ul>
                <li><i class="bi bi-caret-right-fill"></i> Continuous improvement in teaching & research based learning in engineering and technology.</li>
                <li><i class="bi bi-caret-right-fill"></i> Encouraging intellectual, quality, ethical and creative pursuits amongst teaching and students fraternity.</li>
            </ul>
        </div>

    <?php endif; ?>
</div>
<!-- END OVERVIEW FOR ALL DEPTS -->