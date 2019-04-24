<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 550px}

    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
      width: 160px;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      /*background-color: #111;*/
      overflow-x: hidden;
      padding-top: 20px;
    }

    .margin-left-160 {
      margin-left: 160px;
    }

    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;}
    }

    .footer {
       position: fixed;
       left: 0;
       bottom: 0;
       width: 100%;
       height: 5%;
       background-color: #eee;
       color: black;
       text-align: center;
    }

    .footer > p {
        margin-top: 10px; font-weight: bold;
    }
  </style>
</head>
<body>

<div class="container-fluid margin-left-160">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>Sidebar</h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Dashboard</a></li>
        <li><a href="age.html">Age</a></li>
        <li><a href="gender.html">Gender</a></li>
        <li><a href="geo.html">Geo</a></li>
      </ul><br>
    </div>
    <br>

    <div class="col-sm-9">
      <div class="jumbotron">
        <h1>Hello, Dashboard!</h1>
        <p>...</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
      </div>

      <div class="well">
        <h4>Dashboard</h4>
        <p>Some text..</p>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
            <h4>Users</h4>
            <p>1 Million</p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Pages</h4>
            <p>100 Million</p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Sessions</h4>
            <p>10 Million</p>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Bounce</h4>
            <p>30%</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="footer">
  <p>Some sticky footer here</p>
</div>

</body>
</html>
