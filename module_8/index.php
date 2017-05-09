
<html>
<head>

  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="bootstrap-3.3.6-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
  <?php
  if (!class_exists('lessc')) {
    include ('./libs/lessc.inc.php');
  }
  $less = new lessc;
  $less->compileFile('less/1.less', 'css/1.css');
  ?>
  <link href="css/1.css" rel="stylesheet" type="text/css" />

</head>

<body>

  <div class="module-8">
    <h5>TASTY AND CRUNCHY</h5>
    <h2>RESERVATIONS</h2>
    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sedolorm reminusto <br>doeiusmod tempor incidition ulla mco laboris nisi ut aliquip ex ea commo <br>condorico consectetur adipiscing elitut aliquip.
    </h4>
    <div class="input">
      <div class="row">
        <div class="col-md-6">
          <input type="text" class="inputleft" size="40" placeholder="TÊN">
        </div>
        <div class="col-md-6">
          <input type="text" class="inputright" size="40" placeholder="SDT">
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <input type="text" class="inputleft" size="40" placeholder="NGÀY/THÁNG/NĂM">
        </div>
        <div class="col-md-6">
          <input type="text"  class="inputright" size="40" placeholder="THỜI GIAN">
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <input type="text" class="inputleft" size="40" placeholder="BÀN">
        </div>
        <div class="col-md-6">
          <input type="text"  class="inputright" size="40" placeholder="EMAIL">
        </div>
      </div>
    </div>
    <div class="textarea">
      <textarea cols="40" rows="5" aria-invalid="false" placeholder="Notes"> </textarea>>
    </div>
  </div>
</body>
</html>