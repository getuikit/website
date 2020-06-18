# 面包屑

<p class="uk-text-lead">创建面包屑导航，显示用户在网站中的当前位置。</p>

## 用法

面包屑组件由多个链接组成，并且每个链接直接是由分隔符隔开的。在`<ul>`元素中添加 `.uk-breadcrumb` class 来定义面包屑组件。在面包屑中使用 `<a>`元素来充当链接。 

激活（active）状态会自动添加到最后一个 `<li>` 元素。使用 `<span>` 替代 `<a>` 来禁用面包屑条目。 

```
<ul class="uk-breadcrumb">
    <li><a href=""></a></li>
    <li><a href=""></a></li>
    <li><span href=""></span></li>
</ul>
```

**Note** 也还可以禁用列表中的其他条目。只需将 `.uk-disabled` class 添加到 `<li>` 元素上就行。 

```example
<ul class="uk-breadcrumb">
    <li><a href="#">Item</a></li>
    <li><a href="#">Item</a></li>
    <li class="uk-disabled"><a href="#">Disabled</a></li>
    <li><span href="#">Active</span></li>
</ul>
```
