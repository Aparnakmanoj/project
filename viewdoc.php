<html>
    <head>
        
    </head>

<form action="POST" METHOD="">
<table>
    <tr>
    <th>
    file</th>
    <th>action</th>
</tr>
    <body>
    <?php
    include "connect.php";
    $sml= mysqli_query($conn,"select * from image where studid='68'");
        
         while($row1=mysqli_fetch_assoc($sml))
                          {
             
    ?>
        <tr>
            
             
            <td><?php echo $row1['file']; ?></td>
            <td>
                <a href="download.php?id=<?php echo $row1['imid'];?>">Download</a>
                               
                            </td>
        </tr> 
    </body>
    <?php
         }
        ?>
    </table>
    </form>
</html>