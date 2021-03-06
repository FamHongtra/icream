<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>หาติว ดีลงาน</title>

  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

  <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">

  <!-- Custom fonts for this template -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

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

<body id="page-top" onload="show()">

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

  <section id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading">ค้นหาติวเตอร์</h2>
          <hr class="primary"><br>
          <h4 align="left">
            filter by:
          </h4><br>
        </div>
      </div>
    </div>





    @php
    $subjects = DB::table('subject')->get();
    $durations = DB::table('duration')->get();
    $levels = DB::table('levels')->get();
    $days = DB::table('day')->get();

    @endphp
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
          <button type="button"  id="dropdownMenuLink2" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false">
            Levels
          </button>
          <div class="dropdown-menu scrollable-menu" aria-labelledby="dropdownMenuLink2">
            @foreach ($levels as $level)
            <a class="dropdown-item" href="javascript:appendTag('level','{{$level->level_name}}','{{$level->levels_id}}');">{{ $level->level_name }}</a>
            @endforeach
          </div>
        </div> &nbsp;	&nbsp;

        <div class="dropdown">
          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" id="dropdownMenuLink3" aria-haspopup="true" aria-expanded="false">
            Durations
          </button>
          <div class="dropdown-menu scrollable-menu" aria-labelledby="dropdownMenuLink3">
            @foreach ($durations as $duration)
            <a class="dropdown-item" href="javascript:appendTag('duration','{{$duration->duration_name}}','{{$duration->duration_id}}');">{{ $duration->duration_name }}</a>
            @endforeach
          </div>
        </div> &nbsp;	&nbsp;

        <div class="dropdown">
          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" id="dropdownMenuLink4" aria-haspopup="true" aria-expanded="false">
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
      </div><br>
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

</div>

</section>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>


<!-- Bootstrap core JavaScript -->
<script src="vendor/popper/popper.min.js"></script>

<!-- Custom scripts for this template -->
<script src="js/creative.min.js"></script>


<script type="text/javascript">

var subject_tags = [];
var level_tags = [];
var duration_tags = [];
var day_tags = [];

var subject_params = "";
var level_params = "";
var duration_params = "";
var day_params = "";



var alltags = document.getElementById('alltags');
var tableshowall = document.getElementById("showall");
var subjectsfound = document.getElementById("subjectsfound");

function show(){
  params = "";

  xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET", "searching?"+params, false);
  xmlhttp.send();

  var results = JSON.parse(xmlhttp.responseText);


  //CLEAR ROWS
  while(tableshowall.rows.length > 1) {
    tableshowall.deleteRow(1);
  }


  //INSERT RESULTS TO TABLE
  for (var i = 0; i < results.length; i++) {

    var row = tableshowall.insertRow();
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    // cell1.innerHTML = results[i].subjects_id;
    cell1.innerHTML = results[i].subject_name;
    cell2.innerHTML = results[i].level_name;
    cell3.innerHTML = results[i].duration_name;
    cell4.innerHTML = results[i].dayfull;
  }

  subjectsfound.innerHTML = results.length+" Subjects Found";

}

function appendTag(type,text,id){
  var chkvalue = [0,0,0,0];
  var params = "";

  switch (type) {
    case "subject":
    subject_params = "";

    if(subject_tags.indexOf(id) === -1){
      subject_tags.push(id);
      alltags.innerHTML +=   '<span class="filtertitle">'+text+' &nbsp;	<a href="javascript:detachTag(\''+type+'\',\''+text+'\',\''+id+'\')"><i class="fa fa-times" aria-hidden="true"></i></a></span> &nbsp;';
    }

    for (var i = 0; i < subject_tags.length; i++) {
      if(i !== subject_tags.length-1){
        subject_params += "subject_id[]="+subject_tags[i]+"&";
      }else{
        subject_params += "subject_id[]="+subject_tags[i];
      }
    }
    // alert(subject_params);


    //
    // alert("subject!");
    // alert(subject_tags);
    break;
    case "level":
    level_params = "";

    if(level_tags.indexOf(id) === -1){
      level_tags.push(id);
      alltags.innerHTML +=   '<span class="filtertitle">'+text+' &nbsp;	<a href="javascript:detachTag(\''+type+'\',\''+text+'\',\''+id+'\')"><i class="fa fa-times" aria-hidden="true"></i></a></span> &nbsp;';
    }

    for (var i = 0; i < level_tags.length; i++) {
      if(i !== level_tags.length-1){
        level_params += "level_id[]="+level_tags[i]+"&";
      }else{
        level_params += "level_id[]="+level_tags[i];
      }
    }
    // alert(level_params);

    // alert("level!");
    // alert(level_tags);
    break;
    case "duration":
    duration_params = "";

    if(duration_tags.indexOf(id) === -1){
      duration_tags.push(id);
      alltags.innerHTML +=   '<span class="filtertitle">'+text+' &nbsp;	<a href="javascript:detachTag(\''+type+'\',\''+text+'\',\''+id+'\')"><i class="fa fa-times" aria-hidden="true"></i></a></span> &nbsp;';
    }

    for (var i = 0; i < duration_tags.length; i++) {
      if(i !== duration_tags.length-1){
        duration_params += "duration_id[]="+duration_tags[i]+"&";
      }else{
        duration_params += "duration_id[]="+duration_tags[i];
      }
    }
    // alert("duration!");
    // alert(duration_tags);
    break;
    case "day":
    day_params = "";

    if(day_tags.indexOf(id) === -1){
      day_tags.push(id);
      alltags.innerHTML +=   '<span class="filtertitle">'+text+' &nbsp;	<a href="javascript:detachTag(\''+type+'\',\''+text+'\',\''+id+'\')"><i class="fa fa-times" aria-hidden="true"></i></a></span> &nbsp;';
    }

    for (var i = 0; i < day_tags.length; i++) {
      if(i !== day_tags.length-1){
        day_params += "day_id[]="+day_tags[i]+"&";
      }else{
        day_params += "day_id[]="+day_tags[i];
      }
    }

    // alert("day!");
    // alert(day_tags);
    break;
  }

  //JSON REQUEST

  if(subject_tags.length>0){
    chkvalue[0] = 1;

    params = subject_params ;
  }

  if(level_tags.length>0){
    chkvalue[1] = 1;

    if(chkvalue[0] == 1){
      params = subject_params+"&"+level_params;
    }else{
      params = level_params;
    }
  }

  if(duration_tags.length>0){
    chkvalue[2] = 1;

    if(chkvalue[0] == 1 | chkvalue[1] == 1){
      if(chkvalue[0] == 1 & chkvalue[1] == 1){
        params = subject_params+"&"+level_params+"&"+duration_params;
      }else if(chkvalue[0] == 1){
        params = subject_params+"&"+duration_params;
      }else if(chkvalue[1] == 1){
        params = level_params+"&"+duration_params;
      }
    }else{
      params = duration_params;
    }
  }

  if(day_tags.length>0){
    chkvalue[3] = 1;

    if(chkvalue[0] == 1 | chkvalue[1] == 1 | chkvalue[2] == 1){
      if(chkvalue[0] == 1 & chkvalue[1] == 1 & chkvalue[2] == 1){
        params = subject_params+"&"+level_params+"&"+duration_params+"&"+day_params;
      }else if(chkvalue[0] == 1 & chkvalue[1] == 1){
        params = subject_params+"&"+level_params+"&"+day_params;
      }else if(chkvalue[1] == 1 & chkvalue[2] == 1){
        params = level_params+"&"+duration_params+"&"+day_params;
      }else if(chkvalue[0] == 1 & chkvalue[2] == 1){
        params = subject_params+"&"+duration_params+"&"+day_params;
      }else if(chkvalue[0] == 1){
        params = subject_params+"&"+day_params;
      }else if(chkvalue[1] == 1){
        params = level_params+"&"+day_params;
      }else if(chkvalue[2] == 1){
        params = duration_params+"&"+day_params;
      }
    }else{
      params = day_params;
    }
  }


  xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET", "searching?"+params, false);
  xmlhttp.send();

  var results = JSON.parse(xmlhttp.responseText);


  //CLEAR ROWS
  while(tableshowall.rows.length > 1) {
    tableshowall.deleteRow(1);
  }


  //INSERT RESULTS TO TABLE
  for (var i = 0; i < results.length; i++) {

    var row = tableshowall.insertRow();
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    // cell1.innerHTML = results[i].subjects_id;
    cell1.innerHTML = results[i].subject_name;
    cell2.innerHTML = results[i].level_name;
    cell3.innerHTML = results[i].duration_name;
    cell4.innerHTML = results[i].dayfull;
  }

  subjectsfound.innerHTML = results.length+" Subjects Found";

}

function detachTag(type,text,id){

  var chkvalue = [0,0,0,0];
  var params = "";

  switch (type) {
    case "subject":
    subject_tags.remove(id);
    // alert("subject!");
    // alert(subject_tags);
    break;
    case "level":
    level_tags.remove(id);
    // alert("level!");
    // alert(level_tags);
    break;
    case "duration":
    duration_tags.remove(id);
    // alert("duration!");
    // alert(duration_tags);
    break;
    case "day":
    day_tags.remove(id);
    // alert("day!");
    // alert(day_tags);
    break;
  }

  if(subject_tags.length>0){
    chkvalue[0] = 1;

    params = subject_params ;
  }

  if(level_tags.length>0){
    chkvalue[1] = 1;

    if(chkvalue[0] == 1){
      params = subject_params+"&"+level_params;
    }else{
      params = level_params;
    }
  }

  if(duration_tags.length>0){
    chkvalue[2] = 1;

    if(chkvalue[0] == 1 | chkvalue[1] == 1){
      if(chkvalue[0] == 1 & chkvalue[1] == 1){
        params = subject_params+"&"+level_params+"&"+duration_params;
      }else if(chkvalue[0] == 1){
        params = subject_params+"&"+duration_params;
      }else if(chkvalue[1] == 1){
        params = level_params+"&"+duration_params;
      }
    }else{
      params = duration_params;
    }
  }

  if(day_tags.length>0){
    chkvalue[3] = 1;

    if(chkvalue[0] == 1 | chkvalue[1] == 1 | chkvalue[2] == 1){
      if(chkvalue[0] == 1 & chkvalue[1] == 1 & chkvalue[2] == 1){
        params = subject_params+"&"+level_params+"&"+duration_params+"&"+day_params;
      }else if(chkvalue[0] == 1 & chkvalue[1] == 1){
        params = subject_params+"&"+level_params+"&"+day_params;
      }else if(chkvalue[1] == 1 & chkvalue[2] == 1){
        params = level_params+"&"+duration_params+"&"+day_params;
      }else if(chkvalue[0] == 1 & chkvalue[2] == 1){
        params = subject_params+"&"+duration_params+"&"+day_params;
      }else if(chkvalue[0] == 1){
        params = subject_params+"&"+day_params;
      }else if(chkvalue[1] == 1){
        params = level_params+"&"+day_params;
      }else if(chkvalue[2] == 1){
        params = duration_params+"&"+day_params;
      }
    }else{
      params = day_params;
    }
  }

  var clearText =  '<span class="filtertitle">'+text+' &nbsp;	<a href="javascript:detachTag(\''+type+'\',\''+text+'\',\''+id+'\')"><i class="fa fa-times" aria-hidden="true"></i></a></span> &nbsp;';
  var $text = $('#alltags');
  $text.html($text.html().replace(clearText, ""));

  xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET", "searching?"+params, false);
  xmlhttp.send();

  var results = JSON.parse(xmlhttp.responseText);


  //CLEAR ROWS
  while(tableshowall.rows.length > 1) {
    tableshowall.deleteRow(1);
  }


  //INSERT RESULTS TO TABLE
  for (var i = 0; i < results.length; i++) {

    var row = tableshowall.insertRow();
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    // cell1.innerHTML = results[i].subjects_id;
    cell1.innerHTML = results[i].subject_name;
    cell2.innerHTML = results[i].level_name;
    cell3.innerHTML = results[i].duration_name;
    cell4.innerHTML = results[i].dayfull;
  }

  subjectsfound.innerHTML = results.length+" Subjects Found";

}

Array.prototype.remove = function() {
  var what, a = arguments, L = a.length, ax;
  while (L && this.length) {
    what = a[--L];
    while ((ax = this.indexOf(what)) !== -1) {
      this.splice(ax, 1);
    }
  }
  return this;
};

</script>
</script>

</body>

</html>
