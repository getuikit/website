# 搜索框

<p class="uk-text-lead">轻松创建好看的搜索框。</p>

## 用法

搜索组件由搜索表单和搜索输入框本身构成。

| Class/Attribute      | Description                                                                 |
|----------------------|-----------------------------------------------------------------------------|
| `.uk-search`         | 将此 class 添加到容器元素定义搜索组件  |
| `.uk-search-input`   | 将此 class 添加到 `<input>` 元素创建搜索框       |

```html
<form class="uk-search">
    <input class="uk-search-input" type="search" placeholder="">
</form>
```

默认地，搜索没有额外的样式。例子中使用了 `.uk-search-default` 来修饰。

```example
<form class="uk-search uk-search-default">
    <input class="uk-search-input" type="search" placeholder="Search...">
</form>
```

***

## 搜索图标

将 `uk-search-icon` 属性添加到 `<span>` 元素来创建搜索图标。添加`.uk-search-icon-flip` class 来改变对齐方式。

```html
<form class="uk-search uk-search-default">
    <span uk-search-icon></span>
    <input class="uk-search-input" type="search" placeholder="">
</form>
```

```example
<div class="uk-margin">
    <form class="uk-search uk-search-default">
        <span uk-search-icon></span>
        <input class="uk-search-input" type="search" placeholder="Search...">
    </form>
</div>

<div class="uk-margin">
    <form class="uk-search uk-search-default">
        <span class="uk-search-icon-flip" uk-search-icon></span>
        <input class="uk-search-input" type="search" placeholder="Search...">
    </form>
</div>
```

***

### 可点击的搜索图标

使用`<a>` 或 `<button>`元素来创建可以点击的搜索图标。

```html
<form class="uk-search uk-search-default">
    <a href="" uk-search-icon></a>
    <input class="uk-search-input" type="search" placeholder="">
</form>
```

```example
<div class="uk-margin">
    <form class="uk-search uk-search-default">
        <a href="" uk-search-icon></a>
        <input class="uk-search-input" type="search" placeholder="Search...">
    </form>
</div>

<div class="uk-margin">
    <form class="uk-search uk-search-default">
        <a href="" class="uk-search-icon-flip" uk-search-icon></a>
        <input class="uk-search-input" type="search" placeholder="Search...">
    </form>
</div>
```

***

## 默认修饰样式

添加 `.uk-search-default` class 来使用默认的修饰样式。

```html
<form class="uk-search uk-search-default">...</form>
```

```example
<form class="uk-search uk-search-default">
    <span uk-search-icon></span>
    <input class="uk-search-input" type="search" placeholder="Search...">
</form>
```

***

## 尺寸放大

增大搜索框的尺寸，比如在遮罩层上使用搜索组件，需要添加 `.uk-search-large` class。

```html
<form class="uk-search uk-search-large">...</form>
```

```example
<form class="uk-search uk-search-large">
    <span uk-search-icon></span>
    <input class="uk-search-input" type="search" placeholder="Search...">
</form>
```

***

## 导航栏搜索

可以将搜索组件用在[导航栏组件](navbar.md)上，只需添加 `.uk-search-navbar` class。

```html
<form class="uk-search uk-search-navbar">...</form>
```

```example
<nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-left">

        <div class="uk-navbar-item">
            <form class="uk-search uk-search-navbar">
                <span uk-search-icon></span>
                <input class="uk-search-input" type="search" placeholder="Search...">
            </form>
        </div>

    </div>
</nav>
```

***

## 拨动

在使用`<a>` 或 `<button>`元素作为搜索图标时，如果要添加鼠标经过效果。需要添加 `.uk-search-toggle` class。添加`uk-search-icon`属性来创建搜索图标本身。

```html
<a class="uk-search-toggle" href="" uk-search-icon></a>
```

```example
<a class="uk-search-toggle" href="" uk-search-icon></a>
```

***

## 导航栏中的搜索

搜索图标可以用于在导航栏中拨动打开搜索框，可以是遮罩、下拉或下拉菜单、外部模态框等等形式。只需要在图标上添加`.uk-navbar-toggle` class 就行。

```html
<div class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-left">
        <a class="uk-navbar-toggle" uk-search-icon uk-toggle href=""></a>
    </div>
</div>
```

### 遮罩

```example
<nav class="uk-navbar-container uk-margin" uk-navbar>

    <div class="nav-overlay uk-navbar-left">

        <a class="uk-navbar-item uk-logo" href="#">Logo</a>

        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="#">Active</a></li>
            <li><a href="#">Item</a></li>
        </ul>

    </div>

    <div class="nav-overlay uk-navbar-right">

        <a class="uk-navbar-toggle" uk-search-icon uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>

    </div>

    <div class="nav-overlay uk-navbar-left uk-flex-1" hidden>

        <div class="uk-navbar-item uk-width-1-1">
            <form class="uk-search uk-search-navbar uk-width-1-1">
                <input class="uk-search-input" type="search" placeholder="Search..." autofocus>
            </form>
        </div>

        <a class="uk-navbar-toggle" uk-close uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>

    </div>

</nav>
```

### 下拉

```example
<nav class="uk-navbar-container uk-margin" uk-navbar>
    <div class="uk-navbar-left">

        <a class="uk-navbar-item uk-logo" href="#">Logo</a>

        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="#">Active</a></li>
            <li><a href="#">Item</a></li>
        </ul>

    </div>
    <div class="uk-navbar-right">

        <div>
            <a class="uk-navbar-toggle" uk-search-icon href="#"></a>
            <div class="uk-drop" uk-drop="mode: click; pos: left-center; offset: 0">
                <form class="uk-search uk-search-navbar uk-width-1-1">
                    <input class="uk-search-input" type="search" placeholder="Search..." autofocus>
                </form>
            </div>
        </div>

    </div>
</nav>
```

### 下拉菜单

```example
<nav class="uk-navbar-container uk-margin" uk-navbar>
    <div class="uk-navbar-left">

        <a class="uk-navbar-item uk-logo" href="#">Logo</a>

        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="#">Active</a></li>
            <li><a href="#">Item</a></li>
        </ul>

    </div>
    <div class="uk-navbar-right">

        <div>
            <a class="uk-navbar-toggle" href="#" uk-search-icon></a>
            <div class="uk-navbar-dropdown" uk-drop="mode: click; cls-drop: uk-navbar-dropdown; boundary: !nav">

                <div class="uk-grid-small uk-flex-middle" uk-grid>
                    <div class="uk-width-expand">
                        <form class="uk-search uk-search-navbar uk-width-1-1">
                            <input class="uk-search-input" type="search" placeholder="Search..." autofocus>
                        </form>
                    </div>
                    <div class="uk-width-auto">
                        <a class="uk-navbar-dropdown-close" href="#" uk-close></a>
                    </div>
                </div>

            </div>
        </div>

    </div>
</nav>
```

### 模态框

```example
<nav class="uk-navbar uk-navbar-container uk-margin">
    <div class="uk-navbar-left">

        <a class="uk-navbar-item uk-logo" href="#">Logo</a>

        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="#">Active</a></li>
            <li><a href="#">Item</a></li>
        </ul>

    </div>
    <div class="uk-navbar-right">

        <a class="uk-navbar-toggle" href="#modal-full" uk-search-icon uk-toggle></a>

    </div>
</nav>

<div id="modal-full" class="uk-modal-full uk-modal" uk-modal>
    <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle" uk-height-viewport>
        <button class="uk-modal-close-full" type="button" uk-close></button>
        <form class="uk-search uk-search-large">
            <input class="uk-search-input uk-text-center" type="search" placeholder="Search..." autofocus>
        </form>
    </div>
</div>
```
