<html>
<head>
<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font: 14px/1 'Open Sans', sans-serif;
  color: #555;
  background: #e5e5e5;
}

.gallery {
  width: 640px;
  margin: 0 auto;
  padding: 5px;
  background: #fff;
  box-shadow: 0 1px 2px rgba(0,0,0,.3);
}

.gallery > div {
  position: relative;
  float: left;
  padding: 5px;
}

.gallery > div > img {
  display: block;
  width: 200px;
  transition: .1s transform;
  transform: translateZ(0); /* hack */
}

.gallery > div:hover {
  z-index: 1;
}

.gallery > div:hover > img {
  transform: scale(1.7,1.7);
  transition: .3s transform;
}

.cf:before, .cf:after {
  display: table;
  content: "";
  line-height: 0;
}

.cf:after {
  clear: both;
}

h1 {
  margin: 40px 0;
  font-size: 30px;
  font-weight: 300;
  text-align: center;
}
</style>
</head>
<body>
<h1>Simple CSS Image Gallery with Zoom</h1>

<div class="gallery cf">
  <div>
    <img src="http://abload.de/img/a6aawu.jpg" />
  </div>
  <div>
    <img src="http://abload.de/img/a6aawu.jpg" />
  </div>
  <div>
    <img src="http://abload.de/img/a6aawu.jpg" />
  </div>
  <div>
    <img src="http://abload.de/img/a6aawu.jpg" />
  </div>
  <div>
    <img src="http://abload.de/img/a6aawu.jpg" />
  </div>
  <div>
    <img src="http://abload.de/img/a6aawu.jpg" />
  </div>
</div>
</body>
</html>