<!DOCTYPE html>
<html lang="en">

<head>
  <title>Diagnosis Website</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body>
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
            <h1><span>v</span>isionary <span>d</span>iagnostics</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="#hero" data-after="Home">Home</a></li>
            <li><a href="#services" data-after="Service">Why us</a></li>
            <li><a href="#projects" data-after="Projects">Services</a></li>
            <li><a href="#about" data-after="About">Queries</a></li>
            <button type="submit" class="AdminButton"><li><a href="login.php" data-after="Contact">Admin Login</a></li> </button>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section id="hero">
    <div class="carouselBack">

      <div id="demo" class="carousel slide" data-ride="carousel">

        <div class="container">
          <div class="row">
            <div class="col-8">
              <div class="carousel-inner">
                <ul class="carousel-indicators">
                  <li data-target="#demo" data-slide-to="0" class="active"></li>
                  <li data-target="#demo" data-slide-to="1"></li>
                  <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
                </a>
                <div class="carousel-item active">
                  <img src="img/2nd qtr.png" alt="BLOOD TEST" height="100" width="100">
                  <div class="carousel-caption">
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="img/diabetes.jpg" alt="CT SCAN" height="100" width="100">
                  <div class="carousel-caption">
                    <h3>DIABETES</h3>

                  </div>
                </div>
                <div class="carousel-item">
                  <img src="img/ultrasound.jpg" alt="ULTRASOUND" height="100" width="100">
                  <div class="carousel-caption">
                    <h3>ULTRASOUND</h3>
                   
                  </div>
                </div>
              </div>
            </div>
            <div class="col-4" style="padding: 1%;">
              <!-- <div class="form"> -->
                <form action="connect.php" method="request">
                  <div class="brand">
                    <h3><span>B</span>ook <span>N</span>ow</h3>
                  </div>
                  <div class="inputs">
                    <div class="form-group">
                      <input type="Name" id="name" class="form-control" placeholder="Enter Name" name="customerName" required>
                    </div>
                    <div class="form-group">
                      <input type="tel" id="phone" class="form-control" placeholder="Enter phone number" name="customerPhone">
                    </div>
                    <div>
                      <select class="bookDropdown" name="testName" id="tests">
                        <option>Choose Your Test</option>
                        <option value="BloodTest" name="">Blood Test</option>
                        <option value="MRI" name="">MRI (Magnetic Resonance Imaging)</option>
                        <option value="CTscan" name="">CT Scan</option>
                        <option value="Xray" name="">X-Ray (full Body)</option>
                        <option value="UltraSound" name="">UltraSound</option>
                        <option value="Electricardiography" name="">Electricardiography (ECG)</option>
                        <option value="Endoscopy" name="">Endoscopy</option>
                        <option value="Urine" name="">Urine Test</option>
                        <option value="Thyroid" name="">Thyroid Test</option>
                        <option value="Diabetes" name="">Diabetes Test</option>
                        <option value="Other" name="">Other Test</option>
                      </select>

                      <h4 id="dateHead">Booking Date : <input name="customerDate" type="date" id="date"></h4> 
                     
                      
                      <small id="NameHelp" class="form-text text-muted">We'll never share your details with anyone
                        else</small>

                    </div>
                  <div class="submit">
                    <button  name="submit" onclick="display_alert()" value="Display alert box" class="bookBtn" 
                    style="background-color: crimson;
	font-family: 'Montserrat', sans-serif;
	font-size: 17px;
  padding: 2%;
color: white;
	border: none;
	border-radius: 5px;
	padding: 3%;" 
                    >Submit</button>
                  </div> 
                  <div class="message">
                    <div class="success" id="success" style="
	display: none;
	color: crimson;
	font-weight: bolder;
	margin: 5%;
	font-size: 15px;">Booking Successfull ! </div>
                </div>
              </form>
            </div>

            </div>

          </div>
        </div>
      </div>

  </section>

  
  <section id="services">
                      <div class="services container">
                        <div class="service-top">
                          <h1 class="section-title">Why <span> choose</span> us</h1> 
                        </div>

                        <div class="service-bottom">
                          <div class="service-item">
                            <div class="icon"><img src="img/delivery.png" /></div>
                            <h2>FREE SAMPLE collection</h2>
                          </div>
                          <div class="service-item">
                            <div class="icon"><img src="img/CERIFICATION.webp" /></div>
                            <h2>NABL ACCREDITED LABS</h2>
                          </div>
                          <div class="service-item">
                            <div class="icon"><img src="img/ACCURATE.webp" /></div>
                            <h2>ACCURATE REPORTS</h2>
                          </div>
                          <div class="service-item">
                            <div class="icon"><img src="img/PRICE.webp" /></div>
                            <h2>BEST PRICE GURANTED</h2>
                          </div>
                        </div>

                      </div>
  </section>

  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title"><span>our</span> services</h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h1>CT SCAN</h1>

            <p>We provide multiple detectors computed tomography that helps pinpoint the location of abnormalities
              formed by internal injuries from car accidents or other types of trauma. A CT scan can be used to visualize nearly
              all parts of the body and is used to diagnose disease or injury as well as to plan medical, surgical or
              radiation treatment.
            <p>
          </div>
          <div class="project-img">
            <img src="./img/ctscan.avif" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>3T MRI & 2D ECHO</h1>

            <p> We provide Echocardiography, a test that can produce live images of the heart with the help of sound
              waves AS WELL AS magnetic resonance imaging or MRI, a diagnostic imaging technique that obtains minute
              images of your body's internal organs and tissues.</p>
          </div>
          <div class="project-img">
            <img src="./img/cardio.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>CLINICAL PATHOLOGY</h1>

            <p>we provide basic Laboratory service that is often ignored. However, we give this department
              as much importance as any other. We have dedicated consultants for the department and just like other
              departments, Clinical Pathology is completely automated as well.
              Our Urine analyzers capture and analyze approximately 500 images per urine. Our sperm analyzers can report
              sperm vitality and velocity and also perform sperm DNA fragmentation analysis. </p>
          </div>
          <div class="project-img">
            <img src="./img/patho.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>HEMATOLOGY</h1>

            <p>
              This division of pathology deals with estimation of cell counts and study of cell morphology to diagnose
              various blood disorders ranging from simple infections to cancers. Bone marrow studies bleeding disorder
              tests and tests related to blood genetic disorders are also performed here using some advanced techniques
              like flow cytometry and HPLC etc.</p>
          </div>
          <div class="project-img">
            <img src="./img/btest.jpg" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>X RAY & MAMOGRAPHY</h1>

            <p>We provide advanced Mammography procedures to see the inside tissues of the breasts.A mammogram is an x-ray picture of the breast.
              Mammograms can be used to check for breast cancer in women who have no signs or symptoms of the disease.
              This type of mammogram is called a screening mammogram. Screening mammograms usually involve two or more
              x-ray pictures, or images, of each breast. The x-ray images often make it possible to detect tumors that
              cannot be felt. Screening mammograms can also find microcalcifications (tiny deposits of calcium) that
              sometimes indicate the presence of breast cancer. </p>
          </div>
          <div class="project-img">
            <img src="./img/mamography.jpg" alt="img">
          </div>
        </div>
      </div>
    </div>
  </section>

  <form action="connect2.php" method="request" id="about">
    <div class="aboutUs-container">
      <div class="about-heading">
        <div class="brand">
          <h1 class="section-title">Get in <span>Touch </span>with <span>Us</span></h1>
        </div>
      </div>
      <div class="about-subheading">
        <h3>Feel Free to Connect With Us For Any Queries</h3>
      </div>
    </div>
    <div class="input-container1">
      <input type="text" class="about-inputs" name="Name" id="" placeholder="Name">
      <input type="Phonenumber" class="about-inputs" name="Phonenumber" id="" placeholder="Phone Number">
    </div>
    <div class="input-container2">
      <input type="Message" class="about-inputs" name="Message" id="" placeholder="Leave Message ">
      <select name="City" id="City" class="about-inputs">
        <option value="Chandigarh">Chandigarh</option>
        <option value="Mohali">Mohali</option>
        <option value="Panchkula">Panchkula</option>
        <option value="kharar">kharar</option>
        <option value="Derabassi">Derabassi</option>
        <option value="Zirakpur">Zirakpur</option>
        <option value="Kalka">Kalka</option>
        <option value="Landran">Landran</option>
      </select>
    </div>
    <div class="input-container3">
      <button type="submit" class="about-btn">Submit</button>
    </div>
  </form>

  <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Contact <span>info</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+91 9671701499</h2>
            <h2>+91 7807294820</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>mishraumang288@gmail.com</h2>
            <h2>sifatattri1601@gmail.com</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>SCO-225,Phase-7,Mohali</h2>
            <h2>SCO-512,SECTOR 32-A,CHANDIGARH</h2>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1><span>V</span>isionary <span>D</span>iagnostic</h1>
      </div>
      <h2>OUR MOTO IS YOUR SATISFACTION</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
        </div>

      </div>
      <p> All rights reserved</p>
    </div>
  </section>
  <script src="app.js">
  </script>
</body>

</html>