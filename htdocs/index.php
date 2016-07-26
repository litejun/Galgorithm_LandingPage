<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Galgorithm Rating Page Example</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Star rating -->
    <link rel='stylesheet' type='text/css' href='css/style.css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<a class="navbar-brand" href="#">Galgorithm</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#rating">Rating</a>
                    </li>
                    <li>
                        <a href="#add_games">Add Games</a>
                    </li>
                    <li>
                        <a href="#recommendation">Recommandation</a>
                    </li>
					<li>
						<a href="#">Login</a>
					</li>
           </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active">			</li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('https://trello-attachments.s3.amazonaws.lcom/5779c45f919a89a4f15675c7/2560x1440/dbeef170c23e77d3d7e93892be0ecd8f/LSWTFA_WALLPAPER_landscape_2560x1440.jpg');">
					<div class="carousel-caption">
						<h2>Caption 1</h2>
					</div>


				</div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('https://trello-attachments.s3.amazonaws.com/5779c45f919a89a4f15675c7/1280x720/ab3d7e905e019a8dc25b8c0206343469/pokken-tournament_1280_720.jpg');">			
				<div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
				</div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('https://trello-attachments.s3.amazonaws.com/5779c45f919a89a4f15675c7/1920x1080/0eff3deea6b0919dd557ea0b4945b586/Uncharted4_1920_1080.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container" id="rating">
        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Rating</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="https://trello-attachments.s3.amazonaws.com/578733244a52002328dc6129/640x880/96c06f22f48f2ed70bdaeaac6f36b096/MV5BNzc4MjI0NDgtMWM2ZC00NmMxLThmYjMtYmM3M2ZlYzhlNzVmXkEyXkFqcGdeQXVyMjYwNDA2MDE%40__V1_.jpg" alt="">
                </a>    
                <div style="text-align:center">
				<div class="acidjs-rating-stars">
                    <form>
                        <center>
                         <input type="radio" name="group-1" id="group-1-0" value="5" /><label for="group-1-0"></label>
                         <input type="radio" name="group-1" id="group-1-1" value="4" /><label for="group-1-1"></label>
                          <input type="radio" name="group-1" id="group-1-2" value="3" /><label for="group-1-2"></label>
                         <input type="radio" name="group-1" id="group-1-3" value="2" /><label for="group-1-3"></label>
                          <input type="radio" name="group-1" id="group-1-4"  value="1" /><label for="group-1-4"></label>
                      </form>
                </div>
				</div>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="https://trello-attachments.s3.amazonaws.com/578733244a52002328dc6129/640x880/ed94ca381df9d4e50ee71d5318cc4b35/bioshock_title.jpg" alt="">
                </a>
				<div style="text-align:center">
               <div class="acidjs-rating-stars">
                    <form>
                         <input type="radio" name="group-2" id="group-2-0" value="5" /><label for="group-2-0"></label>
                         <input type="radio" name="group-2" id="group-2-1" value="4" /><label for="group-2-1"></label>
                          <input type="radio" name="group-2" id="group-2-2" value="3" /><label for="group-2-2"></label>
                         <input type="radio" name="group-2" id="group-2-3" value="2" /><label for="group-2-3"></label>
                          <input type="radio" name="group-2" id="group-2-4"  value="1" /><label for="group-2-4"></label>
                      </form>
                </div>
				</div>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="https://trello-attachments.s3.amazonaws.com/578733244a52002328dc6129/640x880/5e6d77b4ebb737a5a884c6ddeee35175/Last_of_us_Title.jpg" alt="">
                </a>
				
				   <div style="text-align:center">
               <div class="acidjs-rating-stars">
                    <form>
                         <input type="radio" name="group-1" id="group-3-0" value="5" /><label for="group-3-0"></label>
                         <input type="radio" name="group-1" id="group-3-1" value="4" /><label for="group-3-1"></label>
                          <input type="radio" name="group-1" id="group-3-2" value="3" /><label for="group-3-2"></label>
                         <input type="radio" name="group-1" id="group-3-3" value="2" /><label for="group-3-3"></label>
                          <input type="radio" name="group-1" id="group-3-4"  value="1" /><label for="group-3-4"></label>
                      </form>
                </div>
				</div>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="https://trello-attachments.s3.amazonaws.com/578733244a52002328dc6129/640x880/4f05cd4bb2badfc3536b6fb3e6934816/walking_dead.jpg" alt="">
                </a>
			<div>


				   <div style="text-align:center">
              <div class="acidjs-rating-stars">
                    <form>
                         <input type="radio" name="group-4" id="group-4-0" value="5" /><label for="group-4-0"></label>
                         <input type="radio" name="group-4" id="group-4-1" value="4" /><label for="group-4-1"></label>
                          <input type="radio" name="group-4" id="group-4-2" value="3" /><label for="group-4-2"></label>
                         <input type="radio" name="group-4" id="group-4-3" value="2" /><label for="group-4-3"></label>
                          <input type="radio" name="group-4" id="group-4-4"  value="1" /><label for="group-4-4"></label>
                      </form>
                </div>
				</div>
			</div>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="https://trello-attachments.s3.amazonaws.com/578733244a52002328dc6129/640x880/ca00e5ca5de7d4140ea1ed1c03eda3d2/Mad_max_title.jpg" alt="">
                </a>

				   <div style="text-align:center">
                <div class="acidjs-rating-stars">
                    <form>
                         <input type="radio" name="group-5" id="group-5-0" value="5" /><label for="group-5-0"></label>
                         <input type="radio" name="group-5" id="group-5-1" value="4" /><label for="group-5-1"></label>
                          <input type="radio" name="group-5" id="group-5-2" value="3" /><label for="group-5-2"></label>
                         <input type="radio" name="group-5" id="group-5-3" value="2" /><label for="group-5-3"></label>
                          <input type="radio" name="group-5" id="group-5-4"  value="1" /><label for="group-5-4"></label>
                      </form>
                </div>
				</div>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="https://trello-attachments.s3.amazonaws.com/578733244a52002328dc6129/640x880/7bb7a5b0c9a9f8404786f2f762c786ac/gears_of_wra.jpg" alt="">
                </a>
				<div style="text-align:center">
				<div class="acidjs-rating-stars">
                    <form>
                         <input type="radio" name="group-6" id="group-6-0" value="5" /><label for="group-6-0"></label>
                         <input type="radio" name="group-6" id="group-6-1" value="4" /><label for="group-6-1"></label>
                          <input type="radio" name="group-6" id="group-6-2" value="3" /><label for="group-6-2"></label>
                         <input type="radio" name="group-6" id="group-6-3" value="2" /><label for="group-6-3"></label>
                          <input type="radio" name="group-6" id="group-6-4"  value="1" /><label for="group-6-4"></label>
                      </form>
                </div>
				</div>
            </div>
        </div>
        <!-- /.row -->

        <hr>
        <div class="col-lg-12" id="add_games">
            <h2 class="page-header2">Adding Games</h2>
        </div>
        <!-- Call to Action Section -->

		<div class="well">
            <div class="row">

<!-- Button trigger modal -->
			<p>
				<button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#myModal">
  게임 추가하기
				</button>
			</p>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-contents">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">게임 추가하기</h4>
      </div>
      <div class="modal-body">

		<!-- form(modal) -->
<div class="recommendation_form" id="myInput">
		<form method="post" action="process.php">
			<p>
				게임 제목 <input type="text" name="title" class="form-control">
			</p>
			<p>
			제작 년도
			</p>
			<div class="row">
					<div class="btn-group col-md-12" data-toggle="buttons">
			<label class="btn btn-warning active">
				<input type="radio" name="premiere_year" class="form-control"> 00 이전
			</label>
			<label class="btn btn-info">
				<input type="radio" name="premiere_year" class="form-control"> 00 ~ 10 
			</label>
			<label class="btn btn-success">
				<input type="radio" name="premiere_year" class="form-control"> 10 이후 
			</label>
			<label class="btn btn-danger">
				<input type="radio" name="premiere_year" class="form-control">모름
			</label>
				</div>
			</div>
			<p>
				구동기기 <input type="text" name="platform" class="form-control"> 
			</p>
			<p>
				개발사 <input type="text" name="creator" class="form-control">

			</p>
			<p>
				장르 <input type="text" name="category" class="form-control">
			</p>
			<p>
				<button class="btn-default" type="file">이미지 추가하기</button>
			</p>
			<p>
				<button type="submit" class="btn btn-primary btn-block">추가하기 </button>
			</p>
		</form>
</div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">닫기</button>
      </div>
    </div>
  </div>
</div>



			
			</div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>


    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

	<script>
		$(document).ready(function(){
			$('body').scrollspy({target: ".navbar", offset:50});
			$("#myNavbar a").on('click', function(event){
				if(this.hash !== ""){
					event.preventDefault();
				
					var hash = this.hash;

					$('html, body').animate({
						scrollTop: $(hash).offset().top
					}, 800, function(){
						window.location.hash = hash;
					});
				}
			});
		});
	</script>


</body>

</html>
