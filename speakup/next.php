<!DOCTYPE html>
<html>
<head>
<script>
// Define the string
document.write("<h1>Success</h1>");

document.write("</br></br>");
var myParam = location.search.split('q=')[1];

//var string = 'VGh1IEF1ZyAwNiAyMDE1IDEzOjQ5OjIxIEdNVCswNTMwIChJbmRpYSBTdGFuZGFyZCBUaW1lKQ==';
//var string = getQueryVariable("u");
//var string1 = <?php echo "vijay khot"; ?>;
//var string = Url.get.u;
//document.write(string1);
// Encode the String

//var encodedString = window.btoa(string);
//document.write(encodedString); // Outputs: "SGVsbG8gV29ybGQh"

// Decode the String
var decodedString = window.atob(myParam);
var date_encoded="decrypted value :" +decodedString;
document.write(date_encoded); // Outputs: "Hello World!"
document.write("</br>");
document.write("Todays date :" +Date());










//document.write(5 + 6);
</script>
</head>

<body>



</body>
</html> 