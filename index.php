<!doctype html>
<html ⚡>
<head>

    <meta charset="utf-8">
    <script async src="https://cdn.ampproject.org/v0.js"></script> 
    <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
    <script async custom-element="amp-selector" src="https://cdn.ampproject.org/v0/amp-selector-0.1.js"></script>
    <script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
    <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
    <script async custom-element="amp-mustache" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
    <script custom-element="amp-fit-text" src="https://cdn.ampproject.org/v0/amp-fit-text-0.1.js" async></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet"
		href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
		integrity= "sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" 
        crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script async src="https://cdn.ampproject.org/v0.js"></script>
<script async src="https://cdn.ampproject.org/v0/amp-carousel-0.2.js"></script>
<script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
    <title>LeifKleven</title>

    <style amp-custom>
        body {
        margin: 0;
        padding: 0;
        background-color:#D8D8D8;
        font-family: 'Jost';
        color: #000;
        font: weight 400px;
        font: size 70px;
        
        }
    .image-text {
      position: absolute;
      bottom: 10px;
      left: 10px;
      color: white;
      background-color: rgba(0, 0, 0, 0.5);
      padding: 5px;
      font-size: 18px;
    }
    
    .image-text-body {
            color: white; 
            width: 80%; 
            position:absolute; 
            top:10%; 
            left: 10%;
    }
    .body-img{
        position: relative;
        box-shadow: 0px 0px 30px 0px rgba(0,0,0,0.3);
    }

    .newsletter-form{
        background: rgba(169,169,169,0.1);
        height: 50px;
        padding: 10px;
        border-radius: 10px;
    }
    .btn-submit{
        height: 40px;
        border-style: none;
        padding: 10px;
        border-radius:5px;

    }
    .body-text{
        margin: 30px 0px 30px 0px;
        font-family: 'Jost';
    }
    
    .body-text-p2{
        margin: 0px 0px 25px 0px;
        font-family: 'Jost';
        color:;
    }
    .body-text-heading{
        margin: 0px 0px 30px 0px;
        font-family: 'Jost';
    }
    .page-2{
        
        padding:40px 0 40px 40px;      
        position: relative;
        background: #D8D8D8;
        color: #434343;
    }
    .decorator01{
        width:20px;
        height: 60px;
        position:absolute;
        margin:0px 0px 0px -40px;
        top: 13%;
    }
    
    .decorator{
        width:100px;
        height: 10px;
        position:absolute;
        margin:0px 0px 0px -40px;
        top: 20%;
        left: 45%;
    }
    .decorator3{
        width:20px;
        height: 80px;
        position:absolute;
        margin:20px 0 0 -30px;
    }
    .p3content{
        margin-top:20px;
        padding: 30px;
    }
    .p5content{
        position:absolute;
        font-family:'Jost';
        margin:30px;
        
        margin-top: 50px !important;
        background: rgba(255,255, 255, 0.5);
    }
    .body-text-p5{
        margin: 0px 0px 25px 0px;
        font-family: 'Jost';
        color:;
    }
    @media only screen and (max-width: 768px) {
        .p5content {
            width:35%;
            position:absolute;
        margin: 10px 0 0 10px;
        font-family:'Jost';
        padding: 20px;
        font-size: 10px;
        background: rgba(255,255, 255, 0.5);
        }
    
    .body-text-p5{
        font-family: 'Jost';
        font-size: 10px;
    }
}
    .p6content{
        position:absolute;
        margin: 25px 0 0 50px;
        font-family:'Jost';
        padding: 50px;
        color: #fff;
    }
    .faqs{
        margin-left: 10%;
    }
    .faqsBg{
        position:relative; 
       height:50%
        
    }
    .faqsCard{
        margin-top: 20px;
    }

    .contact-img{
        width: 100px;
        height: auto;
        position: absolute;
        float:right;

    }

    .slider-container {
      position: relative;
      max-width: 800px;
      margin: 0 auto;
    }
    .slider-image {
      width: 50%;
      float: left;
    }
    .slider-text {
      width: 50%;
      float: right;
      padding: 20px;
      box-sizing: border-box;
      background-color: #f8f9fa;
    }
    .slider-button {
      text-align: center;
      margin-top: 10px;
    }
    .input-fields {
    display: flex;
    flex-wrap: wrap;
}
.btn1 {
    background-color: #B6975E;
    color: #ffffff; 
    padding: 10px 20px; 
    border: none;
    border-radius: 0px;
    text-decoration: none; 
    height:38px;
}

.btn1:hover {
    background-color: #B6975E;
    color: #ffffff;
    text-decoration: none; 
}
.contact-img {
    z-index: -1; /* Ensure the image is behind the form */
    top: 100; /* Position at the top */
    right: 0; /* Position at the right */
}
.accordion-item {
      border: 1px solid black;
      border-radius: 5px;
      margin-bottom: 10px;
    }

    /* Style active accordion question */
    .accordion-button:focus {
      color: brown;
      background-color: white;
    }

    /* Add custom style for accordion body */
    .accordion-body {
      background-color: white; /* Set background color to white */
      padding: 10px;
    }
    
    </style>

</head>
<body>
    <!---------------------------- Header -------------------------->
  
    <?php include 'header.php';?>
    
    <!---------------------------- Header END -------------------------->

     <!---------------------------- Body -------------------------->

    <div class="container-flex body-img">
    <amp-img src="/Static/bgimg.png" 
        width="1228" height="819" layout="responsive">
    </amp-img>
    <div class="image-text-body">
        <div class="body-text-heading col-md-6">
            <amp-fit-text
                width="100" height="50" layout="responsive">
                Law Office Of <br> Leif Kelvin
            </amp-fit-text>
        </div>
        <amp-fit-text 
            width="200" height="10" layout="responsive">
            I Am <span style="color: #B6975E;"><b>Dedicated</b>.</span>
        </amp-fit-text>
        <div class="body-text col-md-6">
            <amp-fit-text
                width="200" height="50" layout="responsive">
                Attorney Leif Kleven is San Diego County's premiere attorney representing you and your loved ones in litigation involving personal injury cases, car accidents, appeals, and more.
            </amp-fit-text>
        </div>
        <div class="col-md-6">
            <a href="#" class="btn1" style="background-color: ' . $backgroundColor . '; color: ' . $fontColor . ';">Book Consultancy Now</a>
        </div>
    </div>
</div>
   

            <!---------------------------- Section 2 -------------------------->
            <div class="container-flex page-2">

            <amp-img class="decorator01" src="/Static/Decorator01.png" 
            width="100" height="100" layout="responsive">
        </amp-img>
            <div class="body-text-heading-p2 col-md-6">
                <amp-fit-text
                    width="480" height="100" layout="responsive">
                    Personal Injury
                </amp-fit-text>
        </div>
        <amp-img class="decorator" src="/Static/Decorator.png" 
            width="50" height="50" layout="responsive">
        </amp-img>
        
            <div class="image-text-body-p2">
            <div class="body-text-p2 col-md-8">
                <amp-fit-text
                    width="200" height="60" layout="responsive">
                    San Diego Personal Injury Attorney <br>
                    Chula Vista Personal Injury Attorney<br>
                    Attorney Leif H. Kleven is a personal injury attorney, representing those who have been injured because of another's conduct. Whether you or a loved one were involved in a car accident, a bicycle accident, or the victim of another's wrongful conduct, the Law Office of Leif Kleven is dedicated to protecting your rights and ensuring that you are justly compensated for your injuries.
                </amp-fit-text>
            </div>
            <div class="col-md-6">
                    <a href="#" class="btn1" style="background-color: ' . $backgroundColor . '; color: ' . $fontColor . ';">Contact Us Now</a>
                  </div>
        </div>
    </div>
            <!---------------------------- Section 3 -------------------------->
<div class="row">
    <div class="container-flex col-md-6 col-sm-12">
        <amp-img class="p3Image" src="/Static/p3Image.png" 
                width="100" height="100" layout="responsive">
            </amp-img>
    </div>

    <div class="container-flex p3content col-md-6 col-sm-12">
    <amp-img class="decorator3" src="/Static/Decorator01.png" 
            width="100" height="100" layout="responsive">
        </amp-img>
            <div class="body-text-heading-p3">
                <amp-fit-text
                    width="480" height="100" layout="responsive">
                    Federal Criminal Defense
                </amp-fit-text>
            </div>
            <div class="image-text-body-p2">
                 <div class="body-text-p2">
                <amp-fit-text
                    width="300" height="100" layout="responsive">
                    San Diego federal criminal defense attorney Leif Kleven represents individuals charged with any federal crime. Your freedom is at stake once you have been charged with a federal crime. He has the federal trial experience in U.S. District Court for the Southern District of California and experience before the Ninth Circuit Court of Appeal to fight for your rights at every step.    
                </amp-fit-text>
                </div>
                <a href="#" class="btn1" style="background-color: ' . $backgroundColor . '; color: ' . $fontColor . ';">Contact Us Now</a>
            </div>
        </div>
    </div>
     <!---------------------------- Section 4 -------------------------->
     <div class="container-flex page-2">

        <amp-img class="decorator01" src="/Static/Decorator01.png" 
        width="200" height="200" layout="responsive">
        </amp-img>
        <div class="body-text-heading-p2 col-md-6">
            <amp-fit-text
                width="480" height="100" layout="responsive">
                Appeals
            </amp-fit-text>
        </div>
        <amp-img class="decorator" src="/Static/Decorator.png" 
        width="50" height="50" layout="responsive">
        </amp-img>

        <div class="image-text-body-p2">
        <div class="body-text-p2 col-md-8">
            <amp-fit-text
                width="200" height="60" layout="responsive">
                Decisions of the trial court may not be the end of litigation. Attorney Leif Kleven is an experienced appellate attorney and works with you to represent your interests on appeal, and is licensed to practice before the California Supreme Court, all of the Courts of Appeal in the State of California, and the Ninth Circuit Court of Appeals</amp-fit-text>
        </div>
        <a href="#" class="btn1" style="background-color: ' . $backgroundColor . '; color: ' . $fontColor . ';">Contact Us Now</a>
        </div>
        </div>



        <!---------------------------- Section 5 -------------------------->

    <div class="row">
        <amp-img class="Container-about" src="/Static/teambg.png" 
                width="200" height="100" layout="responsive">
            </amp-img>

        <div class="container-flex p5content col-md-5 col-sm-12">
            <amp-img class="decorator3" src="/Static/Decorator01.png" 
                width="200" height="200" layout="responsive">
            </amp-img>
            <div class="body-text-heading-p3 normal-font"> 
    <amp-fit-text
        width="480" height="100" layout="responsive">
        About
    </amp-fit-text>
</div>
<div class="image-text-body-p2">
    <div class="body-text-p5 normal-font"> 
        <amp-fit-text
            width="250" height="200" layout="responsive">
           Attorney Leif H. Kleven is an attorney and advocate, representing individuals in civil litigation and federal criminal defense cases in San Diego, California, Chula Vista, California, and throughout Southern California. Mr. Kleven is committed to providing individualized, one-on-one representation to each of his clients.
        </amp-fit-text>
    </div>
</div>
        </div>
    </div>

 <!---------------------------- Section 6 FAQs -------------------------->

 <div class="row faqs">
       <amp-img class="faqsBg img-fluid" src="/Static/bgFaqs.png"
         width="200"
         height="100"
         layout="responsive"
         alt="">
       </amp-img>
       <div class="container-flex"  style="position:absolute;">
        <div class=" body-text-heading-p2 col-md-6">
            <amp-fit-text
                width="480" height="100" layout="responsive">
                FAQs
            </amp-fit-text>
        </div>

      <div class="row">
  <!-- First column for the first three accordions -->
  <div class="col-md-6">
    <div class="accordion" id="accordionColumn1">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          What is Leif Kleven?
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionColumn1">
          <div class="accordion-body">
          Leif Kleven is a passionate attorney and advocate. He began his career representing individuals charged with committing crimes in federal court (both in the Southern District of California and Central District of California) and in San Diego County Superior Court. </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          What Leif Kleven are really doing?
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionColumn1">
          <div class="accordion-body">
            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          When Leif Kleven was established and why?
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionColumn1">
          <div class="accordion-body">
            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Second column for the next three accordions -->
  <div class="col-md-6">
    <div class="accordion" id="accordionColumn2">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
          What Leif Kleven are really doing?
          </button>
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionColumn2">
          <div class="accordion-body">
            <strong>This is the fourth item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingFive">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          When Leif Kleven was established and why?
          </button>
        </h2>
        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionColumn2">
          <div class="accordion-body">
            <strong>This is the fifth item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingSix">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          What Leif Kleven are really doing?
          </button>
        </h2>
        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionColumn2">
          <div class="accordion-body">
            <strong>This is the sixth item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php

include_once 'function.php';


handle_form_submission();
?>
    <!---------------------------- Section 7 Contact Form -------------------------->
    <div class="row">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <h1 class="mb-3">
                    <amp-fit-text width="480" height="100" layout="responsive">
                        Contact Us
                    </amp-fit-text>
                </h1>
                <form method="POST" action-xhr="contact-us.php" target="_top" >
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="your-name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="your-name" name="name" required>
                        </div>
                        <div class="col-md-6">
                            <label for="your-email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="your-email" name="email" required>
                        </div>
                        <div class="col-md-6">
                            <label for="street-address" class="form-label">Street Address</label>
                            <input type="text" class="form-control" id="street-address" name="street-address" required>
                        </div>
                        <div class="col-md-6">
                            <label for="phone-number" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone-number" name="phone-number">
                        </div>
                        <div class="col-12">
                            <label for="your-message" class="form-label">Your Message</label>
                            <textarea class="form-control" id="your-message" name="message" rows="5" required></textarea>
                        </div>
                        <div class="col-12">
                            <input type="submit" class="btn1" value="Submit" name="submit" style="background-color:{{backgroundColor}}; color:{{fontColor}};">
                        </div>
                    </div>
                </form>
            </div>
            <div class="contact-img">
                <amp-img class="" style="width:50%; height: auto; float:right;" src="/LeifKleven/Static/contactFormLogo.png"
                         width="1"
                         height="1"
                         layout="responsive"
                         alt="contactFormLogo">
                </amp-img>
            </div>
        </div>
    </div>
</div>

    <!---------------------------- Section 7 End -------------------------->


    <!---------------------------- Footer -------------------------->
    <?php include 'footer.php';?>
	<!---------------------------- Footer END -------------------------->


  
  <script>
    const header = document.querySelector('.header');
    window.addEventListener('scroll', () => {
    const scrollY = window.scrollY;
    if (scrollY > 20) {
    header.classList.add('scrolled');
    } else {
    header.classList.remove('scrolled');
    }
    });
</script>
<script>
		$('.card-header').click(function() {
			$(this).find('i').toggleClass('fas fa-plus fas fa-minus');
		});
	</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>