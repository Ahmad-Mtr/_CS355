# CS355 Web Cheatsheet & Lab solutions
- [CS355 Web Cheatsheet \& Lab solutions](#cs355-web-cheatsheet--lab-solutions)
    - [XML Cheatsheet](#xml-cheatsheet)
      - [Basic Syntax](#basic-syntax)
      - [Tags and Elements](#tags-and-elements)
      - [Attributes](#attributes)
      - [Comments](#comments)
      - [Entities](#entities)
      - [Example Snippet](#example-snippet)



---

### XML Cheatsheet

XML (eXtensible Markup Language) is a markup language that defines a set of rules for encoding documents in a format that is both human-readable and machine-readable. It is widely used for representing structured data in various applications.

#### Basic Syntax

- XML documents are enclosed in a root element, which is the top-level element in the document.
- Elements are defined using opening and closing tags.
- Tags can have attributes, which provide additional information about the element.
- Elements can have child elements, forming a hierarchical structure.

```xml
<root>
    <element attribute="value">
        <child>Text content</child>
    </element>
</root>
```

#### Tags and Elements

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

#### Attributes

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

#### Comments

- Comments can be added within XML documents using the `<!-- -->` syntax.

```xml
<!-- This is a comment -->
<book>
    <!-- This is another comment -->
    <title>XML Cheatsheet</title>
</book>
```

#### Entities

- Entities in XML are used to represent special characters.
- XML provides predefined entities for representing common special characters.
- For example, `&lt;` represents `<`, `&gt;` represents `>`, `&amp;` represents `&`, `&quot;` represents `"`, and `&apos;` represents `'`.
- Entities are useful when you need to include special characters in your XML document without them being interpreted as markup.

```xml
<text>This is an example of &lt;tag&gt;</text>
```
> [!NOTE]
> Basically Entities are somewhat similar to `\\` or `\'`  in C 

Understanding entities is important as it allows them to properly handle special characters in XML documents and avoid any parsing or interpretation issues.
#### Example Snippet
```xml
<?xml version="1.0" encoding="UTF-8"?>
<document>
    <head>
        <title>Example XML Document</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <section>
            <header>Main Section</header>
            <paragraph>This is an example paragraph in the body of the XML document.</paragraph>
        </section>
        <section>
            <header>Another Section</header>
            <paragraph>This is another example paragraph in the body of the XML document.</paragraph>
        </section>
    </body>
</document>
```
--- 

