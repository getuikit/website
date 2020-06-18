# 基础

<p class="uk-text-lead">使用UIkit时，所有HTML元素的默认样式。</p>

## Normalize.css

UIkit使用了著名的 [Normalize.css](http://necolas.github.io/normalize.css/) 来渲染元素，实现跨浏览器的一致性，并将其默认样式应用到了色彩、margin、字体尺寸等等方面。 

**Note** [表单] 默认情况下，(form.md), [按钮](button.md) 和 [表格](table.md) 元素并没有被标准化或风格化。只由它们特定的组件class定义它们的样式。UIkit 尝试尽可能少地将样式应用到原生HTML元素上，是为了保持元素的灵活性并避免与其他第三方 CSS产生冲突。 

***

## 链接

使用 `<a>` 元素将文本转换为超文本。还可以将 `.uk-link` class 添加 `<span>`等类似元素来应用默认的链接样式。对于其他的样式选项，查看 [链接组件](link.md).

***

## 文本级语义

下面的列表为你提供了最常用的文本层次语义，以及它们的用处。 

| Element  | Description                                                                                                 |
|----------|-------------------------------------------------------------------------------------------------------------|
| `<abbr>`   | Define an abbreviation using the <abbr title="Title Text">abbr element with a title</abbr>.               |
| `<b>`      | Create bold text with the <b>b element</b>.                                                               |
| `<cite>`   | Define the title of a work with the <cite>cite element</cite>.                                            |
| `<code>`   | Define inline code snippets using the <code>code element</code>.                                          |
| `<del>`    | Mark document changes as deleted text using the <del>del element</del>.                                   |
| `<dfn>`    | Create a definition term using the <dfn title="Defines a definition term">dfn element with a title</dfn>. |
| `<em>`     | Emphasize text using the <em>em element</em>.                                                             |
| `<i>`      | Set off part of a text by using the <i>i element</i>.                                                     |
| `<ins>`    | Mark document changes as inserted text using the <ins>ins element</ins>.                                  |
| `<kbd>`    | Use a <kbd>keybord input element</kbd> to display input in the browser's default monospace font.          |
| `<mark>`   | Highlight text with no semantic meaning using the <mark>mark element</mark>.                              |
| `<q>`      | Define inline quotations using a <q>q element <q>inside</q> a q element</q>.                              |
| `<s>`      | Define text with a strikethrough using the <s>s element</s>.                                              |
| `<samp>`   | Define sample output with a <samp>samp element</samp>.                                                    |
| `<small>`  | De-emphasize text for small print using the <small>small element</small>.                                 |
| `<span>`   | Define an inline-container using the <span>span element</span>.                                           |
| `<strong>` | Imply extra importance using the <strong>strong element</strong>.                                         |
| `<sub>`    | Define subscript text using the <sub>sub element.</sub>.                                                  |
| `<sup>`    | Define superscript text using the <sup>sup element.</sup>                                                 |
| `<u>`      | Define underlined text using the <u>u element</u>.                                                        |
| `<var>`    | Define a variable using the <var>var element</var>.                                                       |

***

## 嵌入内容

UIkit 中图片以及诸如 `<audio>`, `<canvas>`, `<img>`, `<svg>` 和 `<video>` 等元素是默认响应式的。如果布局尺寸缩小，它们会调整尺寸并保持原有比例。要想阻止此行为，添加[使用效果](utility.md) 中 `.uk-preserve-width` class的到该元素或任意容器上。 

调整浏览器窗口尺寸观察图片的响应式行为。 

```example
<div class="uk-width-large">
    <img src="images/photo.jpg" alt="Image">
</div>
```

***

## 段落

使用 `<p>`元素创建段落。 

```example
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
```

***

## 标题

使用 `<h1>` 到 `<h6>` 这些元素来定义标题。 

添加`.uk-h1`, `.uk-h2`, `.uk-h3`, `.uk-h4`, `.uk-h5` 或 `.uk-h6` 来改变标题的尺寸，比如让 h1 看起来像 h3。 class to alter the size of your headings, for example have a h1 look like a h3. For additional styling options, take a look at the [Heading component](heading.md).

```example
<h1>h1 Heading 1</h1>
<h2>h2 Heading 2</h2>
<h3>h3 Heading 3</h3>
<h4>h4 Heading 4</h4>
<h5>h5 Heading 5</h5>
<h6>h6 Heading 6</h6>
```

***

## 列表

使用 `<ul>` 元素创建无序列表，使用 `<ol>` 元素创建有序列表。使用 `<li>` 元素定义列表条目。对于其他样式选项，查看[列表组件](list.md)。

```example
<ul>
    <li>Item 1</li>
    <li>Item 2
        <ul>
            <li>Item 1</li>
            <li>Item 2
                <ul>
                    <li>Item 1</li>
                    <li>Item 2</li>
                </ul>
            </li>
        </ul>
    </li>
    <li>Item 3</li>
    <li>Item 4</li>
</ul>
```

***

## 描述列表

创建描述列表需要使用 `<dl>` 元素。使用 `<dt>` 定义术语，使用 `<dd>` 定义描述。其他样式选项，查看[描述列表组件](description-list.md)。

```example
<dl>
    <dt>Description lists</dt>
    <dd>A description list defines terms and their corresponding descriptions.</dd>
    <dt>This is a term</dt>
    <dd>This is a description.</dd>
    <dt>This is a term</dt>
    <dd>This is a description.</dd>
</dl>
```

***

## 水平线

使用 `<hr>` 元素创建水平线。其他样式选项，查看[分隔线组件](divider.md)。

```example

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

<hr>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>

```

***

## 块音乐

在文档中从其他来源引用多行内容时，使用  `<blockquote>` 元素。

```example
<blockquote cite="#">
    <p class="uk-margin-small-bottom">The blockquote element represents content that is quoted from another source, optionally with a citation which must be within a footer or cite element.</p>
    <footer>Someone famous in <cite><a href="#">Source Title</a></cite></footer>
</blockquote>
```

***

## 预格式化文本

对于多行代码，使用 `<pre>` 元素。它新建了一个存在空格、制表符和换行的文本块。内嵌一个 `<code>` 元素来定义代码块。 

**Note** 要确保避免使用尖括号，因为尖括号会使代码被识别为页面标签代码而不能按预期显示代码。

```example
<pre><code>// Code example
&lt;div id="myid" class="myclass" hidden&gt;
    Lorem ipsum &lt;strong&gt;dolor&lt;/strong&gt; sit amet, consectetur adipiscing elit.
&lt;/div&gt;</code></pre>
```
