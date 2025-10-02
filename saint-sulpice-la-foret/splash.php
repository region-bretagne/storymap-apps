<!DOCTYPE html>
<meta charset='utf-8'>
<head>
    <title>splash</title>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta charset='UTF-8' name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no'>    
        <link rel='stylesheet' href='../../lib/bootstrap_3.3.7/css/bootstrap.min.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/cssgram/0.1.10/cssgram.min.css'>
  <style>
  @font-face {
    font-family: 'spotka_black';
    src: url('../../css/fonts/region_bretagne/spotkablack.ttf');
}
@font-face {
    font-family: 'spotka_bold_sc';
    src: url('../../css/fonts/region_bretagne/spotkabold-sc.ttf');
}
@font-face {
    font-family: 'spotka_bold';
    src: url('../../css/fonts/region_bretagne/spotkabold.ttf');
}
@font-face {
    font-family: 'spotka_medium';
    src: url('../../css/fonts/region_bretagne/spotkamedium.ttf');
}
@font-face {
    font-family: 'spotka_regular';
    src: url('../../css/fonts/region_bretagne/spotkaregular.ttf');
}
@font-face {
    font-family: 'spotka_alternate_black';
    src: url('../../css/fonts/region_bretagne/spotka-alternatebold.ttf');
}
@font-face {
    font-family: 'spotka_alternate_bold';
    src: url('../../css/fonts/region_bretagne/spotka-alternatebold.ttf');
}
@font-face {
    font-family: 'spotka_alternate_medium';
    src: url('../../css/fonts/region_bretagne/spotka-alternatemedium.ttf');
}
@font-face {
    font-family: 'spotka_alternate_regular';
    src: url('../../css/fonts/region_bretagne/spotka-alternateregular.ttf');
}
    body, html {
        margin:0px;
        position:relative;
        font-size:11px;
        color: #797979;
        background-size: 100%;
        height: 100%;
        overflow-y: auto;
        overflow-x: hidden;
    } 
    .bandeau{
      text-align: center;
    }
    .story{
      color:#BA88A4;
      font-family: 'spotka_alternate_regular';
      font-size: 40px;
      text-align: center;      
      margin-top: -3%;
    }       
    .title{
      color:black;
      font-family: 'spotka_bold_sc';
      font-size: 34px;
      letter-spacing: -1.5px;
      text-align: center;
    
    }    
    .subtitle{
      color:black;
      font-family: 'spotka_bold';
      text-align: center;
    }
    .corps{
      margin-top: 10px;
      font-family: 'Trebuchet MS', 'Arial', Sans-serif;
      color:#333;
    }  
    #intro.row{
      background-color: rgb(255, 255, 255);
      padding-bottom:4%;
    }
    #next{
      margin-left: 48%;
      margin-top: 2%;
    }
    #next .story-btn-next {            
        border-radius: 52px;
    }
    #next .story-btn-next a {
        display: block;
        width: 40px;
        height: 40px;             
        background: url(image/nextButton_magenta.png) 0 0 no-repeat;
        cursor: pointer;
    }
    #next .story-btn-next a:hover {
        background: url(image/nextButton_magenta.png) 0 -40px no-repeat;
    }
    .butn{
      text-align: center;
    }
    .ks-btn {
        font-family: 'Trebuchet MS', Arial, Sans-serif;
      border-left: solid 5px;
    border-left-color: #1a1a1a;    
      box-shadow: 1px 1px 0 rgba(0,0,0,.3);
      color: #333;
      background: #eee;
      transition: all .1s ease;
      transition: border 1s ease;
      text-align: center;
      padding: 6px 12px;
      margin-bottom: 0;
      display: inline-block;
      font-size: 14px;
      line-height: 1.42857143;
      cursor: pointer;
      margin: 3px;
  }
    .ks-btn:hover {
      border-color: #1a1a1a #1a1a1a #1a1a1a #000;
      color: #fff;
      background: #1a1a1a;
      text-decoration: none;
  }   

    @media (min-width: 768px) {     
        .ks-xs {
                display:none;
        }
        .ks-bg {
            display:block;
        }
        .title {
           font-size: 34px!important;
        }
        .subtitle {
           font-size: 30px!important;
           margin-top: -12px;
        }
        .corps {
           font-size: 16px;
           line-height: 1.3;
           text-align: justify;
        }
    }
    @media (max-width: 768px) {    
        .ks-xs {
            display:block;
         }
        .ks-bg {
            display:none;
         }
         .subtitle {       
            margin-top: 0px;
         }
        #filtre{
          display: none;
        }
        #intro.row{
          padding: 30px 15px;
        }
        .corps{
          font-size: 12px!important;
          text-align: justify;

        }
        .title{
          font-size: 20px!important;
        }
        .subtitle{
          font-size: 15px!important;
        }
        #next{
          padding-top: 5%;
          padding-left: 40%;

        }
    }     
    
  </style>
</head> 
<body>  
  <div class='container-fluid'>          
    <div class='row' id='intro'>        
      <div class=' col-sm-offset-2 col-sm-8'> 
          <div class='bandeau'>
            <img src='image/bandeau_region_magenta_top.svg'>
          </div>
          <div class='story'><img src='image/patrimoine_magenta.svg' style='margin-top:-1%;width:3%'>KARTENN STORY<img src='image/patrimoine_magenta.svg' style='margin-top:-1%;width:3%'></div>
           <div id='titre' class='title'> <?="Les commerces d'Antan de Saint-Sulpice-la-Forêt "?> </div>  
            <div class='subtitle'>-<?=""?> </div>
            <div class='parcours'>
            <img src=<?='image/facade.jpg'?> style='width:100%;margin:10px 0px 10px 0px;'>
          </div>
            <div class='corps'>
              <?="Plongez dans l'histoire vivante de Saint-Sulpice-la-Forêt
              <p></p>
La municipalité de Saint-Sulpice-La-Forêt, en collaboration avec son Conseil des Sages, l'association Patrimonium et des habitant.es volontaires ont entrepris une véritable quête, collectant des trésors de paroles et d'images évoquant l'âge d'or des commerces d'antan.
Au fil des descriptions historiques, des anecdotes savoureuses, des photographies et des croquis évocateurs, nous vous invitons à embarquer pour un voyage dans le temps. Un parcours de découverte soigneusement conçu vous conduira à travers les bâtiments qui ont, jadis, vibré au rythme des activités commerciales et artisanales.
Préparez-vous à remonter le fil de l'histoire, à retrouver l'essence de ces lieux chargés d'histoires et à revivre le charme des commerces d'antan. 
Pour commencer : Cliquez sur la flèche"?> 
          </div>
          <div class='butn' style='margin-top:20px;'>
              <a type='button' class='ks-btn' title='Ouvrir dans une nouvelle fenêtre' href=<?="https://patrimoine.bzh/gertrude-diffusion/dossier/046ecf95-2b37-4163-9fb6-be4ba17ca315"?> target='_blank'>En savoir plus</a>
            </div>
            <div id='next'>
            <div class='story-btn story-btn-next' style='opacity: 1;'>
                <a onclick='next();'> </a>
            </div>
       </div>     
        </div>   
      </div> 
    </div>      
  </div>
  <script>
    var next = function () {        
        parent.postMessage('splash-next', window.location.origin);
    };
   </script>
</body>
</html>
