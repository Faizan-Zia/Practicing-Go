<?php
get_header(); ?>
  <!-- Banner Area -->
  <div class="image-and-banner">
    <img class="image" src="<?php echo get_theme_file_uri('/assets/images/banner-main.jpg'); ?> " alt="" />
    <div class="banner-section">
      <div class="banner">
        <h1 class="banner-primary">We believe in <br/>quality education</h1>
        <p class="banner-discription">Check out our courses and find your major</p>
        <a class="large-btn" href="#">Start Here</a>
      </div>
    </div>
  </div>

  <!-- Counters -->
  <section>
    <div class="counter">
      <div class="box">
        <h1><div class="value" data-target="2000">0</div></h1>
        <h2>Students</h2>
      </div>
      <div class="box">
        <h1><div class="value" data-target="75">0</div></h1>
        <h2>Courses</h2>
      </div>
      <div class="box">
        <h1><div class="value" data-target="120">0</div></h1>
        <h2>Teachers</h2>
      </div>
      <div class="box">
        <h1><div class="value" data-target="50">0</div></h1>
        <h2>Awards</h2>
      </div>
    </div>
  </section>

  <section>
    <div class="two-col-split">

      <!-- Blog posts -->
      <div class="blogs">
        <h1 class="heading">From Our Blogs</h1>
        <div class="box-container">
          <div class="box-2">
            <div class="content">
              <p class="date">
                <span class="month">Jan</span>
                <span class="day">21</span>
              </>
              <p class="user"><i class="fas fa-user"></i> by Admin</p>
              <a href="#" class="title">Blog title goes here..</a>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci, laborum!</p>
              <a href="#" class="link-blue">Read more</a>
            </div>
          </div>
          <div class="box-2">
            <div class="content">
              <p class="date">
                <span class="month">Jan</span>
                <span class="day">21</span>
              </>
              <p class="user"><i class="fas fa-user"></i> by Admin</p>
              <a href="#" class="title">Blog title goes here..</a>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci, laborum!</p>
              <a href="#" class="link-blue">Read more</a>
            </div>
          </div>
          <div class="box-2">
            <div class="content">
              <p class="date">
                <span class="month">Jan</span>
                <span class="day">21</span>
              </>
              <p class="user"><i class="fas fa-user"></i> by Admin</p>
              <a href="#" class="title">Blog title goes here..</a>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci, laborum!</p>
              <a href="#" class="link-blue">Read more</a>
            </div>
          </div>
        </div>
        <div class="btn-viewAll">
          <a href="#" class="btn">View All Blog Posts</a>
        </div>
      </div>

      <!-- Event posts -->
      <div class="events">
        <h1 class="heading">Upcoming Events</h1>
        <div class="event-container">
          <div class="event">
            <p class="event-date">
              <span class="month">Mar</span>
              <span class="day">25</span>
            </p>
            <div class="content">
              <a href="#" class="title">Event title</a>
              <p class="event-discription">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Neque laudantium fugiat quae reiciendis cum laboriosam.
                <a href="#" class="link-blue">Learn more</a>
              </p>
            </div>
          </div>
          <div class="event">
            <p class="event-date">
              <span class="month">Apr</span>
              <span class="day">10</span>
            </p>
            <div class="content">
              <a href="#" class="title">Event title</a>
              <p class="event-discription">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Neque laudantium fugiat quae reiciendis cum laboriosam.
                <a href="#" class="link-blue">Learn more</a>
              </p>
            </div>
          </div>
        </div>
        <div class="btn-viewAll">
          <a href="#" class="btn">View All Events</a>
        </div>
      </div>
    </div>
  </section>

  <!-- Slideshow -->
  <section>
    <div class="hero-slider check">
      <div class="slider">
        <div class="slideshow">
          <input type="radio" name="radio-btn" id="radio1" />
          <input type="radio" name="radio-btn" id="radio2" />
          <input type="radio" name="radio-btn" id="radio3" />
         
          <div class="slide first">
            <img src="<?php echo get_theme_file_uri('/assets/images/graduation.jpg'); ?> " alt="graduation ceremony" />
            <div class="info">
              <h2>Graduation ceremony 2022</h2>
              <p>The 98th garduation ceremony of the School of Excellence was held last month.</p>
              <p><a href="#" class="btn">Learn more</a></p>
            </div>
          </div>
          <div class="slide">
            <img src="<?php echo get_theme_file_uri('/assets/images/lecture-hall.jpg'); ?> " alt="lecture hall" />
            <div class="info">
              <h2>Inauguration of new lecture halls</h2>
              <p>Three new lecture halls in the Emerging Sciences building have been inaugurated.</p>
              <p><a href="#" class="btn">Learn more</a></p>
            </div>
          </div>
          <div class="slide">
            <img src="<?php echo get_theme_file_uri('/assets/images/library.jpg'); ?> " alt="library" />
            <div class="info">
              <h2>Latest additions to the library</h2>
              <p>Find out the new titles that have been added to our library this month.</p>
              <p><a href="#" class="btn">Learn more</a></p>
            </div>
          </div>
        
          <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
          </div>
        </div>
      
        <div class="navigation-manual">
          <label for="radio1" class="manual-btn"></label>
          <label for="radio2" class="manual-btn"></label>
          <label for="radio3" class="manual-btn"></label>
        </div>
      </div>
    </div>
  </section>

<?php 
get_footer();
?>