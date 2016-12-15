React.js 官方範例教學中文完整翻譯
http://codingweb.tw/2016/01/17/reactjs-%E5%AE%98%E6%96%B9%E7%AF%84%E4%BE%8B%E6%95%99%E5%AD%B8%E4%B8%AD%E6%96%87%E7%BF%BB%E8%AD%AF/

step-0
建立一個全空的內容，只載入最基本的 react 和 babel

step-1
在 content 中 產生一個
div CommentBox
class 為 commentBox
內容為 Hello, world! I am a CommentBox.

*注意 html 元素取名開頭字母一定要為小寫，而自定義的 react class 開頭取名一定為大寫。

step-1-1
因為使用 babel 所以使用 JSX 語法
可以不用自己寫標籤，完全用動態產生的方式處理

step-2
將 content 中規劃成
- CommentBox
  - CommentList
  - CommentForm
的格式
以加入標籤的方式

step-3
加入屬性設定
- CommentBox
  - CommentList, 提供 資料 給 Comment 做顯示
    - Comment
  - CommentForm

step-4
加入 Markdown (Markdown - wiki)
轉換輸出

step-5
使用 React API 將動態產生的 html 標籤處理成正常 html 輸出

step-6
連結資料模型
將畫面上的資料改由外部資料的方式讀入顯示

step-6-1
將資料來源改為 API

* 因無解析動作，無法正常執行
