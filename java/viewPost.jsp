<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>View Your Posts</title>
</head>
<body>
	<p>You are logged in as: 
	<%
	String a=session.getAttribute("username").toString();
	out.println(a);
	%>
	</p>
	<h1>Make a New Post:</h1>
	<form action="posts.jsp" method="post">
	<textarea placeholder="Enter your text here..." rows="4" cols="50" name="comment" >
</textarea><br /><input type="submit" value="Submit Post">
	</form>
</body>
</html>