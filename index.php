<?php
$full_name = "Teddy Amare";
$title = "ASE 230 - class of Fall 2022";
$header = "This is ASE 230 - class of Fall 2022";

$advisors = array(
  ['name' => 'Teddy Amare', 'job' => 'Founder &amp; CEO', 'image' => 'assets/header.jpg', 'year' => 'senior'],
  ['name' => 'Jacobs Fathu', 'job' => 'UI Designer', 'image' => 'https://bootdey.com/img/Content/avatar/avatar7.png', 'year' => 'sophomore'],
  ['name' => 'Abebe Kebede ', 'job' => 'Developer', 'image' => 'https://bootdey.com/img/Content/avatar/avatar6.png', 'year' => 'junior'],
  ['name' => 'Leroy Washer III', 'job' => 'Marketing Manager', 'image' => 'https://bootdey.com/img/Content/avatar/avatar2.png', 'year' => 'freshman']
);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- https://www.bootdey.com/snippets/view/single-advisor-profile#html -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="assets/css/index.css" />
  <title>
    <?php
    echo $title;
    ?>
  </title>
</head>

<body>
  <div class="container text-center">
    <h1>
      <?php
      echo $header;
      ?>
    </h1>
  </div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-8 col-lg-6">
        <!-- Section Heading-->
        <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="
							visibility: visible;
							animation-delay: 0.2s;
							animation-name: fadeInUp;
						">
          <h3>Our Creative <span> Team</span></h3>
          <p>
            Appland is completely creative, lightweight, clean &amp; super
            responsive app landing page.
          </p>
          <div class="line"></div>
        </div>
      </div>
    </div>
    <div class="row">

      <!-- Class Year -->

      <!-- Single Advisor-->
      <?php
      $i = 0;
      foreach ($advisors as $advisor) {
        echo '<div class="col-12 col-sm-6 col-lg-3">
				<div class="single_advisor_profile wow fadeInUp" data-wow-delay="0.2s" style="
							visibility: visible;
							animation-delay: 0.2s;
							animation-name: fadeInUp;
						">
					<!-- Team Thumb-->
					<div class="advisor_thumb">
						<a href="detail.php?id=' . $i . '"><img src="' . $advisor['image'] . '" alt="" /></a>
						<!-- Social Info-->
						<div class="social-info">
							<a href="detail.php?id=' . $i . '"><i class="fa fa-facebook"></i></a><a href="detail.php?id=' . $i . '"><i class="fa fa-twitter"></i></a><a href="detail.php?id=' . $i . '"><i class="fa fa-linkedin"></i></a>
						</div>
					</div>
          
					<!-- Team Details-->
					<div class="single_advisor_details_info">';
        if ($advisor['year'] == 'freshman') {
          echo '
              <div class="single_advisor_details_info_year">
                <a href="detail.php?id=' . $i . '"><img class="single_advisor_details_info_year_img" src="assets/star.png" alt="" /></a>
              </div>';
        } elseif ($advisor['year'] == 'sophomore') {
          echo '
              <div class="single_advisor_details_info_year">
                <a href="detail.php?id=' . $i . '"><img class="single_advisor_details_info_year_img"  src="assets/star.png" alt="" /></a>
                <a href="detail.php?id=' . $i . '"><img class="single_advisor_details_info_year_img"  src="assets/star.png" alt="" /></a>
              </div>';
        } elseif ($advisor['year'] == 'junior') {
          echo '
              <div class="single_advisor_details_info_year">
                <a href="detail.php?id=' . $i . '"><img class="single_advisor_details_info_year_img"  src="assets/star.png" alt="" /></a>
                <a href="detail.php?id=' . $i . '"><img class="single_advisor_details_info_year_img"  src="assets/star.png" alt="" /></a>
                <a href="detail.php?id=' . $i . '"><img class="single_advisor_details_info_year_img"  src="assets/star.png" alt="" /></a>
              </div>';
        } else {
          echo '
              <div class="single_advisor_details_info_year">
                <a href="detail.php?id=' . $i . '"><img class="single_advisor_details_info_year_img"  src="assets/star.png" alt="" /></a>
                <a href="detail.php?id=' . $i . '"><img class="single_advisor_details_info_year_img"  src="assets/star.png" alt="" /></a>
                <a href="detail.php?id=' . $i . '"><img class="single_advisor_details_info_year_img"  src="assets/star.png" alt="" /></a>
                <a href="detail.php?id=' . $i . '"><img class="single_advisor_details_info_year_img"  src="assets/star.png" alt="" /></a>
              </div>';
        }
        echo '
					  <h6>' . $advisor['name'] . ' </h6>
					  <p class="designation">' . $advisor['job'] . '</p>
					  </div>
				  </div>
			  </div>';
        $i++;
      }
      ?>

    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>