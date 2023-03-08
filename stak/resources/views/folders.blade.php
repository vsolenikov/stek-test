<html>
<head>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap" rel="stylesheet">
</head>
<body>

@include('header')

<div class="main-div">

    <?php

    function echotree(Array $strings){
        echo "<ul>";
        foreach ($strings as $key => $obj){
            if (is_array($obj)){
                echotree($obj);
            }
            else{
                if(!is_bool($obj)){
                    echo "<li>- ",$obj ;

                }
            }
            echo "</li>";
        }
        echo "</ul>";
    }
    echotree($strings);
    ?>


</div>
</body>
</html>
