<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <style>
    * {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

html {
  height: 100%;
}

body {
  background: rgb(153, 150, 150);
  position: relative;
  height: 100%;
  margin: 0px;
}

@-webkit-keyframes clockwise {
  0% {
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-moz-keyframes clockwise {
  0% {
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-webkit-keyframes counter-clockwise {
  0% {
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -moz-transform: rotate(-360deg);
    -ms-transform: rotate(-360deg);
    -webkit-transform: rotate(-360deg);
    transform: rotate(-360deg);
  }
}
@-moz-keyframes counter-clockwise {
  0% {
    -moz-transform: rotate(0deg);
    -ms-transform: rotate(0deg);
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -moz-transform: rotate(-360deg);
    -ms-transform: rotate(-360deg);
    -webkit-transform: rotate(-360deg);
    transform: rotate(-360deg);
  }
}
.container {
  position: absolute;
  top: 50%;
  left: 50%;
  margin-left: -100px;
  height: 150px;
  width: 200px;
  margin-top: -75px;
  transform: scale(1.3);
  
}

.gearbox {
  background: #111;
  height: 150px;
  width: 200px;
  position: relative;
  border: none;
  overflow: hidden;
  -moz-border-radius: 6px;
  -webkit-border-radius: 6px;
  border-radius: 6px;
  -moz-box-shadow: 0px 0px 0px 1px rgba(255, 255, 255, 0.1);
  -webkit-box-shadow: 0px 0px 0px 1px rgba(255, 255, 255, 0.1);
  box-shadow: 0px 0px 0px 1px rgba(255, 255, 255, 0.1);
}
.gearbox .overlay {
  -moz-border-radius: 6px;
  -webkit-border-radius: 6px;
  border-radius: 6px;
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 10;
  -moz-box-shadow: inset 0px 0px 20px black;
  -webkit-box-shadow: inset 0px 0px 20px black;
  box-shadow: inset 0px 0px 20px black;
  -moz-transition: background 0.2s;
  -o-transition: background 0.2s;
  -webkit-transition: background 0.2s;
  transition: background 0.2s;
}
.gearbox.turn .overlay {
  background: transparent;
}

.gear {
  position: absolute;
  height: 60px;
  width: 60px;
  -moz-box-shadow: 0px -1px 0px 0px #888888, 0px 1px 0px 0px black;
  -webkit-box-shadow: 0px -1px 0px 0px #888888, 0px 1px 0px 0px black;
  box-shadow: 0px -1px 0px 0px #888888, 0px 1px 0px 0px black;
  -moz-border-radius: 30px;
  -webkit-border-radius: 30px;
  border-radius: 30px;
}
.gear.large {
  height: 120px;
  width: 120px;
  -moz-border-radius: 60px;
  -webkit-border-radius: 60px;
  border-radius: 60px;
}
.gear.large:after {
  height: 96px;
  width: 96px;
  -moz-border-radius: 48px;
  -webkit-border-radius: 48px;
  border-radius: 48px;
  margin-left: -48px;
  margin-top: -48px;
}
.gear.one {
  top: 12px;
  left: 10px;
}
.gear.two {
  top: 61px;
  left: 60px;
}
.gear.three {
  top: 110px;
  left: 10px;
}
.gear.four {
  top: 13px;
  left: 128px;
}
.gear:after {
  content: "";
  position: absolute;
  height: 36px;
  width: 36px;
  -moz-border-radius: 36px;
  -webkit-border-radius: 36px;
  border-radius: 36px;
  background: #111;
  top: 50%;
  left: 50%;
  margin-left: -18px;
  margin-top: -18px;
  z-index: 3;
  -moz-box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.1), inset 0px 0px 10px rgba(0, 0, 0, 0.1), inset 0px 2px 0px 0px #090909, inset 0px -1px 0px 0px #888888;
  -webkit-box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.1), inset 0px 0px 10px rgba(0, 0, 0, 0.1), inset 0px 2px 0px 0px #090909, inset 0px -1px 0px 0px #888888;
  box-shadow: 0px 0px 10px rgba(255, 255, 255, 0.1), inset 0px 0px 10px rgba(0, 0, 0, 0.1), inset 0px 2px 0px 0px #090909, inset 0px -1px 0px 0px #888888;
}

.gear-inner {
  position: relative;
  height: 100%;
  width: 100%;
  background: #555;
  -webkit-animation-iteration-count: infinite;
  -moz-animation-iteration-count: infinite;
  -moz-border-radius: 30px;
  -webkit-border-radius: 30px;
  border-radius: 30px;
  border: 1px solid rgba(255, 255, 255, 0.1);
}
.large .gear-inner {
  -moz-border-radius: 60px;
  -webkit-border-radius: 60px;
  border-radius: 60px;
}
.gear.one .gear-inner {
  -webkit-animation: counter-clockwise 3s infinite linear;
  -moz-animation: counter-clockwise 3s infinite linear;
}
.gear.two .gear-inner {
  -webkit-animation: clockwise 3s infinite linear;
  -moz-animation: clockwise 3s infinite linear;
}
.gear.three .gear-inner {
  -webkit-animation: counter-clockwise 3s infinite linear;
  -moz-animation: counter-clockwise 3s infinite linear;
}
.gear.four .gear-inner {
  -webkit-animation: counter-clockwise 6s infinite linear;
  -moz-animation: counter-clockwise 6s infinite linear;
}
.gear-inner .bar {
  background: #555;
  height: 16px;
  width: 76px;
  position: absolute;
  left: 50%;
  margin-left: -38px;
  top: 50%;
  margin-top: -8px;
  -moz-border-radius: 2px;
  -webkit-border-radius: 2px;
  border-radius: 2px;
  border-left: 1px solid rgba(255, 255, 255, 0.1);
  border-right: 1px solid rgba(255, 255, 255, 0.1);
}
.large .gear-inner .bar {
  margin-left: -68px;
  width: 136px;
}
.gear-inner .bar:nth-child(2) {
  -moz-transform: rotate(60deg);
  -ms-transform: rotate(60deg);
  -webkit-transform: rotate(60deg);
  transform: rotate(60deg);
}
.gear-inner .bar:nth-child(3) {
  -moz-transform: rotate(120deg);
  -ms-transform: rotate(120deg);
  -webkit-transform: rotate(120deg);
  transform: rotate(120deg);
}
.gear-inner .bar:nth-child(4) {
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
}
.gear-inner .bar:nth-child(5) {
  -moz-transform: rotate(30deg);
  -ms-transform: rotate(30deg);
  -webkit-transform: rotate(30deg);
  transform: rotate(30deg);
}
.gear-inner .bar:nth-child(6) {
  -moz-transform: rotate(150deg);
  -ms-transform: rotate(150deg);
  -webkit-transform: rotate(150deg);
  transform: rotate(150deg);
}

h1 {
  font-family: "Helvetica";
  text-align: center;
  text-transform: uppercase;
  color: rgb(105, 101, 101);
  font-size: 19px;
  padding-top: 10px;
  text-shadow: 1px 1px 0px rgb(5, 5, 5);
  margin-left:17px;
}

  </style>
  </head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
  <div class="container">
      <div class="row m-5">
        <div class="col text-center">
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="container">
            <div class="gearbox">
            <div class="overlay"></div>
              <div class="gear one">
                <div class="gear-inner">
                  <div class="bar"></div>
                  <div class="bar"></div>
                  <div class="bar"></div>
                </div>
              </div>
              <div class="gear two">
                <div class="gear-inner">
                  <div class="bar"></div>
                  <div class="bar"></div>
                  <div class="bar"></div>
                </div>
              </div>
              <div class="gear three">
                <div class="gear-inner">
                  <div class="bar"></div>
                  <div class="bar"></div>
                  <div class="bar"></div>
                </div>
              </div>
              <div class="gear four large">
                <div class="gear-inner">
                  <div class="bar"></div>
                  <div class="bar"></div>
                  <div class="bar"></div>
                  <div class="bar"></div>
                  <div class="bar"></div>
                  <div class="bar"></div>
                </div>
              </div>
            </div>
            <h1>Inventario en proceso de construcción</h1>
          </div>
          
        </div>
      </div>
  </div>
</body>
</html>