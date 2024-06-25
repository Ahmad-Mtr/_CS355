# CS355 Web Cheatsheet & Lab solutions

- [CS355 Web Cheatsheet \& Lab solutions](#cs355-web-cheatsheet--lab-solutions)
  - [XML Cheatsheet](#xml-cheatsheet)
    - [Basic Syntax](#basic-syntax)
    - [Tags and Elements](#tags-and-elements)
    - [Attributes](#attributes)
    - [Comments](#comments)
    - [Entities](#entities)
    - [DTD (Document Type Definition)](#dtd-document-type-definition)
        - [**Elements**](#elements)
    - [Example Snippet (`.xml` \& its `.dtd`)](#example-snippet-xml--its-dtd)
  - [JSP | Java Server Pages](#jsp--java-server-pages)
    - [How it Works?](#how-it-works)
    - [Expression Tag `<%= ... %>`](#expression-tag---)
    - [Scriptlet Tag `<% ... %>`](#scriptlet-tag---)
    - [Declaration Tag `<%! ... %>`](#declaration-tag---)
  - [JSP Predefined Variables](#jsp-predefined-variables)
  - [JSP Form Methods](#jsp-form-methods)
    - [Example](#example)
  - [Java Servlets Cheatsheet](#java-servlets-cheatsheet)
    - [Hello World in Servlets](#hello-world-in-servlets)
    - [Database Connection Example](#database-connection-example)
  - [Handling HTML Forms](#handling-html-forms)
    - [HTML Form Example](#html-form-example)
    - [Servlet to Handle Form Submission](#servlet-to-handle-form-submission)
    - [Deployment Descriptor for Form Handling Servlet (`web.xml`)](#deployment-descriptor-for-form-handling-servlet-webxml)

---

## XML Cheatsheet

**XML** (eXtensible Markup Language) is a markup language that defines a set of rules for encoding documents in a format that is both human-readable and machine-readable. It is widely used for representing structured data in various applications, similar to `JSON`.

### Basic Syntax

- `XML` documents are enclosed in a root element, which is the top-level element in the document.
- `Elements` are defined using opening and closing tags.
- `Tags` can have attributes, which provide additional information about the element.
- `Elements` can have child elements, forming a hierarchical structure.

```xml
<root>
    <element attribute="value">
        <child>Text content</child>
    </element>
</root>
```

### Tags and Elements

- Tags are case-sensitive and must be properly nested.
- Elements can be empty or contain text content.
- Elements can have multiple occurrences within a document.

```xml
<book>
    <title>XML Cheatsheet</title>
    <author>John Doe</author>
    <year>2022</year>
</book>
```

### Attributes

- Attributes provide additional information about an element.
- Attributes are defined within the opening tag of an element.
- Attributes have a name and a value.
- Using attributes instead of putting the information as a field within the element can help in reducing redundancy and improving the readability of the XML document.

```xml
<book category="programming">
    <title>XML Cheatsheet</title>
    <author>John Doe</author>
</book>
```

### Comments

- Comments can be added within XML documents using the `<!-- -->` syntax.

```xml
<!-- This is a comment -->
<book>
    <!-- This is another comment -->
    <title>XML Cheatsheet</title>
</book>
```

### Entities

- Entities in XML are used to represent special characters.
- XML provides predefined entities for representing common special characters.
- For example, `&lt;` represents `<`, `&gt;` represents `>`, `&amp;` represents `&`, `&quot;` represents `"`, and `&apos;` represents `'`.
- Entities are useful when you need to include special characters in your XML document without them being interpreted as markup.

```xml
<text>This is an example of &lt;tag&gt;</text>
```

> [!NOTE]
> Basically Entities are somewhat similar to `\\` or `\'` in C

Understanding entities is important as it allows them to properly handle special characters in XML documents and avoid any parsing or interpretation issues.

### DTD (Document Type Definition)

DTD defines the structure and the legal elements and attributes of an XML document. It acts as a blueprint for the XML file, ensuring the document adheres to a predefined format.

##### **Elements**

Elements are used to define tags in an XML document. They encapsulate data and can contain other elements, text, or a combination of both.

1. `<!ELEMENT element-name (element-content)>`

   - Defines an element with specific content.

2. `<!ELEMENT element-name (#PCDATA)>`

   - Defines an element that contains parsed character data, which needs to be interpreted by an XML parser.

3. `<!ELEMENT element-name (#CDATA)>`

   - Defines an element that contains character data, which is not parsed by an XML parser and can include characters that would otherwise be interpreted as XML markup.

4. `<!ELEMENT element-name (ANY)>`

   - Declares an element that can contain any content, including other elements, text, or a mix.

- **`PCDATA`** (Parsed Character Data)
  - PCDATA is data parsed by the XML parser, allowing text to be mixed with child elements
- **`CDATA`** (Character Data)
  - CDATA is text not parsed by the XML parser, allowing inclusion of characters that might otherwise be interpreted as XML markup.

### Example Snippet (`.xml` & its `.dtd`)

index.xml

```xml
<?xml version="1.0" encoding="UTF8"?>
<!DOCTYPE note SYSTEM "Note.dtd">
    <note>
        <to>Tove</to>
        <from>Jani</from>
        <heading>Reminder</heading>
        <body>
            Don't forget me this weekend!
        </body>
    </note>
```

note.dtd

```dtd
<!DOCTYPE note
[
    <!ELEMENT note
    (to,from,heading,body)>
    <!ELEMENT to (#PCDATA)>
    <!ELEMENT from (#PCDATA)>
    <!ELEMENT heading (#PCDATA)>
    <!ELEMENT body (#PCDATA)>
]
>
```

> [!IMPORTANT]
> There Are Other Boring details left that are long to write, read them using the link below \\/

- [XML Lect 2](./lects/CS355%20Lecture%2014%20-%20XML%202.pdf)

---

## JSP | Java Server Pages

**JSP**: Java Server Pages, is a technology used to create dynamic web pages using Java.

### How it Works?

When a client requests a JSP page --> the server compiles the JSP into a servlet --> processes the servlet --> returns the HTML response to the client.

JSP allows embedding Java code directly into HTML using special tags, an example is below \\/

> "Basically Java Code Embedded inside HTML"

```jsp
<html>
  <body>
    <h1>Hello, <%= request.getParameter("name") %>!</h1>
  </body>
</html>
```

### Expression Tag `<%= ... %>`

- Outputs the result of Java expressions to the client.
- Example:
  ```jsp
  <h1>Hello, <%= request.getParameter("name") %>!</h1>
  ```

### Scriptlet Tag `<% ... %>`

- Contains Java code to be executed.
- Example:
  ```jsp
  <%
    String user = request.getParameter("name");
    if (user == null) {
      user = "Guest";
    }
  %>
  ```

### Declaration Tag `<%! ... %>`

- Defines methods or variables with scope throughout the JSP page.
- Example:
  ```jsp
  <%!
    private int counter = 0;
    public int getCounter() {
      return counter++;
    }
  %>
  ```

## JSP Predefined Variables

- **`request`**: The `HttpServletRequest` object.
- **`response`**: The `HttpServletResponse` object.
- **`out`**: The `JspWriter` object for output.
- **`session`**: The `HttpSession` object.
- **`application`**: The `ServletContext` object.
- **`config`**: The `ServletConfig` object.
- **`pageContext`**: Provides access to various objects including request, response, session, etc.
- **`page`**: Refers to the current JSP page.

## JSP Form Methods

| Method                                    | Description                                                                              |
| ----------------------------------------- | ---------------------------------------------------------------------------------------- |
| `request.getParameter("name")`            | Retrieves the value of a form parameter as a string.                                     |
| `request.getParameterValues("name")`      | Retrieves the values of a form parameter as an array of strings (useful for checkboxes). |
| `request.getParameterNames()`             | Returns an enumeration of all parameter names in the request.                            |
| `request.getAttribute("attrName")`        | Gets the value of an attribute from the request scope.                                   |
| `request.setAttribute("attrName", value)` | Sets an attribute in the request scope.                                                  |
| `request.getSession()`                    | Returns the current session associated with the request.                                 |

### Example

```jsp
<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>JSP Example</title>
</head>
<body>

<%!
    // Declaration tag: Define a method to get the greeting message
    private String getGreeting(String name) {
        return "Hello, " + name + "!";
    }
%>

<%
    // Scriptlet tag: Process the form submission
    String name = request.getParameter("name");
    if (name == null || name.isEmpty()) {
        name = "Guest";
    }
    // Increment the counter
    int visitCount = (session.getAttribute("visitCount") == null) ? 1 : (int) session.getAttribute("visitCount") + 1;
    session.setAttribute("visitCount", visitCount);
%>

<h1><%= getGreeting(name) %></h1> <!-- Expression tag: Output the greeting message -->

<p>You have visited this page <%= visitCount %> times.</p>

<form method="post" action="example.jsp">
    <label for="name">Enter your name:</label>
    <input type="text" id="name" name="name">
    <input type="submit" value="Submit">
</form>

</body>
</html>
```

---

Sure! Here's a concise and comprehensive cheatsheet for Java Servlets:

## Java Servlets Cheatsheet

> [!NOTE]
> Servlets simply are HTML embedded inside Java... ~~skip 200+ slides~~

### Hello World in Servlets

```java
import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.Servlet;
import javax.servlet.ServletConfig;
import javax.servlet.ServletException;
import javax.servlet.ServletRequest;
import javax.servlet.ServletResponse;

public class HelloWorld implements Servlet {
    private static final long serialVersionUID = 1 L;
    public HelloWorld() //no-argument constructor.
    {}
    ServletConfig config = null;
    @Override
    public void init(ServletConfig config) throws
    ServletException {
        this.config = config;
        System.out.println("Config Initialization goes here.");
    }
    @Override
    public void destroy() {
        System.out.println("Clean-up process goes here.");
    }
    @Override
    public ServletConfig getServletConfig() {
        return config;
    }
    @Override
    public String getServletInfo() {
        return "Hello World!";
    }

    @Override
    public void service(ServletRequest request, ServletResponse response)
    throws ServletException, IOException {
        response.setContentType("text/html");
        PrintWriter out = response.getWriter();
        out.println("<h1>Hello World example using servlet interface.</h1>");
        out.close();
    }
}
```

### Database Connection Example

- **Servlet to Connect to MySQL**

  ```java
  import java.sql.Connection;
  import java.sql.DriverManager;
  import java.sql.SQLException;
  import javax.servlet.ServletException;
  import javax.servlet.http.HttpServlet;
  import javax.servlet.http.HttpServletRequest;
  import javax.servlet.http.HttpServletResponse;

  public class DatabaseServlet extends HttpServlet {
      private static final String JDBC_URL = "jdbc:mysql://localhost:3306/mydatabase";
      private static final String JDBC_USER = "root";
      private static final String JDBC_PASSWORD = "password";

      protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
          try {
              Class.forName("com.mysql.cj.jdbc.Driver");
              Connection connection = DriverManager.getConnection(JDBC_URL, JDBC_USER, JDBC_PASSWORD);
              // Use the connection to interact with the database
              connection.close();
              response.getWriter().println("Database connection successful!");
          } catch (ClassNotFoundException | SQLException e) {
              e.printStackTrace();
              response.getWriter().println("Database connection failed!");
          }
      }
  }
  ```

## Handling HTML Forms

### HTML Form Example

- **Form in HTML**
  ```html
  <form action="formHandler" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" />
    <input type="submit" value="Submit" />
  </form>
  ```

### Servlet to Handle Form Submission

- **Form Handling Servlet**

  ```java
  import javax.servlet.ServletException;
  import javax.servlet.http.HttpServlet;
  import javax.servlet.http.HttpServletRequest;
  import javax.servlet.http.HttpServletResponse;
  import java.io.IOException;

  public class FormHandlerServlet extends HttpServlet {
      protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
          String username = request.getParameter("username");
          response.setContentType("text/html");
          response.getWriter().println("<h1>Hello, " + username + "!</h1>");
      }
  }
  ```

### Deployment Descriptor for Form Handling Servlet (`web.xml`)
