<!DOCTYPE html>
<html> 
<head>
    <title>Memory Game</title>
        <meta charset="utf-8"/>
        
    <style>
        @import url("styles.css");
    </style>
</head>
<header>
    <section id="board"></section>
            
    <h1 id="title">Welcome to the Memory Game</h1>
    
</header>
    <body>
        <div id="main">
            <?php
                include 'inc/functions.php';
            ?>
        <table id="cards" border="0">
            <tr>
                <td class="down"></td>
                <td class="down"></td>
                <td class="down"></td>
                <td class="down"></td>
            </tr>
            <tr>
                <td class="down"></td>
                <td class="down"></td>
                <td class="down"></td>
                <td class="down"></td>
            </tr>
            <tr>
                <td class="down"></td>
                <td class="down"></td>
                <td class="down"></td>
                <td class="down"></td>
            </tr>
            <tr>
                <!-- d -->
                <td class="down"></td>
                <td class="down"></td>
                <td class="down"></td>
                <td class="down"></td>
            </tr>
        </table>
        <form>
            <input type="submit" value="newGame!"/>
        </form>
        </div>
    </body>

 </html>