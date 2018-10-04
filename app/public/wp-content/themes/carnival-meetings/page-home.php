<?php
/**
 * The template for displaying home pages
 *
 * This is the template that displays the home page by default.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CarnivalMeetings
 */

get_header();
?>


  <div id="primary" class="content-area">
		<main id="main" class="site-main">

      <!--  leading image -->
      <div class="parallax-container">
        <div class="parallax">
          <img src="<?php echo get_template_directory_uri(); ?>/images/cover-photo.png">
        </div>
      </div>

        <div class="container">
            <div class="row leadbox">
                <div class="col s5">
                <h1 class="hometitle1">Request Information for Your Next Event</h1>
                </div>

              <form class="col s6">
                <div class="input-field col s5">
                  <input id="date-picker" type="date" style="background-color: white;">
                  <a class="waves-effect waves-light btn prefix home-select" style="background-color: #3399cc; left:9rem;"><i class="material-icons">arrow_downward</i></a>
                </div>

                <div class="input-field col s5">
                    <input id="event" type="text" class="validate" style="background-color: white;">
                    <label for="event">Select Event</label>
                    <a class="waves-effect waves-light btn prefix home-select" style="background-color: #3399cc; left:12rem;"><i class="material-icons">arrow_downward</i></a>
                </div>

                <div class="col s2">
                  <button class="btn waves-effect waves-light red hoverable" type="submit" name="action" style="margin-top:1.4em; margin-left: 1em; width:10em;">Submit
                    <i class="material-icons left">arrow_forward</i>
                  </button>
              </div>
            </form>
          </div>
        <!-- </div> -->

        <!-- beginning of  tab content   -->
<div class="white-background">
  <div class="row above-ship">
    <ul class="home-tabs tabs">
      <li class="tab col m5ths active">
        <div class="home_icon">
          <a href="#corporateevents" class="waves-effect waves-light leaderimage active"><img class="responsive-img" src="<?php echo get_template_directory_uri(); ?>/images/home-icon-one.png" alt="">
            <div class="waves-effect waves-light overlay"><div class="title">Corporate Events</div></div></a>
          </div>
          <h4 class="card_titles flow-text">Corporate Events</h4>
        </li>

        <li class="tab col m5ths ">
          <div class="home_icon">
            <a href="#incentivegroups" class="waves-effect waves-light leaderimage"><img class=" responsive-img" src="<?php echo get_template_directory_uri(); ?>/images/home-icon-two.png" alt="">
              <div class="waves-effect waves-light overlay"><div class="title">Incentive Groups</div></div></a>
            </div>
            <a href="#"><h4 class="card_titles flow-text">Incentive Groups</h4></a>
          </li>

          <li class="tab col m5ths ">
            <div class="home_icon">
              <a href="#fullshipcharters" class="waves-effect waves-light leaderimage"><img class=" responsive-img" src="<?php echo get_template_directory_uri(); ?>/images/home-icon-three.png" alt="">
                <div class="waves-effect waves-light overlay"><div class="title">Full Ship Charters</div></div>
              </a>
            </div>
            <a href="#"><h4 class="card_titles flow-text">Full Ship Charters</h4></a>
          </li>

          <li class="tab col m5ths">
            <div class="home_icon">
              <a href="#customizedprograms" class="waves-effect waves-light leaderimage"><img class=" responsive-img" src="<?php echo get_template_directory_uri(); ?>/images/home-icon-four.png" alt="">
                <div class="waves-effect waves-light overlay"><div class="title">Customized Programs</div></div>
              </a>
            </div>
            <h4 class="card_titles flow-text">Customized Programs</h4>
          </li>
          <li class="tab col m5ths">
            <div class="home_icon">
              <a href="#individualincentives" class="waves-effect waves-light leaderimage"><img class=" responsive-img" src="<?php echo get_template_directory_uri(); ?>/images/home-icon-five.png" alt="">
                <div class="waves-effect waves-light overlay"><div class="title">Individual Incentives</div></div>
              </a>
            </div>
            <a href="#"><h4 class="card_titles flow-text">Individual Incentives</h4></a>
          </li>
        </ul>

        <!-- </div> -->
      </div>

</div>

          </div>



        <!-- <div class="container"> -->
          <div class="row center-align ship-row">
            <!-- used to have responsive-img tag, materializecss -->
            <img class="ship" style="max-width:75%;margin-bottom:-5em;position:relative;" src="<?php echo get_template_directory_uri(); ?>/images/ship.png" alt="">

          </div>
          <!-- </div> -->

<!-- Tab Content Changes -->
          <div id="corporateevents">
            <div class="container">
              <div class="row ship-row">
                <div class="col s7 left" style="padding: 2em;">
                  <h2 class="home-heading">The World's Most Popular Cruise Line<span class="registered">®</span>.</h2>
                  <h2 class="home-heading1">The Perfect Choice for your Next Event or Incentive Group</h2>
                  <p class="home-text">Whether you're planning a conference, meeting, regional or global incentive, Carnival is the perfect choice for your next event. We can accommodate groups ranging in size from 16 to 3,500 guests. </br></br> A program with Carnival offers far greater value, is much easier to plan and is less expensive than a land-based program. We include just about everything, a choice of accommodations, meeting space and venues with a/v equipment, all onboard meals plus 24-hour room service, onboard activities and entertainment. We also offer extensive options so that you can customize your program to meet all of your needs, as well as your budget. </br></br>Best of all, your group is bound to enjoy your program, while cruising with "The World's Most Popular Cruise Line". Our 25, soon 26 with the arrival of Carnival Horizon in 2018, spectacular ships offer a host of resort amenities, an extensive variety of activities and live entertainment including spectacular production shows, delicious dining options plus Carnival's friendly and attentive service.
                  </br></br>Our professional Corporate and Incentive Sales team looks forward to working with you to plan the perfect program.</p>
                </div>

                <div class="col s5 right most-popular-cruise" style="padding: 2em; padding-top:8em;">
                  <h3 class="right-column-home-head">Why Choose Carnival For Your Program?</h3>
                  <h5 class="right-column-home-head2">We offer you the greatest choice and selection.</h5>
                  <ul class="home-bullets1">
                    <li><i class="tiny material-icons">adjust</i> 25, soon 26 with the arrival of Carnival Horizon in 2018, fabulous floating resorts are perfect venues for your next event.</li>
                    <li><i class="tiny material-icons">adjust</i> A choice of 3-day, 4-day, 5-day, 6-day, 7-day or longer programs.</li>
                    <li><i class="tiny material-icons">adjust</i> Popular destinations including The Bahamas, Caribbean, Hawaii, Mexican Riviera, Alaska, Bermuda, Canada, New England and Europe.</li>
                    <li><i class="tiny material-icons">adjust</i> 15 convenient US departure ports</li>
                    <li><i class="tiny material-icons">adjust</i> Full-ship charters for the ultimate, customized program.</li>
                  </ul>
                  <h5 class="right-column-home-head2">We're serious about our commitment to you and your program.</h5>
                  <ul class="home-bullets1">
                    <li><i class="tiny material-icons">adjust</i> Unbeatable value – with just about everything included!</li>
                    <li><i class="tiny material-icons">adjust</i> Spacious accomodations, all onboard meals, onboard activities and entertainment, private meeting space and venues, plus a/v equipment</li>
                    <li><i class="tiny material-icons">adjust</i> Flexible, value-added amenity program</li>
                    <li><i class="tiny material-icons">adjust</i> Account executives to assist you in planning and an onboard facilitator</li>
                  </ul>
                </div>
            </div>

          </div>
          </div>

<!-- Tab Content Changes -->
<!-- <div id="incentivegroups">
  <div class="container">
    <div class="row ship-row">
      <div class="col s8 left" style="padding: 3em;">
        <h2 class="home-heading">The World's Most Popular Cruise Line.</h2>
        <h2 class="home-heading1">The Perfect Choice for your Next Event or Incentive Group</h2>
        <p class="home-text">Whether you're planning a conference, meeting, regional or global incentive, Carnival is the perfect choice for your next event. We can accommodate groups ranging in size from 16 to 3,500 guests. </br></br> A program with Carnival offers far greater value, is much easier to plan and is less expensive than a land-based program. We include just about everything, a choice of accommodations, meeting space and venues with a/v equipment, all onboard meals plus 24-hour room service, onboard activities and entertainment. We also offer extensive options so that you can customize your program to meet all of your needs, as well as your budget. </br></br>Best of all, your group is bound to enjoy your program, while cruising with "The World's Most Popular Cruise Line". Our 25, soon 26 with the arrival of Carnival Horizon in 2018, spectacular ships offer a host of resort amenities, an extensive variety of activities and live entertainment including spectacular production shows, delicious dining options plus Carnival's friendly and attentive service.
        </br></br>Our professional Corporate and Incentive Sales team looks forward to working with you to plan the perfect program.</p>
      </div>

      <div class="col s4 right most-popular-cruise" style="padding: 3em; padding-top:5em;">
        <h3 class="right-column-home-head">Why Choose Carnival For Your Program?</h3>
        <h5 class="right-column-home-head2">We offer you the greatest choice and selection.</h5>
        <ul class="home-bullets1">
          <li>25, soon 26 with the arrival of Carnival Horizon in 2018, fabulous floating resorts are perfect venues for your next event.</li>
          <li>A choice of 3-day, 4-dya, 5-day, 6-day, 7-day or longer programs.</li>
          <li>Popular destinations including The Bahamas, Caribbean, Hawaii, Mexican Riviera, Alaska, Bermuda, Canada, New England and Europe.</li>
          <li>15 convenient US departure ports</li>
          <li>Full-ship charters for the ultimate, customized program.</li>
        </ul>
        <h5 class="right-column-home-head2">We're serious about our commitment to you and your program.</h5>
        <ul class="home-bullets1">
          <li>Unbeatable value – with just about everything included!</li>
          <li>Spacious accomodations, all onboard meals, onboard activities and entertainment, private meeting space and venues, plus a/v equipment</li>
          <li>Flexible, value-added amenity program</li>
          <li>Account executives to assist you in planning and an onboard facilitator</li>
        </ul>
      </div>
  </div>

</div>
</div> -->

          <!-- end of tab content -->

        <div class="container">
          <div class="col s10" style="background-color: white;">
          <p class="left-align flow-text" style="color:#336699;font-size:18px;padding:20px;font-weight:350;margin-bottom:10px;margin-top:10px;"><strong>Check out the <a href="https://vimeo.com/178638244" style="color:#336699;text-decoration:underline;font-size:20px;font-weight:800;"> latest video</a> from our president, Christine Duffy, where she discusses the value of in-person meetings in an increasingly inerconnected world.</strong></p>
        </div>
      </div>
      <div class="container">
          <div class="col s10" style="background-color: #f6f9fc;">
            <iframe src="https://player.vimeo.com/video/178638244" width="120%" height="720" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
      </div>
        <div class="container center-align" style="background-color: #Eaf6fe; margin-bottom:20px;">
          <img style="max-width:100%;" src="<?php echo get_template_directory_uri(); ?>/images/resort-info.png" alt="">
        </div>


<div class="row gradient-row">
  <div class="container">
    <img class="temp-footer-nav" src="<?php echo get_template_directory_uri(); ?>/images/CARNIVAL-MEETING-WEBSITE_05.png" alt="temp-footer-list">

  </div>

</div>





</main><!-- #main -->
</div><!-- #primary -->


<?php
get_footer();
