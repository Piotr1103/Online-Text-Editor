# Online-Text-Editor
這是一個具有多行縮進、反縮進的線上文書編輯器。

整個應用包含4個文件：

1. text.php
  這個應用的入口在text.php,必須要有php環境才能執行。這麼設計是為了要將keys.html透過include()函數引入。
  若想要將text.php改成html也可以，但是keys.html就不能透過include()引入，而是需要將其內容全部直接移植到text.html之中。
  除了keys.html，text.php還需要引入keyboard.js和keyboard.css。
  引入的keys.html最好放置於含有align="center"的div之中，這樣所有按鍵方能置中對齊。

2. keys.html
  keys.html裡面有所有需要的HTML實體按鍵、特殊字母擴充。
  被text.php引入後，網頁的左下角和右下角個會出現一個button，按下後就會出現可拖曳的軟鍵盤。
  HTML實體鍵盤裡的常用元素配有快速鍵：

    單獨實體：
      Alt + b = <br>
      Alt + t = &emsp;
      Alt + n = &nbsp;
      Alt + i =  title=""
      Alt + j =  class=""

    環綴實體：
      Alt + q = <blockquote></blockquote>
      Alt + p = <p></p>
      Alt + u = <ul></ul>
      Alt + o = <ol></ol>
      Alt + l = <li></li>
      Alt + c = <code></code>
      Alt + d = <div></div>
      Alt + f = <font></font>
      Alt + a = <a href=""></a>

  所謂的環綴實體指的是可以先選取字段，然後將其包裹起來的實體元素。
  例如，在textarea中打出：Mary has a little lamb.幾個字。
  如果我想在lamb一詞周圍包上<font></font>，那麼先將lamb選取起來，然後透過軟鍵盤按下Font或者直接按下快速鍵Alt + f，便可將該詞包裹起來：<font>lamb</font>。
  
  多行縮進：
    選取多行然後按下Tab鍵。

  多行反縮進：
    選取多行然後按下Shift + Tab鍵。

  特殊字母沒有搭配快速鍵。

3. keyboard.js
  keyboard.js裡面定義了所有keys.html按鍵所需要的方法以及多行正反縮進的方法。

4. keyboard.css
  定義每個軟鍵盤的位置和樣式。
