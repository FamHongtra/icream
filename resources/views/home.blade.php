<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>หาติว ดีลงาน</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- fam-add -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">

    <style media="screen">
    .filtertitle {
      border: 1px solid #e6e6e6;
      padding: 0.25cm 0.5cm 0.25cm;
      border-radius: 5px;
    }

    .fa-times{
      color:#999999;
    }

    .scrollable-menu {
      height: auto;
      max-height: 200px;
      overflow-x: hidden;
    }
    </style>

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">หาติว ดีลงาน</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead">
    <div class="header-content">
      <div class="header-content-inner">
        <h1 id="homeHeading">หาติว ดีลงาน</h1>
        <hr>
        <p>เรียน/สอนพิเศษตัวต่อตัว ทุกวิชา ทุกระดับชั้น ทุกวันเวลา กับหาติว ดีลงาน</p>

      </div>
    </div>
  </header>


        @php
        $subjects = DB::table('subject')->get();
        $durations = DB::table('duration')->get();
        $levels = DB::table('levels')->get();
        $days = DB::table('day')->get();

        @endphp

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">ค้นหาติวเตอร์</h2>
            <hr class="primary">
          </div>
        </div>
      </div>
      <div class="container">

        <div class="btn-group">

          <div class="dropdown">
            <button type="button" id="dropdownMenuLink" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Subjects
            </button>
            <div class="dropdown-menu scrollable-menu" aria-labelledby="dropdownMenuLink">
              @foreach ($subjects as $subject)
              <a class="dropdown-item" href="javascript:appendTag('subject','{{$subject->subject_name}}','{{$subject->subjects_id}}');">{{ $subject->subject_name }}</a>
              @endforeach
            </div>
          </div>	&nbsp;	&nbsp;

          <div class="dropdown">
            <button type="button"  id="dropdownMenuLink2" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
              Levels
            </button>
            <div class="dropdown-menu scrollable-menu" aria-labelledby="dropdownMenuLink2">
              @foreach ($levels as $level)
              <a class="dropdown-item" href="javascript:appendTag('level','{{$level->level_name}}','{{$level->levels_id}}');">{{ $level->level_name }}</a>
              @endforeach
            </div>
          </div> &nbsp;	&nbsp;

          <div class="dropdown">
            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" id="dropdownMenuLink3" aria-haspopup="true" aria-expanded="false">
              Durations
            </button>
            <div class="dropdown-menu scrollable-menu" aria-labelledby="dropdownMenuLink3">
              @foreach ($durations as $duration)
              <a class="dropdown-item" href="javascript:appendTag('duration','{{$duration->duration_name}}','{{$duration->duration_id}}');">{{ $duration->duration_name }}</a>
              @endforeach
            </div>
          </div> &nbsp;	&nbsp;

          <div class="dropdown">
            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" id="dropdownMenuLink4" aria-haspopup="true" aria-expanded="false">
              Days
            </button>
            <div class="dropdown-menu scrollable-menu" aria-labelledby="dropdownMenuLink4">
              @foreach ($days as $day)
              <a class="dropdown-item" href="javascript:appendTag('day','{{$day->dayfull}}','{{$day->day_id}}');">{{ $day->dayfull }}</a>
              @endforeach
            </div>
          </div>&nbsp;	&nbsp;
        </div><br><br><br>


        <h3 id="subjectsfound" align="left">

        </h3><br>
        <div class="" id="alltags" align="left">
          Selected Filters:
        </div>
        <div class="" id="filtervalue" style="display:none">
        </div>
        </div>
        </div>

        <div class="container">
        <table class="table"  id="showall">
        <thead>
          <tr>
            <th>Subject</th>
            <th>Level</th>
            <th>Day</th>
            <th>Duration</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
        </table>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


      </div>
    </section>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>


    <script>
      $.Thailand({
    database: '{{URL::asset("themes/alchemist/assets/scripts/jquery.Thailand.js/database/db.json")}}', // path หรือ url ไปยัง database
    $district: $('#district'), // input ของตำบล
    $amphoe: $('#amphoe'), // input ของอำเภอ
    $province: $('#province'), // input ของจังหวัด
    $zipcode: $('#zipcode'), // input ของรหัสไปรษณีย์
    });
</script>
    </script>

  </body>

</html>
