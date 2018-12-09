<?php

// Connect to the database
try {
  $dbname = 'bookdaddy';
  $user = 'root';
  $pass = 'rodeo900Japan';
  $connect = new PDO('mysql:host=127.0.0.1;dbname='.$dbname, $user, $pass);
}
catch (Exception $e) {
  echo "Error: " . $e->getMessage();
}

$trails = $connect->prepare('INSERT INTO trails(name, difficulty, accuracy) VALUES(:name, :difficulty, :accuracy, :trail)');

$trails->execute(
	[
		'name' => 'Bear\'s Crossing',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Beaver Hill',
		'difficulty' => '2',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Canyon',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Cascade',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Charlie\'s Chase',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Choke',
		'difficulty' => '3',
		'accuracy' => '',		
	]
);

$trails->execute(
	[
		'name' => 'Committed',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Cooper\'s Junction',
		'difficulty' => '2',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Cut-Off',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Deer Run',
		'difficulty' => '2',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Drifter',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Drop',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Ego Alley',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'High Traverse',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Hop',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Illusion',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Launch Pad',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Ledge',
		'difficulty' => '4',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Link',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Little John',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Lodge',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Long John',
		'difficulty' => '2',
		'accuracy' => '4',		
	]
);

$trails->execute(
	[
		'name' => 'Low Traverse',
		'difficulty' => '2',
		'accuracy' => '4',		
	]
);

$trails->execute(
	[
		'name' => 'Lower Exhibition',
		'difficulty' => '2',
		'accuracy' => '4',		
	]
);

$trails->execute(
	[
		'name' => 'N.E. Time',
		'difficulty' => '2',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'One More Time',
		'difficulty' => '3',
		'accuracy' => '4',		
	]
);

$trails->execute(
	[
		'name' => 'Overbrook',
		'difficulty' => '3',
		'accuracy' => '2',		
	]
);

$trails->execute(
	[
		'name' => 'Pat\'s Pitch',
		'difficulty' => '4',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Ridge',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Roller Coaster',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Sap Bucket',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Season\'s Pass',
		'difficulty' => '2',
		'accuracy' => '4',		
	]
);

$trails->execute(
	[
		'name' => 'Shootout',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Short Fuse',
		'difficulty' => '3',
		'accuracy' => '4',		
	]
);

$trails->execute(
	[
		'name' => 'Snowdance',
		'difficulty' => '2',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Snowdance Pitch',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Somerset Road',
		'difficulty' => '2',
		'accuracy' => '4',		
	]
);

$trails->execute(
	[
		'name' => 'South Bowl',
		'difficulty' => '3',
		'accuracy' => '4',		
	]
);

$trails->execute(
	[
		'name' => 'Sweet Sixteen',
		'difficulty' => '2',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Switchback',
		'difficulty' => '2',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Tin Lizzy',
		'difficulty' => '2',
		'accuracy' => '4',		
	]
);

$trails->execute(
	[
		'name' => 'Tramline',
		'difficulty' => '3',
		'accuracy' => '2',		
	]
);

$trails->execute(
	[
		'name' => 'Uncles',
		'difficulty' => '3',
		'accuracy' => '2',		
	]
);

$trails->execute(
	[
		'name' => 'Under Pressure',
		'difficulty' => '3',
		'accuracy' => '3',		
	]
);

$trails->execute(
	[
		'name' => 'Upper Exhibition',
		'difficulty' => '3',
		'accuracy' => '4',		
	]
);

$trails->execute(
	[
		'name' => 'Yard Sale',
		'difficulty' => '4',
		'accuracy' => '4',		
	]
);

$trails->execute(
	[
		'name' => 'Boulder Pile',
		'difficulty' => '4',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Challenger',
		'difficulty' => '4',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Chute',
		'difficulty' => '4',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Fallen Timbers',
		'difficulty' => '4',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Free Fall',
		'difficulty' => '4',
		'accuracy' => '5',		
	]
);


$trails->execute(
	[
		'name' => 'Jaws',
		'difficulty' => '4',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Little Steep',
		'difficulty' => '4',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Olympic',
		'difficulty' => '4',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'PDF',
		'difficulty' => '4',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Plummet',
		'difficulty' => '4',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Ripcord',
		'difficulty' => '5',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'River Run',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Second Thoughts',
		'difficulty' => '3',
		'accuracy' => '4',		
	]
);

$trails->execute(
	[
		'name' => 'Skyline',
		'difficulty' => '3',
		'accuracy' => '4',		
	]
);

$trails->execute(
	[
		'name' => 'Bear Trap',
		'difficulty' => '4',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Big Dipper',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Cloud Nine',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Little Dipper',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Milky Way',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Moonbeam',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Moonwalk',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'One Small Step',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Shooting Star',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Sunspot',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Thanks Walt',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Grommet',
		'difficulty' => '2',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Inferno',
		'difficulty' => '5',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Iron Run',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Junkyard',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Mineshaft',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Narrow Gauge',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Nitro',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Prospector',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'Rusty Nail',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'The Farm',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$trails->execute(
	[
		'name' => 'The Gulch',
		'difficulty' => '3',
		'accuracy' => '5',		
	]
);

$feature = $connect->prepare('INSERT INTO features(latitude, longitude, type, lip, urban, trail) VALUES(:latitude, :longitude, :type, :lip, :urban, :trail)');

$feature->execute(
	[
		'latitude' => '42.9528167',
		'longitude' => '-72.9074707',
		'type' => 'SidePill Lip to DownPill',
		'lip' => '1',
		'urban' => '0',
		'trail' => 'Nitro' 
	]
);

$feature->execute(
	[
		'latitude' => '42.95293606',
		'longitude' => '-72.90649223',
		'type' => 'UpDown Rail Transfer to DownRail',
		'lip' => '1',
		'urban' => '1', 
		'trail' => 'Nitro'
	]
);

$feature->execute(
	[
		'latitude' => '42.95899168',
		'longitude' => '-72.89778042',
		'type' => 'Down Box',
		'lip' => '1',
		'urban' => '0', 
		'trail' => 'The Gulch'
	]
);

$feature->execute(
	[
		'latitude' => '42.95883464',
		'longitude' => '-72.9010849',
		'type' => 'FlatDown Rail',
		'lip' => '1',
		'urban' => '1', 
		'trail' => 'The Gulch',
	]
);

$feature->execute(
	[
		'latitude' => '',
		'longitude' => '',
		'type' => 'Waterfall Rail',
		'lip' => '0',
		'urban' => '1', 
		'trail' => 'The Gulch',
	]
);

$feature->execute(
	[
		'latitude' => '42.95936856',
		'longitude' => '-72.9010849',
		'type' => 'Down Rail',
		'lip' => '1',
		'urban' => '0', 
		'trail' => 'The Gulch',
	]
);

$feature->execute(
	[
		'latitude' => '42.95918012',
		'longitude' => '-72.89790917',
		'type' => 'Dancefloor',
		'lip' => '1',
		'urban' => '0', 
		'trail' => 'The Gulch',
	]
);

$feature->execute(
	[
		'latitude' => '42.9595256',
		'longitude' => '-72.89679337',
		'type' => 'Down Box',
		'lip' => '1',
		'urban' => '0', 
		'trail' => 'The Gulch'
	]
);

$feature->execute(
	[
		'latitude' => '42.95939997',
		'longitude' => '-72.89610672',
		'type' => 'Down Box',
		'lip' => '1',
		'urban' => '0', 
		'trail' => 'The Gulch'
	]
);

$feature->execute(
	[
		'latitude' => '42.95968263',
		'longitude' => '-72.89550591',
		'type' => 'Donkey Dick Rail',
		'lip' => '1',
		'urban' => '0', 
		'trail' => 'The Gulch'
	]
);

$feature->execute(
	[
		'latitude' => '42.95977685',
		'longitude' => '-72.89460468',
		'type' => 'Flat Tube',
		'lip' => '1',
		'urban' => '0', 
		'trail' => 'The Gulch'
	]
);

$feature->execute(
	[
		'latitude' => '',
		'longitude' => '',
		'type' => 'DownFlatDown Rail',
		'lip' => '1',
		'urban' => '1', 
		'trail' => 'The Gulch'
	]
);

$feature->execute(
	[
		'latitude' => '42.95961982',
		'longitude' => '-72.89391804',
		'type' => 'Transfer Tube',
		'lip' => '1',
		'urban' => '1', 
		'trail' => 'The Gulch'
	]
);

$feature->execute(
	[
		'latitude' => '42.95949419',
		'longitude' => '-72.89250183',
		'type' => 'DownTube',
		'lip' => '1',
		'urban' => '1', 
		'trail' => 'The Gulch'
	]
);

$jump = $connect->prepare('INSERT INTO jumps(latitude, longitude, type, size) VALUES(:latitude, :longitude, :type, :size, :trail)');

$jump->execute(
	[
		'latitude' => '42.95259055',
		'longitude' => '-72.90790844',
		'type' => 'Kicker',
		'size' => '1',
		'trail' => 'Nitro',
	]
);

$jump->execute(
	[
		'latitude' => '42.95325017',
		'longitude' => '-72.9058485',
		'type' => 'Kicker',
		'size' => '10',
		'trail' => 'Nitro'
	]
);

$jump->execute(
	[
		'latitude' => '42.95347004',
		'longitude' => '-72.9055481',
		'type' => 'Nipple',
		'size' => '10',
		'trail' => 'Nitro'
	]
);

$jump->execute(
	[
		'latitude' => '42.9533444',
		'longitude' => '-72.90494728',
		'type' => 'Nipple',
		'size' => '10',
		'trail' => 'Nitro'
	]
);

$jump->execute(
	[
		'latitude' => '42.95375273',
		'longitude' => '-72.90365982',
		'type' => 'Nipple',
		'size' => '10',
		'trail' => 'Nitro'
	]
);


$jump->execute(
	[
		'latitude' => '42.95362709',
		'longitude' => '-72.90396023',
		'type' => 'Nipple',
		'size' => '10',
		'trail' => 'Nitro'
	]
);

$jump->execute(
	[
		'latitude' => '42.95409824',
		'longitude' => '-72.90329075',
		'type' => 'Kicker',
		'size' => '10',
		'trail' => 'Nitro'
	]
);

$jump->execute(
	[
		'latitude' => '42.9543181',
		'longitude' => '-72.90256119',
		'type' => 'Kicker',
		'size' => '15',
		'trail' => 'Nitro'
	]
);

$jump->execute(
	[
		'latitude' => '42.95460079',
		'longitude' => '-72.90187454',
		'type' => 'Kicker',
		'size' => '20',
		'trail' => 'Nitro'
	]
);

$jump->execute(
	[
		'latitude' => '42.95472643',
		'longitude' => '-72.9011879',
		'type' => 'Kicker',
		'size' => '30',
		'trail' => 'Nitro'
	]
);

$jump->execute(
	[
		'latitude' => '42.95971404',
		'longitude' => '-72.89280224',
		'type' => 'Kicker',
		'size' => '10',
		'trail' => 'The Gulch'
	]
);

$jump->execute(
	[
		'latitude' => '42.95933716',
		'longitude' => '-72.89786625',
		'type' => 'Kicker',
		'size' => '5',
		'trail' => 'The Gulch'
	]
);

?>