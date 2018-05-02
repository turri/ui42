$(document).ready(function() {
	$('.typeahead').typeahead({
		hint: true,
		highlight: true,
		minLength: 2,
		dataType: 'json',
	    source: function (query, process) {
	        return $.get('api/cities/' + query, {}, function (data) {
	        	let aCities = [];
	        	data.forEach(function(item){
	        		aCities.push(item.city);
	        	})
	            return process(aCities);
	        });
	    }
	});
});