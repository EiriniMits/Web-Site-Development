<?php require_once 'config.php';?>
<!DOCTYPE html>
<html>
<head>
<title>QUIZ - ARIANA GRANDE</title>
<link rel="shortcut icon" href="images/favicon.ico">
<meta charset='utf-8'>
<link rel='stylesheet' href="css/quizstyle.css">
</head>

<body style="background-image:url(http://data.whicdn.com/images/49133760/original.jpg);">
<h1>Ariana Grande Quiz</h1>

<?php 
$dbname = "quiz1"; 
$dbhost = "webpagesdb.it.auth.gr";
$dbuser = "emitsopou1";
$dbpass = "emitsopou1";
$counter = 1;
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname) or die("cannot connect");
$response=mysqli_query($conn,"select * from questions order by RAND()");?>

<form method='post' id='quiz_form'>
<?php while($result=mysqli_fetch_array($response)){ ?>
<div id="question_<?php echo $counter;?>" class="questions">
<h2 id="question_<?php echo $counter;?>"><?php echo $counter.".".$result['question_name'];?></h2>
<div class='align'>
<input type="radio" value="1" id='radio1_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'>
<label class='card-cc radio1_<?php echo $result['id'];?>; id='img1_<?php echo $result['id'];?>' for='radio1_<?php echo $result['id'];?>'><img src="<?php echo $result['image1'];?>" alt=""></img></label>

<input type="radio" value="2" id='radio2_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'>
<label class='card-cc radio2_<?php echo $result['id'];?>' id='ans2_<?php echo $result['id'];?>' for='radio2_<?php echo $result['id'];?>'><img src="<?php echo $result['image2'];?>" alt=""></img></label>

<input type="radio" value="3" id='radio3_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'>
<label class='card-cc radio3_<?php echo $result['id'];?>' id='ans3_<?php echo $result['id'];?>' for='radio3_<?php echo $result['id'];?>'><img src="<?php echo $result['image3'];?>" alt=""></img></label>

<input type="radio" value="4" id='radio4_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'>
<label class='card-cc radio4_<?php echo $result['id'];?>' id='ans4_<?php echo $result['id'];?>' for='radio4_<?php echo $result['id'];?>'><img src="<?php echo $result['image4'];?>" alt=""></img></label>

<input type="radio" checked='checked' value="5" style='display:none' id='radio4_<?php echo $result['id'];?>' name='<?php echo $result['id'];?>'>
</div>
<br/>
<input type="button" id='next<?php echo $counter;?>' value='Next' name='question' class='butt'/>
</div>
<?php $counter++; }?>
</form>
<div id='result'>
<img src='pictures/results.png' alt='Results'/>
<br/>
</div>

<script src="js/jquery-1.9.1.min.js"></script>
<script>
$(document).ready(function(){
	var steps = $('form').find(".questions");
	var count = steps.size();
	steps.each(function(i){
		hider=i+2;
		if (i == 0) { 	
    		$("#question_" + hider).hide();
    		createNextButton(i);
        }
		else if(count==i+1){
			var step=i + 1;
			//$("#next"+step).attr('type','submit');
            $("#next"+step).on('click',function(){
			
			   submit();
                
            });
	    }
		else{
			$("#question_" + hider).hide();
			createNextButton(i);
		}
		
	});
    function submit(){
	     $.ajax({
						type: "POST",
						url: "ajax.php",
						data: $('form').serialize(),
						success: function(msg) {
						  $("#quiz_form,#demo1").addClass("hide");
						  $('#result').show();
						  $('#result').append(msg);
						}
	     });
	
	}
	function createNextButton(i){
		var step = i + 1;
		var step1 = i + 2;
        $('#next'+step).on('click',function(){
        	$("#question_" + step).hide();
        	$("#question_" + step1).show();
        });
	}



});
</script>
</body>
</html>