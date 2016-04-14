<!-- 
//////////////////////////////////////////////////////
//////////////////////////////////////////////////////
	 Developed By Lakith Dharmarathna 
	 lakith.id@gmail.com
	 @ Brightron Solutions (http://www.brightron.net/)
	 Licensed under GNU General Public License v3.0 (open source) 
/////////////////////////////////////////////////////	 
/////////////////////////////////////////////////////	 
-->




<!DOCTYPE html>

<html lang="en">
<head>
    <title>කණා මුට්ටි</title>
    <meta charset="utf-16">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <style>




        #leftAdd{
            z-index:20;
            position:absolute;
            left:15px;
            top:30px;
            height:550px;
            width:150px;
            background-color:#F5F599;
            border:grey 1px solid;
            background-image:url('img/bulk.jpg');


        }

        #rightAdd{
            z-index:20;
            position:absolute;
            right:15px;
            top:30px;
            height:550px;
            width:200px;
            background-color:#F5F599;
            border:grey 1px solid;
            background-image:url('img/bulk.jpg');

        }

        #container{
            z-index:-2;
            position:absolute;
            left:205px;
            top:30px;
            height:500px;
            width:880px;
            background-color:#F5F599;
            border:grey 3px solid;
            background-image:url('img/cover.jpg');
            opacity:0.5;

        }







        #mainBox{

            z-index:200;

            position:absolute;
            left:460px;
            top:350px;
            width:600px;
            height:100px;




        }

        #box1{

            position:absolute;
            left:50px;
            top:0px;
            z-index:300;
            width:100px;
            height:100px;
            background-color:#FF4719;
            border:solid #FFCC00 5px;

        }



        #box2{

            position:absolute;
            width:100px;
            height:100px;
            z-index:300;
            background-color:#FF4719;
            left:250px;
            top:0px;
            border:solid #FFCC00 5px;

        }


        #box3{

            width:100px;
            height:100px;
            z-index:300;
            background-color:#FF4719;
            position:absolute;
            left:450px;
            top:0px;
            border:solid #FFCC00 5px;

        }


        #box3:hover{opacity:0.7;}
        #box2:hover{opacity:0.7;}
        #box1:hover{opacity:0.7;}









        #draggable {

            position:absolute;
            left:250px;
            top:100px;
            z-index:500;
            width: 150px;
            height: 200px;
            padding: 0.5em;
            float: left;
            margin: 10px 10px 10px 0;
        }




        #rope{
            position:absolute;
            left:500px;
            top:0px;
            height:300px;



        }

        #info{
            text-align:center;
            position:absolute;
            left:250px;
            top:343px;

            z-index:40;
            width: 150px;
            height: 130px;
            border:solid #B24700 3px;
            background-color:#CC8252;


        }

        #info:hover{
            opacity:0.6;

        }


        body{


            /*background-image:url('img/home.jpg');*/

            background-color:#cccccc;

        }


        #droppable {


            width: 100px;
            height: 150px;
            padding: 0.5em;
            margin: 10px;

        }

        #droppable1 {

            z-index:1;

            padding: 0.5em;
            float: left;
            margin: 10px;

        }


        #droppable2 {

            z-index:2;
            position:absolute;
            left:870px;
            top:100px;
            z-index:2;
            width: 150px;
            height: 200px;
            padding: 0.5em;
            float: left;
            margin: 10px;

        }


        .mutti{
            width:80px;
            height:130px;

        }

        .polu{
            width:150px;
            height:200px;
        }


        #panel{
            position:relative;
            z-index:900;
            background-color:#000014;
            display:none;
            color:white;
            width:relative;
            height:150px;
            padding:20px;



        }


        #result{

            position:relative;
            z-index:2000;
            background-color:#3333CC;
            display:none;
            color:white;
            width:relative;
            height:150px;
            padding:20px;




        }

        /* newEdit */

        #cover{


            z-index:500;
            position:absolute;
            width:1350px;
            height:610px;
            background-color:#FFFFFF;


        }

        #mark_board{

            width:80%;


        }

        .pad{

            width:inherit;



        }

        .mutti{postion:relative;top:50px;}
        .mutti:hover{opacity:0.7;}






    </style>
</head>
<body>

<div class="container">
    <div class="jumbotron" style="color:black;background-image:url('img/coverNew2.jpg');">
        <div class="row" >
            <div class="col-sm-9">
                <h1>කණා මුට්ටි </h1>
                <p>කණා මුට්ටි  ගැසීමට PLAY බොත්තම ඔබන්න </p>

            </div>
            <div class="col-sm-3" > <br><br>
                <a class="btn btn-primary btn-lg" style="width:200px;" id="btn" href="#panel-title" role="button"><b>PLAY</b></a>

                <p style="background-color:white;width:80px;padding:3px"><a href="#footer">[උපදෙස්] </a></p>
            </div>

        </div>

        <div class="row" >
            <img style="display:none;position:absolute;;z-index:1000" class="logo" src="img/mouse.png" alt="mouse">
        </div>
    </div>

    <div class="row" >

        <div class="col-sm-3">
            <div class="panel panel-warning" >
                <div class="panel-heading">
                    <h3 id="panel-title" class="panel-title">ඉතිරි කාලය<a class="anchorjs-link" href="#panel-title"><span class="anchorjs-icon"></span></a></h3>
                </div>

                <div class="panel-body">
                    <h2 align="center">කාලය :<span id="count" class="label label-danger">10</span></h2>
                </div>

            </div>
        </div>

        <div class="col-sm-1">
        </div>


        <div class="col-sm-3">
            <div class="panel panel-info" >
                <div class="panel-heading">
                    <h3 id="panel-title" class="panel-title">නිවේදන <a class="anchorjs-link" href="#panel-title"><span class="anchorjs-icon"></span></a></h3>
                </div>

                <div class="panel-body">

                    <div id="info1" >
                        <div class="alert alert-success"  role="alert">  ආරම්භ කිරීමට  <b>PLAY</b> Click කරන්න . </div>
                    </div>

                    <div id="info2" style="display:none;" >
                        <div   class="alert alert-success"  role="alert"><b> කාලය අවන්සන් වෙන්ට පෙර 3 වරක් Click කරන්න  </b></div></div>

                    <div id="info3" style="display:none;" >
                        <div   class="alert alert-success"  role="alert"><b>  වෑයම අසාර්ථකයි ... </b> </div>
                    </div>

                    <div id="info4" style="display:none;" >
                        <div   class="alert alert-info"  role="alert"><b>  එක් වෑයමක් සාර්ථකයි </b></div>
                    </div>

                    <div id="info5" style="display:none;" >
                        <div   class="alert alert-info"  role="alert"> <b>ඔබේ වෑයම් තුනම සාර්ථකයි .. අඩුම කාලෙකින් සම්පුර්ණ කල කෙනා ජයග්‍රාහකයා වෙයි .</b></div>
                    </div>

                    <div id="info6" style="display:none;" >
                        <div   class="alert alert-info"  role="alert"><b> ම් ....  කණගාටුයි , දිනුම ඔබෙන් ගිලිහී ගියා ,  කණාමුට්ටි ගැසුවාට ඔබට ස්තුතියි ! </b></div>
                    </div>


                </div>
            </div>

        </div>



        <div class="col-sm-1">
        </div>




        <div class="col-sm-4">
            <div class="panel panel-primary" >
                <div class="panel-heading">
                    <h3 id="panel-title" class="panel-title">උත්සාහ කිරීම් <a class="anchorjs-link" href="#panel-title"><span class="anchorjs-icon"></span></a></h3>
                </div>

                <div class="panel-body">
                    <h2 align="center">

                        <span id="attempt1" class="label label-success">1</span>&nbsp;
                        <span id="attempt2" class="label label-success">2</span>&nbsp;
                        <span id="attempt3" class="label label-success">3</span>&nbsp;
                        <span id="attempt4" class="label label-success">4</span>&nbsp;
                        <span id="attempt5" class="label label-success">5</span>

                    </h2>
                </div>

            </div>
        </div>





    </div>

    <div class="panel panel-default">
        <div class="panel-body">
            <div id="panel" class="row" >

                <div class="col-sm-12">

                    <table border="0"  style=" width:100%;color:white; border:2px white solid;">

                        <tr>

                            <td id='1'>&nbsp;</td>
                            <td id='2'>&nbsp;</td>
                            <td id='3'>&nbsp;</td>
                            <td id='4'>&nbsp;</td>
                            <td id='5'>&nbsp;</td>
                            <td id='6'>&nbsp;</td>
                            <td id='7'>&nbsp;</td>
                            <td id='8'>&nbsp;</td>
                            <td id='9'>&nbsp;</td>
                            <td id='10'>&nbsp;</td>
                        </tr>

                        <tr>
                            <td id='11'>&nbsp;</td>
                            <td id='12'>&nbsp;</td>
                            <td id='13'>&nbsp;</td>
                            <td id='14'>&nbsp;</td>
                            <td id='15'>&nbsp;</td>
                            <td id='16'>&nbsp;</td>
                            <td id='17'>&nbsp;</td>
                            <td id='18'>&nbsp;</td>
                            <td id='19'>&nbsp;</td>
                            <td id='20'>&nbsp;</td>
                        </tr>

                        <tr>
                            <td id='21'>&nbsp;</td>
                            <td id='22'>&nbsp;</td>
                            <td id='23'>&nbsp;</td>
                            <td id='24'>&nbsp;</td>
                            <td id='25'>&nbsp;</td>
                            <td id='26'>&nbsp;</td>
                            <td id='27'>&nbsp;</td>
                            <td id='28'>&nbsp;</td>
                            <td id='29'>&nbsp;</td>
                            <td id='30'>&nbsp;</td>
                        </tr>

                        <tr>
                            <td id='31'>&nbsp;</td>
                            <td id='32'>&nbsp;</td>
                            <td id='33'>&nbsp;</td>
                            <td id='34'>&nbsp;</td>
                            <td id='35'>&nbsp;</td>
                            <td id='36'>&nbsp;</td>
                            <td id='37'>&nbsp;</td>
                            <td id='38'>&nbsp;</td>
                            <td id='39'>&nbsp;</td>
                            <td id='40'>&nbsp;</td>
                        </tr>

                        <tr>
                            <td id='41'>&nbsp;</td>
                            <td id='42'>&nbsp;</td>
                            <td id='43'>&nbsp;</td>
                            <td id='44'>&nbsp;</td>
                            <td id='45'>&nbsp;</td>
                            <td id='46'>&nbsp;</td>
                            <td id='47'>&nbsp;</td>
                            <td id='48'>&nbsp;</td>
                            <td id='49'>&nbsp;</td>
                            <td id='50'>&nbsp;</td>
                        </tr>

                        <tr>
                            <td id='51'>&nbsp;</td>
                            <td id='52'>&nbsp;</td>
                            <td id='53'>&nbsp;</td>
                            <td id='54'>&nbsp;</td>
                            <td id='55'>&nbsp;</td>
                            <td id='56'>&nbsp;</td>
                            <td id='57'>&nbsp;</td>
                            <td id='58'>&nbsp;</td>
                            <td id='59'>&nbsp;</td>
                            <td id='60'>&nbsp;</td>

                        </tr>





                    </table>




                </div>

            </div>

            <div id="result" class="row" >

                <h2 align="center" > </h2>

            </div>


            <div class="row"  id="panel2" style="color:black;background-image:url('img/mainCover1.jpg');" >
                <div class="col-sm-1">
                    <div id="droppable" class="ui-widget-header">
                        <img class="mutti" src="img/mutti.png" alt="mutti" id="mutti1"/>
                        <h2 align="center" > </h2>
                    </div>
                </div>
                <div class="col-sm-1">
                    <div id="droppable" class="ui-widget-header">
                        <img class="mutti" src="img/mutti.png" alt="mutti" id="mutti2"/>
                        <h2 align="center" ></h2>
                    </div>
                </div>
                <div class="col-sm-1">
                    <div id="droppable" class="ui-widget-header">
                        <img class="mutti" src="img/mutti.png" alt="mutti" id="mutti3"/>
                        <h2 align="center" ></h2>
                    </div>
                </div>
                <div class="col-sm-1">
                    <div id="droppable" class="ui-widget-header">
                        <img class="mutti" src="img/mutti.png" alt="mutti" id="mutti4"/>
                        <h2 align="center" ></h2>
                    </div>
                </div>
                <div class="col-sm-1">
                    <div id="droppable" class="ui-widget-header">
                        <img class="mutti" src="img/mutti.png" alt="mutti" id="mutti5"/>
                        <h2 align="center" ></h2>
                    </div>
                </div>
                <div class="col-sm-1">
                    <div id="droppable" class="ui-widget-header">
                        <img class="mutti" src="img/mutti.png" alt="mutti" id="mutti6"/>
                        <h2 align="center" ></h2>
                    </div>
                </div>
                <div class="col-sm-1">
                    <div id="droppable" class="ui-widget-header">
                        <img class="mutti" src="img/mutti.png" alt="mutti" id="mutti7"/>
                        <h2 align="center" ></h2>
                    </div>
                </div>
                <div class="col-sm-1">
                    <div id="droppable" class="ui-widget-header">
                        <img class="mutti" src="img/mutti.png" alt="mutti" id="mutti8"/>
                        <h2 align="center" ></h2>
                    </div>
                </div>
                <div class="col-sm-1">
                    <div id="droppable" class="ui-widget-header">
                        <img class="mutti" src="img/mutti.png" alt="mutti" id="mutti9"/>
                        <h2 align="center" ></h2>
                    </div>
                </div>
                <div class="col-sm-1">
                    <div id="droppable" class="ui-widget-header">
                        <img class="mutti" src="img/mutti.png" alt="mutti" id="mutti10"/>
                        <h2 align="center" ></h2>
                    </div>
                </div>
                <div class="col-sm-1">
                    <div id="droppable" class="ui-widget-header">
                        <img class="mutti" src="img/mutti.png" alt="mutti" id="mutti11"/>
                        <h2 align="center" ></h2>
                    </div>
                </div>



            </div>
        </div>
    </div>








    <div class="jumbotron" id="footer" style="color:#000A29;background-image:url('img/footer.jpg');">
        <div class="row" >
            <div class="col-sm-9">
                <h3><b>කණා මුට්ටි</b> </h3>
                <p> PLAY බොත්තම එබීමෙන් පසු මතුවන  කළු පාට තිරයේ  නොපෙනෙන විශේෂ මුට්ටි 3ක් තිබේ .
                    තත්පර 10ක් ඇතුලත අවස්ථා 5ක් යොදාගෙන එම මුට්ටි තුන  අඩුම කාලෙකින් සොයන තැනැත්තා ජයග්‍රාහකයා වේ . කාලය කොටුව තුලින් කාලයද , නිවේදන  කොටුව තුලින් දැන්වීම් ද  , උත්සහ කිරීම් කොටුවෙන් ඔබට ඇති අවස්ථා ගණන නිරූපණය කෙරේ </p>
            </div>


        </div>
    </div>










</div>
<script src="js/jquery.min.js"></script>

<script>


    var clickCount=4;
    var y=0;



    $(document).ready(function(){


        var rnd1=rndGen();
        var rnd2=rndGen();
        var rnd3=rndGen();


        //use below for testing; ////////////////////////////

        /*var rnd1=1;
         var rnd2=2;
         var rnd3=3;*/

        ////////////////////////////////////////////////////



        var x=0;

        $('#btn').click(function(e) {


            //show hides;
            $('.logo').show();
            $('#info1').hide();
            $('#info2').show();


            //main panels Slide
            $("#panel").slideDown(1000);
            $("#panel2").slideUp(500);
            myFunction();    /*Timer*/



            x=1;




            //alert(rnd1+" "+rnd2+" "+rnd3);


        });






        //var clickCount=3;
        var successCount=1;
        $("td").click(function(){

            //Main Check whether Win or loose;



            //attempt board;
            if(clickCount==4){


                $("#attempt1").removeClass("label label-success");
                $("#attempt1").addClass("label label-danger");
                clickCount--;
            }
            else
            if(clickCount==3){

                $("#attempt2").removeClass("label label-success");
                $("#attempt2").addClass("label label-danger");

                clickCount--;
            }
            else
            if(clickCount==2){

                $("#attempt3").removeClass("label label-success");
                $("#attempt3").addClass("label label-danger");

                clickCount--;
            }else
            if(clickCount==1){

                $("#attempt4").removeClass("label label-success");
                $("#attempt4").addClass("label label-danger");

                clickCount--;
            }else
            if(clickCount==0 ||successCount!=0 ){

                $("#attempt5").removeClass("label label-success");
                $("#attempt5").addClass("label label-danger");


                $.post('http://'+window.location.host+'/kana-mutti-post', {time: y, userID: "id HEre", attempts:  clickCount},
                        function (returnedData) {
                            window.close();
                        });


                $("#result").slideDown(1000).html("<h3 align='center'> කණගාටුයි ,  දිනුම ඔබෙන් ගිලිහී ගියා ,  කණාමුට්ටි ගැසුවාට ඔබට ස්තුතියි !  </h3>");

                $('.logo').hide();
                y=0;





            }






            //attempt board end;



            if(successCount>2){

                /*

                 //////////////////////////////

                 AJAX REQUEST

                 ///////////////////////////////





                 */

                $.post('http://'+window.location.host+'/kana-mutti-post', {time: y, userID: "id HEre", attempts:  clickCount},
                        function (returnedData) {
                            window.close();
                        });




                /*Target completed within*/
                $('#info1').hide();
                $('#info2').hide();
                $('#info3').hide();
                $('#info4').hide();
                $('#info5').show();
                $("#result").slideDown(1000).html("<h3 align='center'>ඔබේ වෑයම් තුනම සාර්ථකයි .. අඩුම කාලෙකින් සම්පුර්ණ කල කෙනා ජයග්‍රාහකයා වේ . </h3>");


            }

            else if( $(this).attr("id")==rnd1 || $(this).attr("id")==rnd2 || $(this).attr("id")==rnd3 ){

                successCount++;

                $('#info1').hide();
                $('#info2').hide();
                $('#info3').hide();
                $('#info5').hide();
                $('#info4').show();





            }

            else if( $(this).attr("id")!=rnd1 || $(this).attr("id")!=rnd2 || $(this).attr("id")!=rnd3 ){


                $('#info1').hide();
                $('#info2').hide();
                $('#info4').hide();
                $('#info5').hide();
                $('#info3').show();





            }












        });



        $(".mutti").mouseover(function(){

            $(this).toggle("pulsate");
            $(this).toggle("pulsate");


        });




    });


    $(document).mousemove(function(e) {




        $('.logo').offset({
            left: e.pageX+10,
            top: e.pageY-20
        });



    });

</script>

<script>

    //var y=10;

    y=10;

    function myFunction() {

        setInterval(function(){

            if(y>0){$('#count').html("0"+--y)}else if(y==0){

                /*Thnx for playn*/
                $('#info1').hide();
                $('#info2').hide();
                $('#info3').hide();
                $('#info4').hide();
                $('#info5').hide();
                $('#info6').show();

                $('.logo').hide();
                $('#panel').hide();
                $('#panel2').hide();

            };


        }, 1000);

    }



    function rndGen() {

        var d=0;
        var y2=0;

        while(d!=1)
        {

            y2=Math.floor((Math.random() * 100) + 1);
            if(y2<60){
                d=1;

            }

        }
        //$('#count').val(y);

        return y2;

    }
</script>

</body>
</html>
