<!-- included header -->
<?php include '../home/header.php' ?>

<div class="container my-3">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="grievance-redressal-tab" data-toggle="tab" href="#grievance-redressal" role="tab" aria-controls="grievance-redressal" aria-selected="true">B.E</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="anti-ragging-tab" data-toggle="tab" href="#anti-ragging" role="tab" aria-controls="anti-ragging" aria-selected="false">M.TECH/MBA/MCA</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="anti-sexual-harassment-tab" data-toggle="tab" href="#anti-sexual-harassment" role="tab" aria-controls="anti-sexual-harassment" aria-selected="false">PhD</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="prevention-caste-discrimination-tab" data-toggle="tab" href="#prevention-caste-discrimination" role="tab" aria-controls="prevention-caste-discrimination" aria-selected="false">Foreign Students</a>
        </li>
    </ul>
    <div class="tab-content mt-4" id="myTabContent">
        <div class="tab-pane fade show active" id="grievance-redressal" role="tabpanel" aria-labelledby="grievance-redressal-tab">
            <section class="grievance-cell">
                <h5>B.E Admission Details (CET Code:E132)</h5>
                <p>SECAB Institute of Engineering & Technology, Vijaypur is a technical institute that offers UG-B.E courses in 05 disciplines.</p>
                <h4>Courses Offered:</h4>
                <table>
                    <tr>
                        <th>Sl No</th>
                        <th>Name Of Course</th>
                        <th>Intake</th>
                        <th>Duration</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>B.E. Civil Engineering</td>
                        <td>60</td>
                        <td>4 Years</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>B.E. Computer Science & Engineering</td>
                        <td>120</td>
                        <td>4 Years</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>B.E. Electronics & Communication Engineering</td>
                        <td>60</td>
                        <td>4 Years</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>B.E. Electrical & Electronics Engineering</td>
                        <td>60</td>
                        <td>4 Years</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>B.E. Mechanical Engineering</td>
                        <td>60</td>
                        <td>4 Years</td>
                    </tr>
                </table>
                <h4>Why Study at SECAB I.E.T.?</h4>
                <ul>
                    <li>Enhancement of communications skills in a well-equipped communication lab</li>
                    <li>Colloquiums conducted by professors from IITs and NITs</li>
                    <li>Huge campus recruitments</li>
                    <li>Significant scholarships available</li>
                    <li>Workshops on new industry trends</li>
                    <li>Tutorials and remedial classes are conducted in subjects where extra coaching needed.</li>
                    <li>Well-equipped labs and airy classes</li>
                    <li>Encouragement for research and publications</li>
                    <li>Prizes won at university, state, and national levels</li>
                    <li>Participation in international sports</li>
                    <li>Excellent academic results</li>
                    <li>MOUs with foreign universities and industries</li>
                    <li>Multiple scholarship schemes to help economically backward students.</li>
                    <li>Active in cultural activities, professional events, and industrial visits</li>
                </ul>
                <h4 class="mt-3">Eligibility Criteria</h4>
                <p>1. "Passed in 2nd PUC / 12th Standard examination with English as one of the Languages and obtained a minimum of 45% of marks in aggregate in Physics and Mathematics as compulsory subject along with Chemistry / Bio-Technology / Biology / Electronics / Computer Science."</p>
                <p>2. In case of Karnataka SC, ST, and OBC candidates, the minimum aggregate percentage shall be 40%.</p>

                <h4 class="mt-3">Enquiry Form</h4>
                <form class="enquiry-form">
                    <h6 style="text-align:right">Date: <?php echo date("d/m/y"); ?></h6>
                    <div class="form-group">
                        <label for="ename">Name Of candidate</label>
                        <input type="text" class="form-control" name="ename" id="ename" placeholder="Enter candidate name" required>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="emob1">Mobile 1</label>
                            <input type="number" class="form-control" name="emob1" id="emob1" placeholder="Enter Mobile No 1" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="emob2">Alternate Mobile 2</label>
                            <input type="number" class="form-control" name="emob2" id="emob2" placeholder="Enter Mobile No 2">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="branch">Branch Interested</label>
                        <select class="form-control" name="branch" id="branch" required>
                            <option value="">Select your branch</option>
                            <option value="Civil Engineering">Civil Engineering</option>
                            <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                            <option value="Electrical and Electronics Engineering">Electrical & Electronics Engineering</option>
                            <option value="Electronics and Communication Engineering">Electronics & Communication Engineering</option>
                            <option value="Mechanical Engineering">Mechanical Engineering</option>
                            <option value="MBA">MBA</option>
                            <option value="MCA">MCA</option>
                            <option value="Wastewater Management, Health and Safety Engineering">Wastewater Management Health and Safety Engineering</option>
                            <option value="Computer Network Engineering">Computer Network Engineering</option>
                            <option value="Structural Engineering">Structural Engineering</option>
                            <option value="Machine Design">Machine Design</option>
                            <option value="Digital Electronics">Digital Electronics</option>
                            <option value="Highway Technology">Highway Technology</option>
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn mt-2">Submit</button>
                    </div>
                </form>
            </section>
        </div>
        <div class="tab-pane fade" id="anti-ragging" role="tabpanel" aria-labelledby="anti-ragging-tab">
            <section class="grievance-cell">
                <h5>M.TECH/MBA/MCA Admission Details (CET Code:T929)</h5>
                <p>SECAB Institute of Engineering & Technology, Vijaypur is a technical institute that offers PG-M.TECH/MBA specialization in 08 disciplines.</p>
                <h4>Courses Offered:</h4>
                <table>
                    <tr>
                        <th>Sl No</th>
                        <th>Name Of Course</th>
                        <th>Intake</th>
                        <th>Duration</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>M.Tech. Computer Network Engineering. (CNE)</td>
                        <td>18</td>
                        <td>2 Years</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>M.Tech. Structural Engineering</td>
                        <td>18</td>
                        <td>2 Years</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>M.Tech. Machine Design</td>
                        <td>18</td>
                        <td>2 Years</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>M.Tech. Digital Electronics</td>
                        <td>18</td>
                        <td>2 Years</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Highway Technology</td>
                        <td>18</td>
                        <td>2 Years</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Wastewater Management, Health and Safety Engineering</td>
                        <td>18</td>
                        <td>2 Years</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Master of Computer Application. (MCA)</td>
                        <td>60</td>
                        <td>2 Years</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Master of Business Admin. (MBA)</td>
                        <td>60</td>
                        <td>2 Years</td>
                    </tr>
                </table>

                <h4 class="mt-3">Eligibility Criteria</h4>
                <h6>Admission to M.Tech Course:</h6>
                <p>Candidate should have passed the prescribed B.E Degree examination with not less than 50% of aggregate, and in the case of candidates from Karnataka belonging to SC/ST/Cat-I, a minimum of 45% aggregate is required.</p>
                <h6>Admission to M.B.A Course:</h6>
                <p>Candidate should have passed the Bachelor degree examinations with not less than 50% of aggregate and in case of candidates belonging to schedule cast, schedule tribes and category-I, the aggregate percentage of all the years of qualifying examination shall not be less than 45%.</p>
                <h4 class="mt-3">Enquiry Form</h4>
                <form class="enquiry-form">
                    <h6 style="text-align:right">Date: <?php echo date("d/m/y"); ?></h6>
                    <div class="form-group">
                        <label for="ename">Name Of candidate</label>
                        <input type="text" class="form-control" name="ename" id="ename" placeholder="Enter candidate name" required>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="emob1">Mobile 1</label>
                            <input type="number" class="form-control" name="emob1" id="emob1" placeholder="Enter Mobile No 1" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="emob2">Alternate Mobile 2</label>
                            <input type="number" class="form-control" name="emob2" id="emob2" placeholder="Enter Mobile No 2">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="form-group">
                        <label for="branch">Branch Interested</label>
                        <select class="form-control" name="branch" id="branch" required>
                            <option value="">Select your branch</option>
                            <option value="Civil Engineering">Civil Engineering</option>
                            <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                            <option value="Electrical and Electronics Engineering">Electrical & Electronics Engineering</option>
                            <option value="Electronics and Communication Engineering">Electronics & Communication Engineering</option>
                            <option value="Mechanical Engineering">Mechanical Engineering</option>
                            <option value="MBA">MBA</option>
                            <option value="MCA">MCA</option>
                            <option value="Wastewater Management, Health and Safety Engineering">Wastewater Management Health and Safety Engineering</option>
                            <option value="Computer Network Engineering">Computer Network Engineering</option>
                            <option value="Structural Engineering">Structural Engineering</option>
                            <option value="Machine Design">Machine Design</option>
                            <option value="Digital Electronics">Digital Electronics</option>
                            <option value="Highway Technology">Highway Technology</option>
                        </select>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn mt-2">Submit</button>
                    </div>
                </form>
            </section>
        </div>
        <div class="tab-pane fade" id="anti-sexual-harassment" role="tabpanel" aria-labelledby="anti-sexual-harassment-tab">
            <section class="grievance-cell">
                <h5>PhD Admission</h5>
                <p>SECAB Institute of Engineering & Technology, Vijaypur is a technical institute that offers recognised research centres in 08 Departments.</p>
                <h6>The following research centres are available.</h6>
                <table>
                    <tr>
                        <th>Sl No</th>
                        <th>Name Of Research Centres</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Computer Science and Engineering</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Civil Engineering</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Electronics & Communication Engineering</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Electrical & Electronics Engineering</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Mechanical Engineering</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>Department of Chemistry</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>Department of Mathematics</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Department of Physics</td>
                    </tr>
                </table>
            </section>
        </div>
        <div class="tab-pane fade" id="prevention-caste-discrimination" role="tabpanel" aria-labelledby="prevention-caste-discrimination-tab">
            <section class="grievance-cell">
                <h5>Foreign and NRI Students:</h5>
                <p>Students from Countries like Nepal, Srilanka, UAE, Saudi Arabia enroll in SIET every year.</p>
                <h6>Foreign and NRIs students are required to produce following documents:</h6>
                <ul>
                    <li>Valid passport</li>
                    <li>Student Visa</li>
                    <li>No Objection certificate from concerned Ministry of Govt. of India</li>
                    <li>AIDS free certificate issued by the District Hospital</li>
                    <li>No objection certificate from concerned Embassy</li>
                    <li>Eligibility certificate to be issued by Visvesvaraya Technological University Belgavi</li>
                    <li>Migration Certificate</li>
                </ul>
            </section>
        </div>
        <div class="contact">
            <h4>Contact Details</h4>
            <div class="contact-info">
                <p>Nauraspur Bagalkot Road Vijaypur (Bijapur)-586109 Karnataka, India.</p>
                <p>Phone: +91 9880674370, 8317371930, 9845601493, 9071449957</p>
                <p>08352-276930</p>
                <p>Fax: 08352-277353</p>
                <p>Email: <a href="mailto:admission_siet@secab.org">admission_siet@secab.org</a></p>
            </div>
        </div>
    </div>
</div>

<!-- included footer -->
<?php include '../home/footer.php' ?>