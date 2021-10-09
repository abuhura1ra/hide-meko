<!DOCTYPE html>
<html>
<head>
    <title>Hide Meko</title>
    <meta name="description" content="Php Obfuscator">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
body{
    font-size: 15pt;
    color:grey;
}
textarea {
    width: 420px;
    border: 1px lightblue solid;
    height: 400px;
    box-shadow: 8px 10px 25px grey;
    outline: none;
    border-radius: 10px;
    font-size: 20px;
    
}
input {
    width: 300px;
    height: 50px;
    border-radius: 15px;
    background-color:#007fff;
    color:#ffffff;
}
.whatis {
    color:#ffffff;
    text-shadow: 2px 2px 4px black;
}
</style>
</head>
<body>


<nav class="navbar navbar-dark bg-primary">
    <a class="navbar-brand" href="#">
    <img src="logo.png" width="70" height="70" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">..</span></a>
      <a class="nav-item nav-link" href="https://github.com/abuhura1ra">Github</a>
      <a class="nav-item nav-link" href="https://www.facebook.com/AbuHur41r4">Facebook</a>
      <a class="nav-item nav-link" href="https://abuhur41r4.000webhostapp.com/">Website</a>
    </div>
  </div>
</nav>
<br>
<br>

<center>
<?php
if(isset($_POST['obfus'])) {
    
    $str = $_POST['phpcode'];
    $a = bin2hex(gzdeflate(rawurlencode(urlencode(base64_encode(bin2hex(str_rot13($str)))))));
    $b = 'eval(urldecode(hex2bin("2532346e2532302533442532307374725f726f7431332532382532326667655f65626731332532322532392533422532302532346f2532302533442532307374725f726f74313325323825323275726b326f7661253232253239253342253230253234702532302533442532307374725f726f7431332532382532326f6e667236345f717270627172253232253239253342253230253234712532302533442532307374725f726f743133253238253232686579717270627172253232253239253342253230253234722532302533442532307374725f726f743133253238253232656e6a686579717270627172253232253239253342253230253234732532302533442532307374725f726f743133253238253232746d766173796e6772253232253239253342253230253234742532302533442532307374725f726f74313325323825323275726b326f7661253232253239253342")));
    eval(hex2bin("3f3e").$n($o($p($q($r($s($t($encode))))))));
';
    $c = ('$encode = "');
    $d =('";');
    echo("<textarea><?php 
$c$a$d
$b
?></textarea>");
} elseif (empty($_POST['phpcode'])) {
    echo("<form method='post'><textarea name='phpcode' placeholder='<?php'></textarea><br><br><input type='submit' value='Encode' name='obfus'></form>");
}

?>
</center>
<br>
<br>
<h1 class='whatis'>What is PHP Obfuscator</h1>
<br>
<p>
The PHP Obfuscator online tool obfuscates the source code of a PHP script so that it is difficult to read by people and it's significance may be recognized only with difficulty.
<br> <br>
In the case of a release of PHP scripts we might often avoid that other people can easily identify the exact function of the script, or we want to make it difficult for them to use the code for their own scripts.
<br> <br>
For this, PHP Obfuscator renames the variable name, interface, class and function names into meaningless characters and numbers. Spaces, empty lines and comments will be removed from the source code. Furthermore, strings (except "here docs" blocks) can be encoded, which can be useful to avoid simple changes to the script output.
<br><br>
With PHP Obfuscator, no complete illegibility of the source code can be achieved, since the PHP server must be still able to process the script - even without additional software installed on the server.
<br><br>
For proper processing of the script, the full source code or the entire file (including HTML tags) should be pasted. If you want to process only a portion of a script, the code block must be contain a PHP start and end tag.
</p><br>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script>prettyPrint();</script>

<script src="./js-splash-2.0.min.js"></script>
<script>
    function randomInteger(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    function randomColor() {
        return "#000000".replace(/0/g, function () {
            return (~~(Math.random() * 16)).toString(16);
        });
    }

    var splash = new Splash({background: 'rgba(0,0,0,.6)'});

    var RANDOM_SPLASH = [
        function () {
            splash.fromAnimation(SVGAnimation.Bolt, 3000, {
                color: randomColor()
            })
        },
        function () {
            splash.fromHtml('<h1 style="color: #e0a800">JS SPLASH</h1>');
        },
        function () {
            splash.fromImage("out/logo.png", 2200, {
                width: '130px',
                height: '130px',
            });
        },
        function () {
            splash.fromAnimation(SVGAnimation.FillRotate, 3000, {
                color: "#e0a800"
            })
        },
        function () {
            var custom_node = document.createElement("div");
            custom_node.style.display = 'grid';

            var text = document.createElement("strong");
            text.innerText = "JS SPLASH";
            text.style.padding = "25px";

            var img = document.createElement("img");
            img.src = "out/logo.png";
            Object.assign(img.style, {
                width: '100px',
                height: '100px',
                'border-radius': '50%'
            });

            custom_node.appendChild(img);
            custom_node.appendChild(text);

            splash.fromCustomNode(custom_node, 5000, {
                color: randomColor(),
                'font-family': 'fantasy'
            });
        },
        function () {
            splash.fromAnimation(SVGAnimation.CenterBar, 3000, {
                color: randomColor()
            })
        },
        function () {
            splash.fromAnimation(SVGAnimation.Dalton, 3000, {
                color: randomColor()
            })
        },
        function () {
            splash.fromAnimation(SVGAnimation.Flag, 3000, {
                color: randomColor()
            })
        },
        function () {
            splash.fromAnimation(SVGAnimation.Orbit, 3000, {
                color: randomColor()
            })
        }
    ];
    
    splash.fromAnimation(SVGAnimation.Orbit, 3000, {background: 'transparent'});

</script>
</body>
</html>