<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;
background-color: #a9a9a9}

input[type=text], select, textarea, input[type=time] {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: violet;
    margin:50px 300px 50px 300px ;
    padding: 20px;
}
#button {
    background-color: #008CBA; /* Green */
    border: none;
    color: white;
    width:10%;
    padding: 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius: 6px;
}
</style>
</head>
<body>

<h3>Add your Appointments here!</h3>

<div class="container">
  <form name="eventform" action="<?php $_SERVER['PHP_SELF']; ?>?month=<?php echo $month;?>&day=<?php echo $day; ?>&year=<?php echo $year; ?>&v=true&add=true">
    <label for="title">Title</label>
    <input type="text" id="title" name="title" placeholder="Your event name..">
    <label for="description">Description</label>
    <textarea id="description" name="description" placeholder="Write something.." style="height:200px"></textarea>

    <label for="stime">Start time</label>
    <input type="time" id="stime" name="stime"><br>
    <label for="etime">End time</label>
    <input type="time" id="etime" name="etime"><br>
 
    

   

    <input type="submit" id="button" value="Add">
  </form>
</div>

</body>
</html>
