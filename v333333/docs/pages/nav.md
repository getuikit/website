# 导航菜单

<p class="uk-text-lead">为列表导航菜单定义各种样式。</p>

## 用法

需要使用以下class：

| Class           | Description                                                                                                         |
|-----------------|---------------------------------------------------------------------------------------------------------------------|
| `.uk-nav`       | 添加到`<ul>`元素定义导航菜单组件。在列表中使用`<a>`作为导航单元   |
| `.uk-active `   | 添加到列表单元，应用选中效果                                      |

```html
<ul class="uk-nav">
    <li class="uk-active"><a href=""></a></li>
    <li><a href=""></a></li>
</ul>
```

```example
<div class="uk-width-1-2@s uk-width-2-5@m">
    <ul class="uk-nav uk-nav-default">
        <li class="uk-active"><a href="#">Active</a></li>
        <li><a href="#">Item</a></li>
        <li><a href="#">Item</a></li>
    </ul>
</div>
```

**Note** 默认情况下，导航菜单没有样式。所以必须添加一个修饰class。在例子中我们使用了 `.uk-nav-default` class。

***

## 嵌套的导航菜单

在导航单元上添加`.uk-parent` class，使其变成父元素。在该元素内的`<ul>`上添加 `.uk-nav-sub` class创建子级导航。

```html
<ul class="uk-nav">
    <li class="uk-parent">
        <a href=""></a>
        <ul class="uk-nav-sub">
            <li><a href=""></a></li>
            <li>
                <a href=""></a>
                <ul>...</ul>
            </li>
        </ul>
    </li>
</ul>
```

```example
<div class="uk-width-1-2@s uk-width-2-5@m">
    <ul class="uk-nav uk-nav-default">
        <li class="uk-active"><a href="#">Active</a></li>
        <li class="uk-parent">
            <a href="#">Parent</a>
            <ul class="uk-nav-sub">
                <li><a href="#">Sub item</a></li>
                <li>
                    <a href="#">Sub item</a>
                    <ul>
                        <li><a href="#">Sub item</a></li>
                        <li><a href="#">Sub item</a></li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>
```


***

## 手风琴

默认地，子菜单元素都是一直可见。要使用手风琴功能，需要在`<ul>`上添加 `uk-nav`属性。添加`.uk-nav-parent-icon` class为父元素添加一个图标。

**Note** 此属性会自动设置 `.uk-nav` class，你就不必在手动添加啦。

```html
<ul class="uk-nav-parent-icon" uk-nav>...</ul>
```

```example
<div class="uk-width-1-2@s uk-width-2-5@m">
    <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
        <li class="uk-active"><a href="#">Active</a></li>
        <li class="uk-parent">
            <a href="#">Parent</a>
            <ul class="uk-nav-sub">
                <li><a href="#">Sub item</a></li>
                <li>
                    <a href="#">Sub item</a>
                    <ul>
                        <li><a href="#">Sub item</a></li>
                        <li><a href="#">Sub item</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="uk-parent">
            <a href="#">Parent</a>
            <ul class="uk-nav-sub">
                <li><a href="#">Sub item</a></li>
                <li><a href="#">Sub item</a></li>
            </ul>
        </li>
    </ul>
</div>
```

***

### 同时打开多个子级导航

点击父元素时，一个子导航会展开另一个会关闭，只允许同时显示一个嵌套的列表。要同时展开多个，为属性添加 `multiple: true`选项。

```html
<ul class="uk-nav-parent-icon" uk-nav="multiple: true">...</ul>
```

```example
<div class="uk-width-1-2@s uk-width-2-5@m">
    <ul class="uk-nav-default uk-nav-parent-icon" uk-nav="multiple: true">
        <li class="uk-active"><a href="#">Active</a></li>
        <li class="uk-parent">
            <a href="#">Parent</a>
            <ul class="uk-nav-sub">
                <li><a href="#">Sub item</a></li>
                <li>
                    <a href="#">Sub item</a>
                    <ul>
                        <li><a href="#">Sub item</a></li>
                        <li><a href="#">Sub item</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="uk-parent">
            <a href="#">Parent</a>
            <ul class="uk-nav-sub">
                <li><a href="#">Sub item</a></li>
                <li><a href="#">Sub item</a></li>
            </ul>
        </li>
    </ul>
</div>
```

***

## 标题和分割线

在列表单元上添加下列 class 来创建标题和导航单元之间的分割线。

| Element           | Description                                                                   |
|-------------------|-------------------------------------------------------------------------------|
| `.uk-nav-header`  | 添加到`<li>`创建标题          |
| `.uk-nav-divider` | 添加到`<li>`元素创建导航单元之间的分割线  |

```html
<li class="uk-nav-header"></li>

<li class="uk-nav-divider"></li>
```

```example
<div class="uk-width-1-2@s uk-width-2-5@m">
    <ul class="uk-nav uk-nav-default">
        <li class="uk-nav-header">Header</li>
        <li><a href="#">Item</a></li>
        <li><a href="#">Item</a></li>
        <li class="uk-nav-divider"></li>
        <li><a href="#">Item</a></li>
    </ul>
</div>
```

***

## 默认效果

给导航菜单添加 `.uk-nav-default` class来应用默认样式。可以将此导航菜单放置到卡片或内容的其他任意位置。

```html
<ul class="uk-nav uk-nav-default">...</ul>
```

```example
<div class="uk-card uk-card-default uk-card-body uk-width-1-2@s">
    <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
        <li class="uk-active"><a href="#">Active</a></li>
        <li class="uk-parent">
            <a href="#">Parent</a>
            <ul class="uk-nav-sub">
                <li><a href="#">Sub item</a></li>
                <li><a href="#">Sub item</a></li>
            </ul>
        </li>
        <li class="uk-parent">
            <a href="#">Parent</a>
            <ul class="uk-nav-sub">
                <li><a href="#">Sub item</a></li>
                <li><a href="#">Sub item</a></li>
            </ul>
        </li>
        <li class="uk-nav-header">Header</li>
        <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: table"></span> Item</a></li>
        <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: thumbnails"></span> Item</a></li>
        <li class="uk-nav-divider"></li>
        <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: trash"></span> Item</a></li>
    </ul>
</div>
```

***

## 显示效果增强

添加`.uk-nav-primary` class 使导航菜单拥有更多的独特样式，比如把导航菜单放在模态对话框中时。

```html
<ul class="uk-nav uk-nav-primary">...</ul>
```

```example
<div class="uk-width-1-2@s">
    <ul class="uk-nav-primary uk-nav-parent-icon" uk-nav>
        <li class="uk-active"><a href="#">Active</a></li>
        <li class="uk-parent">
            <a href="#">Parent</a>
            <ul class="uk-nav-sub">
                <li><a href="#">Sub item</a></li>
                <li><a href="#">Sub item</a></li>
            </ul>
        </li>
        <li class="uk-parent">
            <a href="#">Parent</a>
            <ul class="uk-nav-sub">
                <li><a href="#">Sub item</a></li>
                <li><a href="#">Sub item</a></li>
            </ul>
        </li>
        <li><a href="#">Item</a></li>
    </ul>
</div>
```

***

## 居中

添加 `.uk-nav-center` class 来居中导航单元。

```html
<ul class="uk-nav uk-nav-default uk-nav-center">...</ul>
```

```example
<div class="uk-card uk-card-default uk-card-body uk-width-1-2@s">
    <ul class="uk-nav-default uk-nav-center uk-nav-parent-icon" uk-nav>
        <li class="uk-active"><a href="#">Active</a></li>
        <li><a href="#">Item</a></li>
        <li><a href="#">Item</a></li>
    </ul>
</div>
```

***

## 下拉菜单中的导航

在[下拉菜单组件](dropdown.md)中的导航菜单上使用`.uk-dropdown-nav`。

```html
<div uk-dropdown>
    <ul class="uk-nav uk-dropdown-nav">...</ul>
</div>
```

```example
<button class="uk-button uk-button-default" type="button">Hover</button>
<div uk-dropdown>
    <ul class="uk-nav uk-dropdown-nav">
        <li class="uk-active"><a href="#">Active</a></li>
        <li><a href="#">Item</a></li>
        <li class="uk-nav-header">Header</li>
        <li><a href="#">Item</a></li>
        <li><a href="#">Item</a></li>
        <li class="uk-nav-divider"></li>
        <li><a href="#">Item</a></li>
    </ul>
</div>
```

***

## 导航栏中的导航菜单

添加`.uk-navbar-dropdown-nav` class 将导航菜单放在[导航栏](navbar.md)的下拉菜单中。

```html
<div class="uk-navbar-dropdown">
    <ul class="uk-nav uk-navbar-dropdown-nav">...</ul>
</div>
```

```example
<nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-left">

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

## 抽屉组件中的导航菜单

导航菜单可以直接用在[抽屉组件](offcanvas.md)中。

```example
<a href="#offcanvas-slide" class="uk-button uk-button-default" uk-toggle>Open</a>

<div id="offcanvas-slide" uk-offcanvas>
    <div class="uk-offcanvas-bar">

        <ul class="uk-nav uk-nav-default">
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
```

***

## 组件选项

可以在组件选项中使用以下选项，用分号隔开多个选项。 [Learn more](javascript.md#component-configuration)

| Option        | Value        | Default      | Description                                                                       |
|---------------|--------------|--------------|-----------------------------------------------------------------------------------|
| `targets`     | CSS selector | > .uk-parent | 添加此class 到拨动子菜单的元素                                                         |
| `toggle `     | CSS selector | > a          | 用于拨动子菜单的元素                                                 |
| `content`     | CSS selector | > ul         | 内容元素                                                       |
| `collapsible` | Boolean      | true         | 允许收缩所有菜单                                    |
| `multiple`    | Boolean      | false        | 允许同时展开多个菜单                                            |
| `transition`  | String       | ease         | 被用到的过渡效果                                                   |
| `animation`   | String       | true         | 用空格隔开多个动画的名称。逗号后是隐藏元素时出效果的动画  |
| `duration`    | Number       | 200          | 以毫秒为单位的动画持续时间                           |

***

## JavaScript

Learn more about [JavaScript components](javascript.md#programmatic-use).

### 初始化

```js
UIkit.nav(element, options);
```
