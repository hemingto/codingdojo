<?php 

?>

<html>

<head>

</head>

<body>

<style>

#container {
	margin: 10% auto;
	border:2px solid orange;
	height:400px;
	border-radius: 2%;
	width:600px;
	background-color: #ffdb99;
}

#name, #location, #comment, #language, p {
	margin:10px auto;
	padding:5px;
}

p {
	display: inline-block;
	vertical-align: top;
	width:200px;
}

div {
}

#name {
	margin-top:15px;
}

#submit {
	margin-left:535px;
	background-color: orange;
	outline: none;
	padding:5px;
	border:solid black 1px;
	border-radius: 2px;

}

</style>

</body>
	<div id="container">
    <form action="result.php" method="post">
    	<div>
        <p>NAME:</p>
        <input id="name" type="text" name="name" >
        </div>
        <div>
    	<p>LOCATION:</p>
    	<select id="location" name="location">
       		<option value="San Jose">San Jose</option>
            <option value="Seattle">Seattle</option>
            <option value="Austin">Austin</option>
            <option value="Remote">Remote</option>
       	</select>
       </div>
       <div>
       	<p>LANGUAGE:</p>
       	<select id="language" name="language">
           <option value="Javascript">Javascript</option>
           <option value="CSS">CSS</option>
           <option value="HTML">HTML</option>
           <option value="PHP">PHP</option>
       	</select>
       	</div>
       	<div>
       	<p>LEAVE A COMMENT:</p>
       	<textarea id="comment" name="comment" rows="10" cols="50"></textarea>
       	</div>
       	<input id="submit" type="submit" value="Submit">
    </form>
    </div>



</html>