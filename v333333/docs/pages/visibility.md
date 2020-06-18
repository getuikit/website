# 可见性

<p class="uk-text-lead">使用响应式可见性，实现在不同设备上显示或隐藏元素。</p>

## 用法

添加以下 class 的一个来隐藏元素。

| Class	| Description |
| --- | --- |
| `.uk-hidden`	| 在所有设备上隐藏元素。这是 uikit2 遗留的class，推荐的方式是使用 `hidden` 属性。 |
| `.uk-invisible`	| 隐藏元素，而不同文档中移除。 |

```html
<div hidden></div>

<div class="uk-invisible"></div>
```

***

## 响应式

此组件提供了响应式 class，实现在不同设备上显示或隐藏元素。

### 隐藏

添加一个 `.uk-hidden-*` class，实现在大于指定宽度的屏幕上隐藏元素。

| Class	| Description |
| --- | --- |
| `uk-hidden@s` | 影响宽度在_640px_以上的设备。 |
| `uk-hidden@m` | 影响宽度在_960px_ 以上的设备。|
| `uk-hidden@l` | 影响宽度在_1200px_ 以上的设备。 |
| `uk-hidden@xl` | 影响宽度在_1600px_ 以上的设备。 |

```html
<!-- Hidden on tablets and larger -->
<div class="uk-hidden@m"></div>
```

**Note** 这个例子中绿色的元素会在大于指定断点宽度的屏幕上隐藏。调整浏览器窗口的尺寸就能看到效果。

```example
<div class="uk-grid-small uk-child-width-1-2 uk-child-width-1-4@s uk-text-center" uk-grid>
    <div>
        <div class="uk-visible@s uk-card uk-card-default uk-card-body uk-card-small">Small</div>
        <div class="uk-hidden@s uk-card uk-card-default uk-card-body uk-card-small uk-text-success">✔ Small</div>
    </div>
    <div>
        <div class="uk-visible@m uk-card uk-card-default uk-card-body uk-card-small">Medium</div>
        <div class="uk-hidden@m uk-card uk-card-default uk-card-body uk-card-small uk-text-success">✔ Medium</div>
    </div>
    <div>
        <div class="uk-visible@l uk-card uk-card-default uk-card-body uk-card-small">Large</div>
        <div class="uk-hidden@l uk-card uk-card-default uk-card-body uk-card-small uk-text-success">✔ Large</div>
    </div>
    <div>
        <div class="uk-visible@xl uk-card uk-card-default uk-card-body uk-card-small">X-Large</div>
        <div class="uk-hidden@xl uk-card uk-card-default uk-card-body uk-card-small uk-text-success">✔ X-Large</div>
    </div>
</div>
```

***

### 可见

使用 `.uk-visible-*` 这class，实现在大于指定宽度的屏幕上显示元素。

| Class	| Description |
| --- | --- |
| `uk-visible@s` |  影响宽度在_640px_以上的设备。  |
| `uk-visible@m` | 影响宽度在_960px_ 以上的设备。 |
| `uk-visible@l` | 影响宽度在_1200px_ 以上的设备。 |
| `uk-visible@xl` | 影响宽度在_1600px_ 以上的设备。 |

```html
<!-- Visible on tablets and larger -->
<div class="uk-visible@m"></div>
```

**Note** 这个例子中绿色的元素会在大于指定断点宽度的屏幕上显示。调整浏览器窗口的尺寸就能看到效果。

```example
<div class="uk-grid-small uk-child-width-1-2 uk-child-width-1-4@s uk-text-center" uk-grid>
    <div>
        <div class="uk-hidden@s uk-card uk-card-default uk-card-body uk-card-small">Small</div>
        <div class="uk-visible@s uk-card uk-card-default uk-card-body uk-card-small uk-text-success">✔ Small</div>
    </div>
    <div>
        <div class="uk-hidden@m uk-card uk-card-default uk-card-body uk-card-small">Medium</div>
        <div class="uk-visible@m uk-card uk-card-default uk-card-body uk-card-small uk-text-success">✔ Medium</div>
    </div>
    <div>
        <div class="uk-hidden@l uk-card uk-card-default uk-card-body uk-card-small">Large</div>
        <div class="uk-visible@l uk-card uk-card-default uk-card-body uk-card-small uk-text-success">✔ Large</div>
    </div>
    <div>
        <div class="uk-hidden@xl uk-card uk-card-default uk-card-body uk-card-small">X-Large</div>
        <div class="uk-visible@xl uk-card uk-card-default uk-card-body uk-card-small uk-text-success">✔ X-Large</div>
    </div>
</div>
```

***

## 鼠标经过时显示

使用以下 class 实现只在鼠标经过（hover）时显示元素。

| Class             	| Description                                                              |
| --------------------- | ------------------------------------------------------------------------ |
| `.uk-visible-toggle`  | 添加此 class 到任意父元素来隐藏元素。鼠标经过时启用拨动效果。 |
| `.uk-hidden-hover`    | 添加此 class 到子元素来隐藏内容，并将其从文档中移除。 |
| `.uk-invisible-hover` | 添加此 class 到子元素来隐藏内容，而不将其从文档中移除。 |

```html
<div class="uk-visible-toggle">
    <div class="uk-hidden-hover"></div>
</div>
```

```example
<div class="uk-child-width-1-2@s" uk-grid>
    <div class="uk-visible-toggle">

        <h4>Hidden when not hovered</h4>

        <div uk-grid>
            <div class="uk-width-expand">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            <div class="uk-width-auto">
                <ul class="uk-hidden-hover uk-iconnav">
                    <li><a href="#" uk-icon="icon: pencil"></a></li>
                    <li><a href="#" uk-icon="icon: copy"></a></li>
                    <li><a href="#" uk-icon="icon: trash"></a></li>
                </ul>
            </div>
        </div>

    </div>
    <div class="uk-visible-toggle">

        <h4>Invisible when not hovered</h4>

        <div uk-grid>
            <div class="uk-width-expand">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
            <div class="uk-width-auto">
                <ul class="uk-invisible-hover uk-iconnav">
                    <li><a href="#" uk-icon="icon: pencil"></a></li>
                    <li><a href="#" uk-icon="icon: copy"></a></li>
                    <li><a href="#" uk-icon="icon: trash"></a></li>
                </ul>
            </div>
        </div>

    </div>
</div>
```
