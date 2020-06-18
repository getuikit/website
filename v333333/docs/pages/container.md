# 容器

<p class="uk-text-lead">容器组件允许你对齐和居中页面内容。</p>

## 用法

添加 `.uk-container` class 到一个块元素，使其拥有最大的宽度，并将网站的主要内容包含在该元素中。此元素将被居中显示，并且两侧会被添加可根据屏幕尺寸自动调整的 padding。

**Note** 嵌套的内容会移除它们之间的padding，以避免产生无用的间距。

```html
<div class="uk-container"></div>
```

***

## 尺寸调整

为容器添加以下 class，应用不同的最大宽度.

| Class                  | Description                                                                                                |
|------------------------|------------------------------------------------------------------------------------------------------------|
| `.uk-container-small`  | 狭窄的容器                                                                  |
| `.uk-container-large`  | 较宽的容器                                                           |
| `.uk-container-expand` | 如果不系统限制容器的宽度，但又想要动态的水平padding，那就添加这个 class |

```html
<div class="uk-container uk-container-small"></div>

<div class="uk-container uk-container-large"></div>

<div class="uk-container uk-container-expand"></div>
```

***

## 区段中的容器/Container in sections

可以使用此组件调整[区段](section.md)中的的内容宽度。

```html
<div class="uk-section uk-section-primary">
    <div class="uk-container uk-container-small"></div>
</div>
```
