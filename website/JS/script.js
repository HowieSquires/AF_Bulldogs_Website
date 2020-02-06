//Javascript reads when webpage is ready then finds all player profiles
$(document).ready(function(){
	var category = "Name"
	var input = "";
    $.get("JS/ajax.php", {"key": input, "category": category}, function(data) {
       $("#playerProfiles").html(data);
    })
    //After user presses search button on playerprofiles.php, function gathers keyword and category to pass to ajax script
    $('#search').click(function(){
    	var category = $("#category").val();
        var input = $("#input").val();
        $.get("JS/ajax.php", {"key": input, "category": category}, function(data) {
            $("#playerProfiles").html(data);
        })
    })
    //After user presses clear button, the search query is reset 
    $('#clear').click(function(){
    	var category = "Name"
        var input = "";
        $.get("JS/ajax.php", {"key": input, "category": category}, function(data) {
            $("#playerProfiles").html(data);
        })
    })
})