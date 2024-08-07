<style>
   h5{
    text-align: center;
    color: white;
    height: 30px;
    background-color: gray;
   }
   a{
    text-decoration: none;
   }
</style>
<!-- Get the Department Name -->
<?php
$department = isset($_GET['dept']) ? $_GET['dept'] : 'No Dept';
?>

<div class="non-tech-staff">

    <!-- cv dept -->
    <?php if ($department == "Civil") : ?>
        <div class="container mt-3">
            <h5>Students List</h5>
            <a href="../pdf/students/cv_students2.pdf">Second Year Students List</a><br><br>
            <a href="../pdf/students/cv_students3.pdf">Third Year Students List</a><br><br>
            <a href="../pdf/students/cv_students4.pdf">Final Year Students List</a><br><br>
        </div>

        <!-- cs dept -->
    <?php elseif ($department == "Computer Science") : ?>
        <div class="container mt-3">
            <h5>Students List</h5>
            <a href="../pdf/students/cs1.pdf">First Year Students List</a><br><br>
            <a href="../pdf/students/cse_2yr_2023.pdf">Second Year Students List</a><br><br>
            <a href="../pdf/students/cse_3yr_2023.pdf">Third Year Students List</a><br><br>
            <a href="../pdf/students/cse4.pdf">Final Year Students List</a><br><br>
        </div>

        <!-- ee dept -->
    <?php elseif ($department == "Electrical and Electronics") : ?>
        <div class="container mt-3">
            <h5>Students List</h5>
            <a href="../pdf/students/ee_stud_1.pdf">First Year Students List</a><br><br>
            <a href="../pdf/students/ee_stud_2.pdf">Second Year Students List</a><br><br>
            <a href="../pdf/students/ee_stud_3.pdf">Third Year Students List</a><br><br>
            <a href="../pdf/students/ee_stud_4.pdf">Final Year Students List</a><br><br>
        </div>

        <!-- ece dept -->
    <?php elseif ($department == "Electronics and Communication Engineering") : ?>
        <div class="container mt-3">
            <h5>Students List</h5>
            <a href="../pdf/students/ECE_I_Year22.pdf">First Year Students List</a><br><br>
            <a href="../pdf/students/ECE II year student list for website.pdf">Second Year Students List</a><br><br>
            <a href="../pdf/students/ECE III year student list 23.pdf">Third Year Students List</a><br><br>
            <a href="../pdf/students/ECE IV year student list23.pdf">Final Year Students List</a><br><br>
        </div>

        <!-- mech dept -->
    <?php elseif ($department == "Mechanical") : ?>
        <div class="container mt-3">
            <h5>Students List</h5>
            <a href="../pdf/students/mech1.pdf">First Year Students List</a><br><br>
            <a href="../pdf/students/mech2.pdf">Second Year Students List</a><br><br>
            <a href="../pdf/students/mech3.pdf">Third Year Students List</a><br><br>
            <a href="../pdf/students/mech4.pdf">Final Year Students List</a><br><br>
        </div>


    <?php endif; ?>
</div>