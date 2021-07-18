@extends('layouts.homelayout')

@section('content')
<div class="pageTitle">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <h1 class="page-heading">Message</h1>
        </div>
        <div class="col-md-6 col-sm-6">
        <div class="breadCrumb"><a href="{{url('/')}}">Home</a>  / <span>Message</span></div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page Title End -->

  <div class="listpgWraper">

    <div class="container">
		<div class="col-md-12" id="fbcomment">

			<div class="body_comment">
				<div class="row">
					<div class="avatar_comment col-md-1">
					  <img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar"/>
					</div>
					<div class="box_comment col-md-11">
					  <textarea class="commentar" placeholder="Add a comment..."></textarea>
					  <div class="box_post">
						<div class="pull-left">
						  <input type="checkbox" id="post_fb"/>
						  <label for="post_fb">Also post on Facebook</label>
						</div>
						<div class="pull-right">
						  <span>
							<img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar" />
							<i class="fa fa-caret-down"></i>
						  </span>
						  <button onclick="submit_comment()" type="button" value="1">Post</button>
						</div>
					  </div>
					</div>
				</div>
				<div class="row">
					<ul id="list_comment" class="col-md-12">
						<!-- Start List Comment 1 -->
						<li class="box_result row">
							<div class="avatar_comment col-md-1">
								<img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar"/>
							</div>
							<div class="result_comment col-md-11">
								<h4>Nath Ryuzaki</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
								<div class="tools_comment">
									<a class="like" href="#">Like</a>
									<span aria-hidden="true"> · </span>
									<a class="replay" href="#">Reply</a>
									<span aria-hidden="true"> · </span>
									
								</div>
								<ul class="child_replay">
									<li class="box_reply row">
										<div class="avatar_comment col-md-1">
											<img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar"/>
										</div>
										 <div class="result_comment col-md-11">
											<h4>Sugito</h4>
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
											
										</div>
									</li>
								</ul>
							</div>
						</li>
						
						<!-- Start List Comment 2 -->
						<li class="box_result row">
							<div class="avatar_comment col-md-1">
								<img src="https://static.xx.fbcdn.net/rsrc.php/v1/yi/r/odA9sNLrE86.jpg" alt="avatar"/>
							</div>
							<div class="result_comment col-md-11">
								<h4>Gung Wah</h4>
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's.</p>
								<div class="tools_comment">
									<a class="like" href="#">Like</a>
									<span aria-hidden="true"> · </span>
									<a class="replay" href="#">Reply</a>
									<span aria-hidden="true"> · </span>
									
								</div>
								<ul class="child_replay"></ul>
							</div>
						</li>
					</ul>
				<button class="show_more" type="button">Load 10 more comments</button>
				</div>
			</div>
		</div>
	</div>
  </div>

  @endsection