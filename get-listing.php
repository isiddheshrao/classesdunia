<?php

// get listing works by receving an argument and providing classes for the same,
// classes are retrieved from db based on subject, stream, location.

// pages which might use it:

// listing.php for sure
// later on we can pages like listing-science, listing-commerce etc.


require 'connect.php';
require 'helper.php';

if (isset($_GET['location']) ||
    isset($_GET['stream']) ||
    isset($_GET['subject']) ||
    !empty($_GET['location']) ||
    !empty($_GET['stream']) ||
    !empty($_GET['subject'])) {

      if (isset($_GET['location']) && !empty($_GET['location'])) {
        $location = cleanStringCap($_GET['location']);
      } else {
        $location = "";
      }

      if (isset($_GET['stream']) && !empty($_GET['stream'])) {
        $stream = cleanStringCap($_GET['stream']);
      } else {
        $stream = "";
      }

      if (isset($_GET['subject']) && !empty($_GET['subject'])) {
        $subject = cleanStringCap($_GET['subject']);
      } else {
        $subject = "";
      }

    echo '$location: '.$location.'<br/>';
    echo '$stream: '.$stream.'<br/>';
    echo '$subject: '.$subject.'<br/>';

    //var_dump($results);

  try {

	    $conn = new PDO("mysql:host=".DB_SERVER.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $stmt = $conn->prepare('SELECT DISTINCT a.dclass,a.location,a.logourl,a.pageurl FROM classes a, subject b, map_class_subject c WHERE a.classid = c.class_id AND b.subjectid = c.subject_id AND a.location LIKE :location AND b.fstream LIKE :stream AND b.sname LIKE :subject');

      $stmt->execute(array('location' => '%'.$location.'%', 'stream' => '%'.$stream.'%', 'subject' => '%'.$subject.'%'));

    //var_dump($stmt);

    if($stmt->rowCount()>0)
    {

      echo '<div class="row listing-page-result-row margin-bottom-25">
        <div class="col-md-4 col-sm-4 text-left">
          <p>'.$stmt->rowCount().' Results</p>
        </div>
        <div class="col-md-4 col-sm-4  text-center">
          <p class="view-on-map">
            <!-- Marker icon by Icons8 -->
            <img class="icon icons8-Marker" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAEoklEQVRoQ91Z4XEWNxDVqgGggjgVYCrAVICpIKYCnAIs7ckFYCoIVBC7gpgKMBXgVIDTwG3mfbNiNJc7aXXffZ4M+mN/c7qTnnb37dsVuZ9k0NY4QgiviejUOXfknHvqnDvWNe6ccw/OuXsRuU4p3Wy59iZAmPlIRKJzDgCwecsAqGsi+p2Z8f9eY28gIYRIROcZgIh89d5/dM7tLMDM+OuYGZbZWWgcxzMieq47fxCRq5TSsA+S1UCY+amI/JVdR0Q+ee+Zme8tG4IVx3FkIvotux4RvVprnVVAcLoKAmBggXNmvrUAmM5h5pNxHK/UQg8KZmfFntENRC3xDW4iIp+996drTzFvFN8cxxHx8hLuSES/9n6zC0jpTgCRUjrpObXW3BDCrYK5G4bhRWt++bwLSAgBPh3VnU56T621MbUMwDwXkSGlxK138nMzEKXYL3ApInqR2ci6kHUeYkbjr8vFzEBCCB/BMGCnlNKZdWNr5q1ZywwkxvhdrYFArFKsusg7zfA/Mjsyuvf+Q8sl1foglIdhGJ5ZDsMEhJlPReRPxEZKKW9s9vvMfCYi7ysZHi7zlpmvaxsMIdwhVojoTWsuvmMCkk2tcuJqaQMK4g88F5Eb7/1Vzi+aL86J6PVu4cYGC2L5kFKCcqgOK5AdLWqymk18ZX7RE4dM+c8owFaDOQe9leZNQGKMYKvjGlsVJ3iTUoJ4XBw5X9QoVtUD1jXlFCsQwa6GYVicX4CFXqrKlYJiq5uMMTbX7cojlg9a5pQmssy3zPnfA9GY+y4i/6SUmjWOybWyT9eCvaBLs2vV6PwgwV4AWeT0HOyo+oZheFML9hgj6hhIkUU9ldkNNN4ij548ksVibWFI8XsielKjX60oGS7jvT9ayvIFC5rEo8m1isxele55nlrjGgXT5eXlZ/y+uLh4iQoSljAmxJy7tsvsOfBaFIznADOOIwTmkzn3Ukuc1WRHuR4RPWtpM7NrYWKP9lHRCFlxmpsMCGzEj8qWatfE6gHlQZlcS4Ggrn73SDIeZS/6Y2gVLWq7VUDWSOuW0FvQYugFoGSAsGyWDF0JMU8u3AsyfFYUrtl8+U5Bu109AbNraSCj1oBMvx2G4dW+m557P8aIguqoRuFz7/UCKXPF5nV7kc3/Timhd2weXUAOHfSWjL+ErBtIEfRdwdg62sIa1Yy/GRC1yuYdlX2s0ZUQJ8yCawQEJazSVLuHtsZqIGqVnZDcgsEyU/V2F1clxOmpqgzJatck7BYS4DnaRyLSzVSbAJnkFQACHXfdPE06L6sPYy/XKrL9Tm6vcYuiNdqVxfdOiAuugUsftG0Q+OYkOaHb41YbtkUY3Xlk7oNFmWvqQalLATzYz1QBPgoQDXz0an+xbCyEkEuCZi+5BSA/38QiGvgmFyuac12u2AK0GZBJbpllsQlLmYumFohNWGu6SK5Z5tpChQzZm6Wm625qEXUx3J8jXtAW+nHqRXtnlShsWWVzIApmdzGUtRj+6r3gJtrsIHlk6aQKSs7ZHrX4JlT7qEA0+HfdELWIqfXZcqGl5wdxrbxYvjfHb+/95vfyJaiDAll7umve+xc6iKNgzDxqMAAAAABJRU5ErkJggg==" alt="map">
            <a class="md-trigger mobilelink" data-modal="modal-4">View on map</a>
          </p>
        </div>
        <div class="col-md-4 col-sm-4  text-right">
          <p>Showing all Class Listings <a href="#" class="achor-color">Reset</a></p>
        </div>
      </div>
      <div class="mobile-map-space">

          <!-- Popup Open -->

          <div class="md-modal md-effect-3 mobilemap" id="modal-4">
            <div class="md-content mapbilemap-content">
              <div id="map" class="listingmap"></div>
              <a class="md-close mapbilemap-close"><i class="fa fa-close"></i></a>
            </div>
          </div>
          <!-- Popup Close -->
          <div class="md-overlay md-overlayi"></div> <!-- Overlay for Popup -->
      </div>';



      while($row = $stmt->fetch())
      {

            echo	'<div class="col-md-3 col-sm-6 lp-grid-box-contianer lp-grid-box-contianer1" data-title="The Dorchester grill" data-reviews="4" data-number="+007-123-4567-89" data-email="jhonruss@example.com" data-website="www.example.com" data-price="$200" data-pricetext="Text about your price" data-description="Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa quae ab illo inventore veritatis et quasi archeum" data-userimage="images/user-thumb-94x94.png" data-username="Jhon Russel" data-userlisting="14" data-fb="www.facebook.com" data-gplus="www.plus.google.com" data-linkedin="www.linkedin.com" data-instagram="www.instagram.com" data-twitter="www.twitter.com" data-lattitue="40.6700" data-longitute="-73.9400"  data-id="11"  data-posturl="post-detail.html" data-authorurl="author.html">
                <div class="lp-grid-box lp-border lp-border-radius-8">
                  <div class="lp-grid-box-thumb-container" >
                    <div class="lp-grid-box-thumb">
                      <img src="'.$row['logourl'].'" alt="grid-1" />
                    </div><!-- ../grid-box-thumb -->
                    <div class="lp-grid-box-quick">
                      <ul class="lp-post-quick-links">
                        <li>
                          <a class="icon-quick-eye md-trigger" data-modal="modal-2"><i class="fa fa-eye"></i></a>
                        </li>
                      </ul>
                    </div><!-- ../grid-box-quick-->
                  </div>
                  <div class="lp-grid-box-description ">
                    <h4 class="lp-h4">
                      <a href="'.$row['pageurl'].'">
                      '.$row['cname'].'
                      </a>
                    </h4>
                    <p>
                      <i class="fa fa-map-marker"></i>
                      <span><b>'.$row['location'].'</b></span>
                    </p>
                  </div><!-- ../grid-box-description-->
                  <div class="lp-grid-box-bottom">
                    <!--<div class="pull-left">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star-o"></i>
                      <span class="rating-ratio">4.0</span>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="lp-add-to-fav simptip-position-top simptip-movable" data-tooltip="Add to favorites">
                      <i></i>
                      </a>
                    </div>
                    <div class="clearfix"></div>-->
                  </div><!-- ../grid-box-bottom-->
                </div><!-- ../grid-box -->
              </div>';


      }

        // Toss back results as json encoded array.
        //echo json_encode($return_arr);
      }

	} catch(PDOException $e) {
	    //echo 'ERROR: ' . $e->getMessage();
        echo "Some Error occured";
	}

}


?>
