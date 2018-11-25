<?php


include_once('includes/header.php');
?>



<?php

if (isset($_POST['add-feedback'])) {


  $params=array( 
    'fd_name'  => isit('name', $_POST),
    'fd_contact'        =>  isit('contact', $_POST),
    'fd_msg'       =>  isit('comments', $_POST) 
  );
  $result = insertInToTable(' nss_feedback', $params, $db);
  if ($result) {
    $message [0] = 1;
    $message [1] = ' thank you for your feedback and suggestions '; 
  } else {

    $message [0] = 3;
    $message [1] = ' something went wrong try later '; 
  }


}

?>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

   <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/col1.jpg" alt="New York">
    </div>

    <div class="item">
      <img src="images/col2.jpg" alt="Chicago">
      
    </div>

    <div class="item">
      <img src="images/col3.jpg" alt="Los Angeles">
    </div>
  </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- Container (The Band Section) -->
  <div id="band" class="container text-center">
    <h1><strong>RIT NSS UNIT</strong></h1>
    <em><h3 class="text-danger"><strong>Our Motto: Not Me But You !</strong></h3></em>
    <p class="text-justify">The NSS has one unit bearing Unit No.158 involving strong contingent of 100 volunteers. NSS has started functioning in this institution from 1997 onwards. Our motto is ‘Not Me but You’. We aims at developing personality through community service. This unit is headed by the programme officer assisted by a lady staff coordinator and two volunteer secretary’s one each from boys and girls. NSS is assisted by an advisory board consisting of Principal and all HOD’s. It has an executive committee consisting of two student representative from each class.
    Our activities  are divided into : 1) Regular activities 2) Special Camp activities. The regular activities include campus cleaning and beautification, orientation programme, community visit, tree plantation, educational programme, celebration of important days, service to public like road construction, awareness classes on the importance of blood donation, blood donation programme, measures for prevention of AIDS etc.,. NSS Unit organizes special camps with the help of local bodies. The seven day special camp includes Sramdhan, cultural programme in the selected ward of nearby Grama Panchayath. NSS also undertake socioeconomic and health survey in selected villages and remedial measures are suggested based on the data collected. It conducts cultural programmes and invited lectures on environmental and educational subjects. The NSS unit which has brought a cultural change in the campus spread RIT’s glory across the state through its noble activities. 
          </p>
    <br>
    <div class="row">
      <div class="col-sm-4">
        <p class="text-center"><strong>Nanda Kishore</strong></p><br>
        <a href="#demo" data-toggle="collapse">
          <img src="images/po.png" class="img-circle person" alt="Random Name" width="255" height="255">
        </a>
        <div id="demo" class="collapse">
          <p>Programme Officer</p>
          <p>Assistant Professor </p>
          <p>Mechanical Department</p>
        </div>
      </div>
      <div class="col-sm-4">
        <p class="text-center"><strong>Lekshmi</strong></p><br>
        <a href="#demo2" data-toggle="collapse">
          <img src="images/voldy.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
        </a>
        <div id="demo2" class="collapse">
          <p>Volunteer Secretary</p>
          <p>S7 CE</p>
          <p></p>
        </div>
      </div>
      <div class="col-sm-4">
        <p class="text-center"><strong>Ragesh</strong></p><br>
        <a href="#demo3" data-toggle="collapse">
          <img src="images/vols.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
        </a>
        <div id="demo3" class="collapse">
          <p>Volunteer Secretary</p>
          <p>S7 EEE</p>
          <p></p>
        </div>
      </div>
    </div>
  </div>

  <!-- Container (TOUR Section) -->
  <div id="tour" class="bg-5">
    <div class="container">
      <h3 class="text-center">SOME OF OUR PRESTIGIOUS PROJECTS</h3>



      <!--<p class="text-center">Lorem ipsum we'll play you some music.<br> Remember to book your tickets!</p>
      <ul class="list-group">
        <li class="list-group-item">September <span class="label label-danger">Sold Out!</span></li>
        <li class="list-group-item">October <span class="label label-danger">Sold Out!</span></li> 
        <li class="list-group-item">November <span class="badge">3</span></li> 
      </ul>-->

      <div class="row text-center">
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="images/IMG-20180707-WA0028.jpg" alt="Paris" width="400" height="300" class="img-rounded">
            <!--<p><strong>Paris</strong></p>
            <p>Friday 27 November 2015</p>
            <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>-->
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="images/IMG-20180707-WA0024 (1).jpg" alt="New York" width="400" height="300" class="img-rounded">
            <!--<p><strong>New York</strong></p>
            <p>Saturday 28 November 2015</p>
            <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>-->
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="images/IMG-20170616-WA0011.jpg" alt="San Francisco" width="400" height="300" class="img-rounded">


           <!-- <p><strong>San Francisco</strong></p>
            <p>Sunday 29 November 2015</p>
            <button class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>-->
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
          </div>
          <div class="modal-body">
            <form role="form">
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $23 per person</label>
                <input type="number" class="form-control" id="psw" placeholder="How many?">
              </div>
              <div class="form-group">
                <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
                <input type="text" class="form-control" id="usrname" placeholder="Enter email">
              </div>
              <button type="submit" class="btn btn-block">Pay 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
              <span class="glyphicon glyphicon-remove"></span> Cancel
            </button>
            <p>Need <a href="#">help?</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Container (Contact Section) -->
  <div id="contact" class="container">
    <h3 class="text-center">Feedback</h3>
    <p class="text-center"><em>Need Help!</em></p>

    <div class="row">
      <div class="col-md-4">
        <p>Fan? Drop a note.</p>
        <p><span class="glyphicon glyphicon-map-marker"></span>RIT NSS UNIT </p>
        <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
        <p><span class="glyphicon glyphicon-envelope"></span>Email: ritpenta158@gmail.com</p>
      </div>
      <div class="col-md-8">
        <form class="form" method="post" action="" data-parsley-validate >


          <div class="row">
            <div class="col-sm-6 form-group">
              <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
              <input class="form-control" id="email" name="contact" placeholder="Email or mobile no" type="text" required>
            </div>
          </div>
          <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5" required></textarea>
          <br>

          <div class="row">
            <div class="col-md-12 form-group">
             <?php echo show_error($message); ?>
           </div>
         </div>  

         <div class="row">
          <div class="col-md-12 form-group">
            <button class="btn pull-right" name="add-feedback" type="submit">Send</button>
          </div>
        </div>


      </form>
    </div>
  </div>
  <br>
  <h3 class="text-center">From The Blog</h3>  
  <ul class="nav nav-tabs">
    <li class="active"><a href="#" class="fa fa-facebook"></a></li>
    <li><a href="#" class="fa fa-twitter"></a></li>
    <li><a href="#" class="fa fa-instagram"></a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h2>Mike Ross, Manager</h2>
      <p>Man, we've been on the road for some time now. Looking forward to lorem ipsum.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Chandler Bing, Guitarist</h2>
      <p>Always a pleasure people! Hope you enjoyed it as much as I did. Could I BE.. any more pleased?</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h2>Peter Griffin, Bass player</h2>
      <p>I mean, sometimes I enjoy the show, but other times I enjoy other things.</p>
    </div>
  </div>
</div>

<!-- Add Google Maps -->
<img src="map.jpg" class="img-responsive" style="width:100%">




<script>
  $(document).ready(function(){



   


  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>


<?php include_once('includes/footer.php'); ?>