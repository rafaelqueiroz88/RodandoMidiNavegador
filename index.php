<?php

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tocando músicas do formato MIDI em um Browser</title>
        <script type='text/javascript' src='http://www.midijs.net/lib/midi.js'></script>
        <style>
            a{
                font-size: 20pt;
                color: #333;
                text-decoration: none;
            }
            a:visited{
                color: #333;
            }
            a:hover{
                color: #333;
            }
        </style>
    </head>
    <body>
        <a href="#" id="tocar" onClick="MIDIjs.play('md.mid');">Tocar Música</a>  <-- Click para iniciar
        <br/>
        <a href="#" id="parar" onClick="MIDIjs.stop();">Parar a Música</a>  <-- Click para parar
        <script type="text/javascript" src="jquery.js"></script>
        <script>
            $("#parar").click(function(event){
                event.preventDefault();
            });
            $("#tocar").click(function(event){
                event.preventDefault();
            });
        </script>
    </body>
</html>