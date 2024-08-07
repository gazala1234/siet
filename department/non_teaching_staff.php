<style>
    table{
        margin-top: 10px;
    }
    table tbody img {
        width: 50%;
        height: 20%;
    }
</style>
<!-- Get the Department Name -->
<?php
$department = isset($_GET['dept']) ? $_GET['dept'] : 'No Dept';
?>

<div class="non-tech-staff">
    <h3 class="text-center mt-3">Non-Teaching Fculty</h3>
    <!-- cv dept -->
    <?php if ($department == "Civil") : ?>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Sl. No.</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Qualification</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Mr. Allabaksh Bagwan</td>
                    <td>Supervisor</td>
                    <td>B E</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Mr. Abdul Shukur Mujawar</td>
                    <td>Instructor</td>
                    <td>Diploma</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Mr. Aleemulla Muddebihal</td>
                    <td>Instructor</td>
                    <td>Diploma</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Mr. Abdul Kayum</td>
                    <td>Instructor</td>
                    <td>Diploma</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Mr. Abdul Razak. Momin</td>
                    <td>Instructor</td>
                    <td>Diploma</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Mr. Krusnappa. D</td>
                    <td>Instructor</td>
                    <td>ITI</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Mr. Zubair Attar</td>
                    <td>Instructor</td>
                    <td>Diploma</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Mr. Khutbuddin Mulla</td>
                    <td>Helper</td>
                    <td>S S L C</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Mr. Riyaz Hattiwale</td>
                    <td>Helper</td>
                    <td>S S L C</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Mr. A B Bagali</td>
                    <td>Helper</td>
                    <td>S S L C</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Mr. S. B. Mageri</td>
                    <td>Helper</td>
                    <td>S S L C</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Mr. Nisarahmed R</td>
                    <td>Helper</td>
                    <td>S S L C</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Mr. Syed Bagwan</td>
                    <td>Helper</td>
                    <td>S S L C</td>
                </tr>
            </tbody>
        </table>

        <!-- cs dept -->
    <?php elseif ($department == "Computer Science") : ?>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Sl. No.</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Qualification</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Mr. Sameer</td>
                    <td>Supervisor</td>
                    <td>B E M.Tech</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Mr. Mohd Yaseen Bagewadi</td>
                    <td>Instructor</td>
                    <td>Diploma</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Mr. Habib Mangoli</td>
                    <td>Instructor</td>
                    <td>Diploma</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Mr. Harish Kulkarni</td>
                    <td>Instructor</td>
                    <td>Diploma</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Mr. Salman</td>
                    <td>Instructor</td>
                    <td>MSc</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Mr. Aslam Darga</td>
                    <td>Instructor</td>
                    <td>MSc</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Mr. Anand Maratha</td>
                    <td>Helper</td>
                    <td>S S L C</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Mr. Shafiq Kunte</td>
                    <td>Helper</td>
                    <td>S S L C</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Mr. Tanveer Bagwan</td>
                    <td>Helper</td>
                    <td>S S L C</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Mr. Goutam Durgoul</td>
                    <td>Helper</td>
                    <td>S S L C</td>
                </tr>
            </tbody>
        </table>


        <!-- ee dept -->
    <?php elseif ($department == "Electrical and Electronics") : ?>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Sl. No.</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Qualification</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><img src="../img/ntf/monwar hussain.jpg" alt="Mr. Mohd Munwar Hussain" style="max-width: 100px; height: auto;"></td>
                    <td>Mr. Mohd Munwar Hussain</td>
                    <td>Supervisor</td>
                    <td>B E</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><img src="../img/ntf/Junedi Photo.jpg" alt="Mr. Jamaluddin Junaidi" style="max-width: 100px; height: auto;"></td>
                    <td>Mr. Jamaluddin Junaidi</td>
                    <td>Technician</td>
                    <td>JODC</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><img src="../img/ntf/Rafiq Darga.jpg" alt="Mr. Rafeeq Darga" style="max-width: 100px; height: auto;"></td>
                    <td>Mr. Rafeeq Darga</td>
                    <td>Technician</td>
                    <td>JODC</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><img src="../img/ntf/Rafeed.jpg" alt="Mr. Rafeed Ahmed" style="max-width: 100px; height: auto;"></td>
                    <td>Mr. Rafeed Ahmed</td>
                    <td>Technician</td>
                    <td>JODC</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><img src="../img/ntf/shaheed afridi.jpg" alt="Mr. Shahid Afridi.Inamdar" style="max-width: 100px; height: auto;"></td>
                    <td>Mr. Shahid Afridi.Inamdar</td>
                    <td>Technician</td>
                    <td>JODC</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td><img src="../img/ntf/Chetan B.jpg" alt="Mr. Chetan Biradar" style="max-width: 100px; height: auto;"></td>
                    <td>Mr. Chetan Biradar</td>
                    <td>Helper</td>
                    <td>S S L C</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td><img src="../img/ntf/arif.jpg" alt="Mr. Arif Naikodi" style="max-width: 100px; height: auto;"></td>
                    <td>Mr. Arif Naikodi</td>
                    <td>Helper</td>
                    <td>S S L C</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td><img src="../img/ntf/Shreekanth H.jpg" alt="Mr. Sheerkanth Masakale" style="max-width: 100px; height: auto;"></td>
                    <td>Mr. Sheerkanth Masakale</td>
                    <td>Helper</td>
                    <td>S S L C</td>
                </tr>
            </tbody>
        </table>

        <!-- ece dept -->
    <?php elseif ($department == "Electronics and Communication Engineering") : ?>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Sl. No.</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Qualification</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><img src="../img/ntf/ec_nonteach1.jpg" alt="Ms. Fathima Sholapur" style="max-width: 100px; height: auto;"></td>
                    <td>Ms. Fathima Sholapur</td>
                    <td>Supervisor</td>
                    <td>B.E (E&C)</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><img src="../img/ntf/ec_nonteach4.jpg" alt="Mr. Siddappa Biradar" style="max-width: 100px; height: auto;"></td>
                    <td>Mr. Siddappa Biradar</td>
                    <td>Instructor</td>
                    <td>Diploma</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><img src="../img/ntf/placeholder.jpg" alt="Ms. Ayesha A Naganoor" style="max-width: 100px; height: auto;"></td>
                    <td>Ms. Ayesha A Naganoor</td>
                    <td>Instructor</td>
                    <td>Diploma</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><img src="../img/ntf/ec_nonteach3.jpg" alt="Ms. Shaheen Galgali" style="max-width: 100px; height: auto;"></td>
                    <td>Ms. Shaheen Galgali</td>
                    <td>Instructor</td>
                    <td>BE</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><img src="../img/ntf/placeholder.jpg" alt="Ms. Nikhat Banu Sonar" style="max-width: 100px; height: auto;"></td>
                    <td>Ms. Nikhat Banu Sonar</td>
                    <td>Instructor</td>
                    <td>BE</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td><img src="../img/ntf/ec_nonteach5.jpg" alt="Mr. Gulzar Jahagirdar" style="max-width: 100px; height: auto;"></td>
                    <td>Mr. Gulzar Jahagirdar</td>
                    <td>Instructor</td>
                    <td>Diploma In Hardware Technology</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td><img src="../img/ntf/placeholder.jpg" alt="Mr. R R Rathod" style="max-width: 100px; height: auto;"></td>
                    <td>Mr. R R Rathod</td>
                    <td>Helper</td>
                    <td>P. U. C</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td><img src="../img/ntf/placeholder.jpg" alt="Mr. Yamanappa Hitnalli" style="max-width: 100px; height: auto;"></td>
                    <td>Mr. Yamanappa Hitnalli</td>
                    <td>Helper</td>
                    <td>S S L C</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td><img src="../img/ntf/placeholder.jpg" alt="Mr. Nisar Ahmed Rozindar" style="max-width: 100px; height: auto;"></td>
                    <td>Mr. Nisar Ahmed Rozindar</td>
                    <td>Helper</td>
                    <td>S S L C</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td><img src="../img/ntf/placeholder.jpg" alt="Mr. B A Asangi" style="max-width: 100px; height: auto;"></td>
                    <td>Mr. B A Asangi</td>
                    <td>Helper</td>
                    <td>S S L C</td>
                </tr>
            </tbody>
        </table>

        <!-- mech dept -->
    <?php elseif ($department == "Mechanical") : ?>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Sl. No.</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Qualification</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><img src="../img/ntf/m_nonteach1.jpg" alt="No Image" style="max-width: 100px; height: auto;"></td>
                    <td>Mr. Hussain Ameen</td>
                    <td>Foreman</td>
                    <td>B E</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><img src="../img/ntf/m_nonteach2.jpg" alt="No Image" style="max-width: 100px; height: auto;"></td>
                    <td>Mr. Sikandar Girgokar</td>
                    <td>Foreman</td>
                    <td>B E</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><img src="../img/ntf/placeholder.jpg" alt="No Image" style="max-width: 100px; height: auto;"></td>
                    <td>Mr. Sayed A Tahir Quadri</td>
                    <td>Instructor</td>
                    <td>Diploma</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><img src="../img/ntf/m_nonteach4.jpg" alt="No Image" style="max-width: 100px; height: auto;"></td>
                    <td>Mr. Mehaboob N K</td>
                    <td>Instructor</td>
                    <td>Diploma</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><img src="../img/ntf/m_nonteach5.jpg" alt="No Image" style="max-width: 100px; height: auto;"></td>
                    <td>Mr. Abdulla Pathan</td>
                    <td>Instructor</td>
                    <td>I T I (Diploma)</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td><img src="../img/ntf/m_nonteach6.jpg" alt="No Image" style="max-width: 100px; height: auto;"></td>
                    <td>Mr. Arif Jamadar</td>
                    <td>Instructor</td>
                    <td>I T I</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td><img src="../img/ntf/m_nonteach7.jpg" alt="No Image" style="max-width: 100px; height: auto;"></td>
                    <td>Mr. Moulaali Kannur</td>
                    <td>Technician</td>
                    <td>I T I</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td><img src="../img/ntf/m_nonteach8.jpg" alt="No Image" style="max-width: 100px; height: auto;"></td>
                    <td>Mr. Husenpeera Mulla</td>
                    <td>Instructor</td>
                    <td>I T I</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td><img src="../img/ntf/m_nonteach9.jpg" alt="No Image" style="max-width: 100px; height: auto;"></td>
                    <td>Mr. Mushtaq Pathan</td>
                    <td>Technician</td>
                    <td></td>
                </tr>
                <tr>
                    <td>10</td>
                    <td><img src="../img/ntf/m_nonteach10.jpg" alt="No Image" style="max-width: 100px; height: auto;"></td>
                    <td>Mr. Md Kashim Junadi</td>
                    <td>Helper</td>
                    <td>S S L C</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td><img src="../img/ntf/m_nonteach11.jpg" alt="No Image" style="max-width: 100px; height: auto;"></td>
                    <td>Mr. Khajapeer. Jahagirdar</td>
                    <td>Helper</td>
                    <td>S S L C</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td><img src="../img/ntf/m_nonteach12.jpg" alt="No Image" style="max-width: 100px; height: auto;"></td>
                    <td>Mr. L S Lakkundi</td>
                    <td>Helper</td>
                    <td>S S L C</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td><img src="../img/ntf/placeholder.jpg" alt="No Image" style="max-width: 100px; height: auto;"></td>
                    <td>Mr. Ayub. Salotagi</td>
                    <td>Helper</td>
                    <td>S S L C</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td><img src="../img/ntf/m_nonteach14.jpg" alt="No Image" style="max-width: 100px; height: auto;"></td>
                    <td>Mr. Mohd Moshin Mirajkar</td>
                    <td>Helper</td>
                    <td>S S L C</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td><img src="../img/ntf/m_nonteach15.jpg" alt="No Image" style="max-width: 100px; height: auto;"></td>
                    <td>Mr. A D Takkalki</td>
                    <td>Helper</td>
                    <td>S S L C</td>
                </tr>
            </tbody>
        </table>


    <?php endif; ?>
</div>