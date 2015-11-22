<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $site->title() ?></title>

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- build:css /styles/vendor.css -->
    <!-- bower:css -->
    <!-- endbower -->
    <!-- endbuild -->

    <!-- build:css /styles/main.css -->
    <link rel="stylesheet" href="/styles/main.css">
    <!-- endbuild -->

    <script>
      !function(e,t,n,a,r,s,l,p){n&&(s=n[a],s&&(l=e.createElement("style"),l.innerHTML=s,e.getElementsByTagName("head")[0].appendChild(l)),p=t.setAttribute,t.setAttribute=function(e,l,u,i){"string"==typeof l&&l.indexOf(r)>-1&&(u=new XMLHttpRequest,u.open("GET",l,!0),u.onreadystatechange=function(){4===u.readyState&&(i=u.responseText.replace(/url\(\//g,"url("+r+"/"),i!==s&&(n[a]=i))},u.send(null),t.setAttribute=p,s)||p.apply(this,arguments)})}(document,Element.prototype,localStorage,"tk","https://use.typekit.net");
    </script>
    <script>
      (function(d) {
        var config = {
          kitId: 'gri0mmi',
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
    </script>
  </head>
  <body>
    <!--[if lt IE 10]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
