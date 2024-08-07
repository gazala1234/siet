<style>
    h5 {
        text-align: center;
        color: white;
        height: 30px;
        background-color: gray;
    }

    a {
        text-decoration: none;
    }
</style>
<!-- Get the Department Name -->
<?php
$department = isset($_GET['dept']) ? $_GET['dept'] : 'No Dept';
?>

<div class="non-tech-staff">
    <h5 class="mt-3">News Letters</h5>
    <!-- cv dept -->
    <?php if ($department == "Civil") : ?>
        <div class="container mt-3">
            <a class="card-link" href="../pdf/news-letters/cv-newsletter.pdf">News Letter 2019-20</a>
        </div>

        <!-- cs dept -->
    <?php elseif ($department == "Computer Science") : ?>
        <div class="container mt-3">
            <a href="../pdf/news-letters/cs-newsletter.pdf">News Letter 2020-21</a><br>
            <a href="../pdf/news-letters/cs-newsletter1.pdf">News Letter 2019-20 Even Sem</a><br>
            <a href="../pdf/news-letters/cs-newsletter2.pdf">News Letter 2019-20 Odd Sem</a><br>
            <a href="../pdf/news-letters/cs-newsletter3.pdf">News Letter 2017-18</a><br>
            <a href="../pdf/news-letters/cs-newsletter4.pdf">News Letter 2016-17</a><br>
            <a href="../pdf/news-letters/cs-newsletter5.pdf">News Letter 2015-16</a>
        </div>

        <!-- ee dept -->
    <?php elseif ($department == "Electrical and Electronics") : ?>
        <div class="container mt-3">
            <a href="../pdf/news-letters/ee-newsletter.pdf">News Letter 2019-20 Even Sem</a><br>
            <a href="../pdf/news-letters/ee-newsletter1.pdf">News Letter 2017-18 Even Sem</a><br>
            <a href="../pdf/news-letters/ee-newsletter2.pdf">News Letter 2017-18 Odd Sem</a><br>
            <a href="../pdf/news-letters/ee-newsletter3.pdf">News Letter 2016-17 Even Sem</a><br>
            <a href="../pdf/news-letters/ee-newsletter4.pdf">News Letter 2016-17 Odd Sem</a><br>
            <a href="../pdf/news-letters/ee-newsletter5.pdf">News Letter 2015-16 Odd Sem</a><br>
            <a href="../pdf/news-letters/ee-newsletter6.pdf">News Letter 2015-16 Even Sem</a>
        </div>

        <!-- ece dept -->
    <?php elseif ($department == "Electronics and Communication Engineering") : ?>
        <div class="container mt-3">
            <a href="../pdf/news-letters/ec-newsletter.pdf">News Letter 2021-22 Vol-I</a><br>
            <a href="../pdf/news-letters/ec-newsletter1.pdf">News Letter 2021-22 Vol-I</a><br>
            <a href="../pdf/news-letters/ec-newsletter2.pdf">News Letter 2020-21</a><br>
            <a href="../pdf/news-letters/ec-newsletter3.pdf">News Letter 2018-19 Vol-II</a><br>
            <a href="../pdf/news-letters/ec-newsletter4.pdf">News Letter 2018-19 Vol-I</a><br>
            <a href="../pdf/news-letters/ec-newsletter5.pdf">News Letter 2017-18</a><br>
            <a href="#">News Letter 2016-17</a><br>
            <a href="../pdf/news-letters/ec-newsletter7.pdf">News Letter 2015-16</a>
        </div>

        <!-- mech dept -->
    <?php elseif ($department == "Mechanical") : ?>
        <div class="container mt-3">
            <a href="../pdf/news-letters/me-newsletter.pdf">News Letter 2020-21 Even Sem</a><br>
            <a href="../pdf/news-letters/me-newsletter1.pdf">News Letter 2019-20 Odd Sem</a><br>
            <a href="../pdf/news-letters/me-newsletter2.pdf">News Letter 2017-18 Even Sem</a><br>
            <a href="../pdf/news-letters/me-newsletter3.pdf">News Letter 2017-18 Odd Sem</a><br>
            <a href="../pdf/news-letters/me-newsletter4.pdf">News Letter 2016-17 Even Sem</a><br>
            <a href="../pdf/news-letters/me-newsletter5.pdf">News Letter 2016-17 Odd Sem</a><br>
            <a href="../pdf/news-letters/me-newsletter6.pdf">News Letter 2015-16 Even Sem</a><br>
            <a href="../pdf/news-letters/me-newsletter7.pdf">News Letter 2015-16 Odd Sem</a>
        </div>


    <?php endif; ?>
</div>