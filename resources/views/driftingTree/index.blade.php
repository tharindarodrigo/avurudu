<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-16">
    <title>ලිස්සන ගහ </title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
    </script>

    <style type="text/css">


        #panel{
            position:absolute;
            width:500px;
            height:130px;
            z-index:60;
            background-color:navy;
            color:#FFFFFF;
            padding:50px;
            display:none;
        }




        body{


            background-image:url('img/avrudu.jpg');

            background-color:#cccccc;
            overflow:hidden;
        }

        #push{


            z-index:10;
            /*background:#98bf21;*/
            height:200px;
            width:200px;
            position:absolute;
            left:1100px;
            top:158px;



        }

        #push:hover{

            opacity:0.8;
        }




        #one{

            z-index:5;
            /*background:#98bf21;*/
            height:250px;
            width:200px;
            position:absolute;
            left:620px;
            top:400px;
            background-image:url('img/pose1.png');
        }

        #pole{
            z-index:-1;
            position:absolute;
            top:110px;
            left:600px;



        }

    </style>




    <script>

        $(document).ready(function(){


            att=0;
            up=0;



            $("#push").click(





                    function(){


                        y=Math.floor((Math.random()*100)+1);
                        z=Math.floor((Math.random()*100)+1);
                        x=y+z;

                        //x%2==0 || x%5==0

                        if(up<6){


                            $("#comments").html( "<h3> තැඹිලි පාට බොත්තම ඔබන්න </h3>" );
                            if(att%2==0){
                                $("#one").css( "background-image","url('img/pose1.png')" );
                            }else{
                                $("#one").css( "background-image","url('img/pose2.png')" );

                            }




                            if(x%2==0 || x%5==0){

                                att++;
                                up++;

                                $("#one").animate({top:'-=50px'},600);
                                $("#clicks").html( "<h3>&lt;"+up+"&gt; උත්සාහකිරීම්=  &nbsp;"+att+"</h3>" );



                            }
                            else{

                                att++;
                                up--;
                                $("#clicks").html( "<h3>&lt;"+up+"&gt; උත්සාහකිරීම්=   &nbsp;"+att+"</h3>" );

                                if(up<0){
                                    up=-1;
                                    $("#one").animate({top:'400px'},600);
                                    $("#comments").html( "<h3>අය්යෝ තව බිමනේ</h3>" );

                                }else{

                                    $("#one").animate({top:'+=50px'},600);
                                }


                            }

                        }else{


                            $("#one").css( "background-image","url('img/won.png')" );
                            $("#kodiya").hide();
                            $("#comments").html( "<h3>ඔයා හොඳයිනේ  :P </h3>" );
                            $("#panel").slideDown(1200).html("<h2 align='center'>ඔබ උත්සාහ කිරීම්  "+att+"කින් තරඟය නිම කලා , උත්සාහ කිරීම් අඩුම ගණනකින් කොඩිය ලබා ගන්නා තැනැත්තා ජයග්‍රාහකයා වේ . , ඔබට ස්තුතියි !</h2>");

                        }

                    });




        });






    </script>
</head>

<body>
<div id="main">

    <img  id="push" src="img/push.png" alt="push" />

    <div  style="background-color:#CCFFCC;width:800px;">
        <p align="center"><b>උඩට යෑමට තැඹිලි පාට බොත්තම ඔබන්න , ඔබට වාසනාව තිබේ නම් අඩු clicks ගානකින් උඩට යනු ඇත .</b></p>
        <div>

            <div id="one" >
            </div>

            <img style="z-index:-1;position:absolute;left:740px;top:100px;" id="kodiya" src="img/kodiya.png" alt="kodiya">

            <!-- <img id="one" src="img/pose1.png" alt="climb" /> -->

            <img id="pole" src="img/pole.png" alt="pole" />

            <div id="clicks" style="color:#ffffff;position:absolute;left:310px;top:200px;height:60px;width:180px;background-color:navy;border:solid aqua 3px;"> </div>
            <div id="comments" style="color:#ffffff;position:absolute;left:290px;top:300px;height:60px;width:220px;background-color:#3399FF;border:solid aqua 3px;"> තැඹිලි පාට බොත්තම ඔබන්න </div>

            <div id="panel"></div>

            <div>
</body>
</html>
