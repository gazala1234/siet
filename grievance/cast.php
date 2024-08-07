<!-- included header -->
<?php include '../home/header.php' ?>

    <div class="complaint-form">
        <div class="form-header">
            <h5>Caste based discrimination complaint form for SC / ST / OBC Students / Teaching / Non-Teaching Staff</h5>
        </div>
        <form>
            <div class="form-group">
                <label for="studentName">Name:</label>
                <input type="text" class="form-control" id="studentName" placeholder="Enter name">
            </div>
            <div class="form-group">
                <label for="studentEmail">Email:</label>
                <input type="email" class="form-control" id="studentEmail" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="studentMobile">Mobile:</label>
                <input type="number" class="form-control" id="studentMobile" placeholder="Enter Mobile Number">
            </div>
            <div class="form-group">
                <label for="studentCourse">Course being pursued:</label>
                <input type="text" class="form-control" id="studentCourse" placeholder="Enter course">
            </div>
            <div class="form-group">
                <label for="studentUSN">University seat no (for students only) :</label>
                <input type="text" class="form-control" id="studentUSN" placeholder="Enter usn">
            </div>
            <div class="form-group">
                <label for="studentUSN">Designation (for staff only) :</label>
                <input type="text" class="form-control" id="desg" placeholder="Enter Designation">
            </div>
            <div class="form-group">
                <label>Category:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="category" id="sc" value="SC">
                    <label class="form-check-label" for="sc">SC</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="category" id="st" value="ST">
                    <label class="form-check-label" for="st">ST</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="category" id="obc" value="OBC">
                    <label class="form-check-label" for="obc">OBC</label>
                </div>
            </div>
            <div class="form-group dropdown">
                <label for="studentDept">Name of the department:</label>
                <select class="form-control" id="studentDept">
                    <option>Select Department</option>
                    <option value="Basic Science">Basic Science</option>
                    <option value="Civil Engineering">Civil Engineering</option>
                    <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                    <option value="Electrical and Electronics Engineering">Electrical & Electronics Engineering</option>
                    <option value="Electronics and Communication Engineering">Electronics & Communication Engineering</option>
                    <option value="Mechanical Engineering">Mechanical Engineering</option>
                </select>
            </div>
            <div class="form-group">
                <label for="incidentDesc"><br><br>Description of the incident (in brief):</label>
                <textarea class="form-control" id="incidentDesc" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="postalAddress">Postal Address:</label>
                <input type="text" class="form-control" id="postalAddress" placeholder="Enter postal address">
            </div>
            <div class="form-group">
                <label for="incidentPlace">Place of incident:</label>
                <input type="text" class="form-control" id="incidentPlace" placeholder="Enter place of incident">
            </div>
            <div class="form-group">
                <label for="incidentDate">Date of incident:</label>
                <input type="date" class="form-control" id="incidentDate">
            </div>
            <div class="form-group">
                <label for="incidentWitness">Any witness of incident:</label>
                <input type="text" class="form-control" id="incidentWitness" placeholder="Enter witness">
            </div>
            <div class="text-center">
                <button type="submit" class="btn mt-2">Submit</button>
            </div>
        </form>
    </div>

    <!-- included footer -->
    <?php include '../home/footer.php' ?>