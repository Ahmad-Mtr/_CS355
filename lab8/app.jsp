
<%-- 
    Document   : app
    Created on : May 8, 2024, 3:44:42 PM
    Author     : Labadmin
--%>
<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Process Form</title>
</head>
<body>
    <h1>Order SUmmary</h1>
        <p>THank you for Ordering</p> <br>
        <p><b>pizza Size: </b> <%= request.getParameter("_size")%> </p>
        <p><b>pizza tYPE: </b> <%= request.getParameter("_type")%> </p>
        <p><b>pizza TOPPINGS: </b>
<%
    String[] checkedValues = request.getParameterValues("_toppings");
    if (checkedValues != null ) {
%>
   
    <ul>
    <% 
        for (String value : checkedValues) {
    %>
        <li><%= value %></li>
    <% 
        }
    %>
    </ul>
<%
    } else {
%>
    <p>No Toppings Selected.</p>
<%
    }
%>
</body>
</html>
