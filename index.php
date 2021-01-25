<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
.container{
  margin-top:20px;
  width:75%;
}
.title{
  margin-top:20px;
  margin-bottom: 20px;
}
.single-news{
  background-color:#ddd;
  padding:30px;
  margin-bottom:20px;
  margin-top:20px;
}

header {
   margin-bottom: 20px;
}
.header-row {
   display: flex;
   align-items: center;
   justify-content: space-between;
   padding: 20px 0;
   position: relative;
   border-bottom: 2px solid #d9d9d9;
}
.logo-name {
   display: block;
   font-size: 26px;
   line-height: 1;
   font-family: 'Radley', serif;
   text-transform: uppercase;
   color: #19121e;
}
.logo-description {
   position: relative;
   display: block;
   text-align: right;
   font-size: 10px;
   text-transform: uppercase;
   color: #a1787e;
}
.logo-description:before {
   content: "";
   position: absolute;
   top: 50%;
   left: 0;
   right: 0;
   height: 1px;
   background-color: #a1787e;
   z-index: -1;
}
.logo-description span {
   padding-left: 10px;
   background-color: white;
}
#menu {
   position: absolute;
   top: calc(100% + 1px);
   left: 0;
   right: 0;
   z-index: 10;
   visibility: hidden;
   opacity: 0;
   background-color: white;
   transition: .3s linear;
}
#menu.show {
   visibility: visible;
   opacity: 1;
}
#menu li a {
   display: block;
   padding: 10px 0;
   position: relative;
   color: #19121e;
   font-size: 18px;
}
#menu li.current a {
   color: #a1787e;
}

.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("img/news-3.jpg");
  height: 50%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
}

.hero-text button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: black;
  background-color: #ddd;
  text-align: center;
  cursor: pointer;
}

.hero-text button:hover {
  background-color: #555;
  color: white;
}

* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}

.list li {
  background: url("https://bradfrost.github.com/this-is-responsive/patterns/images/icon_arrow_right.png") no-repeat 97% 50%;
  border-bottom: 1px solid #ccc;
  display: table;
  border-collapse: collapse;
  width: 100%;
}
.inner {
  display: table-row;
  overflow: hidden;
}
.li-img {
  display: table-cell;
  vertical-align: middle;
  width: 30%;
  padding-right: 1em;
}
.li-img img {
  display: block;
  width: 100%;
  height: auto;
}
.li-text {
  display: table-cell;
  vertical-align: middle;
  width: 70%;
}
.li-head {
  margin: 0;
}
.li-sub {
  margin: 0;
}

@media all and (min-width: 45em) {
  .list li {
    float: left;
    width: 50%;
  }
}

@media all and (min-width: 75em) {
  .list li {
    width: 33.33333%;
  }
}

.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

#myInput {
  box-sizing: border-box;
  background-image: url('searchicon.png');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 16px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 1px solid #ddd;
}

#myInput:focus {outline: 3px solid #ddd;}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f6f6f6;
  min-width: 230px;
  overflow: auto;
  border: 1px solid #ddd;
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
</style>


<header>
	<div class="container">
	<div class="header-row">
		<div class="logo">
			<a href="">
				<span class="logo-name">NewsSearcher</span>
				<span class="logo-description">
					<span>Be aware of all events!</span>
				</span>
			</a>
		</div>
			
			<div class="header-right"><p id="demo"></p>
				<script>
					var d = new Date();
					document.getElementById("demo").innerHTML = d.toDateString();
				</script>
			</div>
		</div>
	</div>
	</header>
	
	
	<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#topnews">Top News</a>
  <a href="#business">Business</a>
  <a href="#technologies">Technologies</a>
  <a href="#finance">Finance</a>
  <a href="#sport">Sport</a>
  <div class="search-container">
	  <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search">
	  <button type="submit">Submit</button>
    </form>
  </div>
</div>

	
	<section class="main-content">
		<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">ReadingTopList</h1>
    <ul class="list img-list">
			<li>
				<a href="#" class="inner">
					<div class="li-img" rowspan="2">
						<img src="https://bradfrost.github.com/this-is-responsive/patterns/images/fpo_square.png" alt="Image Alt Text" />
					</div>
					<div class="li-text">
						<h4 class="li-head">Title of Content</h4>
						<p class="li-sub">Summary of content</p>
					</div>
				</a>
			</li>
			<li>
				<a href="#" class="inner">
					<div class="li-img">
						<img src="https://bradfrost.github.com/this-is-responsive/patterns/images/fpo_square.png" alt="Image Alt Text" />
					</div>
					<div class="li-text">
						<h4 class="li-head">Title of More Content</h4>
						<p class="li-sub">Summary of more content</p>
					</div>
				</a>
			</li>
			<li>
				<a href="#" class="inner">
					<div class="li-img">
						<img src="https://bradfrost.github.com/this-is-responsive/patterns/images/fpo_square.png" alt="Image Alt Text" />
					</div>
					<div class="li-text">
						<h4 class="li-head">Title of Even More Content</h4>
						<p class="li-sub">Summary of even more content</p>
					</div>
				</a>
			</li>
			<li>
				<a href="#" class="inner">
					<div class="li-img">
						<img src="https://bradfrost.github.com/this-is-responsive/patterns/images/fpo_square.png" alt="Image Alt Text" />
					</div>
					<div class="li-text">
						<h4 class="li-head">Title of Content</h4>
						<p class="li-sub">Summary of content</p>
					</div>
				</a>
			</li>
			<li>
				<a href="#" class="inner">
					<div class="li-img">
						<img src="https://bradfrost.github.com/this-is-responsive/patterns/images/fpo_square.png" alt="Image Alt Text" />
					</div>
					<div class="li-text">
						<h4 class="li-head">Title of More Content</h4>
						<p class="li-sub">Summary of more content</p>
					</div>
				</a>
			</li>
		</ul>
	  </div>
	</div>
	</section>
	
		
<div class="container">
  <h1>All articles</h1>
  <hr>
  <div class="list-wrapper">
    <?php
      if(file_exists('news.json')){
        $api_url = 'news.json';
        $newslist = json_decode(file_get_contents($api_url));
      }else{
        $news_keyword = 'top headlines';
        $api_url = 'https://newsapi.org/v2/top-headlines?country=us&apiKey=4385d6b5521b4812bbbddb7d07cd894d';
        $newslist = file_get_contents($api_url);
        file_put_contents('news.json', $newslist);
        $newslist = json_decode($newslist);
      }
      foreach($newslist->articles as $news){?>
      <div class="row single-news">
        <div class="col-4">
          <img style="width:100%;" src="<?php echo $news->urlToImage;?>">
        </div>
        <div class="col-8">
          <h2><?php echo $news->title;?></h2>
          <small><?php echo $news->source->name;?></small>
          <?php if($news->author && $news->author!=''){ ?>
            <small>| <?php echo $news->author;?></small>
          <?php } ?>
          <p><?php echo $news->description;?></p>
		  <p><?php echo date("d/m/Y");?></p>
          <a href="<?php echo $news->url;?>" class="btn btn-sm btn-primary" style="float:right;" target="_blank">Read More >></a>
        </div>
      </div>
    <?php } ?>
  </div>
</div>