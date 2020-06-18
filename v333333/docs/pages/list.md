# 列表

<p class="uk-text-lead">轻松创建各式各样的漂亮列表。</p>

## 用法

在无序列表、有序列表上添加`.uk-list`就行。列表将不会显示任何间距和 list-style。

```html
<ul class="uk-list">
    <li></li>
    <li></li>
    <li></li>
</ul>
```

```example
<ul class="uk-list">
    <li>List item 1</li>
    <li>List item 2</li>
    <li>List item 3</li>
</ul>
```

***

## 列表符号

添加 `.uk-list-bullet` class，在列表单元前显示符号。

```html
<ul class="uk-list uk-list-bullet">...</ul>
```

```example
<ul class="uk-list uk-list-bullet">
    <li>List item 1</li>
    <li>List item 2</li>
    <li>List item 3</li>
</ul>
```

***

## 分割线

添加 `.uk-list-divider`，在列表单元直接添加分割线。

```html
<ul class="uk-list uk-list-divider">...</ul>
```

```example
<ul class="uk-list uk-list-divider">
    <li>List item 1</li>
    <li>List item 2</li>
    <li>List item 3</li>
</ul>
```

***

## 条纹

在列表上使用 `.uk-list-striped` class，添加斑马条纹效果。

```html
<ul class="uk-list uk-list-striped">...</ul>
```

```example
<ul class="uk-list uk-list-striped">
    <li>List item 1</li>
    <li>List item 2</li>
    <li>List item 3</li>
</ul>
```

***

## 尺寸放大

添加`.uk-list-large` class 增大列表单元之间的间距。可以与其他列表样式一起使用。

```html
<ul class="uk-list uk-list-large">...</ul>
```

```example
<div class="uk-child-width-expand@s" uk-grid>

    <div>
        <h4>Default</h4>
        <ul class="uk-list uk-list-large">
            <li>List item 1</li>
            <li>List item 2</li>
            <li>List item 3</li>
        </ul>
    </div>

    <div>
        <h4>Divider</h4>
        <ul class="uk-list uk-list-large uk-list-divider">
            <li>List item 1</li>
            <li>List item 2</li>
            <li>List item 3</li>
        </ul>
    </div>

    <div>
        <h4>Striped</h4>
        <ul class="uk-list uk-list-large uk-list-striped">
            <li>List item 1</li>
            <li>List item 2</li>
            <li>List item 3</li>
        </ul>
    </div>

    <div>
        <h4>Bullet</h4>
        <ul class="uk-list uk-list-large uk-list-bullet">
            <li>List item 1</li>
            <li>List item 2</li>
            <li>List item 3</li>
        </ul>
    </div>

</div>
```
