<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
	<p>You are logged in as: 
	<%
	String a=session.getAttribute("username").toString();
	out.println(a);
	%>
	</p>
	<br />
	user:Post 1:
<%
String comment =request.getParameter("comment");
			session.setAttribute("comment",comment); 	
%>
	<%
	String b=session.getAttribute("comment").toString();
	out.println(b);
	%>
	
	<br /><a href="viewPost2.jsp">Make another post</a> <br />
</body>
</html>