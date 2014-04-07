<!DOCTYPE HTML>
<html>
	<head>
		<title>Test</title>

		<link type="text/css" rel="stylesheet" href="//datatables.net/download/build/nightly/jquery.dataTables.css?_=1c0eb9540e67f90cd07fa12f4da56554">
		<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.js"></script>
		<script type="text/javascript" src="//datatables.net/download/build/nightly/jquery.dataTables.min.js?_=898a29d5c2a3871243ceea4db156ac44"></script>
		<script type="text/javascript" src="../../jquery.datatables.customsearch.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				var rows = [];

				for (var i = 0; i < 2500; i++) {
					rows.push('<tr>');
					rows.push('<td>' + generateName() + '</td>');
					rows.push('<td>' + generateName() + '</td>');
					rows.push('<td>' + generateAge() + '</td>');
					rows.push('<td>' + generateDate() + '</td>');
					rows.push('<td>' + generateCurrency() + '</td>');
					rows.push('<td>' + generateBoolean() + '</td>');
					rows.push('<td>' + generateRace() + '</td>');
					rows.push('</tr>');
				}
				$('tbody').append(rows.join(''));


				var table = $('table').dataTable();

				new $.fn.dataTable.CustomSearch(table);


				function generateName() {
					var length = random(3, 10),
						vowels = ['a', 'e', 'i', 'o', 'u'],
						consonants = ['b', 'c', 'd', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'p', 'q', 'r', 's', 't', 'v', 'w', 'x', 'y', 'z'],
						name = '',
						i = 1;

					for(; i <= length; i++) {
						if (i % 2 == 0) {
							name += vowels[random(0, vowels.length - 1)];
						} else {
							name += consonants[random(0, consonants.length - 1)];
						}
					}

					return name;
				}

				function generateAge() {
					return random(18, 111);
				}

				function generateDate() {
					return random(1988, 2014) . '/' . random(1, 12) . '/' . random(1, 30);
				}

				function generateCurrency() {
					return '$' . random(0, 20000);
				}

				function generateBoolean() {
					return random(0, 1) == 1 ? "Yes" : "No";
				}

				function generateRace() {
					var races = [
						'Mongoloid',
						'Caucasoid',
						'Australoid',
						'Negroid',
						'Capoid'
					];

					return races[random(0, races.length - 1)];
				}

				function random(min, max) {
					Math.floor(Math.random() * ((max - min) + 1) + min);
				}
			});
		</script>
	</head>
	<body>
		<table class="stripe hover cell-border order-column">
			<thead>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Age</th>
					<th>Date</th>
					<th>Amount</th>
					<th>Available?</th>
					<th>Race</th>
				</tr>
			</thead>
			<tbody></tbody>
		</table>
	</body>
</html>
