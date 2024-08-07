<!-- included header -->
<?php include 'header.php'; ?>

<style>
    .edp-links {
        margin-bottom: 20px;
    }

    .edp-link {
        display: block;
        padding: 10px;
        margin-bottom: 5px;
        background-color: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .edp-link:hover {
        background-color: #e2e6ea;
    }

    .edp-content {
        display: none;
        margin-top: 15px;
        padding: 15px;
        border: 1px solid #dee2e6;
        border-radius: 5px;
        background-color: #f8f9fa;
    }

    .edp-content.active {
        display: block;
    }

    .image-container img {
        width: 100%;
        height: auto;
        border-radius: 5px;
    }
</style>
</head>

<body>
    <div class="container mt-3">
        <h4 class="text-center">Entrepreneurship Development Program</h4>
        <div class="edp-links">
            <a href="#" class="edp-link" data-target="edp2016">EDP 2016-17</a>
            <a href="#" class="edp-link" data-target="edp2017">EDP 2017-18</a>
            <a href="#" class="edp-link" data-target="edp2018">EDP 2018-19</a>
        </div>
        <div id="edp2016" class="edp-content">
            <h6>ENTREPRENEURSHIP TRAINING PROGRAM 2016-17</h6>
            <p>Entrepreneurship training program was carried out on 16th & 17th Feb 2017 under guidance of Mrs. Ballari & Mr. Halalli, Joint Director DIC, Karnataka State Financial Corporation (KSFC) along with support of other Agenices Like District Industry Centre (DIC) and Government of Karnataka.</p>
            <div class="row">
                <div class="col-md-6">
                    <div class="image-container">
                        <img src="../img/edp/edp1.jpg" alt="EDP 2016 Image 1">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="image-container">
                        <img src="../img/edp/edp2.jpg" alt="EDP 2016 Image 2">
                    </div>
                </div>
            </div>
        </div>
        <div id="edp2017" class="edp-content">
            <h6>ENTREPRENEURSHIP TRAINING PROGRAM 2017-18</h6>
            <p>Entrepreneurship training program was carried out on 5th March 2018 under guidance of Pawan Sharma, Center for Entrepreneurship Development of Karnataka (CEDOK) along with support of other Agenices Like District Industry Centre (DIC) and Government of Karnataka.</p>
            <div class="row">
                <div class="col-md-6">
                    <div class="image-container">
                        <img src="../img/edp/edp3.jpg" alt="EDP 2017 Image 1">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="image-container">
                        <img src="../img/edp/edp4.jpg" alt="EDP 2017 Image 2">
                    </div>
                </div>
            </div>
        </div>
        <div id="edp2018" class="edp-content">
            <h6>ENTREPRENEURSHIP TRAINING PROGRAM 2018-19</h6>
            <p>Entrepreneurship training program was carried out on 9th April 2019 under guidance of Pawan Sharma, Center for Entrepreneurship Development of Karnataka (CEDOK) along with support of other Agenices Like District Industry Centre (DIC) and Government of Karnataka.</p>
            <div class="row">
                <div class="col-md-6">
                    <div class="image-container">
                        <img src="../img/edp/edp5.jpg" alt="EDP 2018 Image 1">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="image-container">
                        <img src="../img/edp/edp6.jpg" alt="EDP 2018 Image 2">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.edp-link').click(function(event) {
                event.preventDefault();
                var target = $(this).data('target');

                $('.edp-content').removeClass('active');
                $('#' + target).addClass('active');
            });
        });
    </script>

    <!-- included footer -->
    <?php include 'footer.php'; ?>