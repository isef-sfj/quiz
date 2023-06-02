<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <script language="javascript" type="text/javascript">

    function sendid() {
    var element = document.getElementById('idSelect');
    var id = element.options[element.selectedIndex].value;
    window.location.href = "editQuestion.php?id=" + id;
}

    </script>
    <title>ISEF-Quiz</title>
</head>
<body>

<?php
   
    include ('dbConnection.php');

    $query = "select * from quizfragen";
    $datafromdb = $pdo->query($query);

?>

        
        <header id="header">
          
                <h1>ISEF-Duell</h1>
                
            
        </header>

        
                <h2>Bitte wähle eine ID aus</h2>

        
    
    
        
        
        <div >

                    
                    <select id="idSelect">
                        <?php foreach($datafromdb as $data) { ?>
                            <option name="id" id="id" value="<?php echo $data['id']; ?>"><?php echo $data['id']; ?></option>
                        <?php } ?>
                    </select>

                    

        </div>


        


        
        <div class="flexContainerEQQuestionItemButton">
            <button onClick="sendid()">Frage bearbeiten</button>
        </div>
        <br><br>
        
    

    <section id="arrowBox">
            <a href="/index.php" ><img src="/img/arrowLeft.png" alt="" class="arrow"></a>
            <!-- Damit der Zurück-Pfeil auch ohne Weiter-Pfeil
            immer an der gleichen Stelle ist habe ich einen leeren
            Platzhalter eingefügt. JFL-->
            <div class="arrowPlaceholder"></div> 
        </section>

</body>
</html>