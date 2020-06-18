# 文本列

<p class="uk-text-lead">将内容显示在多个文本列中，而不需要将内容分到多个容器里。</p>

## 用法

添加一个 `.uk-column-*` 类到元素中，使它的内容呈多列显示。

| Class | Description |
| ----- | ----------- |
| `.uk-column-1-2` | 以两列显示内容 |
| `.uk-column-1-3` | 以三列显示内容 |
| `.uk-column-1-4` | 以四列显示内容 |
| `.uk-column-1-5` | 以五列显示内容 |
| `.uk-column-1-6` | 以六列显示内容 |

```html
<div class="uk-column-1-2"></div>
```

```example
<div class="uk-column-1-2">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>

    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
</div>
```

***

## 响应式

UIkit提供了一系列响应式文本列 class。通常它们与一般的文本列class效果相同，但是会在特定的视口宽度下，启用响应式行为。

| Class | Description |
| --- | --- |
| `.uk-column-1-2@s` to `.uk-column-1-6@s`| 在 _640px_ 以上视口宽度生效 |
| `.uk-column-1-2@m` to `.uk-column-1-6@m` | 在 _960px_ 以上视口宽度生效 |
| `.uk-column-1-2@l` to `.uk-column-1-6@l`  | 在 _1200px_ 以上视口宽度生效 |
| `.uk-column-1-2@xl` to `.uk-column-1-6@xl`  | 在 _1600px_ 以上视口宽度生效 |

```html
<div class="uk-column-1-2@s uk-column-1-3@m uk-column-1-4@l"></div>
```

```example
<div class="uk-column-1-2@s uk-column-1-3@m uk-column-1-4@l">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>

    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
</div>
```

***

## 分割线

添加 `.uk-column-divider` class，显示列与列之间的垂直分割线。

```html
<div class="uk-column-1-2 uk-column-divider"></div>
```

```example
<div class="uk-column-1-2 uk-column-divider">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>

    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
</div>
```

***

## 横跨所有列

要使一个行内元素横跨所有列的宽度，要为该元素添加 `.uk-column-span` class。

```html
<div class="uk-column-1-2">
    ...
    <p class="uk-column-span"></p>
    ...
</div>
```

```example
<div class="uk-column-1-2 uk-column-divider">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>

    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <blockquote cite="#" class="uk-column-span">
        <p>All we have to decide is what to do with the time that is given us.</p>
        <footer>Gandalf in in <cite><a href="">The Fellowship of the Ring</a></cite></footer>
    </blockquote>

    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</p>
</div>
```
