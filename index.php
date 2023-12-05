<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Prasanna Kumar Shivarapu - Portfolio</title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Portfolio of Prasanna Kumar Shivarapu" name="description">
    <meta content="prasannakumarshivarapuportfolio, portfolio" name="keywords">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
    .text-danger {
      color: red;
    }

    .message-container {
      margin-top: 10px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .success-message {
      color: green;
    }

    .error-message {
      color: red;
    }
  </style>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51" ng-app="myApp" ng-controller="myCtrl">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light fixed-top shadow py-lg-0 px-4 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.html" class="navbar-brand d-block d-lg-none">
            <h6 class="text-primary fw-bold m-0">Prasanna kumar</h6>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between py-4 py-lg-0" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="#home" class="nav-item nav-link active">Home</a>
                <a href="#about" class="nav-item nav-link">About</a>
                
                
            </div>
            <a href="index.html" class="navbar-brand bg-secondary py-3 px-4 mx-3 d-none d-lg-block">
                <h6 class="text-primary fw-bold m-0">Prasanna kumar</h6>
            </a>
            <div class="navbar-nav me-auto py-0">
                <a href="#skill" class="nav-item nav-link">Skills</a>
                <a href="#contact" class="nav-item nav-link">Contact</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-light my-6 mt-0" id="home">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 py-6 pb-0 pt-lg-0">
                    <h3 class="text-primary mb-3">I'm</h3>
                    <h1 class="display-3 mb-3">Prasanna kumar shivarapu</h1>
                    <h2 class="typed-text-output d-inline"></h2>
                    <div class="typed-text d-none">Web Developer, Front End Developer,Backend Developer, React Developer</div>
                    <div class="d-flex align-items-center pt-5">
                        <a href="https://drive.google.com/file/d/1-V_uPw_PY-MwcqaK5HbaXZfvHz5vGPSV/view?usp=drivesdk" target="_blank" class="btn btn-primary py-3 px-4 me-5">Download CV</a>
                        
                        
                    </div>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid" src="WhatsApp Image 2023-07-30 at 16.15.31.jpeg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="container-xxl py-6 pb-5" id="about">
        <div class="container">
           
            <div class="row g-4">
                <div class="col-12 ">
                    
                        
                        <div class="team-text bg-white  p-4">
                            <div>
                               
                                <span>Enthusiastic and dedicated web developer with a passion for creating exceptional online experiences. I aim to be associated with a progressive organization that values innovation and encourages continuous learning. My skillset encompasses both frontend and backend development, providing a versatile foundation for tackling diverse web development projects.</span>
                            </div>
                           
                        </div>
                  
                </div>
               
                
            </div>
        </div>
    </div>
 
    <div class="container-xxl py-6 pb-5" id="skill">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-5 mb-5">Skills & Experience</h1>
                    <p class="mb-4">My skillset spans both frontend and backend development, providing a versatile foundation for web development projects</p>
                    <h3 class="mb-4">My Skills</h3>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">HTML</h6>
                                    <h6 class="font-weight-bold">95%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">CSS</h6>
                                    <h6 class="font-weight-bold">85%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">PHP</h6>
                                    <h6 class="font-weight-bold">50%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                              <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">React js</h6>
                                    <h6 class="font-weight-bold">80%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">Javascript</h6>
                                    <h6 class="font-weight-bold">80%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">Angular JS</h6>
                                    <h6 class="font-weight-bold">50%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-dark" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">Postgresql</h6>
                                    <h6 class="font-weight-bold">70%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                              <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="font-weight-bold">Node js</h6>
                                    <h6 class="font-weight-bold">80%</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <ul class="nav nav-pills rounded border border-2 border-primary mb-5">
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5 active" data-bs-toggle="pill" href="#tab-1">Experience</button>
                        </li>
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5" data-bs-toggle="pill" href="#tab-2">Education</button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row gy-5 gx-4">
                                <div class="col-sm-6">
                                    <h5>UI Developer</h5>
                                    <hr class="text-primary my-2">
                                  
                                </div>
                                <div class="col-sm-6">
                                    <h5>Backend Developer</h5>
                                    <hr class="text-primary my-2">
                                  
                                </div>
                                <div class="col-sm-6">
                                    <h5>Frontend Developer</h5>
                                    <hr class="text-primary my-2">
                                   
                                </div>
                                <div class="col-sm-6">
                                    <h5>React Developer</h5>
                                    <hr class="text-primary my-2">
                                 
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row gy-5 gx-4">
                                <div class="col-sm-6">
                                    <h5>B.tech</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2015 - 2019</p>
                                    <h6 class="mb-0">Cmr engineering college</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Intermediate</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2013 - 2015</p>
                                    <h6 class="mb-0">Gandhi memorial junior college</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>SSC</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2012 - 2013</p>
                                    <h6 class="mb-0">Gayatri high school</h6>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl pb-5" id="contact">
        <div class="container py-5">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">Let's Work Together</h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" href="">Say Hello</a>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                   
                    <h3 class="fw-bold">Hyderabad</h3>
                    <hr class="w-100">
                    <p class="mb-2">Call me:</p>
                    <h3 class="fw-bold">+918688859874</h3>
                    <hr class="w-100">
                    <p class="mb-2">Mail me:</p>
                    <h3 class="fw-bold">prasan.shivarapu@gmail.com</h3>
                    <hr class="w-100">
                    <p class="mb-2">Follow me:</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-primary me-2" href="https://www.linkedin.com/in/prasanshivarapu" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                  
                    <!-- <form name="myForm" 
                 
            ng-submit="myForm.$valid && submitForm()"
            novalidate
                    >
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" required class="form-control" id="name1" ng-pattern="/^[a-zA-Z]+$/" placeholder="Your Name" name="name1" ng-model="formData.name1">
                                    <label for="name">Your Name</label>
                                </div>
                                <div ng-show="myForm.name1.$dirty && myForm.name1.$error.required" class="text-danger">
                                    Name is required.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" required class="form-control" id="email" placeholder="Your Email" name="email" ng-model="formData.email">
                                    <label for="email">Your Email</label>
                                </div>
                                <div ng-show="myForm.email.$dirty && myForm.email.$error.required" class="text-danger">
                                    Email is required.
                                </div>
                                <div ng-show="myForm.email.$dirty && myForm.email.$error.email" class="text-danger">
                                    Please enter a valid email address.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" required ng-pattern="/^[a-zA-Z]+$/" class="form-control" id="subject" name=" subject" placeholder="Subject" ng-model="formData.subject">
                                    <label for="subject">Subject</label>
                                </div>
                                <div ng-show="myForm.subject.$dirty && myForm.subject.$error.required" class="text-danger">
                                    Subject is required.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" required ng-pattern="/^[a-zA-Z]+$/" class="form-control" id="message" name="message" placeholder="Message" ng-model="formData.message">
                                    <label for="message">Your Message</label>
                                </div>
                                <div ng-show="myForm.message.$dirty && myForm.message.$error.required" class="text-danger">
                                    Message is required.
                                </div>
                            </div>
                          
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                            </div>
                            <div class="message-container" ng-show="message">
    <p ng-class="{'success-message': message.type === 'success', 'error-message': message.type === 'error'}">{{ message.text }}</p>
  </div>
                        </div>
                    </form> -->
                    <form name="myForm" 
                 
                 ng-submit="myForm.$valid && submitForm()"
                 novalidate
                         >
                             <div class="row g-3">
                                 <div class="col-md-6">
                                     <div class="form-floating">
                                         <input type="text" required class="form-control" id="name1" ng-pattern="/^[a-zA-Z ]+$/"  placeholder="Your Name" name="name1" ng-model="formData.name1">
                                         <label for="name">Your Name</label>
                                     </div>
                                     <!-- <div ng-show="myForm.name1.$dirty && myForm.name1.$error.required" class="text-danger">
                                         Name is required.
                                     </div> -->
                                     <div ng-show="myForm.name1.$dirty && myForm.name1.$error.pattern" class="text-danger">
                                        Please enter a valid name containing only alphabets and spaces.
                                    </div>
                                    <span
                                        style="color: red"
                                        ng-show="myForm.$submitted && myForm.name1.$error.required"
                                    >
                                    Name is required.
                                    </span>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-floating">
                                         <input type="email" ng-change="convertToLowerCase()" required class="form-control" id="email" placeholder="Your Email" name="email" ng-model="formData.email">
                                         <label for="email">Your Email</label>
                                     </div>
                                        <span
                                        style="color: red"
                                        ng-show="myForm.$submitted && myForm.email.$error.required"
                                    >
                                    Email is required.
                                    </span>
                                     <!-- <div ng-show="myForm.email.$dirty && myForm.email.$error.required" class="text-danger">
                                         Email is required.
                                     </div> -->
                                     <div ng-show="myForm.email.$dirty && myForm.email.$error.email" class="text-danger">
                                         Please enter a valid email address.
                                     </div>
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-floating">
                                         <input type="text" required  class="form-control" ng-minlength="5" ng-maxlength="100" id="subject" name="subject" placeholder="Subject" ng-model="formData.subject">
                                         <label for="subject">Subject</label>
                                     </div>
                                     <span
                                        style="color: red"
                                        ng-show="myForm.$submitted && myForm.subject.$error.required"
                                    >
                                    Subject is required.
                                    </span>
                                     <span
                                        style="color: red"
                                        ng-show="myForm.$submitted && myForm.subject.$error.minlength"
                                    >
                                    Minimum 5 characters is required.
                                    </span>
                                     <span
                                        style="color: red"
                                        ng-show="myForm.$submitted && myForm.subject.$error.maxlength"
                                    >
                                    Not more than 100 characters.
                                    </span>
                                     <!-- <div ng-show="myForm.subject.$dirty && myForm.subject.$error.required" class="text-danger">
                                         Subject is required.
                                     </div> -->
                                 </div>
                                 <div class="col-md-6">
                                     <div class="form-floating">
                                         <input type="text" required class="form-control" ng-minlength="5" ng-maxlength='100' id="message" name="message" placeholder="Message" ng-model="formData.message">
                                         <label for="message">Your Message</label>
                                     </div>
                                       <span
                                        style="color: red"
                                        ng-show="myForm.$submitted && myForm.message.$error.maxlength"
                                    >
                                    Not more than 100 characters.
                                    </span>
                                     <span
                                        style="color: red"
                                        ng-show="myForm.$submitted && myForm.message.$error.minlength"
                                    >
                                    Minimum 5 characters is required.
                                    </span>
                                     <span
                                        style="color: red"
                                        ng-show="myForm.$submitted && myForm.message.$error.required"
                                    >
                                    Message is required.
                                    </span>
                                     <!-- <div ng-show="myForm.message.$dirty && myForm.message.$error.required" class="text-danger">
                                         Message is required.
                                     </div> -->
                                 </div>
                               
                                 <div class="col-12">
                                     <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                                 </div>
                                 <div class="message-container" ng-show="message">
         <p ng-class="{'success-message': message.type === 'success', 'error-message': message.type === 'error'}">{{ message.text }}</p>
       </div>
                             </div>
                         </form> 
                </div>
            </div>
        </div>
    </div>
 

    <div class="container-fluid bg-dark text-white py-4">
            <div class="container m-auto">
                <div class="row ">
                    <div class="col-md-6  m-auto">
                        &copy; <a class="border-bottom text-secondary m-auto" href="#">Prasanna kumar</a>, All Rights Reserved.
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <script>
    var app = angular.module('myApp', []);

    app.controller('myCtrl', function ($scope, $http,$timeout) {
      $scope.formData = {};
      $scope.message = null;
      $scope.convertToLowerCase = function () {
        if ($scope.formData.email) {
            $scope.formData.email = $scope.formData.email.toLowerCase();
        }
    };
      $scope.submitForm = function () {
        $http.post('back.php', $scope.formData)
          .then(function (response) {
            // Handle success
            if (response.data.status === 'success') {
              console.log('Data sent successfully', response.data.message);
              $scope.message = { type: 'success', text: response.data.message };
              $timeout(function () {
              $scope.message = "";
            }, 3000);
            $scope.formData = {};
            $scope.myForm.$setPristine();
            $scope.myForm.$setUntouched();
            } else {
              console.error('Error sending data', response.data.message);
              $scope.message = { type: 'error', text: response.data.message };
              $timeout(function () {
              $scope.message = "";
            }, 3000);
            $scope.formData = {};
            $scope.myForm.$setPristine();
            $scope.myForm.$setUntouched();
            }
          })
          .catch(function (error) {
            console.error('Error sending data', error);
            $scope.message = { type: 'error', text: 'Error sending data. Please try again later.' };
          });
      };
    });
  </script>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/typed/typed.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>