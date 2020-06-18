# 反相

<p class="uk-text-lead">在亮色或暗色背景上，使元素的样式反相。</p>

## 用法

在暗色背景上添加`.uk-light` class来增强元素的可见性。在使用深色样式时，在亮色背景上添加`.uk-dark` class。

**Note** 只有一个class会生效，取决于你使用的样式。例如，在使用带有亮色背景的样式时，只能使用`.uk-light` class 来优化暗色背景上的内容，文本也会在亮色背景上以深色显示，反之亦然。

```html
<div class="uk-light"></div>

<div class="uk-dark"></div>
```

```example
<div class="uk-child-width-1-2@s" uk-grid>
    <div>
        <div class="uk-light uk-background-secondary uk-padding">
            <h3>Light</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <button class="uk-button uk-button-default">Button</button>
        </div>
    </div>
    <div>
        <div class="uk-dark uk-background-muted uk-padding">
            <h3>Dark</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <button class="uk-button uk-button-default">Button</button>
        </div>
    </div>
</div>
```

**Note** Some modifiers from the [Section](section.md), [Card](card.md), [Overlay](overlay.md) and [Off-canvas](offcanvas.md) component are extending the inverse style automatically, so you don't have to add any class.