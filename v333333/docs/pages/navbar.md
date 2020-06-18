# 导航栏

<p class="uk-text-lead">创建用于网站内容导航的导航栏。</p>

## 用法

导航栏组件由导航栏容器，导航栏本身以及一个或多个导航菜单组成。

| Element                                                    | Description                                                                                                      |
|------------------------------------------------------------|------------------------------------------------------------------------------------------------------------------|
| `uk-navbar`                                                | 添加此属性到 `<nav>` 以定义导航栏组件                      |
| `.uk-navbar-container`                                     | 添加此 class 到`<nav>` 元素或者父元素为导航栏添加背景样式。                |
| `.uk-navbar-left`<br> `.uk-navbar-center`<br>  `.uk-navbar-right` | 添加其中一个 `<div>` 上对齐导航                                 |
| `.uk-navbar-nav`                                           | 添加此 class 到 `<ul>` 创建导航菜单。使用 `<a>`元素作为列表中的导航菜单单元 |
| `.uk-parent`                                               | 添加此 class 标识父级菜单单元                                                               |
| `.uk-active`                                               | 添加此 class 标识选中的菜单单元                            |

```html
<nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-left">
        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href=""></a></li>
            <li class="uk-parent"><a href=""></a></li>
            <li><a href=""></a></li>
        </ul>
    </div>
</nav>
```

```example
<nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-left">

        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="#">Active</a></li>
            <li>
                <a href="#">Parent</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#">Item</a></li>
        </ul>

    </div>
</nav>
```

***

## 多个导航

可以在导航栏容器中放置多个导航。可以在同一个导航栏中将它们左对齐、居中、右对齐。

```html
<nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-left">...</div>
    <div class="uk-navbar-center">...</div>
    <div class="uk-navbar-right">...</div>
</nav>
```

```example
<nav class="uk-navbar-container" uk-navbar>

    <div class="uk-navbar-left">

        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="#">Active</a></li>
            <li>
                <a href="#">Parent</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#">Item</a></li>
        </ul>

    </div>

    <div class="uk-navbar-right">

        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="#">Active</a></li>
            <li>
                <a href="#">Parent</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#">Item</a></li>
        </ul>

    </div>

</nav>
```

***

## 点击模式

可以使用点击或 hover 的方式来拨动导航栏中的导航菜单。需要在`uk-navbar` 属性中添加`mode: click`选项。 

```html
<nav class="uk-navbar-container" uk-navbar="mode: click">...</nav>
```

```example
<nav class="uk-navbar-container uk-margin" uk-navbar="mode: click">
    <div class="uk-navbar-left">

        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="#">Active</a></li>
            <li>
                <a href="#">Parent</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#">Item</a></li>
        </ul>

    </div>
</nav>
```

***

## 透明效果

在网站的首屏大图背景上使用导航栏时，可能希望导航栏的背景透明。只需在`<nav>`元素中添加 `.uk-navbar-transparent` class。必要的话，可以添加[反相](inverse.md)组件中的 `.uk-light` or `.uk-dark` 来调整导航栏的颜色。

```html
<nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>...</nav>
```

```example
<div class="uk-position-relative">
    <img src="../docs/images/light.jpg" alt="">
    <div class="uk-position-top">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-left">
                <ul class="uk-navbar-nav">
                    <li class="uk-active"><a href="#">Active</a></li>
                    <li><a href="#">Item</a></li>
                    <li>
                        <a href="#">Parent</a>
                        <div class="uk-navbar-dropdown">
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-nav-header">Header</li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-nav-divider"></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
```

***

## 导航栏的子标题

在导航单元的`<a>`元素中添加一个`<div>`元素来定义子标题。再在另一个`<div>`元素上添加 `.uk-navbar-subtitle` class。如下例：

```html
<li>
    <a href="">
        <div>
            ...
            <div class="uk-navbar-subtitle"></div>
        </div>
    </a>
</li>
```

```example
<nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-left">

        <ul class="uk-navbar-nav">
            <li class="uk-active">
                <a href="#">
                    <div>
                        Active
                        <div class="uk-navbar-subtitle">Subtitle</div>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div>
                        Parent
                        <div class="uk-navbar-subtitle">Subtitle</div>
                    </div>
                </a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="#">
                    <div>
                        Item
                        <div class="uk-navbar-subtitle">Subtitle</div>
                    </div>
                </a>
            </li>
        </ul>

    </div>
</nav>
```

***

## 导航单元的内容

可以在导航栏中添加自定义内容，比如文本、图标、按钮或者表单。需要在放置内容的`<div>`上添加 `.uk-navbar-item` class。

```html
<div class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-left">
        <a href="" class="uk-navbar-item uk-logo"></a>
        <ul class="uk-navbar-nav">...</ul>
        <div class="uk-navbar-item">...</div>
    </div>
</div>
```

在`<a>` 或 `<div>`元素上添加[效果组件](utility.md)中的 `.uk-logo` class来标识品牌。

```example
<nav class="uk-navbar-container uk-margin" uk-navbar>
    <div class="uk-navbar-left">

        <a class="uk-navbar-item uk-logo" href="#">Logo</a>

        <ul class="uk-navbar-nav">
            <li>
                <a href="#">
                    <span class="uk-icon uk-margin-small-right" href="#" uk-icon="icon: star"></span>
                    Features
                </a>
            </li>
        </ul>

        <div class="uk-navbar-item">
            <div>Some <a href="#">Link</a></div>
        </div>

        <div class="uk-navbar-item">
            <form>
                <input class="uk-input uk-form-width-small" type="text" placeholder="Input">
                <button class="uk-button uk-button-default">Button</button>
            </form>
        </div>

    </div>
</nav>
```

***

## 居中 logo

可以创建带有居中的 LOGO 和拆开的导航菜单的导航栏。需要在一个导航栏上添加`uk-navbar-center-left` class,另一个导航栏上添加 `uk-navbar-center-right` 。这将使得你的 LOGO 保持居中并将导航菜单对齐到左右两侧。

```html
<div class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-center">
        <div class="uk-navbar-center-left">...</div>
        <a href="" class="uk-navbar-item uk-logo"></a>
        <div class="uk-navbar-center-right">...</div>
    </div>
</div>
```

```example
<nav class="uk-navbar-container uk-margin" uk-navbar>
    <div class="uk-navbar-center">

        <div class="uk-navbar-center-left">
            <ul class="uk-navbar-nav">
                <li class="uk-active"><a href="#">Active</a></li>
                <li>
                    <a href="#">Parent</a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li class="uk-active"><a href="#">Active</a></li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <a class="uk-navbar-item uk-logo" href="#">Logo</a>
        <div class="uk-navbar-center-right">
            <ul class="uk-navbar-nav">
                <li><a href="#">Item</a></li>
            </ul>
        </div>

    </div>
</nav>
```


***

## 拨动器元素

将 `.uk-navbar-toggle` class 和 `uk-navbar-toggle-icon` 属性添加到 `<a>` 或 `<div>` 上，创建作为拨动器的图标按钮。默认地，不会有 JavaScript 关联到此拨动器。举例说明，你可以将[抽屉组件](offcanvas.md)或[模态对话框](modal.md)关联到此处。

```html
<div class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-left">
        <a class="uk-navbar-toggle" uk-navbar-toggle-icon href=""></a>
    </div>
</div>
```

```example
<nav class="uk-navbar uk-navbar-container uk-margin">
    <div class="uk-navbar-left">
        <a class="uk-navbar-toggle" uk-navbar-toggle-icon href="#"></a>
    </div>
</nav>

<nav class="uk-navbar uk-navbar-container uk-margin">
    <div class="uk-navbar-left">
        <a class="uk-navbar-toggle" href="#">
            <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span>
        </a>
    </div>
</nav>
```

***

## 下拉菜单

导航栏可以包含[下拉菜单](dropdown.md)。只需将 `.uk-navbar-dropdown`添加到下拉菜单上，这样它就能完美适应与导航菜单的样式了。将`.uk-navbar-dropdown-nav` class 添加到下拉菜单内部的导航菜单上。

```html
<ul class="uk-navbar-nav">
    <li>
        <a href=""></a>
        <div class="uk-navbar-dropdown">
            <ul class="uk-nav uk-navbar-dropdown-nav">...</ul>
        </div>
    </li>
</ul>
```

```example
<nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-left">

        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="#">Active</a></li>
            <li>
                <a href="#">Parent</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li class="uk-nav-header">Header</li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                        <li class="uk-nav-divider"></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#">Item</a></li>
        </ul>

    </div>
    <div class="uk-navbar-right">

        <ul class="uk-navbar-nav">
            <li>
                <a href="#">Parent</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li class="uk-nav-header">Header</li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                        <li class="uk-nav-divider"></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
```

***

### 多列下拉菜单

[下拉菜单组件](dropdown.md)允许将下拉菜单内容放置在多个列中。可以容纳最多5列，需要添加以下 class。在容器放不下这些菜单时，这些列会堆叠显示。

| Class                         | Description                             |
|-------------------------------|-----------------------------------------|
| `.uk-navbar-dropdown-width-2` | 两列  |
| `.uk-navbar-dropdown-width-3` | 三列  |
| `.uk-navbar-dropdown-width-4` | 四列  |
| `.uk-navbar-dropdown-width-5` | 五列   |

```html
<div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
    <div class="uk-navbar-dropdown-grid uk-child-width-1-2" uk-grid>
        <div>
            <ul class="uk-nav uk-navbar-dropdown-nav">...</ul>
        </div>
        <div>...</div>
    </div>
</div>
```

```example
<nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-left">

        <ul class="uk-navbar-nav">
            <li>
                <a href="#">Two Columns</a>
                <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                    <div class="uk-navbar-dropdown-grid uk-child-width-1-2" uk-grid>
                        <div>
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-nav-header">Header</li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-nav-divider"></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-nav-header">Header</li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-nav-divider"></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

    </div>

</nav>
```

***

### 边界对齐

下拉菜单可以对齐到导航栏的边界。只需要在`uk-navbar`属性上添加`boundary-align: true`参数。添加`align: left`, `align: center` 或 `align: right`这些选项来改变对齐方式。默认是左对齐的。

```html
<nav class="uk-navbar-container" uk-navbar="boundary-align: true; align: center;">...</nav>
```

```example
<nav class="uk-navbar-container" uk-navbar="boundary-align: true; align: center;">
    <div class="uk-navbar-left">

        <ul class="uk-navbar-nav">
            <li>
                <a href="#">Item</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li class="uk-nav-header">Header</li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                        <li class="uk-nav-divider"></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                </div>
            </li>
            <li>
                <a href="#">Item</a>
                <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                    <div class="uk-navbar-dropdown-grid uk-child-width-1-2" uk-grid>
                        <div>
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-nav-header">Header</li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-nav-divider"></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-nav-header">Header</li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-nav-divider"></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="#">Item</a>
                <div class="uk-navbar-dropdown uk-navbar-dropdown-width-3">
                    <div class="uk-navbar-dropdown-grid uk-child-width-1-3" uk-grid>
                        <div>
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-nav-header">Header</li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-nav-divider"></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-nav-header">Header</li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-nav-divider"></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul class="uk-nav uk-navbar-dropdown-nav">
                                <li class="uk-active"><a href="#">Active</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-nav-header">Header</li>
                                <li><a href="#">Item</a></li>
                                <li><a href="#">Item</a></li>
                                <li class="uk-nav-divider"></li>
                                <li><a href="#">Item</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        </ul>

    </div>

    <div class="uk-navbar-right">
        <ul class="uk-navbar-nav">
            <li>
                <a href="#">Item</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li class="uk-nav-header">Header</li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                        <li class="uk-nav-divider"></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                </div>
            </li>
        </li>
    </div>

</nav>
```

***

### 两端对齐

要使下拉菜单两端对齐，需要使用[下拉组件](drop.md)及其定位功能。下面的例子中，下拉菜单与父级导航栏的边界两端对齐了。

```html
<div class="uk-navbar-dropdown" uk-drop="boundary: .parent; boundary-align: true; pos: bottom-justify;">...</div>
```

```example
<nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-left">

        <ul class="uk-navbar-nav">
            <li>
                <a href="#">Item</a>
                <div class="uk-navbar-dropdown" uk-drop="boundary: !nav; boundary-align: true; pos: bottom-justify;">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li class="uk-nav-header">Header</li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                        <li class="uk-nav-divider"></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                </div>
            </li>
           <li>
               <a href="#">Item</a>
               <div class="uk-navbar-dropdown" uk-drop="boundary: !nav; boundary-align: true; pos: bottom-justify;">
                   <div class="uk-navbar-dropdown-grid uk-child-width-1-2" uk-grid>
                       <div>
                           <ul class="uk-nav uk-navbar-dropdown-nav">
                               <li class="uk-active"><a href="#">Active</a></li>
                               <li><a href="#">Item</a></li>
                               <li class="uk-nav-header">Header</li>
                               <li><a href="#">Item</a></li>
                               <li><a href="#">Item</a></li>
                               <li class="uk-nav-divider"></li>
                               <li><a href="#">Item</a></li>
                           </ul>
                       </div>
                       <div>
                           <ul class="uk-nav uk-navbar-dropdown-nav">
                               <li class="uk-active"><a href="#">Active</a></li>
                               <li><a href="#">Item</a></li>
                               <li class="uk-nav-header">Header</li>
                               <li><a href="#">Item</a></li>
                               <li><a href="#">Item</a></li>
                               <li class="uk-nav-divider"></li>
                               <li><a href="#">Item</a></li>
                           </ul>
                       </div>
                   </div>
               </div>
           </li>
       </ul>

    </div>
</nav>
```

***

## 下拉栏/Dropbar

将下拉菜单的宽度扩展到下拉菜单的宽度并不带默认样式地显示该下拉菜单。要将下拉菜单放在这样的下拉栏里，需要在`uk-navbar`属性中添加`dropbar: true`选项。 

```html
<nav class="uk-navbar-container" uk-navbar="dropbar: true;">...</nav>
<div class="uk-navbar-dropbar"></div>
```

```example
<div class="uk-position-relative">

    <nav class="uk-navbar-container" uk-navbar="dropbar: true">

        <div class="uk-navbar-left">

            <ul class="uk-navbar-nav">
                <li>
                    <a href="#">Item</a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li class="uk-active"><a href="#">Active</a></li>
                            <li><a href="#">Item</a></li>
                            <li class="uk-nav-header">Header</li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                            <li class="uk-nav-divider"></li>
                            <li><a href="#">Item</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#">Item</a>
                    <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                        <div class="uk-navbar-dropdown-grid uk-child-width-1-2" uk-grid>
                            <div>
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-active"><a href="#">Active</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li class="uk-nav-header">Header</li>
                                    <li><a href="#">Item</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li class="uk-nav-divider"></li>
                                    <li><a href="#">Item</a></li>
                                </ul>
                            </div>
                            <div>
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-active"><a href="#">Active</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li class="uk-nav-header">Header</li>
                                    <li><a href="#">Item</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li class="uk-nav-divider"></li>
                                    <li><a href="#">Item</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

        </div>

        <div class="uk-navbar-right">

            <ul class="uk-navbar-nav">
                <li>
                    <a href="#">Parent</a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li class="uk-active"><a href="#">Active</a></li>
                            <li><a href="#">Item</a></li>
                            <li class="uk-nav-header">Header</li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                            <li class="uk-nav-divider"></li>
                            <li><a href="#">Item</a></li>
                        </ul>
                    </div>
                </li>
            </ul>

        </div>
    </nav>

    <div class="uk-navbar-dropbar"></div>

</div>
```

***

### 推动/Push

默认地，下拉栏是以遮罩层的形式显示的 。添加 `dropbar-mode: push;`选项，使其可以推动其下方的内容。

```html
<nav class="uk-navbar-container" uk-navbar="dropbar: true; dropbar-mode: push">...</nav>
<div class="uk-navbar-dropbar"></div>
```

```example
<div class="uk-position-relative">

    <nav class="uk-navbar-container" uk-navbar="dropbar: true; dropbar-mode: push">

        <div class="uk-navbar-left">

            <ul class="uk-navbar-nav">
                <li>
                    <a href="#">Item</a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li class="uk-active"><a href="#">Active</a></li>
                            <li><a href="#">Item</a></li>
                            <li class="uk-nav-header">Header</li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                            <li class="uk-nav-divider"></li>
                            <li><a href="#">Item</a></li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="#">Item</a>
                    <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                        <div class="uk-navbar-dropdown-grid uk-child-width-1-2" uk-grid>
                            <div>
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-active"><a href="#">Active</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li class="uk-nav-header">Header</li>
                                    <li><a href="#">Item</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li class="uk-nav-divider"></li>
                                    <li><a href="#">Item</a></li>
                                </ul>
                            </div>
                            <div>
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-active"><a href="#">Active</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li class="uk-nav-header">Header</li>
                                    <li><a href="#">Item</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li class="uk-nav-divider"></li>
                                    <li><a href="#">Item</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>

        </div>

        <div class="uk-navbar-right">

            <ul class="uk-navbar-nav">
                <li>
                    <a href="#">Parent</a>
                    <div class="uk-navbar-dropdown">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                            <li class="uk-active"><a href="#">Active</a></li>
                            <li><a href="#">Item</a></li>
                            <li class="uk-nav-header">Header</li>
                            <li><a href="#">Item</a></li>
                            <li><a href="#">Item</a></li>
                            <li class="uk-nav-divider"></li>
                            <li><a href="#">Item</a></li>
                        </ul>
                    </div>
                </li>
            </ul>

        </div>

    </nav>

    <div class="uk-navbar-dropbar"></div>

</div>
```

***

## 组件选项

可以在组件属性中使用以下选项，用分号隔开多个选项。 [Learn more](javascript.md#component-configuration)

| Option            | Value               | Default | Description                                                           |
|------------------|---------------------|---------|-----------------------------------------------------------------------|
| `align`          | left, right, center | left    | 下拉菜单的对齐方式                                      |
| `mode`           | hover, click        | hover   | 下拉菜单的触发行为                                    |
| `delay-show`     | Number              | 0       | hover 模式下，显示下拉菜单的延迟时间，以毫秒为单位  |
| `delay-hide`     | Number              | 800     | hover 模式下，隐藏下拉菜单的延迟时间 |
| `boundary`       | CSS selector        | window  | 维持下拉菜单可见性的参考元素               |
| `boundary-align` | Boolean             | false   | 将下拉菜单对齐到边界                    |
| `offset`         | Number              | 0       | 下拉菜单与容器直接的便       |
| `dropbar `       | Boolean             | false   | 启用或禁用下拉栏                               |
| `dropbar-mode`   | slide, push         | slide   | 下拉栏显示出来的模式                       |
| `duration`       | Number              | 200     | 下拉栏过渡效果持续时间                                |

***

## JavaScript

Learn more about [JavaScript components](javascript.md#programmatic-use).

### 初始化

```js
UIkit.navbar(element, options);
```

### 事件

These events will be triggered on elements with this component attached.

| Name | Description |
| --- | --- |
| `beforeShow` | 元素显示前触发。返回 false 阻止触发 |
| `show` | 元素显示后触发  |
| `beforeHide` | 元素隐藏前触发。返回 false 阻止触发  |
| `hide` | 元素隐藏后触发   |
