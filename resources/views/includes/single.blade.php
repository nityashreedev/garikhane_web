@extends('layouts.frontendlayout')
@section('content')
<style>
#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea,
#contact button[type="submit"] {
  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

#contact {
  background: #F9F9F9;
  padding: 25px;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.rojs-btn {
    background: green;
    padding: 10px;
    width: 100%;
    display: block;
    text-align: center;
    font-size: 17px;
    text-transform: uppercase;
    margin-bottom: 15px;
}

#contact h3 {
  display: block;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 10px;
}

#contact h4 {
  margin: 5px 0 15px;
  display: block;
  font-size: 13px;
  font-weight: 400;
}

fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea {
  width: 100%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
}

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="url"]:hover,
#contact textarea:hover {
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 1px solid #aaa;
}

#contact textarea {
  height: 100px;
  max-width: 100%;
  resize: none;
}

#contact button[type="submit"] {
  cursor: pointer;
  width: 100%;
  border: none;
  background: #4CAF50;
  color: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;
}

#contact button[type="submit"]:hover {
  background: #43A047;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

.copyright {
  text-align: center;
}

#contact input:focus,
#contact textarea:focus {
  outline: 0;
  border: 1px solid #aaa;
}

::-webkit-input-placeholder {
  color: #888;
}

:-moz-placeholder {
  color: #888;
}

::-moz-placeholder {
  color: #888;
}

:-ms-input-placeholder {
  color: #888;
}
</style>
<div class="banner">
    <div class="shadow-main">
        <h1>  Wordpress Developer </h1>
        <ul class="breadcrumb breadcrumb-news">
            <li><a href="#">HOME</a></li>
            <li><a href="#">JOB</a></li>
            <li><a href="../ecology-news/index.html">WORDPRESS DEVELOPER</a></li>

        </ul>
    </div>
</div>
<div class="page page-news page-single">
    <div class="container ">
        <div class="row">
            <div class="col-lg-8 col-md-7 col-sm-6">
                <div class="main-post">

                    <!--====================== Main Post =======================-->
                    <div class="post-single">
                        <div class="person-card post-single-cont">
                            <div class="person-content">

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                    sed do eiusmod tempor incididunt ut labore et doore magna
                                    aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco laboris nisi ut aliquip ex ea com- modo consequat.
                                    Duis aute irure dolor in reprehenderit in voluptate velit
                                    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                    occaecat cupidatat non proident, sunt in culpa qui officia.
                                    Lorem ipsum dolor sit aet, consectetur adipisicing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                laboris nisi ut aliquip ex ea commodo consequat.</p>

                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                    accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                    quae ab illo inventore veritatis et quasi architecto beatae vitae
                                    dicta sunt explica- bo. Nemo enim ipsam voluptatem quia voluptas sit
                                aspernatur aut odit aut fugit, sed quia consequuntur. </p>

                                <h3>Small Heading Example</h3>

                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et olore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea com- modo consequat. Duis aute
                                irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>

                                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia. Lorem
                                    ipsum dolor sit amet, consec- tetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                    nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Duis aute irure</p>

                                


                            </div>
                        </div>


                        <!--====================== You May Also Like =======================-->
                        <div class="container also-like">
                            <div>
                                <h2> You May Also Like </h2>
                                <div class="col-lg-4 photo-post">
                                    <div class="person-img">
                                        <a href="../ecology-news/index.html#iframeVideo" class="img-link">
                                            <span><i class="icon-eye" aria-hidden="true"></i></span>
                                            <img src="assets/images/also-like-ecology-1.png" alt="people-smile">
                                        </a>
                                    </div>
                                    <div class="person-content">
                                        <h3><a href="../ecology-news/index.html#iframeVideo" class="title-white">
                                        Pollution Devastating China’s Vital Ecosystem</a></h3>

                                    </div>
                                </div>

                                <div class="col-lg-4 photo-post">
                                    <div class="person-img">
                                        <a href="../ecology-news/index.html#iframeVideo" class="img-link">
                                            <span><i class="icon-eye" aria-hidden="true"></i></span>
                                            <img src="assets/images/also-like-ecology-1.png" alt="people-smile">
                                        </a>
                                    </div>
                                    <div class="person-content">
                                        <h3><a href="../ecology-news/index.html#iframeVideo" class="title-white">
                                        Pollution Devastating China’s Vital Ecosystem</a></h3>

                                    </div>
                                </div>

                                <div class="col-lg-4 photo-post">
                                    <div class="person-img">
                                        <a href="../ecology-news/index.html#iframeYoutube" class="img-link">
                                            <span><i class="icon-eye" aria-hidden="true"></i></span>
                                            <img src="assets/images/also-like-ecology-2.png" alt="boy">
                                        </a>
                                    </div>
                                    <div class="person-content">
                                        <h3><a href="../ecology-news/index.html#iframeYoutube" class="title-white">
                                        Predicting Future Outcomes in the Natural World</a></h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.post-single -->
                </div> <!-- /.main-post -->
            </div> <!-- /.col-lg-8 col-md-8 -->

            <!-- ======================= Sidebar ===================-->
            <div class="col-lg-4 col-md-5 col-sm-6 right-post-single">
                <a href="#" class="rojs-btn">Interested</a>
                <div class="job_content">
                    <ul>
                        <li>
                            <strong>Published on:</strong> <span>2020-10-15</span>
                        </li>
                        <li>
                            <strong>Vacancy: </strong> <span>5 Position</span>
                        </li>
                        <li><strong>Salary: </strong> <span>Rs. 20000</span>
                        </li>
                        <li><strong>Location: </strong> <span>Kathmandu</span>
                        </li>
                    </ul>
                </div>
                <form id="contact" action="" method="post">
    <h3>Contact Us</h3>
    <h4>Contact us for custom quote</h4>
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site (optional)" type="url" tabindex="4" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your message here...." tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
            </div> <!-- /.col-lg-4 col-md-4 -->

        </div> <!--  /.row -->
    </div> <!--  /.container -->
@endsection