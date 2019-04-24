<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

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
      margin-left: 170px;
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
