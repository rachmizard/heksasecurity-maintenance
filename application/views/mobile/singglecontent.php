<div id="fb-root"></div>

<script>(function(d, s, id) {

  var js, fjs = d.getElementsByTagName(s)[0];

  if (d.getElementById(id)) return;

  js = d.createElement(s); js.id = id;

  js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.12';

  fjs.parentNode.insertBefore(js, fjs);

}(document, 'script', 'facebook-jssdk'));</script>

<script>
function clickCounter() {
    if(typeof(Storage) !== "undefined") {
        if (localStorage.clickcount) {
            localStorage.clickcount = Number(localStorage.clickcount)+1;
        } else {
            localStorage.clickcount = 1;
        }
        document.getElementById("result").innerHTML = localStorage.clickcount;
    } else {
        document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
    }
}
</script>

<script type="text/javascript" src="//platform-api.sharethis.com/js/sharethis.js#property=5a9f5e3475b2600013667700&product=inline-share-buttons"></script>

<section class="engine"><a href="https://mobirise.co/o">bootstrap buttons</a></section><section class="mbr-section article mbr-parallax-background mbr-after-navbar" id="msg-box8-r" data-rv-view="82" style="background-image: url(<?php echo base_url(); ?>assets/images/home2sm.JPG); padding-top: 80px; padding-bottom: 80px;height: 10%;">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(34, 34, 34);">

    </div>

    <div class="container">

        <div class="row">

            <div class="col-md-8 col-md-offset-2 text-xs-center mbr-section-hero ">

                <center><h4  style="    font-size: 32px;color: white;font-weight: bold;"><?php echo $txt_header; ?></h4></center>

            </div>

        </div>

    </div>



        <div style="margin-top: -17%;position: absolute;">

            <center style="margin-top: 30%;">

            <img src="<?php echo base_url(); ?>assets/images/logo_heksa-circle.png" style="width: 20%;display: block;">

            PT HEKSA GARDA UTAMA

            </center>

    </div>

</section>











<section class=""  style="padding-top: 20%;background-color: #cbcac9;padding-bottom: 5%;height:550%;">

    <div class="container" id="concon" style="margin: 0px 10px;border-radius: 10px;margin-bottom: 10%;padding: 5%;height: 100%;background-color: white;">

        <div class="row">

  <?php foreach($beritahariini as $u){ ?>

    

            <div class="col-xs-12 col-lg-9 col-sm-12 lead">

              <img class="single" src="http://heksasecurity.com/<?php echo $u->gambar ?>">

              <h2 style="font-size: 2.3rem;"><?php echo $u->caption ?></h2>

             <p style="font-size: 14px;"><?php echo $u->keterangan ?></p>

             <br>

              <div class="row">

                <div class="col-lg-5">

                <label >Share this news and article</label>

                <div class="ssk-group" style="padding-bottom: 50px;">
                   <div class="sharethis-inline-share-buttons"></div>
                   <!--  <a href="" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fheksasecurity.com%2FBerita&amp;src=sdkpreparse');" class="ssk ssk-facebook" style="color: #fff;"></a>

                    <a href="" onclick="window.open('http://twitter.com/share?text=Butuh BodyGuard? Satpam Pribadi? Klik Disini ! #satpam;');" class="ssk ssk-twitter" style="color: #fff;"></a> -->

                  </div>

                  <div class="col-lg-6">
                     <div class="col-xs-3">
                    
                    <button style="" onclick="clickCounter()" type="button">
                       <i class="fa fa-thumbs-up" style="font-size: 20px; color: #cc3028;"><span style="    text-transform: none; font-size: 16px; margin-left: 7px;">Like</span></i><p id="result"></p>
                    </button>
                  </div>
                  </div>

                   <div class="col-xs-3 pull-right"><center>
                      <i class="fa fa-newspaper-o" style="font-size: 30px;"></i><br>     <?php foreach($beritahariini as $u){ 
                    echo $u->tgl_post;
                  }
                    ?></center>
                    </div>
                     <div class="col-xs-3 pull-right">
                      <img src="http://www.reliablecounter.com/count.php?page=heksasecurity.com/iniberita&digit=style/plain/1/&reloads=0" alt="" title="" border="0"><br /><a href="http:// love-message.org/love-sms " target="_blank" style="font-family: Geneva, Arial; font-size: 9px; color: #330010; text-decoration: none;">total view</a>
                    </div>
                 <!--  <div class="col-xs-2" style="margin-top: -25%;"><img src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDYwIDYwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA2MCA2MDsiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIzMnB4IiBoZWlnaHQ9IjMycHgiPgo8Zz4KCTxwYXRoIGQ9Ik01Nyw0aC03VjFjMC0wLjU1My0wLjQ0Ny0xLTEtMWgtN2MtMC41NTMsMC0xLDAuNDQ3LTEsMXYzSDE5VjFjMC0wLjU1My0wLjQ0Ny0xLTEtMWgtN2MtMC41NTMsMC0xLDAuNDQ3LTEsMXYzSDMgICBDMi40NDcsNCwyLDQuNDQ3LDIsNXYxMXY0M2MwLDAuNTUzLDAuNDQ3LDEsMSwxaDU0YzAuNTUzLDAsMS0wLjQ0NywxLTFWMTZWNUM1OCw0LjQ0Nyw1Ny41NTMsNCw1Nyw0eiBNNDMsMmg1djN2M2gtNVY1VjJ6IE0xMiwyaDUgICB2M3YzaC01VjVWMnogTTQsNmg2djNjMCwwLjU1MywwLjQ0NywxLDEsMWg3YzAuNTUzLDAsMS0wLjQ0NywxLTFWNmgyMnYzYzAsMC41NTMsMC40NDcsMSwxLDFoN2MwLjU1MywwLDEtMC40NDcsMS0xVjZoNnY5SDRWNnogICAgTTQsNThWMTdoNTJ2NDFINHoiIGZpbGw9IiMwMDAwMDAiLz4KCTxwYXRoIGQ9Ik0zOCwyM2gtN2gtMmgtN2gtMmgtOXY5djJ2N3YydjloOWgyaDdoMmg3aDJoOXYtOXYtMnYtN3YtMnYtOWgtOUgzOHogTTMxLDI1aDd2N2gtN1YyNXogTTM4LDQxaC03di03aDdWNDF6IE0yMiwzNGg3djdoLTcgICBWMzR6IE0yMiwyNWg3djdoLTdWMjV6IE0xMywyNWg3djdoLTdWMjV6IE0xMywzNGg3djdoLTdWMzR6IE0yMCw1MGgtN3YtN2g3VjUweiBNMjksNTBoLTd2LTdoN1Y1MHogTTM4LDUwaC03di03aDdWNTB6IE00Nyw1MGgtNyAgIHYtN2g3VjUweiBNNDcsNDFoLTd2LTdoN1Y0MXogTTQ3LDI1djdoLTd2LTdINDd6IiBmaWxsPSIjMDAwMDAwIi8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" /><br>1/1/17</div> -->



              </div>



                <!--div class="komen row" style="padding: 20px;">

                  <div class="col-xs-2" style="padding: 0px;"><img src="assets/images/comment.svg" alt="" style="padding: 0px;padding-right: 10px;"></div>

                  <div class="col-xs-19">

                    <b><br>BUDI SURYADI</b><br>

                    <p style="font-size: 14px;"><br>

                    MENARIK , konten konten yang berbobot dan sangat saya suka , Maju terus PT Heksa , terimakasih atas jasa anda 

                    </p>

                  </div>

                </div>



<?php } ?>

                <div class="form-komen" style="padding-top: 20px;">

                  <h1>ADD A COMMENT</h1>

                  <form class="form">

                    <div class="form-group">

                      <label for="email">Email address:</label>

                      <input type="email" class="form-control" id="email">

                    </div>

                    <label for="email">Comment</label>

                      <textarea class="form-control" id="email"></textarea>

<br><center>

                      <div class="my-rating jq-stars"></div></center><br>

                  <form>

                   <form class="form-inline">   

                    <center>

                    <button style="background-color: #000;border: 3px solid #fff;color: #fff;">SUBMIT</button>

                    </center>

                  </form>

                </div-->

<!-- begin wwww.htmlcommentbox.com -->

<div class="form-komen" style="padding-top: 60px;">

                  <h1>ADD A COMMENT</h1>

                  <div class="fb-comments" data-href="http://heksasecurity.com/" data-width="800" data-numposts="10"></div>

                </div>



              </div>

            

          

        </div>

    </div>

</section>

