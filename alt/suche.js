function suchefun() {
		$.get('ergebnisse.php', function(data) {
			$('#suche').html(data);	
		})
};