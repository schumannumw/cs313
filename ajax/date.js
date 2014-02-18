$(function){
	$("#btnupdateTime").click(updateTime);
});

function updateTime()
{
//	alert("updating the time");
	// ajax with jquery
	var userInput = $("#txtInput").val();
	$.get("serverTime.php", {dateFormat: "HH:MM:SS", Input: userINput}, function(data){
	$("#serverTime").append(formattedData);
//	alert("got this back from php:" + data);
	});
}

function getSuggestions()
{
$
}