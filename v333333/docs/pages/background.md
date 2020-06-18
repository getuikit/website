# 背景

<p class="uk-text-lead">为元素添加各种背景效果。</p>

## 用法

添加以下 class 为元素设置背景色彩。每个修饰class的实际色彩取决于你选用的或定制的 UIkit 样式。

| Class                      | Description                                              |
|----------------------------|----------------------------------------------------------|
| `.uk-background`           | 应用默认的背景色彩  |
| `.uk-background-muted`     | 应用柔和的背景色彩       |
| `.uk-background-primary`   | 应用主要的、突出的背景色彩    |
| `.uk-background-secondary` | 应用次要的背景色彩 |

```html
<div class="uk-background-primary"></div>
```

**Note** 要让内容在各种背景上具有良好的可见性，需要添加[反相组件](inverse.md)中的 `.uk-light` 或 `.uk-dark` class 来增加对比度。 

```example
<div class="uk-child-width-1-2@s uk-text-center" uk-grid>
    <div>
        <div class="uk-background uk-padding uk-panel">
            <p class="uk-h4">Default</p>
        </div>
    </div>
    <div>
        <div class="uk-background-muted uk-padding uk-panel">
            <p class="uk-h4">Muted</p>
        </div>
    </div>
    <div>
        <div class="uk-background-primary uk-light uk-padding uk-panel">
            <p class="uk-h4">Primary</p>
        </div>
    </div>
    <div>
        <div class="uk-background-secondary uk-light uk-padding uk-panel">
            <p class="uk-h4">Secondary</p>
        </div>
    </div>
</div>
```

***

## 尺寸调整

此组件的以下class能保持原有比例地设置背景图片的尺寸。 

| Class                    | Description                                                                                    |
|--------------------------|------------------------------------------------------------------------------------------------|
| `.uk-background-cover`   | 缩放背景图片完整覆盖内含的区域                      |
| `.uk-background-contain` | 缩放背景图片直到它的宽度或高度填满内含区域。  |

**Note** 在使用这些class时，背景定位会自动地以其中间位置为准，并且将 background-repeat 设置为 no-repeat。

```html
<div class="uk-background-cover"></div>
```

```example
<div class="uk-child-width-1-2@s uk-light" uk-grid>
    <div>
        <div class="uk-background-cover uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(../docs/images/dark.jpg);">
            <p class="uk-h4">Cover</p>
        </div>
    </div>
    <div>
        <div class="uk-background-contain uk-background-muted uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(../docs/images/dark.jpg);">
            <p class="uk-h4">Contain</p>
        </div>
    </div>
</div>
```

***

## 定位调整

改变图片在背景中的定位，可以使用下面这些class。默认情况下，定位是以左上角为准的。 

| Class                          | Description                                                          |
|--------------------------------|----------------------------------------------------------------------|
| `.uk-background-top-left`      | 图片的初始定位在左上角   |
| `.uk-background-top-center`    | 图片的初始定位在顶部The initial position of the image is at the top.                      |
| `.uk-background-top-right`     | 图片的初始定位在右上角   |
| `.uk-background-center-left`   | 图片的初始定位在左侧               |
| `.uk-background-center-center` | 图片的初始定位在中间               |
| `.uk-background-center-right`  | 图片的初始定位在右侧                  |
| `.uk-background-bottom-left`   | 图片的初始定位在左下角 |
| `.uk-background-bottom-center` | 图片的初始定位在底部              |
| `.uk-background-bottom-right`  | 图片的初始定位在右下角  |

```html
<div class="uk-background-top-left"></div>
```

```example
<div class="uk-child-width-1-2@s uk-light" uk-grid>
    <div>
        <div class="uk-background-top-right uk-height-medium uk-panel uk-flex uk-flex-middle uk-flex-center" style="background-image: url(../docs/images/dark.jpg);">
            <p class="uk-h4">Top Right</p>
        </div>
    </div>
    <div>
        <div class="uk-background-top-left uk-height-medium uk-panel uk-flex uk-flex-middle uk-flex-center" style="background-image: url(../docs/images/dark.jpg);">
            <p class="uk-h4">Top Left</p>
        </div>
    </div>
</div>
```

***

### 不重复

要避免小图片重复填充背景区域，要添加 `.uk-background-no-repeat` class。在与背景定位class搭配使用时很有帮助。 

```html
<div class="uk-background-norepeat"></div>
```

```example
<div class="uk-background-norepeat uk-background-center-center uk-height-medium uk-width-large" style="background-image: url(../docs/images/dark.jpg);"></div>
```

***

### 依附/Attachment

还可以应用固定背景依附效果，这样，页面滚动时，图片依然保持它的位置不动。 

```html
<div class="uk-background-fixed"></div>
```

```example
<div class="uk-background-fixed uk-background-center-center uk-height-medium uk-width-large" style="background-image: url(../docs/images/dark.jpg);"></div>
```

***

## 响应式

添加以下class显示背景图片在特定视口尺寸下的显示状态。比如，在手机屏幕上图片和内容重叠导致文本难以辨认的情况下，使用这些class非常有帮助。

| Class                     | Description                                                         |
|---------------------------|---------------------------------------------------------------------|
| `.uk-background-image@s`  | 在 _640px_ 以上设备宽度中显示图片  |
| `.uk-background-image@m`  | 在_960px_ 以上设备宽度中显示图片  |
| `.uk-background-image@l`  | 在_1200px_ 以上设备宽度中显示图片 |
| `.uk-background-image@xl` | 在 _1600px_ 以上设备宽度中显示图片 |

```html
<div class="uk-background-image@m"></div>
```

调整浏览器窗口尺寸查看下面例子的效果。 

```example
<div class="uk-background-image@m uk-background-cover uk-background-muted uk-height-medium uk-width-large uk-flex uk-flex-center uk-flex-middle" style="background-image: url(../docs/images/dark.jpg);">
    <p class="uk-h4 uk-margin-remove uk-visible@m uk-light">Image shown</p>
    <p class="uk-h4 uk-margin-remove uk-hidden@m">Image not shown</p>
</div>
```

***

## Blend modes

添加以下 class 中任意一个为背景图片应用不同的混合模式。可以与背景色彩class一起使用为了更好地理解背景混合模式是怎样工作的，查看这篇文章吧：[CSS Tricks article](https://css-tricks.com/almanac/properties/b/background-blend-mode/).

查看后面的例子，了解下表中各种实际效果。


| Class                              | Description                                               |
|------------------------------------|-----------------------------------------------------------|
| `.uk-background-blend-multiply`    | This class sets the blend mode to multiply.    |
| `.uk-background-blend-screen`      | This class sets the blend mode to screen.      |
| `.uk-background-blend-overlay`     | This class sets the blend mode to overlay.     |
| `.uk-background-blend-darken`      | This class sets the blend mode to darken.      |
| `.uk-background-blend-lighten`     | This class sets the blend mode to lighten.     |
| `.uk-background-blend-color-dodge` | This class sets the blend mode to color dodge. |
| `.uk-background-blend-color-burn`  | This class sets the blend mode to color burn.  |
| `.uk-background-blend-hard-light`  | This class sets the blend mode to hard light.  |
| `.uk-background-blend-soft-light`  | This class sets the blend mode to soft light.  |
| `.uk-background-blend-difference`  | This class sets the blend mode to difference.  |
| `.uk-background-blend-exclusion`   | This class sets the blend mode to exclusion.   |
| `.uk-background-blend-hue`         | This class sets the blend mode to hue.         |
| `.uk-background-blend-saturation`  | This class sets the blend mode to saturation.  |
| `.uk-background-blend-color`       | This class sets the blend mode to color.       |
| `.uk-background-blend-luminosity`  | This class sets the blend mode to luminosity.  |

```html
<div class="uk-background-blend-multiply uk-background-primary"></div>
```

```example
<div class="uk-child-width-1-2 uk-child-width-1-3@s uk-grid-small uk-light" uk-grid>
    <div>
        <div class="uk-background-blend-multiply uk-background-primary uk-background-cover uk-height-small uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(../docs/images/dark.jpg);">
            <p class="uk-h4">Multiply</p>
       </div>
    </div>
    <div>
        <div class="uk-background-blend-screen uk-background-primary uk-background-cover uk-height-small uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(../docs/images/dark.jpg);">
            <p class="uk-h4">Screen</p>
        </div>
    </div>
    <div>
        <div class="uk-background-blend-overlay uk-background-primary uk-background-cover uk-height-small uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(../docs/images/dark.jpg);">
            <p class="uk-h4">Overlay</p>
        </div>
    </div>
    <div>
        <div class="uk-background-blend-darken uk-background-primary uk-background-cover uk-height-small uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(../docs/images/dark.jpg);">
            <p class="uk-h4">Darken</p>
        </div>
    </div>
    <div>
        <div class="uk-background-blend-lighten uk-background-primary uk-background-cover uk-height-small uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(../docs/images/dark.jpg);">
            <p class="uk-h4">Lighten</p>
        </div>
    </div>
    <div>
        <div class="uk-background-blend-color-dodge uk-background-primary uk-background-cover uk-height-small uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(../docs/images/dark.jpg);">
            <p class="uk-h4">Color Dodge</p>
        </div>
    </div>
    <div>
        <div class="uk-background-blend-color-burn uk-background-primary uk-background-cover uk-height-small uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(../docs/images/dark.jpg);">
            <p class="uk-h4">Color Burn</p>
        </div>
    </div>
    <div>
        <div class="uk-background-blend-hard-light uk-background-primary uk-background-cover uk-height-small uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(../docs/images/dark.jpg);">
            <p class="uk-h4">Hard Light</p>
        </div>
    </div>
    <div>
        <div class="uk-background-blend-soft-light uk-background-primary uk-background-cover uk-height-small uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(../docs/images/dark.jpg);">
            <p class="uk-h4">Soft Light</p>
        </div>
    </div>
    <div>
        <div class="uk-background-blend-difference uk-background-primary uk-background-cover uk-height-small uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(../docs/images/dark.jpg);">
            <p class="uk-h4">Difference</p>
        </div>
    </div>
    <div>
        <div class="uk-background-blend-exclusion uk-background-primary uk-background-cover uk-height-small uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(../docs/images/dark.jpg);">
            <p class="uk-h4">Exclusion</p>
        </div>
    </div>
    <div>
        <div class="uk-background-blend-hue uk-background-primary uk-background-cover uk-height-small uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(../docs/images/dark.jpg);">
            <p class="uk-h4">Hue</p>
        </div>
    </div>
    <div>
        <div class="uk-background-blend-saturation uk-background-primary uk-background-cover uk-height-small uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(../docs/images/dark.jpg);">
            <p class="uk-h4">Saturation</p>
        </div>
    </div>
    <div>
        <div class="uk-background-blend-color uk-background-primary uk-background-cover uk-height-small uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(../docs/images/dark.jpg);">
            <p class="uk-h4">Color</p>
        </div>
    </div>
    <div>
        <div class="uk-background-blend-luminosity uk-background-primary uk-background-cover uk-height-small uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(../docs/images/dark.jpg);">
            <p class="uk-h4">Luminosity</p>
        </div>
    </div>
</div>
```
