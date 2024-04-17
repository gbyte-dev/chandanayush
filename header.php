<head>
    <meta charset="utf-8">
	<!--favicon-->
	<link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
	<link rel="manifest" href="img/favicon/site.webmanifest">
	<link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<!--end favicon-->
    <title><?php if($data==4){
		echo "Doctors List - Chandan Ayush Hospital";
	}
	else if($data==1){ 
	echo "About Us - Chandan Ayush Hospital";
	}
	else if($data==3){
	echo "Contact Us - Chandan Ayush Hospital";
	}
	else if($data==6){ 
	echo "Book An Appointment - Chandan Ayush Hospital";
	}
	else if($data==2){ 
	echo "Ayurved - Chandan Ayush Hospital";
	}
	else if($data==7){
	echo "Homeopath - Chandan Ayush Hospital";
	}
	else if($data==8){
	echo "Anorecta - Chandan Ayush Hospital";
	}
	else if($data==9){
	echo "Kshar Sutra's Surgery - Chandan Ayush Hospital";
	}
	else if($data==10){
	echo "Physiotherapy - Chandan Ayush Hospital";
	}
	else if($data==11){
	echo "Acupuncture - Chandan Ayush Hospital";
	}
	else if($data==0){
	echo "Chandan Ayush Hospital";
	}
	else if($data==12){
	echo "Dental Surgery - Chandan Ayush Hospital ";
	}
	else if($data==13){
	echo "Gallery - Chandan Ayush Hospital ";
	}
	else if($data==14){
	echo "Services - Chandan Ayush Hospital ";
	}
	else if($data==15){
	echo "Events - Chandan Ayush Hospital ";
	}
	else if($data==16){
	echo "Orthopaedic Surgery - Chandan Ayush Hospital ";
	}?></title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Best specialisation Hospital,Hospital in Lucknow,Hospital in India,Best Hospital in Lucknow,Best Hospital in India,India,Lucknow,Best Ayurved Hospital in Lucknow,Best Anorectal Hospital in Lucknow,Best Kshar Sutra's Surgery Hospital in Lucknow,Best Homeopath Hospital in Lucknow,Best Dental Sugery Hospital in Lucknow,Best Acupuncture Hospital in Lucknow,Best Physiotherapy Hospital in Lucknow,Best Ayurved Hospital in India,Best Anorectal Hospital in India,Best Kshar Sutra's Surgery Hospital in Lucknow,Best Homeopath Hospital in India,Best Dental Sugery Hospital in India,Best Acupuncture Hospital in India,Best Physiotherapy Hospital in India,,healthcare,united healthcare providers,home healthcare,health and wellness,universal healthcare,healthcare management,health and fitness,health services,healthcare provider,healthcare consultant,healthcare providers,primary healthcare,healthcare solutions,affordable healthcare,healthcare companies,healthcare services,healthcare company,health and safety,health products,healthcare clinic,united healthcare urgent care,healthcare professionals,healthcare consulting firms,healthcare agency,healthcare facilities,walk in health clinic,healthcare program,united healthcare medicaid providers,united healthcare provider,united healthcare products,holistic healthcare,healthcare products,healthcare it services,healthcare technology companies,healthcare agencies,healthcare supplies,home health products,healthcare tech companies,medical healthcare,healthcare equipment,home care equipment,healthcare it solutions,professional home care services,healthcare diagnostics,private healthcare companies,health fitness specialist,health and fitness products,health and fitness companies,health service providers,digital healthcare solutions" name="keywords">
    <!--<meta content="Free HTML Templates" name="description">-->
	<meta content="Chandan Ayush Hospital - Best Care for all kind of Problems" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon"> 

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 
	
	
	   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.css"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/pannellum@2.5.6/build/pannellum.js"></script>
	
	
 <script type="text/javascript" src="http://cdn.rawgit.com/matdumsa/jQuery.threesixty/master/jquery.threesixty.js"></script>
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
	<style>
	
	</style>
	
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid ps-5 pe-0 d-none d-lg-block topbar" style="background-color:#ffebeb;">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small class="py-2"><i class="far fa-clock text-primary me-2"></i>Opening Hours: Mon - Sun :Open 24 hours </small>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-danger text-white top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-envelope-open me-2"></i>info@chandanayushhospital.com</p>
                    </div>
                    <div class="py-2">
                        <p class="m-0"><i class="fa fa-phone-alt me-2"></i>0522-3595710 | 08318028902</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0" style="">
		<div class="button"><button class="navbar-toggler  h-100 " type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" >
            <span class="navbar-toggler-icon"></span>
        </button>
		</div>
        <a href="https://chandanayushhospital.com" class="navbar-brand nv">
            <img src="img/logo1.png" class="logo" >
           <!-- <h1 class="m-0 text-danger"><i class="fa fa-plus me-2"></i>Chandan Ayush Hospital</h1>-->
        </a>
        
        <div class="collapse navbar-collapse"  id="navbarCollapse">
            <div class="navbar-nav ms-auto py-5">
                <a href="https://chandanayushhospital.com" class="nav-item nav-link <?php  if($data==0){echo "active"; }?>">Home</a>
                <a href="about.php" class="nav-item nav-link <?php  if($data==1){echo "active"; }?>">About</a>
               
				
                
                    <a href="doctors.php" class="nav-item nav-link <?php  if($data==4){echo "active"; }?>">Our Doctor</a>
                    
                <a href="contact.php" class="nav-item nav-link <?php  if($data==3){echo "active"; }?>">Contact</a>
                <a href="HospitalGallery.php" class="nav-item nav-link <?php  if($data==13){echo "active"; }?>">Gallery</a>
				<!-- <a href="service.php" class="nav-item nav-link">Service</a>-->
				<div class="nav-item dropdown  ">
                    <span  class="nav-link dropdown-toggle <?php  if($data==14||$data==2||$data==7||$data==8||$data==9||$data==10||$data==11||$data==12){echo "active"; }?> "  onclick="f1();" data-bs-toggle="dropdown"  style="cursor:pointer">Services </span>
                    <div class="dropdown-menu m-0">
                      
                    <a href="ayurved.php" class="dropdown-item <?php  if($data==2){echo "active"; }?>">Ayurved</a> 
                    <a href="homeopath.php" class="dropdown-item <?php  if($data==7){echo "active"; }?>">Homeopath</a>
                    <a href="anorectal.php" class="dropdown-item <?php  if($data==8){echo "active"; }?>">Anorectal</a>
                    <a href="kshar.php" class="dropdown-item <?php  if($data==9){echo "active"; }?>">Kshar Sutra's Surgery</a>
                    <a href="physiotherapy.php" class="dropdown-item <?php  if($data==10){echo "active"; }?>">Physiotherapy</a>
                    <a href="acupuncture.php" class="dropdown-item <?php  if($data==11){echo "active"; }?>">Acupuncture</a>
                    <a href="dental.php" class="dropdown-item <?php  if($data==12){echo "active"; }?>">Dental Surgery</a>
                    <a href="orthopaedic.php" class="dropdown-item <?php  if($data==16){echo "active"; }?>">Othopaedic surgery</a>
                    <a href="dental.php" class="dropdown-item <?php  if($data==12){echo "active"; }?>">General surgery </a>
                    </div> 
                </div>
				<a href="Events.php" class="nav-item nav-link <?php  if($data==15){echo "active"; }?>">Events</a>
            </div>
            
            <a href="appointment.php" class="btn btn-danger py-2 px-4 ms-3">Appointment</a>
        </div>
    </nav>
    <!-- Navbar End -->
<script>
function f1(){
	window.location.href="service.php";
}
</script>

    </body>
  
  
  
  