<!-- included header -->
<?php include '../home/header.php' ?>

<div class="complaint-form">
    <div class="form-header">
        <h5>Complaint Form of Grievance</h5>
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
        <div class="form-group dropdown">
            <label for="role">Select Role</label>
            <select class="form-control" id="role">
                <option>Select Role</option>
                <option value="Basic Science">Student</option>
                <option value="Civil Engineering">Staff</option>
                <option value="Computer Science and Engineering">Stakeholder</option>
            </select>
        </div>
        <div class="form-group">
            <label for="incidentDesc"><br><br>Description of the incident (in brief):</label>
            <textarea class="form-control" id="incidentDesc" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="incidentDate">Date of Complaint:</label>
            <input type="date" class="form-control" id="incidentDate">
        </div>
        <div class="text-center">
            <button type="submit" class="btn mt-2">Submit</button>
        </div>
    </form>
</div>

<!-- included footer -->
<?php include '../home/footer.php' ?>