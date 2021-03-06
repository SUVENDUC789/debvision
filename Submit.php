<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Submission - Debvision International</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
        rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="index.html">Welcome to Deb vision International</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('home-bg.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <?php
                        if(!isset($_POST['submityes'])){
                            header("location: index.html");
                        }

                    if($_SERVER['REQUEST_METHOD']=="POST")
                    {
                        // name,clgroll,number
                        $name1=$_POST["name"];
                        $email1=$_POST["email"];
                        $phone1=$_POST["phone"];
                        $msg1=$_POST["msg"];
                        

                        echo "<h1>Submission Successful $name1!
                        </h1>";
                

                        $sql_CreateDatabase="CREATE DATABASE `debvision`";

                        $sql_CreateTable="CREATE TABLE `debvision`.`customer` ( `sl_no` INT NOT NULL AUTO_INCREMENT ,  `name` VARCHAR(50) NOT NULL ,  `email` VARCHAR(50) NOT NULL ,  `phone` VARCHAR(50) NOT NULL ,  `msg` VARCHAR(500000) NOT NULL ,  `date_time` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ,    PRIMARY KEY  (`sl_no`)) ENGINE = InnoDB";

                        $var="INSERT INTO `customer` (`name`, `email`, `phone`, `msg`) VALUES ( '$name1', '$email1', '$phone1', '$msg1')";

                        $sql=$var;

                        $servername="localhost";
                        $username="root";
                        $password="";
                        $database="debvision";
                        $table="customer";

                        $conn=mysqli_connect($servername,$username,$password,$database);
                        $result=mysqli_query($conn,$sql_CreateDatabase);
                        $result1=mysqli_query($conn,$sql_CreateTable);
                        $res=mysqli_query($conn,$sql);

                        if($conn)
                        {
                            if($res)
                            { 
                                // echo '<span class="subheading">Stay home Stay safe Stay secure</span>';
                               
                            }
                        }
                        else
                        {
                            echo "<h1>Sorry ! S-412</h1>";
                        }
                    }

                    ?>
                        <!-- <h1>Security Surveillance</h1> -->
                        <!-- <span class="subheading">Stay home Stay safe Stay secure</span> -->
                    </div>
                </div>
                <!-- <div class="container"> -->
                <center><span style='color:white;' class="text-type" data-wait="3000"
                        data-words='["Welcome to Deb vision International.","Have questions? I have answers."]'></span>
                </center>
                <!-- </div> -->
            </div>
        </div>
    </header>
    <!-- Main Content-->

    <!-- Footer-->
    <footer class="border-top">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <ul class="list-inline text-center">

                        <a href="https://www.facebook.com/debashis.chowdhurybapi" target="_blank"
                            rel="noopener noreferrer"><i class="bi bi-facebook"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="40" height="40" fill="currentColor" class="bi bi-facebook"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                </svg></i></a>

                    </ul>
                    <div class="small text-center text-muted fst-italic">Copyright &copy; Your Website 2022</div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>
<script>
const TypeWriter = function(txtElement, words, wait = 3000) {
    this.txtElement = txtElement;
    this.words = words;
    this.txt = '';
    this.wordIndex = 0;
    this.wait = parseInt(wait, 10);
    this.type();
    this.isDeleting = false;

}

// Type Method 
TypeWriter.prototype.type = function() {

    const current = this.wordIndex % this.words.length;
    const fullTxt = this.words[current];
    // console.log(fullTxt);
    if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
    } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);

    }
    this.txtElement.innerHTML = `<span class="text-type">${this.txt}|</span>`;

    let typeSpeed = 300;

    if (this.isDeleting) {
        typeSpeed /= 2;
    }

    if (!this.isDeleting && this.txt === fullTxt) {
        typeSpeed = this.wait;
        this.isDeleting = true;
    } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.wordIndex++;
        typeSpeed = 500;
    }
    setTimeout(() => this.type(), typeSpeed);
}

// Init App 
document.addEventListener('DOMContentLoaded', init);

// Init App 
function init() {
    const txtElement = document.querySelector('.text-type');
    const words = JSON.parse(txtElement.getAttribute('data-words'));
    const wait = txtElement.getAttribute('data-wait');
    // Init TypeWriter
    new TypeWriter(txtElement, words, wait);

}
</script>

</html>