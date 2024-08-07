<style>
    .hod-message {
        height: 70rem;
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px #1a988b;
        margin-top: 20px;
        margin-bottom: 20px;
    }

    .hod-message h2 {
        color: #1a988b;
        font-size: 24px;
        margin-bottom: 15px;
    }

    .hod-message p {
        font-size: 16px;
        line-height: 1.6;
        color: #333;
        margin-bottom: 15px;
    }

    .hod{
        width: 50%;
        height: 40%;
        border-radius: 10px;
        margin-bottom: 15px;
        border: 1px solid;
    }

    .edu{
        float: right;
        margin-top: 30px;
    }
</style>

<!-- Get the Department Name -->
<?php
$department = isset($_GET['dept']) ? $_GET['dept'] : 'No Dept';
?>

<div class="hod-message">
    <h2>HOD's Message</h2>

    <!-- basic science dept -->
    <?php if ($department == "Applied Science") : ?>
        <img src="../img/bs/hod.jpg" class="hod" alt="HOD">
        <p>The department of basic science at Secab.I.E.T is pleased to implement the scheme and syllabus updated by Visvesvaraya Technology University(VTU) Belgaum, as a part of National Education Policy(NEP) from the academic year 2022 - 23. Further the Induction Program introduced for the students at the beginning of the semester will align the students morally and technically towards their career and societal goals. Further the students will be made aware about their responsibilities and duties often through effective mentorship. The department has faculty coordinator for entire curricular activities conducted sports, cultural and technical events for the overall development of the students.</p>
        <p>The Basic Science Department ensures that the students become competent to enter the second year by providing basic knowledge of all subjects. The Basic Science department faculty welcomes the students with affection as they come from different backgrounds of language, higher secondary education and families. All students are considered equal and are helped with their academics.</p>
        <p>Our goal is to see that all the students perform well and become good engineers to fulfill the vision set by our esteemed institution. We hope that along with academics our lessons of ethics help the students to lead a fruitful life and good future career.</p>
        <span class="edu">SUHAIB MOHAMMED SHAIKH<br>
        (Ph.D)
        </span>

    <!-- civil dept -->
    <?php elseif ($department == "Civil") : ?>
        <img src="../img/cv/hod.png" class="hod" alt="HOD">   
        <p>Civil Engineering at Secab I E T is an integrated department comprised of the best academics, staff and students. Not only we do top in the academics, but we deliver practical outcomes for society. I feel a great sense of both excitement and responsibility in leading this dept. My aim is to do everything I can to allow everyone here to perform at their best, engage with real issues and make a difference.</p>
        <p>The Department of Civil Engineering shall produce excellent individuals who can build, maintain and manage social infrastructures based on relevant knowledge and technology with noble ethical principles and broad insights while recognizing the significant influence of civil engineering technology on nature and society. We are more focused on the design and creation of all kinds of structures – including buildings, roads, dams, canals, bridges and infinite other useful things – civil and structural engineering is an invaluable profession across the modern world.</p>
        <p>Thanks to the continued development of technology and innovation in the sector, today every society is seeing an increased need for experts in these fields.</p>
        <span class="edu">
        Dr. Someshwar Jagannath Arwikar<br>
        B.E. Civil, M.Tech. (Structure), <br> Ph.D. (Structure)
        </span>

    <!-- cs dept -->
    <?php elseif ($department == "Computer Science") : ?>
        <img src="../img/cs/hod.jpg" class="hod" alt="HOD">
        <p>I feel ecstatic to introduce you to Department of Computer Science And Engineering. The department offers BE (CSE) and M-Tech (CNE) and a Research center. The aim of the department is to provide high quality education along with training the students with all the new advancements in the computer science field. The department places emphasis on all the important aspects of computers such as High speed networks, mobile networks , Algorithm Design, Operational research, Advance database systems, Theory of computation , Computer Graphics and many more.</p>
        <p>The department also takes initiative to improve the soft skills, analytical capabilities and verbal communication of the students so that they can face the competition in the corporate world confidently. The scope of computer science is endless. The students of the computer science and engineering are highly demanded by the recruiters of the top companies. The department provides platform for the students to achieve their career goals.</p>
        <p>Our objective is to empower our students with latest technical knowledge and skills and help them meet increasing global challenges of emerging technologies. We provide them with the best teaching faculty, state-of-the-art facilities, excellent research and development environment, to find fulfilling and challenging internships, co-op jobs and careers. Our aim is not solely to develop technical skills but to provide ethical values, professional grooming and guidance so that our students mould into thorough professionals and inspiring individuals when they enter into the real-time environment.</p>
        <center><b>"Here we transfer imaginations into reality"</b></center>
        <span class="edu">
        Dr. S A Quadri<br>
        M.Tech(CSE),Ph.D(EEE)
        </span>

    <!-- ee dept -->
    <?php elseif ($department == "Electrical and Electronics") : ?>
        <p>Like any other area of science, Electrical Engineering technology is also going through rapid changes. In order to impart education in such an ever-changing area, an institution needs to keep itself always updated through course curriculum, laboratories resources and induction of innovative programs. Through a good blend of course content and including the various aspects of power generation, transmission and distribution, we introduce this internship program. I welcome all the prospective students of all the engineering colleges of VTU to participate and avail the benefits of the program.</p>
        <span class="edu">
        Dr. A Mulla<br>
        (B.E, M.Tech, Ph.D)
        </span>

    <!-- ec dept -->
    <?php elseif ($department == "Electronics and Communication Engineering") : ?>
        <img src="../img/ec/hod.jpg" class="hod" alt="HOD">
        <p>The process of learning is extremely important in life. What you learn, how you learn and where you learn play a crucial role in developing ones Intellectual capability. I am pleased to welcome you to the Department of Electronics and Communication Engineering. It is the most flourishing discipline of Engineering.</p>
        <p>It offers professional technical training that keeps the students to be in pace with the latest developments in the field of Electronics and Communication Engineering. The department trains its Technocrats to face the challenges in life by providing many value added courses to enhance their career prospects.   Continuous Interaction with students, parents and staff, along with the Training and Placement Cell ensures a bright future to the students. Special attention is provided on practical orientation to the teaching learning process.</p>
        <p>The department regularly takes various initiatives like organizing Colloquium by inviting experts from Industry and Academic background.  We conduct workshops and Technical seminars for students. We do send students for Internship programs to get exposure in the working environment.</p>
        <p>Our goal is to impart value based quality education along with development of positive attitude, skills and abilities to apply their knowledge in order to face the challenges of future. I wish success to all students in your endeavor to join us on the journey of quality education & to have a great learning experience with my excellent, loving & caring team.</p>
        <center><b>"All our dreams can come true if we have the courage to pursue them."</b></center>   
        <span class="edu">
        Dr. A Mulla<br>
        (B.E, M.Tech, Ph.D)
        </span>

    <!-- mech dept -->
    <?php elseif ($department == "Mechanical") : ?>
        <img src="../img/me/hod.png" class="hod" alt="HOD">
        <p>It is my pleasure to welcome you to the department of mechanical engineering at the SECAB institute of engineering and technology Vijaypur. Mechanical engineering has been thought of traditionally as a professional discipline and the mechanical engineers of today are multidisciplinary, with knowledge from other branches of engineering.</p>
        <p>The academic programmes of the department reflect not only the core areas of mechanical engineer but also the research specialization of the faculty. All the faculties are working in close co-operation while retaining individual identities. We provide our students with a solid engineering education that focuses on creativity, innovation, strong ethical responsibility and place equal emphasis on developing strong leadership qualities in our students.</p>
        <p>As far as the faculties of the department is concerned, I am very happy to inform you that, we have great team of well qualified, dedicated, devoted, young, energetic and dynamic faculty members who are very brilliant in handling the challenging subjects in a very easy and graspable way by applying a various new teaching methods and intelligible demonstrations during the course of work. Further, Faculty pay dedicated attention to vigorous research and students’ projects engendering in them untiring efforts, indomitable will, immense patience and soft skills as desired by industry.</p>
        <center><b>"I wish a very best of luck to the students."</b></center>
        <span class="edu">
        Dr. Syed Abbasali<br>
        (B.E, M.Tech, Ph.D)
        </span>

    <?php endif; ?>
</div>