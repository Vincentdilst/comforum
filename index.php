<?php
//create_cat.php
include 'connect.php';
include 'header.php';
 
$sql = "SELECT * FROM
            forum_categories";
 
$result = mysql_query($sql);
 
if(!$result)
{
    echo 'The categories could not be displayed, please try again later.';
}
else
{
    if(mysql_num_rows($result) == 0)
    {
        echo 'No categories defined yet.';
    }
    else
    {
        //prepare the table
        echo '<table border="1">
              <tr>
                <th>Category</th>
                <th>Last topic</th>
              </tr>'; 
             
        while($row = mysql_fetch_assoc($result))
        {               
            echo '<tr>';
                echo '<td class="leftpart">';
                    echo "<h3><a href=category.php?id=" . $row['cat_id'] . ">" . $row['cat_name'] ." </a></h3>";
                echo '</td>';
                echo '<td class="rightpart">';
                            echo '<a href="topic.php?id=" ."Topic subject</a>';
                echo '</td>';
            echo '</tr>';
        }
    }
}
 
include 'footer.php';
?>