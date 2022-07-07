<html>
    <script src="jquery-3.1.1.min.js"></script>
<script>
    
$(document).ready(function() {
//feed to parse
var feed = "https://news.google.com/?output=rss";
$.ajax(feed, {
accepts:{
xml:"application/rss+xml"
},
dataType:"xml",
success:function(data) {
//Credit: http://stackoverflow.com/questions/10943544/how-to-parse-an-rss-feed-using-javascript
$(data).find("item").each(function () { // or "item" or whatever suits your feed
var el = $(this);
console.log("------------------------");
console.log("title      : " + el.find("title").text());
console.log("link       : " + el.find("link").text());
console.log("description: " + el.find("description").text());
});
}
});
});

</script>
</html>