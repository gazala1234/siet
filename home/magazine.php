<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Carousel</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        p {
            line-height: 1.7;
            color: black;
            font-size: 16px;
            font-weight: 400;
            text-align: justify;
        }

        .text h6{
            font-size: 20px;
            font-style: italic;
        }

        .carousel-item img {
            display: block;
            margin: auto;
            max-width: 32%;
            height: 500px;
            object-fit: cover;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 5%;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgba(0, 0, 0, 0.5);
        }

        .magazine h1,
        h3,
        h4 {
            color: white;
            background-color: #1cc3b2;
            text-align: center;
        }

        .coordinator-list {
            list-style-type: none;
            padding: 20px;
        }

        .coordinator-list li {
            font-size: 18px;
            color: #333;
            white-space: nowrap;
            padding: 10px 0;
        }

        .coordinator-list li span {
            font-weight: bold;
            display: inline-block;
            margin-right: 5px;
            color: #1cc3b2;
        }

        .btn {
            background-color: #1cc3b2;
            border: none;
            color: white;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 4px;
        }

        @media (max-width: 767px) {
            .carousel-item img {
                height: 300px;
            }

            .coordinator-list li {
                white-space: normal;
            }

            iframe {
                width: 100%;
                height: 300px;
            }
        }

        @media (max-width: 575px) {
            .carousel-item img {
                height: 200px;
            }
        }
    </style>
</head>

<body>
    <div class="container mt-4">
        <div class="magazine">
            <h1>ANCHOR</h1>
            <h3>THE SIET MAGAZINE</h3>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../img/home/mag1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img src="../img/home/mag2.jpg" alt="Second slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="magazine mt-2">
            <h3>ANCHOR: THE SIET MAGAZINE</h3>
        </div>
        <div class="text text-center">
                <h6>The sky never falls with the rain,</h6>
                <h6>It is never weighed down by all that it carries,</h6>
                <h6>It takes all of its anchors and turns them into stars.</h6>
            <p>We jointly and severally belong to this great institution, and this is a step towards taking an already well established, respected institution into the next phase of growth. Anchor offers you a manifestation of our individual and collective experiences, the thunder and the sunshine that we share among ourselves in bringing out this magazine.</p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="magazine">
                    <h4>Objectives</h4>
                    <ul>
                        <li>To delineate the activities and events conducted in and by SIET.</li>
                        <li>To impart noble thoughts and ideas to the readers.</li>
                        <li>To ignite creativity of the faculty members and students.</li>
                        <li>To proudly list and depict the achievements, honors and accolades of the staff and students / institute.</li>
                        <li>To document and record the vibes of SIET.</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="magazine">
                    <h4>Magazine Editions</h4>
                    <ul>
                        <li><a href="../pdf/magazine/m1.pdf">Anchor Vol-I 2015</a></li>
                        <li><a href="../pdf/magazine/m2.pdf">Anchor Vol-II 2016</a></li>
                        <li><a href="../pdf/magazine/m3.pdf">Anchor Vol-III 2017</a></li>
                        <li><a href="../pdf/magazine/m4.pdf">Anchor Vol-IV 2018</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="magazine">
                    <h4>Downloads</h4>
                    <ul>
                        <li><a href="../pdf/magazine/g1.pdf">Anchor_Vol_IV_Guidelines & Template</a></li>
                        <li><a href="../pdf/magazine/g2.pdf">Anchor_Vol_IV__Guidelines_Distinguished Awards</a></li>
                        <li><a href="../pdf/magazine/g3.pdf">Anchor_Vol_IV__Awards & Prizes</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="magazine">
                    <h4>Nominations Forms</h4>
                    <ul>
                        <li><a href="../pdf/magazine/nn1.pdf">Anchor Distinguished Alumnus Nomination form</a></li>
                        <li><a href="../pdf/magazine/nn2.pdf">Anchor Distinguished Department Nomination form</a></li>
                        <li><a href="../pdf/magazine/nn3.pdf">Anchor Distinguished Faculty Nomination form</a></li>
                        <li><a href="../pdf/magazine/nn4.pdf">Anchor Distinguished Student Nomination form</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="magazine">
            <h3>Magazine Coordinators</h3>
            <ul class="coordinator-list">
                <li>1. <span>Asiya Naz - </span>Dept. of Basic Science</li>
                <li>2. <span>Sadik Mujawar - </span>Dept. of Civil Engg.</li>
                <li>3. <span>Gayatri Bajantri - </span>Dept. of Computer Science Engg.</li>
                <li>4. <span>Vishwanath S - </span>Dept. of Electronics Engg.</li>
                <li>5. <span>Ms. Tabasum Guledgudd - </span>Dept. of Electrical Engg.</li>
                <li>6. <span>Syed Sameer Hussain - </span>Dept. of Mechanical Engg.</li>
            </ul>
        </div>
        <div class="row my-4">
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15277.4216353074!2d75.71798345367785!3d16.80871554850599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc6555e16365461%3A0xe7d295f843466728!2sSECAB%20INSTITUTE%20OF%20ENGINEERING%20%26%20TECHNOLOGY!5e0!3m2!1sen!2sin!4v1722056537406!5m2!1sen!2sin" width="100%" height="400" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-md-6">
                <h5 class="text-center">Contact Us</h5>
                <form>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" rows="3" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn mt-2">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
