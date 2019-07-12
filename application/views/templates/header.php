<html>
  <head>
    <title>DCP</title>
    <link href="//db.onlinewebfonts.com/c/37269c2e6f8816718e462f201c962c3c?family=Magnificent" rel="stylesheet" type="text/css"/>
    <link href="//db.onlinewebfonts.com/c/db33e70bc9dee9fa9ae9737ad83d77ba?family=Gotham" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/leaflet/leaflet.css" />
    <style>
      @font-face {
        font-family: "Gotham";
          src: url("//db.onlinewebfonts.com/t/db33e70bc9dee9fa9ae9737ad83d77ba.eot");
          src: url("//db.onlinewebfonts.com/t/db33e70bc9dee9fa9ae9737ad83d77ba.eot?#iefix") format("embedded-opentype"),
          url("//db.onlinewebfonts.com/t/db33e70bc9dee9fa9ae9737ad83d77ba.woff2") format("woff2"),
          url("//db.onlinewebfonts.com/t/db33e70bc9dee9fa9ae9737ad83d77ba.woff") format("woff"),
          url("//db.onlinewebfonts.com/t/db33e70bc9dee9fa9ae9737ad83d77ba.ttf") format("truetype"),
          url("//db.onlinewebfonts.com/t/db33e70bc9dee9fa9ae9737ad83d77ba.svg#Gotham") format("svg");
      }

      @font-face {font-family: "Magnificent";
    src: url("//db.onlinewebfonts.com/t/37269c2e6f8816718e462f201c962c3c.eot");
    src: url("//db.onlinewebfonts.com/t/37269c2e6f8816718e462f201c962c3c.eot?#iefix") format("embedded-opentype"),
    url("//db.onlinewebfonts.com/t/37269c2e6f8816718e462f201c962c3c.woff2") format("woff2"),
    url("//db.onlinewebfonts.com/t/37269c2e6f8816718e462f201c962c3c.woff") format("woff"),
    url("//db.onlinewebfonts.com/t/37269c2e6f8816718e462f201c962c3c.ttf") format("truetype"),
    url("//db.onlinewebfonts.com/t/37269c2e6f8816718e462f201c962c3c.svg#Magnificent") format("svg");
}

      .topnav{
        background-color: white;
        overflow:hidden;
      }
      .topnav a{
        float: right;
        color: #59253A;
        text-align: center;
        padding: 5px 40px;
        text-decoration: none;
        font-size: 17px;
      }
      .topnav input{
        float: right;
        padding: 4px 5px;
        margin: 2px 10px;
      }
      .topnav a:hover{
        background-color: #f3f3f3;
        color: #59253A;
      }
      
      .info{
        background-color: #59253A;
        overflow:hidden;
        padding:10px 20px 0 0;
      }
      .info p{
        color: white;
        text-align: right;
      }
      .up{
        margin: 0;
      }
      body{
        background-color: #895061;
        margin:0;
        font-family: Magnificent;
        
      }
      .welcome{
        background-color: white;
        margin: 30px 500px 0px 30px;
        padding: 50px;
      }
      #intro{
        text-align: justify;
        padding-bottom: 15px;
        font-size:21px;
      }
      .mainhead{
        font-family: Gotham;
        color: #0677A1;
        font-size: 60px;
        margin:5px;
      }
      .datasheet{
        background-color: white;
        margin: 30px;
        padding: 30px 40px;
        display: flex;
      }
      
      .need{
        margin:0;
        color: #59253A;
        font-size:20px;
        font-weight: normal;
        
      }
      .entryfield{
        margin-bottom: 15px;
        width: 80%;
        font-size: 20px;
        padding: 5px 2px;
        background-color:#f2f2f2;
        border:none;
      }
      .subhead{
        color: #0677A1;
        font-size: 45px;
        font-family: Gotham;
        margin-bottom:15px;
      }
      button{
        background-color: #59253A;
        color: white;
        border: none;
        padding: 10px 40px;
        margin-top: 30px;
        font-family: Gotham;
      }
      #reg{
        margin-left: 55%;
      }
      
      .col{
        flex:50%;
      }
      #forgot{
        margin:19px;
      }
      i {
          border: solid black;-         border-width: 0 1px 1px 0;
          display: inline-block;
        padding: 3px;
        margin-left: 10px;
        margin-bottom: 2.5px;
      }
      .down{
        transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
      }
      .disparea{
          margin:30px;
          padding:20px 40px;
          background-color:#f3eef0;
      }
      .areatitle{
          color: #0677A1;
                font-size: 45px;
                font-family: Gotham;
          margin-bottom:0px;
      }
      table{
          background-color:#e1e1e1;
          margin-top: 50px;
      }
      
      .tablehead{
          padding: 10px 90px;
          color: #2d4159;
      }
      #return{
          background-color: #2D4159;
          margin-top: 20%;
      }
      #regtag{
          position:absolute;
          background-color: #0677A1;
          font-size: 30px;
                font-family: Gotham;
                color:white;
                padding: 10px;
                padding-left: 80px;
                margin-right: 900px;
                top: 200px;
                box-shadow: 1px 8px rgba(0,0,0,0.1);
      }
      #regdisp{
          padding-top: 80px;
      }
      #activetitle{
          font-family: Gotham;
          color: #59253A;
          margin: 0;
          font-size: 30px;
      }
      #time{
          font-family: Gotham;
          color: #895061;
          font-size: 25PX;;
      }
      #realtime{
          display: inline;
      }
      
      #active{
          margin-top: 50px;
          padding: 10px;
          background-color: white;
          width: 200px;
          height: 450px;
      }
      #colmap{ 
          position: absolute;
          top: 380px;
          width: 600px;
          left: 350px;
      }

      #map { height: 450px; 
              width: 1000px;}
      
      img{
        position:absolute;
        left: 40px;
      }
            
    </style>
  </head>
  <body>
    <div class="info">
      <img src="<?php echo base_url('images/logoa.png'); ?>" alt="logo"/ width="180" height="90-">
      <p class="up">University of the Philippines Diliman, Quezon City, Philippines</p>
      <p class="up">Contact Number: 981-8500</p>
      <p class="up">Email Address: updio@upd.edu.ph</p>
      <p>Copyright &copy; 2019 All rights reserved.</p>
    </div>
    
    <div class="topnav">
      <input type = "text" placeholder="Search...">
      <a href="<?= base_url();?>about">ABOUT<i class="down"></i></a>
            <a href="<?= base_url();?>map">MAP<i class="down"></i></a>
            <a href="<?= base_url();?>entries">ENTRIES<i class="down"></i></a>
      <a href="<?= base_url();?>register">REGISTER<i class="down"></i></a>
      <a href="<?= base_url();?>">HOME<i class="down"></i></a>
    </div>
    
-