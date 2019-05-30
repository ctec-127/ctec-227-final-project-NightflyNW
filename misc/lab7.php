<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Joins PHP/MySQL Demo</title>
</head>
<body>
<p>Database Joins Using the Ideas Database</p>
<?php

function db_connection(){
	$db = new mysqli('localhost','root','','joins_demo');
	if ($db->connect_error) {
		$error = $db->connect_error;
		echo $error;
	}
	$db->set_charset('utf8');
	return $db;
}

function db_query($db,$sql){
	$result = $db->query($sql);
	$columns = $result->fetch_fields();
	echo '<table border=1>';
	echo "<tr>";
	foreach ($columns as $name) {
		echo "<th>" . $name->name . "</th>";
	}
	echo "</tr>";

	while ($row = $result->fetch_assoc()){
		echo "<tr>";
		foreach($row as $value) { 
			echo "<td>" . $value . "</td>";
		}
		echo "</tr>";
	}
	echo '</table>';
}


// connect to the database
$db = db_connection();

$sql = "SELECT * FROM idea";
$result = $db->query($sql);

while ($row = $result->fetch_assoc()) {

    $id = $row['idea_id'];

    echo "<h1>Here's Idea with idea_id of $id";

    $sql = "SELECT idea.title,category.category,idea.date,idea.description, user.first_name, user.last_name 
           FROM idea 
           JOIN user 
           ON idea.user_id = user.user_id 
           JOIN category 
           ON idea.category_id = category.category_id 
           WHERE idea.idea_id = $id";
    echo '<h2>Idea</h2>';
    db_query($db,$sql);
    
    
    // comments
    // $sql = 'SELECT * FROM comment WHERE idea_id=4';
    $sql = "SELECT comment.comment,comment.date,user.first_name,user.last_name 
            FROM comment
            JOIN user 
            ON comment.user_id = user.user_id 
            WHERE comment.idea_id = $id  
            ORDER BY comment.date ASC
           ";
    db_query($db,$sql);
    
    // likes
    $sql = "SELECT user.first_name,user.last_name
            FROM `like` AS `likes` 
            JOIN user 
            ON likes.user_id = user.user_id 
            WHERE likes.idea_id = $id
            ";
    
    db_query($db,$sql);
    
    // $sql = "select * from `like` where idea_id=4";
    // db_query($db,$sql);
    
    // tags
    $sql = "SELECT tag.tag 
            FROM idea_tag 
            JOIN tag 
            ON tag.tag_id = idea_tag.tag_id 
            WHERE idea_tag.idea_id = $id
            ";
    db_query($db,$sql);
    
    

}



?>
	
</body>
</html>