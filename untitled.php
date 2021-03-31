
<html>
<head>

  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
  
<!--
  <script>
  $( function() {
    $( "#sortable1" ).sortable({
      connectWith: ".connectedSortable"
    });
  } );
  </script>
-->
  
  
  
</head>
<body>
 
<ul id="sortable1" class="connectedSortable">
  <li class="ui-state-default">Item 1</li>
  <li class="ui-state-default">Item 2</li>
  <li class="ui-state-default">Item 3</li>
  <li class="ui-state-default">Item 4</li>

</ul>


 

 
</body>
</html>





<?php 

$menu = array(1=>"menu1",2=>"menu2",3=>"menu3",4=>"menu4");

asort($menu);

foreach($menu as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>









































