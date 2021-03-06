
<!DOCTYPE html>
<html>
<head>
	<title>ERROR</title>
	<style type="text/css">
	@import url(https://fonts.googleapis.com/css?family=Roboto:700);
body, html {
  overflow: hidden;
  min-height: 100%;
}

body {
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzhlYmZjZiIvPjxzdG9wIG9mZnNldD0iNjYuNjY2JSIgc3RvcC1jb2xvcj0iIzhlYmZjZiIvPjxzdG9wIG9mZnNldD0iNjYuNjY2JSIgc3RvcC1jb2xvcj0iI2UzY2ZhMyIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iI2UzY2ZhMyIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
  background-size: 100%;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #8ebfcf), color-stop(66.666%, #8ebfcf), color-stop(66.666%, #e3cfa3), color-stop(100%, #e3cfa3));
  background-image: -moz-linear-gradient(#8ebfcf, #8ebfcf 66.666%, #e3cfa3 66.666%, #e3cfa3);
  background-image: -webkit-linear-gradient(#8ebfcf, #8ebfcf 66.666%, #e3cfa3 66.666%, #e3cfa3);
  background-image: linear-gradient(#8ebfcf, #8ebfcf 66.666%, #e3cfa3 66.666%, #e3cfa3);
  font-family: Roboto, sans-serif;
  color: #fff;
}

h1 {
  text-align: center;
  font-size: 4em;
  padding: 1em;
}

.bb8 {
  width: 20em;
  height: 28em;
  margin-top: -14em;
  top: 60%;
  left: 50%;
  margin-left: -10em;
  position: absolute;
  -moz-animation: bump 1s infinite linear alternate;
  -webkit-animation: bump 1s infinite linear alternate;
  animation: bump 1s infinite linear alternate;
}

.bb8-top {
  height: 8em;
  width: 12em;
  margin: 0 auto;
  position: relative;
}

.bb8-head {
  background: #f3f2f2;
  height: 8em;
  width: 12em;
  z-index: 99;
  position: absolute;
  top: 1.6em;
  -moz-border-radius: 15em 15em 85% 85%;
  -webkit-border-radius: 15em;
  border-radius: 15em 15em 85% 85%;
  overflow: hidden;
  border-bottom: 0.5em solid #dbd7d7;
}
.bb8-head:after {
  background: transparent;
  border: 0.5em #959fa3 solid;
  width: 20em;
  height: 10em;
  left: 50%;
  position: absolute;
  bottom: .2em;
  margin-left: -10.25em;
  display: block;
  content: "";
  -moz-border-radius: 85%;
  -webkit-border-radius: 85%;
  border-radius: 85%;
}

.orange-stripe {
  background: transparent;
  border: 0.5em #db7c2e solid;
  width: 20em;
  height: 10em;
  left: 50%;
  position: absolute;
  bottom: .6em;
  margin-left: -10.25em;
  -moz-border-radius: 85%;
  -webkit-border-radius: 85%;
  border-radius: 85%;
}
.orange-stripe:before {
  display: block;
  content: "";
  background: #f3f2f2;
  position: absolute;
  width: 7em;
  height: 2em;
  bottom: -1em;
  left: 50%;
  margin-left: -2.5em;
}

.hat {
  background: #959fa3;
  height: 4em;
  width: 8em;
  position: absolute;
  top: -2em;
  right: 50%;
  margin-right: -4em;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
}
.hat:before {
  background: #f3f2f2;
  height: 2em;
  width: 4em;
  content: '';
  display: block;
  position: absolute;
  top: 1em;
  left: 50%;
  margin-left: -2em;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
}
.hat:after {
  background: transparent;
  border: 0.5em #db7c2e solid;
  content: '';
  display: block;
  position: absolute;
  z-index: 1;
  height: 4.5em;
  width: 9em;
  left: 50%;
  margin-left: -5em;
  top: 50%;
  margin-top: -2.75em;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
}

.eye {
  height: 2.5em;
  width: 2.5em;
  background: #323c48;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  position: absolute;
  top: 50%;
  right: 12%;
  -moz-transform: scale(0.65);
  -ms-transform: scale(0.65);
  -webkit-transform: scale(0.65);
  transform: scale(0.65);
}
.eye:before {
  border: 0.2em #f3f2f2 solid;
  background: #08060d;
  height: 2em;
  width: 2em;
  position: absolute;
  content: '';
  display: block;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  left: 50%;
  top: 50%;
  margin-left: -1em;
  margin-top: -1em;
}
.eye:after {
  background: white;
  height: .25em;
  width: .25em;
  left: 1em;
  bottom: .55em;
  content: '';
  display: block;
  position: absolute;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  -webkit-filter: blur(0.15em);
  filter: blur(0.15em);
}

.eye-large {
  height: 3.5em;
  width: 3.5em;
  background: #323c48;
  border: 0.25em solid #f3f2f2;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  position: absolute;
  top: 25%;
  left: 50%;
  margin-left: -2em;
  z-index: 100;
}
.eye-large:before {
  background: #08060d;
  height: 2.75em;
  width: 2.75em;
  position: absolute;
  content: '';
  display: block;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  left: 50%;
  top: 50%;
  margin-left: -1.375em;
  margin-top: -1.375em;
}
.eye-large:after {
  background: #ee2f22;
  height: 1em;
  width: 1em;
  left: 1em;
  bottom: 1em;
  content: '';
  display: block;
  position: absolute;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
  -webkit-filter: blur(0.15em);
  filter: blur(0.15em);
  opacity: 0.5;
}

.bb8-antena {
  background: #f3f2f2;
  width: .25em;
  height: 2em;
  -moz-border-radius: 100%;
  -webkit-border-radius: 100%;
  border-radius: 100%;
  position: absolute;
  top: 0;
  left: 50%;
  margin-left: -.5em;
}

.bb8-antena-2 {
  background: #f3f2f2;
  width: .25em;
  height: 5em;
  -moz-border-radius: 100%;
  -webkit-border-radius: 100%;
  border-radius: 100%;
  position: absolute;
  top: -2em;
  left: 50%;
  margin-left: .75em;
  overflow: hidden;
}
.bb8-antena-2:before {
  display: block;
  content: '';
  width: 1em;
  background: #181e2c;
  height: 1em;
}
.bb8-antena-2:after {
  display: block;
  content: '';
  width: 1em;
  background: #181e2c;
  height: .8em;
  position: absolute;
  bottom: .75em;
}

.bb8-body {
  background: #f3f2f2;
  width: 20em;
  height: 20em;
  overflow: hidden;
  position: relative;
  -moz-border-radius: 20em;
  -webkit-border-radius: 20em;
  border-radius: 20em;
  -moz-animation: spin 2s infinite linear;
  -webkit-animation: spin 2s infinite linear;
  animation: spin 2s infinite linear;
}

div[class^=panel-] {
  width: 11em;
  height: 11em;
  background: #db7c2e;
  -moz-border-radius: 11em;
  -webkit-border-radius: 11em;
  border-radius: 11em;
  position: absolute;
}
div[class^=panel-]:before {
  height: 8em;
  width: 8em;
  -moz-border-radius: 11em;
  -webkit-border-radius: 11em;
  border-radius: 11em;
  background: #f3f2f2;
  display: block;
  content: '';
  left: 50%;
  top: 50%;
  margin-top: -4em;
  margin-left: -4em;
  position: absolute;
}

.panel-1 {
  top: -8em;
  left: -3em;
}

.panel-2 {
  bottom: -2em;
  left: -8em;
}

.panel-3 {
  right: 1em;
  bottom: -8em;
  -moz-transform: rotate(-20deg);
  -ms-transform: rotate(-20deg);
  -webkit-transform: rotate(-20deg);
  transform: rotate(-20deg);
}

.panel-4 {
  right: -7em;
  top: -1em;
  -moz-transform: rotate(20deg);
  -ms-transform: rotate(20deg);
  -webkit-transform: rotate(20deg);
  transform: rotate(20deg);
}

.panel-5 {
  top: 4em;
  left: 4em;
  -moz-transform: rotate(20deg);
  -ms-transform: rotate(20deg);
  -webkit-transform: rotate(20deg);
  transform: rotate(20deg);
}

div[class^=inset-] {
  width: 2em;
  height: 8em;
  position: absolute;
  left: 50%;
  top: 50%;
  margin-top: -4em;
  margin-left: -1em;
}
div[class^=inset-]:before {
  position: absolute;
  top: 0;
  display: block;
  content: '';
  border-top: 2em solid #db7c2e;
  border-left: .5em solid transparent;
  border-right: .5em solid transparent;
  height: 0;
  width: 1em;
}
div[class^=inset-]:after {
  position: absolute;
  bottom: 0;
  display: block;
  content: '';
  border-bottom: 2em solid #db7c2e;
  border-left: .5em solid transparent;
  border-right: .5em solid transparent;
  height: 0;
  width: 1em;
}

.plating {
  background: #959fa3;
  height: 3.5em;
  width: 3.5em;
  position: absolute;
  left: 50%;
  top: 50%;
  margin-left: -1.75em;
  margin-top: -1.75em;
  overflow: hidden;
  -moz-border-radius: 2em;
  -webkit-border-radius: 2em;
  border-radius: 2em;
}
.plating:before {
  height: 6em;
  width: 2.7em;
  content: '';
  display: block;
  position: absolute;
  top: -1em;
  right: -1.3em;
  background: #f3f2f2;
}

.inset-1 {
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  -webkit-transform: rotate(90deg);
  transform: rotate(90deg);
}

@-moz-keyframes spin {
  100% {
    -moz-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-webkit-keyframes spin {
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@keyframes spin {
  100% {
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-moz-keyframes bump {
  100% {
    margin-top: -12.8em;
  }
}
@-webkit-keyframes bump {
  100% {
    margin-top: -12.8em;
  }
}
@keyframes bump {
  100% {
    margin-top: -12.8em;
  }
}
</style>
</head>
<body>

<h1>Error <?php echo $_GET['error'] ?> <br>...creo que andas perdido.</h1>
<a href="index.php">
<div class="bb8">
  <div class="bb8-top">
    <div class="bb8-antena"></div>
    <div class="bb8-antena-2"></div>
    <div class="bb8-head">
      <div class="orange-stripe"></div>
      <div class="hat"></div>
      <div class="eye"></div>
      <div class="eye-large">		</div>
    </div>
  </div>
  <div class="bb8-body">
    <div class="panel-1"></div>
    <div class="panel-2">
      <div class="inset-1"></div>
      <div class="inset-2"></div>
    </div>
    <div class="panel-3">
      <div class="inset-1"></div>
      <div class="inset-2"></div>
    </div>
    <div class="panel-4">
      <div class="inset-1"></div>

      <div class="inset-2"></div>
    </div>
    <div class="panel-5">
      <div class="inset-1"></div>
      <div class="inset-2"></div>
      <div class="plating"></div>
    </div>
  </div>
</div></a>
<center>	Haz click al droid para volver.</center>
</body>
</html>