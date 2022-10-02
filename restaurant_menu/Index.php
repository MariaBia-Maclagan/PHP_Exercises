<?=
$drinks = [ "coffe" => 2.00, "tea"=> 3.99, "hot chocolate"=> 3.50];

$pastries = ["Croissant","Cupcake","Pie"];
?>
<h1>Welcome to the Repetitive Cafe</h1>

<h3>Drinks!</h3>
<ul>
<?php foreach($drinks as $drink=>$price):?>
<li><?="$drink: $$price"?></li>
<?php endforeach;?>
</ul>
<h3>Pastries! ($2 each)</h3>
<ul>
<?php for($i=0; $i<count($pastries); $i++):?>
<li><?=$pastries[$i]?></li>
<?php endfor;?>
</ul>