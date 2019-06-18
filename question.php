<?php include "database.php"; ?>
<?php session_start(); ?>
<?php
	//Set question number
	$number = (int) $_GET['n'];

	//Get total number of questions
	$query = "select * from questions";
	$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$total=$results->num_rows;

	// Get Question
	$query = "select * from `questions` where question_number = $number";

	//Get result
	$result = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$question = $result->fetch_assoc();


	// Get Choices
	$query = "select * from `choices` where question_number = $number";

	//Get results
	$choices = $mysqli->query($query) or die($mysqli->error.__LINE__);

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Game of Groans</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" />
  </head>
  <body>
    <div id="container">
      <header>
				<div class="col-lg-6 mt-2">
        	<h2 class="bg-success text-white p-2">Game of Groans - Rock Trivia</h2>
        	<!-- <div id = "img" class = "studentpic rounded mx-auto d-block"></div> -->
    </div>
      </header>


		<main>
      <div class="container">
        <div class="current">Question <?php echo $number; ?> of <?php echo $total; ?></div>
				<p class="question">
	   			<?php echo $question['question'] ?>
				</p>
			<form method="post" action="process.php">
	      <ul class="choices">
	        <?php while($row=$choices->fetch_assoc()): ?>
				<li><input name="choice" type="radio" value="<?php echo $row['id']; ?>" />
		  		<?php echo $row['choice']; ?>
				</li>
		<?php endwhile; ?>
	      </ul>
	      <input type="submit" value="submit" />
	      <input type="hidden" name="number" value="<?php echo $number; ?>" />
	</form>
      </div>
    </div>
    </main>


    <footer>
      <div class="container">
				Copyright &copy; 2019 Scott Altom Web Design Limited
      </div>
    </footer>
  </body>
</html>