<canvas id="custom" class="canvas" data-fragment-url="examples/moon.frag" data-textures="examples/images/moon-texture.jpg" width="350px" height="350px"></canvas>

# The Book of Shaders
[パトリシオ・ゴンザレス・ビボ](http://patriciogonzalezvivo.com/)　著

この本はフラグメントシェーダーについてのガイドブックです。難解で複雑なフラグメントシェーダーの世界を、一歩一歩わかりやすくご案内します。

## 翻訳について

この文書はパトリシオ・ゴンザレス・ビボ（Patricio Gonzalez Vivo）のThe Book of Shaderの日本語訳です。
技術的な内容はできる限り正確に伝えるように心がけていますが、その他の部分では言葉を補ったり簡略化したり、表現を変えている部分もあります。英語が得意な方はぜひ原文もお読みください。
フィードバックには[githubのレポジトリ](https://github.com/patriciogonzalezvivo/thebookofshaders)をご利用ください。

<div class="header">
<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=B5FSVSHGEATCG" style="float: right;"><img src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" alt=""></a>
</div>

## 目次

* [イントロダクション](00/?lan=jp)

* 初めの一歩
    * [シェーダーとは？](01/?lan=jp)
    * [ハロー・ワールド！](02/?lan=jp)
    * [Uniforms（未訳）](03/)
    * [Running your shader（未訳）](04/)

* Algorithmic drawing
    * [Shaping functions（未訳）](05/)
    * [Colors（未訳）](06/)
    * [Shapes（未訳）](07/)
    * [Matrices（未訳）](08/)
    * [Patterns（未訳）](09/)

* Generative designs
    * [Random（未訳）](10/)
    * Noise
    * Fractional brownian motion
    * Fractals

* Image processing:
    * Textures
    * Image operations
    * Kernel convolutions
    * Filters
    * Others effects

* Simulation
    * Pingpong
    * Conway
    * Ripples
    * Water color
    * Reaction diffusion
    * Voronoi

* 3D graphics
    * Lights
    * Normal-maps
    * Bump-maps
    * Ray marching
    * Environmental-maps (spherical and cube)
    * Reflect and refract

* [Appendix:](appendix/) Other ways to use this book
    * [How can I navigate this book offline?](appendix/)
    * [How to run the examples on a RaspberryPi?](appendix/)
    * [How to print this book?](appendix/)

* [Examples Gallery](examples/)

* [Glossary](glossary/)

## 著者について

[パトリシオ・ゴンザレス・ビボ](http://patriciogonzalezvivo.com/)（Patricio Gonzalez Vivo　1982年、アルゼンチン、ブエノスアイレス生） はニューヨーク在住のアーティスト／開発者です。有機的なものと人工的なもの、アナログとデジタル、個人と集団の狭間を探求し、プログラミングコードを表現手段としてより良い共存のあり方を模索しています。

パトリシオは心理療法（psychotherapy）と表現療法（expressive art therapy）に精通しており、パーソンズ美術大学でデザイン&テクノロジーのMFA（Master of Fine Arts - 美術系の修士に相当）を取得しています。現在は[Mapzen](https://mapzen.com/)でグラフィックエンジニアとしてオープンソースのマッピングツールの開発に携わっています。

<div class="header"><a href="https://twitter.com/patriciogv" target="_blank">Twitter</a> - <a href="https://github.com/patriciogonzalezvivo" target="_blank">GitHub</a> - <a href="https://vimeo.com/patriciogv" target="_blank">Vimeo</a> - <a href="https://www.flickr.com/photos/106950246@N06/" target="_blank"> Flickr</a></div>

## 訳者について

[この人](http://www.kynd.info) が翻訳しました。

## 謝辞

妻の[ジェン・ロー](http://www.datatelling.com/)（Jen Lowe）はこの本の編集のために時間を割き、献身的にサポートしてくれました。ありがとう。

インスピレーションとアドバイスを与えてくれた[スコット・マレー](http://alignedleft.com/) （Scott Murray）、日本語訳を担当してくれた[Kynd](https://twitter.com/kyndinfo)、素晴らしいアイデアとコードで貢献してくれた[カリム・ナージ](http://karim.naaji.fr/) （Karim Naaji）にも感謝します。

そして最後に、このプロジェクトを応援し[改善の手助けをしてくれた方々](https://github.com/patriciogonzalezvivo/thebookofshaders/graphs/contributors)、寄付をくださったすべての皆様に感謝を述べたいと思います。

## アップデートのお知らせ

ニュースレターにサインアップするか[Twitter](https://twitter.com/bookofshaders)をフォローしてください。日本語版の更新は[訳者のアカウント](https://twitter.com/kyndinfo)でもお知らせします。


 <form style="border:1px solid #ccc;padding:3px;text-align:center;" action="https://tinyletter.com/thebookofshaders" method="post" target="popupwindow" onsubmit="window.open('https://tinyletter.com/thebookofshaders', 'popupwindow', 'scrollbars=yes,width=800,height=600');return true"><a href="https://tinyletter.com/thebookofshaders"><p><label for="tlemail">メールアドレスを入力してください</label></p></a><p><input type="text" style="width:140px" name="email" id="tlemail" /></p><input type="hidden" value="1" name="embed"/><input type="submit" value="ニュースレターを購読する" /><p><a href="https://tinyletter.com" target="_blank"></a></p></form>
