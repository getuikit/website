# 表格

<p class="uk-text-lead">轻松创建好看的表格。</p>

## 用法

使用这个组件，需要在`<table>`元素上添加 `.uk-table` class。

```html
<table class="uk-table">
    <caption></caption>
    <thead>
        <tr>
            <th></th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <td></td>
        </tr>
    </tfoot>
    <tbody>
        <tr>
            <td></td>
        </tr>
    </tbody>
</table>
```

```example
<table class="uk-table">
    <caption>Table Caption</caption>
    <thead>
        <tr>
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
        </tr>
    </tfoot>
    <tbody>
        <tr>
            <td>Table Data</td>
            <td>Table Data</td>
            <td>Table Data</td>
        </tr>
        <tr>
            <td>Table Data</td>
            <td>Table Data</td>
            <td>Table Data</td>
        </tr>
    </tbody>
</table>
```

***

## 鼠标经过效果

添加 `.uk-table-hover` 带来鼠标经过时表格行上的效果。

```html
<table class="uk-table uk-table-hover">...</table>
```

```example
<table class="uk-table uk-table-hover">
    <thead>
        <tr>
            <th>Table Heading</th>
            <th>Table Heading</th>
            <th>Table Heading</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Table Data</td>
            <td>Table Data</td>
            <td>Table Data</td>
        </tr>
        <tr>
            <td>Table Data</td>
            <td>Table Data</td>
            <td>Table Data</td>
        </tr>
        <tr>
            <td>Table Data</td>
            <td>Table Data</td>
            <td>Table Data</td>
        </tr>
    </tbody>
</table>
```

***

## 条纹效果

添加 `.uk-table-striped` 应用斑马条纹效果。

```html
<table class="uk-table uk-table-striped">...</table>
```

```example
<table class="uk-table uk-table-striped">
    <thead>
        <tr>
            <th>Table Heading</th>
            <th>Table Heading</th>
            <th>Table Heading</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Table Data</td>
            <td>Table Data</td>
            <td>Table Data</td>
        </tr>
        <tr>
            <td>Table Data</td>
            <td>Table Data</td>
            <td>Table Data</td>
        </tr>
        <tr>
            <td>Table Data</td>
            <td>Table Data</td>
            <td>Table Data</td>
        </tr>
    </tbody>
</table>
```

***

## 缩小

添加 `.uk-table-small` 使表格单元格更加紧凑。

```html
<table class="uk-table uk-table-small">...</table>
```

```example
<table class="uk-table uk-table-small">
    <thead>
        <tr>
            <th>Table Heading</th>
            <th>Table Heading</th>
            <th>Table Heading</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Table Data</td>
            <td>Table Data</td>
            <td>Table Data</td>
        </tr>
        <tr>
            <td>Table Data</td>
            <td>Table Data</td>
            <td>Table Data</td>
        </tr>
        <tr>
            <td>Table Data</td>
            <td>Table Data</td>
            <td>Table Data</td>
        </tr>
    </tbody>
</table>
```

***


## 对齐

添加 `.uk-table-middle`来垂直对齐表格内容。可以将其用在 `<tr>` 或 `<td>` 元素上。

```html
<table class="uk-table uk-table-middle">...</table>
```

```example
<table class="uk-table uk-table-middle">
    <thead>
        <tr>
            <th>Table Heading</th>
            <th>Table Heading</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
            <td><button class="uk-button uk-button-default" type="button">Button</button></td>
        </tr>
        <tr>
            <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
            <td><button class="uk-button uk-button-default" type="button">Button</button></td>
        </tr>
    </tbody>
</table>
```

***

## 响应式表格

如果你的表格恰好比它的容器元素宽了一些或者最终在某个特定的视口宽度中显得太大，只需将表格放入带有`.uk-overflow-auto`的 `<div>` 元素中。当容器内部的元素比这个容器本身宽的时候，将会创建一个水平的滚动条。

```html
<div class="uk-overflow-auto">
    <table class="uk-table">...</table>
</div>
```

```example
<div class="uk-overflow-auto">
    <table class="uk-table uk-table-small">
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
                <th>Table Heading</th>
                <th>Table Heading</th>
                <th>Table Heading</th>
                <th>Table Heading</th>
            </tr>
        </thead>
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

## 修改表格列的宽度

要调整列的宽度或内容，可以使用下面这些class。只需将class添加到一个列单元格。推荐添加到表头单元格。

| Class               | Description                                                                                      |
|---------------------|--------------------------------------------------------------------------------------------------|
| `.uk-table-shrink ` | 添加到`<th>` 或 `<td>` 元素来缩小列的宽度适应它的内容    |
| `.uk-table-expand`  | 添加到`<th>` 或 `<td>` 元素扩展列的宽度填满剩余空间，并应用最小宽度。 |
| `.uk-width-*`       | 添加一个[宽度组件](width.md)的class到 `<th>` 或 `<td>`元素来调整列的宽度。  |

```html
<th class="uk-table-shrink"></th>
```

```example
<table class="uk-table">
    <thead>
        <tr>
            <th class="uk-table-shrink">Shrink</th>
            <th class="uk-table-expand">Expand</th>
            <th class="uk-width-small">Width Small</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Table Data</td>
            <td>Table Data</td>
            <td>Table Data</td>
        </tr>
        <tr>
            <td>Table Data</td>
            <td>Table Data</td>
            <td>Table Data</td>
        </tr>
    </tbody>
</table>
```

***

## 效果

可以使用以下 class了爱优化表格单元格及其特定内容的显示。

| Class                 | Description                                                                                                                                                                                                                           |
|-----------------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `.uk-table-link`      | 添加到`<th>`或 `<td>`元素，并插入一个`<a>`元素，使整个单元格变成链接。添加[链接](link.md)中的 `.uk-link-reset`来重置链接的默认样式。  |
| `.uk-preserve-width ` | 由于 UIkit 中图片默认是响应式的，所以在带有`.uk-table-shrink`的表格单元格中使用图片时，图片的宽度会缩小到0。要避免这样的情况，需要在`<img>` 上添加`.uk-preserve-width`  |
| `.uk-text-truncate`   | 在单元格上使用固定宽度时，你可能想要在`<td>`元素上添加这个class来截断文本。                                                                 |
| `.uk-text-nowrap`     | 添加这个 class 来阻止文本换行，比如在使用 `.uk-table-shrink`时     |

```html
<!-- Table link -->
<td class="uk-table-link">
    <a class="uk-link-reset" href=""></a>
</td>

<!-- Preserve width -->
<td>
    <img class="uk-preserve-width">
</td>

<!-- Text truncate -->
<td class="uk-text-truncate"></td>

<!-- Text nowrap -->
<td class="uk-text-nowrap"></td>
```

```example
<div class="uk-overflow-auto">
    <table class="uk-table uk-table-hover uk-table-middle">
        <thead>
            <tr>
                <th class="uk-table-shrink"></th>
                <th class="uk-table-shrink">Preserve</th>
                <th class="uk-table-expand">Expand + Link</th>
                <th class="uk-width-small">Truncate</th>
                <th class="uk-table-shrink uk-text-nowrap">Shrink + Nowrap</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input class="uk-checkbox" type="checkbox"></td>
                <td><img class="uk-preserve-width uk-border-circle" src="images/avatar.jpg" width="40" alt=""></td>
                <td class="uk-table-link">
                    <a class="uk-link-reset" href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</a>
                </td>
                <td class="uk-text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</td>
                <td class="uk-text-nowrap">Lorem ipsum dolor</td>
            </tr>
            <tr>
                <td><input class="uk-checkbox" type="checkbox"></td>
                <td><img class="uk-preserve-width uk-border-circle" src="images/avatar.jpg" width="40" alt=""></td>
                <td class="uk-table-link">
                    <a class="uk-link-reset" href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</a>
                </td>
                <td class="uk-text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</td>
                <td class="uk-text-nowrap">Lorem ipsum dolor</td>
            </tr>
            <tr>
                <td><input class="uk-checkbox" type="checkbox"></td>
                <td><img class="uk-preserve-width uk-border-circle" src="images/avatar.jpg" width="40" alt=""></td>
                <td class="uk-table-link">
                    <a class="uk-link-reset" href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</a>
                </td>
                <td class="uk-text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</td>
                <td class="uk-text-nowrap">Lorem ipsum dolor</td>
            </tr>
            <tr>
                <td><input class="uk-checkbox" type="checkbox"></td>
                <td><img class="uk-preserve-width uk-border-circle" src="images/avatar.jpg" width="40" alt=""></td>
                <td class="uk-table-link">
                    <a class="uk-link-reset" href="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</a>
                </td>
                <td class="uk-text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</td>
                <td class="uk-text-nowrap">Lorem ipsum dolor</td>
            </tr>
        </tbody>
    </table>
</div>
```