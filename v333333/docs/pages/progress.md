# 进度条

<p class="uk-text-lead">就是进度条，识得唔识得啊？</p>

## 用法

在`<progress>`元素上添加`.uk-progress` class 来使用此组件。

```html
<progress class="uk-progress" value="" max=""></progress>
```

```example
<progress id="progressbar" class="uk-progress" value="10" max="100"></progress>

<script>

    jQuery(function () {

        var animate = setInterval(function () {

            window.progressbar && (progressbar.value += 10);

            if (!window.progressbar || progressbar.value >= progressbar.max) {
                clearInterval(animate);
            }

        }, 1000);

    });

</script>
```
