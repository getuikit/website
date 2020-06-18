# 实用效果

<p class="uk-text-lead">一些实用效果，它们可以用来定义你的网页内容的样式。</p>

## 面板

UIkit 使用面板轮廓来确定内容的各个部分。可以将它放入到[网格组件](grid.md)的列中。

将 `.uk-panel` 添加到 `<div>` 元素中来创建一个定位上下文（context），将 border-box 设置为 box-sizing，再使用清除浮动（clearfix），移除前一个子元素的底部margin。

```example
<div class="uk-child-width-1-3@s" uk-grid>
    <div>
        <div class="uk-panel">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
    </div>
    <div>
        <div class="uk-panel">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
    </div>
    <div>
        <div class="uk-panel">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
    </div>
</div>
```

***

### 可滚动的面板

添加 `.uk-panel-scrollable` 给面板设置一个固定高度并使其在内容超过它的高度时可以滚动。还可以使用一个 `.uk-height-*` [classes](#height)来应用不同的高度。

```example
<div class="uk-panel uk-panel-scrollable">
    <ul class="uk-list">
        <li><label><input class="uk-checkbox" type="checkbox"> Category 1</label></li>
        <li>
            <label><input class="uk-checkbox" type="checkbox"> Category 2</label>
            <ul>
                <li><label><input class="uk-checkbox" type="checkbox"> Category 2.1</label></li>
                <li><label><input class="uk-checkbox" type="checkbox"> Category 2.2</label></li>
                <li>
                    <label><input class="uk-checkbox" type="checkbox"> Category 2.3</label>
                    <ul>
                        <li><label><input class="uk-checkbox" type="checkbox"> Category 2.3.1</label></li>
                        <li><label><input class="uk-checkbox" type="checkbox"> Category 2.3.2</label></li>
                    </ul>
                </li>
                <li><label><input class="uk-checkbox" type="checkbox"> Category 2.4</label></li>
            </ul>
        </li>
        <li><label><input class="uk-checkbox" type="checkbox"> Category 3</label></li>
        <li><label><input class="uk-checkbox" type="checkbox"> Category 4</label></li>
    </ul>

</div>
```

***

## 浮动和清除浮动

浮动元素是从文档流中对齐到它的容器的左侧或右侧。清除浮动是非常重要的，否则在最坏的情况下，网站布局会全部乱掉。下面这些 class可以帮助你设置基础布局。

| Class | Description |
| --- | --- |
| `.uk-float-left` | 将元素浮动到左侧 |
| `.uk-float-right` |  将元素浮动到右侧Add this class to float the element to the right. |
| `.uk-clearfix` | 添加到父容器清除浮动。此外，你还可以新建一个格式块来实现相同效果，要记得为它添加 `.uk-overflow-hidden` class. |


```example
<div class="uk-clearfix">
    <div class="uk-float-right">
        <div class="uk-card uk-card-default uk-card-body">Right</div>
    </div>
    <div class="uk-float-left">
        <div class="uk-card uk-card-default uk-card-body">Left</div>
    </div>
</div>
```

***

## 溢出

一下这些效果提供了各种可以修饰元素移除行为的效果。

| Class                 | Description                                                                                                                                      |
|-----------------------|--------------------------------------------------------------------------------------------------------------------------------------------------|
| `.uk-overflow-hidden` | 内容超过容器尺寸时截断。  |
| `.uk-overflow-auto`   | 当内容宽于或高于容器本身时，为容器添加水平或垂直的滚动条。 |

**Note** 这里的`.uk-overflow-auto`可以用于响应式网站中处理表格。它还可以用于 `<pre>` 元素。

```example
<div class="uk-overflow-auto uk-height-small">
    <table class="uk-table uk-table-striped uk-table-condensed uk-text-nowrap">
        <thead>
            <tr>
                <th>Table Heading</th>
                <th>Table Heading</th>
                <th>Table Heading</th>
                <th>Table Heading</th>
                <th>Table Heading</th>
                <th>Table Heading</th>
                <th>Table Heading</th>
                <th>Table Heading</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td>Table Footer</td>
                <td>Table Footer</td>
                <td>Table Footer</td>
                <td>Table Footer</td>
                <td>Table Footer</td>
                <td>Table Footer</td>
                <td>Table Footer</td>
                <td>Table Footer</td>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td>Table Data</td>
                <td>Table Data</td>
                <td>Table Data</td>
                <td>Table Data</td>
                <td>Table Data</td>
                <td>Table Data</td>
                <td>Table Data</td>
                <td>Table Data</td>
            </tr>
            <tr>
                <td>Table Data</td>
                <td>Table Data</td>
                <td>Table Data</td>
                <td>Table Data</td>
                <td>Table Data</td>
                <td>Table Data</td>
                <td>Table Data</td>
                <td>Table Data</td>
            </tr>
        </tbody>
    </table>
</div>
```

***

## 尺寸调整

这里提供了一些用于调整元素尺寸的效果class。

| Class                 | Description                                                         |
|-----------------------|---------------------------------------------------------------------|
| `.uk-resize`          | 启用水平和垂直方向的尺寸调整 |
| `.uk-resize-vertical` | 启用垂直方向的尺寸调整  |

<p>拖拽下面每个框的右下角来调整它的尺寸。 </p>

```example
<div class="uk-child-width-1-2@s" uk-grid>
    <div>
        <pre class="uk-resize-vertical">
            <code>
&lt;!-- Resize vertically --&gt;
&lt;div uk-grid&gt;
    &lt;div class="uk-width-1-2"&gt;...&lt;/div&gt;
    &lt;div class="uk-width-1-2"&gt;...&lt;/div&gt;
&lt;/div&gt;

&lt;div class="uk-child-width-1-2" uk-grid&gt;
    &lt;div&gt;&lt;/div&gt;
    &lt;div&gt;&lt;/div&gt;
&lt;/div&gt;
            </code>
        </pre>
    </div>
    <div>
        <pre class="uk-resize">
            <code>
&lt;!-- Resize horizontally and vertically --&gt;
&lt;div uk-grid&gt;
    &lt;div class="uk-width-1-2"&gt;...&lt;/div&gt;
    &lt;div class="uk-width-1-2"&gt;...&lt;/div&gt;
&lt;/div&gt;

&lt;div class="uk-child-width-1-2" uk-grid&gt;
    &lt;div&gt;&lt;/div&gt;
    &lt;div&gt;&lt;/div&gt;
&lt;/div&gt;
            </code>
        </pre>
    </div>
</div>
```

***

## 显示

改变元素的显示属性。

| Class                      | Description                                                |
| -------------------------- | ---------------------------------------------------------- |
| `.uk-display-block`        | 使元素拥有块元素的效果 |
| `.uk-display-inline`       | 使元素拥有行内元素的效果 |
| `.uk-display-inline-block` | 使元素拥有行内块元素的效果 |

***

## Inline

这些 class 通常用于在包含图片子元素的容器内创建定位上下文（context）。即使拥有响应式行为，容器也始终与图片保持相同尺寸。这样，依靠[定位组件](position.md)就能将内容放置在图片上方，而不会跑出图片区域了。

| Class             | Description                                                                                                           |
|-------------------|-----------------------------------------------------------------------------------------------------------------------|
| `.uk-inline`      | 添加这个class 为元素应用inline-block行为，添加最大为100%的宽度，并创建定位上下文。 |
| `.uk-inline-clip` | 与 `.uk-inline`相同，但会截断溢出的子元素。 |

```html
<div class="uk-inline">
    <img alt="">
    <div class="uk-position-cover"></div>
</div>
```

```example
<div class="uk-inline">
    <img src="../docs/images/photo.jpg" width="300" alt="">
    <div class="uk-position-medium uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle">Overlay</div>
</div>
```

***

## 高度

UIkit 提供了一系列的 class来改变块元素的高度。

| Class                                             | Description                                                                                   |
|---------------------------------------------------|-----------------------------------------------------------------------------------------------|
| `.uk-height-1-1`                                  | 应用100%高度，只有在父元素被设置了高度时才有效。 |
| `.uk-height-small `<br> `.uk-max-height-small `   | 应用最大为_150px_的高度。                        |
| `.uk-height-medium `<br> `.uk-max-height-medium ` | 应用最大为_300px_的高度。                                       |
| `.uk-height-large `<br> `.uk-max-height-large `   | 应用最大为_450px_的高度。                                      |

```html
<div class="uk-height-small"></div>
```

```example
<div class="uk-child-width-1-3@s" uk-grid>
    <div>
        <div class="uk-height-small uk-card uk-card-default uk-card-body uk-flex uk-flex-center uk-flex-middle">Small</div>
    </div>
    <div>
        <div class="uk-height-medium uk-card uk-card-default uk-card-body uk-flex uk-flex-center uk-flex-middle">Medium</div>
    </div>
    <div>
        <div class="uk-height-large uk-card uk-card-default uk-card-body uk-flex uk-flex-center uk-flex-middle">Large</div>
    </div>
</div>
```

***

### 视口高度

添加 `uk-height-viewport` 属性来创建填满整个视口高度的容器。可以通过为此属性添加 `offset-top`, `offset-bottom` 或 `expand` 选项来改变高度。[了解更多](javascript.md#component-configuration)

| Option          | Value   | Default | Description                                                              |
| --------------- | ------- | ------- | ------------------------------------------------------------------------ |
| `offset-top`    | Boolean | `false` | 从高度中减去元素顶部的偏移量 |
| `offset-bottom` | Boolean, Number, Pixel | `false` | 立即减去元素后面第一个兄弟元素的高度（true），从自身高度减去设定的百分比（number）或像素（px）。|
| `expand`        | Boolean | `true`  | 扩展元素的高度使得短页面填满视口。 |

```html
<div uk-height-viewport></div>

<div uk-height-viewport="offset-top: true"></div>

<div uk-height-viewport="expand: true"></div>
```

你可以在测试页面中浏览[高度视口](../assets/uikit/tests/height-viewport.html)和[高度扩展](../assets/uikit/tests/height-expand.html).的例子。

***

## 匹配高度

不管子元素的内容，将容器内的所有子元素扩展成相同的高度，例如在网格内设置内容列的高度，只需要添加一个 `uk-height-match` 属性。

**Note** 只有同一行的元素会被匹配。比如，网格列的总宽度超过了100%，就不能匹配它们的高度了。这样做是有意义的，比如在狭窄的视口中堆叠内容块时。 

```html
<div uk-height-match>
    <div></div>
    <div></div>
</div>
```

***

### 匹配卡片

还可以在容器内指定和匹配特定的元素，比如卡片。只需添加 `target: SELECTOR` 到属性中即可。 

```html
<div uk-grid uk-height-match="target: SELECTOR">...</div>
```

```example
<div class="uk-child-width-1-2@s" uk-grid uk-height-match="target: > div > .uk-card">
    <div>
        <div class="uk-card uk-card-default uk-card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Lorem Ipsum</div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Lorem Ipsum</div>
    </div>
</div>
```

***

### 全部匹配

如果网格已经跨了几行了，那么只有在同一行的网格列会被匹配。要跨行匹配所有网格列，只需添加 `row: false` 选项到属性中。 

```html
<div uk-grid uk-height-match="row: false">...</div>
```

```example
<div class="uk-child-width-1-2@s" uk-grid uk-height-match="target: > div > .uk-card; row: false">
    <div class="uk-first-column">
        <div class="uk-card uk-card-default uk-card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
    </div>
    <div>
        <div class="uk-card uk-card-default uk-card-body">Lorem Ipsum</div>
    </div>
    <div class="uk-grid-margin uk-first-column">
        <div class="uk-card uk-card-default uk-card-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
    </div>
    <div class="uk-grid-margin">
        <div class="uk-card uk-card-default uk-card-body">Lorem Ipsum</div>
    </div>
</div>
```

***

### 组件选项

下表列出了 `uk-height-match` 属性的可以设置项。[了解更多](javascript.md#component-configuration)

| Option  | Value        | Default | Description                                                                                 |
| ------- | ------------ | ----------------------------------------------------------------------------------------------------- |
| `target`| CSS selector | `false` | 需要匹配的元素。默认地，直接子元素会被匹配。 |
| `row`   | Boolean      | `true`  | 如果网格已经跨了几行了，那么只有在同一行的网格列会被匹配。 |

***

## 响应式对象

在 UIkit 中， `<img>`, `<canvas>`, `<audio>` 和 `<video>`元素都默认适应它们的父容器的宽度。要为 iframe 添加响应式行为，需要添加 `uk-responsive` 属性。添加下表的 class 还能增加其他的响应式行为。 

| Class	| Description |
| ----------------------- | ------------------------------------------------------------------------------------------------ |
| `.uk-responsive-width`  | 将响应式行为添加到任意元素。根据父元素的宽度，只调整对象的宽度，保持宽高比。  |
| `.uk-responsive-height` | 根据父元素的高度调整对象的高度，保持宽高比。 |
| `.uk-preserve-width`    | 添加此 class 避免响应式行为，保存图片原始尺寸。将它添加到父元素可以对所有子元素生效。如果你的网站集成了谷歌地图，你可能需要这个 class来固定地图哦。  |

```html
<img class="uk-responsive-height" src="" alt="">

<iframe src="" width="" height="" frameborder="0" uk-responsive></iframe>
```

***

## 边框半径

修改图片等元素的边框半径，添加下面的class即可。 

| Class                | Description                                            |
|----------------------|--------------------------------------------------------|
| `.uk-border-rounded` | 圆角效果              |
| `.uk-border-circle`  | 圆形效果        |

```example
<img class="uk-border-rounded" src="images/avatar.jpg" width="200" height="200" alt="Border rounded">
<img class="uk-border-circle" src="images/avatar.jpg" width="200" height="200" alt="Border circle">
```

***

## 盒阴影

为元素添加不同的盒阴影。 

| Class                   | Description                                      |
|-------------------------|--------------------------------------------------|
| `.uk-box-shadow-small`  | 小尺寸的盒阴影 |
| `.uk-box-shadow-medium` | 中等尺寸的盒阴影 |
| `.uk-box-shadow-large`  | 大尺寸的盒阴影 |
| `.uk-box-shadow-xlarge` | 非常大的盒阴影 |

```html
<div class="uk-box-shadow-small"></div>
```

```example
<div class="uk-child-width-1-2@s uk-text-center" uk-grid>
    <div>
        <div class="uk-box-shadow-small uk-padding">Small</div>
    </div>

    <div>
        <div class="uk-box-shadow-medium uk-padding">Medium</div>
    </div>

    <div>
        <div class="uk-box-shadow-large uk-padding">Large</div>
    </div>

    <div>
        <div class="uk-box-shadow-xlarge uk-padding">X-Large</div>
    </div>
</div>
```

***

### Hover

要在鼠标经过时应用盒阴影效果，添加下面这些class吧。还能结合上文的class来修改鼠标经过时阴影的大小。

| Class                         | Description                                               |
|-------------------------------|-----------------------------------------------------------|
| `.uk-box-shadow-hover-small`  | 小尺寸的盒阴影    |
| `.uk-box-shadow-hover-medium` | 中等尺寸的盒阴影    |
| `.uk-box-shadow-hover-large`  | 大尺寸的盒阴影    |
| `.uk-box-shadow-hover-xlarge` | 非常大的盒阴影 |

```html
<div class="uk-box-shadow-hover-small"></div>
```

```example
<div class="uk-child-width-1-2@s uk-text-center" uk-grid>
    <div>
        <div class="uk-box-shadow-hover-small uk-padding">Hover Small</div>
    </div>

    <div>
        <div class="uk-box-shadow-hover-xlarge uk-padding">Hover X-Large</div>
    </div>

    <div>
        <div class="uk-box-shadow-small uk-box-shadow-hover-large uk-padding">Small + Hover Large</div>
    </div>

    <div>
        <div class="uk-box-shadow-xlarge uk-box-shadow-hover-medium uk-padding">X-Large + Hover Medium</div>
    </div>
</div>
```

***

## 首字下沉

在`<p>`元素中使用 `.uk-dropcap` class来实现文本中的首字下沉。 

```example
<p class="uk-dropcap">Dorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
```

***

## Logo

使用 `.uk-logo` class 轻松定义你的LOGO，比如导航栏中的LOGO。 

```html
<a class="uk-logo" href=""></a>
```

```example
<a class="uk-logo" href="#">Logo</a>
```

添加[反相组件](inverse.md)中的 `.uk-light` class，使得在较暗背景中文本自动反相，使其视觉效果更好。

```example
<div class="uk-panel uk-padding uk-background-secondary uk-light">
    <a class="uk-logo" href="#">Logo</a>
</div>
```

***

### Logo 图片

可以使用 `<img>` 元素作为LOGO，比如使用一个SVG图片。

```html
<a class="uk-logo" href="">
    <img src="" alt="">
</a>
```

还可以使用[反相组件](inverse.md)自动地在浅色和深色背景之间切换显示相应的LOGO。只需要在备用的LOGO图片上添加 `.uk-logo-inverse`类就行。基于色彩模式，反相的LOGO会在 `.uk-light` 或`.uk-dark` 被应用到父元素上时显示出来。

```html
<div class="uk-light">
    <a class="uk-logo" href="">
        <img src="" alt="">
        <img class="uk-logo-inverse" src="" alt="">
    </a>
</div>
```

```example
<div class="uk-child-width-expand@s" uk-grid>
    <div>
        <div class="uk-panel uk-padding uk-background-muted">
            <a class="uk-logo" href="#">
                <img src="../docs/images/logo-placeholder.svg" alt="">
                <img class="uk-logo-inverse" src="../docs/images/logo-placeholder-light.svg" alt="">
            </a>
        </div>
    </div>
    <div>
        <div class="uk-panel uk-padding uk-background-secondary uk-light">
            <a class="uk-logo" href="#">
                <img src="../docs/images/logo-placeholder.svg" alt="">
                <img class="uk-logo-inverse" src="../docs/images/logo-placeholder-light.svg" alt="">
            </a>
        </div>
    </div>
</div>
```

***

## 行内的 SVG

SVG 或可缩放的矢量图形都是非常方便的，比如在缩放或动画中都能保持清晰度。 要想通过 CSS控制SVG，只需添 `uk-svg` 加属性到图片元素上。这会将图片注入到标签中，以实现行内 SVG，它还能包含所有属性，比如 ID、class、width和height，你可以使用 CSS 轻松地控制它。

```html
<img src="" uk-svg>
```

使用 `uk-svg`属性也允许从 SVG 文件中注入符号。只需将符号的 ID 添加到图片路径上，如下面的例子所示。 

```example
<!-- Targets the SVG image -->
<img src="../assets/uikit/src/images/symbols/cloud-download.svg" width="40" height="40" uk-svg>

<!-- Targets a symbol inside the SVG image -->
<img src="../assets/uikit/dist/images/icons.svg#cloud-upload" width="40" height="40" uk-svg>
```

***

## Gif

使 Gif 只在进入视口后才开始播放，需要添加 `uk-gif`属性。这样用户就能看到他期望的正确动画了。 

```html
<img src="" alt="" uk-gif>
```

```example
<img src="../docs/images/animated.gif" alt="" uk-gif>
```

***

## 混合模式/Blend modes

添加以下 class 中任意一个为背景应用不同的混合模式，比如在图片上使用这些class。你可以搭配[遮罩组件](overlay.md)来使用。为了更好地理解背景混合模式是怎样工作的，查看这篇文章吧：[CSS Tricks article](https://css-tricks.com/almanac/properties/b/background-blend-mode/)。


| Class                              | Description                              |
|------------------------------------|-----------------------------------------------------------|
| `.uk-blend-multiply`    | This class sets the blend mode to multiply.    |
| `.uk-blend-screen`      | This class sets the blend mode to screen.      |
| `.uk-blend-overlay`     | This class sets the blend mode to overlay.     |
| `.uk-blend-darken`      | This class sets the blend mode to darken.      |
| `.uk-blend-lighten`     | This class sets the blend mode to lighten.     |
| `.uk-blend-color-dodge` | This class sets the blend mode to color dodge. |
| `.uk-blend-color-burn`  | This class sets the blend mode to color burn.  |
| `.uk-blend-hard-light`  | This class sets the blend mode to hard light.  |
| `.uk-blend-soft-light`  | This class sets the blend mode to soft light.  |
| `.uk-blend-difference`  | This class sets the blend mode to difference.  |
| `.uk-blend-exclusion`   | This class sets the blend mode to exclusion.   |
| `.uk-blend-hue`         | This class sets the blend mode to hue.         |
| `.uk-blend-saturation`  | This class sets the blend mode to saturation.  |
| `.uk-blend-color`       | This class sets the blend mode to color.       |
| `.uk-blend-luminosity`  | This class sets the blend mode to luminosity.  |

```html
<div class="uk-position-relative">
    <div class="uk-blend-multiply uk-overlay uk-overlay-primary"></div>
    <img src="" alt="">
</div>
```

```example
<div class="uk-child-width-1-2 uk-child-width-1-3@s uk-grid-small uk-light" uk-grid>
    <div>
        <div class="uk-inline uk-background-primary">
            <img class="uk-blend-multiply" src="images/dark.jpg" alt="Blend Multiply">
            <div class="uk-position-center">
                <p class="uk-h4 uk-margin-remove">Multiply</p>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-inline uk-background-primary">
            <img class="uk-blend-screen" src="images/dark.jpg" alt="Blend Screen">
            <div class="uk-position-center">
                <p class="uk-h4 uk-margin-remove">Screen</p>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-inline uk-background-primary">
            <img class="uk-blend-overlay" src="images/dark.jpg" alt="Blend Overlay">
            <div class="uk-position-center">
                <p class="uk-h4 uk-margin-remove">Overlay</p>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-inline uk-background-primary">
            <img class="uk-blend-darken" src="images/dark.jpg" alt="Blend Darken">
            <div class="uk-position-center">
                <p class="uk-h4 uk-margin-remove">Darken</p>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-inline uk-background-primary">
            <img class="uk-blend-lighten" src="images/dark.jpg" alt="Blend Lighten">
            <div class="uk-position-center">
                <p class="uk-h4 uk-margin-remove">Lighten</p>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-inline uk-background-primary">
            <img class="uk-blend-color-dodge" src="images/dark.jpg" alt="Blend Color Dodge">
            <div class="uk-position-center">
                <p class="uk-h4 uk-margin-remove">Color Dodge</p>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-inline uk-background-primary">
            <img class="uk-blend-color-burn" src="images/dark.jpg" alt="Blend Color Burn">
            <div class="uk-position-center">
                <p class="uk-h4 uk-margin-remove">Color Burn</p>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-inline uk-background-primary">
            <img class="uk-blend-hard-light" src="images/dark.jpg" alt="Blend Hard Light">
            <div class="uk-position-center">
                <p class="uk-h4 uk-margin-remove">Hard Light</p>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-inline uk-background-primary">
            <img class="uk-blend-soft-light" src="images/dark.jpg" alt="Blend Soft Light">
            <div class="uk-position-center">
                <p class="uk-h4 uk-margin-remove">Soft Light</p>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-inline uk-background-primary">
            <img class="uk-blend-difference" src="images/dark.jpg" alt="Blend Difference">
            <div class="uk-position-center">
                <p class="uk-h4 uk-margin-remove">Difference</p>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-inline uk-background-primary">
            <img class="uk-blend-exclusion" src="images/dark.jpg" alt="Blend Exclusion">
            <div class="uk-position-center">
                <p class="uk-h4 uk-margin-remove">Exclusion</p>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-inline uk-background-primary">
            <img class="uk-blend-hue" src="images/dark.jpg" alt="Blend Hue">
            <div class="uk-position-center">
                <p class="uk-h4 uk-margin-remove">Hue</p>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-inline uk-background-primary">
            <img class="uk-blend-saturation" src="images/dark.jpg" alt="Blend Saturation">
            <div class="uk-position-center">
                <p class="uk-h4 uk-margin-remove">Saturation</p>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-inline uk-background-primary">
            <img class="uk-blend-color" src="images/dark.jpg" alt="Blend Color">
            <div class="uk-position-center">
                <p class="uk-h4 uk-margin-remove">Color</p>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-inline uk-background-primary">
            <img class="uk-blend-luminosity" src="images/dark.jpg" alt="Blend Luminosity">
            <div class="uk-position-center">
                <p class="uk-h4 uk-margin-remove">Luminosity</p>
            </div>
        </div>
    </div>
</div>
```

***

## 动画起点/Transform origin

要修改动画的起点，添加一个 `uk-transform-origin-*` class 就行。可以搭配[动画组件](animation.md一起使用。

| Class                                | Description                                      |
|--------------------------------------|--------------------------------------------------|
| `.uk-transform-origin-top-left`      | 从左上角开始   |
| `.uk-transform-origin-top-center`    | 从顶部开始       |
| `.uk-transform-origin-top-right`     | 从右上角开始  |
| `.uk-transform-origin-center-left`   | 从左侧开始  |
| `.uk-transform-origin-center-right`  | 从右侧开始    |
| `.uk-transform-origin-bottom-left`   | 从左下角开始   |
| `.uk-transform-origin-bottom-center` | 从底部开始  |
| `.uk-transform-origin-bottom-right`  | 从右下角开始  |

```html
<div class="uk-transform-origin-bottom-right uk-animation-scale-up"></div>
```

```example
<div class="uk-child-width-1-3@m" uk-grid>
    <div class="uk-animation-toggle">
        <div class="uk-transform-origin-bottom-right uk-card uk-card-default uk-card-body uk-animation-scale-up">
            <p class="uk-text-center">Bottom Right</p>
        </div>
    </div>
    <div class="uk-animation-toggle">
        <div class="uk-transform-origin-top-center uk-card uk-card-default uk-card-body uk-animation-scale-up">
            <p class="uk-text-center">Top Center</p>
        </div>
    </div>
    <div class="uk-animation-toggle">
        <div class="uk-transform-origin-bottom-center uk-card uk-card-default uk-card-body uk-animation-scale-up">
            <p class="uk-text-center">Bottom Center</p>
        </div>
    </div>
</div>
```

***

## 禁用

要禁用任意元素的点击行为，比如 `<a>`, `<button>` 和 `<iframe>` 元素，添加 `.uk-disabled` class就行。

```example
<a class="uk-disabled uk-button uk-button-default" href="#">Disabled</a>
```

***

## 拖拽

要在拖拽时应用移动光标，添加 `.uk-drag` class就行

```html
<div class="uk-drag"></div>
```

```example
<div class="uk-drag uk-width-small uk-padding uk-background-muted uk-text-center">
    <i uk-icon="icon: move; ratio: 2"></i>
</div>
```

要为[上传区域](upload.md)创建盒阴影，要添加 `.uk-dragover` class。
