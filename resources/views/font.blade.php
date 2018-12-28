<html>
<head>
      <link href="css/font-awesome.min.css" rel="stylesheet">
       <style>
        .first{background-color: red}
        .last{background-color: green}
    </style>
    <script src="/js/jquery.js"></script>
    
    <script>
        $(document).ready(function(){
        
            $("#bt").click(                 
                function(){
                    $("#timer").text("sdfsdf");
                    //$("#timer2").load("/1.php"); 
                    $.ajax("/time").done(function(data){$("#timer2").html(data).css("background-color", "yellow");})
                    }                 
                   );                        
        });
    </script>
</head>
<body>
    <li><a href=""><i>+2 95 01 88 821 мама мыла раму werta4</i></a></li>
    <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
    
    <button id="bt">push me</button>

        <div id="container">
            <div id="timer" class="first">TODO write content</div>
            <div id="timer2" class="last">TODO write content</div>
            <div id="timer2" class="last2"><b>TODO write content</b></div>
        </div>
    <b>{{ date("h:i:s") }}</b>
    </br></br></br></br>
        
    
    <?php
        //$flights = \App\category::all();
        foreach ($flights as $flight) {
            echo $flight->EnglishProductCategoryName;                        
            echo '<br/>';
            };
        echo '<br/>';echo '<br/>';echo '<br/>';                  
     ?>

</body>
</html>

