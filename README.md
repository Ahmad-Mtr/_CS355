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
