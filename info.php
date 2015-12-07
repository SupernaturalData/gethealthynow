<html>
<head>
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=IM+Fell+DW+Pica:400,400italic' rel='stylesheet' type='text/css'>
    <style>
  #title {
  text-align : center;
  color: rgb(0,200,0);
  font-family: 'IM Fell DW Pica', serif;
  font-style : italic;
  margin-bottom : 0px;
    background-color : rgb(70,70,70);
    width : 100%;
  }
  
  #eat {
  font-family: 'IM Fell DW Pica', serif;
  font-size : 32px;
  }
  #selector1 {
    margin-left : 10px;
    background-color: green;
    border: 3px outset gray;
    color : white;
    display : inline;
 }
      #selector2 {
    margin-left : 10px;
    margin-top : 15px;
    background-color: green;
    border: 3px outset gray;
    color : white;
 }
  #FoodCheck {
    font-family: 'Roboto', sans-serif;
    margin-right : 0px;
    margin-bottom : 5px;
    width : 50%;
    display : inline;
  }
  #ManualCheck {
    font-family: 'Roboto', sans-serif;
        margin-right : 21px;
    margin-bottom : 0px;
      width : 50%;
    display : inline;
  }
  body {
        background: url("http://wallpapercave.com/wp/TjUG3t2.jpg") no-repeat center center fixed; 
    background-size: cover;
    background-repeat : no-repeat;
    width : 100%;
    margin-left : 0px;
    margin-top : 0px;
    margin-bottom : 0px;
    margin-right : 0px;
  }
    #hider {
      height : 100%;
      width : 100%;
      background-image : url("http://www.icehockeychallengecup.co.uk/communities/4/004/013/076/544//images/4619863281.png");
      position : absolute;
      margin-left : -8px;
      margin-right :0px ;
      margin-top : -8px ;
      margin-bottom : 0px;
      visibility: hidden;
      background-size : cover;
    }
      #topbar {
        width : 100%;
        height : 40px;
        margin-top : 0px;
        margin-bottom : 0px;
        margin-right : 0px;
        margin-left : 0px;
    -webkit-margin-before: 0em;
    -webkit-margin-after: 0em;
    -webkit-margin-start: 0px;
    -webkit-margin-end: 0px;
    -webkit-padding-start: 0px;
      }
      #home {
        display : inline-block;
        margin-left : -40px;
        background-image : url("http://s18.postimg.org/hncdbc41x/gradient_3.png");
        background-size : cover;
        width : 25%;
        height : 40px;
        border : 0px solid red;
        color : white;
        font-family: 'Roboto', sans-serif;
        font-size : 20px;
        margin-left : 0px;
        margin-right : 0px;
        padding: 0px 0px;
      }
      #about {
        display : inline;
                background-image : url("http://s18.postimg.org/hncdbc41x/gradient_3.png");
        background-size : cover;
        border : 0px solid red;
        width : 25%;
        height : 40px;
        margin-left : 0px;
        font-family: 'Roboto', sans-serif;
        color : white;
        font-size : 20px;
        padding: 0px 0px;
        margin-left : -4px;
      }
      #contact {
        display : inline;
                background-image : url("http://s18.postimg.org/hncdbc41x/gradient_3.png");
        background-size : cover;
        border : 0px solid red;
        width : 25%;
        height : 40px;
        margin-left : -0px;
        font-family: 'Roboto', sans-serif;
        color : white;
        font-size : 20px;
        padding: 0px 0px;
        margin-left : -4px;
      }
      #login {
        display : inline;
                background-image : url("http://s18.postimg.org/hncdbc41x/gradient_3.png");
        background-size : cover;
        border : 0px solid red;
        width : 25%;
        height : 40px;
        margin-left : -0px;
        font-family: 'Roboto', sans-serif;
        color : white;
        font-size : 20px;
        padding: 0px 0px;
        margin-left : -4px;
      }
      #about:hover {
        background-image : url("http://s29.postimg.org/c15sc52nn/gradient_5.png");
      }
            #home:hover {
        background-image : url("http://s29.postimg.org/c15sc52nn/gradient_5.png");
      }
            #contact:hover {
        background-image : url("http://s29.postimg.org/c15sc52nn/gradient_5.png");
      }
            #login:hover {
        background-image : url("http://s29.postimg.org/c15sc52nn/gradient_5.png");
      }
</head>
<body>
  </style>
  <div id="hider">
   </div>
  <h1 id="title"> The Amazing Fitness Tracker </h1>
  <ul id="topbar">
    <button id="home"> Home </button>
    <button id="about"> About </button>
    <button id="contact"> Contact</button>
    <button id="login"> Log in</button>
  </ul>
<h3 id="eat"> What did you eat today?</h3>
<div id="fooddivs">
  <p id="FoodCheck"> Check our wide list of foods</p>
<button id="selector1" onclick="FoodList()" type="button"> Select </button>
  </div>
  <div id="manualdivs">
<p id="ManualCheck" > Or manually enter a food </p>
<button id="selector2" onclick="FoodList()" type="button"> Select </button>
  </div>
<script>
  function FoodList() {
    
  }
  </script>
</body>
</html>
