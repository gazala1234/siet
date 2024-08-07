<style>
    .gallery img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .gallery .col-md-4 {
        margin-bottom: 30px;
    }
</style>

<!-- Get the Department Name -->
<?php
$department = isset($_GET['dept']) ? $_GET['dept'] : 'No Dept';
?>

<div class="gallery">

    <!-- basic science dept -->
    <?php if ($department == "Applied Science") : ?>
        <div class="container mt-4">
            <div class="row gallery">
                <div class="col-md-4">
                    <a href="../img/gallery/bs/glr11.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/bs/glr11.jpg" class="img-fluid" alt="Gallery Image 1">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/bs/bsi1.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/bs/bsi1.jpg" class="img-fluid" alt="Gallery Image 2">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/bs/glr55.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/bs/glr55.jpg" class="img-fluid" alt="Gallery Image 3">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/bs/bsi2.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/bs/bsi2.jpg" class="img-fluid" alt="Gallery Image 4">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/bs/bsi3.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/bs/bsi3.jpg" class="img-fluid" alt="Gallery Image 5">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/bs/bsi4.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/bs/bsi4.jpg" class="img-fluid" alt="Gallery Image 6">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/bs/bsi5.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/bs/bsi5.jpg" class="img-fluid" alt="Gallery Image 7">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/bs/bsi6.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/bs/bsi6.jpg" class="img-fluid" alt="Gallery Image 8">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/bs/bsi7.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/bs/bsi7.jpg" class="img-fluid" alt="Gallery Image 9">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/bs/bsi8.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/bs/bsi8.jpg" class="img-fluid" alt="Gallery Image 10">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/bs/bsi9.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/bs/bsi9.jpg" class="img-fluid" alt="Gallery Image 11">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/bs/basGal1.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/bs/basGal1.jpg" class="img-fluid" alt="Gallery Image 12">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/bs/basGal2.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/bs/basGal2.jpg" class="img-fluid" alt="Gallery Image 13">
                    </a>
                </div>
            </div>
        </div>

        <!-- civil dept -->
    <?php elseif ($department == "Civil") : ?>
        <div class="container mt-4">
            <div class="row gallery">
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glr15.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glr15.jpg" class="img-fluid" alt="Gallery Image 1">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glr16.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glr16.jpg" class="img-fluid" alt="Gallery Image 2">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glr17.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glr17.jpg" class="img-fluid" alt="Gallery Image 3">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glr47.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glr47.jpg" class="img-fluid" alt="Gallery Image 4">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glr13.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glr13.jpg" class="img-fluid" alt="Gallery Image 5">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glr49.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glr49.jpg" class="img-fluid" alt="Gallery Image 6">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glr48.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glr48.jpg" class="img-fluid" alt="Gallery Image 7">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glrcv1.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glrcv1.jpg" class="img-fluid" alt="Gallery Image 8">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glrcv2.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glrcv2.jpg" class="img-fluid" alt="Gallery Image 9">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glrcv3.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glrcv3.jpg" class="img-fluid" alt="Gallery Image 10">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glrcv4.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glrcv4.jpg" class="img-fluid" alt="Gallery Image 11">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glrcv5.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glrcv5.jpg" class="img-fluid" alt="Gallery Image 12">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glrcv6.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glrcv6.jpg" class="img-fluid" alt="Gallery Image 13">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glrcv7.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glrcv7.jpg" class="img-fluid" alt="Gallery Image 14">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glrcv8.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glrcv8.jpg" class="img-fluid" alt="Gallery Image 15">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glrcv9.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glrcv9.jpg" class="img-fluid" alt="Gallery Image 16">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glrcv10.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glrcv10.jpg" class="img-fluid" alt="Gallery Image 17">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glrcv11.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glrcv11.jpg" class="img-fluid" alt="Gallery Image 18">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glrcv12.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glrcv12.jpg" class="img-fluid" alt="Gallery Image 19">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glrcv13.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glrcv13.jpg" class="img-fluid" alt="Gallery Image 20">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glrcv14.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glrcv14.jpg" class="img-fluid" alt="Gallery Image 21">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glrcv15.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glrcv15.jpg" class="img-fluid" alt="Gallery Image 22">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glrcv16.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glrcv16.jpg" class="img-fluid" alt="Gallery Image 23">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glrcv17.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glrcv17.jpg" class="img-fluid" alt="Gallery Image 24">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glrcv18.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glrcv18.jpg" class="img-fluid" alt="Gallery Image 25">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glrcv20.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glrcv20.jpg" class="img-fluid" alt="Gallery Image 26">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glrcv21.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glrcv21.jpg" class="img-fluid" alt="Gallery Image 27">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glrcv22.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glrcv22.jpg" class="img-fluid" alt="Gallery Image 28">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glrcv23.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glrcv23.jpg" class="img-fluid" alt="Gallery Image 29">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glrcv24.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glrcv24.jpg" class="img-fluid" alt="Gallery Image 30">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glrcv25.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glrcv25.jpg" class="img-fluid" alt="Gallery Image 31">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glrcv25.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glrcv25.jpg" class="img-fluid" alt="Gallery Image 32">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glrcv26.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glrcv26.jpg" class="img-fluid" alt="Gallery Image 33">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glrcv27.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glrcv27.jpg" class="img-fluid" alt="Gallery Image 34">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glrcv27.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glrcv27.jpg" class="img-fluid" alt="Gallery Image 35">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glrcv28.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glrcv28.jpg" class="img-fluid" alt="Gallery Image 36">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glrcv29.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glrcv29.jpg" class="img-fluid" alt="Gallery Image 37">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glrcv30.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glrcv30.jpg" class="img-fluid" alt="Gallery Image 38">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cv/glrcv31.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cv/glrcv31.jpg" class="img-fluid" alt="Gallery Image 39">
                    </a>
                </div>
            </div>
        </div>

        <!-- cs dept -->
    <?php elseif ($department == "Computer Science") : ?>
        <div class="container mt-4">
            <div class="row gallery">
                <div class="col-md-4">
                    <a href="../img/gallery/cs/glr58.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cs/glr58.jpg" class="img-fluid" alt="Gallery Image 1">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cs/glr59.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cs/glr59.jpg" class="img-fluid" alt="Gallery Image 2">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cs/cseg1.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cs/cseg1.jpg" class="img-fluid" alt="Gallery Image 3">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cs/cseg2.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cs/cseg2.jpg" class="img-fluid" alt="Gallery Image 4">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cs/cseg3.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cs/cseg3.jpg" class="img-fluid" alt="Gallery Image 5">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cs/cseg5.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cs/cseg5.jpg" class="img-fluid" alt="Gallery Image 6">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cs/cseg4.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cs/cseg4.jpg" class="img-fluid" alt="Gallery Image 7">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cs/csglr1.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cs/csglr1.jpg" class="img-fluid" alt="Gallery Image 8">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cs/csglr2.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cs/csglr2.jpg" class="img-fluid" alt="Gallery Image 9">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cs/csglr3.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cs/csglr3.jpg" class="img-fluid" alt="Gallery Image 10">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cs/csglr4.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cs/csglr4.jpg" class="img-fluid" alt="Gallery Image 11">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cs/indus43.jpeg" data-fancybox="gallery">
                        <img src="../img/gallery/cs/indus43.jpeg" class="img-fluid" alt="Gallery Image 12">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/cs/plant2.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/cs/plant2.jpg" class="img-fluid" alt="Gallery Image 13">
                    </a>
                </div>
            </div>
        </div>

        <!-- ee dept -->
    <?php elseif ($department == "Electrical and Electronics") : ?>
        <div class="container mt-4">
            <div class="row gallery">
                <div class="col-md-4">
                    <a href="../img/gallery/ee/glr61.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ee/glr61.jpg" class="img-fluid" alt="Gallery Image 1">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ee/glr62.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ee/glr62.jpg" class="img-fluid" alt="Gallery Image 2">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ee/glr28.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ee/glr28.jpg" class="img-fluid" alt="Gallery Image 3">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ee/glr60.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ee/glr60.jpg" class="img-fluid" alt="Gallery Image 4">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ee/glr29.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ee/glr29.jpg" class="img-fluid" alt="Gallery Image 5">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ee/glr24.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ee/glr24.jpg" class="img-fluid" alt="Gallery Image 6">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ee/glr26.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ee/glr26.jpg" class="img-fluid" alt="Gallery Image 7">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ee/glr27.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ee/glr27.jpg" class="img-fluid" alt="Gallery Image 8">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ee/eeglr1.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ee/eeglr1.jpg" class="img-fluid" alt="Gallery Image 9">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ee/eeglr2.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ee/eeglr2.jpg" class="img-fluid" alt="Gallery Image 10">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ee/eeglr3.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ee/eeglr3.jpg" class="img-fluid" alt="Gallery Image 11">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ee/eeglr4.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ee/eeglr4.jpg" class="img-fluid" alt="Gallery Image 12">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ee/eeglr5.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ee/eeglr5.jpg" class="img-fluid" alt="Gallery Image 13">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ee/eeglr6.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ee/eeglr6.jpg" class="img-fluid" alt="Gallery Image 14">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ee/eeglr7.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ee/eeglr7.jpg" class="img-fluid" alt="Gallery Image 15">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ee/eeglr8.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ee/eeglr8.jpg" class="img-fluid" alt="Gallery Image 16">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ee/eeglr9.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ee/eeglr9.jpg" class="img-fluid" alt="Gallery Image 17">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ee/eeglr10.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ee/eeglr10.jpg" class="img-fluid" alt="Gallery Image 18">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ee/eeglr11.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ee/eeglr11.jpg" class="img-fluid" alt="Gallery Image 19">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ee/eeglr12.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ee/eeglr12.jpg" class="img-fluid" alt="Gallery Image 20">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ee/eeglr13.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ee/eeglr13.jpg" class="img-fluid" alt="Gallery Image 21">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ee/eeglr14.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ee/eeglr14.jpg" class="img-fluid" alt="Gallery Image 22">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ee/eeglr15.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ee/eeglr15.jpg" class="img-fluid" alt="Gallery Image 23">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ee/eeglr16.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ee/eeglr16.jpg" class="img-fluid" alt="Gallery Image 24">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ee/eeglr17.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ee/eeglr17.jpg" class="img-fluid" alt="Gallery Image 25">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ee/eeglr18.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ee/eeglr18.jpg" class="img-fluid" alt="Gallery Image 26">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ee/eeglr19.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ee/eeglr19.jpg" class="img-fluid" alt="Gallery Image 27">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ee/eeglr20.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ee/eeglr20.jpg" class="img-fluid" alt="Gallery Image 28">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ee/eeglr21.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ee/eeglr21.jpg" class="img-fluid" alt="Gallery Image 29">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ee/eeglr22.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ee/eeglr22.jpg" class="img-fluid" alt="Gallery Image 30">
                    </a>
                </div>
            </div>
        </div>

        <!-- ec dept -->
    <?php elseif ($department == "Electronics and Communication Engineering") : ?>
        <div class="container mt-4">
            <div class="row gallery">
                <div class="col-md-4">
                    <a href="../img/gallery/ec/glr33.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ec/glr33.jpg" class="img-fluid" alt="Gallery Image 1">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ec/glr63.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ec/glr63.jpg" class="img-fluid" alt="Gallery Image 2">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ec/glr64.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ec/glr64.jpg" class="img-fluid" alt="Gallery Image 3">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ec/glr6.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ec/glr6.jpg" class="img-fluid" alt="Gallery Image 4">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ec/glr37.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ec/glr37.jpg" class="img-fluid" alt="Gallery Image 5">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ec/glr38.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ec/glr38.jpg" class="img-fluid" alt="Gallery Image 6">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ec/glr7.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ec/glr7.jpg" class="img-fluid" alt="Gallery Image 7">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ec/glr8.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ec/glr8.jpg" class="img-fluid" alt="Gallery Image 8">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ec/glr9.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ec/glr9.jpg" class="img-fluid" alt="Gallery Image 9">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ec/ec_glr01.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ec/ec_glr01.jpg" class="img-fluid" alt="Gallery Image 10">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ec/ec_glr02.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ec/ec_glr02.jpg" class="img-fluid" alt="Gallery Image 11">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ec/ec_glr03.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ec/ec_glr03.jpg" class="img-fluid" alt="Gallery Image 12">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ec/ec_glr04.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ec/ec_glr04.jpg" class="img-fluid" alt="Gallery Image 13">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ec/ec_glr05.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ec/ec_glr05.jpg" class="img-fluid" alt="Gallery Image 14">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ec/ec_glr06.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ec/ec_glr06.jpg" class="img-fluid" alt="Gallery Image 15">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ec/ec_glr07.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ec/ec_glr07.jpg" class="img-fluid" alt="Gallery Image 16">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ec/ec_glr08.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ec/ec_glr08.jpg" class="img-fluid" alt="Gallery Image 17">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ec/ec_glr09.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ec/ec_glr09.jpg" class="img-fluid" alt="Gallery Image 18">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/ec/ec_glr10.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/ec/ec_glr10.jpg" class="img-fluid" alt="Gallery Image 19">
                    </a>
                </div>
            </div>
        </div>

        <!-- mech dept -->
    <?php elseif ($department == "Mechanical") : ?>
        <div class="container mt-4">
            <div class="row gallery">
                <div class="col-md-4">
                    <a href="../img/gallery/me/glr43.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/me/glr43.jpg" class="img-fluid" alt="Gallery Image 1">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/me/glr51.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/me/glr51.jpg" class="img-fluid" alt="Gallery Image 2">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/me/glr52.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/me/glr52.jpg" class="img-fluid" alt="Gallery Image 3">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/me/glr53.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/me/glr53.jpg" class="img-fluid" alt="Gallery Image 4">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/me/glr54.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/me/glr54.jpg" class="img-fluid" alt="Gallery Image 5">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/me/mech_gal1.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/me/mech_gal1.jpg" class="img-fluid" alt="Gallery Image 6">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/me/mech_gal2.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/me/mech_gal2.jpg" class="img-fluid" alt="Gallery Image 7">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/me/mech_gal3.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/me/mech_gal3.jpg" class="img-fluid" alt="Gallery Image 8">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/me/mech_gal4.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/me/mech_gal4.jpg" class="img-fluid" alt="Gallery Image 9">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/me/mech_gal5.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/me/mech_gal5.jpg" class="img-fluid" alt="Gallery Image 10">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/me/mech_gal6.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/me/mech_gal6.jpg" class="img-fluid" alt="Gallery Image 11">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/me/mech_gal7.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/me/mech_gal7.jpg" class="img-fluid" alt="Gallery Image 12">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/me/mech_gal8.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/me/mech_gal8.jpg" class="img-fluid" alt="Gallery Image 13">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/me/mech_gal9.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/me/mech_gal9.jpg" class="img-fluid" alt="Gallery Image 14">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/me/mech_gal10.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/me/mech_gal10.jpg" class="img-fluid" alt="Gallery Image 15">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/me/mech_gal11.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/me/mech_gal11.jpg" class="img-fluid" alt="Gallery Image 16">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="../img/gallery/me/mech_gal12.jpg" data-fancybox="gallery">
                        <img src="../img/gallery/me/mech_gal12.jpg" class="img-fluid" alt="Gallery Image 17">
                    </a>
                </div>
            </div>
        </div>

    <?php endif; ?>
</div>
