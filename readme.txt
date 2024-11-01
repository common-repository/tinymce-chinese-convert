=== TinyMCE Chinese Convert ===
Contributors: eflyjason
Donate link: https://www.arefly.com/donate/
Tags: Chinese, Post, TinyMCE
Requires at least: 3.0
Tested up to: 5.8
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

一鍵在部落格「文章編輯」頁面將你的文章轉換為簡體或繁體

== Description ==

是不是寫文章時經常需要從不同地方拷貝一些參考資料？懶得每個字逐個翻譯成自己地區的語言（簡體/繁體）？

快來使用這個外掛吧！

有了這個外掛，你可以一鍵在部落格「文章編輯」頁面將你的文章（或者你所選的部分）轉換為簡體或繁體

同時，本外掛會自動將文字轉換為不同地區的習慣用語（例如「伺服器」->「服务器」等等）

心動不如行動！快來使用這個實用又方便的外掛吧！

English Introduction: Let you can convert your post content (or the part that your select) between Chinese Traditional and Chinese Simplified just by click the button in the post editor page.

Note: If your blog's language is not Chinese, this plugin will not do anything.

== Installation ==

###Updgrading From A Previous Version###

To upgrade from a previous version of this plugin, delete the entire folder and files from the previous version of the plugin and then follow the installation instructions below or you can just click the "Update" button in the Wordpress's Admin Panel.

###Installing The Plugin###

Extract all files from the ZIP file, making sure to keep the file structure intact, and then upload it to `/wp-content/plugins/`.

This should result in the following file structure:

`- wp-content
    - plugins
        - preview-blog-draft
            | convert_simplified.js
            | convert_simplified.min.js
            | convert_traditional.js
            | convert_traditional.min.js
            | convert.js
            | convert.min.js
            - img
                | convert_simplified.png
                | convert_simplified.psd
                | convert_traditional.png
                | convert_traditional.psd
            | LICENSE
            | license.txt
            | readme.txt
            | tinymce-chinese-convert.php`

Then just visit your admin area and activate the plugin.

**See Also:** ["Installing Plugins" article on the WP Codex](http://codex.wordpress.org/Managing_Plugins#Installing_Plugins)

== Frequently Asked Questions ==

= I cannot active this plugin, what can i do? =

You may post on the [support forum of this plugin](http://wordpress.org/support/plugin/tinymce-chinese-convert/) to ask for help.

= I love this plugin! Can I donate to you? 我可以給你捐款麼？ =

YES! I do this in my free time and I appreciate all donations that I get. It makes me want to continue to update this plugin. You can find more details on [About Me Page](https://www.arefly.com/about/).

當然可以！你的捐款將會是我更新外掛的動力，詳細請訪問[關於我頁面](https://www.arefly.com/about/).

== Screenshots ==

1. 外掛將在「文章編輯」頁面內添加「简」「繁」兩個按鈕 (English: The plugin will add two buttons with 简 (Simplified) and 繁 (Traditional) to the "Post Edit" Page.)

== Changelog ==

**Version 1.2.6**

* Minor bug fix.

* 錯誤修復

**Version 1.2.5**

* Update Readme File.

* Add Uncompressed JS File & Using Minified JS File.

* 移除所有遠端載入文件

* 加入未壓縮的JS文件並使用壓縮過的JS文件

**Version 1.2.4**

* Remove All Remote Load File.

* 移除所有遠端載入文件

**Version 1.2.3**

* Fix Bug of `define`. (Thanks to cmhello)

* 修復關於 `define` 的BUG（感謝cmhello）

**Version 1.2.2**

* Update Readme File.

* 更新「讀我」文件

**Version 1.2.1**

* Add Banners.

* 添加外掛橫幅

**Version 1.2**

* Auto convert text to difference locate's text.

* 自動將文字轉換為不同地區的習慣用語（例如「伺服器」->「服务器」）

**Version 1.1.8 to 1.1.9**

* Update Readme File.

* 更新「讀我」文件

**Version 1.1.1 to 1.1.7**

* Fix Bugs.

* 修復BUG

**Version 1.1**

* Now you can choose just convert the text that you have select! (If you don't select anything, it will keep convert the whole post.)

* Fix Bugs.

* Update Screenshots.

* Update readme.txt file.

* 現在你可以只轉換你選擇的部分啦！（如果你沒有選擇任何內容，仍然會轉換整篇文章）

* 修復BUG

* 更新屏幕截圖

* 更新README文件

**Version 1.0.1 to 1.0.2**

* Fix Bugs.

* Add Screenshots.

* 修復BUG

* 新增屏幕截圖

**Version 1.0**

* Initial release.

* 首個版本

== Upgrade Notice ==

See Changelog.
