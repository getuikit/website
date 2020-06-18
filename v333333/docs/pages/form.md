# 表单

<p class="uk-text-lead">轻松创建拥有各种样式和布局的漂亮表单。</p>

## 用法

在`<form>`元素内的表单控件上添加以下 class 来定义表单组件。

| Class         | Description                                                   |
|---------------|---------------------------------------------------------------|
| `.uk-input`   | 添加到 `<input>`                      |
| `.uk-select`   | 添加到 `<select>`                     |
| `.uk-textarea` | 添加到 `<textarea>`                  |
| `.uk-radio`    | 添加到 `<input type="radio">` 创建单选按钮 |
| `.uk-checkbox` | 添加到 `<input type="checkbox">` 创建多选框   |

```html
<form>
    <select class="uk-select">
        <option></option>
        <option></option>
    </select>
    <textarea class="uk-textarea"></textarea>
    <input class="uk-radio" type="radio">
    <input class="uk-checkbox" type="checkbox">
</form>
```

将 `.uk-fieldset` 添加到 `<fieldset>` 元素，将 `.uk-legend` 添加到 `<legend>`元素来定义控件组和表单说明。

```example
<form>
    <fieldset class="uk-fieldset">

        <legend class="uk-legend">Legend</legend>

        <div class="uk-margin">
            <input class="uk-input" type="text" placeholder="Input">
        </div>

        <div class="uk-margin">
            <select class="uk-select">
                <option>Option 01</option>
                <option>Option 02</option>
            </select>
        </div>

        <div class="uk-margin">
            <textarea class="uk-textarea" rows="5" placeholder="Textarea"></textarea>
        </div>

        <div class="uk-margin uk-grid-small uk-child-width-auto" uk-grid>
            <label><input class="uk-radio" type="radio" name="radio2" checked> A</label>
            <label><input class="uk-radio" type="radio" name="radio2"> B</label>
        </div>

        <div class="uk-margin uk-grid-small uk-child-width-auto" uk-grid>
            <label><input class="uk-checkbox" type="checkbox" checked> A</label>
            <label><input class="uk-checkbox" type="checkbox"> B</label>
        </div>

    </fieldset>
</form>
```

***

## 状态

使用以下 class 为用户提供基础的反馈信息状态。

| Class              | Description                                                        |
|--------------------|--------------------------------------------------------------------|
| `.uk-form-danger`  | 添加到通知消息，表示验证未通过 |
| `.uk-form-success` | 表示验证通过了     |

在表单控件上添加 `disabled`属性，来淡化表单的视觉效果。

```example
<div class="uk-margin">
    <input class="uk-input uk-form-danger uk-form-width-medium" type="text" placeholder="form-danger" value="form-danger">
</div>

<div class="uk-margin">
    <input class="uk-input uk-form-success uk-form-width-medium" type="text" placeholder="form-success" value="form-success">
</div>

<div class="uk-margin">
    <input class="uk-input uk-form-width-medium" type="text" placeholder="disabled" value="disabled" disabled>
</div>
```

***

## 尺寸

添加一个到 `<input>`, `<select>` 或 `<textarea>` 来调整尺寸。

| Class            | Description                                 |
|------------------|---------------------------------------------|
| `.uk-form-large` | 使表单元素更大   |
| `.uk-form-small` | 使表单元素变小 |

```example
<form>

    <div class="uk-margin">
        <input class="uk-input uk-form-width-medium uk-form-large" type="text" placeholder="Large">
    </div>

    <div class="uk-margin">
        <input class="uk-input uk-form-width-medium" type="text" placeholder="Default">
    </div>

    <div class="uk-margin">
        <input class="uk-input uk-form-width-medium uk-form-small" type="text" placeholder="Small">
    </div>

</form>
```

***

## 宽度

添加一个到 `<input>`, `<select>` 或 `<textarea>`调整它们的宽度。

| Class                   | Description               |
|-------------------------|---------------------------|
| `.uk-form-width-large`  | Applies a width of _500px_. |
| `.uk-form-width-medium` | Applies a width of _200px_. |
| `.uk-form-width-small`  | Applies a width of _130px_. |
| `uk-form-width-xsmall`  | Applies a width of _40px_.  |

```example
<form>

    <div class="uk-margin">
        <input class="uk-input uk-form-width-large" type="text" placeholder="Large">
    </div>

    <div class="uk-margin">
        <input class="uk-input uk-form-width-medium" type="text" placeholder="Medium">
    </div>

    <div class="uk-margin">
        <input class="uk-input uk-form-width-small" type="text" placeholder="Small">
    </div>

    <div class="uk-margin">
        <input class="uk-input uk-form-width-xsmall" type="text" placeholder="XSmall">
    </div>

</form>
```

还可以在表单控件上使用[宽度组件](width.md)的 `.uk-width-*`。

```example
<form>
    <input class="uk-input uk-width-1-2" type="text" placeholder="uk-width-1-2">
</form>
```

***

## 白板表单

添加 `.uk-form-blank`使表单控件的样式极简化。

```example
<form>
    <input class="uk-input uk-form-blank uk-form-width-medium" type="text" placeholder="Form blank">
</form>
```

***

## 布局

可以使表单label和空间堆叠或水平布局。下面这些布局调整class可以用在任意元素上，比如`<fieldset>`>。这样就能使每个控件组拥有各自不同的布局了。

| Class                 | Description                                                 |
|-----------------------|-------------------------------------------------------------|
| `.uk-form-stacked`    | label显示在控件上方   |
| `.uk-form-horizontal` | label显示在控件同一行  |
| `.uk-form-label`    | 定义表单的 labels       |
| `.uk-form-controls`    | 定义表单控件     |

```html
<form class="uk-form-stacked">
    <div>
        <label class="uk-form-label"></label>
        <div class="uk-form-controls">...</div>
    </div>
    <div>
        <div class="uk-form-label"></div>
        <div class="uk-form-controls">...</div>
    </div>
</form>
```

```example
<form class="uk-form-stacked">

    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Text</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="text" placeholder="Some text...">
        </div>
    </div>

    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-select">Select</label>
        <div class="uk-form-controls">
            <select class="uk-select" id="form-stacked-select">
                <option>Option 01</option>
                <option>Option 02</option>
            </select>
        </div>
    </div>

    <div class="uk-margin">
        <div class="uk-form-label">Radio</div>
        <div class="uk-form-controls">
            <label><input class="uk-radio" type="radio" name="radio1"> Option 01</label><br>
            <label><input class="uk-radio" type="radio" name="radio1"> Option 02</label>
        </form>
    </div>

</form>
```

***

### 水平表单

使用 `.uk-form-controls-text` 使多选框和单选按钮更好地与文本对齐在水平线上。.

```html
<form class="uk-form-horizontal">
    <div>
        <label class="uk-form-label"></label>
        <div class="uk-form-controls">...</div>
    </div>
    <div>
        <div class="uk-form-label"></div>
        <div class="uk-form-controls uk-form-controls-text">...</div>
    </div>
</form>
```

```example
<form class="uk-form-horizontal uk-margin-large">

    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Text</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" type="text" placeholder="Some text...">
        </div>
    </div>

    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-select">Select</label>
        <div class="uk-form-controls">
            <select class="uk-select" id="form-horizontal-select">
                <option>Option 01</option>
                <option>Option 02</option>
            </select>
        </div>
    </div>

    <div class="uk-margin">
        <div class="uk-form-label">Radio</div>
        <div class="uk-form-controls uk-form-controls-text">
            <label><input class="uk-radio" type="radio" name="radio1"> Option 01</label><br>
            <label><input class="uk-radio" type="radio" name="radio1"> Option 02</label>
        </div>
    </div>

</form>
```

***

## 表单与图标

在表单中使用[图标](icon.md)。在`<span>`上添加 `.uk-form-icon`。在容器元素上添加`.uk-inline`，使图标和 `<input>`元素编组。图标必须是第一个表情。默认地，图标会被放置在表单的左侧，添加`.uk-form-icon-flip`可以使图标移动到右侧去。 

```html
<div class="uk-inline">
    <span class="uk-form-icon" uk-icon="icon: user"></span>
    <input class="uk-input">
</div>
```

```example
<form>

    <div class="uk-margin">
        <div class="uk-inline">
            <span class="uk-form-icon" uk-icon="icon: user"></span>
            <input class="uk-input" type="text">
        </div>
    </div>

    <div class="uk-margin">
        <div class="uk-inline">
            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
            <input class="uk-input" type="text">
        </div>
    </div>

</form>
```

***

### 可点击的图标

要启动某种操作，比如打开模态对话框来选择图片或者链接，可以使用`<a>` 或 `<button>` 来创建图标。

```html
<div class="uk-inline">
    <a class="uk-form-icon uk-form-icon-flip" href="" uk-icon="icon: user"></a>
    <input class="uk-input">
</div>
```

```example
<form>

    <div class="uk-margin">
        <div class="uk-inline">
            <a class="uk-form-icon" href="#" uk-icon="icon: pencil"></a>
            <input class="uk-input" type="text">
        </div>
    </div>

    <div class="uk-margin">
        <div class="uk-inline">
            <a class="uk-form-icon uk-form-icon-flip" href="#" uk-icon="icon: link"></a>
            <input class="uk-input" type="text">
        </div>
    </div>

</form>
```

***

## 表单与网格

将[网格](grid.md)和[宽度](width.md)组件结合使用来创建表单的布局。

```example
<form class="uk-grid-small" uk-grid>
    <div class="uk-width-1-1">
        <input class="uk-input" type="text" placeholder="100">
    </div>
    <div class="uk-width-1-2@s">
        <input class="uk-input" type="text" placeholder="50">
    </div>
    <div class="uk-width-1-4@s">
        <input class="uk-input" type="text" placeholder="25">
    </div>
    <div class="uk-width-1-4@s">
        <input class="uk-input" type="text" placeholder="25">
    </div>
    <div class="uk-width-1-2@s">
        <input class="uk-input" type="text" placeholder="50">
    </div>
    <div class="uk-width-1-2@s">
        <input class="uk-input" type="text" placeholder="50">
    </div>
</form>
```

***

## 自定义控件

使用自己的代码来替换文本表单或选择表单，比如使用按钮或者文本，需要在容器元素上添加 `uk-form-custom`属性。

### 文件

使用按钮或文本作为文件表单。

```html
<div uk-form-custom>
    <input type="file">
    <button type="button"></button>
</div>
```

```example
<form>

    <div class="uk-margin">
        <div uk-form-custom>
            <input type="file">
            <button class="uk-button uk-button-default" type="button" tabindex="-1">Select</button>
        </div>
    </div>

    <div class="uk-margin">
        <span class="uk-text-middle">Here is a text</span>
        <div uk-form-custom>
            <input type="file">
            <span class="uk-link">upload</span>
        </div>
    </div>

    <div class="uk-margin" uk-margin>
        <div uk-form-custom="target: true">
            <input type="file">
            <input class="uk-input uk-form-width-medium" type="text" placeholder="Select file" disabled>
        </div>
        <button class="uk-button uk-button-default">Submit</button>
    </div>

</form>
```

***

### 选择表单

使用按钮、文本或者链接作为选择表单。将 `target: SELECTOR` 选项添加到 `uk-form-custom`属性，决定在何处显示可选值。 `target: true` 将会选择相邻的元素。

```html
<div uk-form-custom="target: true">
    <select>
        <option></option>
        <option></option>
    </select>
    <button type="button"></button>
</div>
```

```example
<form>

    <div class="uk-margin">
        <div uk-form-custom="target: true">
            <select>
                <option value="1">Option 01</option>
                <option value="2">Option 02</option>
                <option value="3">Option 03</option>
                <option value="4">Option 04</option>
            </select>
            <span></span>
        </div>
    </div>

    <div class="uk-margin">
        <div uk-form-custom="target: > * > span:last">
            <select>
                <option value="1">Option 01</option>
                <option value="2">Option 02</option>
                <option value="3">Option 03</option>
                <option value="4">Option 04</option>
            </select>
            <span class="uk-link">
                <span uk-icon="icon: pencil"></span>
                <span></span>
            </span>
        </div>
    </div>

    <div class="uk-margin">
        <div uk-form-custom="target: > * > span:first">
            <select>
                <option value="">Please select...</option>
                <option value="1">Option 01</option>
                <option value="2">Option 02</option>
                <option value="3">Option 03</option>
                <option value="4">Option 04</option>
            </select>
            <button class="uk-button uk-button-default" type="button" tabindex="-1">
                <span></span>
                <span uk-icon="icon: chevron-down"></span>
            </button>
        </div>
    </div>

</form>
```

***

## 组件选项

可以添加这些选项到 `uk-form-custom`属性。 [Learn more](javascript.md#component-configuration)

| Option   | Value                 | Default | Description           |
|----------|-----------------------|---------|-----------------------|
| `target` | CSS selector, Boolean | false   | 显示可选值的目标位置 |

***

## JavaScript

Learn more about [JavaScript components](javascript.md#programmatic-use).

### 初始化

```js
UIkit.formCustom(element, options);
```
