# Less

<p class="uk-text-lead">了解如何修改 UIkit 的样式，以及如何创建你自己的主题。</p>

当你[安装](installation.md)了带有 Less 源码的 UIkit，你可以将其编译以及添加你自己的自定义主题。UIkit 的样式是用[Less](http://lesscss.org/)编写的。它允许你在构建过程中引入自定义的样式，这比手动覆写 CSS 省事多了。

***

## 使用你自己的构建过程

要将 UIkit 引入到你的项目的构建流程中，你必须在你的项目的 LESS 文件中引入UIkit的核心样式(`uikit.less`)，或者，引入默认主题(`uikit.theme.less`)。之后，你需要编译这个主要的 Less 文件，选择你喜欢的编译方式就行。如果你不确定要怎样编译Less，务必阅读 [Less 官方文档](http://lesscss.org/usage/)。

```less
// 引入 UIkit 默认主题（或者只含有核心样式的 uikit.less）
@import "bower_components/uikit/src/less/uikit.theme.less";

// 在此编辑你的代码，e.g. mixins, variables.
// 查阅“如何创建主题”，了解更多信息
```

***

## 使用现成的构建过程

如果想要修改 UIkit 的样式，可以使用它的构建过程来创建不同的 CSS 版本，然后可以在你的项目中使用。这样你就不用在自己去设置构建过程了。

要在构建过程中引入你自己的 Less 主题，需要创建一个 `/custom` 目录来包含所有自定义主题。

**Note** 这个 `/custom` 文件夹已经列入到 `.gitignore` 中了，它会避免将你的自定义文件推送到 UIkit 仓库。你还可以将`/custom`目录设置为你自己的 Git 仓库。这样你的主题文件就拥有了版本控制，不会再受到 UIkit 文件的影响。

创建文件 `/custom/my-theme.less` （或者任意其他文件名）并引入 UIkit 核心样式 (`uikit.less`) 或者带有默认主题的 (`uikit.theme.less`)。

```less
// Import UIkit default theme (or uikit.less with only core styles)
@import "../src/less/uikit.theme.less";

// Your custom code goes here, e.g. mixins, variables.
// See "how to create a theme" below for more info.
```

运行 npm 命令 `compile` ，将 UIkit 和你的自定义主题编译成为 CSS。

```sh
# 运行一次安装所有依赖 
npm install

# 在每次需要编译 UIkit 或你自己的主题时运行。
npm run compile
```

生成的 CSS 会被放在 `/dist/css` 文件夹中。

**Note** 自定义主题同样可用于测试文件中，只需要在浏览器中访问 `/test` 目录，并在下拉菜单中选择你的主题就行。

***

## 创建 UIkit 主题

当你创建了一个用于放置你自己的 LESS 代码的文件，你就可以开始以你的方式来做 UIkit 主题了。如果你从未使用过 LESS，查看[LESS 的语言特性](http://lesscss.org/features/)。在使用 UIKit 的 LESS 源码时，我们有一些建议。

### 使用变量

通过简单地覆写已声明的变量，就能进行大量的自定义。在各个组件的 LESS 文件中还能找到它们的所有变量，你可以在你的主题中覆写它们。

首先，在 UIkit 源码中找到你想要修改的 LESS 变量。例如，全局的链接颜色是在这个`/src/less/components/variables.less` 文件中定义的：

```less
// default value
@global-link-color: #4091D2;
```

然后，在你自己的文件中覆写默认值，添加一个自定义的数值，比如在 `/custom/my-theme.less` 中：

```less
// new value
@global-link-color: #DA7D02;
```

编译后的 CSS 就是你的自定义值了。但不仅仅是全局的链接颜色改变了。许多用到 `@global-*` 变量来推算自身颜色的组件都会被轻易地改变。这样，你就可以通过改变某些全局变量的值来快速创建一份 UIKIT 主题了。

### 使用钩子

为了避免架空选择器，我们在 UIkit 源码中使用[Less](http://lesscss.org)中的 Mixins 钩住了预定义的选择器并应用了一些额外的属性。不必再在所有文档中重复选择器了，也使得全局修改变得更加容易。

首先，查阅组件的 LESS 文件，找到你想要扩展的的规则，比如在卡片组件的 `/src/less/components/card.less` 文件中：

```less
// CSS rule
.uk-card {
    position: relative;
    box-sizing: border-box;

    // mixin to allow adding new declarations
    .hook-card;
}
```

然后，通过在自己的 LESS 文件中使用钩子来注入额外的 CSS，比如在 `/custom/my-theme.less`中：

```less
// mixin to add new declaration
.hook-card() { color: #000; }
```

### 多才多艺的钩子

如果没有可用的变量和钩子，你还可以自己创建选择器。为此，可以使用 _.hook-card-misc_ 钩子，将你的选择器写在钩子中。这将会把你的选择器指派到已编译的 CSS 文件的正确位置。只需在你的 LESS 文件中添加下面几行代码就行，例如 `/custom/my-theme.less`：

```less
// misc mixin
.hook-card-misc() {

    // new rule
    .uk-card a { color: #f00; }
}
```

## 如何构建你的主题

上面的例子中，我们直接将所有自定义规则添加到了 `/custom/my-theme.less` 中。当你修改了少量的变量，你感到满意，这是很不错。然而，为了更大范围地定制主题，我们只推荐使用此文件作为面向 LESS 编译器的入口。你应该在一个子目录中为每个组件的独立文件更好地对它们的规则进行排序。这与默认的 UIkit 主题 `/src/less/uikit.theme.less` 的架构方式是一样的。

**Note** 这个例子假定你在 UIkit 项目的 `/custom` 目录中构建了主题。如果你做过构建流程，应该熟悉这些路径。

```html
custom/

    <!-- entry file for Less compiler -->
    my-theme.less

    <!-- folder with single Less files -->
    my-theme/

        <!-- imports all components in this folder -->
        _import.less

        <!-- one file per customized component -->
        accordion.less
        alert.less
        ...
```

面向 LESS 编译器的入口， `/custom/my-theme.less`:

```less
// Core
@import "../../src/less/uikit.less";

// Theme
@import "my-theme/_import.less";
```

你的主题目录有一个引入了所有独立组件自定义项的文件， `custom/my-theme/_import.less`:

```
@import "accordion.less";
@import "alert.less";
// ...
```
