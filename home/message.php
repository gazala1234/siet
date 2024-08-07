<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    
<div class="container testimonial-slider">
    <div class="row">
        <div class="col-md-12">
            <div id="testimonial-slider" class="owl-carousel">
                <div class="testimonial">
                    <p class="description"><i class="fa fa-quote-left" aria-hidden="true"></i>
                        The vision of the management, environment of the institute and endeavor of the 
                        faculty members and other staff members have raised this prestigious 
                        institute to greater heights, setting SECAB at the place of pride among all 
                        colleges in Vijayapura.<span class="hidden-xs"> We give the students support 
                        and encouragement they need to reach their full potential. Today in the era 
                        of liberalization, privatization, and globalization we try to groom, nourish, and
                        nurture our students in such a way that they are fully equipped to meet the global
                        demands.</span>
                        <i class="fa fa-quote-right" aria-hidden="true"></i></p>
                    <div class="testimonial-content">
                        <div class="pic">
                            <img src="../img/home/president.jpg" alt="">
                        </div>
                        <h3 class="testimonial-title">S.A.Punekar
                            <small>Founder & President</small>
                        </h3>
                    </div>
                </div>
                <div class="testimonial">
                    <p class="description"><i class="fa fa-quote-left" aria-hidden="true"></i>
                        Engineering education has entered a new era. India has become a signatory of the Washington accord. Hence we must adopt Outcome Based Education and see that our students inculcate the Graduate attributes of an engineer. Outcome Based Education has shifted the focus of education from teacher-centric to student-centric one i.e., a student should achieve the goals of education.
                        <span class="hidden-xs"> The twelve graduate attributes of an engineer are knowledge base, problem analysis, investigation, design, tools, individual & team work, communication skill, professionalism, society & environmental impact, ethics & equality, economics & project management, and lifelong learning.
                        Your Success is our Goal. The basic objective of our institution is to provide quality education and we would like to adopt the latest technological advancements relevant to the education field in all of our institutions in the future.</span>
                        <i class="fa fa-quote-right" aria-hidden="true"></i></p>
                        <div class="testimonial-content">
                        <div class="pic">
                            <img src="../img/home/principal.jpg" alt="">
                        </div>
                        <h3 class="testimonial-title">Dr.R.B.Khadiranaikar
                            <small>Principal</small>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $(document).ready(function(){
        $("#testimonial-slider").owlCarousel({
            items: 1,
            loop: true,
            nav: true,
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            navText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>']
        });
    });
</script>